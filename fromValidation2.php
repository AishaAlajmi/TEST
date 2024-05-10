<?php
include 'database.php';

require_once 'Admin/php-master/TaqnyatSms.php';


//---------------------------------------------save new appointment info---------------------------------------------------------------
if (isset($_POST['serviceSubmitBtn'])) {
    // Retrieve form data
    $first_name = $_POST["fname"];
    $middle_name = $_POST["mname"];
    $last_name = $_POST["lname"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $Nid = $_POST["NationalID"];
    $Service = $_POST["var"];
    $Brief = $_POST["brief"];
    $status = "جديد";
    $client = 1;


    // Check if date exists in appointments table
    $stmt = $conn->prepare("SELECT * FROM `Appointments` WHERE `Date` = ? AND `time` = ?");
    $stmt->bind_param("ss", $date, $time);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<div style="background-color: #ffdddd; color: #ff0000; padding: 10px; border: 1px solid #ff0000; border-radius: 4px; margin-bottom: 10px;" class="error-message">الوقت محجوز, اختر وقتا اخر</div>';
    } else {
    // Add new client
    $sql1 = $conn->prepare("INSERT INTO `Clients`(`First_name`, `Middle_name`, `Last_name`, `Email`, `Phone`, `NationalID`) 
        VALUES (?, ?, ?, ?, ?, ?)");

    $sql1->bind_param("ssssss", $first_name, $middle_name, $last_name, $email, $phone, $Nid);
    $sql1->execute();
    $client = mysqli_insert_id($conn);



        // Check if date and time are available in the unavailable table
        $stmt = $conn->prepare("SELECT * FROM `unavailable` WHERE `Date` = ? AND `Time` = ?");
        $stmt->bind_param("ss", $date, $time);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo '<div style="background-color: #ffdddd; color: #ff0000; padding: 10px; border: 1px solid #ff0000; border-radius: 4px; margin-bottom: 10px;" class="error-message">الوقت محجوز, اختر وقتا اخر</div>';
        } else{

        
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
                    $allowed_exs = array("pdf");

                    if (in_array($file_ex_lc, $allowed_exs)) {
                        $uploads_dir = 'uploads/';
                        move_uploaded_file($tmp_name, $uploads_dir . $file_name);
 
                        insertAppointment($client, $Service,$Brief, $file_name, $date,$time,$status,$conn);

                    } else {
                        echo "File must be in PDF format";
                    }
                }
            }elseif ($file_size ==0) {
                insertAppointment($client, $Service,$Brief, $file_name, $date,$time,$status,$conn);
        }
        }
    }
}

