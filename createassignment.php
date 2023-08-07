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
<div style="width:100%; min-height:400px; overflow:hidden;">
    
    <?php include 'config/tutor_dashboard/header.php';?>
<br />


  
           <div id="inner_hundred">

            <div id="left_side_menu">
 <?php include 'config/tutor_dashboard/left_menu.php';?>
            </div>
            
            <div id="content_area" style="background-color:lightgrey;">
               <center><h1> Create Assignment </h1></center>
               <hr />

               <div id="free_profile_updation" style="width:60%; font-weight:bold; margin:0 auto; border:4px solid black; border-radius:10px; padding-left:30px; padding-top:20px; margin-top:20px; margin-bottom:20px;">
               <form method="post" action="assignmentsinsertion.php">
                <table>
                  <tr>
                    <td>
                      <label>Course Name</label><br />
                      <input type="Text" name="cname" required="required" style="border-style:solid" >
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <label>Tutor Name</label><br />
                      <input type="Text" name="tname" required="required" style="border-style:solid" >
                    </td>
                  </tr>
			  
                
                  <tr>
                    <td>
                      <label>Assignment Topic</label><br />
                      <textarea rows="5" cols="62" name="topic" required="required" style="border-style:solid" ></textarea>
                    </td>
                  </tr>

	
            
                  <tr>
                    <td>
                      <label>Due Date</label><br />
                      <input type="date" name="duedate" required="required" style="border-style:solid" >
                    </td>
                  </tr>


                 
                 <tr>
                    <td>
                      <label>Description </label><br />
                      <textarea rows="5" cols="62" name="description" required="required" style="border-style:solid" ></textarea>
                    </td>
                  </tr>



                  <tr>
                    <td>
                      <label>&nbsp;</label><br />
                      <input type="submit" id="submit" name="submit">
                    </td>
                  </tr>
                </table>

	</form>
</div>		



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
</body>
</html>