<?php
            include("dbcon.php");

     
            $subject_delete=$_GET['sdel'];

            $delete_squery=" DELETE from subject_info where id ='$subject_delete';";

		 	$rowsAffected = mysqli_query($conn, $delete_squery);

		 	if($rowsAffected > 0) {
		 		$message = $rowsAffected." rows deleted successfully.";
		 	} else {
		 		$message = " No rows deleted. Please try again later.";
		 	}


		 	header("location: tutorupdelsubject.php?msg=".$message);

  ?>