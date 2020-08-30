<?php
include_once("config.php");
include("insert.php");
$update="";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboard.php">ReaderWorld dashboard</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin_login.php">Login</a>
                        <a class="dropdown-item" href="/logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Tables</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Book table
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="far fa-sticky-note"></i></div>
                               Publication table
                            </a>
                            <a class="nav-link" href="comment.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                               comments table
                            </a>
                            <a class="nav-link" href="conta.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                               contact table
                            </a>
                            <div class="sb-sidenav-menu-heading">Forms</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <a class="nav-link" href="books_add_form.php">
                                <div class="sb-nav-link-icon"><i class="fab fa-wpforms"></i></div>
                               book form
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <a class="nav-link" href="publication_add_form.php">
                                <div class="sb-nav-link-icon"><i class="fab fa-wpforms"></i></div>
                               publication form
                            </a>
                            
                                   
                                   
                            <div class="sb-sidenav-menu-heading">Config</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                CRUD operation
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        dashboard admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        
                       
                        <h1 class="mt-4">publication table</h1>
<?php
$query="SELECT *FROM publication";
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
<th>title</th>
<th>publisher</th>
<th>date</th>
<th>content</th>
<th colspan="2">action</th>
</tr>
</thead>
<?php
while($row=$result->fetch_assoc()){ ?>
    

<tr>
<td><?= $row['id'];?></td>
<td><?= $row['title'];?></td>
<td><?= $row['publisher'];?></td>
<td><?=  $row['date'];?></td>
<td><?=  $row['content'];?></td>
<td>
<a href="insert.php?delete=<?=$row['id'];?>" class="btn btn-danger">Delete</a>
</td>
</tr>
<?php } ?>
</table>
</div>


</body>
</html>