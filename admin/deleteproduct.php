<?php
require 'common/dbconnect.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:login.php");
}?>
<?php 
	require 'common/dbconnect.php';
	var_dump($_GET);
	$sid=$_GET['id'];
	$qry="UPDATE blog SET is_active=2 WHERE id=$sid";
	$rs=mysqli_query($conn,$qry);
	if ($rs) {
		header("location:viewblog.php");
	}
	else{
		echo "fail";
	}


 ?>