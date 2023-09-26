<?php 

    @include('../vendor/config/connect.php'); // подключение бд
    $email = $_POST['mail'];
    $id = $_POST['id'];
    
    if(preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)){
    $connect -> query(" UPDATE `users1` SET `email` = '$email' WHERE `id` = '$id';");
     session_start();
        $_SESSION['user']['email'] = $email ;
        echo json_encode($_SESSION['user']['email']);
    }else{
        $_SESSION['message'] = 'Некорректный email!!';
        session_start();
        echo json_encode($_SESSION['user']['email']);
       
    }
    
?>
