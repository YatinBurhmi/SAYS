 <?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo $_POST['submitbutton'];

$dbcon=mysqli_connect("localhost","root","root");
mysqli_select_db($dbcon,"says");  


$sql = "update complaint set status='processed' where complaint_id='4';";


if (mysqli_query($dbcon, $sql)) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($dbcon);
}

mysqli_close($dbcon);


include("View_Complaints.php");
?> 



