<?php
$connect = mysqli_connect('localhost', 'q91782vs_1', 'lv2*eK7k', 'q91782vs_1');
if(!$connect){
    die('Error connect to database');
}



define("TIME_ACTIVE_LINK", 60);



