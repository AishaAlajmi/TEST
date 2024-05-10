<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بينة للمحاماة والاستشارات القانونية</title>
    <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
    <meta name="description" content="شركة محاماة مرخصة في المملكة العربية السعودية تضم طاقم من المحامين والمستشارين القانونيين تمارس نشاطها في مجال المحاماة والاستشارات القانونية بما يحقق رضى عملائها ">
    <meta name="keywords" content="قانون,محاماة,محامي,موعد,استشارات,قانون,بينة,محاميين,مستشارين,مستشار,استشارة,مكتب محاماة">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/navbarAndFooter.css">
    <link rel="stylesheet" href="Assets/css/home.css">
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
                   <?php include "accountButton.php" ;?>

                </div>
            </header>

            <div class="nav-scroller py-1 mb-0 border-bottom">
                <nav class="nav nav-underline justify-content-evenly">
                    <a class="nav-item nav-link link-body-emphasis active" href="">الرئيسية</a>
                    <a class="nav-item nav-link link-body-emphasis" href="#products">خدماتنا</a>
                    <a class="nav-item nav-link link-body-emphasis" href="#consultations">حجز موعد</a>
                    <a class="nav-item nav-link link-body-emphasis" href="Common_Questions.php">الأسئلة الشائعة</a>
                    <a class="nav-item nav-link link-body-emphasis" href="#contact-us">تواصل معنا</a>
                </nav>
            </div>
        </div>
    </div>

    <!-- hero section -->
    <div class="hero">
        <div class="px-4 py-5 text-center">
            <h1 class="display-5 fw-bold text-body-emphasis ">بينة للمحاماة والاستشارات القانونية</h1>
            <br>
            <div class="col-lg-7 mx-auto">
                <p class="card-text mb-4">شركة محاماة مرخصة في المملكة العربية السعودية تضم طاقم من المحامين والمستشارين القانونيين تمارس نشاطها في مجال المحاماة والاستشارات القانونية بما يحقق رضى عملائها </p>
            </div>
        </div>
    </div>

    <!-- about us section -->
    <div id="about-us" class="about-us">
        <div class="container">
            <div class="row featurette">
                <div class="col-md-5 align-img">
                    <img src="Assets/images/aboutUsImg.png" alt="" />
                </div>
                <div class="col-md-7 text">
                <h5 class="display-5 title">رسالتنا</h5>
                <p class="lead">أن نكون بمثابة شركاء نجاح مع الكيانات ورجال الأعمال من خلال المساندة القانونية المستمرة والمباشرة والسريعة ولخدمة عملاءنا الكرام ومساعدتهم بشتى الطرق الملائمة وإتخاذ الإجراءات القانونية لحماية مصالحهم، و نبراسنا في ذلك منظومة القيم
                    التي نخطو بها وفي مقدمتها الأمانة التي أساسها خشية الله والضمير.</p>
                <br>
                <h5 class="display-5 title">رؤيتنا</h5>
                <p class="lead ">الريادة والابتكار سعياً منا إلى تقديم الخدمات القانونية بصورة مميزة لضمان رعاية مصالح عملائنا وتحقيق تطلعاتهم ومصالحهم.</p>
                <br>
                <h5 class="display-5 title ">قيمنا</h5>
                <p class="lead ">الأمانة - الإنجاز الالتزام - الإتقان الصدق - الخصوصية الشفافية.</p>
                <br>
                <h5 class="display-5 title ">هدفنا</h5>
                <p class="lead ">الاهتمام الحقيقي بعملائنا وفهم أهدافهم وتلبية كافة احتياجاتهم، والعمل جاهدين بتوفير خدمات قانونية فائقة الجودة في الوقت المناسب والمحافظة على أعلى معايير النزاهة المهنية.</p>

            </div>

            </div>
        </div>
    </div>


    <!-- products section -->
    <div class="products " id="products">
        <div class="album py-5 ">
            <div class="container ">
                <h1 style="text-align: center; ">خدمـاتنا</h1>
                <br>
                <br>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 " style="align-items: stretch; ">

                    <div class="col ">
                        <a href="estesharat.php?var=<?php echo 1; ?>">
                            <div class="card shadow-sm ">
                                <i class='bx bxs-chat'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class=" card-text ">الاستشارة القانونية</h4>
                                    <br>
                                    <p class=" card-text ">طلب استشارة قانونية لتعيين موقف العميل وتوجيهه في مسألة معينة</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="tagareer.php?var=<?php echo 2; ?>">
                            <div class="card shadow-sm ">
                                <i class='bx bxs-file'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class=" card-text ">التقارير</h4>
                                    <br>
                                    <p class=" card-text ">طلب تقرير قانوني لدراسة موضوع القضية ومستنداتها وإعداد تقرير منفصل بجميع جوانبها ويتضمن جهة الإختصاص والمسار والإجراءات النظامية وتقدير موقف العميل والتوصية</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="tahkeem.php?var=<?php echo 3; ?>">
                            <div class="card shadow-sm ">
                                <i class='bx bxs-landmark'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class=" card-text ">التحكيم</h4>
                                    <br>
                                    <p class=" card-text ">طلب تحكيم إما بتعيين عضو محكم أو طلب مباشرة إجراءات التحكيم والتمثيل عن الغير فيه</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="tawtheeg.php?var=<?php echo 4; ?>">
                            <div class="card shadow-sm ">
                                <i class='bx bxs-badge-check'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class=" card-text ">التوثيق وإصدار الوكالات</h4>
                                    <br>
                                    <p class=" card-text ">التعاملات العقارية والمالية والوكالات التي تتم توثيقها عبر موثقين وموثقات معتمدين من وزارة العدل</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="ogood.php?var=<?php echo 5; ?>">
                            <div class="card shadow-sm ">
                                <i class='bx bxs-food-menu'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class=" card-text ">العقود</h4>
                                    <br>
                                    <p class=" card-text ">طلب صياغة أو تدقيقها أو مراجعتها سواء العقود المدنية أو التجارية أو العمالية أو ما سواها من العقود</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="solh.php?var=<?php echo 6; ?>">
                            <div class="card shadow-sm ">
                                <i class='bx bxs-donate-heart'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class="card-text ">الصلح</h4>
                                    <br>
                                    <p class="card-text ">تفويض أو توكيل بالتسوية الودية في نزاع قائم</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="nezaat.php?var=<?php echo 7; ?>">
                            <div class="card shadow-sm ">
                                <i class='bx bxs-building-house'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class=" card-text ">نزاعات الأراضي والعقارات</h4>
                                    <br>
                                    <p class=" card-text ">تقديم الاستشارة في نزاعات العقارات والأراضي سواء نزاعات الملكية أو الأجرة أو أعمال المقاولات أو التداخلات أو دمج والإزالة ومعالجة إشكالية الصكوك وتعديلها والإضافة والحذف عليها</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="altamtheel.php?var=<?php echo 8; ?>">
                            <div class="card shadow-sm ">
                                <i class='bx bxs-group'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class=" card-text ">التمثيل</h4>
                                    <br>
                                    <p class=" card-text ">طلب التمثيل أمام الجهات المختصة سواء القضائية أو غير قضائية كجهات الضبط الإداري وجهات التحقيق والنيابة عن الغير في السير في الإجراءات النظامية </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="almothakerat.php?var=<?php echo 9; ?>">
                            <div class="card shadow-sm ">
                                <i class='bx bx-clipboard'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class="card-text ">المذكرات</h4>
                                    <br>
                                    <p class="card-text ">طلب كتابة اللوائح والمذكرات لقضية منظورة امام الجهات المختصة مثل: لائحة الدعوى, مذكرة جوابية, مذكرة دفاع, مذكرة استئناف, طلب إعادة النظر, طلب النقض</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="jaraem.php?var=<?php echo 10; ?>">
                            <div class="card shadow-sm ">
                            <i class='bx bxl-internet-explorer'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class="card-text ">الجرائم المعلوماتيه / وخدمة التقصي الإلكتروني</h4>
                                    <br>
                                    <p class="card-text">النيابة في أعمال المرافعة والمدافعة في الإتهام بالجرائم التي تتم باستخدام جهاز الكمبيوتر أو أي جهاز متصل بالشبكة المعلوماتية            
