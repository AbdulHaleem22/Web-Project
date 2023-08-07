


<?php
            mysql_connect("localhost","root","");
            mysql_select_db("musarat");



            $gediting=$_GET['gedit'];

            $edit_query= "SELECT * from gradesandmarks where id = '$gediting'";

            $run =mysql_query($edit_query);

            while($row=mysql_fetch_array($run)) {
                
                $myid=$row['id'];
                $cname=$row['CourseName'];
                $tname=$row['TutorName'];
                $om=$row['ObtainMarks'];
                $tm=$row['TotalMarks'];
                $grade=$row['Grades'];
                $cmnt=$row['Comments'];
        }
?>


<?php
            mysql_connect("localhost","root","");
            mysql_select_db("musarat");



               if(isset($_POST['update'])){

                $edit_grade=$_GET['gedited'];
                
                $cname=$_POST['CourseName'];
                $tname=$_POST['TutorName'];
                $om=$_POST['ObtainMarks'];
                $tm=$_POST['TotalMarks'];
                $grade=$_POST['Grades'];
                $cmnt=$_POST['Comments'];


                 

            $edit_query= "UPDATE gradesandmarks set CourseName='$cname', TutorName='$tname', ObtainMarks='$om', TotalMarks='$tm',
            Grades='$grade', Comments='$cmnt' where id = '$edit_grade')";

            if(mysql_query($edit_query)){

            header("location: gradesintutordashboard.php");
            }
                
}
?>

<!DOCTYPE html>

<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="createassignment.css">
</head>
    <style> 
    body{
        background-color: lightgrey;
    }
    .assignment{

    height: 570px;
    width: 300px;
    border: 5px solid black;
    margin-left: 30em;
    margin-top: -17em;

}


.assignment h1{

    margin-left: 0.6em;

}

.assignment input{

    
    margin: 1.3em;


}

.assignment label{

    
    margin: 1.3em;
}
textarea{
    margin-left: 1.3em;
}

.gradingsystem{

    height: 255px;
    width: 400px;
    border: 5px solid black;
    margin-top: 1em;

}
h1{
    color: indianred;
}
</style>

<body>

<h1> Grading System </h1>

 <div class="gradingsystem">

<img src="images/grading.jpg">


 </div>

    <div class="assignment">

        <h1> Marks and Grades </h1><hr>

        
       

        <form action="gradesediting.php?gedited=<?php echo $myid;?>" method="post">
            
            
            <input type="Text"  placeholder="Course Name" name="CourseName" value="<?php echo $cname;?>"> 
            <input type="Text"  placeholder="Tutor Name"  name="TutorName" value="<?php echo $tname;?>"><br>

             <label class="obtainedmarks"> Obtained Marks </label><br>
             <input type="Text" name="ObtainMarks" placeholder="Obtained Marks" value="<?php echo $om;?>" ><br>

             <label class="duedate"> Total Marks </label><br>
             <input type="Text" name="TotalMarks" placeholder="Total Marks"  value="<?php echo $tm;?>"> <br>

              <label class="duedate"> Grades </label><br>
             <input type="Text" name="Grades" placeholder="Grades" value="<?php echo $grade;?>"><br>
            
    
                              <label class="duedate"> Tutor Comments </label><br>
                           
                               <textarea rows="5" cols="25" name ="Comments"> <?php echo $cmnt;?> </textarea>
 
   

                                     <input type="submit" class="submit" name="update">

    </form>

        
    </div>
</body>
</html>