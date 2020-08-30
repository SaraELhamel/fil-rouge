<?php
include_once("admin/config.php");
require("admin/action.php");
?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homestyle.css">
    <!-- <script src="jquery-3.5.1.min.js"></script> -->
    <script src="rating.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Home</title>
</head>


<body>
<div class="bg-img">
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
</div>
<!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" >
  <div class="container" >
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: red;">
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
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
    </div>
  </div>
</nav> -->
<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="pickgradient" style="background:linear-gradient(white, lightblue)">
    <img src="images/7.jpg" class="d-block w-100 " >
</div>
      
      <div class="carousel-caption d-none d-md-block ">
        <h5 >George R.R. Martin</h5>
        <p>“A reader lives a thousand lives before he dies . . . The man who never reads lives only one.”</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/6.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h5 >Lemony Snicket</h5>
        <p>“Never trust anyone who has not brought a book with them.”</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/6.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h5 >Lemony Snicket</h5>
        <p>“Never trust anyone who has not brought a book with them.”</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/7.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h5>Jim Rohn</h5>
        <p>“Reading is essential for those who seek to rise above the ordinary.”</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
<h1>Our Books</h1>
<h2>Most popular</h2>
<center>
  <br>
<div class="row">
  <div class="column">
   <a href="bouq.php"><div class="card"><img class="card-img-top" src="images/ps.png" ></a></div>
          <h8 class="title">PS I still love you</h8>
          <br>
    <h9 class="card-title">By Jenny Han</h9>
  </div>
  <div class="column">
  <a href="bouq1.php"> <div class="card"><img class="card-img-top" src="images/aga.png" ></a></div>
    <h8 class="title">Témoin muet</h8>
    <br>
    <h9 class="card-title">By Agatha Christie</h9>
   
  </div>
  <div class="column">
  <a href="bouq2.php"> <div class="card"><img class="card-img-top" src="images/novi.png" ></a></div>
    <h8 class="title">من اجل الشيطان</h8>
    <br>
    <h9 class="card-title">لعمرو الجندي</h9>
    
  </div>
  <div class="column">
  <a href="bouq3.php"> <div class="card"><img class="card-img-top" src="images/d.png" ></a></div>
    <h8 class="title">La clé du bonheur</h8>
    <br>
    <h9 class="card-title">By Daniell Steel</h9>
    
  </div>
</div>
</center>
<br>
<br>
<h2>Recently added</h2>
<br>

<center>
<div class="row">
  <div class="column">
   <a href="bouq4.php"><div class="card"><img class="card-img-top" src="images/g.png" ></a></div>
          <h8 class="title">Pas de lettre pour le colonel</h8>
          <br>
    <h9 class="card-title">By Gabriel Garcia Marquez</h9>
  </div>
  <div class="column">
  <a href="bouq5.php"> <div class="card"><img class="card-img-top" src="images/n.png" ></a></div>
    <h8 class="title">All the light that we cannot  see</h8>
    <br>
    <h9 class="card-title">By Anthony Doerr</h9>
   
  </div>
  <div class="column">
  <a href="bouq6.php"> <div class="card"><img class="card-img-top" src="images/jaaz.png" ></a></div>
    <h8 class="title">Shutter Island</h8>
    <br>
    <h9 class="card-title">By Dennis Lehane</h9>
    
  </div>
  <div class="column">
  <a href="bouq7.php"> <div class="card"><img class="card-img-top" src="images/ali.png" ></a></div>
    <h8 class="title">حياةالصبايا والنساء</h8>
    <br>
    <h9 class="card-title">لاليس مونرو</h9>
    
  </div>
</div>
</center>       
<!-- Footer -->
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
</div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>