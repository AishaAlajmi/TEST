<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Email sending code
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@bainah.com.sa';
        $mail->Password = 'ubkpankxhuszhtyq';
        $mail->SMTPSecure = 'tls';
        $mail->Port = '587';

        $mail->setFrom('info@bainah.com.sa');
        $mail->addAddress('info@bainah.com.sa');

        // Extract form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $mail->isHTML(true);
        $mail->Subject = "Message sent from client in Bainah website";
        $mail->Body = "Name: $name<br>Email: $email<br>Message: $message";
        $mail->send();

        $alert = 'تم الإرسال بنجاح!';
    } catch (Exception $e) {
        $alert = 'فشل إرسال البريد الإلكتروني: ' . $mail->ErrorInfo;
    }
}