والنايبة في استصدار بحث وتقصي الكتروني عن طريق الشركات المختصه بهدف نفي التهمة</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="taameen.php?var=<?php echo 11; ?>">
                            <div class="card shadow-sm ">
                                <i class='bx bxs-lock'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class="card-text ">التأمين</h4>
                                    <br>
                                    <p class="card-text ">تقديم الرأي والمشورة أو إصدار التقارير القانونية أو التمثيل في المنازعات القانونية في جميع عقود التأمين بكافة أنواعها</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="jalasat.php?var=<?php echo 12; ?>">
                            <div class="card shadow-sm ">
                                <i class='bx bxs-user-voice'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class="card-text ">حضور الجلسات</h4>
                                    <br>
                                    <p class="card-text ">تكليف المحامي بحضور جلسة أو أكثر لتعذر حضور الأصيل سواء الجلسات الافتراضية عن بعد أو جلسات التحقيق أمام الجهات المختصة</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="yearlyOgood.php?var=<?php echo 13; ?>">
                            <div class="card shadow-sm ">
                            <i class='bx bxs-pencil'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class="card-text ">العقود السنوية</h4>
                                    <br>
                                    <p class="card-text ">خدمة تقدم على مدار عام كامل في جميع الأعمال القانونية بأجر يدفع على فترات دورية موجبه يخصص للعميل كافة طاقات الشركة في جميع المسائل القانونية أو خدمات معينة بذاتها</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="tagyeem.php?var=<?php echo 14; ?>">
                            <div class="card shadow-sm ">
                            <i class='bx bxs-tachometer'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class="card-text ">تقييم عقاري</h4>
                                    <br>
                                    <p class="card-text ">تقديم الرأي القانوني في إجراءات التقدير أو الطعن فيها أو التكليف لنقوم نيابة عن العميل بمباشرة أعمال تقدير قيمة العقار أو الضرر اللاحق به أو حالته أو الحق المتعلق به كأجرة المثل واستصدار التقرير من خلال خبير مختص ومرخص.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="mohasaba.php?var=<?php echo 15; ?>">
                            <div class="card shadow-sm ">
                            <i class='bx bxs-calculator'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class="card-text ">أعمال محاسبة</h4>
                                    <br>
                                    <p class="card-text ">تقديم الرأي القانوني في إجراءات أعمال المحاسبة أو الطعن فيها أو التكليف لنقوم نيابة عن العميل بمباشرة أعمال تعيين محاسب قانوني واستصدار تقرير محاسبي بغرض مباشرة أو إنهاء إجراء نظامي من خلال خبير مختص ومرخص.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col ">
                        <a href="eflas.php?var=<?php echo 16; ?>">
                            <div class="card shadow-sm ">
                            <i class='bx bx-trending-down'></i>
                                <br>
                                <div class="card-body ">
                                    <h4 class="card-text ">الإفلاس</h4>
                                    <br>
                                    <p class="card-text ">تقديم الرأي القانوني في إجراءات الإفلاس أو الطعن فيها أو التكليف لنقوم نيابة عن الشخص ذو الصفة الطبيعية أو الاعتبارية بمباشرة الإجراء النظامي وفق الموقف المالي سواء في العلاقة مع الدائنين أو المدنيين أو أمين الإفلاس أو الجهة ذات العلاقة وفق نصوص نظام الإفلاس.</p>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- consultations section -->
    <div class="consultations" id="consultations">
        <div class="px-4 py-5 my-5 text-center ">

            <h1>حجز موعد استشارة قانونية</h1>
            <br>
            <div class="col-lg-7 mx-auto ">

                <p class="card-text mb-4 ">نقوم بتقديم خدمات الاستشارات الشرعية والقانونية وذلك في كافة النواحي التي تقابل الأفراد والشركات في حياتهم اليومية أو في الاستثمارات والأمور التجارية وذلك بمناقشة رأينا القانوني مع موكلينا إزالة أيت مخاطر قد تهدد أعمالهم التجارية والتي
                    ينبغي التعامل معها من المنظور القانوني وإرشادهم لما ينبغي لهم إتخاذه من التدابير الاحترازية التي تمنع من وقوع النزاع أو ارتكاب المخالفات القانونية، كما نقوم بتقديم الاستشارات القانونية مكتوبة ومشمولة بالأسانيد القانونية وتفسيرات الفقهاء
                    لبيان السند السليم بما يطمئن العميل بصحة الاستشارة وسندها الشرعي والنظامي.
                </p>
                <br>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center ">
                <a href="estesharat.php?var=<?php echo 1; ?>"><button type="button " class="btn btn-lg px-4 gap-3 ">احجز الان</button></a>
                </div>
            </div>

        </div>
    </div>

