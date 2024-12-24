<?php
require "connect.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$priv = $_POST['priv'];

$update_users= $connect->query("UPDATE users SET name='$name', email='$email', address='$address', phone='$phone', priv='$priv',gender='$gender' WHERE id='$id'");

if($update_users){
    header("location:../users.php");
}