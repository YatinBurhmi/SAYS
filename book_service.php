 <?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$dbcon=mysqli_connect("localhost","root","");

session_start();


$phone = $_SESSION["number"];

mysqli_select_db($dbcon,"says");  


$name= $_POST['name'];
$rollnumber= $_POST['rollnumber'];
$roomnumber= $_POST['roomnumber'];
$problem= $_POST['problem'];

//$sql = "INSERT INTO complaint ( user_name, user_roll,user_room, complaint,phone) VALUES ('$name','$rollnumber','$roomnumber','$problem','$phone')";
//mysqli_query($dbcon, $sql);




if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be less than 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }


$a="uploads/".$file_name;


$sql = "INSERT INTO complaint ( user_name, user_roll,user_room, complaint,phone,images) VALUES ('$name','$rollnumber','$roomnumber','$problem','$phone','$a')";
mysqli_query($dbcon, $sql);



mysqli_close($dbcon);


include('booked.php');
?>	
