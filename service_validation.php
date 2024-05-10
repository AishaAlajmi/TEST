<?php
session_start();
include 'database.php';

//---------------------------------------------save new appointment info---------------------------------------------------------------
if (isset($_POST['serviceSubmitBtn'])) {
    // Retrieve form data
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $client=$_SESSION['client_id'];
            
    } else{
        $first_name = $_POST["fname"];
        $middle_name = $_POST["mname"];
        $last_name = $_POST["lname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $Nid = $_POST["NationalID"];
        $client = insertClient($conn,$first_name, $middle_name, $last_name, $email, $phone, $Nid);
    }
    
    $service_id = $_POST["var"];;


    if($service_id == 3 || $service_id == 5  || $service_id == 6 || $service_id == 7 || $service_id == 8 || $service_id == 9 || $service_id == 10 || $service_id == 11 || $service_id == 14 || $service_id == 15 || $service_id == 16){
        $Brief = $_POST["brief"];

        // File handling
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];

        if ($file_size == 0) {

        } elseif ($error === 0) {
        if ($file_size > 1250000000) {
            echo "File size is too large";
        } else {
            $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
            $file_ex_lc = strtolower($file_ex);
            $allowed_exs = array("pdf");

            if (in_array($file_ex_lc, $allowed_exs)) {
                $uploads_dir = 'uploads/';
                move_uploaded_file($tmp_name, $uploads_dir . $file_name);
                   //insertOrder($client, $service_id, $urgent, $Brief, $file_name, $date,$time,$place, $status,$conn);
            } else {
                echo "File must be in PDF format";
            }
        }
        }
        if($service_id != 14 && $service_id != 15 && $service_id != 16){ 
        $orders = $_POST["orders"];
        $notes = $_POST["notes"];
        }
    }
    
    
    $status = "جديد";
    



    /*
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                $client = $client_id;
            }else{
                $client = insertClient($conn,$first_name, $middle_name, $last_name, $email, $phone, $Nid);
            } */

    
}

    $details="";

    if( $service_id == 2 ){ //تقارير
        
        
    }

    elseif( $service_id == 3 ){ //تحكيم
        $arbitration = $_POST["arbitration"]; //نوع طلب التحكيم

        if($arbitration!=""){
        $label= " نوع طلب التحكيم: ";
        $details= $details."\n".$label." ".$arbitration."$";
        }

        $arbitrarorType = $_POST["arbitrarorType"];

        if($arbitrarorType!=""){
        $label= " صفة المحكم : ";
        $details= $details."\n".$label." ".$arbitrarorType."$";
        }

        $workRequired = $_POST["workRequired"];

        $personRequesting = $_POST["personRequesting"];

        if($personRequesting!=""){
        $label= " صاحب الطلب   : ";
        $details= $details."\n".$label." ".$personRequesting."$";
        }

        $prosecutor = $_POST["complainant"];
        $defendant = $_POST["defendant"];

        insertOrder($client, $service_id, $prosecutor, $defendant, $workRequired, $Brief ,$file_name, $orders, $notes,$status,$details, $conn);
    }

    elseif($service_id == 4){ //توثيق
        $workRequired = $_POST["authenticationRequest"]; //طلب التوثيق


        $due_date = $_POST["date"];

        $authenticationRequestPlace= $_POST["authenticationRequestPlace"];

        if($authenticationRequestPlace !=""){
            $label= " مقر تقديم الخدمة : ";
            $details= $details."\n".$label." ".$authenticationRequestPlace."$";
        }
        
        $time = $_POST["time"];

        insertTawtheeg($client, $service_id, $workRequired, $due_date, $status,$details,$time,$conn);
    }

    elseif($service_id == 5){ //عقود

        $workRequired = $_POST["contractType"];

        $firstParty = $_POST["firstParty"];
        $secondParty = $_POST["secondParty"];

        if($firstParty != "" && $secondParty != ""){
            $label1= " الطرف الأول وصفته :";
            $label2= " الطرف الثاني وصفته :";
            $details=$details." ".$label1." ".$firstParty."$ ".$label2." ".$secondParty."$";
        }

        insertOgood($client, $service_id, $workRequired, $Brief ,$file_name, $orders, $notes, $status,$details,$conn);

    }

    elseif($service_id == 6){ //صلح
        $filed = $_POST["Whatlawsuit"];

        $involvement=$_POST["involvement"];

        if($involvement != ""){
            $label= " الجهة المباشرة للقضية : ";
            $details= $details."\n".$label." ".$involvement."$";
        }

        $authorityNumber=$_POST["authorityNumber"];

        if($authorityNumber != ""){
            $label= "رقم القضية : ";
            $details= $details."\n".$label." ".$authorityNumber."$";
        }

        $lawsuitDate= $_POST["lawsuitDate"];

        if($lawsuitDate != ""){
            $label= "تاريخ القضية : ";
            $details= $details."\n".$label." ".$lawsuitDate."$";
        }

        $department= $_POST["department"];

        if($department != ""){
            $label= " الدائرة/المكتب/القسم : ";
            $details= $details."\n".$label." ".$department."$";
        }

        $lawsuitStatus= $_POST["lawsuitStatus"];

        if($lawsuitStatus != ""){
            $label= " موقف الدعوى : ";
            $details= $details."\n".$label." ".$lawsuitStatus."$";
        }

        $prosecutor = $_POST["complainant"];
        $defendant = $_POST["defendant"];

        insertSolh_tamth_moth($client, $service_id,$filed, $prosecutor, $defendant, $Brief ,$file_name, $orders, $notes, $status,$details,$conn);


    }

    elseif($service_id == 7){ //النزاعات
        $filed = $_POST["Whatlawsuit"];
        if($filed==1){ 
        $involvement=$_POST["involvement"];

        if($involvement != ""){
            $label= " الجهة المباشرة للقضية : ";
            $details= $details."\n".$label." ".$involvement."$";
        }

        $authorityNumber=$_POST["authorityNumber"];

        if($authorityNumber != ""){
            $label= "رقم القضية : ";
            $details= $details."\n".$label." ".$authorityNumber."$";
        }

        $lawsuitDate= $_POST["lawsuitDate"];

        if($lawsuitDate != ""){
            $label= "تاريخ القضية : ";
            $details= $details."\n".$label." ".$lawsuitDate."$";
        }

        $department= $_POST["department"];

        if($department != ""){
            $label= " الدائرة/المكتب/القسم : ";
            $details= $details."\n".$label." ".$department."$";
        }

        $lawsuitStatus= $_POST["lawsuitStatus"];

        if($lawsuitStatus != ""){
            $label= " موقف الدعوى : ";
            $details= $details."\n".$label." ".$lawsuitStatus."$";
        }
        $workRequired = $_POST["workRequiredLawsuitValid"];
        }elseif ($filed==0) {
            $workRequired = $_POST["workRequiredLawsuitNotValid"];
        }

        $prosecutor = $_POST["complainant"];
        $defendant = $_POST["defendant"];

        insertNezaat($client, $service_id,$filed, $prosecutor, $defendant, $workRequired, $Brief ,$file_name, $orders, $notes, $status,$details,$conn);

    }

    elseif($service_id == 8){ //التمثيل
        $filed = $_POST["Whatlawsuit"];
        if($filed==1){ 

        $representatorType= $_POST["representatorType"];

        if($representatorType != ""){
            $label= " صفة طلب التمثيل كوكيل في جانب : ";
            $details= $details."\n".$label." ".$representatorType."$";
        }

        $involvement=$_POST["involvement"];

        if($involvement != ""){
            $label= " الجهة المباشرة للقضية : ";
            $details= $details."\n".$label." ".$involvement."$";
        }

        $authorityNumber=$_POST["authorityNumber"];

        if($authorityNumber != ""){
            $label= "رقم القضية : ";
            $details= $details."\n".$label." ".$authorityNumber."$";
        }

        $lawsuitDate= $_POST["lawsuitDate"];

        if($lawsuitDate != ""){
            $label= "تاريخ القضية : ";
            $details= $details."\n".$label." ".$lawsuitDate."$";
        }

        $department= $_POST["department"];

        if($department != ""){
            $label= " الدائرة/المكتب/القسم : ";
            $details= $details."\n".$label." ".$department."$";
        }

        $lawsuitStatus= $_POST["lawsuitStatus"];

        if($lawsuitStatus != ""){
            $label= " موقف الدعوى : ";
            $details= $details."\n".$label." ".$lawsuitStatus."$";
        }
        
        }elseif ($filed==0){
            $representator= $_POST["representator"];
            $label= " طلب العميل من الممثل بالنيابة-الوكيل : ";
            $details= $details."\n".$label." ".$representator."$";
        }
        $prosecutor = $_POST["complainant"];
        $defendant = $_POST["defendant"];

        insertSolh_tamth_moth($client, $service_id,$filed, $prosecutor, $defendant, $Brief ,$file_name, $orders, $notes, $status,$details,$conn);


    }

    elseif($service_id == 9){ //المذكرات
        $filed = $_POST["Whatlawsuit"];
        if($filed==1){ 

        $involvement=$_POST["involvement"];

        if($involvement != ""){
            $label= " الجهة المباشرة للقضية : ";
            $details= $details."\n".$label." ".$involvement."$";
        }

        $authorityNumber=$_POST["authorityNumber"];

        if($authorityNumber != ""){
            $label= "رقم القضية : ";
            $details= $details."\n".$label." ".$authorityNumber."$";
        }

        $lawsuitDate= $_POST["lawsuitDate"];

        if($lawsuitDate != ""){
            $label= "تاريخ القضية : ";
            $details= $details."\n".$label." ".$lawsuitDate."$";
        }

        $department= $_POST["department"];

        if($department != ""){
            $label= " الدائرة/المكتب/القسم : ";
            $details= $details."\n".$label." ".$department."$";
        }

        $lawsuitStatus= $_POST["lawsuitStatus"];

        if($lawsuitStatus != ""){
            $label= " موقف الدعوى : ";
            $details= $details."\n".$label." ".$lawsuitStatus."$";
        }

        $lawsuitType= $_POST["lawsuitType"];

        if($lawsuitType != ""){
            $label= " نوع المذكرة : ";
            $details= $details."\n".$label." ".$lawsuitType."$";
        }

        $subbmittionDate= $_POST["subbmittionDate"];

        if($subbmittionDate != ""){
            $label= "تاريخ استلام المذكرة : ";
            $details= $details."\n".$label." ".$subbmittionDate."$";
        }
        
        }elseif ($filed==0){
            $radioNotdone= $_POST["radioNotdone"];
            $label= " نوع الدعوى الغير مقامة :  ";
            $details= $details."\n".$label." ".$radioNotdone."$";
        }
        $prosecutor = $_POST["complainant"];
        $defendant = $_POST["defendant"];

        insertSolh_tamth_moth($client, $service_id,$filed, $prosecutor, $defendant, $Brief ,$file_name, $orders, $notes, $status,$details,$conn);



    }

    elseif($service_id == 10){ //الجرائم المعلوماتية
        $filed = $_POST["Whatlawsuit"];
        if($filed==1){ 

        $involvement=$_POST["involvement"];

        if($involvement != ""){
            $label= " الجهة المباشرة للقضية : ";
            $details= $details."\n".$label." ".$involvement."$";
        }

        $authorityNumber=$_POST["authorityNumber"];

        if($authorityNumber != ""){
            $label= "رقم القضية : ";
            $details= $details."\n".$label." ".$authorityNumber."$";
        }

        $lawsuitDate= $_POST["lawsuitDate"];

        if($lawsuitDate != ""){
            $label= "تاريخ القضية : ";
            $details= $details."\n".$label." ".$lawsuitDate."$";
        }

        $department= $_POST["department"];

        if($department != ""){
            $label= " الدائرة/المكتب/القسم : ";
            $details= $details."\n".$label." ".$department."$";
        }

        $lawsuitStatus= $_POST["lawsuitStatus"];

        if($lawsuitStatus != ""){
            $label= " موقف الدعوى : ";
            $details= $details."\n".$label." ".$lawsuitStatus."$";
        }

        $workRequired = $_POST["workRequiredLawsuitValid"];
        
        $subbmittionDate= $_POST["submittionDate"];

        }elseif ($filed==0){
            
            $workRequired = $_POST["workRequiredLawsuitNotValid"];

            $subbmittionDate= $_POST["submittionDate"];

        
        }
        $prosecutor = $_POST["complainant"];
        $defendant = $_POST["defendant"];

        insertjaraem($client, $service_id,$filed, $prosecutor, $defendant, $workRequired, $Brief ,$file_name, $orders, $notes, $status,$details,$subbmittionDate,$conn);

    }

    elseif($service_id == 11){ //التأمين
        $filed = $_POST["Whatlawsuit"];
        if($filed==1){ 

        $involvement=$_POST["involvement"];

        if($involvement != ""){
            $label= " الجهة المباشرة للقضية : ";
            $details= $details."\n".$label." ".$involvement."$";
        }

        $authorityNumber=$_POST["authorityNumber"];

        if($authorityNumber != ""){
            $label= "رقم القضية : ";
            $details= $details."\n".$label." ".$authorityNumber."$";
        }

        $lawsuitDate= $_POST["lawsuitDate"];

        if($lawsuitDate != ""){
            $label= "تاريخ القضية : ";
            $details= $details."\n".$label." ".$lawsuitDate."$";
        }

        $department= $_POST["department"];

        if($department != ""){
            $label= " الدائرة/المكتب/القسم : ";
            $details= $details."\n".$label." ".$department."$";
        }

        $lawsuitStatus= $_POST["lawsuitStatus"];

        if($lawsuitStatus != ""){
            $label= " موقف الدعوى : ";
            $details= $details."\n".$label." ".$lawsuitStatus."$";
        }

        $workRequired = $_POST["workRequiredLawsuitValid"];
        
        $subbmittionDate= $_POST["submittionDate"];

        }elseif ($filed==0){
            
            $workRequired = $_POST["workRequiredLawsuitNotValid"];

            $subbmittionDate= $_POST["submittionDate"];

        }
        $prosecutor = $_POST["complainant"];
        $defendant = $_POST["defendant"];

        insertjaraem($client, $service_id,$filed, $prosecutor, $defendant, $workRequired, $Brief ,$file_name, $orders, $notes, $status,$details,$subbmittionDate,$conn);



    }

    elseif($service_id == 12){ //الجلسات

        $court= $_POST["court"];
        $label= "جهة النظر: \n المحكمة/ النيابة العامة/ الشرطة/ أخرى : ";
            $details= $details."\n".$label." ".$court."$";

        $city= $_POST["city"];
        $label= " المدينة : ";
        $details= $details."\n".$label." ".$city."$";

        $authorityNumber= $_POST["authorityNumber"];
        $label= "رقم القضية : ";
        $details= $details."\n".$label." ".$authorityNumber."$";
    

        $date= $_POST["date"];
        $label= "تاريخ موعد الجلسة/التحقيق : ";
        $details= $details."\n".$label." ".$date."$";
    

        $time= $_POST["time"];
        $label= "موعد الجلسة/التحقيق : ";
        $details= $details."\n".$label." ".$time."$";
    

        $onsetOrOnline= $_POST["onsetOrOnline"];
        $label= " الجلسة : ";
        $details= $details."\n".$label." ".$onsetOrOnline."$";
    
        insertjalasat($client, $service_id, $status,$details,$conn);

    }

    elseif($service_id == 13){ //العقود السنوية

        $conractRequester= $_POST["conractRequester"];
        $label= " طالب الخدمة : ";
        $details= $details."\n".$label." ".$conractRequester."$";
    
        $requestor= $_POST["requestor"];
        $label= "اسم المنتفع من الخدمة : ";
        $details= $details."\n".$label." ".$requestor."$";

        $date= $_POST["date"];
        $label= "موعد الزيارة : ";
        $details= $details."\n".$label." ".$date."$";
    

        $time= $_POST["time"];
        $label= "وقت الزيارة : ";
        $details= $details."\n".$label." ".$time."$";
    
        $contractRequestPlace= $_POST["contractRequestPlace"];
        $label= "مقر الزيارة : ";
        $details= $details."\n".$label." ".$contractRequestPlace."$";
    
        $workArea= $_POST["workArea"];
        $label= "نطاق العمل : ";
        $details= $details."\n".$label." ".$workArea."$";
    
        $contactData= $_POST["contactData"];
        $label= "بيانات التواصل : ";
        $details= $details."\n".$label." ".$contactData."$";

        insertjalasat($client, $service_id, $status,$details,$conn);
    

    }

    elseif ($service_id == 14) { //التقييم
        $propertyLocation= $_POST["propertyLocation"];
        $label= "موقع العقار : ";
        $details= $details."\n".$label." ".$propertyLocation."$";

        $propertyDescription= $_POST["propertyDescription"];
        $label= "وصف العقار : ";
        $details= $details."\n".$label." ".$propertyDescription."$";

        $propertyPurpose= $_POST["propertyPurpose"];
        $label= "الغرض من التقرير : ";
        $details= $details."\n".$label." ".$propertyPurpose."$";


        insertTagyeem($client, $service_id, $Brief, $file_name, $status,$details,$conn);
        
    }

    elseif ($service_id == 15) { //محاسبة
        $clientName= $_POST["clientName"];
        $label= "اسم العميل : ";
        $details= $details."\n".$label." ".$clientName."$";

        $reportPurpose= $_POST["reportPurpose"];
        $label= "الغرض من التقرير : ";
        $details= $details."\n".$label." ".$reportPurpose."$";

        insertTagyeem($client, $service_id, $Brief, $file_name, $status,$details,$conn);
        
    }

    elseif ($service_id == 16) { //الافلاس
        $orders= $_POST["orders"];
        $label= "الطلبات : ";
        $details= $details."\n".$label." ".$orders."$";

        $contact= $_POST["contact"];
        $label= "وسائل التواصل : ";
        $details= $details."\n".$label." ".$contact."$";

        insertTagyeem($client, $service_id, $Brief, $file_name, $status,$details,$conn);
        
    }




    function insertClient($conn,$first_name, $middle_name, $last_name, $email, $phone, $Nid){
        // Add new client
        $notregistered=0;
        $sql1 = $conn->prepare("INSERT INTO `Clients`(`First_name`, `Middle_name`, `Last_name`, `Email`, `Phone`, `NationalID`,`registered`) 
        VALUES (?, ?, ?, ?, ?, ?, ?)");

        $sql1->bind_param("ssssssi", $first_name, $middle_name, $last_name, $email, $phone, $Nid,$notregistered);
        $sql1->execute();
        return mysqli_insert_id($conn);
    }

    function insertOgood($client, $service_id, $workRequired, $Brief ,$file_name, $orders, $notes, $status,$details,$conn){

        $sql = $conn->prepare("INSERT INTO `orders` (`client_id`, `service_id`, `required_work`, `Brief`, `File`, `requests`, `notes`,`status`,`details`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ? , ?)");

    $sql->bind_param("iisssssss", $client, $service_id, $workRequired, $Brief ,$file_name, $orders, $notes, $status, $details);
    if ($sql->execute()) {
        header("Location:confirmation.php ");
    } else {
        echo "request added failed<br>";
    }
   }

    function insertSolh_tamth_moth($client, $service_id,$filed, $prosecutor, $defendant, $Brief ,$file_name, $orders, $notes, $status,$details,$conn){

        $sql = $conn->prepare("INSERT INTO `orders` (`client_id`, `service_id`,`filed`,`prosecutor`,`defendant`, `Brief`, `File`, `requests`, `notes`,`status`,`details`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? , ?, ?)");

    $sql->bind_param("iiissssssss", $client, $service_id,$filed, $prosecutor, $defendant, $Brief ,$file_name, $orders, $notes, $status, $details);
    if ($sql->execute()) {
        header("Location:confirmation.php ");
    } else {
        echo "request added failed<br>";
    }
    }

    function insertOrder($client, $service_id, $prosecutor, $defendant, $workRequired, $Brief ,$file_name, $orders, $notes, $status,$details,$conn){

         $sql = $conn->prepare("INSERT INTO `orders` (`client_id`, `service_id`,`prosecutor`,`defendant`, `required_work`, `Brief`, `File`, `requests`, `notes`,`status`,`details`) 
         VALUES (?, ?, ?, ?, ?, ?, ?, ? , ?, ?, ?)");

     $sql->bind_param("iisssssssss", $client, $service_id, $prosecutor, $defendant, $workRequired, $Brief ,$file_name, $orders, $notes, $status, $details);
     if ($sql->execute()) {
         header("Location:confirmation.php ");
     } else {
         echo "request added failed<br>";
     }
    }

    function insertNezaat($client, $service_id,$filed, $prosecutor, $defendant, $workRequired, $Brief ,$file_name, $orders, $notes, $status,$details,$conn){

        $sql = $conn->prepare("INSERT INTO `orders` (`client_id`, `service_id`,`filed`,`prosecutor`,`defendant`, `required_work`, `Brief`, `File`, `requests`, `notes`,`status`,`details`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ? , ?, ?, ?, ?)");

    $sql->bind_param("iiisssssssss", $client, $service_id,$filed, $prosecutor, $defendant, $workRequired, $Brief ,$file_name, $orders, $notes, $status, $details);
    if ($sql->execute()) {
        header("Location:confirmation.php ");
    } else {
        echo "request added failed<br>";
    }
   }

   function insertjaraem($client, $service_id,$filed, $prosecutor, $defendant, $workRequired, $Brief ,$file_name, $orders, $notes, $status,$details,$due_date,$conn){

    $sql = $conn->prepare("INSERT INTO `orders` (`client_id`, `service_id`,`filed`,`prosecutor`,`defendant`, `required_work`, `Brief`, `File`, `requests`, `notes`,`status`,`details`,`due_date`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ? , ?, ?, ?, ?,?)");

$sql->bind_param("iiissssssssss", $client, $service_id,$filed, $prosecutor, $defendant, $workRequired, $Brief ,$file_name, $orders, $notes, $status, $details, $due_date);
if ($sql->execute()) {
    header("Location:confirmation.php ");
} else {
    echo "request added failed<br>";
}
}
    

    function insertTawtheeg($client, $service_id, $workRequired, $due_date, $status,$details,$time,$conn){
        // Add new Appointment
        $sql = $conn->prepare("INSERT INTO `orders` (`client_id`, `service_id`, `required_work`, `due_date`,`status`,`details`,`time`) 
        VALUES (?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("iisssss", $client, $service_id,$workRequired,$due_date, $status, $details, $time);
    if ($sql->execute()) {
        header("Location:confirmation.php ");
    } else {
        echo "request added failed<br>";
    }
   }

   function insertjalasat($client, $service_id, $status,$details,$conn){

        $sql = $conn->prepare("INSERT INTO `orders` (`client_id`, `service_id`,`status`,`details`) 
        VALUES (?, ?, ?, ?)");

        $sql->bind_param("iiss", $client, $service_id, $status, $details);
        if ($sql->execute()) {
        header("Location:confirmation.php ");
        } else {
        echo "request added failed<br>";
        }
        }

        function insertTagyeem($client, $service_id, $Brief, $file_name, $status,$details,$conn){

            $sql = $conn->prepare("INSERT INTO `orders` (`client_id`, `service_id`,`Brief`, `File`, `status`,`details`) 
            VALUES (?, ?, ?, ?,? , ?)");
    
            $sql->bind_param("iissss", $client, $service_id, $Brief, $file_name, $status, $details);
            if ($sql->execute()) {
            header("Location:confirmation.php ");
            } else {
            echo "request added failed<br>";
            }
            }


    //$registered = 1;
    //$clientid = 128;
    
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

<!DOCTYPE html>
<html>
<head>
    <!-- Add your HTML head content here -->
</head>
<body>
    <!-- Add your HTML body content here -->

    <script>
        function validateForm() {
            var fName = document.getElementById("fname").value;
            var mName = document.getElementById("mname").value;
            var lName = document.getElementById("lname").value;
            var email = document.getElementsByName("email")[0].value;
            var phone = document.getElementById("phone").value;
            var NationalID = document.getElementById("NationalID").value;
            var place = document.querySelector('input[name="place"]:checked');
            var urgent = document.querySelector('input[name="urgent"]:checked');
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

    if (!place) {
        displayError("يرجى اختيار نوع الاستشارة", "place-error");
        isValid = false;
    } else {
        clearError("place-error", "place");
    }

    if (!urgent) {
        displayError("يرجى اختيار حالة الاستشارة", "urgent-error");
        isValid = false;
    } else {
        clearError("urgent-error", "urgent");
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

