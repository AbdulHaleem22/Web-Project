<?php
include('../dbcon.php');

$email = $_GET['teacher_email'];
$count = 1;

$query = "SELECT COUNT(*) AS count FROM 
tutorinfo WHERE `temail`='$email';";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$count = $row['count'];

echo $count;

?>