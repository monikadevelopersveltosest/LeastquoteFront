


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section  st-hero">
        <div class="container">
            <!-- <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#0">Pages</a>
                </li>
                <li>
                    <span>Sign Up</span>
                </li>
            </ul> -->
        </div>
        <div class="bg_img hero-bg bottom_center" data-background=""></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Account Section Starts Here =============-->
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header">
                        <h2 class="title">SIGN UP</h2>
                        <p>We're happy you're here!</p>
                    </div>
                   <!--  <ul class="login-with">
                        <li>
                            <a href="#0"><i class="fab fa-facebook"></i>Log in with Facebook</a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-google-plus"></i>Log in with Google</a>
                        </li>
                    </ul>
                    <div class="or">
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
                echo '<meta http-equiv="refresh" content="2;url='.base_url('home/signIn').'">';
                } ?>
                    <form class="login-form" method="post">
                        <div class="form-group mb-30">
                            <label for="login-username"><i class="far fa-user"></i></label>
                            <input type="text" id="login-username" placeholder="username" name="username" required>
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-email"><i class="far fa-envelope"></i></label>
                            <input type="text" id="login-email" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="Password" name="password" required>
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group checkgroup mb-30">
                            <input type="checkbox" name="terms" id="check"><label for="check">The leastquote Terms of Use apply</label>
                        </div>
                        <div class="form-group mb-0">
                            <!--<input type="submit" name="submit" class="custom-button st-btn " value="Sign up"> <?php echo base_url();?>home/signIn-->
                        	<a href="javascript:saveData(0);" type="submit" class="custom-button st-btn ">Sign up</a>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0" style="color: #fff">ALREADY HAVE AN ACCOUNT?</h3>
                        <p style="color: #fff">Log in and go to your Dashboard.</p>
                        <a href="<?php echo base_url();?>home/signIn" class="custom-button transparent">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->
<script>
    function saveData(){
        $( ".login-form" ).submit();
    }
</script>