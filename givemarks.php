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
               <center><h1>Marks and Grades</h1></center>
               <hr />
 <div id="free_profile_updation" style="width:60%; margin:0 auto; border:4px solid black; border-radius:10px; padding-left:30px; padding-top:20px; margin-top:20px; margin-bottom:20px; font-weight:bold;">
<form method="post" action="gradeinfo.php">
  <table>
      
      <tr>
                    <td>
                      <label >Course Name</label><br />
                      <input type="Text" name="CourseName"  required="required" style="border-style:solid" >
                    </td>
                  </tr>

                   <tr>
                    <td>
                      <label>Tutor Name</label><br />
                      <input type="Text" name="TutorName" required="required" style="border-style:solid"  ><br>
                    </td>
                  </tr>
                   <tr>
                    <td>
                       <label class="obtainedmarks"> Obtained Marks </label ><br>
       <input type="Text" name="ObtainMarks" required="required" style="border-style:solid"  ><br>
                      
                    </td>
                  </tr>
                   <tr>
                    <td>
                     <label> Total Marks </label><br>
             <input type="Text" name="TotalMarks" required="required" style="border-style:solid" ><br>
  
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <label class="duedate"> Grade </label><br>
             <input type="Text" name="Grades" required="required" style="border-style:solid" ><br>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <label class="duedate"> Tutor Comments </label><br>
                           
                              <textarea  name="Comments" rows="5" cols="62" required="required"></textarea>
                    </td>
                  </tr>
                 <tr>
                    <td>
                      <input type="submit" class="submit" name="submit" id="submit">   
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