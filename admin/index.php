<?php
   
     session_start();
  
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>

	<style>
		
		.table{

			width: 350px;
			height: 400px;
			margin-left: 29em;
			margin-top: 4em;
			background-color: brown;
			border: solid 5px lightslategrey;

		}

		.centerdiv h1{

	text-align: center;
}
.centerdiv h5{

	text-align: center;
}
	
	</style>
</head>
<body style="background-image: url(../assets/images/lg.jpg);">

	<form method="post" action="index.php">

	<table class="table">
		
		<tr>
			<td align="center" colspan="6" bgcolor="pink"> <h2>Admin Login</h2></td>
		</tr>

		

		<tr>
			<td align="right"> Admin Name:</td>
			<td><input type="text" name="admin_name"></td>
		</tr>

		<tr>
			<td align="right"> Password:</td>
			<td><input type="password" name="admin_pass"></td>
		</tr>

		<tr>
			<style>
				.input1{
					margin-left: 1em;
					width: 20em;
					height: 3em;
					padding-left: 1em;
					border-radius: 20px;
				}
			</style>
			<td align="center" colspan="6" bgcolor="pink"> <input style="background-color: indianred" type="submit" name="login" value="Login" class="input1"></td>
		</tr>

	</table>

	</form>

</body>
</html>

<?php

   mysql_connect("localhost","root","");
   mysql_select_db("project");


if(isset($_POST['login'])){

    
	$admin=  $_SESSION['admin_name']=$_POST['admin_name'];
	$pass=$_POST['admin_pass'];
	$encryptedPassword = md5($pass);


	$query="SELECT * from adminlogin where user_name = '$admin' AND user_password= '$encryptedPassword'";


	$run=mysql_query($query);

	if(mysql_num_rows($run)>0) {

		echo "<script>window.open('adminpanel.php?loggedin=lggedin successfully...!','_self')</script>";
	}

	else {

		echo "<script>alert('Incorrect Username or Password!')</script>";
	}


}

?>