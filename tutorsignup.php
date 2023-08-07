<!DOCTYPE html>
<html class="sig">
<head>
	<title>Tutor Signup</title>
    <link rel="stylesheet" type="text/css" href="assets/css/signuplogin.css" /> 
    <script src="assets/js/jquery.min.js"></script>
</head>
<body class="tutorbody">

<header > Welcome To Online Tutor </header>

	<div class="tutorsignup">

		<h1> Register As Tutor </h1><hr>

	<form method="post" action="tutorinfo.php">
			<input type="Text" name="tname" placeholder="Full Name"
			 required="required">
			<input type="Text" ="temidail" name="temail" 
			placeholder="Email Address" required="required" value="">
			<input class="password1" type="password" id="password1" name="tpassword" placeholder="passward"  required="required">
	<input class="password2" type="password" name="password2" id="password2" 
	placeholder=" Confirm passward"  required="required">
	<select name="tgender"  required="required">
		<option value=""> Gender</option>
		<option>Male</option>
		<option>Female</option>
	</select>

	<select name="tphase"  required="required">
		<option value=""> Select Phase</option>
		<option>Phase I</option>
		<option>Phase II</option>
		<option>Phase III</option>
		<option>Phase IV</option>
		<option>Phase V</option>
		<option>Phase VI</option>
		<option>Phase VII</option>
	</select>
	<select name="yob"  required="required">
		<option required="required" selected disabled="Year Of Birth" =""> Year Of Birth </option>
		<option>1980</option>
				<option>1981</option>		
				<option>1982</option>		
				<option>1983</option>		
				<option>1984</option>		
				<option>1985</option>		
				<option>1986</option>		
				<option>1987</option>		
				<option>1988</option>		
				<option>1989</option>		
				<option>1990</option>		
				<option>1991</option>		
				<option>1992</option>		
				<option>1993</option>		
				<option>1994</option>		
				<option>1995</option>		
				<option>1996</option>		
				<option>1997</option>		
				<option>1998</option>		
				<option>1999</option>		
				<option>2000</option>
				<option>2001</option>
				<option>2002</option>
				<option>2003</option>
				<option>2004</option>
				<option>2005</option>
				<option>2006</option>
				<option>2007</option>
				<option>2008</option>
				<option>2009</option>
				<option>2010</option>
				<option>2011</option>
				<option>2012</option>
				<option>2013</option>
				<option>2014</option>
				<option>2015</option>
				<option>2016</option>
				<option>2017</option>		
	</select>

	
	
	<input class="nmb" type="tel" name="tphone" value placeholder=" Phone Number i.e 0300-22AA99C"  required="required">
	<p class="validnumber111">Please provide only valid and active number that you are using yourself. All new tuition requests will be sent to this number only.</p><hr>
	

	
	<h5 class="whteach"><big> What do you want to teach ?</big></h5>
       

   <div class="subjectdiv">
    <input type="text" name="subject1" placeholder="1.write subject name here" style="margin-left:10px; width:14em; height:1em;"  required="required">
    <input type="text" name="subject2" placeholder="2.write subject name here" style="margin-left:10px; width:14em; height:1em;">
    <input type="text" name="subject3" placeholder="3.write subject name here" style="margin-left:10px; width:14em; height:1em;">
    <input type="text" name="subject4" placeholder="4.write subject name here" style="margin-left:10px; width:14em; height:1em;">
    <input type="text" name="subject5" placeholder="5.write subject name here" style="margin-left:10px; width:14em; height:1em;">
   </div>
      
     <br>
 
    <div class="terms">
     
     </div>
	<button class="sendbutton" id="submit" type="submit"> Sign Up </button>

	<p class="lastmessagetutor">Already have an account ? <a href="login.php"> Login </a></p>

		</form>


	</div>

	<footer> Teachers who love teaching, teach children to love learning.</footer>


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




		$("#temail").blur(function () {
			var email = $("#temail").val().trim();
			$("#temail").val(email);

			if(email !== "") {

				  $.ajax({
            		type: "GET",
            		url: "ajax/tutor_email_ajax.php",
            		data: {
                		"teacher_email":email
            		},
            		cache:false,
            		async:false,
            
            		success: function( data) {
            			data = data * 1;

            			if(data >= 1) {
            				$("#submit").attr("disabled", "disabled");
            				alert('The provide email has already been used by another user.');
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
</body>
</html>