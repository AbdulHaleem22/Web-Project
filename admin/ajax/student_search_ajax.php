<?php
include('../../dbcon.php');

$data = $_GET['data'];

$data = '%'.$data.'%';

$query = "SELECT * FROM `student_info` WHERE `Sname` LIKE('$data')
OR `Semail` LIKE('$data') ORDER BY id asc;";


$result = mysqli_query($conn, $query);

$searchedData = "";
$i = 0;

while($row = mysqli_fetch_assoc($result)) {
	$i++;
	$searchedData = $searchedData."<tr>";

	$searchedData = $searchedData."<td>".$i."</td>";
	$searchedData = $searchedData."<td>".$row['Sname']."</td>";
	$searchedData = $searchedData."<td>".$row['Semail']."</td>";
	$searchedData = $searchedData."<td>".$row['gender']."</td>";
	$searchedData = $searchedData."<td>".$row['phase']."</td>";
	$searchedData = $searchedData."<td>".$row['phone']."</td>";
	$searchedData = $searchedData."<td>".$row['spass']."</td>";

	$searchedData = $searchedData."</tr>";	
}

echo $searchedData;
?>