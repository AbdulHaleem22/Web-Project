
	<!DOCTYPE html>
<html>
<head>
	<title>Update Students</title>

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
	</style>
</head>


<body style="background-image: url(images/mm.jpg);">
 
    
	<button><a href="stdashboard.html">Back to Dashboard</button></a>
</form><br><br>
	
<table class="student_table" width="800" align="center" border="5">
    <tr>
      <td colspan="9" bgcolor="darkseagreen" align="center"><h1>Update Records</h1></td>
    </tr>
		
		 <tr>
		 	<th bgcolor="white">Serial No</th>
		 	<th bgcolor="white">Student Nmae</th>
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
		 	mysql_select_db("musarat");

		 	$selectquery= "select * from student_info where id='myid'";
		 	$run=mysql_query($selectquery);

		 	while($row=mysql_fetch_array($run)){
                
                $myid=$row['id'];
		 		$name=$row['Sname'];
		 		$email=$row['Semail'];
		 		$gender=$row['gender'];
		 		$phase=$row['phase'];
                $phone=$row['phone'];
                $pass=$row['S_password'];
		 	?>

		 	<tr>
		 		<td bgcolor="white"><?php echo $myid?> </td>
		 		<td bgcolor="white"><?php echo $name?></td>
		 		<td bgcolor="white"><?php echo $email?></td>
		 		<td bgcolor="white"><?php echo $gender?></td>
		 		<td bgcolor="white"><?php echo $phase?></td>
                <td bgcolor="white"> <?php echo $phone?> </td>
                <td bgcolor="white"> <?php echo $pass?> </td>
                <td bgcolor="white"><a href="edit.php?edits=<?php echo $myid; ?>">Edit</a></td>
                <td bgcolor="white"><a href="delete.php?dels=<?php echo $myid; ?>">Delete</a></td>
		 		
		 	</tr>

		<?php } ?>

	</table>

	<br><br>

	</body>
</html>
