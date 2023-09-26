<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */
$id = $_POST['id'];
$date = $_POST['date'];
$number = $_POST['number'];
$color = $_POST['color'];
$name = $_POST['name'];
$amount = $_POST['amount'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `productList2` SET `date`='$date',`number`='$number',`color`='$color',`name`='$name',`amount`='$amount' WHERE `productList2`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: ../glavnaya/spisok.php');