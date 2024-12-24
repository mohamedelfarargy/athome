<?php
$page = "product";
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
      <li class="breadcrumb-item active">Products</li>
    </ol>
  </div>
  <?php

if(!isset($_GET['do'])){
include "include/product_view.php";
}elseif($_GET['do'] == "add"){
  include "include/product_add.php";
}elseif($_GET['do'] == "edit"){
  include "include/product_edit.php";
}

?>

<?php

include "desgin/footer.php";

?>