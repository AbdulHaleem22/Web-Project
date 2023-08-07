<?php 
include("dbcon.php");



$cname=$_POST['cname'];
$tname=$_POST['tname'];
$topic=$_POST['topic'];
$duedate=$_POST['duedate'];
$description=$_POST['description'];

$sqlquery="INSERT INTO assignmentinfo(CourseName,TutorName,AssignmentTopic,DueData,Description) values('$cname','$tname','$topic','$duedate','$description')";
mysqli_query($conn,$sqlquery);

$message = "Assignment has been saved successfully.";

header("location: tutordashboard.php?msg=".$message);


 ?>