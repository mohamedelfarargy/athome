<?php
$page = "message";
include "desgin/header.php";
include "desgin/sidebar.php";
?>

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Messages</li>
    </ol>
  </div>

<?php
if(!isset($_GET['do'])){
include "include/massage_view.php";
}

?>




  
<?php
include "desgin/footer.php";
?>

