<html>
<head>

	<title>Online Tutor</title>
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/mainCss.css">

  <script src="assets/js/jquery.min.js"></script>
</head>
<body>

	<?php include 'config/menus.php';?>

<div class="img1" style="display:none;">
	
    <h2 class="h22"style="font-family:georgia,serif;font-style:italic;" > Are you  <span style= "font-family:georgia,serif;font-style:italic;color:#3E2F2F;"> Looking for an</span></h2>
	<h1 class="h12" style="font-family:georgia,serif;font-style:italic;">Online Tutor?</h1>
	<h1 class="h11" style="font-family:georgia,serif;font-style:italic;">If. Yes</h1>
 
	<h1 class="h111"style="font-family:georgia,serif;font-style:italic;color:#3E2F2F;" >You are at Right Place.</h1>
	

<form method="get" action="mainsearch1.php?" class="formm">


	<input type="text" name="search" placeholder=" What do you want to study? e.g Biology" required>
	<select class="selectclass">
		<option value="select Phase" selected disabled="disabled"> Select Phase</option> 
		<option> Phase I</option>
		<option>Phase II</option> 
		<option> Phase III</option>
		<option> Phase IV</option> 
		<option> Phase V </option>
		<option> Phase VI </option>
		<option> Phase VII</option>
	</select>
	
	
	<button id="button1" type="submit" name=" SearchTutor" value="Search" class="skew-button"> Search</button>
</form>



</div>

<div class="div2">
	<ul>
     
     <li> <a href="tutorsignup.php"> <button class="btn3 skew-button">Register As Tutor </button></a></li>

	 <li> <a href="signup.php"> <button class="btn1 skew-button"> Register As Student</button></a></li>
	
	
	</ul>
</div>


<div class="div3" class="img2-div" style=""> 
	 <h1 style="font-family:cooper black;font-style:italic;font-size: 40px; color: black">Find Tutor for any Subject</h1>
	 <img src="assets/images/a1.png"  class="img2"  style="border-radius:10px !important; display:none;" />
</div>

<div class="div4">
	<h1 style="font-family:cooper black;font-style:italic;font-size: 40px; color: black ;"> Some of our top Tutors </h1>
	<marquee behavior="scroll" direction="left" scrolldelay="120" id="mymarquee" style="color: red ">
		<img src="assets/images/b1.png" style="border-radius:10px 10px 0px 0px;" width="1096" /> 
    <br />
		<img src="assets/images/b2.png"  style="border-radius:0px 0px 10px 10px;" width="1096" />
	</marquee>
	
</div>

<div class="div5">
	<h1 style="font-family:cooper black;font-style:italic;font-size: 35px; color: black"> Our Users Love Us</h1><br>
	<h2 style="font-family:cooper black;font-style:italic;font-size: 25px; color: black">Take a look below to learn what our users are saying about us:</h2><hr>
	<!DOCTYPE html>



<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: grey;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}


/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: black;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: black;}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides">
     <p>"I always disliked calling an agent, waiting for the tutor to come, then decide if he/she is suitable for my child or not. Thanks to OnlineTutor. 
        It has solved my long time problem. Now, whenever I or anybody in my relatives need a tutor, I simply use Online Tutor, select from thousands of 
        tutors and schedule a trial with the one click."
       </p><br>
       <br>
  <p class="author">-  Mrs. Subhan, Phase Vii, Hayatabad Peshawar</p>
</div>

<div class="mySlides">
  <p>"I wasted my daughter's one month in search of a good tutor but I could not find anybody. But it took me just 1 day to find the most suitable and
      experienced person when I came to Online Tutor. Process is easy. Tutors are experienced and support team is really responsive and ready to help you 
      all the time."</p><br><br>
  <p class="author">- Mrs. Ikram, Phase iii, Hayatabad Peshawar</p>
</div>

<div class="mySlides">
  <p>"Online Tutor helped me find a best Biology tutor in just a single day for my son. Excellent service. Affordable tutor. 
  	No hidden charges. Thanks online Tutor"</p><br><br>
    <br>
  <p class="author">- Mr. Ikram Ali Phase vii Hayatabad Peshawar</p>
</div>



<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



</div>
	

	<?php  include 'config/footer.php';?>
 

 <script>
 $(document).ready(function() {
    $(".img1").slideDown(3000);
    $(".img2").fadeIn(4000);
 
  });
 

 </script>
</body>
</html>
