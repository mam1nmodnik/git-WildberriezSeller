<?php
require_once 'config/connect.php';
if ($_SESSION['user']) {
      header('Location: ../glavnaya/profil.php');
     }

if (!empty($_FILES['avatar'])) {
     $avatar =  $_FILES['avatar'];
     $name = $avatar['name'];
     $pathFile = 'uploads/'. time()  . $name;
     if (!move_uploaded_file($avatar['tmp_name'], '../'.  $pathFile)) {
         echo 'файл...';
     }
     
 }
     header('Location: ../glavnaya/profil.php');

?>

