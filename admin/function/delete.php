<?php

require "connect.php";

$id =$_GET['id'];

$delete_users=$connect->query("DELETE FROM users WHERE id ='$id'");

if($delete_users){
    header("location:../users.php");
}