<?php
session_start();
require "connect.php";

$email = $_POST['email'];
$password = $_POST['password'];

$Select_users = "SELECT * FROM client WHERE email='$email'";
$result = $connect->query($Select_users);

$row_users = $result -> fetch_assoc();

$password_hash = $row_users['password'];

$id = $row_users['id'];
$counter = $result ->num_rows;

if(password_verify($password,$password_hash)){

    if($counter > 0){
        $_SESSION['client']= $id;
        header("location:../../index.php");
    }

}else{
    header("location:../../08-login.php?alert=Email or Password worng");
}