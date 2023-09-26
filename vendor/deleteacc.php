<?php


require_once 'config/connect.php';

$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `users1` WHERE `id` = '$id'");
//@include('logout.php');
header('Location: ../authorization.php');
