<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$text = $_POST['user_text'];
$phone = $_POST['user_phone'];

 // Passing `true` enables exceptions
try {
    //Server settings                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'stepyarik395@gmail.com';                 // SMTP username
    $mail->Password = '2609199439510SMOKY__';                    // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    $mail->CharSet = "UTF-8";                                  // TCP port to connect to

    //Recipients
    $mail->setFrom('stepyarik395@gmail.com', 'Admin');
    $mail->addAddress('m2collab@gmail.com', 'M2collab-administrator');     // Add a recipient              
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
    if (isset($_FILES['uploaded_file']) &&
    $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['uploaded_file']['tmp_name'],
                         $_FILES['uploaded_file']['name']);
}



    //$mail->addAttachment($_FILES['upload']['tmp_name']$_FILES['upload']['name']);         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Заявка с сайта M2collab';
    $mail->Body    = '' .$name.' '. $surname . ' оставил заявку, его телефон ' . $phone . '<br>Сообщение: '. $text;
    $mail->AltBody = '';


    $mail->send();
    header('location: messege-send.html');
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>