<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title><?php echo getWebOptionValue('site_title');?></title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url().'uploads/'.getWebOptionValue('front_logo');?>" type="image/png">
        
  <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/landingpage/assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/landingpage/assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/landingpage/assets/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/landingpage/assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/landingpage/assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/landingpage/assets/css/style.css">
    
    <style>
    		@media screen and (max-width: 900px) {
  .top-margin{margin-top:50px;}
  .about-text {
    font-size: 39px;
    margin: 0 auto;
    text-align: center;
    line-height: 500px;
    color: #FFF;
}
.about-img {
    width: 100%;
    background-image: url(<?php echo base_url();?>front_assets/landingpage/assets/images/banner1.jpg);
    background-size: cover;
   height: 300px;
}
.about-text {
    font-size: 39px;
    margin: 0 auto;
    text-align: center;
    line-height: 300px;
    color: #FFF;
}
.menupadding{ padding:15px 0px 15px 0px;}

    </style>
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area menupadding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo base_url().'uploads/'.getWebOptionValue('front_logo');?>" alt="Logo" class="logo-img"  >
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll text-dark" href="<?php echo base_url();?>home/sell_on_indocliq">home</a></li>
                                <li class="nav-item"><a class="page-scroll text-dark" href="#about">About</a></li>
                                <li class="nav-item"><a class="page-scroll text-dark" href="#services">Services</a></li>
                                
                                <li class="nav-item"><a class="page-scroll text-dark" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        
                        <div class="navbar-btn  d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href="<?php echo base_url(); ?>home/vendor_registration">Login</a></li>
                                <li><a class="solid" href="<?php echo base_url(); ?>home/vendorsingup">Sign Up</a></li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area ">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <?php 
    $whrc = array('status'=>1);
    $homepopupimage = $this->Common_model->GetWhere('landingpagslider', $whrc);
    $count=0;
    if(isset($homepopupimage) && !empty($homepopupimage)){ 
        foreach ($homepopupimage as $homepopupimagedata) {
            $count++;
            $classss="";
            if($count==1){
                $classss="active";
            }
            ?>
            <div class="carousel-item <?php echo $classss; ?>">
              <img src="<?php echo base_url();?>uploads/homebannerslider/<?php echo $homepopupimagedata['image']; ?>" class="d-block w-100 img-fluid" alt="...">
            </div>
            <?php
        }
    }
    ?>
   <!--  <div class="carousel-item active">
      <img src="<?php echo base_url();?>front_assets/landingpage/images/banner.jpg" class="d-block w-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>front_assets/landingpage/images/banner.jpg" class="d-block w-100 img-fluid" alt="...">
    </div> -->
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </section>

    <!--====== SLIDER PART ENDS ======-->