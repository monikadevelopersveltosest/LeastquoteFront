  <!--====== CONTACT PART ENDS ======-->
   <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html">
                            <img src="<?php echo base_url().'uploads/'.getWebOptionValue('front_logo');?>" alt="Logo" class="logo"  >
                            <!-- <img src="assets/images/pream-logo.png" alt="Logo"> --></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="<?php echo getWebOptionValue('facebook_url');?>" target="_blank"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="<?php echo getWebOptionValue('twitter_url');?>" target="_blank"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="<?php echo getWebOptionValue('instagram_url');?>" target="_blank"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="<?php echo getWebOptionValue('linkedin_url');?>" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">+<?php echo getWebOptionValue('mobile_no');?></span>
                        <span class="mail"><?php echo getWebOptionValue('email');?></span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">Designed by <a href="#" rel="nofollow">IT Spark Technology</a>  <a rel="nofollow" href="#">© Copyright 2020. All Rights Reserved By Preamio </a> </p>  
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    
     <!--====== Jquery js ======-->
    <script src="<?php echo base_url();?>front_assets/landingpage/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/landingpage/assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url();?>front_assets/landingpage/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/landingpage/assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="<?php echo base_url();?>front_assets/landingpage/assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="<?php echo base_url();?>front_assets/landingpage/assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="<?php echo base_url();?>front_assets/landingpage/assets/js/ajax-contact.js"></script>
    
    <!--====== Isotope js ======-->
    <script src="<?php echo base_url();?>front_assets/landingpage/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/landingpage/assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="<?php echo base_url()?>front_assets/landingpage/assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/landingpage/assets/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="<?php echo base_url();?>front_assets/landingpage/assets/js/main.js"></script>
    <script type="text/javascript">
    $(window).on('scroll', function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 20) {
            $(".navbar-area").removeClass("sticky");
            $(".navbar-area img").attr("src", "<?php echo base_url().'uploads/'.getWebOptionValue('front_logo');?>");
        } else {
            $(".navbar-area").addClass("sticky");
            $(".navbar-area img").attr("src", "<?php echo base_url().'uploads/'.getWebOptionValue('front_logo');?>");
        }
    });
    </script>