
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
    #course_table tr th {
    white-space: nowrap;
    padding: 5px !important;
  }

    #course_table tr td {
    white-space: nowrap;
    padding: 5px !important;
  }






    </style>
</head>
<body style="background-image: url(../assets/images/mm.jpg);">
 
 
    <?php include 'config/header.php';?>

    
<form class="button">
    
    <button style="background-color: mediumseagreen"><a href="adminpanel.php">Back HomePage</button></a>
</form>


    
    <div class="admin-main-box">
            <div class="left-menu-box">
                <?php include 'config/menus.php';?>
            </div>



            <div class="content-box">
                    

    <div class="maindiv">




<?php
            mysql_connect("localhost","root","");
            mysql_select_db("project");

            

            $edit_student=$_GET['edits'];

            $edit_student_querys= "SELECT * from student_info where id = '$edit_student'";

            $run =mysql_query($edit_student_querys);

            while($row=mysql_fetch_array($run)) {
                
              $myid=$row['id'];
                $name=$row['Sname'];
                $email=$row['Semail'];
                $gender=$row['gender'];
                $phase=$row['phase'];
                $phone=$row['phone'];
                $pass=$row['spass'];
        }
?>

<?php
            mysql_connect("localhost","root","");
            mysql_select_db("project");



               if(isset($_POST['update'])){

                $edit_student1=$_GET['editst'];

                $myid=$_POST['id'];
                $name=$_POST['Sname'];
                $email=$_POST['Semail'];
                $gender=$_POST['gender'];
                $phase=$_POST['phase'];
                $phone=$_POST['phone'];
                $pass=$_POST['spass'];


                 

            $edit_student_query= "UPDATE student_info set Sname='$name', Semail='$email', gender='$gender', phase='$phase',
            phone='$phone', spass ='$pass' where id = '$edit_student1' ";

            if(mysql_query($edit_student_query)){

            header("location: viewuser.php");
            }
                
}
?>


<html>
<head>
  <title>Update Records</title>
</head>
<body style="background-image: url(images/mm.jpg);">


  
 <form action="edit.php?editst=<?php echo $myid; ?>" method="post">
    
        <table width="500" border="5" height="500" align="center">
    <tr>
      <td colspan="5" bgcolor="brown" align="center"><h1> Update Student's Record </h1></td>
    </tr>

    <tr> 
        <td>Serial No</td>
      <td><input type="text" name="id"  readonly="readonly" value="<?php echo $myid;?>" /></td>
    </tr>
    <tr>
      <td>Student Name</td>
      <td><input type="text" name="Sname" value="<?php echo $name;?>"></td>
    </tr>

    <tr>
      <td>Email Address</td>
      <td><input type="text" name="Semail" value="<?php echo $email;?>" readonly="readonly"></td>
    </tr>

    <tr>
        <td>Gender</td>
        <td><input type="text" name="gender" value="<?php echo $gender;?>"></td>
    </tr>

    <td>Phase</td>
        <td><input type="text" name="phase" value="<?php echo $phase;?>"></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
    </tr>

    <tr>
        <td>Password</td>
        <td><input type="text" name="spass" value="<?php echo $pass;?>"></td>
    </tr>

    <tr>
      <td colspan="5" bgcolor="lightgreen" align="center"><input style="background-color: tomato" type="submit" name="update" value="Update Now"></td>
      
    </tr>
     </table>

  </form><br><br>         

</body>
</html>



    </div>

    

    
            </div>
    </div>


<?php include 'config/footer.php';?>

</body>
</html>








