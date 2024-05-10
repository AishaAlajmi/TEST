<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الأسئلة الشائعة</title>
    <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/navbarAndFooter.css">
    <link rel="stylesheet" href="Assets/css/Common_Questions.css">
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
                    <a class="nav-item nav-link link-body-emphasis active" href="#">الأسئلة الشائعة</a>
                    <a class="nav-item nav-link link-body-emphasis" href="index.php#contact-us">تواصل معنا</a>
                </nav>
            </div>
        </div>
    </div>
    
    </div>
    <!-- FAQ section -->
    <div class="FAQ">
        <div class="container">
            <h1>الأسئلة الشائعة</h1>
            <br>
            <div class="layout">
                <?php
                // Include the PHP file to fetch questions
                include 'Common_Questions2.php';

                // Check if there are questions or an error message
                if (empty($questions)) {
                    // Display the error message
                    echo '<p>لا يوجد أسئة شائعة في الوقت الراهن</p>';
                } else {
                    // Loop through the fetched questions and display them
                    foreach ($questions as $question) {
                        echo '<div class="accordion">';
                        echo '<div class="accordion__question">';
                        echo '<p>' . $question['title'] . '</p>';
                        echo '<i class="bx bxs-chevron-down"></i>';
                        echo '<i class="bx bxs-chevron-up"></i>';
                        echo '</div>';
                        echo '<div class="accordion__answer">';
                        echo '<p>' . $question['answer'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        let answers=document.querySelectorAll(".accordion");
        answers.forEach((event)=>{
            event.addEventListener('click',()=>{
                if(event.classList.contains("active")){
                    event.classList.remove("active");
                }
                else{
                    event.classList.add("active");
                }
            })
        })
    </script>

    <!-- footer section -->
    <?php include 'footer.php';?> 
</body>

</html>
