<?php 
include 'database.php';
session_start();
$alerts = array();
if (isset($_POST['serviceSubmitBtn'])) {
    // Retrieve form data
    $first_name = $_POST["fname"];
    $middle_name = $_POST["mname"];
    $last_name = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $Nid = $_POST["NationalID"];
    $pass = $_POST["signINpassword"];
    $passconfirm = $_POST["confirm-password"];
    $registered = 1; 

 

    $stmt1 = mysqli_prepare($conn, "SELECT * FROM `clients` WHERE `Email` = ? OR `Phone`= ? OR `NationalID` = ? AND `registered` = ?");
    mysqli_stmt_bind_param($stmt1, "sssi", $email, $phone, $Nid, $registered);
    mysqli_stmt_execute($stmt1);
    $result1 = mysqli_stmt_get_result($stmt1);
    if(mysqli_num_rows($result1) > 0){
        $row1= mysqli_fetch_assoc($result1);
        if(($row1['Email']==$email)){
            $alerts[] = ' يوجد حساب مسجل بهذا البريد الالكتروني';  
        }
        if(($row1['Phone']==$phone)){
            $alerts[] ='يوجد حساب مسجل بهذا الرقم ';
        }
        if(($row1['NationalID']==$Nid)){
            $alerts[] ='يوجد حساب مسجل بهذه الهوية ';
        }
        $_SESSION['alerts'] = $alerts;

        // Redirect the user back to the account page
        header('Location:Signin.php');
        exit(); // Add an exit statement after the redirection

    
    }else{

    // Add new client
    $sql1 = $conn->prepare("INSERT INTO `clients`(`First_name`, `Middle_name`, `Last_name`, `Email`, `Phone`, `NationalID`, `password`, `registered`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $sql1->bind_param("sssssssi", $first_name, $middle_name, $last_name, $email, $phone, $Nid, $pass, $registered);
    $sql1->execute();
    header("location:SginupConfirmation.php");

}
}
if (isset($_POST['loginBtn'])) {
    // Retrieve form data
    $email = $_POST["email"];
    $pass = $_POST["signINpassword"];
    $registered = 1;
  
    $stmt1 = mysqli_prepare($conn, "SELECT * FROM `admins` WHERE `email` = ? or `phone`= ? ");
    mysqli_stmt_bind_param($stmt1, "ss", $email, $email);
    mysqli_stmt_execute($stmt1);
    $result1 = mysqli_stmt_get_result($stmt1);
    
    if(mysqli_num_rows($result1) == 1){
        $row1= mysqli_fetch_assoc($result1);
        if ( $row1['password'] == $pass) {
            // set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['admin_id']=$row1['Admin_id'];
            // redirect to dashboard or home page
            header("Location: Admin/adminmyaccount.php");
            exit();
        }else{
            $alerts[]=' البريد الالكتروني أو كلمة المرور خاطئة';
            $_SESSION['alerts'] = $alerts;

        // Redirect the user back to the account page
        header('Location:login.php');
        exit(); // Add an exit statement after the redirection
        }
    }else{
     $stmt = mysqli_prepare($conn, "SELECT * FROM `clients` WHERE (`Email` = ? OR `phone`= ?) AND `registered` = ? ");
    mysqli_stmt_bind_param($stmt, "ssi", $email,$email, $registered);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if(mysqli_num_rows($result) > 0){
        $row= mysqli_fetch_assoc($result);
        if ( $row['password'] == $pass) {
            // set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['client_id']=$row['client_id'];

            // redirect to dashboard or home page
            header("Location: index.php");
            exit();
        } else {
            // display error message
            $alerts[]=' البريد الالكتروني أو كلمة المرور خاطئة';
            $_SESSION['alerts'] = $alerts;

        // Redirect the user back to the account page
        header('Location:login.php');
        exit(); // Add an exit statement after the redirection
        }
        
    } else {
        $alerts[]='لا يوجد حساب مسجل بهذا البريد الالكتروني';
            $_SESSION['alerts'] = $alerts;

        // Redirect the user back to the account page
        header('Location:login.php');
        exit(); // Add an exit statement after the redirection
    }
    }

}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Add your HTML head content here -->
</head>
<body>
    <!-- Add your HTML body content here -->


    </script>
</body>
</html>