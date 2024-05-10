<?php
include '../database.php';
//session_start();

$appointmentId =  $_GET['appointment_id'];

// Prepare the SQL query
$smt = mysqli_prepare($conn, "SELECT * FROM appointments WHERE appointment_id = '$appointmentId'");

// Execute the query
mysqli_stmt_execute($smt);
$result = mysqli_stmt_get_result($smt);

if (mysqli_num_rows($result) == 0) {

    // Prepare the SQL query
    $smt = mysqli_prepare($conn, "SELECT * FROM orders WHERE order_id = '$appointmentId'");

    // Execute the query
    mysqli_stmt_execute($smt);
    $result = mysqli_stmt_get_result($smt);

    // Process the results

    $row = mysqli_fetch_assoc($result);
    $filed = $row['filed'];
    $prosecutor = $row['prosecutor'];
    $defendant = $row['defendant'];
    $required_work = $row['required_work'];
    $Brief = $row['brief'];
    $requests = $row['requests'];
    $notes = $row['notes'];
    $Service_id = $row['service_id'];
    $client = $row['client_id'];
    $details = $row['details'];
    $parts = explode("$", $details);
    $Date = $row['due_date'];
    $time = $row['time'];
    $File = $row['file'];
    $total_price = $row['total_price'];
    $initial_price = $row['initial_price'];
    $status = $row['status'];
} else {
    // Process the results
    $row = mysqli_fetch_assoc($result);
    $Date = $row['Date'];
    $time = $row['time'];
    $Brief = $row['Brief'];
    $File = $row['File'];
    $total_price = $row['total_price'];
    $client = $row['Client'];
    $status = $row['status'];
    $Service_id = $row['Service_id'];
    $initial_price = $row['initial_price'];
}



$stmt = mysqli_prepare($conn, "SELECT * FROM clients WHERE client_id = ?");
mysqli_stmt_bind_param($stmt, "i", $client);

// Execute the query
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Process the results
$row = mysqli_fetch_assoc($result);
$Fristname = $row['First_name'];
$Middlename = $row['Middle_name'];
$Lastname = $row['Last_name'];
$phone = $row['Phone'];
$NationalID = $row['NationalID'];
$email = $row['Email'];
$registered = $row['registered'];


$query = "SELECT title FROM services WHERE service_id = '$Service_id'";
$result1 = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result1) > 0) {
    $row1 = mysqli_fetch_assoc($result1);
    $serviceName = $row1['title'];

    // Use the $serviceName variable as needed
} else {
    $serviceName = "Service not found.";
}

// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="UTF-8">
    <style>
        /* Existing styles */
        .invoice-container {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border-radius: 10px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 10px;
        }

        th, td {
            text-align: right;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #CFB99A;
            color: #fff;
        }

        body {
            background-color: #1D3539;
            color: #CFB99A;
            font-size: 16px; 
        }

        h2, h3, h4 {
            color: #CFB99A;
            text-align: center;
            margin-top: 10px; 
            margin-bottom: 20px; 
        }

        p {
            margin-top: 10px; 
            margin-bottom: 10px; 
        }


        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .view-button {
            background-color: #CFB99A;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .button {
            flex: 1;
            max-width: 200px;
            margin: 20px;
            width: 157px;
            flex-shrink: 0;
            text-decoration: none;
            font-size: 14px !important; /* Adjust the font size as desired */
            padding: 1px 7px !important;
            background-color: #CFB99A;
            color: #fff;
            border: none;
            border-radius: 5px;
        }


        /* Hide buttons for print media */
        @media print {
            .view-button,
            .button {
                display: none;
            }
        }
        body {
          color: #1D3539;
         }

        .mb-4 {
            color: #1D3539;
        }

    </style>
</head>
<body>
<div class="invoice-container">
    <h2 style="text-align: center; color: #1D3539; font-weight: bold;">بينة للمحاماة والاستشارات القانونية</h2>
    <hr><br>
    <h3 style="text-align: right; color: #1D3539;">رقم الطلب # <?php echo $appointmentId; ?></h3>
    <hr>
    <h4 style="text-align: right;color: #1D3539; ">تفاصيل الطلب</h4>
    <table>
        <tr>
            <td><?php echo $Date; ?></td>
            <th style="text-align: right;">تاريخ الطلب</th>
        </tr>
        <tr>
            <td><?php echo $time; ?></td>
            <th style="text-align: right;">موعد الطلب</th>
        </tr>
        <tr>
            <td><?php echo $Fristname . " " . $Middlename . " " . $Lastname; ?><br><?php echo $phone; ?><br><?php echo $email; ?></td>
            <th style="text-align: right;">الفاتورة إلى</th>
        </tr>
        <tr>
            <td>رقم الحساب (البنك الأهلي): 73000000020000<br>SA3710000073000000020000 :الأيبان </td>
            <th style="text-align: right;">يرجى السداد عن طريق التحويل البنكي</th>
        </tr>
    </table>
    <br>
    <h4 style="text-align: right; color: #1D3539;">تفاصيل الخدمة</h4>
    <table>
        <tr>
            <th style="text-align: right;">رقم الخدمة</th>
            <th style="text-align: right;">السعر بعد تطبيق الخصم والضريبة </th>
            <th style="text-align: right;">الخصم</th>
            <th style="text-align: right;">الضريبة</th>
            <th style="text-align: right;">السعر</th>
            <th style="text-align: right;">الخدمة</th>

        </tr>
        <tr>
            <td><?php echo $Service_id; ?></td>
            <td><?php echo $total_price; ?></td>
            <td class="border-0">
                <?php echo ($registered == 1) ? '10%' : '0%'; ?>
            </td>
            <td><?php echo "15%"; ?></td>
            <td><?php echo $initial_price ; ?></td>
            <td><?php echo $serviceName; ?></td>
        </tr>
    </table>
    <p style="margin-top: 20px;">بينة للمحاماة والاستشارات القانونية © 2023</p>
    <div class="button-container">
        <a href="https://bainah.com.sa/Admin/email_body.php?appointment_id=<?php echo $appointmentId; ?>" class="view-button">عرض الفاتورة في المتصفح</a>
    </div>
    <button class="button ">
        <div class="float-end">
            <a href="javascript:window.print()" class="btn btn-success me-1" style="background-color: #CFB99A;    border:none; ">طباعة<i class="fa fa-print"></i></a>
        </div>
    </button>
</div>
</body>
</html>
