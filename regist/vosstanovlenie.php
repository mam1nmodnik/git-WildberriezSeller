<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Document</title>
</head>
<body background="image/Авторизация.png">
  <div class="form_auth_block">
      
    <div class="form_auth_block_content"> 
    <div style="display:flex;flex-wrap: nowrap;align-items: center;justify-content: space-evenly;">
    <a href="authorization.php"><img style="width:40px;"src="image/arrow.png"></a>
          <p class="form_auth_block_head_text">Смена пароля</p>
          <div style="width:50px; height:50px;" ></div>
    </div>
          <input type="text" name="username" placeholder="Введите логин" required>
          <input type="password" name="password" placeholder="Введите новый пароль" required>
         <a href="authorization.php"><button class="form_auth_button" type="submit" name="form_auth_submit">Изменить пароль</button></a>
    </div>
  </div>
</body>
</html>