<?php 
    include 'database.php';

    if(isset($_POST['requestSubmitBtn'])){
        $title   = $_POST["title"]; 
        $description     = $_POST["description"]; 

            //add new service 
            $sql=$conn->prepare("INSERT INTO `Services`(`title`, `description`) VALUES ('$title','$description')");

            if( $sql->execute()){
                echo "request added successfully";
             //   header("Location: ###");

                } else{
                echo "request added failed<br>";
                }

    }

?>