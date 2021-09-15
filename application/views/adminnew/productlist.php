
<?php 
//echo "<pre>";print_r($rows);die;
?>
<div class="content-wrapper">

  <section class="content">

    <div class="row">

      <div class="col-xs-12">

        <!-- /.box -->

        <?php $msg = "status changed"?>

        <div class="box">

          <div class="box-body">

            <div class="table-responsive">

              <h3 class="box-title" style="padding-bottom: 10px;"> <img src="<?php echo base_url().'common_assets/images/box-img.png';?>" style="width: 30px"> All Products</h3>

                <div class="row">

                    <form >

                        <div class="col-md-12" style="margin-bottom: 16px;">

                            <div class="col-md-12">

                                <a href="<?php echo base_url().'adminnew/addproduct'?>" class="btn btn-success pull-right" >Add Product</a>

                            </div>

                        </div>

                    </form>

                </div>

                <table id="examples1" class="table table-striped table-condensed table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                    <thead>

                        <tr>

                            <th style="width: 20px;">S.NO</th>
                            <th>Product Id</th> 
                            <th>Title</th>
                            <th>Price</th> 
                            <th>Saller category</th>
                            <th>Brand</th>

                            <!-- <th>Fetured</th> -->

                            <!-- <th>Published</th> -->

                            <!-- <th>Total sales</th> -->

                            <th>Date</th>

                            <th class="disabled-sorting">Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php 

                            $i = 1;

                            foreach ($rows as $key => $value) {
                                //echo "<pre>";print_r($value);die;

                                ?>

                                    <tr>

                                        <td><?php echo $i;$i++; ?></td>
                                        <td><?php echo $value['product_reg_id']; ?></td>
                                        <td><a ><?php echo $value['name']; ?></a></td>
                                         <td><?php echo $value['con_vfeess']; ?></td> 
                                         <td><?php echo $value['saller_category'];?></td>
                                         <td><?php echo $value['brand'];?></td>
                                         <td><?php echo $value['create_date']; ?></td>                                       
                                        <td>
                                            <div class="dropdown">
                                              <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Select Action
                                              <span class="caret"></span></button>
                                              <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url().'adminnew/productdetail/'.$value['product_id']?>"  >View</a></li>
                                                <li><a href="<?php echo base_url().'adminnew/addproduct/'.$value['product_id']?>"  >Edit</a></li>
                                                <li><a href="javascript:void(0)" href-data="<?php echo  $value['product_id']; ?>" class="delete" >Delete</a></li>
                                              </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                            }
                         ?> 
                    </tbody>
                </table>
                <div class="pagination col-sm-12 text-right"><p><?php //  echo $links;?></p></div>
          </div>

          <!-- /.box-body -->

        </div>

        <!-- /.box -->

      </div>

      <!-- /.col -->

    </div>

    <!-- /.row -->

  </section>

  <!-- /.content -->

</div>

<script type="text/javascript">



  $(function () {
    $('#examples1').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
       "autoWidth": false
    });
  });
  $(".delete").click(function(e){
    var val = confirm("Are you sure, you want to delete product ?");
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>adminnew/deleteRecord",
        data:{table:'product',id:id,status:3,colwhr:'product_id',whrstatuscol:'status',action:"Delete"},
        dataType:'json',
        success: function(response) {
          if (response.status == 1){
            $.notify(response.msg, "success");
            setTimeout(function(){location.reload()},1000);
          }else{
            $.notify(response.msg, "error");
          }
        }
      });
    }
  });
</script>