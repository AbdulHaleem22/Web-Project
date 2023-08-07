<?php
include('../dbcon.php');

$email = $_GET['student_email'];
$count = 1;

$query = "SELECT COUNT(*) AS count FROM 
student_info WHERE `Semail`='$email';";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$count = $row['count'];

echo $count;

?>