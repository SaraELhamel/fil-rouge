<?php
include_once("admin/config.php");
require("contact_config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contact</title>
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
    <a class="nav-link" href="#">Contact</a>
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
<h2>CONTACT US</h2>
</div>
<div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d215469.97973470672!2d-9.066171359329715!3d32.453470630802386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1595611831089!5m2!1sfr!2sma" width="1800" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<br>
<h3>Get In Touch</h3>
<div class="cont">
<div class="container1">
  <form action="contact_config.php" method="POST">
    <label > Name</label>
    <input type="text"  name="name" placeholder="Your name.." required>
    <label >Email</label>
    <input type="text"  name="email" placeholder="Your email.." required>
    <label>Subject</label>
    <textarea name="subject" placeholder="Write something.." style="height:200px" required></textarea>
    <input type="submit"  name="submit">

  </form>

</div>
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


</body>
</html>