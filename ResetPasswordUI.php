<!DOCTYPE html>
<?php
$token = $_GET["token"];
include 'database.php';
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
  <link rel="stylesheet" href="assets/css/Service_Form_Style.css">
  <title>إعادة تعيين كلمة المرور</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background-color: #1D3539;
      font-family: Amiri !important;
    }

    .login {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: url(furniture3.jpg);
      background-size: cover;
      background-position: center;
    }

    .wapper {
      width: 420px;
      background-color: #f1f1f1;
      border-radius: 10px;
      border: rgba(255, 255, 255, .2);
      box-shadow: 0 0 10px rgb(255, 255, 255, .2);
      backdrop-filter: blur(20px);
      padding: 30px 40px;
    }

    .wapper h1 {
      font-size: 22px !important;
      text-align: center;
    }

    .wapper .input-box {
      position: relative;
      height: 50px;
      margin: 30px 0;
    }

    .input-box input {
      width: 100%;
      height: 100%;
      background: white;
      border: none;
      outline: none;
      border: 2px solid rgba(255, 255, 255, .2);
      border-radius: 6px;
      color: #1c1c1c;
      ;
      font-size: 16px;
      padding: 20px 20px 20px 20px;
    }

    .input-box input::placeholder {
      color: #545454;
    }

    .input-box i {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
    }

    .wapper .remembr-forget {
      display: flex;
      justify-content: space-between;
      font-size: 14.5px;
      margin: -15px 0 15px;
    }

    .remembr-forget label input {
      accent-color: #fff;
      margin-left: 3px;
    }

    .remembr-forget a {
      color: #fff;
      text-decoration: none;
    }

    .remembr-forget a:hover {
      text-decoration: underline;
    }

    .wapper .btn {
      display: block;
      font-family: 'Almarai', sans-serif !important;
      padding: 10px;
      margin-top: 30px;
      width: 100%;
      background-color: #1D3539;
      border: 2px solid #1D3539;
      color: #CFB99A;
      font-size: 0.95rem;
      font-weight: 800;
      font-size: 20px;
      outline: none;
      cursor: pointer;
      transition: 0.3s;
      border-radius: 15px !important;
    }

    .wapper .btn:hover {
      color: #1D3539;
      background-color: #CFB99A;
      border-color: #CFB99A;
    }

    .wapper .register-link {
      font-size: 14.5px;
      text-align: center;
      margin: 20px 0 15px;
    }

    .register-link p a {
      color: #fff;
      text-decoration: none;
      font-weight: 600;
    }

    .register-link p a:hover {
      text-decoration: underline;
    }

    .toggle-password {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      width: 24px;
      height: 24px;
      background-image: url('eye-icon.png');
      /* Replace with your eye icon image */
      background-repeat: no-repeat;
      background-position: center;
      cursor: pointer;
    }

    .toggle-password.visible {
      background-image: url('eye-icon-visible.png');
      /* Replace with your visible eye icon image */
    }
  </style>
</head>

<body>

  <form method="post" action="Reset_validation.php">

    <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">


    <div class="login" style="width: 700px; height:500; margin:auto; ">
      <div class="wapper">
        <h1> يرجى كتابة كلمة المرور الجديدة</h1>
        <div class="input-box">
          <div class="input-container">
            <input type="password" style="background-color: #ffffffc9 !important;" class="input" id="signINpassword" name="signINpassword" dir="rtl" placeholder="كلمة المرور" />
            <span class="error-message" id="password-error"></span>
            <span class="toggle-password" onclick="togglePasswordVisibility('signINpassword')"></span>
          </div>
          <div class="input-container">
            <input type="password" style="background-color: #ffffffc9 !important;" class="input" id="confirm-password" name="confirm-password" dir="rtl" placeholder="تأكيد كلمة المرور" />
            <span class="error-message" id="confirm-password-error"></span>
            <span class="toggle-password" onclick="togglePasswordVisibility('confirm-password')"></span>
          </div>

          <script>
            function togglePasswordVisibility(inputId) {
              var inputElement = document.getElementById(inputId);
              var toggleElement = document.querySelector('span[onclick="togglePasswordVisibility(\'' + inputId + '\')"]');

              if (inputElement.type === "password") {
                inputElement.type = "text";
                toggleElement.classList.add('visible');
              } else {
                inputElement.type = "password";
                toggleElement.classList.remove('visible');
              }
            }
          </script>
          <i class='bx bxs-user'></i>
        </div>
        <br><br><br>
        <?php 
      if(isset($_GET["rerror"])){
        $error= $_GET["rerror"] ;
        echo'<h4 style=" color: red; text-align: right; margin-top: 10px;" >' . $error . '</h4>';
      }
      ?>
        <button type="submit" class="btn" name="submit">تعيين </button>
      </div>
    </div>
  </form>

  <script src="Assets/js/validationSignin.js"></script>

</body>

</html>