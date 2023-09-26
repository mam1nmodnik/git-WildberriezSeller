<?php 
session_start();
@include('phpmailer/PHPMailerAutoload.php');
require_once 'config/connect.php';
  
  $uemail = $_POST['email'];
  $pass = $_POST['password'];
                      
                 $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                 $pass = array(); 
                 $combLen = strlen($comb) - 1; 
                 for ($i = 0; $i < 8; $i++) {
                     $n = rand(0, $combLen);
                     $pass[] = $comb[$n];
                 }
                 //print(implode($pass)); 
                //$pass = implode($pass);
  
  $sqlmail = mysqli_query($connect, "SELECT * FROM `users1` WHERE `email` = '$uemail'");
  $mass = mysqli_fetch_array($sqlmail);
  
    if(preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $uemail)){
	 
	   if ($mass['email'] == $uemail) {
         
	       $sqlpass =  mysqli_query($connect, "UPDATE `users1` SET `password` = '$pass' WHERE `email` = '$uemail'");
	       
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
            $mail->addAddress($uemail);     // Кому будет уходить письмо 
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'WILDBERRIES seller';
            $mail->Body    = 'Поздравляем вас с успешной сменой пароля. Вот новый пароль: ' .$pass;
    
            $mail->AltBody = '';
            
            if(!$mail->send()) {
                header('Location: ../vosstanovlenie.php');
                $_SESSION['message'] = 'Не получилось отправить письмо(';
            } else {
                 header('Location: ../vosstanovlenie.php');
		         $_SESSION['message'] = 'Проверьте почту: ' . $uemail. '. На нее отправлено сообщение с новым паролем)' ;
            }
	  
	        
	   
        }else {
            header('Location: ../vosstanovlenie.php');
            $_SESSION['message'] = 'Такой email  не зарегестрирован';
                 
        }
	    
    }else{
        //header('Location: ../vosstanovlenie.php');
        $_SESSION['message'] = 'email введен не корректно!!!!';
        header('Location: ../vosstanovlenie.php');
    }
//header('Location: ../authorization.php');

?>

