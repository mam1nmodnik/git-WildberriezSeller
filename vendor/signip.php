<?php
	session_start();
	require_once 'config/connect.php';

	$login = $_POST['login'];
	$password = $_POST['password'];



	$check_user = mysqli_query($connect, "SELECT * FROM `users1` WHERE `login` = '$login' AND `password` = '$password'");

	if (mysqli_num_rows($check_user) > 0 ) {
        
		$user = mysqli_fetch_array($check_user);
        
		$_SESSION['user'] = [
			"id" => $user['id'],
			"full_name" => $user['full_name'],
			"email" => $user['email'],
			"login" => $user['login']
		];

		header('Location: ../glavnaya/profil.php'.'?id='. $user['id']);
	} else{
		header('Location: ../authorization.php');
    $_SESSION['message'] = 'Неверный логин или пароль';
	}
?>
