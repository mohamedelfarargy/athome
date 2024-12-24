<?php
$page = "users";
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
      <li class="breadcrumb-item active">Users</li>
    </ol>
  </div>


  <?php

  if(!isset($_GET['do'])){
  include "include/users_view.php";
  }elseif($_GET['do'] == "add"){
  include "include/users_add.php";
  }elseif($_GET['do'] == "edit"){
    include "include/users_edit.php";
    }
  ?>
</div>

<?php
include "desgin/footer.php";
?>

