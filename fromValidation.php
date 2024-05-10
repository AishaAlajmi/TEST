<?php
session_start();
include 'database.php';
  
//---------------------------------------------save new appointment info---------------------------------------------------------------
if (isset($_POST['serviceSubmitBtn'])) {
    // Retrieve form data
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $client_id=$_SESSION['client_id'];
            
    } else{
        $first_name = $_POST["fname"];
        $middle_name = $_POST["mname"];
        $last_name = $_POST["lname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $Nid = $_POST["NationalID"];
    }
    
    $date = $_POST["date"];
    $time = $_POST["time"];
    $place = $_POST["place"];
    $Service = $_POST["var"];;
    $urgent = $_POST["urgent"];
    $Brief = $_POST["brief"];
    $status = "جديد";

    if ( existingAppointments($conn) > 0) {
        echo '<div style="background-color: #ffdddd; color: #ff0000; padding: 10px; border: 1px solid #ff0000; border-radius: 4px; margin-bottom: 10px;" class="error-message">الوقت محجوز, اختر وقتا اخر</div>';
    } else {     
        if (timeAvaliablity($conn) > 0) {
            echo '<div style="background-color: #ffdddd; color: #ff0000; padding: 10px; border: 1px solid #ff0000; border-radius: 4px; margin-bottom: 10px;" class="error-message">الوقت محجوز, اختر وقتا اخر</div>';
        } else{
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                $client = $client_id;
            }else{
                $client = insertClient($conn,$first_name, $middle_name, $last_name, $email, $phone, $Nid);
            }
             // File handling
             $file_name = $_FILES['file']['name'];
             $file_size = $_FILES['file']['size'];
             $tmp_name = $_FILES['file']['tmp_name'];
             $error = $_FILES['file']['error'];
 
             if ($error === 0) {
                 if ($file_size > 1250000000) {
                     echo "File size is too large";
                 } else {
                     $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
                     $file_ex_lc = strtolower($file_ex);
                     $allowed_exs = array("pdf","png");
 
                     if (in_array($file_ex_lc, $allowed_exs)) {
                         $uploads_dir = 'uploads/';
                         move_uploaded_file($tmp_name, $uploads_dir . $file_name);
                         insertAppointment($client, $Service, $urgent, $Brief, $file_name, $date,$time,$place, $status,$conn);
                     } else {
                         echo "File must be in PDF format";
                     }
                 }
             } elseif ($file_size ==0) {
                 insertAppointment($client, $Service, $urgent, $Brief, $file_name, $date,$time,$place, $status,$conn);
             }
 

        }
    }
}

    function insertClient($conn,$first_name, $middle_name, $last_name, $email, $phone, $Nid){
        // Add new client
        $sql1 = $conn->prepare("INSERT INTO `Clients`(`First_name`, `Middle_name`, `Last_name`, `Email`, `Phone`, `NationalID`) 
        VALUES (?, ?, ?, ?, ?, ?)");

        $sql1->bind_param("ssssss", $first_name, $middle_name, $last_name, $email, $phone, $Nid);
        $sql1->execute();
        return mysqli_insert_id($conn);
    }
    function existingAppointments($conn){
        // Check if date exists in appointments table
        $stmt = $conn->prepare("SELECT * FROM `Appointments` WHERE `Date` = ? AND `time` = ?");
        $stmt->bind_param("ss", $date, $time);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows ;
   
    }
   

    function timeAvaliablity($conn){
        // Check if date and time are available in the unavailable table
        $stmt = $conn->prepare("SELECT * FROM `unavailable` WHERE `Date` = ? AND `Time` = ?");
        $stmt->bind_param("ss", $date, $time);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    function checkFileAndInsert($conn,$client, $Service, $urgent, $Brief, $file_name, $date,$time,$place, $status){

           
        }
    

    function insertAppointment($client, $Service, $urgent, $Brief, $file_name, $date,$time,$place, $status,$conn){
         // Add new Appointment
         $sql = $conn->prepare("INSERT INTO `Appointments` (`Client`, `Service_id`, `Urgent`, `Brief`, `File`, `Date`,`time`,`place`,`status`) 
         VALUES (?, ?, ?, ?, ?, ?, ? , ?, ?)");

     $sql->bind_param("iiissssis", $client, $Service, $urgent, $Brief, $file_name, $date,$time,$place, $status);
     if ($sql->execute()) {
         header("Location:confirmation.php ");
     } else {
         echo "request added failed<br>";
     }
    }
    $registered = 1;
    $clientid = 128;
    
    // Rest of your code
    
    if ($registered == 1) {
        // Prepare the SQL query
        $stmt = mysqli_prepare($conn, "SELECT * FROM clients WHERE client_id = ?"); // Use "?" as a placeholder
        
        // Check if the statement was prepared successfully
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $clientid); // Use "i" for integer type
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
    
            // Process the results
            while ($row = mysqli_fetch_assoc($result)) {
                $first_name = $row['First_name'];
                $middle_name = $row['Middle_name'];
                $last_name = $row['Last_name'];
                $phone = $row['Phone'];
                $email = $row['Email'];
                $Nid = $row['NationalID'];
            }
        } else {
            // Handle the case where the prepared statement failed
            // You may want to log an error or perform other actions.
        }
    }
    
    // Rest of your code END
    

    $conn->close();
?>
