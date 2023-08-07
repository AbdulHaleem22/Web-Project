<?php 
include("dbcon.php");

$tname = $_POST['tname'];
$temail = $_POST['temail'];
$tpass = $_POST['tpassword'];
$tgender = $_POST['tgender'];
$tphase = $_POST['tphase'];
$tyob = $_POST['yob'];
$tphone = $_POST['tphone'];
$sub1 = $_POST['subject1'];
$sub2 = $_POST['subject2'];
$sub3 = $_POST['subject3'];
$sub4 = $_POST['subject4'];
$sub5 = $_POST['subject5'];

$encryptedPassword = md5($tpass);


$sqlquery="INSERT INTO tutorinfo(tname, temail, tpassword, tgender, tphase, tyob, 
	tphone, subject1, subject2, subject3, subject4, subject5) values
     ('$tname', '$temail', '$encryptedPassword', '$tgender', '$tphase', '$tyob', '$tphone', '$sub1',
     	'$sub2', '$sub3', '$sub4', '$sub5');";

mysqli_query($conn, $sqlquery);

header("location: login.php");
 ?>
