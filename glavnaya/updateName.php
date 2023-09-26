<?php 

    //require_once 'config/connect.php';
    @include('../vendor/config/connect.php'); // подключение бд
    $full_name = $_POST['name'];
    $id = $_POST['id'];
   //$id1 = $_SESSION['user']['id'];
    //mysqli_query($connect,"UPDATE `users1` SET `full_name` = '$full_name' WHERE `id` = '$id1'");
    $connect -> query(" UPDATE `users1` SET `full_name` = '$full_name' WHERE `id` = '$id';");
    
  
   //session_reset();
   
   	
   //unset($_SESSION['user']['full_name']);
    session_start();
    $_SESSION['user']['full_name'] = $full_name ;
   // header('Location: ../glavnaya/profil.php');

    echo json_encode($_SESSION['user']['full_name']);
?>
