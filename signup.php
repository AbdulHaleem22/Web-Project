<!DOCTYPE html>
<html class="sig">
<head>
	<title>Online Tutor</title>
	<link rel="stylesheet" type="text/css" href="assets/css/signuplogin.css" />
	<script src="assets/js/jquery.min.js"></script>
</head>
<body class="studentbody">
<header > Welcome To Online Tutor </header>



	<div class="studentsignup">

		<h1> Register As Student </h1><hr>

		<form method="post" action="studentinfo.php">
			<input type="text" name="name" placeholder="Full Name" >
			<input type="Text" name="email" placeholder="Email Address" required="required" id="student_email" />
			<input class="passward1" type="password" name="password1" id="password1" placeholder="passward" required="required" />
	<input class="passward2" type="password" name="password2" id="password2" placeholder="Confirm passward" required="required" />
	<select name="gender"  required="required">
		<option value="">Gender</option>
		<option>Male</option>
		<option>Female</option>
	</select>

	<select name="phase" required="required">
		<option value=""> Select Phase</option>
		<option> Phase I </option>
		<option>Phase II</option>
		<option>Phase III</option>
		<option>Phase IV</option>
		<option>Phase V</option>
		<option>Phase VI</option>
		<option>Phase VII</option>
	</select>

	
	
	<input class="nmb" type="tel" name="phone" placeholder=" Phone Number i.e 0300-22AA99C" required="required" />
	<p class="validnumber" >Please Provide valid and active number that you are using yourself.</p><hr>

     
	<button type= "submit" name="signup" class="sendbutton" id="submit"> Sign Up </button>

	<p class="lastmessage">Already have an account ? <a href="login_1.php"> Login </a></p>

		</form>
		
	</div>
</body>
</html>
<script>
	$(document).ready(function () {
		
		$("#password2").blur(function() {
			var password1 = $("#password1").val();
			var password2 = $("#password2").val();

			password1 = password1.trim();
			password2 = password2.trim();
			
			$("#password1").val(password1);
			$("#password2").val(password2);

			if(password1 !== password2) {
				alert("Password and confirm password are not equal");
				$("#submit").attr("disabled", "disabled");
			} else {
				$("#submit").removeAttr("disabled");
			}

		});


		$("#student_email").blur(function () {
			var email = $("#student_email").val().trim();
			$("#student_email").val(email);

			if(email !== "") {

				  $.ajax({
            		type: "GET",
            		url: "ajax/student_email_ajax.php",
            		data: {
                		"student_email":email
            		},
            		cache:false,
            		async:false,
            
            		success: function(data) {
            			data = data * 1;
            			
            			if(data >= 1) {
            				$("#submit").attr("disabled", "disabled");
            				alert('The provide email has already been used by another student. Please choose a different email');
            			} else {
            				$("#submit").removeAttr("disabled");
            			}
            		},
            		error: function(jqXHR, textStatus, errorThrown){
            			alert(errorThrown);
            		}

        		}); 
			}

		});

});
</script>