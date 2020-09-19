<?php
require 'common/dbconnect.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:login.php");
}?>
<?php
//var_dump($_POST);
//var_dump($_FILES);
$target_dir="upload/images";
$target_file=$target_dir.basename($_FILES['fileToUpload2']['name']);
$uploadok=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
IF(ISSET($_POST["SUBMIT"]))
{
	$check=getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
	if($check!==false)
	{
		echo "File is an image - " . $check["mime"] . " . ";
		$uploadok=1;;
			}
	else{
		echo "File is not an image.";
		$uploadok=0;
	}
}
if(file_exists($target_file))
{
	echo "Sorry, file already exist.";
	$uploadok=0;
}
if($_FILES['fileToUpload2']['size']>5000000)
{
	echo "Sorry, your file is too large";
	$uploadok=0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
{
	echo "Sorry only JPG,JPEG,PNG & GIF files are allowed.";
	$uploadok=0;
}
if($uploadok == 0){
	echo "Sorry, your file was not uploaded."; 
}
else{
if(move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file))
{
	echo "The file" . basename($_FILES["fileToUpload2"]["name"]). "has been uploaded.";
}
else
{
	echo "Sorry, there was an error uploading your file.";
}
}
?>