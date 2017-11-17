<?php  
error_reporting(E_ALL);
ini_set('display_errors', '1');



$dbcon=mysqli_connect("localhost","root","");

//if ($dbcon->connect_error) {
   // die("Connection failed: " . $dbcon->connect_error);
//} 

mysqli_select_db($dbcon,"says");  
?>  
