
<?php
require 'common/dbconnect.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:login.php");
}?><?php
	require 'common/dbconnect.php';
	
	//var_dump($_FILES);
	//var_dump($_POST);
	
	
	
	$titel=$_POST['name'];
	$description=$_POST['editordata'];
	$hdescription=$_POST['hdescription'];
	

	$isactive=1;
	$doi= date('d-m-y');
// 	echo $doi; exit();
	// if ($_FILES['fileToUpload']['name']=="") {
	// 	$productpic="";
	// }
	// else {
	// 	require 'finalupload.php';
	// 	$productpic=$_FILES['fileToUpload']['name'];

	// }

	if ($_FILES['fileToUpload1']['name']=="") {
		$productpic1="";
	}
	else {
		require 'finalupload1.php';
		$productpic1=$_FILES['fileToUpload1']['name'];
	}
	// if ($_FILES['fileToUpload2']['name']=="") {
	// 	$productpic2="";
	// }
	// else {
	// 	require 'finalupload2.php';
	// 	$productpic2=$_FILES['fileToUpload2']['name'];

	// }
	

	// if ($_FILES['fileToUpload3']['name']=="") {
	// 	$productpic3="";
	// }
	// else {
	// 	require 'finalupload3.php';
	// 	$productpic3=$_FILES['fileToUpload3']['name'];

	// }
	

	
	$qry5="INSERT into blog(title,image,h_description,description,is_active,doi) VALUES('".$titel."','".$productpic1."','".$hdescription."','".$description."',$isactive,'".$doi."')";

	$rs5=mysqli_query($conn,$qry5);
	echo $qry5;
	if ($rs5) {
		echo "Insert sucess";
		header("location:addblog.php?msg=Insert success");
		exit();
		//header("location:.php");
	}
	else{
		echo "Insert Error";
	}
?>