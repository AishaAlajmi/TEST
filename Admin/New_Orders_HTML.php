<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> الطلبات الجديدة</title>
    <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Libre+Baskerville:ital@0;1&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/Admin_Tabels.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/navbarAndFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">

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
                    <button class="btn btn-sm dropdown-toggle active" id="ordersDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <!-- shop section -->

    <section id=shopping>
        <div class="album py-5 bg-body slide ">
            <div class="container " style="color:#1D3539; ">
                <h1>سجل الطلبات الجديدة </h1><br><br>

                <div class="responsive_table">
                <table>
                    <tr>
                        <th>رقم الطلب</th>
                        <th>اسم العميل</th>
                        <th>رقم الجوال</th>
                        <th>الخدمة</th>
                        <th>موعد الطلب</th>
                        <th>السعر</th>
                        <th>الحالة</th>
                        <th>تفاصيل</th>
                    </tr>
                    <tbody>
                    <?php include 'New_Orders_PHP.php'; ?>
                    </tbody>
                </table>
                </div>

            </div>
        </div>
    </section>

    <!-- footer section -->
    <?php include 'Footer.php'; ?>
    <script>

</body>
</html>
