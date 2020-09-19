<?php
require 'common/dbconnect.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:login.php");
}?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from admin.perfectuswebinsights.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 06:27:50 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Madhav Industry</title>
	<meta name="keywords" content="Admin" />
	<meta name="description" content="Madhav Admin ">
	<meta name="author" content="perfectusinc.com">
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
    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/css/dashboard/dashboard1.css">
</head>

<body class="sidebar-mini fixed skin-blue">
    <div class="wrapper">
		<!-- Header Section Starts -->
		<header class="main-header">
			 <!--Logo -->
			<a href="index.php" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<!--<span class="logo-mini"><b>M</b>I</span>-->
				 <!--logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Madhav</b>Industry</span>
			</a>
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<!--<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">-->
				<!--	<span class="sr-only">Toggle navigation</span>-->
				<!--</a>-->
<a href="logoutprocess.php" type="button" style="margin: 10px; background-color: #79b2cc; color: white; border-radius: 10px;" class="btn btn-default">Logout</a>
			</nav>
		</header>
		<!-- Header Section Ends -->
		
		<!-- Sidebar Section Starts -->
		<!--<aside class="main-sidebar">-->
		<!--	<div class="nano">-->
		<!--		<div class="nano-content">-->
		<!--			<ul class="sidebar-menu" data-widget="tree">-->
		<!--				<li class="header">MAIN NAVIGATION</li>-->
		<!--				<li class="active treeview">-->
		<!--					<a href="index.php">-->
		<!--						<i class="fa fa-dashboard"></i> <span>Dashboard</span>-->
		<!--						<span class="pull-right-container">-->
		<!--							<i class="fa fa-angle-left pull-right"></i>-->
		<!--						</span>-->
		<!--					</a>-->
		<!--				</li>-->
		<!--				<li class="treeview">-->
		<!--					<a href="#">-->
		<!--						<i class="fa fa-edit"></i> <span>Manage Blog</span>-->
		<!--						<span class="pull-right-container">-->
		<!--							<i class="fa fa-angle-left pull-right"></i>-->
		<!--						</span>-->
		<!--					</a>-->
		<!--					<ul class="treeview-menu">-->
		<!--						<li><a href="addblog.php"><i class="fa fa-circle-o"></i>Add Blog</a></li>-->
		<!--						<li><a href="viewblog.php"><i class="fa fa-circle-o"></i>View Blog</a></li>-->
		<!--					</ul>-->
		<!--				</li>-->
	
		<!--			</ul>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</aside>        -->
		<!-- Sidebar Section Ends -->
		
		<!-- Page Content Starts -->
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Dashboard
					<small></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">Dashboard</a></li>
				</ol>
			</section>
			<!-- Counters Section Starts -->
			<div class="dashboard1">
				<div class="row">
					<div class="col-lg-6" height="200">
						<div class="counter-box">
					<a href="addblog.php">		<div class="shadow bg1">	
								<div class="text-white text-center">
									<i class="fa fa-plus fa-2x"></i>
									<div class="mt-2">Add Blogs</div>
									<!--<h3 class="mt-1 count">10000</h3>-->
								</div>
							</div></a>
						</div>
						</div>
				
					<!--<div class="col-xl-3 col-lg-6 col-12">-->
					<!--	<div class="counter-box">-->
					<!--		<div class="shadow bg2">-->
					<!--			<div class="text-center text-white">-->
					<!--				<i class="fa fa-money fa-2x"></i>-->
					<!--				<div class="mt-2">Total Earning</div>-->
					<!--				<div class="money"><h3>$</h3><h3 class="mt-1 count">75800</h3></div>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					<div class="col-lg-6" height="200">
						<div class="counter-box">
						<a href="viewblog.php">		<div class="shadow bg3">
								<div class="text-center text-white">
									<i class="fa fa-thumbs-o-up fa-2x"></i>
								<div class="mt-2">View Blogs</div>
									<!--<h3 class="mt-1 count">5000</h3>-->
								</div>
							</div></a>
						</div>
					</div>
					<!--<div class="col-xl-3 col-lg-6 col-12">-->
					<!--	<div class="counter-box">-->
					<!--		<div class="shadow bg4">-->
					<!--			<div class="text-center text-white">-->
					<!--				<i class="fa fa-opencart fa-2x"></i>-->
					<!--				<div class="mt-2">Order Placed</div>-->
					<!--				<h3 class="mt-1 count">7000</h3>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
				</div>
			</div>
		</div>
		<!-- Page Content Ends -->
		
		<!-- Back to Top Starts -->
		<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
		<!-- Back to Top Ends -->
		
	</div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="assets/js/jquery/slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/js/jquery/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/jquery/jquery.min.js"></script>
	<!-- Page JS -->
	<script src="assets/js/charts/Chart.bundle.min.js"></script>
	<script src="assets/js/charts/bar/grouped-bar-chart.js"></script>
	<script src="assets/js/charts/pie/doughnut-chart-multiline.js"></script>
	<script src="assets/js/dashboard/dashboard1.js"></script>
	<!-- Theme JS -->
	<script src="assets/js/nanoscroller/nanoscroller.js"></script>
	<script src="assets/js/custom/theme.js"></script>
</body>


<!-- Mirrored from admin.perfectuswebinsights.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 06:28:07 GMT -->
</html>