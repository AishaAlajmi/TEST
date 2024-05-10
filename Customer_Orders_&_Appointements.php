<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلباتي</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/Admin_Tabels.css">
    <link rel="stylesheet" href="Assets/css/navbarAndFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">

    <style>
        .frame-container {
            position: relative;
        }

        .frame {
            border: 1px solid black;
            display: none;
            width: 100%;
            height: 400px;
        }

        .frame-button {
            position: absolute;
            top: -1px;
            border: 1px solid black;
            background-color: white;
            padding: 5px 10px;
            font-size: 14px;
            cursor: pointer;
        }
    </style>

    <script>
        function changeFrame(frameId, src) {
            var iframes = document.getElementsByClassName("frame");
            for (var i = 0; i < iframes.length; i++) {
                iframes[i].style.display = "none";
            }
            document.getElementById(frameId).src = src;
            document.getElementById(frameId).style.display = "block";
        }

        // Display iframe1 automatically
        window.addEventListener("load", function() {
            changeFrame('iframe1', 'Customer_Orders.php');
        });

    </script>
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
                <?php include 'accountButton.php';?>
            </div>
        </header>
        <div class="nav-scroller py-1 mb-0 border-bottom">
            <nav class="nav nav-underline justify-content-evenly">
                <a class="nav-item nav-link link-body-emphasis" href="index.php">الرئيسية</a>
                <a class="nav-item nav-link link-body-emphasis" href="index.php#products">خدماتنا</a>
                <a class="nav-item nav-link link-body-emphasis" href="index.php#consultations">حجز موعد</a>
                <a class="nav-item nav-link link-body-emphasis" href="Common_Questions.php">الأسئلة الشائعة</a>
                <a class="nav-item nav-link link-body-emphasis" href="index.php#contact-us">تواصل معنا</a>
            </nav>
        </div>
    </div>
</div>
<!-- your code -->
<section id="shopping">
    <div class="album py-5 bg-body slide">
        <div class="container">
            <h1>طـلبـاتـي</h1><br><br>
            <div class="frame-container">
                <button class="frame-button" style="background-color:#CFB99A !important; border-radius: 6px; color: #1D3539;"onclick="changeFrame('iframe1', 'Customer_Orders.php')">الطلبات</button>

                <iframe id="iframe1" class="frame" src="Customer_Orders.php" frameborder="0" width="100%" height="400px" sandbox></iframe>
            </div>
            <br><br>
            <div class="frame-container">
                <button class="frame-button" style="background-color:#CFB99A !important; border-radius: 6px; color: #1D3539;"onclick="changeFrame('iframe2', 'Customer_Appointmenets.php')">المواعيد</button>
                <iframe id="iframe2"class="frame" src="Customer_Appointmenets.php" frameborder="1" width="100%" height="400px" sandbox></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Footer section -->
<?php include 'footer.php' ;?>

</body>

</html>