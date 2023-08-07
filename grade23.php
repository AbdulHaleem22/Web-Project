<!DOCTYPE html>
<html>
<head>
	<title> Marks and Grades </title>
	<style>

	body{
		background-color: lightgray;
	}

		.student_table{
			margin-top: -16.5em;
			margin-right:8em;

			padding: 0;
        }

          .grades{
          	height: 255px;
          	width: 400px;
          	border: 5px solid black;
          }
	</style>
</head>
<body>
      <h1>Grading System</h1>
	
	<div class="grades">
          
		<img src="assets/images/grading.jpg">

	</div>
	
<table class="student_table" width="800" align="center" border="5">
    <tr>
      <td colspan="7" bgcolor="darkseagreen" align="center"><h1> Marks and Grades </h1></td>
    </tr>
		
		 <tr>
		 	<th bgcolor="white">Serial No</th>
		 	<th bgcolor="white"> Course Name</th>
		 	<th bgcolor="white">Tutor Name</th>
		 	<th bgcolor="white"> Obtained Marks</th>
		 	<th bgcolor="white"> Total Marks </th>
		 	<th bgcolor="white"> Grades</th>
		 	<th bgcolor="white"> Tutor Comments</th>
		 	 
            </tr>

		 	<?php
     

     /*this block of code will view the data inserted into student_info in mySQL*/

     /* student details*/
		 	mysql_connect("localhost","root","");
		 	mysql_select_db("project");

		 	$selectquery= "select * from gradesandmarks";
		 	$run=mysql_query($selectquery);

		 	while($row=mysql_fetch_array($run)){
                
                $myid=$row['id'];
		 		$Cname=$row['CourseName'];
		 		$Tname=$row['TutorName'];
		 		$om=$row['ObtainMarks'];
		 		$tm=$row['TotalMarks'];
		 		$grades=$row['Grades'];
		 		$cmnts=$row['Comments'];
                
       
		 	?>

		 	<tr>
		 		<td bgcolor="white"><?php echo $myid?> </td>
		 		<td bgcolor="white"><?php echo $Cname?></td>
		 		<td bgcolor="white"><?php echo $Tname?></td>
		 		<td bgcolor="white"><?php echo $om?></td>
		 		<td bgcolor="white"> <?php echo $tm?> </td>
		 		<td bgcolor="white"><?php echo $grades?></td>
		 		<td bgcolor="white"><?php echo $cmnts?></td>
                
              
             </tr>

		<?php } ?>

	</table>