<!-- contact us section -->
<?php include 'Contact.php'; ?>
<div id="contact-us" class="contact-us" style="color: #1D3539;">
    <div class="container">
        <div class="topic-text" style="color: #CFB99A; font-size: 33px; font-weight: bold; display: flex; justify-content: center;">تواصل معنا</div><br>
        <div style="color: #a39e9e; font-size: 18px; font-weight: bold; text-align: right;">
            نسعى جاهدين لتوفير أفضل مستوى من الخدمات القانونية بقدرة وكفاءة وسرعة وجودة في الأداء والتنفيذ،
            بالإضافة إلى التزامنا الثابت بمصالح العملاء، حيث نضعهم في مقدمة أولوياتنا.
            وحرصا منا على تقديم الأفضل لعملائنا الأفاضل فإننا نقوم بإستقطاب الموظفين الأكفاء
            وأصحاب الخبرة ونعمل على تعزيز قدراتهم المهنية بالتدريب والتعليم المستمر والاطلاع الدائم ومواكبة التطور التقني.
        </div><br>
        <div class="content">
            <div class="left-side">
                <div class="assrass details">
                    <i class="bx bxs-map" style="color: #CFB99A;"></i>
                    <div class="topic">العنوان</div>
                    <div class="text-one">جدة - حي الشرفية - طريق المدينة</div>
                </div>

                <div class="phone details">
                    <i class="bx bxs-phone" style="color: #CFB99A;"></i>
                    <div class="topic">رقم الجوال</div>
                    <div class="text-one">0545773557</div>
                </div>

                <div class="email details">
                    <i class="bx bxs-envelope" style="color: #CFB99A;"></i>
                    <div class="topic">البريد الالكتروني</div>
                    <div class="text-one">info@bainah.com.sa</div>
                    <div class="text-two"></div>
                </div>
            </div>
            <div class="right-side">
                <br>
                <form action="index.php#contact-us" method="POST" class="contact-form">
                    <div class="input-box">
                        <input type="text" id="name" name="name" placeholder="الاسم" required />
                    </div>
                    <div class="input-box">
                        <input type="email" id="email" name="email" placeholder="البريد الإلكتروني" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                    </div>
                    <div class="input-box message-box">
                        <textarea id="message" name="message" placeholder="الرسالة" required></textarea>
                    </div>
                    <br>
                    <div class="button">
                        <input type="submit" name="submit" value="ارسال" style="background-color: #1D3539; color: #ffff; border: none; padding: 10px 10px; cursor: pointer; border-radius: 6px; text-align: center;" required />
                    </div>
                </form>
                <?php if ($alert) : ?>
                    <div class="success-message" style="color: green; margin-top: 10px;">
                        <?php echo $alert; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

    <!-- footer section -->
    <?php include 'footer.php' ;?> 
    
</body>

</html>
