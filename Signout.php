<?php 

   session_start();

   $_SESSION['loggedin'] = false;

   session_unset();
   
   // Redirect to the login page
   header("location: index.php");
   exit;
?>