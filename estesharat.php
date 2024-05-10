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
  <script src="Assets/js/validation.js"></script>
  <link rel="stylesheet" href="Assets/css/home.css">
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
  <!-- ---------------------------------------------------------------- -->
  <!-- Form Start -->
  <div class="container2">
             <div class="form" >
                <!-- right side -->
                <div class="contact-info" style="background-color: #1D3539;">
                    <i class='bx bxs-chat' style="color: #cfb99a; font-size: 6.5em; text-align: center;margin-right:33%;"></i><br><br><br><br>
                  
                    <h3 class="titlee">الاستشارات القانونية</h3><br>
                    <p class="textt">
                        <br>  
                        تُقدم هذه الاستشارات عبر تحديد موعد مناسب للعميل. <br>
                        توجد استشارات حضورية و ذلك بالحضور شخصيًا إلى مقر المكتب
                        أو استشارات عن بعد عبر الاتصال المرئي أو المكالمة الهاتفية.
                        <br><br><br><br><br>
                        <img width="200px" hight="140px"src="Assets/images/darklogo.png" > 
                        <br><br><br><br><br>
                        <span style="color:#fff;">لطلب الخدمة الرجاء تعبئة النموذج</span>
                        <br><br><br><br>
                        <span style="color:#fff;"> ملاحظة: سيتم خصم 10% من قيمة الخدمة عند التسجيل </span>
                    </p>
                    <br><br><br><br><br><br><br>
                </div>
                <!-- left side -->
                <div class="contact-formm" style="background-color: #1d35391b !important;">
                      <form id="form" name="form" method="POST" action="fromValidation.php" enctype="multipart/form-data" onsubmit="return validateForm();">
                      <span class="error-message" style="color:red">*  تشير الى أن الخانة مطلوبة</span>                    
                     <?php  
                          if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){  
                            include "isLogin.php" ;
                          }else{ ?>
                            <div> <label class="input-container" style="font-size: 15px;color:#a59379;"></label> </div>           
                            <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>                                            
                              <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="fname" name="fname" placeholder="الاسم الأول" value=""/>
                            </div> 
                            <span class="error-message" id="fname-error"></span>
                            <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                              <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="mname" name="mname"  placeholder="الاسم الثاني" value=""/>
                            </div> 
                            <span class="error-message" id="mname-error"></span>
                            <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                              <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="lname" name="lname" placeholder="الاسم الأخير" value=""/>
                            </div> 
                            <span class="error-message" id="lname-error"></span>
                            <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                              <input type="email"  style="background-color: #ffffffc9 !important;" class="input"  name="email" id="email"   placeholder="البريد الالكتروني"  value=""/>
                            </div> 
                            <span class="error-message" id="email-error"></span>
                            <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                              <input type="tel" style="background-color: #ffffffc9 !important;" class="input" id="phone" name="phone"  placeholder="رقم الجوال" value=""/>
                            </div>  
                            <span class="error-message" id="phone-error"></span>
                            <div class="input-container" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                                <input type="tel" style="background-color: #ffffffc9 !important;" class="input" id="NationalID" name="NationalID"  placeholder="رقم الهوية الوطنية" value=""/>
                              </div> 
                              <span class="error-message" id="NationalID-error"></span>
                            <br>
                            
                        <?php  }?>
                       
                        <div class="input-container">
                        <label style="font-size: large;" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
