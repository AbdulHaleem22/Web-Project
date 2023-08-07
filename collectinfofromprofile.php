<?php 
include("dbcon.php");
include('ImageUpload.php');
  include('FileUpload.php');

if(isset($_POST['submit'])){

  

  $name=$_POST['name'];
  
  $education=$_POST['education'];
   
   $email=$_POST['email'];

   $number=$_POST['number'];

   $gender=$_POST['gender'];
 
   $dob=$_POST['dob'];

   $offer=$_POST['offer'];

   $address=$_POST['address'];

   $aboutme=$_POST['aboutme'];

$sqlquery="INSERT INTO createprofile (avatar1,name,education,email,phone,gender,dob,offer,address,aboutme,avatar2) VALUES('$imageDestination','$name','$education', 
	'$email', '$number', '$gender', '$dob', '$offer', '$address', '$aboutme', '$fileDestination')";
mysqli_query($conn, $sqlquery) or die(mysqli_error($conn));
//header("location: tutordashboard.php");

}
 ?>