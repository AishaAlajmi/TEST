<?php
include '../database.php';
//session_start();

$appointmentId =  $_GET['appointment_id']  ;

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
$service_id = $row['service_id'];
$client_id = $row['client_id'];
$details = $row['details'];
$parts = explode("$",$details);
$Date = $row['due_date'];
$File = $row['file'];
$total_price = $row['total_price'];
$initial_price = $row['initial_price'];
$status = $row['status'];



$stmt = mysqli_prepare($conn, "SELECT * FROM clients WHERE client_id = '$client_id'");

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

if (isset($_POST['edit'])) {
    $UpdatePrice = $_POST['totalPrice'];
    $initial_price =  $UpdatePrice;
    if ($registered == 1) {
        // Apply a discount of 10%
        $UpdatePrice =  $UpdatePrice - ($UpdatePrice * 0.10);
    }

    // Apply a VAT of 15%
    $UpdatePrice =   $UpdatePrice + ($UpdatePrice * 0.15);

    $stmt = mysqli_prepare($conn, "UPDATE orders SET initial_price='$initial_price' where order_id = '$appointmentId'");
    // Execute the query
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $sql = "UPDATE orders SET total_price='$UpdatePrice' where order_id = '$appointmentId'";
    $result = mysqli_query($conn, $sql);
    // Check if the update was successful
    if ($result) {
        if ($registered == 1) {
            echo "<script>alert('تم تحديث السعر بنجاح. ملاحظة: تم تطبيق الخصم الخاص بعملاء بينة 10٪');</script>";
        } else {
            echo "<script>alert('تم تحديث السعر بنجاح.');</script>";
        }
        echo "<script>window.location.href = 'Appointments_Details.php?appointment_id=" .  $_GET['appointment_id'] . "';</script>";
        exit();
    } else {
        echo "<script>alert('حدث خطأ أثناء تحديث السعر: " . mysqli_error($conn) . "');</script>";
        exit();
    }
}
$slmt = mysqli_prepare($conn, "SELECT * FROM services WHERE Service_id = '$service_id'");

// Execute the query
mysqli_stmt_execute($slmt);
$result = mysqli_stmt_get_result($slmt);

// Process the results

$row = mysqli_fetch_assoc($result);
$title = $row['title'];