نوع الاستشارة</label><br> 
                        </div>

                        <div class="input-container ">
                            <input type="radio" id="place"  name="place" value="1"/>
                            <label style="font-size: large;">حضوريه</label><br> 
                        </div>
                        <div class="input-container ">
                          <input type="radio" id="place2"  name="place" value="2"/>
                          <label style="font-size: large;">عن بعد</label><br>
                        </div> 
                        <span class="error-message" id="place-error"></span>
                      
                        <div class="input-container" style="margin-top: 30px !important;">
                        <label style="font-size: large;" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>حالة الاستشارة</label><br> 
                        </div>
                        <div> 
                          <label class="input-container" style="font-size: 15px;color:#a59379;">
                              (الخدمة المستعجلة/الطارئة تقدم للعميل في الحالات المستعجلة التي تستدعي تدخل قانوني فوري لمواجهة واقعة معينة سواء بتقديم إستشاره أو القيام بعمل وذلك في الوقائع الجنائية أو توثيق حالة قانونية بهدف إثبات تصرف معين للحاجة له عند النزاع
                              )
                          </label> 
                        </div>
                        <div class="input-container ">
                            <input type="radio" id="urgent" name="urgent" value="1"/>
                            <label style="font-size: large;">طارئة</label>
                            <br>    
                        </div> 
                      
                        <div class="input-container ">
                          <input type="radio" id="urgent2" name="urgent" value="0"/>
                          <label style="font-size: large;">غير طارئة</label><br>
                        </div> 
                        <span class="error-message" id="urgent-error"></span>
                       
                        <div class="form-inline">
                        <label for="date" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>تاريخ الموعد</label>
                            <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" onchange="checkDateAvailability()">
                        </div> 
                        <span class="error-message" id="date-error"></span>
                        <div class="form-inline" id="time-select">
                        <label for="time-select">اختر الوقت المفضل للموعد</label>
                            <select id="time" name="time">
                           
                          </select>
                        </div>
                        <span class="error-message" id="time-error"></span>
                        <div class="input-container textarea" style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>
                          <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="brief" name="brief" placeholder="نبذه عن الموضوع"><br>
                        </div> 
                        <span class="error-message" id="brief-error"></span>
                        <div class="form-inline">
                        <label for="file">المستندات</label><div style="display: flex; align-items: center;">
    <span style="color: red; margin-left: 5px;">*</span>

                <input type="file" id="file" name="file" accept=".pdf,.png," value="upload" maxlength="4194304" onchange="checkFileSize(this)">
                <br><br> </div>
                <?php  $var=$_GET['var'];?>
                <input type="hidden" id="var"  name="var" value="<?php echo $var; ?>"/>
                <span class="error-message" id="file-error"></span>
                <span class="error-message" id="fileerror" style="color:black">مسموح فقط برفع الصور وملفات pdf</span>
             
                <div id="error-message"></div>

                        <div dir="ltr" style="margin-left:30px; margin-right:30px;"> 
                           <button type="submit"  class="buttonn" name="serviceSubmitBtn"  >إرسال الطلب</button>
                        </div>
                  </form>
              </div> 
            </div>
          </div>
        </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
          // Get references to the radio buttons and the time select element
          var urgentRadios = document.getElementsByName("urgent");
          var timeSelect = document.getElementById("time");

          // Add event listeners to the radio buttons
          for (var i = 0; i < urgentRadios.length; i++) {
              urgentRadios[i].addEventListener("change", updateTimeOptions);
          }
          // Function to update time options based on the radio button selection
          function updateTimeOptions() {
              // Clear existing options
              timeSelect.innerHTML = "";

              for (var i = 0; i < urgentRadios.length; i++) {
                  if (urgentRadios[i].checked) {
                      var selectedUrgent = urgentRadios[i].value;

                      if (parseInt(urgentRadios[i].value) === 0) {
                          // For غير طارئة, show options from 8:00 AM to 4:00 PM
                      addTimeOption("08:00:00", "8:00 AM - 9:00 AM");
                      addTimeOption("09:00:00", "9:00 AM - 10:00 AM");
                      addTimeOption("10:00:00", "10:00 AM - 11:00 AM");
                      addTimeOption("11:00:00", "11:00 AM - 12:00 PM");
                      addTimeOption("12:00:00", "12:00 PM - 1:00 PM");
                      addTimeOption("13:00:00", "1:00 PM - 2:00 PM");
                      addTimeOption("14:00:00", "2:00 PM - 3:00 PM");
                      addTimeOption("15:00:00", "3:00 PM - 4:00 PM");
                      } else if (parseInt(urgentRadios[i].value) === 1) {
                          // For طارئة, show options from 8:00 AM to 12:00 AM
                      addTimeOption("08:00:00", "8:00 AM - 9:00 AM");
                      addTimeOption("09:00:00", "9:00 AM - 10:00 AM");
                      addTimeOption("10:00:00", "10:00 AM - 11:00 AM");
                      addTimeOption("11:00:00", "11:00 AM - 12:00 PM");
                      addTimeOption("12:00:00", "12:00 PM - 1:00 PM");
                      addTimeOption("13:00:00", "1:00 PM - 2:00 PM");
                      addTimeOption("14:00:00", "2:00 PM - 3:00 PM");
                      addTimeOption("15:00:00", "3:00 PM - 4:00 PM");
                      addTimeOption("16:00:00", "4:00 PM - 5:00 PM");
                      addTimeOption("17:00:00", "5:00 PM - 6:00 PM");
                      addTimeOption("18:00:00", "6:00 PM - 7:00 PM");
                      addTimeOption("19:00:00", "7:00 PM - 8:00 PM");
                      addTimeOption("20:00:00", "8:00 PM - 9:00 PM");
                      addTimeOption("21:00:00", "9:00 PM - 10:00 PM");
                      addTimeOption("22:00:00", "10:00 PM - 11:00 PM");
                      addTimeOption("23:00:00", "11:00 PM - 12:00 AM");
                      }

                      break; // Exit the loop once we find the selected radio button
                  }
              }
          }

          // Function to add a time option to the select element
          function addTimeOption(value, label) {
              var option = document.createElement("option");
              option.value = value;
              option.text = label;
              timeSelect.appendChild(option);
          }

          // Initial call to set the initial state based on the default selected radio button
          updateTimeOptions();
      });
   </script>

    <?php include 'footer.php' ;?> 
   
  </body>
</html>