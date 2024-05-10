<?php
    include 'database.php';

//---------------------------------------------save new appointment info---------------------------------------------------------------
if(isset($_POST['requestSubmitBtn'])){
    $first_name    = $_POST["fname"]; 
    $middle_name   = $_POST["mname"]; 
    $last_name     = $_POST["lname"]; 
    $date            =   $_POST["date"]. " - ".$_POST["time"]; //not null
    $email         = $_POST["email"]; // not null
    $phone         = $_POST["phone"]; //not null
    $Nid           = $_POST["NationalID"];
    $Service          = $_POST["Servive"];
    $urgent      = $_POST["urgent"]; // could be null
    $Brief   = $_POST["brief"]; //not null
    $client=  1;
    //$client= $_SESSION["client_id"];
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $tmp_name = $_FILES ['file']['tmp_name'];
    $error = $_FILES ['file']['error'];

    

        //add new client 
        $sql1=$conn->prepare("INSERT INTO `Clients`(`First_name`, `Middle_name`, `Last_name`, `Email`, `Phone`, `NationalID`) 
                                            VALUES ('$first_name','$middle_name','$last_name','$email','$phone','$Nid');");
        $sql1->execute();

    
        if($error ===0 ){

            if($file_size > 1250000000){
                $em='حجم الملف كبير ';  
            }else{
                $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
                $file_ex_lc= strtolower($file_ex);
                $allowed_exs = array("pdf");
      
                if (in_array($file_ex_lc, $allowed_exs )){
                  $uploads_dir = 'uploads/';
                  move_uploaded_file($_FILES['file']['tmp_name'], $uploads_dir.$file_name);
                            //add new Appointment 
                    $sql=$conn->prepare("INSERT INTO `Appointments`(`Date`, `Client`, `Service_id`, `Urgent`, `Brief`, `File`) 
                    VALUES ('$date','$client','$Service','$urgent','$Brief','$file_name');");


                    if( $sql->execute()){
                    echo "request added successfully";
                 //   header("Location: ###");

                    } else{
                    echo "request added failed<br>";
                    }

      
            }else{
                  $em='الملف يجب أن يكون بصيغة pdf ';
            }
      
      
            }
            }else{
              $em= "حدث خطأ";
            }
        
      
      }      

        
   $conn->close();


