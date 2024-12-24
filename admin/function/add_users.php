<?php
require "connect.php";

if(!isset($_POST['submit'])){
header("../users.php");
exit();
}
$name= $_POST['name'];
$email= $_POST['email'];
$gender= $_POST['gender'];
$address= $_POST['address'];
$phone= $_POST['phone'];
$priv= $_POST['priv'];
$password= $_POST['password'];

$password_hash = password_hash($password,PASSWORD_DEFAULT);

$select_users=$connect->query("SELECT * FROM users WHERE email='$email'");
$email_d =$select_users->num_rows;

if($email_d > 0){
   header("location:../users.php?do=add&alert='Email exit'");
}else{
    $insert_users = $connect->query("INSERT INTO users(name,email,password,address,Phone,priv,gender)VALUES('$name','$email','$password_hash','$address','$phone','$priv','$gender')");
    header("location:../users.php");
}




