<?php
require 'common/dbconnect.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:login.php");
}?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from admin.perfectuswebinsights.com/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 06:28:27 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Add Blog</title>
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
	   <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

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
					Add Blog
					<small></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
					<li><a href="addblog.php">Add Blog</a></li>
				</ol>
			</section>
			<div class="row">
				<div class="col-md-12 col-lg-12">
					
					<div class="cardbg">
						<form class="needs-validation" action="addproductprocess.php" novalidate enctype="multipart/form-data" method="post">
							<div class="form-row">
									<div class="col-md-12 mb-3">
									<label for="validationCustom01">Blog name:</label>
									<input type="text" class="form-control" id="validationCustom01" name="name" placeholder="blog name" value="" required>
									<div class="valid-feedback">
										Looks good!
									</div>
								</div>
										<div class="col-md-12 mb-3">
									<label for="validationCustom01">Head description:</label>
								 <textarea type="textarea" class="form-control" id="validationCustom01" name="hdescription" placeholder="blog description" value="" required></textarea>
									
									<div class="valid-feedback" required> 
										Looks good!
									</div>
								</div>
								 
								<div class="col-md-12 mb-3">
									<label for="validationCustom01">Blog description:</label>
									<!-- <textarea type="textarea" class="form-control" id="validationCustom01" name="description" placeholder="blog description" value="" required></textarea> -->
									 <textarea class="form-control" id="summernote" name="editordata"></textarea> 
									       <!-- <textarea name="movie_desc" id="movie_desc" class="form-control"></textarea>

                      <script>CKEDITOR.replace( 'movie_desc' );</script> -->
									<div class="valid-feedback" required> 
										Looks good!
									</div>
								</div>
								 
    <script>
      $('#summernote').summernote({
        placeholder: 'description',
        tabsize: 2,
        height: 200,
        toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],

     ['style', ['style']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['fontName',['fontNames']],
['fontname', ['fontname']],
    ['color', ['color']],
    ['image',['picture']],
    ['link',['link']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ],
  fontNames: [
    'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
    'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande',
    'Sacramento'
        ],
 popover: {
  image: [
    ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
    ['float', ['floatLeft', 'floatRight', 'floatNone']],
    ['remove', ['removeMedia']]
  ],
  link: [
    ['link', ['linkDialogShow', 'unlink']]
  ],
  air: [
    ['color', ['color']],
    ['font', ['bold', 'underline', 'clear']],
    ['para', ['ul', 'paragraph']],
    ['table', ['table']],
    ['insert', ['link', 'picture']]
  ],

}


      });

    </script>
								<div class="col-md-12 mb-3">
										<label>Blog Image:<span>*</span></label>
										<!-- </br><input type="file" name="fileToUpload1"></br> -->
										<input type="file" name="fileToUpload1" required></br>
										<!-- <input type="file" name="fileToUpload2"></br>
										<input type="file" name="fileToUpload3"> -->
									</div>
								
							</div>
							<button class="btn btn-primary" type="submit">Submit</button>
							<?php  
if (isset($_GET['msg'])) {
    $msg=$_GET['msg'];
    echo "$msg";
}
else
{
    echo "";
}

?>
						</form>
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
	 <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script> 


<!-- Mirrored from admin.perfectuswebinsights.com/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 06:28:27 GMT -->
</html>