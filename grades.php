<?php
include("dbcon_1.php");
session_start();

if(!$_SESSION['Semail']){

    header("location:login.php?adminerror=You are not a student");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title> Online Tutor </title>
	  <link rel="stylesheet" type="text/css" href="assets/css/stdashboard.css">
	<style>
		#course_table tr th {
    white-space: nowrap;
    padding: 5px 10px !important;
  }

    #course_table tr td {
    white-space: nowrap;
    padding: 5px 10px !important;

  }


          .grades {
            height: 255px;
            width: 1000px;
            margin-bottom: 20px;
            float:left;
            margin-top:20px !important;
          }

	</style>
</head>
<body>
   

<div style="width:100%; min-height:400px; overflow:hidden;">
    
    <?php include 'config/student_dashboard/header.php';?>
    <br />


    <div id="inner_hundred">

            <div id="left_side_menu">
                <?php include 'config/student_dashboard/left_menu.php';?>
            </div>

         <div id="content_area" style="background-color:lightgrey; width:1000px !important; margin-left:50px !important;">
               <center><h1>Marks & Grade</h1></center>
               <hr />
               

               <div id="free_profile_updation" style="width:100%; font-weight:bold; margin:0 auto; border-radius:10px; 
               padding-left:50px; padding-top:20px; margin-top:20px; margin-bottom:20px; min-height:200px; overflow:hidden;">
               
					<table border="5" id="course_table">
    <!--
    <tr>
    
    <td colspan="7" bgcolor="darkseagreen" align="center"><h1> Marks and Grades </h1></td>
    
  </tr>
    -->
     <tr>
      <th bgcolor="white">Serial No</th>
      <th bgcolor="white"> Course Name</th>
      <th bgcolor="white">Tutor Name</th>
      <th bgcolor="white"> Obtained Marks</th>
      <th bgcolor="white"> Total Marks </th>
      <th bgcolor="white"> Grades</th>
      <th bgcolor="white"> Tutor Comments</th>
       
            </tr>

      <?php
     

     /*this block of code will view the data inserted into student_info in mySQL*/

     /* student details*/
     

      $selectquery= "select * from gradesandmarks";
      $run=mysqli_query($conn,$selectquery);

      while($row=mysqli_fetch_array($run)){
                
                $myid=$row['id'];
        $Cname=$row['CourseName'];
        $Tname=$row['TutorName'];
        $om=$row['ObtainMarks'];
        $tm=$row['TotalMarks'];
        $grades=$row['Grades'];
        $cmnts=$row['Comments'];
                
       
      ?>

      <tr>
        <td bgcolor="white"><?php echo $myid?> </td>
        <td bgcolor="white"><?php echo $Cname?></td>
        <td bgcolor="white"><?php echo $Tname?></td>
        <td bgcolor="white"><?php echo $om?></td>
        <td bgcolor="white"> <?php echo $tm?> </td>
        <td bgcolor="white"><?php echo $grades?></td>
        <td bgcolor="white"><?php echo $cmnts?></td>
                
              
             </tr>

    <?php } ?>

  </table>

			</div> 
            
            <hr />
            <center><h1>Grading System</h1></center>
               <hr />
               <div class="grades">
                  <div style="height:255px; width:400px; margin:0 auto;" >
                      <img src="assets/images/grading.jpg" />
                  </div>
                  
                </div>


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

