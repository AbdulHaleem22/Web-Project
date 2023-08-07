<?php
 include('dbcon.php');

$r=$_GET['view'];


$e="SELECT * FROM tutorinfo WHERE id='$r'";
$d=mysqli_query($conn,$e);
$row=mysqli_fetch_assoc($d);



$qw="SELECT * FROM tutorinfo WHERE id='$r'";
$rw=mysqli_query($conn,$qw);
$result=mysqli_fetch_assoc($rw);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Tutors</title>


<link rel="stylesheet" type="text/css" href="assets/css/tutor.css">
<link rel="stylesheet" type="text/css" href="assets/css/Style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Lobster|Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">

</head>
<body style=" background:#1C2833">
  
    

<div class="container" style="padding: 0px;border-radius: .4rem;width: 90%;background: white;margin-top: 80PX;">
	
    <div   class="navbar container_fluid " style="background:#85929E;text-align: center;" >
    

         <h3 style="font-family: 'Patua One', cursive;color: white">General information</h3>
     </div>

      
     	<div class="row">
          
          <div class="col-sm-6" style="text-align: center" ><img style="margin-top: 10px;" src="<?php echo $result['avatar1'] ?>" width="340px" height="340px;"></div>
          
          <div class="col-sm-6" style="border:1px solid white;width: 300px;margin-left: 20px;"><h2 style="font-family: 'Patua One', cursive;"><?php echo $result['tname'];?></h2>
          <br/>
          
          <i class="glyphicon glyphicon-home"></i>
          <label style="margin-left: 7px;">Location:</label>
          <br/>
          <h5 style="margin-left: 24px; "><?php echo $result['tphase']  ?><h5/>
           
           <br/>
          <i class="glyphicon glyphicon-pencil"></i>
          <label style="margin-left: 7px;">Speciality:</label>
          <br/>
          <h5 style="margin-left: 24px; "> <?php echo $result['subject1']; echo " "; echo $result['subject2']; echo " "; echo $result['subject3']; echo " "; echo $result['subject4']; echo " "; echo $result['subject5'];  ?><h5/>
           
           <br/>
         <i class="glyphicon glyphicon-heart-empty"></i>
          <label style="margin-left: 7px;">Gender:</label>
          <br/>
          <h5 style="margin-left: 24px; "><?php echo $result['tgender']  ?><h5/>
            

           <br/>

         <i class="glyphicon glyphicon-heart-empty"></i>
          <label style="margin-left: 7px;">Email:</label>
          <br/>
          <h5 style="margin-left: 24px; "><?php echo $result['temail']  ?><h5/>
          
        
           <a href="mailto:<?php echo $result['temail'];   ?>"><input type="button" value="Send Learning Request" style="height:40px;width:180px; border-radius:1rem;barder:solid 1px black; overflow:none outline:none"></a>
          </div>

        </div>
      

        <hr/>
     <span style="margin-left: 8%;">  
<i class="glyphicon glyphicon-file" style="font-size: 40px;"></i>
       <label style="font-family: 'Patua One', cursive; font-size: 30px;">Experience</label>
</span>

<div style="width: 80%;margin-left: 85px;" >
	<br/>
	<p><?php echo $result['aboutme']  ?></p>


</div>


<br/>
<hr/>

        <embed src="<?php echo $result['avatar2']  ?>" width="100.1%" height="1300px" />



</div>
<div style="margin-left: 15%; background: lightgray; border-radius: 10px; width: 70%">
    <span><h4 style="margin-left:1em; padding-top:1em;">Rate This Tutor out of 5:</h4></span>
  <div class="rating" style="">

  <a href="rating.php?id=<?php echo $r ?>&rating=1">☆</a> 
  <a href="rating.php?id=<?php echo $r ?>&rating=2">☆</a> 
  <a href="rating.php?id=<?php echo $r ?>&rating=3">☆</a> 
  <a href="rating.php?id=<?php echo $r ?>&rating=4">☆</a> 
  <a href="rating.php?id=<?php echo $r ?>&rating=5">☆</a> 
  <br>
  <?php
  $sql1 = "SELECT AVG(Rating) AS AverageRating FROM comment WHERE Teacher_Id='$r'";
  $runSql1 = mysqli_query($conn, $sql1);
  $result = mysqli_fetch_assoc($runSql1);
  ?>
  <h4 style="padding-bottom:1em;">Average Rating till now: <span style="color: purple"><?php echo " ". $result['AverageRating']; ?>/5</span></h4>
</div>
</div>
<div style=" background-color: white; width: 70%; margin-left:15%; margin-top: 25px;">
    <form action="Comment.php?id=<?php echo $r ?>" method="post" style="margin-left: 10%; margin-top: 20px;">
  <textarea style="width: 67%; height: 70px; background-color: light-grey; margin-top: 20px" name="commentText" placeholder="Comment" required></textarea>
  <button type="submit" name="comment" class=" btn btn-primary" style="margin-top:5em; margin-left:-41em">Comment</button>
    </form>
    <!-- Showing all comments -->
    <?php 
    $sql = "SELECT * FROM comment WHERE Teacher_Id =  '$r'";
    $runQuery = mysqli_query($conn, $sql);
    ?>
    <br>
    <table style="margin-left: 10%">
      <h2 style="color: green; margin-left: 10%">All Comments</h2>
      <?php while ($row = mysqli_fetch_assoc($runQuery)) { ?>
      <tr style="border: 1px solid black; border-radius: 10px; border-color: green; background-color: #bff442">
        <td>
          <strong><?php echo $row['Username']; ?></strong>
          <p><?php echo $row['Time']; ?></p>
        </td>
        
        <td style="width: 80%; padding-left:2em; padding-bottom:2em;"><?php echo $row['Comment_Text']; ?></td>
      </tr>
      <?php } ?>
    </table>
    <br><br><br>
</div>



</body>
</html>




