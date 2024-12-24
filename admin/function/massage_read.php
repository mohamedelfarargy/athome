<?php

require "connect.php";

$id=$_POST['id'];

$read_massage="UPDATE massages SET see = 1 WHERE id='$id'";
 $con = $connect->query($read_massage);

 if($con){
    $select_massage="SELECT * FROM massages WHERE see = 0";
    $show=$connect->query($select_massage);
    echo $count =  $show->num_rows;
}