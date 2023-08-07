<?php
            include("dbcon.php");
            mysql_select_db("project");

            $grade_delete=$_GET['gdel'];

            $delete_squery=" DELETE from gradesandmarks where id ='$grade_delete' ";

		 	$rowsAffected = mysqli_query($conn, $delete_squery);

		 	if($rowsAffected > 0) {
		 		$message = $rowsAffected."Grades and Marks Deleted successfully.";
		 	} else {
		 		$message = " No rows deleted. Please try again later.";
		 	}


		 	header("location: gradesintutordashboardsss.php?msg=".$message);

  ?>