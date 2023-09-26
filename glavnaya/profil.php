<?php
    session_start();
    @include('../vendor/config/connect.php');
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
    <link rel="stylesheet" href="css/style_profil.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> -->
    <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
<script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>
    <title>Профиль</title>
</head>
<body>
    <header class="header">
        <div class="header__container">
           <div class="header__flex">
            <!-- <img src="image/WILDBERRIES seller.svg" alt="" style="margin-left: 40px;"> -->
            <div class="text-logo">
                <h1>WILDBERRIES</h1>
                <p>seller</p>
            </div>
            <div>
                <a href="zakazi.php?id=<?= $_SESSION['user']['id']?>">Заказы</a>
                <a href="spisok.php?id=<?= $_SESSION['user']['id']?>">Список товара на складе</a>
                <a href="vozvrati.php?id=<?= $_SESSION['user']['id']?>">Возвраты</a>
            </div>
            <a href="../vendor/logout.php?id=<?= $_SESSION['user']['id']?>"><img src="image/icons8-выход-96 1.svg" alt=""></a>
        </div>
        </div>
        
        
        
        <div class="flex-conteiner-header">
            <div class="text-logo1-none">
                 <div class="text-logo1">
                    <h1>WILDBERRIES</h1>
                    <p>seller</p>
                </div>
            </div>
            <div class="burger-menu">
              <a href="" class="burger-menu_button">
                <spun class="burger-menu_lines"></spun>
              </a>
              <nav class="burger-menu_nav">
                <a href="zakazi.php" class="burger-menu_link">Заказы</a>
                <a href="spisok.php" class="burger-menu_link">Список товара на складе</a>
                <a href="vozvrati.php" class="burger-menu_link">Возвраты</a>
                <a href="../vendor/logout.php" class="burger-menu_link">Выход из аккаунта</a>
              </nav>
              <div class="burger-menu_overlay"></div>
            </div>
        </div>
    </header>
    <div class="main__container">
        <div class="main">
            <div class="main__flex">
                <img src="../uploads/noavatars.jpg" alt="">
                <p id="full_name_id"><?= $_SESSION['user']['full_name']?></p>
                <button class="button-name-change" id="button-open-change-name" ></button>
            </div>
            <div class="main__flex2">
                <div>
                    <p class="main_p">Email</p>
                     <div class="main__flex">
                    <p id="email_id" style="margin-left: 5px;"><?= $_SESSION['user']['email']?></p>
                    <button class="button-name-change" id="button-open-change-email" ></button>
                     </div>
                </div>
                <div>
                    <p class="main_p">Пол</p>
                    <form>
                        <input type="radio" name="t" id="qwe">
                        <p>Муж</p>
                        <input type="radio" name="t" id="qwe">
                        <p>Жен</p>
                    </form>
                </div>
                <div>
                    <p class="main_p">Должность</p>
                    <p class="main_p1">Продавец</p>
                </div>
               <!--  <div style="margin-top:12px; display:flex; flex-direction: column;flex-wrap: nowrap;align-items: center;">
               <p class="main_p" style="margin-top:0;">Действие с аккаунтом</p>
               <button type="button" id="button-open-delete-id" style="margin-top:12px; ">Delete</button>
               </div> -->
            </div>
        </div>
    </div>
<!-- Форма изменения имени -->            
         <div class="popup">
                      <div class="popup__container">
                        <div class="popup__wrapper">
                          <div id="blablabla">
                           
                            <form  method="post" name="ourForm">
                                <h3>Update name</h3>
                                
                             <div class="form-table-editor-flex" data-id="<?= $_SESSION['user']['id']?>" >
                                <input type="text" name="full_name" id="input">
                            </div>
                           
                             <div class="form-table-editor-flex">
                              <button type="submit" name="button-change-name" id="button-close-form">Отправить</button>
                              </div>
                            </form>
                             
                          </div>
                        </div>
                      </div>
                    </div>
