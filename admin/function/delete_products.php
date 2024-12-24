<?php
require "connect.php";

$id = $_GET['id'];
$select_product = $connect->query("SELECT * FROM product WHERE id='$id'");
$Del_pro = $select_product->fetch_assoc();
$img = explode('/',$Del_pro['images']);
for($i=0; $i < count($img); $i++){
    unlink("../images/".$img[$i]);
}

$Delete_product = $connect->query("DELETE FROM product WHERE id='$id'");

header("location:../products.php");