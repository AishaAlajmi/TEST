 <?php
    session_start();
    $is_empty =  $_GET['is_empty'];

    ?>
 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../Assets/css/Avaliable_Times.css">
     <title> إشعار تنفيذ</title>
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
                         <a class="btn btn-sm" href="#">مدير الموقع</a>
                     </div>
                 </div>
             </header>

             <div class="nav-scroller py-1 mb-3 border-bottom">
                 <nav class="nav nav-underline justify-content-evenly">
                     <a class="nav-item nav-link link-body-emphasis" href="#">حسابي</a>
                     <a class="nav-item nav-link link-body-emphasis" href="Orders_Admin.php">الطلبات الجديدة</a>
                     <a class="nav-item nav-link link-body-emphasis" href="#">الطلبات السابقة</a>
                     <a class="nav-item nav-link link-body-emphasis active" href="#">تغيير المواعيد المتاحة</a>
                     <a class="nav-item nav-link link-body-emphasis" href="#">الاسئلة الشائعة</a>
                 </nav>
             </div>
         </div>
     </div>
     <div class="container5" style="margin-top:5%;">
         <div class="row">
             <div class="jumbotron ">
                 <center>
                     <?php if ($is_empty == 2) { ?>
                         <img src="../Assets/images/danger.png" style=" width:150px;">
                         <h1 class="text-center">إلغاء إتاحة موعد</h2>
                             <h3 class="text-center">لقد تم تعطيل هذا الوقت مسبقًا من قبل مدير الموقع
                                 <br> لن يتمكن المستخدمون من الحجز في نفس التاريخ والوقت
                             </h3>
                             <div class="btn-group" style="margin-top:50px; ">
                                 <a href="AvaliableTimes_Admin.php" class="disabled_button">رجوع</a>
                             </div>
                         <?php } else if ($is_empty == 1) { ?>
                             <img src="../Assets/images/danger.png" style=" width:150px;">
                             <h1 class="text-center">إلغاء إتاحة موعد</h2>
                                 <h3 class="text-center">نأسف لديك موعد محجوز في هذا الوقت <br>
                                     لن تتمكن من الغاء الوقت </h3>
                                 <div class="btn-group" style="margin-top:50px; ">
                                     <a href="AvaliableTimes_Admin.php" class="disabled_button">رجوع</a>
                                 </div>
                             <?php  } else if ($is_empty == 3) { ?>
                                 <img src="../Assets/images/check-mark.png" style=" width:150px;">
                                 <h1 class="text-center">إلغاء إتاحة موعد</h2>
                                     <h3 class="text-center">تم تعطيل هذا الوقت بنجاح
                                         <br> لن يتمكن المستخدمون من الحجز في نفس التاريخ والوقت
                                     </h3>
                                     <div class="btn-group" style="margin-top:50px; ">
                                         <a href="AvaliableTimes_Admin.php" class="disabled_button">رجوع</a>
                                     </div>
                                 <?php } else if ($is_empty == 4) { ?>
                                     <img src="../Assets/images/check-mark.png" style=" width:150px;">
                                     <h1 class="text-center">تم قبول الطلب بنجاح</h2>
                                         <h3 class="text-center">تم إرسال رسالة نصية لإعلام العميل بقبول الطلب
                                             <br> ستصله الفاتورة بالسعر المحدد عبر بريده الإلكتروني
                                         </h3>
                                         <div class="btn-group" style="margin-top:50px; ">
                                             <a href="Orders_Admin.php" class="disabled_button">رجوع</a>
                                         </div>
                                     <?php } else if ($is_empty == 5) { ?>
                                         <img src="../Assets/images/check-mark.png" style=" width:150px;">
                                         <h1 class="text-center">تم رفض الطلب بنجاح</h2>
                                             <h3 class="text-center">تم إرسال رسالة نصية لإعلام العميل برفض الطلب <h3>
                                                     <div class="btn-group" style="margin-top:50px; ">
                                                         <a href="Orders_Admin.php" class="disabled_button">رجوع</a>
                                                     </div>
                                                 <?php
                                                } ?>
                 </center>
             </div>
         </div>
     </div>

 </body>

 </html>