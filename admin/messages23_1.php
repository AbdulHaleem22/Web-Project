
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
          }


.content-box td {
          	 white-space: nowrap;
          	 padding: 2px 5px !important;
          }



	.maindiv{
              
              
              margin-top: -0.5px;
              background-image:url(images/bimg.jpg);
	}

	.bgimg{
		margin-left: 10em;
		margin-top: -3.5em;
	}
	
	.button{
		margin-top: 1em;
	}
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
<body style="background-image: url(../assets/images/mm.jpg);">
 
 
    <?php include 'config/header.php';?>

	
<form class="button">
    
    <button style="background-color: mediumseagreen"><a href="adminpanel.php">Back HomePage</button></a>
</form>

<br><br>
	
	<div class="admin-main-box">
			<div class="left-menu-box">
				<?php include 'config/menus.php';?>
			</div>



			<div class="content-box"style="overflow:scroll;" >
					

	<div class="maindiv">
<table   align="center" border="5" id="course_table" >
    <tr>
      <td colspan="6" bgcolor="darkseagreen" style="color: white" align="center"><h1> User Complaints/Suggestions</h1></td>
    </tr>
		
		 <tr>
		 	<th bgcolor="transparent">Serial No</th>
		 	<th bgcolor="transparent">Sender Nmae</th>
		 	<th bgcolor="transparent">Email Address</th>
		 	<th bgcolor="transparent"> User Type </th>
            <th bgcolor="transparent"> Reason </th>
		 	<th bgcolor="transparent">Message</th>

		 	

		 	</tr>

		 	<?php
		 	mysql_connect("localhost","root","");
		 	mysql_select_db("project");

		 	$selectquery= "SELECT * from contactus";
		 	$run=mysql_query($selectquery);

		 	while($row=mysql_fetch_array($run)){
                
                $myid=$row['id'];
		 		$name=$row['name'];
		 		$email=$row['email'];
		 		$type=$row['type'];
		 		$reason=$row['reason'];
		 		$message=$row['message'];
                
		 	?>

		 	<tr>
		 		<td bgcolor="transparent"><?php echo $myid?> </td>
		 		<td bgcolor="transparent"><?php echo $name?></td>
		 		<td bgcolor="transparent"><?php echo $email?></td>
		 		<td bgcolor="transparent"><?php echo $type?></td>
                <td bgcolor="transparent"><?php echo $reason?></td>
		 		<td bgcolor="transparent"><?php echo $message?></td>
            </tr>

            <?php
        }
            ?>

        </table>
	

	</div>

	

	
			</div>
	</div>


<?php include 'config/footer.php';?>

</body>
</html>








