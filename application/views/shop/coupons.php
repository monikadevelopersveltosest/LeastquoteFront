
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header"><h1> Coupons <small>List</small></h1></section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header col-md-6" style="float: left;">
            <h3 class="box-title">
                <a href="<?php echo base_url();?>shop/addcouponcode" class="btn btn-primary pull-right">Add New Coupon</a>
            </h3>
          </div>
          <div class="box-header" style="float: right">
          </div>
          <div class="clearfix"></div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="categorytable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>S.no.</th>
                  <th>Coupon Code</th>
                  <th>offer Amount (in %)</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                <?php $count = 1; 
                  if(!empty($coupons_data)){
                    foreach ($coupons_data as $getdata) { 
                  ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php  echo (!empty($getdata['coupon_code'])?$getdata['coupon_code']:'none'); ?></td>
                      <td><?php  echo (!empty($getdata['offer_amount'])?$getdata['offer_amount']:'none'); ?> %</td>
                      <td><?php  echo (!empty($getdata['start_date'])?$getdata['start_date']:'none'); ?></td>
                      <td><?php  echo (!empty($getdata['end_date'])?$getdata['end_date']:'none'); ?></td>
                      <td><?php if($getdata['status']==0){echo "Deactive";}
                                if($getdata['status']==1){echo "Active";}
                          ?>
                      </td>
                      <td>
                        <a href="<?php echo base_url() ?>shop/addcouponcode/<?php echo  $getdata['id']; ?>" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                        <?php if($getdata['status']==0){?>
                          <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="activecat" title="Change status"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                        <?php } if($getdata['status']==1){?>
                          <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="deactive" title="Change status"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                        <?php }?>
                          <!-- <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="delete" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a> -->
                       <a href="javascript:void(0)" href-id="<?php echo $getdata['id']; ?>" class="btn_delete" title="Delete" data_id=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td> 
                    </tr>
                <?php $count++; 
                  }
                }
                ?>  
              </tbody>
            </table>
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
<!-- /.content-wrapper -->
<script type="text/javascript">
  $(function () {

    $('#categorytable').DataTable({

      "paging": true,

      "lengthChange": false,

      "searching": true,

      "ordering": true,

      "info": true,

      "autoWidth": false

    });
  });
  
  $(".deactive").click(function(e){
        var val = confirm("Sure you want to Deaactive coupon ?");
        //e.preventDefault(); 
        var id = $(this).attr("href-data");
        //alert(href);
        //var btn = this;
        if(val){
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>shop/change_status",
              data:{tablename:'coupons',id:id,status:0,whrcol:'id',whrstatuscol:'status',action:"Deactive"},
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
  $(".activecat").click(function(e){
    var val = confirm("Sure you want to active coupon ?");
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>shop/change_status",
        data:{tablename:'coupons',id:id,status:1,whrcol:'id',whrstatuscol:'status',action:"Active"},
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
  
  $('.btn_delete').click(function(){
        var val = confirm("Sure you want to Delete Contact ?");
        var id = $(this).attr("href-id");
        //alert(id);
        if(val!=""){
            $.ajax({
            type: 'POST',
            url:"<?php echo base_url()?>adminnew/deleterecord",
            data:{id:id,table:'coupons',colwhr:'id'},
            dataType: 'json',
            success : function(data){
                if (data.status == 1){
                    $.notify(data.msg, "success");
                    setTimeout(function(){location.reload()},1000);
                  }else{
                    $.notify(data.msg, "error");
                  }
          
             }
            

        });
        }
            
        });
</script>
