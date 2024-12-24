<?php
require_once "connect.php";

$inp_s = $_POST['inp_search'];

if($inp_s  == ""){

    echo "";
}else{

    $Select_s = "SELECT * FROM product WHERE name LIKE '%$inp_s%'";
    $result = $connect->query($Select_s);
    $count = $result -> num_rows;
    if($count == 0){

        echo"Not Found";
    }else{
        foreach($result as $row_pro){
            echo"<li>".$row_pro['name']."</li>";
        }
    }
}
