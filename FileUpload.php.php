<?php
if(isset($_FILES['cvfile']) && !empty($_FILES['cvfile']['name'])) { 
	$file=$_FILES['cvfile'];
	$fileName=$_FILES['cvfile']['name'];
	$fileTmpName=$_FILES['cvfile']['tmp_name'];
	$fileSize=$_FILES['cvfile']['size'];
	$fileError=$_FILES['cvfile']['error'];
	$fileType=$_FILES['cvfile']['type'];
	$fileExt=explode('.', $fileName);
	$fileActualExt=strtolower(end($fileExt));
	$allowed = array('jpg', 'jpeg', 'png');
	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize <500000) {
				$fileNameNew = uniqid('', true).'.'.$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				
				if (move_uploaded_file($fileTmpName, $fileDestination)) {
					echo "Uploaded";
				}
				else
				{
					echo "Not uploaded";
				}
				}
			else
			{
				echo ("<script LANGUAGE='JavaScript'>
				alert('Your file is too big!')
				window.location.href='index.php';
			</script>");
			}
		}
		else
		{
			echo ("<script LANGUAGE='JavaScript'>
				alert('You have some errors uploading the file!')
				window.location.href='index.php';
			</script>");
		}
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
				alert('You cannot upload files of this type! Only JPG, JPEG and PNG are allowed')
				window.location.href='index.php';
			</script>");
	}
}
else
{
	$fileDestination = 'uploads/DefaultImage.png';
}
?>