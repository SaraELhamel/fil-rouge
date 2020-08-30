<?php
include_once("config.php");
include("process.php");
include("edit.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php
$query="SELECT *FROM books";
$stmt=$conn->prepare($query);
$stmt->execute();
$result=$stmt->get_result();
?>
<div class="container">
<div class="row justify-content-center">
<table class="table">
<thead>
<tr>
<th>id</th>
<th>name</th>
<th>author</th>
<th>description</th>
<!-- <th>image</th> -->
<th colspan="2">action</th>
</tr>
</thead>
<?php
while($row=$result->fetch_assoc()){ ?>
    

<tr>
<td><?= $row['id'];?></td>
<td><?= $row['name'];?></td>
<td><?= $row['author'];?></td>
<td><?=  $row['description'];?></td>
<!-- <td><?=  $row['photo'];?></td> -->
<td>
<a href="book.php?edit=<?php echo $row['id'];?>" class="btn btn-success">Edit</a>
<a href="process.php?delete=<?=$row['id'];?>" class="btn btn-danger">Delete</a>
</td>
</tr>
<?php } ?>
</table>
</div>

<div class="wrapper">
        
    <form method="post" action="process.php">
        <div class="form-group">
    <label >id</label>
<input type="number" name="id" value="<?php echo $id; ?>">
</div>
<div class="form-group">
<label >name</label>
<input type="text" name="name" value="<?= $name; ?>">
</div>
<div class="form-group">
<label >author</label>
<input type="text" name="author" value="<?= $author; ?>">
</div>
<div class="form-group" > 
<label>description</label>
<input type="text" name="description" value="<?= $description; ?>">
</div>
<!-- <div class="form-group" >
<label>photo</label>
<input type="file" name="image">   -->
<div class="form-group">
<input type="submit"  class="btn btn-primary" name="add">
</div>
</div>
    </form>
</body>
</html>