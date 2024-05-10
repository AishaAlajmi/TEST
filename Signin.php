<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <title>تسجيل جديد</title>
    <link rel="stylesheet" href="Assets/css/Service_Form_Style.css">
    <link rel="stylesheet" href="Assets/css/services.css">
    <script src="Assets/js/validationSignin.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/navbarAndFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
</head>

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

<body dir="rtl">
<?php include "SignupValidation.php"; ?>
    <div class="container2">
        <div class="form">
            <div class="contact-info" style="background-color: #1D3539;">
                <p class="textt">
                    <img width="200px" hight="140px" src="Assets/images/darklogo.png">
                    <br><br>
                    <span style="color:#fff;">
                        عضو سابق لدى شركـة بينـة ؟ </span>
                    <br>
                <p style="text-align: center; color:#fff; font-size:13px;">
                    قم بتسجيل الدخول الآن
                </p>
                <div class="form-inline">
                    <div style=" margin-right:90px;  ">
                        <button type="submit" class="buttonn" name="serviceSubmitBtn" style=" background-color: #CFB99A; color: #1D3539;"><a href="login.php" style="color:#1D3539; text-decoration:none;">تسجيل الدخول</a></button>
                    </div>
                </div>
                </p>
            </div>
            <div class="contact-formm" style="background-color: #1d35391b !important;">
                <p style="text-align: center; font-size:20px;"><br><br>
                    إنشاء حساب جديد
                </p>
                <form id="form" name="form" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
                    <div class="input-container">
                        <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="fname" name="fname" placeholder="الاسم الأول" />
                    </div> <span class="error-message" id="fname-error"></span>
                    <div class="input-container">
                        <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="mname" name="mname" placeholder="الاسم الثاني" />
                    </div> <span class="error-message" id="mname-error"></span>
                    <div class="input-container">
                        <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="lname" name="lname" placeholder="الاسم الأخير" />
                    </div> <span class="error-message" id="lname-error"></span>
                    <div class="input-container">
                        <input type="email" style="background-color: #ffffffc9 !important;" class="input" name="email" id="email" placeholder="البريد الالكتروني" />
                    </div> <span class="error-message" id="email-error"></span>
                    <div class="input-container">
                        <input type="tel" style="background-color: #ffffffc9 !important;" class="input" id="phone" name="phone" placeholder="رقم الجوال" />
                    </div> <span class="error-message" id="phone-error"></span>
                    <div class="input-container">
                        <input type="tel" style="background-color: #ffffffc9 !important;" class="input" id="NationalID" name="NationalID" placeholder="رقم الهوية الوطنية" />
                    </div> <span class="error-message" id="NationalID-error"></span>
                    <div class="input-container">
                        <input type="password" style="background-color: #ffffffc9 !important;" class="input" id="signINpassword" name="signINpassword" placeholder="كلمة المرور" />
                        <span class="error-message" id="password-error"></span>
                        <span class="toggle-password" onclick="togglePasswordVisibility('signINpassword')"></span>
                    </div>
                    <div class="input-container">
                        <input type="password" style="background-color: #ffffffc9 !important;" class="input" id="confirm-password" name="confirm-password" placeholder="تأكيد كلمة المرور" />
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

<?php
            // Retrieve the alerts from the session
            $alerts = isset($_SESSION['alerts']) ? $_SESSION['alerts'] : array();

            // Check if there are any alerts
            if (!empty($alerts)) {
                // Loop through the alerts and display them
                foreach ($alerts as $alert) {
                        echo "<div style='color:red; margin:0;'>$alert</div>";
                }
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
                    

                    <div class="form-inline">
                        <div style="margin-right:95px; ">
                            <button type="submit" class="buttonn" name="serviceSubmitBtn">إنشاء الحساب</button>
                        </div>
                    </div>
                </form>
                <div id="error-message"></div>
                   
            </div>
        </div>
    </div>
    </div>
    <script src="Assets/js/validationSignin.js"></script>

</body>

</html>