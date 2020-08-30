<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blogstyle.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="main.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Blog</title>
</head>
<body>
 <div class="bg-img">
 <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Blog</a>
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
<br>
<br>
<h1>ALL POSTS</h1>
<br>
<br>

<?php
include_once("get.php");
?>
 </div>



<!-- Footer -->
<footer class="footer-distributed">
 
 <div class="footer-left">

 <h4>Reader<span>World</span></h4>

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


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
</body>
</html>
