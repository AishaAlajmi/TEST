<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد</title>
    <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/navbarAndFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <style>
        .thank-you-container {
          margin: 0 auto;
          max-width: 700px;
          padding: 0 4em;
        }
    
        .thank-you-box {
          border: 1px solid #c0c0c0;
          color: #000;
          padding: 1em 0.5em;
          border-radius: 10px;
          text-align: center;
        }
        body {
    direction: rtl;
    font-family: 'Almarai', sans-serif;
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
                        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#"><img src="Assets/images/Logo.png" alt="" width="160px" height="110px"></a>
                    </div>
                    <?php include "accountButton.php" ; ?>
                </div>
            </header>

            <div class="nav-scroller py-1 mb-3 border-bottom">
                <nav class="nav nav-underline justify-content-evenly">
                    <a class="nav-item nav-link link-body-emphasis" href="index.php">الرئيسية</a>
                    <a class="nav-item nav-link link-body-emphasis active" href="index.php#products">خدماتنا</a>
                    <a class="nav-item nav-link link-body-emphasis" href="index.php#consultations">حجز موعد</a>
                    <a class="nav-item nav-link link-body-emphasis" href="#">الأسئلة الشائعة</a>
                    <a class="nav-item nav-link link-body-emphasis" href="index.php#contact-us">تواصل معنا</a>
                </nav>
            </div>
        </div>
    </div> <!--END HEADER SECTION-->
   
    <!-- your code -->
    <br />
    <div class="thank-you-container">
        <div class="thank-you-box">
          <div class="mb-4 text-center">
            <img src="Assets/images/check-mark.png" width="200" height="auto" alt="">
          </div>
          <br />
          <?php if()
          <h1 style="font-size: 30px"> تم حجز موعدك بنجاح !</h1>
          <br />
          <p  style="font-size: 20px">
            انتظر إرسال فاتورة الاستشارة على بريدك الالكتروني أو على حسابك على الموقع 
          </p>
          <!-- <h4 style="color: #af9d80;">ملاحظة يجب سداد المبلغ في غضون ٣ ايام من اصدار الفاتورة لضمان تأكيد حجزك</h4> -->
          <br />
          <button class="btn btn-outline-success" style="
                background-color: #033135;
                border: none;
                padding: 10px 25px;
                text-align: center;
                text-decoration: none;
                font-size: 18px;
                border-radius: 30px;
                font-family: 'Almarai', sans-serif;
    
              ">
            <a href="index.php" style="color: #f7e6ca"> العودة الى الرئيسية </a>
          </button>
        </div>
        <br />
      </div>
    
    <!-- Footer section -->
    <?php include 'footer.php'; ?>

</body>

</html>