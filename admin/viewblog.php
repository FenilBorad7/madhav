<?php
require 'common/dbconnect.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:login.php");
}?>
<?php  
  require 'common/dbconnect.php';
  $qry="SELECT * FROM blog  WHERE is_active!=2";
  $rs=mysqli_query($conn,$qry);

?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from admin.perfectuswebinsights.com/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 06:28:27 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>View Blogs</title>
	<meta name="keywords" content="Admin" />
	<meta name="description" content="Madhav Admin ">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <!-- Custom CSS Starts -->
    <link rel="stylesheet" href="assets/css/skin/all-skins.css">
    <link rel="stylesheet" href="assets/css/general/style.css">
    <link rel="stylesheet" href="assets/css/sidebar/side-nav.css">
	<link rel="stylesheet" href="assets/css/fonts/fonts-style.css">
	<link rel="stylesheet" href="assets/css/nanoscroller/nanoscroller.css">
</head>

<body class="sidebar-mini fixed skin-blue">
    <div class="wrapper">
		<!-- Header Section Starts -->
		<header class="main-header">
			<!-- Logo -->
			<a href="index.php" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>M</b>I</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Madhav</b>Industry</span>
			</a>
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

			</nav>
		</header>
		<!-- Header Section Ends -->
        
		<!-- Sidebar Section Starts -->
				<aside class="main-sidebar">
			<div class="nano">
				<div class="nano-content">
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">MAIN NAVIGATION</li>
						<li class="active treeview">
							<a href="index.php">
								<i class="fa fa-dashboard"></i> <span>Dashboard</span>
								<!--<span class="pull-right-container">-->
								<!--	<i class="fa fa-angle-left pull-right"></i>-->
								<!--</span>-->
							</a>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-edit"></i> <span>Manage Blog</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="addblog.php"><i class="fa fa-circle-o"></i>Add Blog</a></li>
								<li><a href="viewblog.php"><i class="fa fa-circle-o"></i>View Blog</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</aside>      
		<!-- Sidebar Section Ends -->
		
		<!-- Page Content Starts-->
		
						<div class="content-wrapper">
			<section class="content-header">
				<h1>
					View Blog
					<small></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">View Blog</a></li>
				</ol>
			</section>
			<div class="row">
				<!-- Basic Table Section Starts -->
				<div class="col-lg-12 col-sm-12">
					<div class="cardbg">
						<h6 class="title-inner text-uppercase">View Blog</h6>
						<p style="color: green;"><?php  
if (isset($_GET['msg'])) {
    $msg=$_GET['msg'];
    echo "$msg";
}
else
{
    echo "";
}

?></p>
						<div class="table-responsive">
							<table class="table m-0">
								<thead>
									<tr>
										<th>Id</th>
                                        <th>Blog Name</th>
                                        <th>Edit</th>
                                        <th>Active/Block</th>
                                        <th>Delete</th>
									</tr>
								</thead>
								<tbody>
                                                 <?php 
                                                   if (mysqli_num_rows($rs)>0) {
                                                       while ($row=mysqli_fetch_assoc($rs)) {
                                                        $ia=$row['is_active'];
                             
                                                           ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>

                                                    <td><?php echo $row['title']; ?></td>
                                                    <td><a href="editblog.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                                                    <td><a href="productstatus.php?id=<?php echo $row['id']; ?>">
                                                        <?php  
                                                            if ($ia==1) {
                                                                ?>Block
                                                                <?php 
                                                                    }
                                                                    else{
                                                                 ?>Active
                                                                 <?php
                                                            }
                                                        ?>
                                                    </a></td>
                                                    <td><a href="deleteproduct.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                                                </tr>
                                                <?php  
                                                       }
                                                   }
                                                   else{
                                                       echo "0 row selected";
                                                   }
                                                ?>
                                            </tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- Basic Table Section Ends -->
				<!-- Striped Rows Section Starts -->
				
				<!-- Striped Rows Section Ends -->
			</div>
			
		</div>
		<!-- Page Content Ends -->
		
		<!-- Back to Top Starts -->
		<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
		<!-- Back to Top Ends -->
		
	</div>
						<script>
						// Example starter JavaScript for disabling form submissions if there are invalid fields
						(function() {
						  'use strict';
						  window.addEventListener('load', function() {
							// Fetch all the forms we want to apply custom Bootstrap validation styles to
							var forms = document.getElementsByClassName('needs-validation');
							// Loop over them and prevent submission
							var validation = Array.prototype.filter.call(forms, function(form) {
							  form.addEventListener('submit', function(event) {
								if (form.checkValidity() === false) {
								  event.preventDefault();
								  event.stopPropagation();
								}
								form.classList.add('was-validated');
							  }, false);
							});
						  }, false);
						})();
						</script>
					</div>
				</div>
			</div>			
		</div>
		<!-- Page Content Ends-->
		
		<!-- Back to Top Starts -->
		<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
		<!-- Back to Top Ends -->
		
		<!-- Footer Section Starts -->
	
		<!-- Footer Section Ends -->
		
	</div>
	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="assets/js/jquery/slim.min.js"></script>
	<!-- Popper.JS -->
	<script src="assets/js/jquery/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/jquery/jquery.min.js"></script>
	<!-- Theme JS -->
	<script src="assets/js/nanoscroller/nanoscroller.js"></script>
	<script src="assets/js/custom/theme.js"></script>
</body>


<!-- Mirrored from admin.perfectuswebinsights.com/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 06:28:27 GMT -->
</html>