
<?php 
//var_dump($_POST);
//require 'common/dbconnect.php';
session_start();
//var_dump($_GET);
$uname=$_POST['uname'];
$pass=$_POST['pass'];
//echo "$qry";
// 	header("location:index.php");
if ($uname=="Admin" && $pass=="madhav@123admin") {
	
	
	$_SESSION['admin']="valid";
	header("location:index.php");
	exit();
}
else{
	
	
	header("location:login.php?msg=please enter a valid admin email and password!");
	exit();
}
?>