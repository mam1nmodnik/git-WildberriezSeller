<?php 
@include('../vendor/config/connect.php');
$id = $_POST['id'];
$date = $_POST['date'];
$number = $_POST['number'];
$color = $_POST['color'];
$name = $_POST['name'];
$amount = $_POST['amount'];
    
    
    $output = array();   
    
    $mass = mysqli_query($connect, "INSERT INTO `productList2`(`id`, `date`, `number`, `color`, `name`, `amount`) VALUES ('NULL','$date', '$number', '$color', '$name', '$amount')");

    $row = mysqli_fetch_assoc($mass);
    $output[] = $row;
    session_start();
    //$nonsequential = array($date,$number,$color,$name,$amount);
//echo json_encode($output);
echo json_encode($date);
echo json_encode($number);
echo json_encode($color);
echo json_encode($name);
echo json_encode($amount);
    
    
//header('Location: ../glavnaya/spisok.php');

?>