function insertAppointment($client, $Service, $Brief, $file_name, $date,$time, $status,$conn){
        // Add new Appointment
        $sql = $conn->prepare("INSERT INTO `Appointments` (`Client`, `Service_id`, `Brief`, `File`, `Date`,`time`,`Status`) 
        VALUES (?, ?, ?, ?, ?, ? , ?)");
       //sms messgae code
      
    $sql->bind_param("iisssss", $client, $Service, $Brief, $file_name, $date, $time, $status);
    if ($sql->execute()) {
        //SMS message information
        // Prepare the SQL query
        $smt = mysqli_prepare($conn, "SELECT appointment_id FROM appointments WHERE Date = '$$date' AND time='$time'");
        // Execute the query
        mysqli_stmt_execute($smt);
        $result = mysqli_stmt_get_result($smt);
        // Process the results
        $row = mysqli_fetch_assoc($result);
        $appointmentId = $row['appointment_id'];
       header("Location:Admin/API.php?appointment_id=<?php echo $appointmentId; ?>&type=new");
    } else {
        echo "request added failed<br>";
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
    <form id="newForm" action="Admin/API.php"method="POST">
        <button type="submit" name="new_order" id="new_order"></button>
    </form>
    <script>
        function validateForm() {
            var fName = document.getElementById("fname").value;
            var mName = document.getElementById("mname").value;
            var lName = document.getElementById("lname").value;
            var email = document.getElementsByName("email")[0].value;
            var phone = document.getElementById("phone").value;
            var NationalID = document.getElementById("NationalID").value;
          var date = document.getElementById("date").value;
            var time = document.getElementById("time").value;
            var brief = document.getElementById("brief").value;

            // Regex patterns
            var phoneRegex = /^0\d{9}$/;
            var NationalIDRegex = /^\d{10}$/;

            // Clear previous error messages
            document.getElementById("error-message").innerHTML = "";

            var isValid = true; // Track overall form validity

            // ... (Rest of your JavaScript code)

            if (fName === "") {
        displayError("يرجى إدخال الاسم الأول", "fname-error");
        isValid = false;
    } else {
        clearError("fname-error", "fname");
    }

    if (mName === "") {
        displayError("يرجى إدخال الاسم الثاني", "mname-error");
        isValid = false;
    } else {
        clearError("mname-error", "mname");
    }

    if (lName === "") {
        displayError("يرجى إدخال الاسم الأخير", "lname-error");
        isValid = false;
    } else {
        clearError("lname-error", "lname");
    }

    if (email === "") {
        displayError("يرجى إدخال البريد الإلكتروني", "email-error");
        isValid = false;
    } else {
        var emailRegex = /^\S+@\S+\.\S+$/;
        if (!email.match(emailRegex)) {
            displayError("البريد الإلكتروني غير صحيح", "email-error");
            isValid = false;
        } else {
            clearError("email-error", "email");
        }
    }

    if (!phone.match(phoneRegex)) {
        displayError("رقم الجوال يجب أن يبدأ بالرقم 0 ويحتوي على 10 أرقام", "phone-error");
        isValid = false;
    } else {
        clearError("phone-error", "phone");
    }

    if (!NationalID.match(NationalIDRegex)) {
        displayError("رقم الهوية الوطنية يجب أن يحتوي على 10 أرقام", "NationalID-error");
        isValid = false;
    } else {
        clearError("NationalID-error", "NationalID");
    }


    if (date === "") {
        displayError("يرجى اختيار تاريخ الموعد", "date-error");
        isValid = false;
    } else {
        const d = new Date(date);

        if (d.getDay() === 5 || d.getDay() === 6) {
            displayError("لا يمكن حجز موعد في عطلة نهاية الأسبوع، يرجى اختيار يوم آخر", "date-error");
            isValid = false;
        } else {
            // Clear the error message or take action when the date is valid
            clearError("date-error", "date");

            // Now, make an AJAX request to check availability
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "fromValidation.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var response = xhr.responseText;
                        if (response === "unavailable") {
                            // Display an error message or take action when the date is unavailable
                            displayError("الوقت محجوز, اختر وقتا اخر", "date-error");
                            isValid = false; // Update isValid if needed
                            return false;
                        } else if (response === "available") {
                            // Clear the error message or take action when the date is available
                            clearError("date-error", "date");
                            // You can also update isValid here if needed
                        }
                    }
                }
            };
            xhr.send("date=" + date + "&time=" + time);
        }
    }
    

    if (brief === "") {
        displayError("يرجى إدخال نبذة عن الموضوع", "brief-error");
        isValid = false;
    } else {
        clearError("brief-error", "brief");
    }

            return isValid;
        }

        function displayError(message, errorElementId) {
            var errorMessage = document.getElementById(errorElementId);
            errorMessage.style.color = "red";
            errorMessage.textContent = message;
        }

        function clearError(errorElementId, inputElementId) {
            var errorMessage = document.getElementById(errorElementId);
            errorMessage.textContent = " "; // Clear the error message

            // Reset the styling for the input element
            var inputElement = document.getElementById(inputElementId);
            inputElement.style.border = ""; // Reset border to the default style (empty string)
            // You can add more styling changes here if needed
        }
    </script>
</body>
</html>
