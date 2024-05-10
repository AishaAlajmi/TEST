<?php
include "../database.php";

date_default_timezone_set('Asia/Riyadh');
$current_date = date("Y-m-d");



//process the request 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $day  =   $_POST["day"];
        $time  =   $_POST["time"];
        $stmt = mysqli_prepare($conn, "SELECT * FROM appointments where Date= '$day' AND time='$time' ;");
        // Execute the query
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        //check unavaliable table
        $stmt2 = mysqli_prepare($conn, "SELECT * FROM unavailable where Date= '$day' AND time='$time' ;");
        // Execute the query
        mysqli_stmt_execute($stmt2);
        $result2 = mysqli_stmt_get_result($stmt2);
    
        if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $stmt2 = mysqli_prepare($conn, "SELECT *  FROM clients where client_id='$client_id' ;");
                // Execute the query
                mysqli_stmt_execute($stmt2);
                $result2 = mysqli_stmt_get_result($stmt2);
                $row2 = mysqli_fetch_assoc($result2);
                $_SESSION['alert'] = 1;
                header('location:AvaliableTimes_Admin.php?alert=1');

        } else if (mysqli_num_rows($result2) > 0) {
                $_SESSION['alert'] = 2;
                header('location:AvaliableTimes_Admin.php?alert=2');
               
               // header('location:AvaliableTimes_Admin.php');
        } else {
                echo"yess";
                $sql = $conn->prepare("INSERT INTO unavailable (date, time)  VALUES ('$day', '$time')");
                if ($sql->execute()) {
                        echo "time has been blocked successfully <br>";
                        $_SESSION['alert'] = 3;
                     
                       header('location:AvaliableTimes_Admin.php?alert=3');
                } else
                        echo "time blocking failed <br>";
        }
       

}



