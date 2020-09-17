<?php
session_start();
$conn = new mysqli("localhost","root","","bookstore");
$msg="";
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_type=$_POST['user_type'];
    $sql="SELECT *FROM user WHERE username=? AND email=? AND password=? AND user_type=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("ssss",$username,$email,$password,$user_type);
    $stmt->execute();
    $result= $stmt->get_result();
    $row=$result->fetch_assoc();

    session_regenerate_id();
    $_SESSION['username']=$row['username'];
    $_SESSION['role']=$row['user_type'];
    session_write_close();
    if($result->num_rows==1 && $_SESSION['role']=="user"){
        header("location:home.php");
    }
    else if($result->num_rows==1 && $_SESSION['role']=="admin"){
        header("location:admin/dashboard.php");
    }
}

      
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>adminlogin</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">ReaderWorld</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="blog.php">Blog</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="register.php">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
  </li>
  <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
</ul>
</nav>
    <div class="wrapper">
        <h2>admin login</h2>
    <form method="post">
        <div class="form-group">
    <label >username</label>
<input type="text" name="username" placeholder="enter your name">
</div>
<div class="form-group">
<label >email</label>
<input type="text" name="email" placeholder="enter your email">
</div>
<div class="form-group" > 
<label>password</label>
<input type="text" name="password" placeholder="enter your password">
</div>
<div class="form-group" >
<select name="user_type" >
<option value="admin">admin</option>
<option value="user">user</option>
</select>
</div>
<div class="form-group">
<input type="submit"  class="btn btn-success" name="login" value="login">
</div>
    </form>
    </div>
</body>
</html>
