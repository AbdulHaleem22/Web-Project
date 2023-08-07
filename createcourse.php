

<?php 
include("dbcon.php");

$tname=$_POST['teacher_name'];
$temail=$_POST['email'];
$tphone=$_POST['phone'];
$tphase=$_POST['phase'];

$cname=$_POST['course_name'];
$cfrom=$_POST['duration_from'];
$cto=$_POST['duration_to'];

$cstartat=$_POST['starttime'];
$cfinishat=$_POST['endtime'];




$sqlquery="INSERT INTO subject_info (CourseNmae,TutorName,TutorEmailAddress,TutorPhase,TutorPhoneNo,coursefrom,courseto,ClassStartat,Classfinishat) values
     ('$cname','$tname','$temail','$tphase','$tphone','$cfrom','$cto','$cstartat','$cfinishat');";

mysqli_query($conn,$sqlquery);

$message = "Course has been created successfully.";

header("location: tutordashboard.php?msg=".$message);


 ?>
