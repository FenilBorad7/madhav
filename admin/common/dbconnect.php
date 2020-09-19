<?php  
	$servername = "localhost";
		$username = "root";
	$password = "";
	$dbname = "seller";


	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn)
	{
		die("connection failed :" . mysqli_connect_error());
	}
	//echo "server connected sucessfully";

	$db = mysqli_select_db($conn,$dbname);

	if ($db) {
		//echo "detabase sellected";
	}
	else
	{
		//echo "database error";
	}
?>