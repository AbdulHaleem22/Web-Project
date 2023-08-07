
<?php

  session_start();

  if(!$_SESSION['admin_name']){

  	header("location:index.php?adminerror=You are not admin");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="../assets/css/adminpanel.css" />
	<style>
		.student_table{
			margin-top: -1em;
			padding: 0;
        }



          .view li{
          	list-style-type: none;
          	margin-left: -2em;
          }
          .view a{
          	text-decoration: none;
          }
          .view li:hover{
          	cursor: pointer;
          	background-color: grey;
          	width: 7em;
          }

          .content-box th {
          	 white-space: nowrap;
          	 padding: 2px 5px !important;
          }


.content-box td {
          	 white-space: nowrap;
          	 padding: 2px 5px !important;
          }



	.maindiv{
              
              
              margin-top: -0.5px;
              background-image:url(images/bimg.jpg);
	}

	.bgimg{
		margin-left: 10em;
		margin-top: -3.5em;
	}
	
	.button{
		margin-top: 1em;
	}


	.search_box_admin {
			min-height: 100px;
			overflow-y: hidden;
			width: 980px;
			border:2px solid #000;
			overflow-x:scroll;
	}



	</style>
</head>
<body style="background-image: url(../assets/images/mm.jpg);">
 
 
    <?php include 'config/header.php';?>

	
<form class="button">
    
    <button style="background-color: mediumseagreen"><a href="adminpanel.php">Back HomePage</button></a>
</form>

<br><br>
	
	<div class="admin-main-box">
			<div class="left-menu-box">
				<?php include 'config/menus.php';?>
			</div>



			<div class="content-box">
					

	<div class="maindiv">

<div class="centerdiv">
<div style="background-color:#e4e4e4;">
	<center><h1 class="searchh1" style="color: #751818"><span style="color: rgb(72, 133, 237);">Se</span><span style="color: rgb(219, 50, 54);">ar</span><span style="color: rgb(244, 194, 13);">ch</span><span style="color: rgb(60, 186, 84);">&nbsp;&nbsp;Us</span><span style="color: rgb(219, 50, 54);">ers</span>
	</h1><br></center>
	<form method="get" action="searchuser.php?" style="white-space: nowrap;">
		<center><h3>NOTE: Please Search by Email or by Name</h3><hr><br></center>

		<center>
		<label><strong>Search Student: </strong></label>
		<input type="text" name="searchstudent" id="search_student" size="30" height="5" placeholder="Search">
		<input type="button" name="submit" id="btn_student_search" value="Search" style="background-color: teal"><br><br>
		
		<div id="stduents_data" class="search_box_admin">
			<table border="5">
				<thead>
					<tr>
						<th>S.No</th>
						<th>Student Name</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Phase</th>
						<th>Phone</th>
						<th>Password</th>
					</tr>
				</thead>

				<tbody id="stduents_data_after_search">

				</tbody>
			</table>
		</div>
		<hr />

		</center>
		
		

		<center>
		<label><b>Search Tutor:</b></label>
		<input type="text" name="searchtutor" id="search_tutor" size="30" placeholder="Search ">
		<input type="button" name="submit2" id="btn_tutor_search" value="Search" style="background-color: deepskyblue">
		<br /><br />

		<div id="teachers_data" class="search_box_admin">
			<table border="5">
				<thead>
					<tr>
						<th>S.No</th>
						<th>Teacher Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Gender</th>
						<th>Phase</th>
						<th>YOB</th>
						<th>Phone</th>
						<th>Subject1</th>
						<th>Subject2</th>
						<th>Subject3</th>
						<th>Subject4</th>
						<th>Subject5</th>
					</tr>
				</thead>

				<tbody id="teachers_data_after_search">

				</tbody>
			</table>
		</div>

	</center>

	<hr />
	</form>

	<br>
	<br>
	<br>
	<br>
</div>
</div>



	</div>

	

	
			</div>
	</div>


<?php include 'config/footer.php';?>

<script src = "../assets/js/jquery.min.js"></script>

<script>

	$(document).ready(function() {

		$("#btn_student_search").click(function() {
			var data = $("#search_student").val().trim();

			if(data !== '') {
				$.ajax({
            		type: "GET",
            		url: "ajax/student_search_ajax.php",
            		data: {
                		"data":data
            		},
            		cache:false,
            		async:false,
            
            		success: function(receivedData) {
            			
            			$("#stduents_data_after_search").html(receivedData);
            		},
            		error: function(jqXHR, textStatus, errorThrown){
            			alert(errorThrown);
            		}

        		});

			} else {
				alert('Please provide proper data.');
			}
		});




		$("#btn_tutor_search").click(function() {
			var data = $("#search_tutor").val().trim();

			if(data !== '') {
				$.ajax({
            		type: "GET",
            		url: "ajax/tutor_search_ajax.php",
            		data: {
                		"data":data
            		},
            		cache:false,
            		async:false,
            
            		success: function(receivedData) {
            			
            			$("#teachers_data_after_search").html(receivedData);
            		},
            		error: function(jqXHR, textStatus, errorThrown){
            			alert(errorThrown);
            		}

        		});

			} else {
				alert('Please provide proper data');
			}
		});
	});
</script>

</body>
</html>