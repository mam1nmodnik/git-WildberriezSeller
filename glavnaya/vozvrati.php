<?php
    session_start();
     if (!$_SESSION['user']) {
     header('Location: ../authorization.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
    <title>Возвраты</title>
</head>
<body>
    <div class="title_profile_navbar_block">
        <div class="title_block">
            <h1>WILDBERRIES </h1>
            <p>seller</p>
        </div>
        <div class="profile_block">
            <img src="../uploads/noavatars.jpg" alt="">
            <p><?= $_SESSION['user']['full_name']?></p>
            <hr>
        </div>
            
        <div class="navbar_block"> 
            <ul>
                <li><a href="zakazi.php?id=<?= $_SESSION['user']['id']?>"><button class="navbar_button">Заказы клиентов</button></a></li>
                <li><a href="spisok.php?id=<?= $_SESSION['user']['id']?>"><button class="navbar_button">Список товара на складе</button></li>
                <li><button class="button1">Возвраты<hr></button></li>
            </ul>     
        </div>  
        
    </div>
    <div class="header_block">
                <div class="search">
                    <button class="icon_settings "></button>
                    <div class="settings_focus">
                        <ul>
                            <a href="profil.php?id=<?= $_SESSION['user']['id']?>" style="text-decoration: none;"><li>Профиль</li></a>
                            <a href="../vendor/logout.php?id=<?= $_SESSION['user']['id']?>" style="text-decoration: none;"><li> Выход</li></a>
                        </ul>
                    </div>
                </div> 
            </div>
            <div class="main_table">
        <table class="table">
            <thead>
                <tr class="table-line-1">
                    <th>Дата возврата</th>
                    <th>Номер товара</th>
                    <th>Цвет</th>
                    <th>Наименование товара</th>
                    <th>Количество</th>
                    <th>Адрес отправителя</th>
                    <th>Причина возврата</th>
                </tr>
                <tr>
                    <th>25.11.2022</th>
                    <th>59674379</th>
                    <th>темно-серый</th>
                    <th>Джинсы / Мужские джинсы / Джинсы бананы</th>
                    <th>2</th>
                    <th>г.Казань ул. Гагарина 77А</th>
                    <th>Брак</th>
                </tr>
                <tr>
                    <th>25.11.2022</th>
                    <th>59674379</th>
                    <th>темно-серый</th>
                    <th>Джинсы / Мужские джинсы / Джинсы бананы</th>
                    <th>2</th>
                    <th>г.Казань ул. Гагарина 77А</th>
                    <th>Брак</th>
                </tr>
               <tr>
                    <th>25.11.2022</th>
                    <th>59674379</th>
                    <th>темно-серый</th>
                    <th>Джинсы / Мужские джинсы / Джинсы бананы</th>
                    <th>2</th>
                    <th>г.Казань ул. Гагарина 77А</th>
                    <th>Брак</th>
                </tr>
               <tr>
                    <th>25.11.2022</th>
                    <th>59674379</th>
                    <th>темно-серый</th>
                    <th>Джинсы / Мужские джинсы / Джинсы бананы</th>
                    <th>2</th>
                    <th>г.Казань ул. Гагарина 77А</th>
                    <th>Брак</th>
                </tr>
               <tr>
                    <th>25.11.2022</th>
                    <th>59674379</th>
                    <th>темно-серый</th>
                    <th>Джинсы / Мужские джинсы / Джинсы бананы</th>
                    <th>2</th>
                    <th>г.Казань ул. Гагарина 77А</th>
                    <th>Брак</th>
                </tr>
              <tr>
                    <th>25.11.2022</th>
                    <th>59674379</th>
                    <th>темно-серый</th>
                    <th>Джинсы / Мужские джинсы / Джинсы бананы</th>
                    <th>2</th>
                    <th>г.Казань ул. Гагарина 77А</th>
                    <th>Брак</th>
                </tr>
            </thead>
        </table>
</body>
</html>