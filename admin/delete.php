

<?php
//This code is used for deleting student's records

			$message = "";

            mysql_connect("localhost","root","");
		 	mysql_select_db("project");

		 	$delete_sid=$_GET['dels'];

			if($delete_sid != "") {
				$delete_squery="DELETE from student_info where id ='$delete_sid';";

			 	if(mysql_query($delete_squery)){

			 		$message = "Student has been deleted successfully.";
			 		header("location:viewuser.php?msg=".$message);
			 	}	
			}
			

		 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

           //This block of code is used for deleting parent's records

		 	$delete_pid=$_GET['delp'];

		 	if($delete_pid != "") {
			 	$delete_pquery="DELETE from parentinfo where id ='$delete_pid';";

			 	if(mysql_query($delete_pquery)){

			 		$message = "Parent info has been deleted successfully.";
			 		header("location:viewuser.php?msg=".$message);
			 	}	
		 	}
		 	

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            //This block of code is used for deleting tutor's records

		 	$delete_tid=$_GET['delt'];

		 	if($delete_tid != "") {
			 	$delete_tquery="DELETE from tutorinfo where id ='$delete_tid' ";

			 	if(mysql_query($delete_tquery)){

			 		$message = "Tutor has been deleted successfully.";
			 		header("location:viewuser.php?msg=".$message);
			 	}	
		 	}

?>