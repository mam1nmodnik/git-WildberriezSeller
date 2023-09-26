<?php
require_once 'config/connect.php';
session_start();
     if (!$_SESSION['user']) {
     header('Location: ../authorization.php');
    }
   
    $date = $_GET['date'];
    $adress = $_GET['adress'];
    
    if (array_key_exists($date, $sort_list)) {
	$sort_sql = $sort_list[$sort];
    } else {
    	$sort_sql = reset($sort_list);
    }
    
$order = mysqli_query($connect, "SELECT * FROM `newOrder` ORDER BY {$sort_sql} ");
$order -> execute();
$list = $sth->fetchAll(PDO::FETCH_ASSOC);