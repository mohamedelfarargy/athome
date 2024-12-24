<?php
session_start();
unset($_SESSION["client"]);
header("location:../../08-login.php");
