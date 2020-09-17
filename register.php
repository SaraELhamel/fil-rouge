<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet"  href="register.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <a class="nav-link" href="admin_login.php">admin_Login</a>
  </li>
</ul>
</nav>
<br>
<br>
  <div class="wrapper">
  	<h2>Register</h2>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="form-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="form-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="form-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="form-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="form-group">
  	  <button type="submit" class="btn btn-success" name="reg_user">Sign Up</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  </div>
</body>
</html>
 

