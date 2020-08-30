<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM publication";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<!-- <h1><?php echo $row["id"] ?></h1> -->
<!-- <center><img src="images/5.jpg" alt=""></center> -->
<h3><?php echo $row["title"] ?></h3>
<h4>In: <?php echo $row["date"] ?></h4>
<h5>Posted by: <?php echo $row["publisher"] ?></h5>
<p><?php echo $row["content"] ?></p>



<!-- <button onclick="myFunction()" id="myBtn">Read more</button> -->
<?php
  }
} else {
  echo "0 results";
}

$conn->close();
?>