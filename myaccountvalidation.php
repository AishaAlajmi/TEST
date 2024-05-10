<?php session_start();
// Include the database connection settings
include 'database.php';

require_once 'Admin/php-master/TaqnyatSms.php';

// Retrieve the user's ID from the session
$clientId = $_SESSION['client_id'];

// Initialize an empty array for alerts
$alerts = array();

// Fetch the client's current information from the database
$stmt = mysqli_prepare($conn, "SELECT * FROM clients WHERE client_id = ?");
mysqli_stmt_bind_param($stmt, "i", $clientId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

// Initialize variables with the client's current data
$Fristname = $row['First_name'];
$Middlename = $row['Middle_name'];
$Lastname = $row['Last_name'];
$NationalID = $row['NationalID'];
$phone = $row['Phone'];
$email = $row['Email'];

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
    $emailQuery = "SELECT * FROM clients WHERE registered='1' AND Email='$UpdateEmail' AND client_id != $clientId";
    $nationalIDQuery = "SELECT * FROM clients WHERE registered='1' AND  NationalID='$UpdateNationalID' AND client_id != $clientId";
    $phoneQuery = "SELECT * FROM clients WHERE registered='1' AND  Phone='$UpdatePhone' AND client_id != $clientId";

    $emailResult = mysqli_query($conn, $emailQuery);
    $nationalIDResult = mysqli_query($conn, $nationalIDQuery);
    $phoneResult = mysqli_query($conn, $phoneQuery);


    if($Fristname!=  $UpdateFirstname ||  $Middlename!=  $UpdateMiddlename || $Lastname !=  $UpdateLastname){
        $sql = "UPDATE clients SET First_name='$UpdateFirstname', Middle_name='$UpdateMiddlename', Last_name='$UpdateLastname' WHERE client_id='$clientId'";
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
            $sql = "UPDATE clients SET NationalID='$UpdateNationalID' WHERE client_id='$clientId'";
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
            $sql = "UPDATE clients SET Phone='$UpdatePhone'  WHERE client_id='$clientId'";
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
            $sql = "UPDATE clients SET Email='$UpdateEmail' WHERE client_id='$clientId'";
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
    header('Location: myaccount.php');
    exit(); // Add an exit statement after the redirection

    }

?>
