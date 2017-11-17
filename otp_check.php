<?php


 
 
session_start();
if(isset($_POST['otp_submit']))
{
  
if( $_SESSION["otp"] ==  $_POST['otp'])  
    {  
  
        //echo "<script>window.open('service.php','_self')</script>";
   echo "<script>window.location='service.php'</script>";
    }  
    else {echo"<script>alert('otp is incorrect..!')</script>";  }  
  
}
?>
