<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <title>تسجيل الدخول</title>
    <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
    <link rel="stylesheet" href="Assets/css/Service_Form_Style.css">
    <link rel="stylesheet" href="Assets/css/services.css">
    <script src="Assets/js/validation2.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">

    <style>
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

<body dir="rtl">
<?php include "SignupValidation.php"; ?>
    <div class="container2">
        <div class="form">
            <div class="contact-info" style="background-color: #1D3539;">
                <p class="textt">
                    <img width="200px" hight="140px" src="Assets/images/darklogo.png">  <br><br>
                    <span style="color:#fff;"> مستخدم جديد في شركـة بينـة ؟ </span> <br>
                <p style="text-align: center; color:#fff; font-size:13px;"> قم بالتسجيل الآن وتعرف على خدماتنا</p>
                    <div class="form-inline">
                        <div style=" margin-right:100px;  ">
                            <button type="submit" class="buttonn" name="serviceSubmitBtn" style=" background-color: #CFB99A; color: #1D3539;">
                                <a href="signin.php" style="color:#1D3539; text-decoration:none;">تسجيل جديد</a>
                            </button>
                        </div>
                    </div>
                </p>
            </div>
            <div class="contact-formm" style="background-color: #1d35391b !important;">
                <p style="text-align: center; font-size:20px;"><br><br> تسجيل الدخول </p>
                <form id="form" name="form" method="POST" enctype="multipart/form-data" onsubmit="return LoginvalidateForm();">
                    <div class="input-container">
                        <input style="background-color: #ffffffc9 !important;" class="input" name="email" id="email" placeholder=" ** البريد الإلكتروني أو رقم الهاتف" />
                    </div> <span class="error-message" id="email-error"></span>
                    <div class="input-container">
                        <input type="password" style="background-color: #ffffffc9 !important;" class="input" id="signINpassword" name="signINpassword" dir="rtl" placeholder="كلمة المرور" />
                        <span class="error-message" id="password-error"></span>
                        <span class="toggle-password" onclick="togglePasswordVisibility('signINpassword')"></span>
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

<?php
            // Retrieve the alerts from the session
            $alerts = isset($_SESSION['alerts']) ? $_SESSION['alerts'] : array();

            // Check if there are any alerts
            if (!empty($alerts)) {
                // Loop through the alerts and display them
                foreach ($alerts as $alert) {
                        echo "<div style='color:red; margin:0;'>$alert</div>";
                }
                echo "<br>";
                // Clear the alerts from the session
                unset($_SESSION['alerts']);
            }
            ?>
<!--            --><?php
//            echo "out" ;
//             echo "Count: " . count($alerts);
//    var_dump($alerts);
//            if (!empty($alerts)):
//                echo "inside"?>
<!---->
<!--                <div class="alerts">-->
<!--                    --><?php //foreach ($alerts as $alert): ?>
<!--                        <div class="alert">--><?php //echo $alert; ?><!--</div>-->
<!--                    --><?php //endforeach; ?>
<!--                </div>-->
<!--            --><?php //endif; ?>



                    <a href="forgot_pass.php" style="color:#1D3539;"> نسيت كلمة المرور؟</a>
                    <div id="error-message"></div>
                    <div class="form-inline">
                        <div style="margin-right:95px; ">
                            <button type="submit" class="buttonn" name="loginBtn" onclick="return LoginvalidateForm();">تسجيل الدخول</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function LoginvalidateForm() {
  var email = document.getElementsByName("email")[0].value;
  var password = document.getElementById("signINpassword").value;

  var isValid = true;

      clearError("email-error");

      clearError("password-error");


  // Regex patterns
  var phoneRegex = /^0\d{9}$/;


  if (email === "") {
      displayError("يرجى إدخال البريد الإلكتروني أو رقم الجوال", "email-error");
      isValid = false;
  } else {
    if (email.includes("@") || email.includes("com")){
      var emailRegex = /^\S+@\S+\.\S+$/;
      if (!email.match(emailRegex)) {
          displayError("البريد الإلكتروني غير صحيح", "email-error");
          isValid = false;
      } else {
          clearError("email-error", "email");
      }
    }else{
      var emailRegex = /^\S+@\S+\.\S+$/;
      if (!email.match(emailRegex)) {
          displayError("رقم الجوال غير صحيح", "email-error");
          isValid = false;
      } else {
          clearError("email-error", "email");
      }
  }
}

  if (password === "") {
    displayError("يرجى إدخال كلمة المرور", "password-error");
    isValid = false;
  } else if (password.length < 6) {
    displayError("يجب أن تحتوي كلمة المرور على الأقل على 6 أحرف", "password-error");
    isValid = false;
  }
  return isValid;
}


function displayError(message, errorElementId) {
      var errorMessage = document.getElementById(errorElementId);
      errorMessage.style.color = "red";
      errorMessage.textContent = message;
    }
  
    function clearError(errorElementId) {
      var errorMessage = document.getElementById(errorElementId);
      errorMessage.textContent = "";
    }
</script>

</body>

</html>