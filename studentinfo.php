<?php 
include("dbcon1.php");
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password1'];
$gender=$_POST['gender'];
$phase=$_POST['phase'];
$phone1=$_POST['phone'];



$sqlquery="INSERT INTO student_info(Sname,Semail,gender,phase,phone,spass) values('$name','$email','$gender','$phase','$phone1','$pass')";
mysqli_query($conn,$sqlquery);

header("location: main.php");
 ?>
