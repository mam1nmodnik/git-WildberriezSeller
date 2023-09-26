<?php
    session_start();
     if (!$_SESSION['user']) {
     header('Location: ../authorization.php');
    }
    include('../vendor/order.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
   <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
    <title>Заказы</title>
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
                        <li><button class="button1">Заказы клиентов<hr></button></li>
                        <li><a href="spisok.php?id=<?= $_SESSION['user']['id']?>"><button class="navbar_button">Список товара на складе</button></a></li>
                        <li><a href="vozvrati.php?id=<?= $_SESSION['user']['id']?>"><button class="navbar_button">Возвраты</button></a></li>
                    </ul>     
                </div>  
                
            </div>
            <div class="header_block">
                <div class="search">
                    <button class="icon_settings "></button>
                    <div class="settings_focus">
                        <ul>
                            <a href="profil.php?id=<?= $_SESSION['user']['id']?>" style="text-decoration: none;"><li>Профиль</li></a>
                            <a href="../vendor/logout.php?id=<?= $_SESSION['user']['id']?>" style="text-decoration:none;"><li> Выход</li></a>
                        </ul>
                    </div>
                </div> 
            </div>
            <header>
                <div class="title_block1">
                    <h1>WILDBERRIES</h1>
                    <p>seller</p>
                </div>
               <div class="burger-menu">
          <a href="" class="burger-menu_button">
            <spun class="burger-menu_lines"></spun>
          </a>
          <nav class="burger-menu_nav">
            <a href="#" class="burger-menu_link ">Заказы</a>
            <a href="spisok.php" class="burger-menu_link">Список товара на складе</a>
            <a href="vozvrati.php" class="burger-menu_link">Возвраты</a>
            <a href="profil.php" class="burger-menu_link">Профиль</a>
          </nav>
          <div class="burger-menu_overlay"></div>
        </div>
            </header>
            <div class="div"></div>
            <!-- <div class="search-table">
                <form action="../vendor/orderfilt.php" method="get">
                <div class="sort_div">
                    <p style="font-size:20px; margin-top:0;">Сортировка по адресу</p>
                    <input type="text" name="mySearch" id="mySearch" onkeyup="myFunction()" placeholder="Сортировка по адресу" >
                </div>
                    
                </form>
            </div> -->
            <div class="order_block" id="order">
                   <?php
                   
                   
                include('../vendor/order.php');
                
                foreach ($order as $order){
                    
                ?>
                <div class="order" id="order1"  data-id="<?= $order[0]?>" >
                   <div id='personal-pics'>
                        <img src="//basket-03.wb.ru/vol345/part34564/34564738/images/c246x328/1.jpg" class='round'>
                        <img src='//basket-03.wb.ru/vol345/part34564/34564738/images/big/3.jpg' class='round'>
                        <img src='//basket-03.wb.ru/vol345/part34564/34564738/images/big/4.jpg' class='round'>
                        <img src='//basket-03.wb.ru/vol345/part34564/34564738/images/big/5.jpg' class='round'>
                        <img src='//basket-03.wb.ru/vol345/part34564/34564738/images/big/6.jpg' class='round'>
                        <img src='//basket-03.wb.ru/vol345/part34564/34564738/images/big/7.jpg' class='round'>
                    </div>
                    <div class="t4" id="order2"  >
                        <h1><?= $order[1]?></h1>
                        <p>Артикул: 551619981</p>
                        <table style="display: flex; align-items: stretch;" id="order3" data-id="<?= $order[0]?>" >
                            <thead style="display: flex;flex-direction: column;justify-content: space-evenly;align-items: flex-start;">
                               <tr>
                                    <td>Размер:</td>
                               </tr> 
                                <tr>
                                    <td>Кол.во:</td>
                               </tr> 
                                <tr>
                                    <td>Цвет:</td>
                               </tr> 
                                <tr>
                                    <td>Адрес доставки:</td>
                               </tr> 
                                <tr>
                                     <td>Статус оплаты:</td>
                               </tr> 
                                <tr>
                                    <td>Дата:</td>
                               </tr> 
                            </thead>  
                            <tbody style="display: flex;flex-direction: column;justify-content: space-around;align-items: flex-start;" id="order4" >
                                <tr>
                                    <td><?= $order[2]?></td>
                                </tr>
                                <tr>
                                    <td><?= $order[3]?></td>
                                </tr>
                                <tr>
                                    <td><?= $order[4]?></td>
                                </tr>
                                <tr>
                                    <td><?= $order[5]?></td>
                                </tr>
                                <tr>
                                    <td>Оплачен</td>
                                </tr>
                                <tr>
                                    <td><?= $order[6]?></td>
                                </tr>
                            </tbody>
                        </table>
                   </div>
                </div>
                <?php
                }
                ?>
               <div class="update_button">
                    <button>Обновление заказов</button>
                </div>
            </div>

            <script>
                
                   
            function burgerMenu(selector) {
                  let menu = $(selector);
                  let button = menu.find('.burger-menu_button', '.burger-menu_lines');
                  let links = menu.find('.burger-menu_link');
                  let overlay = menu.find('.burger-menu_overlay');
                  
                  button.on('click', (e) => {
                    e.preventDefault();
                    toggleMenu();
                  });
                  
                  links.on('click', () => toggleMenu());
                  overlay.on('click', () => toggleMenu());
                  
                  function toggleMenu(){
                    menu.toggleClass('burger-menu_active');
                    
                    if (menu.hasClass('burger-menu_active')) {
                      $('body').css('overlow', 'hidden');
                    } else {
                      $('body').css('overlow', 'visible');
                    }
                  }
                }
                
                burgerMenu('.burger-menu');
                
                function myFunction() {
                      // Объявлять переменные
                      var input, filter, ul, li, a, i;
                      input = document.getElementById("mySearch");
                      filter = input.value.toUpperCase();
                      ul = document.getElementById("order");
                      div = document.getElementById("order1");
                      div2 = document.getElementById("order2");
                      table = document.getElementById("order3").dataset.id;
                      tbody = document.getElementById("order4");
                      li = div.getElementsByTagName("tr");
                      
                    
                        console.log(table);
                      // Выполните цикл по всем элементам списка и скройте те, которые не соответствуют запросу поиска
                      for (i = 0; i < li.length; i++) {
                        a = li[i].getElementsByTagName("td")[0];
                        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                          div.style.display = "";
                        } else {
                          div.style.display = "none";
                        }
                      }
                    }
                    
                    
                    
                         function tableSearch() {
                            var phrase = document.getElementById('search');
                            var table = document.getElementById('table');
                            
                            var div = document.getElementById("order1");
                            var regPhrase = new RegExp(phrase.value, 'i');
                            var flag = false;
                            
                            for (var i = 1; i < div.rows.length; i++) {
                                flag = false;
                                for (var j = div.rows[i].cells.length - 1; j >= 0; j--) {
                                    flag = regPhrase.test(div.rows[i].cells[j].innerHTML);
                                    if (flag) break;
                                }
                                if (flag) {
                                    div.rows[i].style.display = "";
                                } else {
                                    div.rows[i].style.display = "none";
                                }
        
            }
        }
               /* 
                $('#js-sort').change(function(){
	            $(this).closest('form').submit();
                });
            
                var order;
                $.ajax({
                    url:'../vendor/order.php',
                    async:false,
                    success: function(data){
                        order = JSON.parse(data);
                    }
                })
                */
            </script>
            <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>

</body>
</html>