<?php
include('dbcon.php');
session_start();
	# code...

  

if (isset($_POST['comment'])) {
		$commentText = $_POST['commentText'];
		$teacherid = $_GET['id'];
		$username = $_SESSION['studentname'];
	$sql = "INSERT INTO comment (Username, Teacher_Id, Comment_Text) VALUES ('$username', '$teacherid', '$commentText')";
		$runQuery = mysqli_query($conn, $sql);

		if(!$_SESSION['studentname']){

    echo ("<script LANGUAGE='JavaScript'>
					alert('Comment Unsuccessful! please login first')
					window.location.href='login.php';
				</script>");
		}
		else
		{
			header("location:profile.php?view=$teacherid");
		}
		
	}
	?>