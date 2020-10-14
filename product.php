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
        <link href="css/product.css" rel="stylesheet">
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
<style type="text/css">
.panel {
  background-color: #fff;
  border-radius: 10px;
  padding: 15px 25px;
  position: relative;
  width: 100%;
  z-index: 10;
}

.pricing-table {
  box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 0px 20px 31px 3px rgba(0, 0, 0, 0.09), 0px 8px 20px 7px rgba(0, 0, 0, 0.02);
  display: flex;
  flex-direction: column;
}

@media (min-width: 900px) {
  .pricing-table {
    flex-direction: row;
  }
}

.pricing-table * {
  text-align: center;
  text-transform: uppercase;
}

.pricing-plan {
  border-bottom: 1px solid #e1f1ff;
  padding: 25px;
}

.pricing-plan:last-child {
  border-bottom: none;
}

@media (min-width: 900px) {
  .pricing-plan {
    border-bottom: none;
    border-right: 1px solid #e1f1ff;
    flex-basis: 100%;
    padding: 25px 50px;
  }

  .pricing-plan:last-child {
    border-right: none;
  }
}

.pricing-img {
  margin-bottom: 25px;
  max-width: 100%;
}

.pricing-header {
  color: #888;
  font-weight: 600;
  letter-spacing: 1px;
}

.pricing-features {
  color: #016FF9;
  font-weight: 600;
  letter-spacing: 1px;
  margin: 50px 0 25px;
}

.pricing-features-item {
  border-top: 1px solid #e1f1ff;
  font-size: 12px;
  line-height: 1.5;
  padding: 15px 0;
}

.pricing-features-item:last-child {
  border-bottom: 1px solid #e1f1ff;
}

.pricing-price {
  color: #016FF9;
  display: block;
  font-size: 32px;
  font-weight: 700;
}

.pricing-button {
  border: 1px solid #9dd1ff;
  border-radius: 10px;
  color: #348EFE;
  display: inline-block;
  margin: 25px 0;
  padding: 15px 35px;
  text-decoration: none;
  transition: all 150ms ease-in-out;
}

.pricing-button:hover,
.pricing-button:focus {
  background-color: #e1f1ff;
}

.pricing-button.is-featured {
  background-color: #48aaff;
  color: #fff;
}

.pricing-button.is-featured:hover,
.pricing-button.is-featured:active {
  background-color: #269aff;
}
.section-title {
    font-size: 28px;
    margin-bottom: 20px;
    padding-bottom: 20px;
    font-weight: 400;
    display: inline-block;
    position: relative;
}
.section-title:after,
.section-title:before {
    content: '';
    position: absolute;
    bottom: 0;
}
.section-title:after {
    height: 2px;
    background-color: rgba(252, 92, 15, 0.46);
    left: 25%;
    right: 25%;
}

.section-title:before {
    width: 15px;
    height: 15px;
    border: 3px solid #fff;
    background-color: #fc5c0f;
    left: 50%;
    transform: translatex(-50%);
    bottom: -6px;
    z-index: 9;
    border-radius: 50%;
}

/* CAROUSEL STARTS */
.customer-feedback .owl-item img {
    width: 85px;
    height: 85px;
}

.feedback-slider-item {
    position: relative;
    padding: 60px;
    margin-top: -40px;
}

.customer-name {
    margin-top: 15px;
    margin-bottom: 25px;
    font-size: 20px;
    font-weight: 500;
}

.feedback-slider-item p {
    line-height: 1.875;
}

.customer-rating {
    background-color: #eee;
    border: 3px solid #fff;
    color: rgba(1, 1, 1, 0.702);
    font-weight: 700;
    border-radius: 50%;
    position: absolute;
    width: 47px;
    height: 47px;
    line-height: 44px;
    font-size: 15px;
    right: 0;
    top: 77px;
    text-indent: -3px;
}

.thumb-prev .customer-rating {
    top: -20px;
    left: 0;
    right: auto;
}

.thumb-next .customer-rating {
    top: -20px;
    right: 0;
}

.customer-rating i {
    color: rgb(251, 90, 13);
    position: absolute;
    top: 10px;
    right: 5px;
    font-weight: 600;
    font-size: 12px;
}

