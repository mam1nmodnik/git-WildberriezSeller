<?php
  session_start();
   if ($_SESSION['user']) {
     header('Location: glavnaya/zakazi.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body background="image/Авторизация.png">
<form action="vendor/signip.php" method="post" class="form_auth_block" >
    <div class="form_auth_block_content">
      <p class="form_auth_block_head_text">Авторизация</p>
      
        <div class="login-input-wrapper">
          <label for="login-user">Email</label>
          <input type="text" name="email" placeholder="Введите email" required>
        </div>
        <div class="login-input-wrapper">
          <label for="login-user">Пароль</label>
          <input type="password" name="password" placeholder="Введите пароль" required>
        </div>
        <a href="/glavnaya/zakazi.php"><button class="form_auth_button" type="submit" name="form_auth_submit">Войти</button></a>
        <div class="form_register_recovery">
          <a href="registration.php">Зарегестрироваться</a>
          <a href="vosstanovlenie.php">Забыли логин/пароль</a>
        </div>
      
    </div>
    <?php
    if ($_SESSION['message']) {
       echo  '<p style="border: 3px solid indigo; text-align: center; border-radius: 20px; padding: 10px; width: 300px; margin: auto;margin-top:10px;"> ' . $_SESSION['message'] . '</p>';
     }
        unset($_SESSION['message']);
    ?>
  </form>
</body>
</html>