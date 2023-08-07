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
  <title>Tutor Dashboard</title>
  <link rel="stylesheet" type="text/css" href="assets/css/tutordashboard.css" />

  <style>
  #course_table tr th {
    white-space: nowrap;
  }

    #course_table tr td {
    white-space: nowrap;
    padding: 5px;
  }

  </style>
</head>

<body>
   <div>
<div style="width:100%; min-height:400px; overflow:hidden;">
    
    <?php include 'config/tutor_dashboard/header.php';?>
<br />


  
           <div id="inner_hundred">

            <div id="left_side_menu">
 <?php include 'config/tutor_dashboard/left_menu.php';?>
            </div>
            
            <div id="content_area" style="background-color:lightgrey; width:900px !important; margin-left:50px !important; overflow-x:scroll;">
               <center><h1>Delete courses</h1></center>
               <hr />
               <div id="free_profile_updation" style="width:100%; font-weight:bold; margin:0 auto; border-radius:10px; 
               padding-left:10px; padding-top:20px; margin-top:20px; margin-bottom:20px;
               ">
<table class="student_table" align="center" border="5" id="course_table">
    <tr>
      <td colspan="12" bgcolor="darkseagreen" align="center"><h1> My Courses </h1></td>
    </tr>
    
     <tr>
      <th bgcolor="white">S.No</th>
      <th bgcolor="white"> Course Name</th>
      <th bgcolor="white">Tutor Name</th>
      <th bgcolor="white"> Tutor Email </th>
      <th bgcolor="white"> Phase</th>
      <th bgcolor="white">Phone #</th> 
      <th bgcolor="white">Course Duration From</th>
      <th bgcolor="white">Course Duration To </th>
      <th bgcolor="white">Class Start at</th>
      <th bgcolor="white">Class finish at </th>
      <!--<th bgcolor="white">Edit</th>-->
      <th bgcolor="white">Delete</th>
            
      </tr>

      <?php
     

     /*this block of code will view the data inserted into subject_info in mySQL*/

     
     

      $selectquery= "SELECT * FROM subject_info";
      $run=mysqli_query($conn,$selectquery);

      while($row=mysqli_fetch_array($run)){

                $Cname=$row['CourseNmae'];
                $myid=$row['id'];
                $Tname=$row['TutorName'];
        $Temail=$row['TutorEmailAddress'];
        $Tphase=$row['TutorPhase'];
                $Tphone=$row['TutorPhoneNo'];
                $cfrom=$row['coursefrom'];
                $cto=$row['courseto'];
                $classstart=$row['ClassStartat'];
                $classfinish=$row['Classfinishat'];
      ?>

      <tr>
        <td bgcolor="white"><?php echo $myid?></td>
        <td bgcolor="white"><?php echo $Tname?></td>
        <td bgcolor="white"><?php echo $Cname?></td>
        <td bgcolor="white"><?php echo $Temail?></td>
        <td bgcolor="white"><?php echo $Tphase?></td>
                <td bgcolor="white"><?php echo $Tphone?></td>
                <td bgcolor="white"><?php echo $cfrom?></td>
                <td bgcolor="white"><?php echo $cto?></td>
                <td bgcolor="white"><?php echo $classstart?></td>
                <td bgcolor="white"><?php echo $classfinish?></td>
               <!-- <td bgcolor="white"><a href="subjectupdate.php?sedit=<?php echo $myid; ?>">Edit</a></td>-->
                <td bgcolor="white"><a href="subjectdelete.php?sdel=<?php echo $myid; ?>">Delete</a></td>
                
        
      </tr>

    <?php } 
    ?>

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
</div>


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