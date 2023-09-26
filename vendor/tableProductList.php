<?php

require_once 'config/connect.php';
session_start();
     if (!$_SESSION['user']) {
     header('Location: ../authorization.php');
    }
$product = mysqli_query($connect, "SELECT * FROM `productList2`");
$product = mysqli_fetch_all($product);

?>

    
    
