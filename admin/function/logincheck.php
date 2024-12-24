<?php
session_start();
require "connect.php";

$email = $_POST['email'];
$password = $_POST['password'];

$Select_users = $connect->query("SELECT * FROM users WHERE email='$email'");

$row_users = $Select_users->fetch_assoc();
$password_hash = $row_users['password'];

$id = $row_users['id'];
$counter = $Select_users->num_rows;

if(password_verify($password,$password_hash)){

    if($counter > 0){
        $_SESSION['login']= $id;
        header("location:../index.php");
    
    }

}else{
    header("location:../login.php?alert=Email or Password worng");
}