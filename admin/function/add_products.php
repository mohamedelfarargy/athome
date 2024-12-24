<?php
require "connect.php";

if(!isset($_POST['submit'])){
    header("location:../produts.php");
    exit();
 }
 
 $name = $_POST['name'];
 $price = $_POST['price'];
 $descr = $_POST['descr'];
 $sale = $_POST['sale'];
 $seller = $_POST['seller'];
 $quant = $_POST['quant'];
 $avalble = $_POST['avalble'];
 $category = $_POST['category'];

 
 $arr_img = [];
 $count = count($_FILES['imgs']['name']);
for($i =0; $i < $count; $i++){

    if($_FILES['imgs']['error'][$i] == 0){
        $img= $_FILES['imgs']['name'][$i];
        $extention = array("jpg","png","jfif","jpeg","gif","webp");
        $ext = pathinfo($img,PATHINFO_EXTENSION);

        if(in_array($ext,$extention) && $_FILES['imgs']['size'][$i] < 2000000){
            $new_name = md5(uniqid()).'.'.$ext;
            move_uploaded_file($_FILES['imgs']['tmp_name'][$i],"../images/".$new_name);
            $arr_img[]=$new_name;
        }
    }
}
$stringImg = implode('/',$arr_img);
// echo $name . $price. $desc. $sale. $seller.$quan. $aval.$img_str ;/

$insert_product = $connect->query("INSERT INTO product(name,price,images,description,sale,saller,quan,avalable,cat_id)VALUES('$name','$price','$stringImg','$descr','$sale','$seller','$quant','$avalble','$category')");


header("location:../products.php");



