<?php

$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 10);

$registered = 1;

include 'database.php';

$sql = "UPDATE clients SET reset_token_hash = ?, reset_token_expires_at = ? WHERE Email= ? AND registered= ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $token_hash, $expiry, $email, $registered);
$stmt->execute();


if ($conn->affected_rows) {
  $mail = require "mailer.php";
  $mail->setFrom('info@bainah.com.sa');
  $mail->addAddress($email);
  $mail->Subject = "إعادة تعيين كلمة المرور";
  $mail->Body = <<<END
      <html lang="en">

      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="Assets/css/navbarAndFooter.css">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
      <style>
          .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
      .buttonn{
        
        display: block;
        font-family: 'Almarai', sans-serif !important;
        padding: 10px;
        margin: auto;
        width: 100%;
        background-color: #1D3539;
        border: 2px solid #1D3539;
        color: #CFB99A;
        font-size: 0.95rem;
        font-weight:800;
        font-size: 20px;
        outline: none;
        cursor: pointer;
        transition: 0.3s;
        border-radius: 15px !important; 
        }
      </style>
      </head>
      
      <body>
      <div class="container" style="text-align: center;">
          <div>
              <h1>بينة للمحاماة والاستشارات القانونية</h1> <br>
          </div>
      
          <h2>إعادة تعيين كلمة المرور</h2>
      
          <p>أهلًا عميل بينة، <br>
              قمت بطلب كلمة مرور جديدة لحسابك 
              الرجاء الضغط على الزر لتعيين كلمة مرور جديدة 
          </p>
          <div dir="ltr" style="margin:auto; width: 110px;"> 
          <a href="https://bainah.com.sa/ResetPasswordUI.php?token=$token" class="buttonn" >إعادة تعيين </a>
          </div>
          <h5>ينتهي خلال عشر دقائق</h5>
      </div>
      </body>
      </html> 

    END;

  try {

    $mail->send();

    $msg = " تم إرسال رسالة إلى بريدك الشخصي لتعيين كلم مرور جديدة " ;
    header("Location:forgot_pass.php?msg=$msg");

  } catch (Exception $e) {
    $error = " الرجاء المحاولة مرة اخرى " ;
    header("Location:forgot_pass.php?error=$error");
  }
} else {
$error = "لم تقم بانشاء حساب باستخدام هذا البريد الالكتروني" ;
header("Location:forgot_pass.php?error=$error");
}
