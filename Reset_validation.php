<?php

$token = $_POST["token"];

$token_hash = hash("sha256", $token);

include 'database.php';

$sql = "SELECT * FROM clients
        WHERE reset_token_hash = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
if ($user === null) {
    $error='حدث خطأ، الرجاء المحاولة مرة اخرى';
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
   $error='انتهى الوقت المحدد لإعادة التعيين، حاول مرة أخرى';
}
}else{
    $error="الرجاء المحاولة مرة أخرى";
}
if (strlen($_POST["signINpassword"]) < 8) {
    
    $error='كلمة المرور يجب أن تتكون من ٨ خانات أو أكثر';
}

if ( ! preg_match("/[a-z]/i", $_POST["signINpassword"])) {
    $error='كلمة المرور يجب أن تحتوي على حرف واحد على الأقل';
}

if ( ! preg_match("/[0-9]/", $_POST["signINpassword"])) {
    $error='كلمة المرور يجب أن تحتوي على رقم واحد على الأقل';
}

if ($_POST["signINpassword"] !== $_POST["confirm-password"]) {
    $error='كلمة المرور غير متطابقة';
}


if(isset($error)){
    header("Location:ResetPasswordUI.php?token=$token&rerror=$error");
}else{
    
$newpassword =$_POST["signINpassword"];

$sql = "UPDATE clients
        SET password = ?,
            reset_token_hash = NULL,
            reset_token_expires_at = NULL
        WHERE client_id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ss", $newpassword, $user["client_id"]);

$stmt->execute();

echo "<script>
            alert('  تم تحديث كلمة المرور! يمكنك تسجيل الدخول الآن');
    window.location.href='login.php';
          </script>";


}