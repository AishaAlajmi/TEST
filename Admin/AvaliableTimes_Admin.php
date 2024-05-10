<?php
    session_start();

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/Avaliable_Times.css">
    <title> تغيير المواعيد المتاحة </title> 
    <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/navbarAndFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/Admin_Tabels.css">
</head>

<body dir="rtl">
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
                </div>
            </header>

          
    <style>
        .nav-scroller .dropdown {
            margin-top: 3px;
        }
        .nav-scroller .dropdown-toggle {
            font-size: 16px;
        }
    </style>

    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-evenly">
            <a class="nav-item nav-link link-body-emphasis" href="adminmyaccount.php">حسابي</a>
            <a class="nav-item nav-link link-body-emphasis " href="all_Clients_HTML.php">العملاء</a>


            <div class="dropdown">
                <button class="btn btn-sm dropdown-toggle " id="appointmentsDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

            <a class="nav-item nav-link link-body-emphasis active" href="AvaliableTimes_Admin.php">تغيير المواعيد المتاحة</a>
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
    
<?php include 'AvaliableTimes.php'; ?>
 <!-- Question section -->
 <div class=Question>
        <div class="album py-5 bg-body slide ">
            <div class="container">
                <h1> تغيير المواعيد المتاحة </h1>
                <br><br>
                <!-- Add a button to trigger the addition of new questions -->
                <div class="add">
                    <button id="addQuestionButton" class="btn addButton">عدم إتاحة وقت محدد</button>
                    <!-- Create a form for adding new questions (initially hidden) -->
                    <div id="addQuestionForm" style="display: none;">
                        <div style="overflow-x:auto; color:#033135;">
                            <form id="form" name="form" action="" method="POST">
                                    <div class="form-item">
                                        <label for="newQuestion">اليوم:</label>
                                        <input type="date" id="day" name="day" min="<?php echo getCurrentDate(); ?>" value="<?= $date ?>" required>
                                        <p id="erro-msg1" class="error-message " ></p>
                                    </div>
                                    <div class="form-item">
                                        <label for="newAnswer">الوقت:</label>
                                        <select id="time" name="time" class="" value="<?= $time ?>">
                                            <option  selected value="0"> -- </option>
                                            <option value="08:00:00"> 8 -9  صباحًا</option>
                                            <option value="09:00:00"> 9 - 10  صباحًا</option>
                                            <option value="10:00:00"> 10 - 11  صباحًا</option>
                                            <option value="11:00:00"> 11 - 12  صباحًا</option>
                                            <option value="12:00:00"> 12 - 1  مساءً</option>
                                            <option value="13:00:00"> 1 - 2  مساءً</option>
                                            <option value="14:00:00"> 2 - 3  مساءً</option>
                                            <option value="13:00:00"> 3 - 4  مساءً</option>
                                            <option value="14:00:00"> 4 - 5  مساءً</option>
                                        </select>
                                        <p id="erro-msg2" class="error-message " ></p>
                                    </div>
                                    <div class="form-item">
                                    <button type="submit" name="updateBtn" id="updateBtn" class="disabled_button"  onclick="validateAvaliablityForm()" >
                                        عدم إتاحة هذا الوقت 
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
              <?php if (!empty($_GET['alert'])) {
                            if($_GET['alert']==1){ 
                                echo '<div class="success-message" style="color: red; margin-top: 10px;"> نأسف لديك موعد محجوز في هذا الوقت <br>
                                لن تتمكن من الغاء الوقت 
                                </div>';
                            }elseif($_GET['alert']==2){
                                echo '<div class="success-message" style="color: red; margin-top: 10px;">  
                                لقد تم تعطيل هذا الوقت مسبقًا من قبل مدير الموقع
                                    <br> لن يتمكن المستخدمون من الحجز في نفس التاريخ والوقت
                                </div>';
                            }elseif($_GET['alert']==3){
                                echo '<div class="success-message" style="color: green; margin-top: 10px;"> تم تعطيل هذا الوقت بنجاح
                                <br> لن يتمكن المستخدمون من الحجز في نفس التاريخ والوقت 
                                </div>';
                            } 
                        // Clear the alerts from the session
                         unset($_SESSION['alert']);
                         }?>
              <center>
                
                <div class="container">
                    <br><br><br>
                <p style="color:green">مواعيد العملاء باللون الأخضر  <span style="color:grey;margin-right:80px;">  المواعيد المعطلة باللون الرمادي</span></p>
                    
            <table class="responsive_table">
                 <tr>
                </tr>
                <tr>
                    <th>التاريخ</th>
                    <th>الوقت</th>
                    <th>التاريخ</th>
                    <th>الوقت</th>
                </tr>
                <tbody>
                <?php include 'All_Unavaliables_PHP.php'; ?>
                </tbody>
            </table>
           
            </center>
                </div>
            </div>
        </div>
</div>


         <script type="text/javascript" src="../Assets/js/validateAvaliablityForm.js" > </script>
     
         <?php
            function getCurrentDate() {
                date_default_timezone_set('Asia/Riyadh');
                $current_date = date("Y-m-d");
                return  $current_date;
            }
         ?>

    </body>
   
</html>
