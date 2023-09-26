<?php

     require_once '../vendor/config/connect.php';
      session_start();
     if (!$_SESSION['user']) {
     header('Location: ../authorization.php');
        }
     $product_id = $_GET['id'];
     $product = mysqli_query($connect, "SELECT `id`, `date`, `number`, `color`, `name`, `amount` FROM `productList2` WHERE `id` = '$product_id'");
     $product = mysqli_fetch_assoc($product);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/styleUpdate.css">
</head>
<body>
    
                    <div class="popup">
                      <div class="popup__container">
                        <div class="popup__wrapper">
                          <div id="blablabla">
                            <form action="../vendor/updateTableRow.php" method="post">
                                <div class="form-table-editor-flex-arrow">
                                    <a href="spisok.php"><img src="image/free-icon-right-arrow-271228.png"></a>
                                     <h3>Update table</h3>
                                </div>
                                 <div class="form-table-editor-flex">
                                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                    <p>Дата</p>
                                    <input type="date" name="date" value="<?= $product['date'] ?>">
                                </div>
                                <div class="form-table-editor-flex">
                                    <p>Номер товара</p>
                                    <input type="text" name="number" value="<?= $product['number'] ?>">
                                </div>
                                <div class="form-table-editor-flex">
                                    <p>Цвет</p>
                                    <input type="text" name="color" value="<?= $product['color'] ?>">
                                </div>
                                <div class="form-table-editor-flex">
                                    <p>Наименование товара</p>
                                    <input type="text" name="name" value="<?= $product['name'] ?>">
                                </div>
                                <div class="form-table-editor-flex">
                                    <p>Кол. на складе</p>
                                    <input type="text" name="amount" value="<?= $product['amount']?>">
                                </div>
                                 <div class="form-table-editor-flex">
                                  <button type="submit" >Отправить</button>
                                  </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
               
</body>
</html>