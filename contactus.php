<?php 

include("dbcon.php");

if(isset($_POST['submit'])){


$name=$_POST['name'];
$email=$_POST['email'];
$type=$_POST['type'];
$reason=$_POST['reason'];
$message=$_POST['message'];


$sqlquery="INSERT INTO contactus(name,email,type,reason,message) values('$name','$email','$type','$reason','$message')";

mysqli_query($conn,$sqlquery);
header("location: main.php");

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Tutors</title>
 <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/mainCss.css">

</head>
<body>

<?php include 'config/menus.php';?>

<div id="contact_full_box">
	<div class="contact-main-box">
	<center><h1>Contact US</h1></center>
	<form method="post" action="contactus.php">
		<table id="contact-send-form">
		<tr>
			<td><label> Full Name <span style="color: red">*</span></label></td>
			<td><input class="contact-text-box" type="text" name="name" size="30"></td>
		</tr>

		<tr>
			<td><label> Email ID <span style="color: red">*</span></label></td>
			<td><input class="contact-text-box" type="text" name="email" size="30"></td>
		</tr>

<tr>
			<td><label>Select Type <span style="color: red">*</span></label></td>
			<td><select class="contact-select" name="type">
		<option selected disabled="disabled"> Select Type</option> 
		<option> Tutor</option>
		<option> Parent</option> 
		<option> Student</option>
		</select>
	</td>
		</tr>

		<tr>
			<td> <label>Select Reason<span style="color: red"> *</span></label></td>
			<td><select class="contact-select" name="reason" onchange="checkComboValue();">
		<option  selected disabled="disabled"> Select Reason</option> 
		<option> Tutor Inquiry</option>
		<option>Tutor Complaint</option> 
		<option> Student Inquiry</option>
		<option> Student Complaint</option> 
		<option> Tution Center Inquiry</option>
		<option> Tution Center Complaint </option>
		<option> Registration Problem </option>
		<option> Other</option>
	   </select></td>
		</tr>

		<tr>
			<td><label>Message <span style="color: red">*</span></label></td>
			<td><textarea class="contact-textarea" rows="10" cols="38" name="message"></textarea></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td><button class="contact-send-button" type="submit" 
				name="submit" onclick="alert('Thank you for contacting us. We will respond you as soon as possible');">Send</button></td>
		</tr>
	</table>
		
	</form>
</div>
</div>
	

<?php include 'config/footer.php';?>

<script>
	function checkComboValue() {
		//alert('hello');
	}

</script>
</body>
</html>