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
  <link rel="stylesheet" href="css/style2.css">
  <title>Регистрация</title>
</head>

<body background="image/Авторизация.png">
<form action="vendor/signup.php" method="post" enctype="multipart/form-data" class="form_auth_block">
    <div class="form_auth_block_content" > 
      <div class="container_reg">
         <a href="authorization.php"> <img src="image/arrow.png" alt=""></a> 
        <div>
          <p class="form_auth_block_head_text">Регистрация</p>
        </div> 
          <div class="form_div3_reg">
          </div>
      </div> 
      <div class="login-input-wrapper">
        <label for="login-user">Имя пользователя</label>
          <input class="input_ds" name="full_name" type="text" placeholder="Введите свое полное имя">
          <label for="login-user">Логин</label>
          <input class="input_ds" name="login" type="text"  placeholder="Введите login" required>
          <label for="login-user">Email</label>
          <input class="input_ds" name="email" type="text"  placeholder="Введите email" required>
          <label for="login-user">Пароль</label>
          <input class="input_ds" type="password" name="password" placeholder="Введите пароль" required>
          <input class="input_ds" type="password" name="password_confirm" placeholder="Подтвердите пароль" required>


      </div>
      <a href="/authorization.php"><button class="form_auth_button" type="submit" name="form_auth_submit">Зарегестрироваться</button></a>
      <div class="form_recovery">
        <a href="/vosstanovlenie.php">Забыли логин/пароль</a>
      </div>
    </div>
    <?php
    if ($_SESSION['message']) {
       echo  '<p style="border: 3px solid indigo; text-align: center; border-radius: 20px; padding: 10px; margin: 10px 0 0 0;" > ' . $_SESSION['message'] . '</p>';
     }
        unset($_SESSION['message']);
    ?>

  </form>
    
</body>
</html>