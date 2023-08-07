  <!DOCTYPE html>
  <html>
  <head>
  	<title>Search</title>
  </head>
  <body>
  
 

     <table width="1200" align="center" border="5">
    <tr>
      <td colspan="17" bgcolor="grey" align="center"><h1>All registered Tutors</h1></td>
    </tr>
		
		 <tr>
		 	<th bgcolor="lightgrey">Serial No</th>
		 	<th bgcolor="lightgrey">Nmae</th>
		 	<th bgcolor="lightgrey">Email</th>
		 	<th bgcolor="lightgrey">Password</th>
		 	<th bgcolor="lightgrey">Gender</th>
		 	<th bgcolor="lightgrey">Phase</th>
		 	<th bgcolor="lightgrey">YOB</th>
		 	<th bgcolor="lightgrey">Phone</th>
		 	<th bgcolor="lightgrey">Eng</th>
		 	<th bgcolor="lightgrey">Bio</th>
		 	<th bgcolor="lightgrey">Math</th>
		 	<th bgcolor="lightgrey">Chemistry</th>
		 	<th bgcolor="lightgrey">Physics</th>
		 	<th bgcolor="lightgrey">Pak Study</th>
		 	<th bgcolor="lightgrey">Islamyat</th>
            <th bgcolor="lightgrey">Edit</th>
            <th bgcolor="lightgrey"> Delete </th>

		 	</tr>

		 	<?php
     

   
      mysql_connect("localhost","root","");
		 	mysql_select_db("musarat");

if(isset($_GET['searchtutor'])){


	$search=$_GET['searchtutor'];

	$searchquery="SELECT * FROM tutorinfo WHERE temail ='$search' OR tname = '$search' "; 

	$run=mysql_query("$searchquery");

		 	while($row=mysql_fetch_array($run)) {

		 		 $myid=$row['id'];
		 		$name=$row['tname'];
		 		$email=$row['temail'];
		 		$pass=$row['tpassword'];
		 		$gender=$row['tgender'];
		 		$phase=$row['tphase'];
		 		$yob=$row['tyob'];
		 		$phone=$row['tphone'];
		 		$english=$row['english'];
		 		$biology=$row['biology'];
		 		$mathematics=$row['mathematics'];
		 		$chemistry=$row['chemistry'];
		 		$physics=$row['physics'];
		 		$pakistan_studies=$row['pakistan_studies'];
		 		$islamyat=$row['islamyat'];

             }

		 if(empty($myid || $name || $email ||$pass ||$gender ||$phase ||$yob || $phone ||$english ||$biology ||$mathematics ||$chemistry ||$physics
		 	||$pakistan_studies ||$islamyat)){

    	echo "<center><h1> Sorry! No record was found<h1></center>";
    }	


        else {

        
		 	?>

		 	

		
     <tr>
		 		<td bgcolor="lightgrey"><?php echo $myid?> </td>
		 		<td bgcolor="lightgrey"><?php echo $name?></td>
		 		<td bgcolor="lightgrey"><?php echo $email?></td>
		 		<td bgcolor="lightgrey"> <?php echo $pass?> </td>
		 		<td bgcolor="lightgrey"> <?php echo $gender?> </td>
		 		<td bgcolor="lightgrey"><?php echo $phase?></td>
		 		<td bgcolor="lightgrey"><?php echo $yob?></td>
                <td bgcolor="lightgrey"> <?php echo $phone?> </td>
                <td bgcolor="lightgrey"> <?php echo $english?> </td>
                 <td bgcolor="lightgrey"> <?php echo $biology?> </td>
                  <td bgcolor="lightgrey"> <?php echo $mathematics?> </td>
                   <td bgcolor="lightgrey"> <?php echo $chemistry?> </td>
                    <td bgcolor="lightgrey"> <?php echo $physics?> </td>
                     <td bgcolor="lightgrey"> <?php echo $pakistan_studies?> </td>
                      <td bgcolor="lightgrey"> <?php echo $islamyat?> </td>
                <td bgcolor="lightgrey">Edit</td>
                <td bgcolor="lightgrey"> Delete </td>
		 		
		 	</tr>

		<?php 
	   } 

	}

		?>

	</table>

	 </body>
  </html>