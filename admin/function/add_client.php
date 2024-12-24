<?php

require "connect.php";


$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$password_hash = password_hash($password,PASSWORD_DEFAULT);


$insert_client = $connect->query("INSERT INTO client(fullname,email,phone,password)VALUES('$fullname','$email','$phone','$password_hash')");

if($insert_client){
header("location:../../08-login.php");
}
