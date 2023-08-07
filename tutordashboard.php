<?php
session_start();
if(!$_SESSION['temail']){
    header("location:login.php?adminerror=You are not a tutor");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tutor Dashboard</title>
	<link rel="stylesheet" type="text/css" href="assets/css/tutordashboard.css" />
</head>
<body>
	 <div style="width:100%; min-height:400px; overflow:hidden; background-image:url(assets/images/tpic.jpg);">
	 	
    <?php include 'config/tutor_dashboard/header.php';?>
<br />
       
           <div id="inner_hundred">

            <div id="left_side_menu">
 <?php include 'config/tutor_dashboard/left_menu.php';?>
            </div>

 <div id="content_area">

            </div>
            

            <div id="right_side_menu">
  <?php include 'config/tutor_dashboard/right_menu.php';?>
            </div>

    </div>  
  </div>


 <br />
 <br />
 <br />
 <br />
  <?php include 'config/footer.php';?>

<?php
$message = "";
  if(isset($_GET['msg'])) {
    $message = $_GET['msg'];
  }
?>

<script>
  var successMessage = '<?php echo $message;?>';

  if(successMessage !== '') {
    alert(successMessage);
  }
</script>
</body>
</html> 