/* GREY BACKGROUND COLOR OF THE ACTIVE SLIDER */
.feedback-slider-item:after {
    content: '';
    position: absolute;
    left: 20px;
    right: 20px;
    bottom: 0;
    top: 103px;
    background-color: #f6f6f6;
    border: 1px solid rgba(251, 90, 13, .1);
    border-radius: 10px;
    z-index: -1;
}

.thumb-prev,
.thumb-next {
    position: absolute;
    z-index: 99;
    top: 45%;
    width: 98px;
    height: 98px;
    left: -90px;
    cursor: pointer;
    -webkit-transition: all .3s;
    transition: all .3s;
}

.thumb-next {
    left: auto;
    right: -90px;
}

.feedback-slider-thumb img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    overflow: hidden;
}

.feedback-slider-thumb:hover {
    opacity: .8;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
}

.customer-feedback .owl-nav [class*="owl-"] {
    position: relative;
    display: inline-block;
    bottom: 45px;
    transition: all .2s ease-in;
}

.customer-feedback .owl-nav i {
    background-color: transparent;
    color: rgb(251, 90, 13);
    font-size: 25px;
}

.customer-feedback .owl-prev {
    left: -15px;
}

.customer-feedback .owl-prev:hover {
    left: -20px;
}

.customer-feedback .owl-next {
    right: -15px;
}

.customer-feedback .owl-next:hover {
    right: -20px;
}

/* DOTS */
.customer-feedback .owl-dots {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 35px;
}
.customer-feedback .owl-dot {
    display: inline-block;
}

.customer-feedback .owl-dots .owl-dot span {
    width: 11px;
    height: 11px;
    margin: 0 5px;
    background: #fff;
    border: 1px solid rgb(251, 90, 13);
    display: block;
    -webkit-backface-visibility: visible;
    -webkit-transition: all 200ms ease;
    transition: all 200ms ease;
    border-radius: 50%;
}

.customer-feedback .owl-dots .owl-dot.active span {
    background-color: rgb(251, 90, 13);
}

/* RESPONSIVE */
@media screen and (max-width: 767px) {
    .feedback-slider-item:after {
        left: 30px;
        right: 30px;
    }
    .customer-feedback .owl-nav [class*="owl-"] {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        margin-top: 45px;
        bottom: auto;
    }
    .customer-feedback .owl-prev {
        left: 0;
    }
    .customer-feedback .owl-next {
        right: 0;
    }
    
}

