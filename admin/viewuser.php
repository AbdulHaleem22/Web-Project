
<?php

  session_start();

  if(!$_SESSION['admin_name']){

  	header("location:index.php?adminerror=You are not admin");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="../assets/css/adminpanel.css" />
	<style>
		.student_table{
			margin-top: -1em;
			padding: 0;
        }



          .view li{
          	list-style-type: none;
          	margin-left: -2em;
          }
          .view a{
          	text-decoration: none;
          }
          .view li:hover{
          	cursor: pointer;
          	background-color: grey;
          	width: 7em;
          }

          .content-box th {
          	 white-space: nowrap;
          	 padding: 2px 5px !important;
          	


.content-box td {
          	 white-space: nowrap;
          	 padding: 2px 5px !important;
          	  
          }
         #tutors td  {
         	
         }

	</style>
</head>


<body style="background-image: url(../assets/images/mm.jpg);">
 
    <?php include 'config/header.php';?>

	<button><a href="adminpanel.php">Back HomePage</button></a>
<br><br>
	
	<div class="admin-main-box">
			<div class="left-menu-box">
				<?php include 'config/menus.php';?>
			</div>



			<div class="content-box" style=" width: 1100px; ">
					<table class="student_table" align="center" border="5">
    <tr>
      <td colspan="9" bgcolor="darkseagreen" align="center"><h1>All registered Students</h1></td>
    </tr>
		
		 <tr>
		 	<th bgcolor="white">S.No</th>
		 	<th bgcolor="white">Student Name</th>
		 	<th bgcolor="white">Email Address</th>
		 	<th bgcolor="white"> Gender </th>
		 	<th bgcolor="white">Phase</th>
		 	<th bgcolor="white">Phone</th> 
		 	<th bgcolor="white">Password</th>
            <th bgcolor="white">Edit</th>
            <th bgcolor="white"> Delete </th>

		 	</tr>

		 	<?php
     

     /*this block of code will view the data inserted into student_info in mySQL*/

     /* student details*/
		 	mysql_connect("localhost","root","");
		 	mysql_select_db("project");

		 	$selectquery= "SELECT * from student_info";
		 	$run=mysql_query($selectquery);

		 	$serial = 0;
		 	while($row=mysql_fetch_array($run)){
                $serial++;
                $myid=$row['id'];
		 		$name=$row['Sname'];
		 		$email=$row['Semail'];
		 		$gender=$row['gender'];
		 		$phase=$row['phase'];
                $phone=$row['phone'];
                $pass=$row['spass'];
		 	?>
   
		 	<tr>
		 		<td bgcolor="white"><?php echo $serial;?> </td>
		 		<td bgcolor="white"><?php echo $name;?></td>
		 		<td bgcolor="white"><?php echo $email;?></td>
		 		<td bgcolor="white"><?php echo $gender;?></td>
		 		<td bgcolor="white"><?php echo $phase;?></td>
                <td bgcolor="white"> <?php echo $phone;?> </td>
                <td bgcolor="white"> <?php echo $pass;?> </td>
                <td bgcolor="white"><a href="edit.php?edits=<?php echo $myid; ?>">Edit</a></td>
                <td bgcolor="white"><a href="delete.php?dels=<?php echo $myid; ?>">Delete</a></td>
		 		
		 	</tr>
          
		<?php } ?>

	</table>

	<br><br>

	

	<!-- Registered Tutors-->

	 <table align="center" border="5"   >
    <tr>
      <td colspan="17" bgcolor="grey" align="center"  ><h1>All registered Tutors</h1></td>
    </tr>
		
		 <tr>
     
		 	<th bgcolor="lightgrey">S.No</th>
		 	<th bgcolor="lightgrey">Name</th>
		 	<th bgcolor="lightgrey">Email</th>
		 	<th bgcolor="lightgrey">Password</th>
		 	<th bgcolor="lightgrey">Gender</th>
		 	<th bgcolor="lightgrey">Phase</th>
		 	<th bgcolor="lightgrey">YOB</th>
		 	<th bgcolor="lightgrey">Phone</th>
		 	<th bgcolor="lightgrey">Subject1</th>
		 	<th bgcolor="lightgrey">Subject2</th>
		 	<th bgcolor="lightgrey">Subject3</th>
		 	<th bgcolor="lightgrey">Subject4</th>
		 	<th bgcolor="lightgrey">Subject5</th>
            <th bgcolor="lightgrey">Edit</th>
            <th bgcolor="lightgrey"> Delete </th>

		 	</tr>
         
		 	<?php
     

     /*this block of code will view the data inserted into tutorinfo in mySQL*/
		 	mysql_connect("localhost","root","");
		 	mysql_select_db("project");

		 	$selectquery= "SELECT * from tutorinfo";
		 	$run=mysql_query("$selectquery");
		 	$serial = 0;
		 	while($row=mysql_fetch_array($run)){
                $serial++;
                $myid=$row['id'];
		 		$name=$row['tname'];
		 		$email=$row['temail'];
		 		$pass=$row['tpassword'];
		 		$gender=$row['tgender'];
		 		$phase=$row['tphase'];
		 		$yob=$row['tyob'];
		 		$phone=$row['tphone'];
		 		$english=$row['subject1'];
		 		$biology=$row['subject2'];

		 		$mathematics=$row['subject3'];
		 		$chemistry=$row['subject4'];
		 		$physics=$row['subject5'];
		 		
        
		 	?>

		 	<tr>
		 		<td bgcolor="lightgrey"><?php echo $serial;?> </td>
		 		<td bgcolor="lightgrey"><?php echo $name;?></td>
		 		<td bgcolor="lightgrey"><?php echo $email;?></td>
		 		<td bgcolor="lightgrey"> <?php echo $pass;?> </td>
		 		<td bgcolor="lightgrey"> <?php echo $gender;?> </td>
		 		<td bgcolor="lightgrey"><?php echo $phase;?></td>
		 		<td bgcolor="lightgrey"><?php echo $yob;?></td>
                <td bgcolor="lightgrey"> <?php echo $phone;?> </td>
                <td bgcolor="lightgrey"> <?php echo $english;?> </td>
                 <td bgcolor="lightgrey"> <?php echo $biology;?> </td>
                  <td bgcolor="lightgrey"> <?php echo $mathematics;?> </td>
                   <td bgcolor="lightgrey"> <?php echo $chemistry;?> </td>
                    <td bgcolor="lightgrey"> <?php echo $physics;?> </td>
                <td bgcolor="lightgrey"><a href=" edittutor.php?editt=<?php echo $myid; ?>">Edit</a></td>
                <td bgcolor="lightgrey"><a href="delete.php?delt=<?php echo $myid; ?>">Delete</a></td>
		 		
		 	</tr>

		<?php } ?>

	</table>
			</div>
	</div>


<?php include 'config/footer.php';?>

<script>
	
	<?php 
	$message = "";
		if (isset($_GET['msg'])) {
			$message = $_GET['msg'];
		}
	?>

	var  message = '<?php echo $message;?>';

	if(message !== '') {
		alert(message);
	}
</script>
</body>
</html>








