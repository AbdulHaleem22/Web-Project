

<?php
//This code is used for deleting student's records

            mysql_connect("localhost","root","");
		 	mysql_select_db("project");

		 	$delete_sid=$_GET['dels'];

		 	$delete_squery="DELETE from student_info where id ='$delete_sid' ";

		 	if(mysql_query($delete_squery)){

		 		echo "<script>window.open('viewuser.php?deleted=data has been deleted....', '_self')</script>";
		 	}

		 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

           //This block of code is used for deleting parent's records

		 	$delete_pid=$_GET['delp'];

		 	$delete_pquery="DELETE from parentinfo where id ='$delete_pid' ";

		 	if(mysql_query($delete_pquery)){

		 		echo "<script>window.open('viewuser.php?deleted=data has been deleted....', '_self')</script>";
		 	}

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            //This block of code is used for deleting tutor's records

		 	$delete_tid=$_GET['delt'];

		 	$delete_tquery="DELETE from tutorinfo where id ='$delete_tid' ";

		 	if(mysql_query($delete_tquery)){

		 		echo "<script>window.open('viewuser.php?deleted=data has been deleted....', '_self')</script>";
		 	}
?>