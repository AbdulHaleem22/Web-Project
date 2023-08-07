<?php
include('../../dbcon.php');

$data = $_GET['data'];

$data = '%'.$data.'%';


$query = "SELECT * FROM `tutorinfo` WHERE `tname` LIKE('$data')
OR `temail` LIKE('$data') ORDER BY id asc;";


$result = mysqli_query($conn, $query);

$searchedData = "";
$i = 0;

while($row = mysqli_fetch_assoc($result)) {
	$i++;
	$searchedData = $searchedData."<tr>";

	$searchedData = $searchedData."<td>".$i."</td>";
	$searchedData = $searchedData."<td>".$row['tname']."</td>";
	$searchedData = $searchedData."<td>".$row['temail']."</td>";
	$searchedData = $searchedData."<td>".$row['tpassword']."</td>";
	$searchedData = $searchedData."<td>".$row['tgender']."</td>";
	$searchedData = $searchedData."<td>".$row['tphase']."</td>";
	$searchedData = $searchedData."<td>".$row['tyob']."</td>";

$searchedData = $searchedData."<td>".$row['tphone']."</td>";
$searchedData = $searchedData."<td>".$row['subject1']."</td>";
$searchedData = $searchedData."<td>".$row['subject2']."</td>";
$searchedData = $searchedData."<td>".$row['subject3']."</td>";
$searchedData = $searchedData."<td>".$row['subject4']."</td>";
$searchedData = $searchedData."<td>".$row['subject5']."</td>";

	$searchedData = $searchedData."</tr>";	
}

echo $searchedData;
?>