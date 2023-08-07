<?php 

include("dbcon.php");
 $cname=$_POST['CourseName'];
 $tname=$_POST['TutorName'];
 $om=$_POST['ObtainMarks'];
 $tm=$_POST['TotalMarks'];
 $grade=$_POST['Grades'];
 $comment=$_POST['Comments'];
 



$myquery ="INSERT INTO gradesandmarks(CourseName,TutorName,ObtainMarks,TotalMarks,Grades,Comments) values ('$cname',
'$tname','$om','$tm','$grade', '$comment')";
 mysqli_query($conn,$myquery);


$message = "Marks and Grades Add successfully.";

header("location: tutordashboard.php?msg=".$message);
?>

