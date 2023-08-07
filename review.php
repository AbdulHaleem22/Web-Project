<?php

include("dbcon.php");


$ureview=$_POST['review'];
echo $ureview;

$myquery = "INSERT INTO revies(review) values ('$ureview')";
 mysqli_query($conn,$myquery);

header("location: index.html");
?>