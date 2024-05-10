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
     <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <link rel="stylesheet" href="Assets/css/navbarAndFooter.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
 </head>

 <body dir="rtl">
     <!-- header section -->
     <div class="container5" style="margin-top:5%;">
         <div class="row">
             <div class="jumbotron ">
                 <center>
                    <?php
                        if ($is_empty == 1) { ?>
                        <img src="../Assets/images/check-mark.png" style=" width:150px;"><br><rbr>
                        <h2 class="text-center">تم قبول الطلب بنجاح</h2><br><br>
                            <h5 class="text-center">تم إرسال رسالة نصية لإعلام العميل بقبول الطلب
                                <br><br> ستصله الفاتورة بالسعر المحدد عبر بريده الإلكتروني
                            </h5>
                            <div class="btn-group" style="margin-top:50px; ">
                                <a href="adminmyaccount.php" class="disabled_button">عودة للحساب</a>
                            </div>
                        <?php } else if ($is_empty == 2) { ?>
                            <img src="../Assets/images/check-mark.png" style=" width:150px;"><br><rbr>
                            <h2 class="text-center">تم رفض الطلب بنجاح</h2><br><rbr>
                                <h5 class="text-center">تم إرسال رسالة نصية لإعلام العميل برفض الطلب <h5>
                                        <div class="btn-group" style="margin-top:50px; ">
                                            <a href="adminmyaccount.php" class="disabled_button">عودة للحساب</a>
                                        </div>
                                    <?php
                                } ?>
                 </center>
             </div>
         </div>
     </div>

 </body>

 </html>