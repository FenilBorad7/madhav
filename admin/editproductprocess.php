<?php
require 'common/dbconnect.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:login.php");
}?>
<?php 
require 'common/dbconnect.php';
var_dump($_POST);
var_dump($_FILES);

	$id=$_POST['id'];
	$titel=$_POST['pname'];
  $description=$_POST['editordata'];
    $hdescription=$_POST['hdescription'];
	$doi=date("d-m-y H:i:s");
$qry= "Select * from blog where id=$id;";
$rs1=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs1);
$img2=$row['image'];

   if ($_FILES['fileToUpload1']['name']=="") {
   	$productpic1=$img2;
   }
   else {
   	require 'finalupload1.php';
   	$productpic1=$_FILES['fileToUpload1']['name'];
   }

	 $qry3="UPDATE blog SET title='".$titel."',h_description='".$hdescription."',description='".$description."',image='".$productpic1."' WHERE id=$id";
	$rs3=mysqli_query($conn,$qry3);
	echo $qry3;
    if($rs3){
 	
 	header("location:viewblog.php?msg=Edit Success");
  exit();
        }
    else{
 	echo "fail";

        }
      
   

?>