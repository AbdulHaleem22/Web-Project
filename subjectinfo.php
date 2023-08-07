<?php
include("dbcon_1.php");
session_start();

if(!$_SESSION['Semail']){

    header("location:login.php?adminerror=You are not a student");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title> Online Tutor </title>
	  <link rel="stylesheet" type="text/css" href="assets/css/stdashboard.css">
	<style>
		#course_table tr th {
    white-space: nowrap;
    padding: 5px !important;
  }

    #course_table tr td {
    white-space: nowrap;
    padding: 5px !important;
  }
	</style>
</head>
<body>

<div style="width:100%; min-height:400px; overflow:hidden;">
    
    <?php include 'config/student_dashboard/header.php';?>
    <br />


    <div id="inner_hundred">

            <div id="left_side_menu">
                <?php include 'config/student_dashboard/left_menu.php';?>
            </div>

         <div id="content_area" style="background-color:lightgrey; width:1000px !important; margin-left:50px !important;">
               <center><h1>My courses</h1></center>
               <hr />
               <div id="free_profile_updation" style="width:100%; font-weight:bold; margin:0 auto; border-radius:10px; 
               padding-left:10px; padding-top:20px; margin-top:20px; margin-bottom:20px; min-height:400px; overflow:scroll;">
					<table align="center" border="5" id="course_table">
						 <tr>
		 	<th bgcolor="white">S.No#</th>
		 	<th bgcolor="white"> Course Name</th>
		 	<th bgcolor="white">Tutor Name</th>
		 	<th bgcolor="white"> Tutor Email Address </th>
		 	<th bgcolor="white"> Tutor Phase</th>
		 	<th bgcolor="white">Tutor Phone No</th> 
		 	<th bgcolor="white">Course Duration From</th>
		 	<th bgcolor="white">Course Duration To </th>
		 	<th bgcolor="white">Class Start at</th>
		 	<th bgcolor="white">Class finish at </th>
            
		 	</tr>


		 	<?php
     

     /*this block of code will view the data inserted into student_info in mySQL*/

     /* student details*/
		 	

		 	$selectquery= "select * from subject_info";
		 	$run=mysqli_query($conn,$selectquery);
		 	$serial = 0;
		 	while($row=mysqli_fetch_array($run)){
                $serial++;
                $myid=$row['id'];
		 		$Cname=$row['CourseNmae'];
		 		$Tname=$row['TutorName'];
		 		$Temail=$row['TutorEmailAddress'];
		 		$Tphase=$row['TutorPhase'];
                $Tphone=$row['TutorPhoneNo'];
                $cfrom=$row['coursefrom'];
                $cto=$row['courseto'];
                $classstart=$row['ClassStartat'];
                $classfinish=$row['Classfinishat'];
		 	?>

		 	<tr>
		 		<td bgcolor="white"><?php echo $serial;?> </td>
		 		<td bgcolor="white"><?php echo $Cname;?></td>
		 		<td bgcolor="white"><?php echo $Tname;?></td>
		 		<td bgcolor="white"><?php echo $Temail;?></td>
		 		<td bgcolor="white"><?php echo $Tphase;?></td>
                <td bgcolor="white"> <?php echo $Tphone;?> </td>
                 <td bgcolor="white"> <?php echo $cfrom;?> </td>
                  <td bgcolor="white"> <?php echo $cto;?> </td>
                <td bgcolor="white"> <?php echo $classstart;?> </td>
                <td bgcolor="white"> <?php echo $classfinish;?> </td>
                
		 		
		 	</tr>

		<?php } ?>


					</table>
			</div> 
            

    </div>  


</div>
</div>


 <br />
 <br />
 <br />
 <br />
  <?php include 'config/footer.php';?>

<?php
$message = "";
  if(isset($_GET['msg'])) {
    $message = $_GET['msg'];
  }
?>

<script>
  var successMessage = '<?php echo $message;?>';

  if(successMessage !== '') {
    alert(successMessage);
  }
</script>
</body>
</html> 

