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

$sql ="SELECT name, author,description
FROM books
WHERE name='La clé du bonheur' OR author='By Daniell Steel'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>

<!-- <h1><?php echo $row["id"] ?></h1> -->
<h3>Book name:<?php echo $row["name"] ?></h3>
<h4>Writer:<?php echo $row["author"] ?></h4>
<h3>About the book:</h3>
<p><?php echo $row["description"] ?></p>

<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>