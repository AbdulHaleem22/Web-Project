<?php
include('dbcon.php');
session_start();
	$rating=$_GET['rating'];
	$teacherid = $_GET['id'];
	$studentname = $_SESSION['studentname'];

	$sql = "SELECT * FROM comment WHERE Teacher_Id = '$teacherid' AND Username = '$studentname'";
		$runsql = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($runsql);
		if ($count>0) {
			$sql = "UPDATE comment SET Rating = '$rating' WHERE Username='$studentname' AND Teacher_Id='$teacherid'";
			$runQuery = mysqli_query($conn, $sql);
			header("location:profile.php?view=".$teacherid);
		}
		else
		{
			$sql = "INSERT INTO comment (Username, Teacher_Id, Rating) VALUES ('$username', '$studentname', '$rating')";
			$runQuery = mysqli_query($conn, $sql);
			header("location:profile.php?view=".$teacherid);
		}
?>