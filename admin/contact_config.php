<?php
require("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $sql="INSERT INTO contact(name,email,subject) VALUES('$name','$email','$subject')";
    $result = $conn->query($sql);
    if($result){  // returned TRUE, e.g. in case of a DELETE sql  
        echo "SQL succeeded"; 
    } else { // returned FALSE
        echo "Error: " . mysqli_error($dbs);
    } 
    header("location:contact.php");
}
?>