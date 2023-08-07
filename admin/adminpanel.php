
<?php

  session_start();

  if(!$_SESSION['admin_name']){

  	header("location:index.php?adminerror=You are not admin");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Admin Panel
	</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/adminpanel.css" />
</head>
<body  style="background-image: url(../assets/images/bg.jpg); background-repeat: no-repeat;">

	<?php include 'config/header.php';?>

	
<?php include 'config/menus.php';?>

<?php include 'config/footer.php';?>
</body>
</html>