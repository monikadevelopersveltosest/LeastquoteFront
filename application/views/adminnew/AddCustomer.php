<div class="content-wrapper">
  <section class="content-header">
    <?php if($customer_data) {  ?>
      <h1>Edit Customer</h1>
    <?php } else{ ?>
      <h1>Add Customer</h1>
    <?php } ?>
    <ol class="breadcrumb">
    	<li><a href="<?php echo base_url()?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
    	<li class=""><a href="<?php echo base_url()?>adminnew/Customerslist">Customers</a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
  	<div class="box box-default">
  		<!-- /.box-header -->
  	  <div class="box-body">
  		  <div class="row">
          
  				<?php if(isset($error) && !empty($error)){ ?>

  				  <div class="alert alert-danger" align="center">
  				  	<strong><?php echo $error; ?></strong>
  				  </div>
  				<?php } ?>
          <?php if(isset($success) && !empty($success)){ 
             echo '<div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button><h4><i class="fa fa-spinner fa-spin"></i>'.$success.'</h4></div>';
            echo '<meta http-equiv="refresh" content="2;url='.base_url('adminnew/Customerslist').'">';
            } ?>
  				<form role="form" enctype="multipart/form-data" method="post" action="">
  					<div class="col-md-6">
  							<div class="form-group">
                  <label>User Name</label>
                  <input type="text" class="form-control" name="username" value="<?php echo (!empty($customer_data) && !empty($customer_data['username']) ? $customer_data['username'] : "" )?>" required>
                </div>
                <div class="form-group">
                  <label>Email-ID</label>
                  <input type="email" class="form-control" name="email" value="<?php echo (!empty($customer_data) && !empty($customer_data['email']) ? $customer_data['email'] : "" )?>" required>
                  <?php if(isset($error_email) && !empty($error_email)){echo "<span class='error'>$error_email</span>";}?>
                </div>
            <?php 
            if(!empty($customer_data['password'])){
            }else{
                ?>
                <div class="form-group">
    				<label>Password</label>
    				<input type="password" class="form-control" name="password">
    			</div>
                <?php
            }
            ?>    
    			<div class="form-group">
    				<label>Type</label>
    				<input type="text" class="form-control" name="type" value="<?php echo (!empty($customer_data) && !empty($customer_data['type']) ? $customer_data['type'] : "" )?>">
    			</div>
    			<div class="form-group">
    				<label>Vcash</label>
    				<input type="text" class="form-control" name="vcash" value="<?php echo (!empty($customer_data) && !empty($customer_data['vcash']) ? $customer_data['vcash'] : "" )?>">
    			</div>
    			<?php if(!empty($customer_data['image'])){ ?>
    				<div class="form-group">
    				    <img src="<?php echo base_url()?>uploads/user_images/<?php echo $customer_data['image'];?>" class="img-responsive">
    					</div>
    			<?php } ?>
        			<div class="form-group">
        				<label>User Image</label>
        				<input type="file" name="image" class="form-control">
        			</div>
  			    </div>
  				<div class="col-md-6">
  				<div class="form-group">
        	       <label>Mobile Number</label>
        	       <input type="tel" class="form-control" name="user_contact_number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"  value="<?php echo (!empty($customer_data) && !empty($customer_data['user_contact_number']) ? $customer_data['user_contact_number'] : "" )?>" required>
              </div>
            </div>
            <!--<div class="col-md-12">-->
            <!--  <div class="form-group">-->
            <!--    <label>Address</label>-->
            <!--    <input name="address" class="form-control"  id="pac-input"  value="<?php echo (!empty($customer_data) && !empty($customer_data['address']) ? $customer_data['address'] : "Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, Indi" )?>"  >-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="col-md-12" style="padding: 0px">-->
            <!--  <div class="col-md-6">-->
            <!--    <div class="form-group">-->
            <!--      <label>Latitude</label>-->
            <!--      <input type="text" name="latitude"  class="form-control" id="latitude"  value="<?php echo (!empty($customer_data) && !empty($customer_data['latitude']) ? $customer_data['latitude'] : "22.71720790" )?>">-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="col-md-6">-->
            <!--    <div class="form-group">-->
            <!--      <label>Longitude</label>-->
            <!--      <input type="text" name="longitude"  class="form-control" id="longitude"  value="<?php echo (!empty($customer_data) && !empty($customer_data['longitude']) ? $customer_data['longitude'] : "75.86841130" )?>">-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->

            <!--<div class="col-md-12" style="height: 243px;" id="gmap"></div>-->
            <!--<div id="infowindow-content">-->
            <!--  <img src="" width="16" height="16" id="place-icon">-->
              <!-- <span id="place-name"  class="title">Indore</span><br> -->
            <!--  <span id="place-address"><?php echo (!empty($customer_data) && !empty($customer_data['address']) ? $customer_data['address'] : "Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India" )?></span>-->
            <!--</div>-->
            <div class="col-md-12 mt-5">
            	<?php if(isset($customer_data['subscriber_id']) && !empty($customer_data['subscriber_id'])){
            	?>
                      <input type="hidden" name="subscriber_id" value="<?php echo (!empty($customer_data) && !empty($customer_data['subscriber_id']) ? $customer_data['subscriber_id'] : "" )?>">
                      <button type="submit" name="update" value="update"  class="btn btn-primary pull-right floatright">Update</button>
              <?php }else{ ?>
                    <button type="submit" name="submit"  class="btn btn-primary pull-right floatright">Submit</button>
              <?php } ?>
            </div>
          </form>
  			<!-- /.col -->
  			</div>
  			<!-- /.row -->
  		</div>
  		<!-- /.box-body -->
  	</div>
  </section>
	<!-- /.content -->
</div>