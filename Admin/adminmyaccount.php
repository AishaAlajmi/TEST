
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B8GJ3LR0CM"></script>

    <?php include 'myaccountvalidation.php'; ?> <!--Orders_Details2-->
    <meta charset="utf-8" />
    <title>حسابي</title>
    <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
    <script src="../Assets/js/myaccountvalidation.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/navbarAndFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">

</head>


<body dir="auto" style="text-align: right;">
<!-- header section -->
<div class="head">
    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center logo">
                    <a class="blog-header-logo text-body-emphasis text-decoration-none" href="../index.php"><img src="../Assets/images/Logo.png" alt="" width="160px" height="110px"></a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center align-self-end">
                    <div class="dropdown" style="  direction: ltr;">
                        <button class="btn btn-sm dropdown-toggle" id="accountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            مدير الموقع
                        </button>
                        <div class="dropdown-menu" aria-labelledby="accountDropdown"  style="text-align: center;">
                            <a class="dropdown-item" href="../Signout.php">تسجيل خروج</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="nav-scroller py-1 mb-3 border-bottom">
            <nav class="nav nav-underline justify-content-evenly">
                <a class="nav-item nav-link link-body-emphasis active" href="adminmyaccount.php">حسابي</a>
                <a class="nav-item nav-link link-body-emphasis " href="all_Clients_HTML.php">العملاء</a>


                <div class="dropdown">
                    <button class="btn btn-sm dropdown-toggle" id="appointmentsDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        المواعيد
                    </button>
                    <div class="dropdown-menu" aria-labelledby="appointmentsDropdown">
                        <a class="dropdown-item" href="New_Appointements_HTML.php">المواعيد الجديدة</a>
                        <a class="dropdown-item" href="All_Appointements_HTML.php">جميع المواعيد</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="btn btn-sm dropdown-toggle " id="ordersDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        الطلبات
                    </button>
                    <div class="dropdown-menu" aria-labelledby="ordersDropdown">
                        <a class="dropdown-item" href="New_Orders_HTML.php">الطلبات الجديدة</a>
                        <a class="dropdown-item" href="All_Orders_HTML.php">جميع الطلبات</a>
                    </div>
                </div>

                <a class="nav-item nav-link link-body-emphasis" href="AvaliableTimes_Admin.php">تغيير المواعيد المتاحة</a>
                <a class="nav-item nav-link link-body-emphasis " href="Common_Questions.php">الاسئلة الشائعة</a>
            </nav>
        </div>
        <script>
            // Add JavaScript to handle the dropdown toggle
            document.querySelectorAll('.dropdown-toggle').forEach(function (dropdownToggle) {
                dropdownToggle.addEventListener('click', function () {
                    this.nextElementSibling.classList.toggle('show');
                });
            });
        </script>
    </div>
</div> <!--END HEADER SECTION-->
<main>


<?php


// Retrieve the alerts from the session
$alerts = isset($_SESSION['alerts']) ? $_SESSION['alerts'] : array();

// Check if there are any alerts
if (!empty($alerts)) {
    // Loop through the alerts and display them
    foreach ($alerts as $alert) {
        if($alert=="تم تحديث الهوية الوطنية بنجاح." || $alert== "تم تحديث رقم الجوال بنجاح." ||
           $alert== "تم تحديث البريد الإلكتروني بنجاح." || $alert== "تم تحديث الإسم بنجاح."){
                echo "<div class='alert' style='color:green'>$alert</div>";
        }else{
            echo "<div class='alert' style='color:red'>$alert</div>";
        }
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

<div class="container" style=" font-family: 'Almarai', sans-serif !important;">
    <form method="POST" class="row" action="myaccountvalidation.php"  onsubmit="return validateForm();">
        <div class="col-lg-8 pb-5" style="text-align: right !important ; ">
            <br>
            <h1 style="    margin-top: 0;margin-bottom: 0.5rem;font-weight: 500;line-height: 1.2;color: var(--bs-heading-color); color:#1D3539;">حسابي</h1>
        </div>
        <div class="boxs col-md-6">
            <div class="form-group">
                <label for="account-fn">الاسم الأول</label>
                <input class="form-control" value="<?php echo $Fristname; ?>" style="border-radius: 15px"  id="first-name" class="form-control" type="text" name="account-fn" />
            </div><span class="error-message" id="fname-error"></span><br>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-ln">اسم الأب</label>
                <input class="form-control" value="<?php echo $Middlename; ?>" style="border-radius: 15px"  id="middle-name" class="form-control" type="text" name="account-mn" />
            </div><span class="error-message" id="mname-error"></span><br>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-ln">الاسم الأخير</label>
                <input class="form-control" value="<?php echo $Lastname; ?>" style="border-radius: 15px"  id="last-name" class="form-control" type="text" name="account-ln"/>
            </div><span class="error-message" id="lname-error"></span><br>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-ID">الهوية الوطنية</label>
                <input class="form-control" value="<?php echo $NationalID; ?>" style="border-radius: 15px"  id="ID" class="form-control" type="text" name="ID"  />
            </div><span class="error-message" id="NationalID-error"></span><br>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-phone">رقم الجوال</label>
                <input class="form-control" value="<?php echo $phone; ?>" style="border-radius: 15px"  id="phone" class="form-control" type="text" name="account-phone" placeholder="0500000000"  />
            </div><span class="error-message" id="phone-error">
            </span><br>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-email">البريد الالكتروني</label>
                <input class="form-control" value="<?php echo $email; ?>" style="border-radius: 15px" class="form-control" id="email" type="email" name="account-email" placeholder="abcd@example.com" />
            </div><span class="error-message" id="email-error"></span><br>
        </div>
        <div class="col-md-6">
            <label for="password">
                <a href="forgot_pass.php">تعديل كلمة المرور </a>
            </label>
        </div>
        
       
        <br> <br> <br> <br>
        <div id="error-message"></div>
            <button type="submit"  class="button" name="serviceSubmitBtn" style=" background-color:#CFB99A !important;border: 7px solid #CFB99A; border-radius: 7px;">
                    تعديل بياناتي
           </button>

    </form>

</div> <br>

</main>
<!-- Footer section -->
<?php include 'footer.php' ;?> 

</body>



</html>
