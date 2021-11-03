<?php
$emailAddress = $_POST['emailAddress'];
$emailSubject = $_POST['emailSubject'];
$emailContent = $_POST['emailContent'];

//* include required phpmailer files
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
//* define namespaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); //* Create instance of phpmailer

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP(); //* set mailer to use smtp
    $mail->Host = 'smtp.gmail.com'; //* define smtp host
    $mail->SMTPAuth = 'true'; //* enable smtp authentication
    $mail->SMTPSecure = 'tls'; //* set type of encryption (ssl, tls)
    $mail->Port = '587'; //* set post to connect smtp
    $mail->Username = 'abc'; //* Nhập tài khoản mail để gửi
    $mail->Password = 'abc'; //* nhập mật khẩu
    $mail->CharSet = 'UTF-8'; //* set vietnamese
    //Recipients
    //* set sender email
    $mail->setFrom('loofehtt@gmail.com', 'Admin');
    //* add recipient
    $mail->addAddress("$emailAddress"); //! variable must in ""
    //* Set email format to HTML
    $mail->isHTML(true);
    //* set email subject
    $mail->Subject = "$emailSubject";
    //* mail body
    $mail->Body = "$emailContent";
    //* add data to database & send email
    if ($mail->send()) {
        echo "success";
    } else {
        echo "error";
    }
    //* close smtp connection
    $mail->smtpClose();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
