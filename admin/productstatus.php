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
	$qry="SELECT * FROM blog WHERE id=$sid";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);
	$ia=$row['is_active'];
	if($ia==1){
		$qry1="UPDATE blog SET is_active=0 WHERE id=$sid";
	}
	else {
		$qry1="UPDATE blog SET is_active=1 WHERE id=$sid";

	}
	$rs1=mysqli_query($conn,$qry1);
	if($rs){
		header("location:viewblog.php");
	}	
	else{
		echo "fail";
	}
 ?>