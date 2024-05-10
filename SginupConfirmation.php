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
    .thank-you{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      margin: 3rem 0 4rem 0;
      box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
      padding: 3rem 0 4rem 0;
      text-align: center;
    }
    .thank-you h1{font-size: 30px; margin: 2rem 1.5rem 1rem;}
    .thank-you p{font-size: 20px; margin: 0 1.5rem 2rem;}
    .thank-you img{width: 200px; height: auto;}
    .thank-you button{background-color: #CFB99A !important;
                border: none;
                padding: 10px 25px;
                text-align: center;
                text-decoration: none;
                font-size: 18px !important;
                border-radius: 6px;}
    @media (max-width:500px) {
      .thank-you h1{
      font-size: 19px;
    }
    .thank-you p{
      font-size: 15px;
    }
    .thank-you img{width: 100px; height: auto;}
    .thank-you button{font-size: 10px !important;}
    }
    
      </style>
</head>

<body>
    <!-- header section -->
    <?php include 'header.php'; ?>
    <!-- your code -->
        <div class="container thank-you">
          <div class="mb-4 text-center">
            <img src="Assets/images/check-mark.png" alt="">
          </div>
          <h1> تم تسجيل حسابكم لدى بينة بنجاح !</h1>
          <p>
          الان يمكنك حجز المواعيد/الخدمات ورؤية سجل طلباتك
          </p>
          <!-- <h4 style="color: #af9d80;">ملاحظة يجب سداد المبلغ في غضون ٣ ايام من اصدار الفاتورة لضمان تأكيد حجزك</h4> -->
          <button class="btn">
          <a href="login.php" style="color: #fff; text-decoration:none"> تسجيل الدخول </a>
          </button>
          <br><br>
      </div>
    
    <!-- Footer section -->
    <?php include 'footer.php'; ?>

</body>

</html>
