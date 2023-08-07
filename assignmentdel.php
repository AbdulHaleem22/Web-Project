<?php
            
        include("dbcon.php");

     
            $assignment_delete=$_GET['adel'];

            $delete_squery=" DELETE from assignmentinfo where id ='$assignment_delete' ";

		 	
		 	$rowsAffected = mysqli_query($conn, $delete_squery);

		 	if($rowsAffected > 0) {
		 		$message = $rowsAffected." rows deleted successfully.";
		 	} else {
		 		$message = " No rows deleted. Please try again later.";
		 	}


		 	header("location: tutorassignmentud.php?msg=".$message);



  ?>