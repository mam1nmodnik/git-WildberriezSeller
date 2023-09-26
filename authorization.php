<?php
  session_start();
   if ($_SESSION['user']) {
     header('Location: glavnaya/profil.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Авторизация</title>
</head>
<body background="image/Авторизация.png">
<form action="vendor/signip.php" method="post" class="form_auth_block" >
    <div class="form_auth_block_content">
      <p class="form_auth_block_head_text">Авторизация</p>
      
        <div class="login-input-wrapper">
          <label for="login-user">Логин</label>
          <input type="text" name="login" placeholder="Введите login" required>
        </div>
        <div class="login-input-wrapper">
          <label for="login-user">Пароль</label>
          <input type="password" name="password" placeholder="Введите пароль" required>
        </div>
        <button class="form_auth_button" type="submit" name="form_auth_submit">Войти</button>
        <div class="form_register_recovery">
          <a href="registration.php">Зарегестрироваться</a>
          <a href="vosstanovlenie.php">Забыли логин/пароль</a>
        </div>
      
    </div>
    <?php
    if ($_SESSION['message']) {
       echo  '<p class="message"> ' . $_SESSION['message'] . '</p>';
     }
        unset($_SESSION['message']);
    ?>
  </form>
</body>
</html>