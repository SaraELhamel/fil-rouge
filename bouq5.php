<?php
include_once("admin/config.php");

require("admin/action.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="rating.js"></script>
    <link rel="stylesheet" href="bouq.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
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
<div>
   <img src="images/n.png" >
    <?php
include_once("get6.php");
?>
    
   
<div class="stars" data-rating="3">
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
    </div>
    <div class="text-center"><button class="btn btn-success" onclick="myFunction()">upload</button>
    </div>
    <br>
    <div class="comment">
            <h5>comment section</h5>
          <form action="home.php" method="POST">
          <input type="text" name="name" placeholder="enter your name">
          <br>
          <br>
          <textarea name="comment" placeholder="comment here"cols="30" rows="5" ></textarea>
          <br>
          <br>
          <div><input type="submit" name="submit" class="btn btn-success" value="Post Comment"></div>
          </form>
          </div>
          </div>
         
    </div>
    <!-- <div class="main"> FOOTER DESIGN IN HTML CSS</div> -->
		<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Reader<span>World</span></h3>
 
		<p class="footer-links">
		<a href="home.php">Home</a>
	·
		<a href="blog.php">Blog</a>
	·
  <a href="contact.php">Contact</a>	·
  
		<a href="register.php">Register</a>
	·
		<a href="login.php">Login</a>
	·
	<a href="logout.php">Logout</a>
		</p>
 
		<p class="footer-company-name">ReaderWorld &copy; 2020</p>
		</div>
 
		<div class="footer-center">
 
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>21 Revolution Street</span> Safi, Morocco</p>
		</div>
 
		<div>
		<i class="fa fa-phone"></i>
		<p>+1 555 123456</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:support@company.com">contact@ReaderWorld.com</a></p>
		</div>
 
		</div>
 
		<div class="footer-right">
 
		<p class="footer-company-about">
		<span>About the website</span>
    Reader world is a book and blog website<br> where the fans of both reading and writing<br> meet to exchange and express their love of literature		</p>
 
		<div class="footer-icons">
 
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
		<a href="#"><i class="fa fa-github"></i></a>
 
		</div>
 
		</div>
 
		</footer>
    <script>
function myFunction() {
  location.replace("https://www.pdfdrive.com/the-light-we-cannot-see-a-novel-d53766167.html")
}
</script>
</body>
</html>
