<?php

session_start();
    @include('phpmailer/PHPMailerAutoload.php');
     if ($_SESSION['user']) {
      header('Location: ../glavnaya/profil.php');
     }
        require_once 'config/connect.php';


    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $logincheck = $_POST['login'];
    $emailcheck = $_POST['email'];
  
  
   if(preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)){
              
            $sqlmail = mysqli_query($connect, "SELECT * FROM `users1` WHERE `email` = '$email'");
            $mass = mysqli_fetch_array($sqlmail);
            if ($mass['email'] != $email) {
                
                $sqlmail = mysqli_query($connect, "SELECT * FROM `users1` WHERE `login` = '$login'");
                $mass = mysqli_fetch_array($sqlmail);
                if ($mass['login'] != $login) {
                if($password !== $password_confirm){
                header('Location: ../registration.php');
                $_SESSION['message'] = 'Пароли не совподают. Попробуйте ввести ещё раз!';
            
                }else {
                $mysql = mysqli_query($connect, "INSERT INTO `users1`(`id`,`full_name`,`login`,`email`,`password`) VALUES (NULL,'$full_name','$login','$email','$password')");
                
                    $mail = new PHPMailer;
                    $mail->CharSet = 'utf-8';
                    //$mail->SMTPDebug = 3;                               // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'danil_serebro2004@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
                    $mail->Password = '3T2pz0gNQtsD90p8aw2v'; // Ваш пароль от почты с которой будут отправляться письма
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров
                    
                    $mail->setFrom('danil_serebro2004@mail.ru'); // от кого будет уходить письмо
                    $mail->addAddress($email);     // Кому будет уходить письмо 
                    //$mail->addAddress('ellen@example.com');               // Name is optional
                    //$mail->addReplyTo('info@example.com', 'Information');
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'WILDBERRIES seller';
                    $mail->Body    = 'Поздравляем вас с регистрацией в WILDBERRIES seller';
                    $mail->AltBody = '';
                    
                    if(!$mail->send()) {
                        header('Location:  ../authorization.php');
                        $_SESSION['message'] = 'Не получилось отправить письмо(';
                    }
                 
	               
                header('Location: ../authorization.php');
                $_SESSION['message'] = 'Регистрация прошла успешно';
                
                 
                }
                  }else {
                    header('Location: ../registration.php');
                    $_SESSION['message'] = 'Такой логин уже зарегестрированн!!!';
                  }
                  
            }else {
                header('Location: ../registration.php');
                $_SESSION['message'] = 'Данный email уже зарегестрированн';
            }
            
   }else{
        header('Location: ../registration.php');
        $_SESSION['message'] = 'Email введен не корректно!!!';
   }
   
?>


