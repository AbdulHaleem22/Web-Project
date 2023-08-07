
<form>
    
    <button style="background-color: mediumseagreen"><a href="viewuser.php">Back HomePage</button></a>
</form>
<?php
            mysql_connect("localhost","root","");
            mysql_select_db("project");

            

            $edit_tutor=$_GET['editt'];

            $edit_tutor_queryt= "SELECT * from tutorinfo where id = '$edit_tutor'";

            $run =mysql_query($edit_tutor_queryt);

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
?>

<?php
            mysql_connect("localhost","root","");
            mysql_select_db("project");



               if(isset($_POST['update'])){

                $edit_tutor1=$_GET['edittu'];

                $myid=$_POST['id'];
                $name=$_POST['tname'];
                $email=$_POST['temail'];
                $pass=$_POST['tpassword'];
                $gender=$_POST['tgender'];
                $phase=$_POST['tphase'];
                $yob=$_POST['tyob'];
                $phone=$_POST['tphone'];
                $english=$_POST['english'];
                $biology=$_POST['biology'];
                $mathematics=$_POST['mathematics'];
                $chemistry=$_POST['chemistry'];
                $physics=$_POST['physics'];
                $pakistan_studies=$_POST['pakistan_studies'];
                $islamyat=$_POST['islamyat'];

                


                 

            $edit_tutor_query= "UPDATE tutorinfo set tname='$name', temail='$email', tpassword='$pass', tgender='$gender', tphase='$phase',
            tyob='$yob', tphone='$phone', english='$english', biology='$biology', mathematics='$mathematics', chemistry='$chemistry', physics='$physics', pakistan_studies='$pakistan_studies', islamyat='$islamyat' where id = '$edit_tutor1' ";

            if(mysql_query($edit_tutor_query)){

            header("location: viewuser.php");
            }
                
}
?>


<html>
<head>
	<title>Update Records</title>
</head>
<body style="background-image: url(images/mm.jpg);">


  
 <form action="edittutor.php?edittu=<?php echo $myid; ?>" method="post">
		
        <table width="500" border="5" height="500" align="center">
    <tr>
    	<td colspan="5" bgcolor="brown" align="center"><h1> Update Tutors' Records </h1></td>
    </tr>

    <tr> 
        <td>Serial No</td>
    	<td><input type="text" name="id" value="<?php echo $myid;?>"> </td>
    </tr>
    <tr>
    	<td>Tutor Name</td>
    	<td><input type="text" name="tname" value="<?php echo $name;?>"></td>
    </tr>

    <tr>
    	<td>Email Address</td>
    	<td><input type="text" name="temail" value="<?php echo $email;?>"></td>
    </tr>

    <tr>
        <td>Password</td>
        <td><input type="text" name="tpassword" value="<?php echo $pass;?>"></td>
    </tr>

    <tr>
        <td>Gender</td>
        <td><input type="text" name="tgender" value="<?php echo $gender;?>"></td>
    </tr> 

    <tr>
        <td>Phase</td>
        <td><input type="text" name="tphase" value="<?php echo $phase;?>"></td>
    </tr>

    <tr>
        <td>YOB</td>
        <td><input type="text" name="tyob" value="<?php echo $yob;?>"></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><input type="text" name="tphone" value="<?php echo $phone;?>"></td>
    </tr>

    <tr>
        <td>Eng</td>
        <td><input type="text" name="english" value="<?php echo $english;?>"></td>
   </tr>

    <tr>
        <td>Bio</td>
        <td><input type="text" name="biology" value="<?php echo $biology;?>"></td>
   </tr>

   <td>Math</td>
        <td><input type="text" name="mathematics" value="<?php echo $mathematics;?>"></td>
   </tr>

   <td>Chemistry</td>
        <td><input type="text" name="chemistry" value="<?php echo $chemistry;?>"></td>
   </tr>

   <td>Physics</td>
        <td><input type="text" name="physics" value="<?php echo $physics;?>"></td>
   </tr>

   <td>Pak Study</td>
        <td><input type="text" name="pakistan_studies" value="<?php echo $pakistan_studies;?>"></td>
   </tr>

   <td>Islamyat</td>
        <td><input type="text" name="islamyat" value="<?php echo $islamyat;?>"></td>
   </tr>

   <td colspan="5" bgcolor="indianred" align="center"><input style="background-color: #900C3F  " type="submit" name="update" value="Update Now"></td>
    	
    </tr>
     </table>

	</form><br><br>         

</body>
</html>
