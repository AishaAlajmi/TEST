<?php

include 'database.php';
//session_start();

$client_id = $_SESSION['client_id'];


// Prepare the SQL query
$stmt = mysqli_prepare($conn, "SELECT * FROM clients WHERE client_id = '$client_id'");

// Execute the query
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if($result->num_rows>0){
// Process the results
$row = mysqli_fetch_assoc($result);
$frist_name = $row['First_name'];
$middle_name = $row['Middle_name'];
$last_name = $row['Last_name'];
$phone = $row['Phone'];
$NationalID = $row['NationalID'];
$email = $row['Email'];

 ?>
 
<div> <label class="input-container" style="font-size: 15px;color:#a59379;">لتغيير بياناتك الشخصية يرجى تحديثها من اعدادات حسابك</label> </div>           
<div class="input-container">                                              
   <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="fname" name="fname" placeholder="الاسم الأول" value="<?php echo $frist_name?>" disabled/>
</div> 
<span class="error-message" id="fname-error"></span>
<div class="input-container">
  <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="mname" name="mname"  placeholder="الاسم الثاني" value="<?php echo $middle_name?>" disabled/>
</div> 
<span class="error-message" id="mname-error"></span>
<div class="input-container">
  <input type="text" style="background-color: #ffffffc9 !important;" class="input" id="lname" name="lname" placeholder="الاسم الأخير" value="<?php echo $last_name?>" disabled/>
</div> 
<span class="error-message" id="lname-error"></span>
<div class="input-container">
  <input type="email"  style="background-color: #ffffffc9 !important;" class="input"  name="email" id="email"   placeholder="البريد الالكتروني"  value="<?php echo $email?> " disabled/>
</div> 
<span class="error-message" id="email-error"></span>
<div class="input-container">
  <input type="tel" style="background-color: #ffffffc9 !important;" class="input" id="phone" name="phone"  placeholder="رقم الجوال" value="<?php echo $phone?>" disabled/>
</div>  
<span class="error-message" id="phone-error"></span>
<div class="input-container">
    <input type="tel" style="background-color: #ffffffc9 !important;" class="input" id="NationalID" name="NationalID"  placeholder="رقم الهوية الوطنية" value="<?php echo $NationalID?>" disabled/>
  </div> 
  <span class="error-message" id="NationalID-error"></span>
<br>
<?php
} ?>
