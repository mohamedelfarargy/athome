<?php
require "connect.php";

if($_SERVER['REQUEST_METHOD'] =='POST'){

        $fullname = $_POST['fullname'];
        $email    = $_POST['email'];
        $subject  = $_POST['subject'];
        $message  = $_POST['message'];

        $insert_massages = $connect->query("INSERT INTO massages(fullname,email,subject,massage)VALUES('$fullname','$email','$subject','$message')");
        if($insert_massages){

            echo "<div class='alert alert-success'>
            Massage Send
            </div>";
       }  
}
