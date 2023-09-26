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
    <link rel="stylesheet" href="css/style2.css">
    <title>Список товаров продавца</title>
     <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>

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
                <li><a href="zakazi.php?id=<?= $_SESSION['user']['id']?>&name=<?= $_SESSION['user']['full_name']?>"><button class="navbar_button">Заказы клиентов</button></a></li>
                <li><button class="button1">Список товара на складе<hr></button></li>
                <li><a href="vozvrati.php?id=<?= $_SESSION['user']['id']?>&name=<?= $_SESSION['user']['full_name']?>"><button class="navbar_button">Возвраты</button></a></li>
            </ul>     
        </div>  
        
    </div>
    <div class="header_block">
        <div class="search">
            <button class="icon_settings "></button>
            <div class="settings_focus">
                <ul>
                    <a href="profil.php?id=<?= $_SESSION['user']['id']?>&name=<?= $_SESSION['user']['full_name']?>" style="text-decoration: none;"><li>Профиль</li></a>
                    <a href="../vendor/logout.php?id=<?= $_SESSION['user']['id']?>&name=<?= $_SESSION['user']['full_name']?>" style="text-decoration: none;"><li>Выход</li></a>
                </ul>
             </div>
        </div>
    </div>

    <div class="main_table">
        <div>
           
           
            
            <div class="search-table">
                <p style="font-size:23px;">Поиск по таблице</p>
                <input type="text" name="search" id="search" placeholder="Сортировка таблицы" onkeyup="tableSearch()">
            </div>
            
        <table class="table" id="table">
            <thead>
                <tr class="table-line-1">
                    <th class="th1-width">#</th>
                    <th>Дата</th>
                    <th>Номер товара</th>
                    <th>Цвет</th>
                    <th>Наименование товара</th>
                    <th> Кол. на складе</th>
                </tr>
             </thead>
                <?php
                include('../vendor/tableProductList.php');
                foreach ($product as $product){
                ?>

                <tr id="tr" >
                    <th  class="th1-width1" data-id="<?= $product[0]?>"><?= $product[0]?></th>
                    <th><?= $product[1]?></th>
                    <th><?= $product[2]?></th>
                    <th><?= $product[3]?></th>
                    <th><?= $product[4]?></th>
                    <th><?= $product[5]?></th>
                    <th><button id="update"><a href="update1.php?id=<?= $product[0]?>">Update</a></button></th>
                    <th><button type="button" id="delete" onclick="deleteClick()" data-id="<?= $product[0]?>">
                        
                        <a href="../vendor/delete.php?id=<?= $product[0]?>"><img src="https://img.icons8.com/retro/32/null/delete-forever.png"/></a>
                       
                        </button></th>
                </tr>
                <?php
                }
                ?>
           
            </table>
        </div>
         <form class="form-table-editor" name="ourForm" action=""  method="POST">
              <p style="margin: 10px 0 0 0; ">Добавление нового товара</p>
            <div class="form-table-editor-flex">
                <p>Дата</p>
                <input type="date" name="date" id="date">
            </div>
            <div class="form-table-editor-flex">
                <p>Номер товара</p>
                <input type="text" name="number" id="number">
            </div>
            <div class="form-table-editor-flex">
                <p>Цвет</p>
                <input type="text" name="color"  id="color">
            </div>
            <div class="form-table-editor-flex">
                <p>Наименование товара</p>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-table-editor-flex">
                <p>Кол. на складе</p>
                <input type="text" name="amount" id="amount">
            </div>

             <button type="submit" class="form-table-editor-button">Добавить новый товар</button>
             
        </form>

<script>
        /*
        
           function DeleteId() {
               
                for(let i = 0; i <= 100; i++){
                    let deleteId  = 'deleteId' + i;
                    let del = {
                        
                        [deleteId]: deleteId, 
                    }
                    console.log(Object.keys(del));
                }
                return 
            }
           // console.log(DeleteId())
      */
                
        //ДОБАВЛЕНИЕ ТОВАРОВ В ТАБЛИЦУ
          document.forms.ourForm.onsubmit = function(e){
               e.preventDefault();
               dateInput = document.getElementById('date').value,//дата
               numberInput = document.getElementById('number').value,//Номер товара
               colorInput = document.getElementById('color').value,//Цвет
               nameInput = document.getElementById('name').value,//Наименование товара
               amountInput = document.getElementById('amount').value,//Кол. на складе
               idRow = document.getElementById('idRow')
               //dataId = document.querySelector('.th1-width1').dataset.id

               console.log(dateInput,numberInput,colorInput,nameInput,amountInput);
           
            
            $.ajax({
                  url: '../vendor/createTable.php',// подключение к php файлу
                  dataType: "html",// вид передоваемых данных 
                  method: "POST",// метод отправки
                  data: { //передоваемые данные
                      'date': dateInput,
                      'number': numberInput,
                      'color': colorInput,
                      'name': nameInput,
                      'amount': amountInput
                  },
                  success: function(otvet) { //функция для обновления таблицы с добавленной новой строкой
                    if (typeof otvet.error === 'undefined') { //проверка на схожесть типов передоваемы данных
                       //otvet = $.parseJSON(otvet);
                        $("#table").load("spisok.php #table");//обновление таблицы
                    }
                    // error
                    else {
                      console.log('ОШИБКА: ' + otvet.error);
                    }
                
                  },
                  error: function() {
                    console.log('ОШИБКА AJAX запроса: ');
                  }
                });
          };
                   
            //УДАЛЕНИЕ СТРОКИ
                //delete = document.getElementById('delete');
                
               /* 
                function deleteClick(){
                    $.ajax({
                        url: "../vendor/delete.php?id=<?= $product[0]?>", // куда отправляем
                        dataType: "html", // какой формат
                        method: "POST", // какой метод
                       data: {
                          
                      }, // Сами данные
                        success: function(otvet) {
                             $("#table").load("spisok.php #table");
                        }, // Что будет если данные пришли
                        error: function() {
                          // $("#result").html("При отправке данных произошла ошибка");
                        } // Если данные не пришли
                    });
             
                
                }
                 */  
               
                function tableSearch() {
                    var phrase = document.getElementById('search');
                    var table = document.getElementById('table');
                    var regPhrase = new RegExp(phrase.value, 'i');
                    var flag = false;
                    
                    for (var i = 1; i < table.rows.length; i++) {
                        flag = false;
                        for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
                            flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
                            if (flag) break;
                        }
                        if (flag) {
                            table.rows[i].style.display = "";
                        } else {
                            table.rows[i].style.display = "none";
                        }

                    }
}
            
        
          </script> 
                 

    </div>


</body>
</html>