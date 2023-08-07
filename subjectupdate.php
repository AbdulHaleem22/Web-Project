<?php
     
            mysql_connect("localhost","root","");
		 	mysql_select_db("project");


		 	$edit_subject=$_GET['sedit'];

		 	$selectquery= "SELECT * from subject_info where id = '$edit_subject'";
		 	$run=mysql_query($selectquery);

		 	while($row=mysql_fetch_array($run)){
                
                $myid=$row['id'];
		 		$cname=$row['CourseNmae'];
		 		$tname=$row['TutorName'];
		 		$email=$row['TutorEmailAddress'];
		 		$phase=$row['TutorPhase'];
                $number=$row['TutorPhoneNo'];
                $cduration=$row['coursefrom'];
                $cdurationto=$row['courseto'];
                $starttime=$row['ClassStartat'];
                $endtime=$row['Classfinishat'];

           }

		 	?>

		 	<?php
                   mysql_connect("localhost","root","");
                   mysql_select_db("project");



               if(isset($_POST['update'])){

                $editsubject =$_GET['sediting'];

               
                $tname=$_POST['tname'];
                $email=$_POST['email'];
                $number=$_POST['number'];
                $phase=$_POST['phase'];
                $cname=$_POST['Cname'];
                $cduration=$_POST['Cduration'];
                $cdurationto=$_POST['Cdurationto'];
                $starttime=$_POST['starttime'];
                $endtime=$_POST['endtime'];
               
 

    $edit_query ="UPDATE subject_info set CourseNmae= '$cname', TutorName='$tname',TutorEmailAddress='$email',TutorPhase='$phase',
         TutorPhoneNo='$number',coursefrom='$cduration',courseto='$cdurationto',ClassStartat='$starttime', Classfinishat='$endtime' where id = '$editsubject')"; 


if(mysql_query($edit_query)){
header("location: tutorupdelsubject.php");

}  

}
 ?>

 <!DOCTYPE html>
<html class="sig">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="createcourse.css">
</head>
<body class="studentbody">




	<div class="studentsignup">

		<h1> Course Details </h1><hr>

		<form method="post" action="subjectupdate.php?sediting=<?php echo $myid;?>">  
			
			
			<input type="Text" name="tname" placeholder="Tutor Name" value="<?php echo $tname;?>">
			<input type="Text" name="email" placeholder="Email Address" value="<?php echo $email;?>">
			<input type="tel" name="number" placeholder="Tutor Phone Number" value="<?php echo $number;?>">
	 
	  <select name="phase"  value="<?php echo $phase;?>">
		<option selected disabled="select Phase"> Tutor Phase </option>
		<option> Phase I </option>
		<option>Phase II</option>
		<option>Phase III</option>
		<option>Phase IV</option>
		<option>Phase V</option>
		<option>Phase VI</option>
		<option>Phase VII</option>
	</select>

    <input type="text" name="Cname" placeholder="Course Name"  value="<?php echo $cname;?>"><hr>

    <label class="labels">Course Duration From</label>

    <input type="date" name="Cduration" value="<?php echo $cduration;?>"><hr>

    <label class="labels">To</label>

    <input type="date" name="Cdurationto"  value="<?php echo $cdurationto;?>"><hr>

	 <label class="labels">Class Start at</label>

	<input type="time" name="starttime" value="<?php echo $starttime;?>"><hr>

	<label class="labels">Class Finish at</label>

	<input type="time" name="endtime"  value="<?php echo $endtime;?>">

	<input type="submit" name="submit">

	</form>
		
	</div>
</body>
</html>

