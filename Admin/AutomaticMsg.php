
        <?php
            require_once '../database.php';

                date_default_timezone_set('Asia/Riyadh');
                $date = date("Y-m-d");
                $mod_date = strtotime($date."- 1days");
                $newDate = date("Y-m-d",$mod_date);


                $stmt = mysqli_prepare($conn, "SELECT * FROM appointments WHERE Date='$newDate';");
                // Execute the query
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                
                if (mysqli_num_rows($result) > 0){
                
                    while($row = mysqli_fetch_assoc($result)){
                        
                        $appointmentId = $row['Appointment_id'];
                        $status= $row['status'];
                        
                        if( $status=='تم القبول'){
                            echo "    ".$row['Date'];
                           // header("location:API.php?appointment_id=$appointmentId&type=reminder");
                        }
                    }
                }
            // Close the database connection
            mysqli_close($conn);
            ?>
