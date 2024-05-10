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



$stmt = mysqli_prepare($conn, "SELECT * FROM clients WHERE client_id = '$client'");

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
// Prepare the SQL query
$slmt = mysqli_prepare($conn, "SELECT * FROM services WHERE Service_id = '$Service_id'");

// Execute the query
mysqli_stmt_execute($slmt);
$result = mysqli_stmt_get_result($slmt);

// Process the results

$row = mysqli_fetch_assoc($result);
$title = $row['title'];

