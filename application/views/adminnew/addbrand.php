<?php //$this->load->view('adminnew/nav'); ?>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

    <?php 
    if(!empty($cat_data)) { 
      ?>
        <h1>Edit Brand</h1>
      <?php 
        }
        else
        {
      ?>
        <h1>Add Brand</h1>
      <?php 
        }
      ?>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>adminnew/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class=""><a href="<?php echo base_url()?>adminnew/brand">Brand List</a></li>
      </ol>
    </section>



    <!-- Main content -->

    <section class="content">



      <!-- SELECT2 EXAMPLE -->

      <div class="box box-default">

        

        <!-- /.box-header -->

        <div class="box-body">

          <div class="row">

          <?php 

            if(isset($success) && !empty($success)){

              ?>

              <div class="alert alert-success" align="center">

              <strong><?php echo $success; ?></strong>
              <?php  echo '<meta http-equiv="refresh" content="2;url='.base_url('adminnew/brand').'">'; ?>

              </div>



              <?php   
            }
            if(isset($error) && !empty($error)){

              ?>

                <div class="alert alert-danger" align="center">

                  <strong><?php echo $error; ?></strong>

                </div>

              <?php 
            }
          ?>

          <form role="form" enctype="multipart/form-data" method="post" action="">
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Brand Name</label>
                    <input type="text" class="form-control" name="brand_name" value="<?php echo (!empty($cat_data) && !empty($cat_data['brand_name']) ? $cat_data['brand_name'] : "" )?>" required>
                  </div>

                  <?php 
                  if(!empty($cat_data))
                  {
                  ?>
                    <div class="form-group">
                      <img src="<?php echo base_url()?>uploads/brand_image/<?php echo (!empty($cat_data['image']) ? $cat_data['image'] : "default.png")?>" hight="100" width="50">
                    </div>

                  <?php 
                  }
                  ?>
                  <div class="form-group">
                    <label>Brand Image (Type : jpg/png)</label>
                    <input type="file" class="form-control" name="image">
                  </div>
            </div>
            <div class="col-md-12 mt-5">
              <input type="hidden" name="id" value="<?php echo (!empty($cat_data) && !empty($cat_data['id']) ? $cat_data['id'] : "" )?>">
               <button type="submit" name="submit"  class="btn btn-primary">Save</button>
            </div>
          </form>

          <!-- /.col -->

          </div>

          <!-- /.row -->

        </div>

        <!-- /.box-body -->

      </div>

      <!-- /.box -->





    </section>

    <!-- /.content -->

  </div>

  <script type="text/javascript">
    $('#shop_id').change(function(){
    var shop_id = $(this).val();    
    if(shop_id){
        $.ajax({
           type:"POST",
           url:"<?php echo base_url()?>adminnew/GetParentCategories",
           data:{shop_id:shop_id},
           success:function(res){               
            if(res){

                $("#parent_id").html(res);
           
            }else{
               $("#parent_id").empty();
            }
           }
        });
    }else{
        $("#parent_id").empty();
    }      
   });
  </script>