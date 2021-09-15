
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

    <?php 
    if(!empty($product_data)) { 
      ?>
        <h1>Edit Product</h1>
      <?php 
        }
        else
        {
      ?>
        <h1>Add Product</h1>
      <?php 
        }
      ?>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>adminnew/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class=""><a href="<?php echo base_url()?>adminnew/VendorsCtegorylist">VendorsCtegorylist</a></li>
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
              <?php  echo '<meta http-equiv="refresh" content="2;url='.base_url('adminnew/productlist').'">'; ?>

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
<?php 
//p($product_data);
?>
          <form role="form" enctype="multipart/form-data" method="post" action="">
              <div class="col-md-6">
                  
                <div class="form-group">
                    <label>Saller Category</label>
                    <select  class="form-control" name="saller_category" required>
                       <option>Select Saller Category</option>
                       <?php 
                       if(!empty($all_categories)){
                           foreach($all_categories as $key=> $value){
                               $duration="";
                               if(!empty($product_data)){
                                   if($product_data['saller_category']==$value['category_name']){
                                       $duration='selected';
                                   }
                               }
                               ?>
                               <option <?php echo $duration; ?> ><?php echo $value['category_name'];?></option>
                               <?php
                           }
                       }else{
                           ?>
                           <option>Not Record Found</option>
                           <?php
                       }
                       ?>
                    </select>
                  </div>
                <div class="form-group">
                    <label>Product Brand</label>
                    <select  class="form-control" name="brand" required>
                       <option>Select Brand</option>
                       <?php 
                       if(!empty($all_brand)){
                           foreach($all_brand as $key=> $value){
                               $dusration="";
                               if(!empty($product_data)){
                                   if($product_data['brand']==$value['brand_name']){
                                       $dusration="selected";
                                   }
                               }
                               ?>
                               <option <?php echo $dusration; ?>><?php echo $value['brand_name'];?></option>
                               <?php
                           }
                       }else{
                           ?>
                           <option>Not Record Found</option>
                           <?php
                       }
                       ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo (!empty($product_data) && !empty($product_data['name']) ? $product_data['name'] : "" )?>" required>
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="con_vfeess" value="<?php echo (!empty($product_data) && !empty($product_data['con_vfeess']) ? $product_data['con_vfeess'] : "" )?>" required>
                  </div>
                  <?php 
                  if(!empty($product_data))
                  {
                  ?>
                    <div class="form-group">
                      <img src="<?php echo base_url()?>uploads/product_images/<?php echo (!empty($product_data['product_images']) ? $product_data['product_images'] : "default.png")?>">
                    </div>

                  <?php 
                  }
                  ?>
                  <div class="form-group">
                    <label>Product Image (Type : jpg/png)</label>
                    <input type="file" class="form-control" name="image">
                  </div>

                  <!-- <div class="form-group">
                    <label>Product description</label>
                    <input type="text" class="form-control" name="description" value="">
                  </div> -->
                  
            </div>
            <div class="col-md-12 mt-5">
              <input type="hidden" name="id" value="<?php echo (!empty($product_data) && !empty($product_data['product_id']) ? $product_data['product_id'] : "" )?>">
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