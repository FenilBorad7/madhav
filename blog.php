<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Blog - Madhav Industry</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

      
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Madhav Industry<img src="#" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
                       <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                        <li class="nav-item active"><a class="nav-link" href="blog.php">Blog</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Blog</h2>
                    <p>Read the news</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog Main Area =================-->
        <section class="blog_main_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog_main_inner">
                             <?php

 require 'admin/common/dbconnect.php';
  $qry="SELECT * FROM blog  WHERE is_active=1";
  $rs=mysqli_query($conn,$qry);
  
 if (mysqli_num_rows($rs)>0) {
                                                       while ($row=mysqli_fetch_assoc($rs)) {?>
                            <div class="blog_main_item">
                                <div class="blog_img">
                                    <!-- <img class="img-fluid" src="img/blog/blog-1.jpg" alt=""> -->
                                    <img src="admin/upload/images<?php echo $row['image'];?>" style="width: 100%; height: 300px;" alt="abc" class="img-fluid">
                                    <div class="blog_date">
                                        <h4><i class="fa fa-calendar"></i>  </h4>
                                        <h5><?php echo $row['doi'];?></h5>
                                    </div>
                                </div>
                                <div class="blog_text">
                                    <a href="#"><h4><?php echo $row['title'];?></h4></a>
                                    <!-- <div class="blog_author">
                                        <a href="#">By Lore Papp-Dinea</a>
                                        <a href="#">Design</a>
                                    </div> -->
                                    <p> <?php echo $row['h_description']; ?></p>
                                   <!--  <a class="more_btn" href="#">Read More</a> -->
                                    <a class="more_btn" href="blog_detail.php?blog=<?php echo $row['id']; ?>">Read More</a>
                                </div>
                            </div>
                                <?php  
                                                       }
                                                   }
                                                   else{
                                                       echo "No blog entry";
                                                   }
                                                ?>
                       
                        </div>
                    </div>
               
                </div>
               
            </div>
        </section>
        <!--================End Blog Main Area =================-->
        
        <!--================Footer Area =================-->
              <footer class="footr_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row footer_widget_inner">
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_about_widget">
                                <img src="#" alt="">
                                <h3>Madhav Industry</h3>
                                <p>Madhav Industry is an Indian company, which offers you professional designing and Development. We helps you to bring your business online. We specialize in offering high quality web development, Android/ios development, Game development in a quick, efficient and creative manner.</p>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                           
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_insta_widget">
                                <div class="f_title">
                                    <h3>Quick Links</h3>
                                </div>
       
        <ul class="list-unstyled">
            <li>
            <a href="#!">Home</a>
          </li>
          <li>
            <a href="#!">About</a>
          </li>
          <li>
            <a href="#!">Contact</a>
          </li>
          <li>
            <a href="#!">Services</a>
          </li>
          
        </ul>

                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="#"> Madhav Industry</a>
</h5>
                    </div>
                    <div class="float-sm-right">
                        <ul style="color: white;">
                            <li><a href="https://www.facebook.com/Madhav-Industry-103884381426839/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/IndustryMadhav?s=09"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/madhavindustry/?igshid=uh556p3cnnth"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/madhav-industry-77593a1b3/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/circle-bar/circle-progress.min.js"></script>
        <script src="vendors/circle-bar/plugins.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        
        <script src="js/circle-active.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>
