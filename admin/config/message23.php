
<html>
<style>

	.maindiv{
              
              
              margin-top: -0.5px;
              background-image:url(images/bimg.jpg);
	}

	.bgimg{
		margin-left: 18em;
		margin-top: -3.5em;
	}
	
	.button{
		margin-top: 1em;
	}
</style>
<body class="message">
<form class="button">
    
    <button style="background-color: mediumseagreen"><a href="adminpanel.php">Back HomePage</button></a>
</form>
<div>
 <img src="images/msgbg.jpg" class="bgimg">
<div class="maindiv">
<table  width="800" align="center" border="5" >
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
    
    </body>
    </html>