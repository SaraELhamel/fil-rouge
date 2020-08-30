<?php
include("config.php");
if(isset($_POST['add'])){
    // $id=$_POST['id'];
    $title=$_POST['title'];
    $publisher=$_POST['publisher'];
    $date=$_POST['date'];
    $content=$_POST['content'];
    $query="INSERT INTO publication(title,publisher,date,content) VALUES(?,?,?,?)";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("ssss",$title,$publisher,$date,$content);
    $stmt->execute();
    header("location:publication.php");
}

    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $query="DELETE FROM publication WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        header("location:publication.php");
        
    }
        ?>