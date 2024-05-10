<?php session_start();
// Include the database connection settings
include '../database.php';


// Retrieve the user's ID from the session
//$adminId = $_SESSION['admin_id'];
$adminId = 1;

// Initialize an empty array for alerts
$alerts = array();

// Fetch the client's current information from the database
$stmt = mysqli_prepare($conn, "SELECT * FROM admins WHERE admin_id = ?");
mysqli_stmt_bind_param($stmt, "i", $adminId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

// Initialize variables with the client's current data
$Fristname = $row['first_name'];
$Middlename = $row['middle_name'];
$Lastname = $row['last_name'];
$NationalID = $row['national_id'];
$phone = $row['phone'];
$email = $row['email'];

//$alerts[] = "test";

// Handle the form submission for updating client information
if (isset($_POST['serviceSubmitBtn'])) {

    // Retrieve and sanitize the updated data from the form
    $UpdateFirstname = mysqli_real_escape_string($conn, $_POST['account-fn']);
    $UpdateMiddlename = mysqli_real_escape_string($conn, $_POST['account-mn']);
    $UpdateLastname = mysqli_real_escape_string($conn, $_POST['account-ln']);
    $UpdateNationalID = mysqli_real_escape_string($conn, $_POST['ID']);
    $UpdatePhone = mysqli_real_escape_string($conn, $_POST['account-phone']);
    $UpdateEmail = mysqli_real_escape_string($conn, $_POST['account-email']);
    //$UpdatePassword = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if the updated email, national ID, or phone number already exists in the database
    $emailQuery = "SELECT * FROM admins WHERE  email='$UpdateEmail' AND admin_id != $adminId";
    $nationalIDQuery = "SELECT * FROM admins WHERE   national_id='$UpdateNationalID' AND admin_id != $adminId";
    $phoneQuery = "SELECT * FROM admins WHERE  phone='$UpdatePhone' AND admin_id != $adminId";

    $emailResult = mysqli_query($conn, $emailQuery);
    $nationalIDResult = mysqli_query($conn, $nationalIDQuery);
    $phoneResult = mysqli_query($conn, $phoneQuery);


    if($Fristname!=  $UpdateFirstname ||  $Middlename!=  $UpdateMiddlename || $Lastname !=  $UpdateLastname){
        $sql = "UPDATE admins SET first_name='$UpdateFirstname', middle_name='$UpdateMiddlename', last_name='$UpdateLastname' WHERE Admin_id='$adminId'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $alerts[] = "تم تحديث الإسم بنجاح.";
        } else {
            $alerts[] = "حدث خطأ أثناء تحديث البيانات" ;
        }
    }
    if( $NationalID !=  $UpdateNationalID){
        if (mysqli_num_rows($nationalIDResult) > 0) {
            $alerts[] = "رقم الهوية/الإقامة مسجل مسبقًا";
        } else{
            $sql = "UPDATE admins SET national_id='$UpdateNationalID' WHERE Admin_id='$adminId'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $alerts[] = "تم تحديث الهوية الوطنية بنجاح.";
            } else {
                $alerts[] = "حدث خطأ أثناء تحديث البيانات" ;
            }
        }     
    }
    if( $phone !=  $UpdatePhone){
        if (mysqli_num_rows($phoneResult) > 0) {
            $alerts[] = "رقم الجوال مسجل مسبقًا";
        } else{
            $sql = "UPDATE admins SET phone='$UpdatePhone'  WHERE Admin_id='$adminId'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $alerts[] = "تم تحديث رقم الجوال بنجاح.";
            } else {
                $alerts[] = "حدث خطأ أثناء تحديث البيانات" ;
            }
        }
       
    }
    if( $email !=  $UpdateEmail){
        if (mysqli_num_rows($emailResult) > 0) {
            $alerts[] = "البريد الإلكتروني مسجل مسبقًا" ;
        } else{
            $sql = "UPDATE admins SET email='$UpdateEmail'  WHERE Admin_id='$adminId'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $alerts[] = "تم تحديث البريد الإلكتروني بنجاح.";
            } else {
                $alerts[] = "حدث خطأ أثناء تحديث البيانات" ;
            }
        }
       
    }
    $_SESSION['alerts'] = $alerts;

    // Redirect the user back to the account page
    header('Location:adminmyaccount.php');
    exit(); // Add an exit statement after the redirection

    }

?>
