<?php


@include('config/connect.php');

$id = $_GET['id'];
//$idButton = $_POST['idButton'];
//if($id == $idButton){
mysqli_query($connect, "DELETE FROM `productList2` WHERE `productList2`.`id` = '$id'");
//} 
     
//}


//session_start();
//echo json_encode($id);

header('Location: ../glavnaya/spisok.php');
