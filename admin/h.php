<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "book store");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$author = mysqli_real_escape_string($link, $_REQUEST['author']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);

// $photo = mysqli_real_escape_string($link, $_REQUEST['photo']);
// Attempt insert query execution
$sql = "INSERT INTO books (name, author, description) VALUES ('$name', '$author', '$description')";
if(mysqli_query($link, $sql)){
    header("location:book.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>