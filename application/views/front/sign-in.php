
<body>
    


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section st-hero">
        <div class="container">
            <!-- <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#0">Pages</a>
                </li>
                <li>
                    <span>Sign In</span>
                </li>
            </ul> -->
        </div>
        <div class="bg_img hero-bg bottom_center" ></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Account Section Starts Here =============-->
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header">
                        <h2 class="title">Buyer's Login</h2>
                        <p>You can log in to your <b>leastquote</b> account here.</p>
                    </div>
                    <!-- <ul class="login-with">
                        <li>
                            <a href="#0"><i class="fab fa-facebook"></i>Log in with Facebook</a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-google-plus"></i>Log in with Google</a>
                        </li>
                    </ul> -->
                   <!--  <div class="or">
                        <span>Or</span>
                    </div> -->
                     <?php if(isset($error) && !empty($error)){ ?>
  				  <div class="alert alert-danger" align="center">
  				  	<strong><?php echo $error; ?></strong>
  				  </div>
  				<?php } ?>
              <?php if(isset($success) && !empty($success)){ 
                 echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button><h4><i class="fa fa-spinner fa-spin"></i>'.$success.'</h4></div>';
                echo '<meta http-equiv="refresh" content="2;url='.base_url('home/buyer').'">';
                } ?>
                    <form class="login-form" method="post">
                        <div class="form-group mb-30">
                            <label for="login-name"><i class="far fa-user"></i></label>
                            <input type="text" id="login-name" placeholder="Username Nmae" name="name">
                        </div>
                        <div class="form-group">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="Password" name="password">
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group">
                            <a href="#0">Forgot Password?</a>
                        </div>
                        <div class="form-group mb-0">
                            <!--<?php echo base_url(); ?>home/buyer-->
                           <a href="javascript:SignIn(0);" class="custom-button st-btn ">LOG IN</a>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0" style="color: #fff">NEW HERE?</h3>
                        <p style="color: #fff">Sign up and create your Account</p>
                        <a href="sign-up.php" class="custom-button transparent">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->
<script>
    function SignIn(){
        $( ".login-form" ).submit();
    }
</script>

    