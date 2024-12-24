<?php
require "connect.php";

$id = $_POST['id'];


$name = $_POST['name'];
$price = $_POST['price'];
$descr = $_POST['descr'];
$sale = $_POST['sale'];
$seller = $_POST['seller'];
$quant = $_POST['quant'];
$avalble = $_POST['avalble'];
$Catg = $_POST['category'];

$update_product = $connect->query("UPDATE product SET name='',name='$name',	price='$price',description='$descr',sale='$sale',saller='$seller',quan='$quant',avalable='$avalble',cat_id='$Catg' WHERE id = '$id'");

header("location:../products.php");