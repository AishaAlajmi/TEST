<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>الأسئلة الشائعة</title>
    <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/navbarAndFooter.css">
    <link rel="stylesheet" href="../Assets/css/Admin_Tabels.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">

</head>

<body>
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
                <a class="nav-item nav-link link-body-emphasis" href="adminmyaccount.php">حسابي</a>
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
                <a class="nav-item nav-link link-body-emphasis active" href="Common_Questions.php">الاسئلة الشائعة</a>
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

    <!-- Question section -->
    <div class=Question>
        <div class="album py-5 bg-body slide ">
            <div class="container">
                <h1>الأسئلة الشائعة</h1>
                <br><br>
                <!-- Add a button to trigger the addition of new questions -->
                <div class="add">
                    <button id="addQuestionButton" class="btn addButton">إضافة سؤال جديد</button>
                    <!-- Create a form for adding new questions (initially hidden) -->
                    <div id="addQuestionForm" style="display: none;">
                        <form method="POST" action="Add_Question.php">
                            <div class="form-item">
                                <label for="newQuestion">السؤال:</label>
                                <input type="text" name="newQuestion" required >
                            </div>

                            <div class="form-item">
                                <label for="newAnswer">الإجابة:</label>
                                <input type="text" name="newAnswer" required>
                            </div>

                            <!-- Allow the user to choose the preview option -->
                            <div class="form-item">
                                <label for="preview">عرض السؤال للمستخدم</label>
                                <input type="checkbox" name="preview">
                            </div>

                            <div class="form-item">
                                <input type="submit" value="إضافة" class="btn btn-sm addButton">
                            </div>

                        </form>
                    </div>
                </div>

                <div class="responsive_table">
                    <table>
                        <thead>
                        <tr>
                            <th>رقم السؤال</th>
                            <th>السؤال</th>
                            <th>الإجابة</th>
                            <th>عرض السؤال</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include('Common_Questions2.php')
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section -->
    <?php include 'Footer.php'; ?>

    
</body>

</html>
