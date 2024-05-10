<?php

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'info@bainah.com.sa';
$mail->Password = 'ubkpankxhuszhtyq';
$mail->SMTPSecure = 'tls';
$mail->Port = '587';

$mail->isHtml(true);

return $mail;