<!-- Форма изменения email -->
                 <div class="popup1">
                      <div class="popup__container1">
                        <div class="popup__wrapper1">
                          <div id="blablabla1">
                           
                            <form  method="post" name="ourForm1">
                                <h3>Update email</h3>
                                
                             <div class="form-table-editor-flex1" data-id="<?= $_SESSION['user']['id']?>" >
                                <input type="text" name="email" id="inputm">
                            </div>
                           
                             <div class="form-table-editor-flex1">
                              <button type="submit" name="button-change-name1" id="button-close-form1">Отправить</button>
                              </div>
                            </form>
                             
                          </div>
                        </div>
                      </div>
                    </div>            
                 
                    
      <script>
             // ФОРМА ИЗМЕНЕНИЯ ИМЕНИ!!!!!!!
            //конопка открытия формы изменения имени
            const button = document.querySelector('#button-open-change-name');
            const form = document.querySelector('#blablabla');
            const popup = document.querySelector('.popup');
            
             button.addEventListener('click', () => {
             form.classList.add('open');
             popup.classList.add('popup_open');
              
            });
            
            function closeOpen(){
            if( form.classList != 'close' &&  form.classList != 'popup_close' ){
                form.classList.add('close');
                popup.classList.add('popup_close');
            }
            setTimeout( function(){
                form.classList.remove('open');
                popup.classList.remove('popup_open');
                form.classList.remove('close');
                popup.classList.remove('popup_close');
                
            }, 300)
            }
            
            //Форма запроса имени
            document.forms.ourForm.onsubmit = function(e){
                e.preventDefault();
               // let userInput = document.forms.ourForm.full_name.value;
               //userInput = encodeURIComponent(userInput);
                //let userInput = document.querySelector('.form-table-editor-flex input');
                let userBlock = document.querySelector('.form-table-editor-flex'),
                dataId = userBlock.dataset.id,
                userInput = userBlock.querySelector('#input').value,
                pName = document.getElementById('full_name_id')
                
               
             console.log(dataId,userInput);
             
             $.ajax({
                    url: "updateName.php", // куда отправляем
                    dataType: "html", // какой формат
                    method: "POST", // какой метод
                    data: {
                        'id': dataId,
                        'name': userInput,
                    }, // Сами данные
                    success: function(otvet) {
                        otvet = $.parseJSON(otvet);
                        pName.innerText = otvet
                         closeOpen();
                        
                    }, // Что будет если данные пришли
                    error: function() {
                        //$("#result").html("При отправке данных произошла ошибка");
                    } // Если данные не пришли
                });
              };
              
              
              
            //Форма изменения email
            
              const button1 = document.querySelector('#button-open-change-email');
            const form1 = document.querySelector('#blablabla1');
            const popup1 = document.querySelector('.popup1');
            
             button1.addEventListener('click', () => {
             form1.classList.add('open1');
             popup1.classList.add('popup_open1');
              
            });
            
            function closeOpen1(){
            if( form1.classList != 'close1' &&  form.classList != 'popup_close1' ){
                form1.classList.add('close1');
                popup1.classList.add('popup_close1');
            }
            setTimeout( function(){
                form1.classList.remove('open1');
                popup1.classList.remove('popup_open1');
                form1.classList.remove('close1');
                popup1.classList.remove('popup_close1');
                
            }, 300)
            }
            
            //Форма запроса имени
            document.forms.ourForm1.onsubmit = function(e){
                e.preventDefault();
               // let userInput = document.forms.ourForm.full_name.value;
               //userInput = encodeURIComponent(userInput);
                //let userInput = document.querySelector('.form-table-editor-flex input');
                let userBlock1 = document.querySelector('.form-table-editor-flex1'),
                dataId1 = userBlock1.dataset.id,
                emailInput = userBlock1.querySelector('#inputm').value,
                pName1 = document.getElementById('email_id')
                
               
             console.log(dataId1,emailInput);
             
             $.ajax({
                    url: "updateEmail.php", // куда отправляем
                    dataType: "html", // какой формат
                    method: "POST", // какой метод
                    data: {
                        'id': dataId1,
                        'mail': emailInput,
                    }, // Сами данные
                    success: function(otvet) {
                        otvet = $.parseJSON(otvet);
                        pName1.innerText = otvet
                         closeOpen1();
                        
                    }, // Что будет если данные пришли
                    error: function() {
                        //$("#result").html("При отправке данных произошла ошибка");
                    } // Если данные не пришли
                });
              };
            function closeOpen2(){
            if( form2.classList != 'close2' &&  form.classList != 'popup_close2' ){
                form2.classList.add('close2');
                popup2.classList.add('popup_close2');
            }
            setTimeout( function(){
                form2.classList.remove('open2');
                popup2.classList.remove('popup_open2');
                form2.classList.remove('close2');
                popup2.classList.remove('popup_close2');
                
                
            }, 300)
            }
            const button2 = document.querySelector('#button-open-delete-id');
            const form2 = document.querySelector('#blablabla2');
            const popup2 = document.querySelector('.popup2');
            
             button2.addEventListener('click', () => {
             form2.classList.add('open2');
             popup2.classList.add('popup_open2');
              
            });
                const button3 = document.querySelector('#button-close-form3');
                   button3.addEventListener('click', () => {
                         closeOpen2();
                    });
            
            
            
            
           
      </script>
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
            
        </script>
</body>
</html>