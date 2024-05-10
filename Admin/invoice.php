<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>الفاتورة</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="Assets/images/icon.ico">
  <?php include 'invoice2.php'; ?>
  <style type="text/css">
    body {
      margin-top: 20px;
      background-color: #eee;
      font-family: 'Cairo', sans-serif;
      font-size: 20px;
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0, 0, 0, .125);
      border-radius: 1rem;
      box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .button {
      flex: 1;
      max-width: 200px;
      height: 50px;
      margin: 10px;
      border-radius: 10px;
      color: #FFF;
      width: 157px;
      height: 46.896px !important;
      flex-shrink: 0;
      color: rgb(255, 255, 255);
      text-decoration: none;
      font-size: 15px !important;
      border-radius: 7px;
      padding: 1px 7px !important;
    }
  </style>
</head>

<body>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <br> <br>
        <div class="card">
          <div class="card-body">
            <div class="invoice-title" style="background-color: #C4C4C4;">
              <br>
              <div class="mb-4 " style=" text-align: center; color:#1D3539;" dir="rtl">
                <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;شركـة بينـة</h2>
              </div>
              <div class="text-muted " style=" text-align: center;" dir="rtl">
                <ul class="nav flex-column ">
                  <li class="nav-item mb-2 "><i class='bx bxs-phone-call icon'></i> 0545773557</li>
                  <li class="nav-item mb-2 "><i class='bx bxs-envelope icon'></i> alhbaje@gmail.com</li>
                  <li class="nav-item mb-2 "><i class='bx bx-current-location icon'></i> جدة - الشرفية</li>
                </ul>
              </div>
            </div>

            <hr class="my-4">

            <div class="row">
              <div class="col-sm-6">
                <div class="text-muted" dir="rtl">

                </div>
              </div>
              <!-- end col -->
              <div class="col-sm-6">
                <div class="text-sm-end" dir="rtl">
                  <div>
                    <br>
                    <h5 class="font-size-15 mb-1"> رقم الطلب : <br>#<?php echo $appointmentId; ?> </h5>
                    <br>
                    <h5 class="font-size-15 mb-1"> تاريخ الطلب : <br><?php echo $Date; ?> </h5>
                    <br>
                    <h5 class="font-size-15 mb-1"> موعد الطلب : <br><?php echo $time; ?> </h5>
                    <br>
                    <h5 class="font-size-15 mb-1"> الرقم الضريبي : <br>310713548200003 </h5>
                    <br>
                    <h5 class="font-size-15 mb-1" style="font-weight: bold; font-size:25px;"> يرجى السداد عن طريق التحويل البنكي :</h5>
                    <br>
                    <h5 class="font-size-15 mb-1"> رقم الحساب (البنك الأهلي) : <br>73000000020000 </h5>
                    <br>
                    <h5 class="font-size-15 mb-1"> الأيبان : <br>SA3710000073000000020000 </h5>
                    <br>
                    <h5 class="font-size-15 mb-1" style="font-weight: bold; font-size:25px;"> الفاتـورة إلـى :</h5>
                    <br>
                    <h5 class="font-size-15 mb-1" style="font-size:25px;"><?php echo $Fristname . " ", $Middlename, " ", $Lastname; ?></h5>

                    <li><i class='bx bxs-phone-call icon'></i> <?php echo $phone; ?></li>
                    <li class="nav-item mb-2 "><i class='bx bxs-envelope icon'></i> <?php echo $email; ?></li>
                  </div>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->

            <div class="py-2">
              <br>
              <h5 class="font-size-15" style="  font-weight: bold; font-size:25px;" dir="rtl">تفاصيل الطلب</h5>
              <div class="table-responsive">
                <table class="table align-middle table-nowrap table-centered mb-0">
                  <thead>
                    <tr dir="rtl">
                      <th>السعر</th>
                      <th>العدد</th>
                      <th>الخدمة</th>
                      <th>الرقم</th>
                      <th style="width: 70px;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr dir="rtl">
                      <td> <?php echo $total_price; ?></td>
                      <td>1</td>
                      <td>
                        <div>
                          <h5 class="text-truncate font-size-14 mb-1"><?php echo $title; ?></h5>
                        </div>
                      </td>
                      <th scope="row">01</th>
                    </tr>
                    <br>
                    <tr>
                      <td class="border-0 "> <?php echo $initial_price; ?>SAR</td>
                      <th scope="row" colspan="4" class="border-0 ">
                        السعر الاصلي</th>
                    </tr>
                    <tr>
                      <td class="border-0">
                        <?php echo ($registered == 1) ? '10%' : '0%'; ?>
                      </td>
                      <th scope="row" colspan="1" class="border-0">
                        خصم عملاء بينة
                      </th>
                    </tr>
                    <tr>
                      <td class="border-0 ">15%</td>
                      <th scope="row" colspan="4" class="border-0 ">
                        الضريبة المضافة</th>
                    </tr>

                    <tr>
                      <td class="border-0 ">
                        <h4 class="m-0 fw-semibold"><?php echo $total_price; ?>SAR</h4>
                      </td>
                      <th scope="row" colspan="4" class="border-0 ">المجموع</th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br> <br>
              <div class="container" style=" display: flex !important;justify-content: center !important;font-family:Amiri !important;">


                <?php if ($status != "تم القبول") { ?>
                  <button class="submit" class="button" name="invoice_btn" style="background-color:#1D3539 !important;color:white;border-radius: 10px; border: 7px solid #1D3539;">
                    <a href="API.php?appointment_id=<?php echo $appointmentId; ?>&type=accept" style="color: #FFF; text-decoration:none;">
                      ارسال الفاتورة</a>
                  </button>
                <?php } else { ?>
                <?php } ?>

                <button class="button" style=" background-color:#fff !important;border: 7px solid #fff; border-radius: 7px;">
                  <div class="float-end">
                    <a href="javascript:window.print()" class="btn btn-success me-1" style="background-color: #CFB99A;    border:none; "><i class="fa fa-print"></i></a>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
        <br> <br>
      </div><!-- end col -->
    </div>
  </div>

  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">

  </script>
</body>

</html>