<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B8GJ3LR0CM"></script>

    <?php include 'Orders_Details2.php'; ?>
    <meta charset="utf-8" />
    <title> تفاصيل الموعد</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/navbarAndFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <style>
        .textarea-2 {
            border-radius: 15px;
            width: 530px;
            padding: 10px;
            height: 300px;
            border: 1px solid #ddd;
            background-color: #e9ecef;
            resize: none;
            overflow: hidden;
            max-height: 700px;
        }
        @media (max-width:480px) {
            .textarea-2 {
                border-radius: 15px;
                width: 350px;
                height: 400px;
                width: 100%;
            }
        }
        @media (max-width: 1500px) {
            .textarea-2 {
                width: 95%;
            }
        }
        @media (max-width: 850px) {
            .textarea-2 {
                width: 90%;
            }

        }
    </style>
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
                    <button class="btn btn-sm dropdown-toggle active" id="appointmentsDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        المواعيد
                    </button>
                    <div class="dropdown-menu" aria-labelledby="appointmentsDropdown">
                        <a class="dropdown-item" href="New_Appointements_HTML.php">المواعيد الجديدة</a>
                        <a class="dropdown-item" href="All_Appointements_HTML.php">جميع المواعيد</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="btn btn-sm dropdown-toggle" id="ordersDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    <!-- your code -->

    <body dir="auto" style="text-align: right;">

        <main>

            <div class="container" style="font-family:Amiri !important;">
                <form action="" method="post" class="row">
                    <div class="col-lg-8 pb-5" style="text-align: right !important ; ">
                        <br>
                        <h1 style="    margin-top: 0;