@media screen and (min-width: 568px){
    .thumb-next {
    display: none;
}
}
</style>
      
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
                    <h2>Our product</h2>
                    <p>Buy a product</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog Main Area =================-->
        <section class="blog_main_area p_100">
            <div class="container">
                <div class="row">
                    <iframe style="width: 100%;" height="315" src="https://www.youtube.com/embed/dzfnc25U2ws" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>   
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-3143adb2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3143adb2" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-75d17d73" data-id="75d17d73" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-59c55794 elementor-widget elementor-widget-heading" data-id="59c55794" data-element_type="widget" data-widget_type="heading.default">
                </div>
                <div class="elementor-element elementor-element-7f41cfb1 elementor-widget elementor-widget-image" data-id="7f41cfb1" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <div class="elementor-image">
                                        <img width="500" height="800" src="https://www.indiandatabase.org/wp-content/uploads/2020/07/ALL-INDIA-DATABASE-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.indiandatabase.org/wp-content/uploads/2020/07/ALL-INDIA-DATABASE-1.jpg 600w, https://www.indiandatabase.org/wp-content/uploads/2020/07/ALL-INDIA-DATABASE-1-225x300.jpg 225w, https://www.indiandatabase.org/wp-content/uploads/2020/07/ALL-INDIA-DATABASE-1-416x555.jpg 416w" sizes="(max-width: 600px) 100vw, 600px">                                            </div>
                </div>
                </div>
                        </div>
                    </div>
        </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-76a0cdd7" data-id="76a0cdd7" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-3ca9819 elementor-widget elementor-widget-heading" data-id="3ca9819" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
            <h1 class="elementor-heading-title elementor-size-large">All India 50+ CRORE Database with 1000+ Marketing Tools (Combo Offer)</h1>     </div>
                </div>
                <div class="elementor-element elementor-element-750155e8 elementor-star-rating--align-left elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating" data-id="750155e8" data-element_type="widget" data-widget_type="star-rating.default">
                <div class="elementor-widget-container">
            
        <div class="elementor-star-rating__wrapper">
                            <div class="elementor-star-rating__title">(112232 Reviews)</div>
                        <div class="elementor-star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating"><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i> <span itemprop="ratingValue" class="elementor-screen-only">5/5</span></div>        </div>
                </div>
                </div>
                <div class="elementor-element elementor-element-4380ca3d elementor-widget elementor-widget-text-editor" data-id="4380ca3d" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    <div class="elementor-text-editor elementor-clearfix"><p><img loading="lazy" src="https://www.indiandatabase.org/wp-content/uploads/2020/07/fire-ic.gif" alt="" width="20" height="22"> <span style="color: #dd1e31; font-family: tahoma, arial, helvetica, sans-serif; font-weight: 600; letter-spacing: 0.8px; text-align: center; white-space: pre-wrap; font-size: 12pt;">1359 Sold in last 12 Hours</span></p></div>
                </div>
                </div>
                <div class="elementor-element elementor-element-3f027caf elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3f027caf" data-element_type="widget" data-widget_type="icon-list.default">
                <div class="elementor-widget-container">
                    <ul class="elementor-icon-list-items">
                            <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                            <i aria-hidden="true" class="fas fa-eye"></i>                       </span>
                                        <span class="elementor-icon-list-text">92 People are currently looking at this product</span>
                                    </li>
                        </ul>
                </div>
                </div>
                <div class="elementor-element elementor-element-cf53ebf elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="cf53ebf" data-element_type="widget" data-widget_type="icon-list.default">
                <div class="elementor-widget-container">
                    <ul class="elementor-icon-list-items">
                            <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                            <i aria-hidden="true" class="fas fa-check-circle"></i>                      </span>
                                        <span class="elementor-icon-list-text">Verified Purchases (113234)</span>
                                    </li>
                        </ul>
                </div>
                </div>
                <div class="elementor-element elementor-element-6a046007 elementor-widget elementor-widget-heading" data-id="6a046007" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">Your Price :</h2>        </div>
                </div>
                <div class="elementor-element elementor-element-7603cd29 elementor-widget elementor-widget-html" data-id="7603cd29" data-element_type="widget" data-widget_type="html.default">
                <div class="elementor-widget-container">
           
            
            
            <input type="text" name="amount" id="amount" value="₹999/-" readonly=""><span><bd2> <del>  ₹4,999</del></bd2></span>
                <br>
                <br>
            <b>
                    
                    
            <label class="container">₹999/- <bd3><span style="color: #06BB4C;">STANDARD</span></bd3>
                        <br>
                        <bd3>20 CRORE Database + 20 Software And Others</bd3>
                     <input type="radio" name="kf_payment_option" class="kf_payment_option" id="kf_payment_option" value="cod" amount="₹999/-" checked="">
                        <span class="checkmark"></span>
                    </label>
            
                    
                    <label class="container"><strike>₹1599/-</strike> <bd3><span style="color: #06BB4C;"> PREMIUM</span></bd3> 999/- <bd3>(Today Only)</bd3><img loading="lazy" src="https://www.indiandatabase.org/wp-content/uploads/2020/07/blinking_new.gif" alt="" width="30" height="22">
                        <br>
                        <bd3>50+ CRORE Database + 30 Software (With KeyGen) + SMM Courses &amp; More</bd3>
                     <input type="radio" name="kf_payment_option" class="kf_payment_option" id="kf_payment_option" value="cod" amount="₹999/-">
                        <span class="checkmark"></span>
                    </label>
                    
                    
            
            </b>
            
            <script type="text/javascript">
                    jQuery(".kf_payment_option").change(function(e)
                    {
                        var selectedValue = jQuery(this).attr("amount");
                        jQuery("#amount").val(selectedValue);
                    });
                </script>
            
            
            
            </div>
                </div>
                <div class="elementor-element elementor-element-724a7986 elementor-align-justify elementor-mobile-align-justify elementor-widget elementor-widget-button animated bounceIn" data-id="724a7986" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceIn&quot;}" data-widget_type="button.default">
                <div class="elementor-widget-container">
                    <div class="elementor-button-wrapper">
                        <form action="checkout.php">
            <a href="checkout.php" type="submit" class="elementor-button-link elementor-button elementor-size-md" role="button">
                        <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-icon elementor-align-icon-left">
                <i aria-hidden="true" class="fas fa-cart-plus"></i>         </span>
                        <span class="elementor-button-text">BUY IT NOW</span>
        </span>
                    </a>
                    <input type="hidden" name="amount" value="499">
                    </form>
        </div>
                </div>
                </div>
                <div class="elementor-element elementor-element-40dfae68 elementor-widget elementor-widget-image" data-id="40dfae68" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <div class="elementor-image">
                                        <img width="400" height="73" src="https://www.indiandatabase.org/wp-content/uploads/2020/07/check_out_img-copy.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.indiandatabase.org/wp-content/uploads/2020/07/check_out_img-copy.jpg 400w, https://www.indiandatabase.org/wp-content/uploads/2020/07/check_out_img-copy-300x55.jpg 300w" sizes="(max-width: 400px) 100vw, 400px">                                         </div>
                </div>
                </div>
                <div class="elementor-element elementor-element-2f6e89b3 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="2f6e89b3" data-element_type="widget" data-widget_type="icon-list.default">
                <div class="elementor-widget-container">
                    <ul class="elementor-icon-list-items">
                            <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                            <i aria-hidden="true" class="fas fa-check-circle"></i>                      </span>
                                        <span class="elementor-icon-list-text">Instant Download &amp; Easy to Use</span>
                                    </li>
                                <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                            <i aria-hidden="true" class="fas fa-check-circle"></i>                      </span>
                                        <span class="elementor-icon-list-text">Every Day New Data will Update Automatically</span>
                                    </li>
                                <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                            <i aria-hidden="true" class="fas fa-check-circle"></i>                      </span>
                                        <span class="elementor-icon-list-text">50 CRORE+ All India Database </span>
                                    </li>
                                <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                            <i aria-hidden="true" class="fas fa-check-circle"></i>                      </span>
                                        <span class="elementor-icon-list-text">1000+ Free Complimentary Applications <img loading="lazy" src="https://www.indiandatabase.org/wp-content/uploads/2020/07/blinking_new.gif" alt="" width="30" height="22"></span>
                                    </li>
                                <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                            <i aria-hidden="true" class="fas fa-check-circle"></i>                      </span>
                                        <span class="elementor-icon-list-text">100+ Social Media Marketing Courses</span>
                                    </li>
                                <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                            <i aria-hidden="true" class="fas fa-check-circle"></i>                      </span>
                                        <span class="elementor-icon-list-text">300+ Marketing Tools <img loading="lazy" src="https://www.indiandatabase.org/wp-content/uploads/2020/07/blinking_new.gif" alt="" width="30" height="22"></span>
                                    </li>
                                <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                            <i aria-hidden="true" class="fas fa-check-circle"></i>                      </span>
                                        <span class="elementor-icon-list-text">500+ Graphic Library, Templates and many more</span>
                                    </li>
                        </ul>
                </div>
                </div>
                        </div>
                    </div>
        </div>
                                </div>
                    </div>
        </section>
        <section>
             <div class="container">
    <div class="panel pricing-table">
      
      <div class="pricing-plan">
        <img src="https://s22.postimg.cc/8mv5gn7w1/paper-plane.png" alt="" class="pricing-img">
        <h2 class="pricing-header">STANDARD</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">Custom domains</li>
          <li class="pricing-features-item">Sleeps after 30 mins of inactivity</li>
        </ul>
        <span class="pricing-price">Free</span>
        <form method="post" action="checkout.php">
        <a href="checkout.php" class="pricing-button">Buy Now</a>
          <input type="hidden" name="amount" value="499">
      </form>
      </div>
      
      <div class="pricing-plan">
        <img src="https://s28.postimg.cc/ju5bnc3x9/plane.png" alt="" class="pricing-img">
        <h2 class="pricing-header">PREMIUM</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">Never sleeps</li>
          <li class="pricing-features-item">Multiple workers for more powerful apps</li>
        </ul>
        <span class="pricing-price">$150</span>
        <a href="checkout.php" class="pricing-button">Buy Now</a>
      </div>
      
    </div>
  </div>

        </section>
        <section>
    <div class="customer-feedback">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8">
                    <div>
                        <h2 class="section-title">What Clients Say</h2>
                    </div>
                </div><!-- /End col -->
            </div><!-- /End row -->

            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                    <div class="owl-carousel feedback-slider">

                        <!-- slider item -->
                        <div class="feedback-slider-item">
                            <img src="//c2.staticflickr.com/8/7310/buddyicons/24846422@N06_r.jpg" class="center-block img-circle" alt="Customer Feedback">
                            <h3 class="customer-name">Lisa Redfern</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
                            <span class="light-bg customer-rating" data-rating="5">
                                5
                                <i class="fa fa-star"></i>
                            </span>
                        </div>
                        <!-- /slider item -->

                        <!-- slider item -->
                        <div class="feedback-slider-item">
                            <img src="https://res.cloudinary.com/hnmqik4yn/image/upload/c_fill,fl_force_strip,h_128,q_100,w_128/v1493982718/ah57hnfnwxkmsciwivve.jpg" class="center-block img-circle" alt="Customer Feedback">
                            <h3 class="customer-name">Cassi</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
                            <span class="light-bg customer-rating" data-rating="4">
                                4
                                <i class="fa fa-star"></i>
                            </span>
                        </div>
                        <!-- /slider item -->

                        <!-- slider item -->
                        <div class="feedback-slider-item">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" class="center-block img-circle" alt="Customer Feedback">
                            <h3 class="customer-name">Md Nahidul</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
                            <span class="light-bg customer-rating" data-rating="5">
                                5
                                <i class="fa fa-star"></i>
                            </span>
                        </div>
                        <!-- /slider item -->
                        
                    </div><!-- /End feedback-slider -->

                    <!-- side thumbnail -->
                    <div class="feedback-slider-thumb hidden-xs">
                        <div class="thumb-prev">
                            <span>
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" alt="Customer Feedback">
                            </span>
                            <span class="light-bg customer-rating">
                                5
                                <i class="fa fa-star"></i>
                            </span>
                        </div>

                        <div class="thumb-next">
                            <span>
                                <img src="https://res.cloudinary.com/hnmqik4yn/image/upload/c_fill,fl_force_strip,h_128,q_100,w_128/v1493982718/ah57hnfnwxkmsciwivve.jpg" alt="Customer Feedback">
                            </span>
                            <span class="light-bg customer-rating">
                                4
                                <i class="fa fa-star"></i>
                            </span>
                        </div>
                    </div>
                    <!-- /side thumbnail -->

                </div><!-- /End col -->
            </div><!-- /End row -->
        </div><!-- /End container -->
    </div><!-- /End customer-feedback -->
