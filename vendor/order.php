<?php
require_once 'config/connect.php';
session_start();
     if (!$_SESSION['user']) {
     header('Location: ../authorization.php');
    }
   
$order = mysqli_query($connect, "SELECT * FROM `newOrder`");
$order = mysqli_fetch_all($order);

    
  