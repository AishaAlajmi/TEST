<?php session_start(); ?>
<!DOCTYPE html>
<html>
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport">
    <title>نموذج لطلب خدمة إلكترونية</title>
    <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
  <link rel="stylesheet" href="Assets/css/Service_Form_Style.css">
  <link rel="stylesheet" href="Assets/css/services.css">
   <script src="Assets/js/validation2.js"></script>
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/navbarAndFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <a class="nav-item nav-link link-body-emphasis" href="Common_Questions.php">الأسئلة الشائعة</a>
                    <a class="nav-item nav-link link-body-emphasis" href="index.php#contact-us">تواصل معنا</a>
                </nav>
            </div>
        </div>
    </div> 
  <!--END HEADER SECTION-->
         <div class="container2">
             <div class="form" >
                <!-- right side -->
                <div class="contact-info" style="background-color: #1D3539;">
                    <i class='bx bxs-file' style="color: #cfb99a; font-size: 6.5em; text-align: center;margin-right:33%;"></i><br><br><br><br>
                
                    <h3 class="titlee">التقارير</h3><br>
                    <p class="textt">
                        <br>
                        طلب تقرير قانوني لدراسة موضوع القضية ومستنداتها واعداد تقرير منفصل بجميع جوانبها ويتضمن جهة الاختصاص والمسار والاجراءات النظامية وتقدير موقف العميل والتوصية
                        <br><br><br><br><br>
                        <img width="200px" hight="140px"src="Assets/images/darklogo.png" > 
                        <br><br><br><br><br>
                        <span style="color:#fff;">لطلب الخدمة الرجاء تعبئة النموذج</span>
                        <br><br><br><br>
                        <span style="color:#fff;"> ملاحظة: سيتم خصم 10% من قيمة الخدمة عند التسجيل </span>
                    </p>
                </div>
                <!-- left side -->
                <div class="contact-formm" style="background-color: #1d35391b !important;">
                    <form id="form" name="form" method="POST" action="Alert.html" enctype="multipart/form-data" onsubmit="return validateTagareer();">
                    <span class="error-message" style="color:red">*  تشير الى أن الخانة مطلوبة</span>  
             <?php  
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){  
                              include "isLogin.php" ;
                            }else{ ?>
                        <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                          <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="fname" name="fname"  placeholder="الاسم الأول" />
                        </div> <span class="error-message" id="fname-error"></span>
                        <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                          <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="mname" name="mname"  placeholder="الاسم الثاني"/>
                        </div> <span class="error-message" id="mname-error"></span>
                        <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                          <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="lname" name="lname" placeholder="الاسم الأخير" />
                        </div> <span class="error-message" id="lname-error"></span>
                        <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                          <input type="email"  style="background-color: #ffffffc9 !important;" class="input"  name="email" id="email"   placeholder="البريد الالكتروني" />
                        </div> <span class="error-message" id="email-error"></span>
                        <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                          <input type="tel" style="background-color: #ffffffc9 !important;" class="input" id="phone" name="phone"  placeholder="رقم الجوال" />
                        </div>  <span class="error-message" id="phone-error"></span>
                        <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                            <input type="tel" style="background-color: #ffffffc9 !important;" class="input" id="NationalID" name="NationalID"  placeholder="رقم الهوية الوطنية" />
                          </div> <span class="error-message" id="NationalID-error"></span>
                        <br>
                        <?php  }?>
                       <div class="form-inline">
                       <label for="date" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>تاريخ الموعد</label>
                            <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" onchange="checkDateAvailability()">
                        </div> <span class="error-message" id="date-error"></span>
                       <div class="form-inline">
                       <label for="time" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>اختر الوقت المفضل للموعد</label>
                          <select id="time" name="time">
                          <option value=""></option>
                              <option value="08:00">8:00 AM - 9:00 AM</option>
                              <option value="09:00">9:00 AM - 10:00 AM</option>
                              <option value="10:00">10:00 AM - 11:00 AM</option>
                              <option value="11:00">11:00 AM - 12:00 PM</option>
                              <option value="12:00">12:00 PM - 1:00 PM</option>
                              <option value="01:00">1:00 PM - 2:00 PM</option>
                              <option value="02:00">2:00 PM - 3:00 PM</option>
                              <option value="03:00">3:00 PM - 4:00 PM</option>
                          </select>
                        </div><span class="error-message" id="time-error"></span>
                        <div class="input-container textarea" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                          <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="brief" name="brief" placeholder="نبذه عن الموضوع"><br>
                        </div> <span class="error-message" id="brief-error"></span>
                        <div class="form-inline">
                            <label for="file">ارفاق ملف</label><div style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                            <input type="file" id="file" name="file" accept=".pdf,.png," value="upload" maxlength="4194304"onchange="checkFileSize(this)">
                            <br><br> 
                        </div>
                        <?php  $var=$_GET['var'];?>
                        <input type="hidden" id="var"  name="var" value="<?php echo $var; ?>"/>
                        <span class="error-message" id="file-error"></span>
                        <span class="error-message" style="color:black">مسموح فقط برفع الصور وملفات pdf</span>
                        <div id="error-message"></div>

                        <div dir="ltr" style="margin-left:30px; margin-right:30px;"> 
                          <button type="submit"  class="buttonn" name="serviceSubmitBtn"  >إرسال الطلب</button>
                        </div>
                  </form>
              </div> 
            </div>
          </div>
        </div>
    <!-- footer start-->
    <?php include 'footer.php' ;?>
    <!-- footer end-->
  </body>
</html>