</section>

        <!--================End Blog Main Area =================-->
        
        <!--================Footer Area =================-->
              <footer class="footr_area">
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
        <script type="text/javascript">
            jQuery(document).ready(function($) {

    var feedbackSlider = $('.feedback-slider');
    feedbackSlider.owlCarousel({
        items: 1,
        nav: true,
        dots: true,
        autoplay: true,
        loop: true,
        mouseDrag: true,
        touchDrag: true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive:{

            // breakpoint from 767 up
            767:{
                nav: true,
                dots: false
            }
        }
    });

    feedbackSlider.on("translate.owl.carousel", function(){
        $(".feedback-slider-item h3").removeClass("animated fadeIn").css("opacity", "0");
        $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").removeClass("animated zoomIn").css("opacity", "0");
    });

    feedbackSlider.on("translated.owl.carousel", function(){
        $(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
        $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").addClass("animated zoomIn").css("opacity", "1");
    });
    feedbackSlider.on('changed.owl.carousel', function(property) {
        var current = property.item.index;
        var prevThumb = $(property.target).find(".owl-item").eq(current).prev().find("img").attr('src');
        var nextThumb = $(property.target).find(".owl-item").eq(current).next().find("img").attr('src');
        var prevRating = $(property.target).find(".owl-item").eq(current).prev().find('span').attr('data-rating');
        var nextRating = $(property.target).find(".owl-item").eq(current).next().find('span').attr('data-rating');
        $('.thumb-prev').find('img').attr('src', prevThumb);
        $('.thumb-next').find('img').attr('src', nextThumb);
        $('.thumb-prev').find('span').next().html(prevRating + '<i class="fa fa-star"></i>');
        $('.thumb-next').find('span').next().html(nextRating + '<i class="fa fa-star"></i>');
    });
    $('.thumb-next').on('click', function() {
        feedbackSlider.trigger('next.owl.carousel', [300]);
        return false;
    });
    $('.thumb-prev').on('click', function() {
        feedbackSlider.trigger('prev.owl.carousel', [300]);
        return false;
    });
    
}); //end ready
        </script>
    </body>
</html>
