<style type="text/css">
    .radio input {
        display: block !important;
        margin-left: 5px !important;
    }
    .radio-btn {
        display: inline-block;
        margin-right: 15px;
    }
    .content-wrapper{
      height: 1400px !important;
    }
  </style>

<div class="content-wrapper">
  <section class="content">
    <div class="col-md-12" style="background-color: #fff">
      <!-- /.col -->
      <div class="row">
          <?php 
                // include("shoPprofileNav.php");
                // $shop_data = shopprofilebysession();
          ?>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- left column -->
      <div class="row">
        <div class="box box-primary">
          
          <?php if(!empty($success)){ 
                echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button>
                  <h4><i class="fa fa-spinner fa-spin"></i> '.$success.'</h4>
                  </div>';
               echo '<meta http-equiv="refresh" content="2;url='.base_url('shop/userdeails/'.$id).'">';
            } 
            if(isset($error) && !empty($error)){
          ?>
            <div class="alert alert-danger" align="center">
              <strong><?php echo $error; ?></strong>
            </div>
          <?php } ?>
          <div class="col-md-12">
            <br>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-4">
                 <!-- <fieldset class="form-group">-->
                  <label for="">Title<span style="color:#FF0000;">*</span></label>
                  <input name="title" value="<?php //echo (isset($promotins['title']) ? $promotins['title'] : '')?>" type="text" class="form-control" placeholder="Title" autofocus required/>
                  <!--</fieldset>-->
                </div>
                <div class="col-sm-4">
                  <!--<fieldset class="form-group">-->
                  <label for="">Message<span style="color:#FF0000;">*</span></label>
                  <textarea class="form-control" placeholder="Message" name="message"></textarea>
                  <!--</fieldset>-->
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12" align="center">
                    <button type="submit" class="btn btn-primary btnSubmit pull-right" name="submit" value="Send" style="height: 40px;line-height: 27px;">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
  <script type="text/javascript">
    $('#coupon_code').change(function(){
    var coupon_code = $(this).val();    
    if(coupon_code){
        $.ajax({
           type:"POST",
           url:"<?php echo base_url()?>shop/checkCouponCode",
           data:{coupon_code:coupon_code},
           success:function(res){               
            if(res){
              $("#coupon_code_status").html(res);
            }else{
              $("#coupon_code_status").html(res);
            }
           }
        });
    }else{
        $("#coupon_code_status").empty();
    }      
   });
  </script>