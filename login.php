
<?php
  
    include('dbcon.php');


 if(isset($_POST['login'])){

 	$usertype="";
if ($_POST['usertype']=="Tutor") {
    
    $useremail=$_POST['student_email'];
    $password=$_POST['student_pass'];
  

    $query = "SELECT id, tname, tphase, tphone, temail, tpassword from tutorinfo WHERE temail = '$useremail';";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);

    if ($useremail == $row['temail'] && $password== $row['tpassword']) {
        session_start();
        $_SESSION['id']=$row['id'];
        $_SESSION['full_name']=$row['tname'];
        $_SESSION['temail']=$useremail;
        $_SESSION['tphase']=$row['tphase'];
        $_SESSION['tphone']=$row['tphone'];

	header("location:tutordashboard.php");            
    exit();	# code...
    }

else{
	echo "<script type='text/javascript'>alert('Tutor User email or password are incorrect');</script>";
}


}
    $usertype="";
if ($_POST["usertype"]=="Student") {
	
    
    $useremail=$_POST['student_email'];
    $password=$_POST['student_pass'];
    //$encryptedPassword = md5($password);

    $query="SELECT * from student_info WHERE Semail='$useremail';";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);

    if ($useremail == $row['Semail'] && $password== $row['spass']) {
           
        session_start();
        $_SESSION['id']=$row['id'];
        $_SESSION['full_name']=$row['Sname'];

        $_SESSION['Semail']=$useremail;
                
        $_SESSION['sphase']=$row['phase'];
        $_SESSION['sphone']=$row['phone'];
        $_SESSION['gender']=$row['gender'];

	header("location:stdashboard.php");
    exit();	# code...
    }

else{
	echo "<script type='text/javascript'>alert('Student User email or password are incorrect');</script>";
}



}

}
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Tutors</title>
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/mainCss.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/signuplogin.css">
</head>
<body class="loginbody">

      <header> Welcome To Online Tutor </header>
	<div class="logindiv">
        <div>
		<img class="imglogin" src="assets/images/loginpng.png">
		</div>

		<h1> Sign In </h1><hr>

		<form method="POST" action="login.php">
			
	<select class="classtype" name="usertype" required="required">
		<option value=""> Select Type</option>
		<option> Student</option>
		<option>Tutor</option>
	</select>
	
			<input type="text" name="student_email" value="" placeholder=" User Email" />
			<input type="password" name="student_pass" value="" placeholder="Passward" /> <br><br>

			
            <button type="submit" class="signin" name="login"> Sign In </button><br><br>

            <a class="lastalink" href="signupas.php"> Sign Up </a>

            <p class="lastp">Don't have an account yet?</p>
            


	</form>
</div>


</body>
</html>

	
		
       