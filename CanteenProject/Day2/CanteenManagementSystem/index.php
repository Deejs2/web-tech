
<?php include 'common/header.php'; ?>

<div class="container-fluid">
  <div class="row">
    <?php
    if ($_GET['r']=="guest"&&$_GET['id']=="guest") {
        include 'common/public-sidebar.php'; 
    }else{
        include 'common/sidebar.php'; 
    }
    ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php 

    $page = isset($_GET['page']) ? $_GET['page'] : '';
switch ($page) {
    case 'add':
        include 'admin/add.php';
        break;
    case 'view':
        include 'public/view.php';
        break;
    default:
        include 'dashboard.php';
        break;
}
?>
    </main>
  </div>
</div>

<?php include 'common/footer.php'; ?>

