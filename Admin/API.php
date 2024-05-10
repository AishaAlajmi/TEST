<?php
include '../database.php';
//include 'invoice_pdf.php';
include 'invoice2.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
session_start();
// Install Taqnyat Package from Packagist using composer
// composer require taqnyat/php
// Update the path below to your autoload.php,
require_once 'php-master/TaqnyatSms.php';
// new bainah account :   e74ab94b3611978041f9c3440e68820b
$bearer = 'e74ab94b3611978041f9c3440e68820b';
$taqnyt = new TaqnyatSms($bearer);

$type =  $_GET['type'];
$appointmentId =  $_GET['appointment_id'];
echo $appointmentId."   -    ".$type;

// Prepare the SQL query
$smt = mysqli_prepare($conn, "SELECT * FROM appointments WHERE appointment_id = '$appointmentId'");
// Execute the query
mysqli_stmt_execute($smt);
$result = mysqli_stmt_get_result($smt);


if(mysqli_num_rows($result) == 0){
    $smt = mysqli_prepare($conn, "SELECT * FROM orders WHERE order_id = '$appointmentId'");
    // Execute the query
    mysqli_stmt_execute($smt);
    $result = mysqli_stmt_get_result($smt);
    // Process the results
    $row = mysqli_fetch_assoc($result);
    $total_price = $row['total_price'];
    $client = $row['client_id'];
    $is_appointment = false;
}else{
    // Process the results
    $row = mysqli_fetch_assoc($result);
    $total_price = $row['total_price'];
    $client = $row['Client'];
    $is_appointment = true;
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
$email = $row['Email'];
$registered = $row['registered'];

if($type=='accept'){
    $name=$Fristname.' '.$Lastname;
     $number = '966'.substr($phone,1);
     echo $number;
     //SMS message information
     $body = "مرحبًا $name \n\n تم قبول طلبكم وسيتم اصدار فاتورة بقيمة الخدمة وإرسالها إلى الجوال والبريد  الإلكتروني المسجل في الطلب. \n\n لتنفيذ طلبكم نأمل السداد خلال 24 ساعة \n\n\nشركة بيّنة للمحاماة والاستشارات القانونية \n\n للوصول للفاتورة \n https://bainah.com.sa/Admin/email_body.php?appointment_id=$appointmentId".echo" <a href="https://bainah.com.sa/Admin/email_body.php?appointment_id=<?php echo $appointmentId; ?>" class="view-button">عرض الفاتورة في المتصفح</a>";
     $recipients = [$number];
     $sender = 'BainahLaw';
     //Call method to send SMS
     sendSMS($recipients,$body,$sender,$taqnyt);
     //Call method to send Email
     sendEmail($email);
     //Update appointments status
     $status = "تم القبول";
     $message = "تم إرسال رسالة القبول بنجاح";
     updateStatus($conn, $appointmentId, $status, $message,$is_appointment);
     header("location:Accept_Reject_Feedback.php?is_empty=1");
     echo $body;

}
if($type=='reject'){
    $name=$Fristname.' '.$Lastname;
    $number = '966'.substr($phone,1);
    echo $number;
     //SMS message information
     $body = "مرحبًا $name \n\nنعتذر عن  قبول طلبكم ، لأسباب نظامية  استناداً لنص المادة رقم 15 والمادة رقم 16 من نظام المحاماة ، وبعد إنقضاء المدة النظامية يمكن لكم التعامل مع شركة بيّنة للمحاماة والاستشارات القانونية.";
    $recipients = [$number];
    $sender = 'BainahLaw';
    //Call method to send SMS
    sendSMS($recipients,$body,$sender,$taqnyt);
    //Update appointments status
    $status = "تم الرفض";
    $message = "تم إرسال إعلام الرفض بنجاح";
    updateStatus($conn, $appointmentId, $status, $message,$is_appointment);
   header("location:Accept_Reject_Feedback.php?is_empty=2");
    echo $body;
}
if($type=='new'){
     //SMS message information
     $body = 'تم إضافة طلب جديد. للتفاصيل يرجى زيارة الموقع الإلكتروني ';
     //Admin number here
     $recipients = ['966502636814'];
     //Call method to send SMS
    //sendSMS($recipients,$body,$sender,$taqnyt);
    //header("Location:../confirmation.php");
}


function sendEmail($email)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    try {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bainahlawfrim@gmail.com';
        $mail->Password = 'ucuyglnhgybtushz';
        $mail->SMTPSecure = 'tls';
        $mail->Port = '587';

        $mail->setFrom('bainahlawfrim@gmail.com');
        $mail->addAddress($email);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Bainah Law Frim Invoice';

        ob_start();
        require_once('email_body.php');
        $emailBody = ob_get_clean();

        $mail->Body = $emailBody;

        // Send the email
        $mail->send();
    } catch (Exception $e) {
        echo "Error sending email: " . $mail->ErrorInfo;
    }


     echo '<script>
    window.addEventListener("DOMContentLoaded", function() {
        // Perform an AJAX request or submit the form using JavaScript
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Display a success message or perform any other actions
                alert("تم ارسال الفاتورة بنجاح");
            }
        };
        xhr.send();

        // Prevent default form submission
        return false;
    });
</script>';
}
function sendSMS($recipients,$body,$sender,$taqnyt){
    $message =$taqnyt->sendMsg($body, $recipients, $sender);
    print $message;
}

function updateStatus($conn, $appointmentId, $status, $message,$is_appointment){
    if($is_appointment){
        //Update appointments status
        $sql = "UPDATE appointments SET status='$status' where Appointment_id ='$appointmentId';";
    }else{
        $sql = "UPDATE orders SET status='$status' where order_id ='$appointmentId';";
    }
    $result = mysqli_query($conn, $sql);

    // Check if the update was successful
    if ($result) {
        echo "<script>alert('$message');</script>";
        //header('Location:');
    } else {
        echo "<script>alert('Error updating user information: ' . mysqli_error($conn));</script>";
    }
}

?>
