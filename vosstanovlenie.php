<?php

  session_start();
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
    <title>Восстановление пароля</title>
</head>
<body background="image/Авторизация.png">
  
      
    <form action="vendor/updatePassword.php" class="form_auth_block" method="post" > 
    <div style="display:flex;flex-wrap: nowrap;align-items: center;justify-content: space-evenly; margin-top: 10px;">
    <a href="authorization.php"><img style="width:40px;"src="image/arrow.png"></a>
          <p class="form_auth_block_head_text">Смена пароля</p>
          <div style="width:50px; height:50px;" ></div>
    </div>
          <input type="text" name="email" id="input" placeholder="Введите email" required>
            <button class="form_auth_button" type="submit" id="button">Отправить на почту</button>
   
      <?php
        if ($_SESSION['message']) {
       echo  '<p style="border: 3px solid indigo; text-align: center; border-radius: 20px; padding: 10px; position="absolute";"> ' . $_SESSION['message'] . '</p>';
     }
        unset($_SESSION['message']);
    ?>    
    </form>
 
    
</body>
</html>