margin-bottom: 0.5rem;
font-weight: 500;
line-height: 1.2;
color: var(--bs-heading-color); color:#1D3539;">تفاصيل الخدمة</h1>
                    </div>
                    <div class="boxs col-md-6">
                        <div class="form-group">
                            <label for="account-fn">الاسم الأول</label>
                            <input class="form-control" style="border-radius: 15px" value="<?php echo $Fristname; ?>" id="first-name" class="form-control" type="text" name="account-fn" placeholder="الاسم" disabled="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-ln">اسم الأب</label>
                            <input class="form-control" style="border-radius: 15px" value="<?php echo $Middlename; ?>" id="middle-name" class="form-control" type="text" name="account-mn" placeholder="الاسم" disabled />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-ln">الاسم الأخير</label>
                            <input class="form-control" style="border-radius: 15px" value="<?php echo $Lastname; ?>" id="last-name" class="form-control" type="text" name="account-ln" placeholder="الاسم" disabled />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-ID">الهوية الوطنية</label>
                            <input class="form-control" style="border-radius: 15px" value="<?php echo $NationalID; ?>" id="ID" class="form-control" type="text" name="clientID" disabled />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-phone">رقم الجوال</label>
                            <input class="form-control" style="border-radius: 15px" value="<?php echo $phone; ?>" id="phone" class="form-control" type="text" name="account-phone" placeholder="+966 500000000" disabled />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-email">البريد الالكتروني</label>
                            <input class="form-control" style="border-radius: 15px" value="<?php echo $email; ?>" class="form-control" type="email" name="account-email" placeholder="abcd@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" disabled />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Date">تاريخ الموعد</label>
                            <br> <input value="<?php echo $Date; ?>" disabled />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="time">وقت الموعد</label>
                            <br> <input value="<?php echo $time; ?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="time">تفاصيل الاستشارة</label>
                        <div class="form-group textarea-2" id="last-name" class="form-control" type="text" name="account-ln" disabled style="border-radius: 15px"><?php echo $Brief; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fiile">الملف المرفق</label>
                        <br>
                        <div class="form-group">
                            <object data="../uploads/<?php echo $File; ?>" width="230" height="250"> </object>
                        </div>
                    </div>

                    <input type="hidden" name="appointmentId" value="<?php echo $Appointment_id; ?>">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="totalPrice">السعر الاصلي</label>
                            <input class="form-control" maxlength="4" style="border-radius: 15px" class="form-control" value="<?php echo $initial_price; ?>" type="text" name="totalPrice" disabled />
                            <br>
                            <label for="totalPrice">خصم عملاء بينة</label>
                            <input class="form-control" maxlength="4" style="border-radius: 15px" class="form-control" value="<?php if ($registered == 1) {
                                                                                                                                    if ($total_price != 0)
                                                                                                                                        echo "10%";
                                                                                                                                } else {
                                                                                                                                    echo "0%";
                                                                                                                                } ?>" type="text" name="totalPrice" disabled />
                            <br> <label for="totalPrice">السعر الاصلي</label>
                            <input class="form-control" maxlength="4" style="border-radius: 15px" class="form-control" value="<?php echo "15%"; ?>" type="text" name="totalPrice" disabled />
                            <br> <label for="totalPrice">الضريبة المضافة</label>
                            <input class="form-control" maxlength="4" style="border-radius: 15px" class="form-control" value="<?php echo $total_price; ?>" type="text" name="totalPrice" disabled />
                            <?php
                                if ($registered == 1) {
                                    if ($total_price != 0) {
                                        echo "تم تحديث السعر بنجاح. ملاحظة: تم حساب الضريبة المضافة 15%، وتم تطبيق الخصم الخاص بعملاء بينة 10٪";
                                    } else {
                                        echo "";
                                    }
                                } else {
                                    if ($total_price != 0)
                                        echo "تم تحديث السعر بنجاح. ملاحظة: تم حساب الضريبة المضافة 15%";
                                }
                                ?> <br> <br>
                                <?php if ($status == "تم القبول" || $status == "تم الرفض") { ?>
                                <?php } else{  ?> 
                                    <div class="container" style="display: flex !important; justify-content: center !important;font-family:Amiri !important;">
                                        <input class="form-control" maxlength="4" style="border-radius: 15px" class="form-control" type="text" name="totalPrice" placeholder="يرجى تحديد سعر الخدمة" />
                                        <button type="submit" name="edit" class="button" style=" background-color:#CFB99A !important; margin-right:10px;border: 7px solid #CFB99A; border-radius: 7px;">تحديث</button>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="fiile">الملف المرفق</label>
                            <br>
                            <div class="form-group">
                                <object data="../uploads/<?php echo $File; ?>" width="230" height="250"> </object>
                            </div>
                        </div>
                        <br> <br> <br> <br>
                        <?php if ($status == "تم الرفض") { 
                               }else if ($status == "تم القبول"){ ?>
                                     <center>
                                        <div class="container" style="justify-content: center !important;font-family: Amiri !important;">
                                            <a href="invoice.php?appointment_id=<?php echo $appointmentId ?>" 
                                                style="display: inline-block; background-color: #1D3539; border: 7px solid #1D3539; color: #FFF; text-decoration: none; padding: 10px 20px; border-radius: 7px;">
                                                عرض الفاتورة
                                            </a>
                                         </div>
                                    </center> <?php
                               } else { ?>
                                    <div class="container" style="justify-content: center !important;font-family: Amiri !important;">
                                    <input type="hidden" name="number" value="<?php echo $phone; ?>">
                                    <input type="hidden" name="appointmentId" value="<?php echo $appointmentId; ?>">
                                    <input type="hidden" name="price" value="<?php echo $total_price; ?>">
                                    <input type="hidden" name="name" value="<?php echo $Fristname . " " . $Lastname; ?>">
                                    <center>
                                        <a type="submit" name="cancel_btn" href="API.php?appointment_id=<?php echo $appointmentId; ?>&type=reject" 
                                        style="display: inline-block; background-color: #CFB99A; border: 7px solid #CFB99A; color: #FFF; text-decoration: none; padding: 10px 20px; border-radius: 7px;">
                                            حذف
                                        </a>
                                        <span style="margin-right:50px;"></span>
                                        <a href="invoice.php?appointment_id=<?php echo $appointmentId ?>" 
                                        style="display: inline-block; background-color: #1D3539; border: 7px solid #1D3539; color: #FFF; text-decoration: none; padding: 10px 20px; border-radius: 7px;">
                                            اصدار الفاتورة
                                        </a>
                                    </center>
                                </div>
                            <?php    }  ?>                              
                </form>
            </div> <br>
            </div>
        </main>
    </body>


<!-- footer section -->
<?php include 'Footer.php'; ?>



</body>

</html>