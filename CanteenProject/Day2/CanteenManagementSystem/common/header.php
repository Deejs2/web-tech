<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>
    <!-- Custom styles for this template -->
    <link href="design/css/dashboard.css" rel="stylesheet">
    <link href="design/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php 
echo "<h3 style='text-align:center;'>Aadim Canteen</h3>";
?>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><?php echo "Selected Account: ".$_GET['r']; ?></a>
  
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#"><?php echo "Selected ID: ".$_GET['id']; ?></a>
      <a class="nav-link px-3" href="login.php">Sign out</a>
    </div>
  </div>
</header>