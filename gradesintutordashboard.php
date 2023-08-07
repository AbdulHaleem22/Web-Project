<?php 
 include("dbcon_1.php");
  session_start();

if(!$_SESSION['temail']){
    header("location:login.php?adminerror=You are not a tutor");
  }
?>
<!DOCTYPE html>
<html>
<head>
 <style>
  #delete-marks-and-grade tr th {
    white-space: nowrap;
  }

    #delete-marks-and-grade tr td {
    white-space: nowrap;
    padding: 5px;
  }

  </style>

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
            
            <div id="content_area" style="background-color:lightgrey;width:850px !important; margin-left:70px !important; overflow-x:scroll; ; ">
               <center><h1> Marks and Grades</h1></center>
               <hr />
               <div id="free_profile_updation" style="width:100%; font-weight:bold; margin:0 auto; border-radius:10px; 
               padding-left:10px; padding-top:20px; margin-top:20px; margin-bottom:20px;
               ">
<table class="student_table" width="800" align="center" border="5" id="delete marks and grade" style="margin-left:15px;">
    <tr>
      <td colspan="8" bgcolor="darkseagreen" align="center"><h1> Marks and Grades </h1></td>
    </tr>
    
     <tr>
      <th bgcolor="white">Serial No</th>
      <th bgcolor="white"> Course Name</th>
      <th bgcolor="white">Tutor Name</th>
      <th bgcolor="white"> Obtained Marks</th>
      <th bgcolor="white"> Total Marks </th>
      <th bgcolor="white"> Grades</th>
      <th bgcolor="white"> Tutor Commentss</th>
      <!--<th bgcolor="white">Edit</th>-->
            <th bgcolor="white"> Delete </th>
       
            </tr>

      <?php
     


     /* Marks details*/
      

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
        <!--<td bgcolor="white"><a href="gradesediting.php?gedit=<?php echo $myid; ?>">Edit</a></td>-->
                <td bgcolor="white"><a href="gradedelete.php?gdel=<?php echo $myid; ?>">Delete</a></td>
                
              
             </tr>

    <?php } ?>

  </table>
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

  <?php
  $message = "";

  if(isset($_GET['msg'])) {
    $message = $_GET['msg'];
  }
?>

<script>
var message = '<?php echo $message;?>';

if(message !== "") {
  alert(message);
}
</script>
</body>
</html>