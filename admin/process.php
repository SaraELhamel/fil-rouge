<?php
include("config.php");
$name="";
$description="";
$author="";
$query="";
if(isset($_POST['add'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $author=$_POST['author'];
    $description=$_POST['description'];
    // $photo=$_FILES['image'] ['name'];
    // $upload="uploads/".$photo;
    $query="INSERT INTO books(id,name,author,description) VALUES(?,?,?,?)";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("ssss",$id,$name,$author,$description);
    $stmt->execute();
    // move_uploaded_file($_FILES['image']['tmp_name'],$upload);
    header("location:books_add_form.php");
}
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $query="DELETE FROM books WHERE id=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    header("location:dashboard.php");
    
}
        ?>