<?php 
include 'database.php';
?>
<html>
  <head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B8GJ3LR0CM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-B8GJ3LR0CM');
</script>
    <meta charset="utf-8">
    <title>نسيت كلمة المرور</title>
  <link rel="stylesheet" href="assets/css/Service_Form_Style.css">
  <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
  <style>
    body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-color: #1D3539;
    font-family:Amiri !important;
}
    .login {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url(furniture3.jpg);
    background-size: cover;
    background-position: center;
}

.wapper {
    width: 420px;
    background-color: #f1f1f1;
    border-radius: 10px;
    border: rgba(255, 255, 255, .2);
    box-shadow: 0 0 10px rgb(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    padding: 30px 40px;
}

.wapper h1 {
    font-size: 22px!important;
    text-align: center;
}

.wapper .input-box {
    position: relative;
    height: 50px;
    margin: 30px 0;
}

.input-box input {
    width: 100%;
    height: 100%;
    background: white;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 6px;
    color: #1c1c1c;;
    font-size: 16px;
    padding: 20px 20px 20px 20px;
}

.input-box input::placeholder {
    color: #545454;
}

.input-box i {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

.wapper .remembr-forget {
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
}

.remembr-forget label input {
    accent-color: #fff;
    margin-left: 3px;
}

.remembr-forget a {
    color: #fff;
    text-decoration: none;
}

.remembr-forget a:hover {
    text-decoration: underline;
}

.wapper .btn {
    display: block;
  font-family: 'Almarai', sans-serif !important;
  padding: 10px;
  margin-top: 30px;
  width: 100%;
  background-color: #1D3539;
  border: 2px solid #1D3539;
  color: #CFB99A;
  font-size: 0.95rem;
  font-weight:800;
  font-size: 20px;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 15px !important; 
}
.wapper .btn:hover {
  color: #1D3539;
  background-color: #CFB99A;
  border-color: #CFB99A;
  }

.wapper .register-link {
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
}

.register-link p a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.register-link p a:hover {
    text-decoration: underline;
}
  </style>
</head>
  <body dir="rtl">
        <!-- Content -->
  <main>
  
  <div class="login" style="width: 700px; height:500; margin:auto; ">
        <div class="wapper">
        <form action="SendPasswordReset.php" method="post">
    <h1>إعادة تعيين كلمة المرور </h1>
    <div class="input-box">
        <input type="email" placeholder="البريد الإلكتروني" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" id="email"  value="" required >
        <i class='bx bxs-user'></i>
    </div>
    <?php
    if(isset($_GET["msg"])){ 
        $msg= $_GET["msg"] ;
        echo'<h4 style=" color: green; text-align: right; margin-top: 10px;" >' . $msg . '</h4>';
    }
    if(isset($_GET["error"])){ 
        $error= $_GET["error"] ;
        echo'<h4 style=" color: red; text-align: right; margin-top: 10px;" >' . $error . '</h4>';
      }
    ?>
    <button type="submit" class="btn" name="submit" onclick="location.href ='SendPasswordReset.php';">إرسال </button>
</form>
        </div>
    </div>
    </main>

    <script >
    const theBody = document.querySelector('body');
    const openNav = document.querySelector('.menu-bar button');
    const closeNav = document.querySelector('.close-nav button');
    const Navbar = document.querySelector('.navbar');



    function showHide() {
        Navbar.classList.toggle('show');
        // bodyScroll();
    }

    openNav.onclick = showHide;
    closeNav.onclick = showHide;
    </script>
    </div>


  </body>

</html>