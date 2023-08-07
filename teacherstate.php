<?php
include('dbcon.php');
include('headeradmin.php');

$id=$_POST['teacherid'];

$qw="SELECT * FROM teacher WHERE tid='$id'";
$rw=mysqli_query($con,$qw);
$result=mysqli_fetch_assoc($rw);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>


<link rel="stylesheet" type="text/css" href="../tutor.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="../jquery.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Lobster|Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">

</head>
<body style=" background:#1C2833">
  
    <div  id="header"  class="navbar navbar-inverse navbar-fixed-top container_fluid " >
    <div class="container-fluid">
    <div class="navbar-header">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
        <a href="#" class="navbar-brand" id="logo"><i class="glyphicon glyphicon-lamp"></i>TutorConsultation</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul id="pagelinks"  class="nav navbar-nav " >
     <li><a id="link" href="dashboard.php">Dashboard</a></li>
    <li><a id="link" href="watchlist.php">Watchlist</a></li>
    <li><a id="link" href="message.php">Messages</a></li>
    <li><a id="link" href="profile.php">Myprofile</a></li>

    </ul>

    <ul id="pagelinks"  class="nav navbar-nav navbar-right " >
    <li><a id="link" href="logout.php">Logout</a></li>

    </ul>

</div>
    </div>
</div>


<div class="container" style="padding: 0px;border-radius: .4rem;width: 70%;background: white;margin-top: 80PX;">
	
    <div   class="navbar container_fluid " style="background:#85929E;text-align: center;" >
    

         <h3 style="font-family: 'Patua One', cursive;color: white">General information</h3>
     </div>

      
     	<div class="row">
          
          <div class="col-sm-6" style="text-align: center" ><img style="margin-top: 10px;" src="<?php echo $result['profileimg'] ?>" width="340px" height="340px;"></div>
          
          <div class="col-sm-6" style="border:1px solid white;width: 300px;margin-left: 20px;"><h2 style="font-family: 'Patua One', cursive;"><?php echo $result['firstname'];?>&nbsp;<?php echo $result['lastname'] ?></h2>
          <br/>
          
          <i class="glyphicon glyphicon-home"></i>
          <label style="margin-left: 7px;">Location:</label>
          <br/>
          <h5 style="margin-left: 24px; "><?php echo $result['location']  ?><h5/>
           
           <br/>
          <i class="glyphicon glyphicon-pencil"></i>
          <label style="margin-left: 7px;">Speciality:</label>
          <br/>
          <h5 style="margin-left: 24px; "><?php echo $result['speciality']  ?><h5/>
           
           <br/>
         <i class="glyphicon glyphicon-heart-empty"></i>
          <label style="margin-left: 7px;">Gender:</label>
          <br/>
          <h5 style="margin-left: 24px; "><?php echo $result['gender']  ?><h5/>
            

           <br/>

         <i class="glyphicon glyphicon-heart-empty"></i>
          <label style="margin-left: 7px;">Email:</label>
          <br/>
          <h5 style="margin-left: 24px; "><?php echo $result['email']  ?><h5/>
          
        <form method="GET" action="contact.php">
        	<input class="hidden" type="" name="teacherid"  value="<?php echo $result['tid'] ?>">
        	<br/>
            <input type="submit" name="" value="Contact"  style="width: 90%;" class="btn btn-default btn-lg">
        </form>
          </div>

        </div>
      

        <hr/>
     <span style="margin-left: 8%;">  
<i class="glyphicon glyphicon-file" style="font-size: 40px;"></i>
       <label style="font-family: 'Patua One', cursive; font-size: 30px;">Experience</label>
</span>

<div style="width: 80%;margin-left: 85px;" >
	<br/>
	<p><?php echo $result['experience']  ?></p>


</div>


<br/>
<hr/>

        <embed src="<?php echo $result['cv']  ?>" width="100.1%" height="1300px" />



</div>



</body>
</html>