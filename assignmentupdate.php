


  <?php
            mysql_connect("localhost","root","");
            mysql_select_db("musarat");

            
            
            $edit_assignment=$_GET['aedit'];

            $edit_querys= "SELECT * from assignmentinfo where id = '$edit_assignment'";

            $run =mysql_query($edit_querys);

            while($row=mysql_fetch_array($run)) {
                
                $myid=$row['id'];
		 		$cname=$row['CourseName'];
		 		$tname=$row['TutorName'];
		 		$topic=$row['AssignmentTopic'];
		 		$duedate=$row['DueData'];
		 		$description=$row['Description'];
        }

    

?>

<?php
           mysql_connect("localhost","root","");
            mysql_select_db("musarat");



               if(isset($_POST['update'])){

                $editassignment =$_GET['aediting'];

               
                $cname=$_POST['cname'];
                $tname=$_POST['tname'];
                $topic=$_POST['topic'];
                $duedate=$_POST['duedate'];
                $description=$_POST['description'];

 

     $edit_query ="UPDATE assignmentinfo set CourseName = '$cname', TutorName='$tname',AssignmentTopic='$topic',DueData='$duedate',Description='$description' where id = '$editassignment')"; 


if(mysql_query($edit_query)){
header("location: tutordashboard.php");

}  

}
 ?>



 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="createassignment.css">
</head>
	<style> 
	body{
		background-color: lightgrey;
	}
	.assignment{

	height: 600px;
	width: 300px;
	border: 5px solid black;
	margin-left: 30em;
	margin-top: 3em;

}


.assignment h1{

	margin-left: 0.6em;

}

.assignment input{

	
	margin: 1.3em;


}

.assignment label{

	
	margin: 1.3em;
}
textarea{
	margin-left: 1.3em;
}


</style>


<body class="assignmentbody">




	<div class="assignment">

		<h1> Assignment Details </h1><hr>

		<form method="post" action="assignmentupdate.php?aediting=<?php echo $myid; ?>">
			
			
			<input type="Text" name="cname" placeholder="Course Name" value="<?php echo $cname;?>">
			<input type="Text" name="tname" placeholder="Tutor Name" value="<?php echo $tname;?>">
			
	
                <label class="duedate"> Assignment Topic </label><br>
               
                <textarea rows="5" cols="25" name="topic"><?php echo $topic;?></textarea><hr>

                     <label class="duedate"> Due Date </label><br>

                     <input type="date" name="duedate"  value="<?php echo $duedate;?>"><hr><br>
    
                             
                             <label class="duedate"> Description </label><br>
                           
                               <textarea rows="5" cols="25" name="description"> <?php echo $description;?> </textarea>
 
   

	                                 <input type="submit" class="submit" name="update">

	</form>
		
	</div>
</body>
</html>
