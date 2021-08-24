<style type="text/css">
  .fa-toggle-on{
    color: #00a65a;
    font-size: 24px;
  }
  .fa-toggle-off{
    font-size: 24px;
  }
</style>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->
        <?php $msg = "status changed"?>
        <div class="box">
          <div class="box-body">
            <div class="table-responsive">
              <h3 class="box-title" style="padding-bottom: 10px;">All User List</h3>
                <!--<div class="row">-->
                <!--    <form >-->
                <!--        <div class="col-md-12" style="margin-bottom: 16px;">-->
                <!--            <div class="col-md-12">-->
                <!--                <a href="<?php echo base_url().'shop/addPromotion'?>" class="btn btn-success pull-right" >Add Promotions</a>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </form>-->
                <!--</div>-->
                <table id="examples1" class="table table-striped table-condensed table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 20px;">S.NO</th>
                            <th>Reg Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Image</th>
                            <th>Address</th>
                            <th>Created Date</th>
                            <th class="disabled-sorting">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i = 1;
                            foreach ($userdetails as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td><?php echo $value['reg_id']; ?></td>
                                        <td><a ><?php echo $value['first_name']; ?></a></td>
                                        <td><a ><?php echo $value['last_name']; ?></a></td>
                                        <td><a ><?php echo $value['email']; ?></a></td>
                                        <td><a ><?php echo $value['mobile_no']; ?></a></td>
                                        <td><?php  echo (!empty($value['image'])?'<img src='.base_url().'uploads/user_images/'.$value['image'].' style="width:50px;height:50px">':'none'); ?></td>
                                        <td><a ><?php echo $value['address']; ?></a></td>
                                        <td><?php echo $value['create_date']; ?></td>
                                        <td>
                                          <a href="<?php echo base_url().'shop/sendNotification/'.$value['id']?>" title="Edit"><i class="fa fa-comments"></i></a> 
                                          &nbsp;
                                        <a href="javascript:void(0)" href-data="<?php echo $value['id']?>" class="delete" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php
                            }

                         ?>
                        
                    </tbody>
                </table>
                <div class="pagination col-sm-12 text-right"><p><?php //echo $links;?></p></div>
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
  $(".clearance_status").click(function(e){
        var val = confirm("Sure you want to Add In Stock clearacne ?");
        var id = $(this).attr("href-id");
        if(val){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>shop/change_status",
            data:{tablename:'product',id:id,status:1,whrcol:'product_id',whrstatuscol:'clearance_status',action:"Stock clearacne"},
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

  $(".remove_clearance_status").click(function(e){
        var val = confirm("Sure you want to Remove From Stock clearacne ?");
        var id = $(this).attr("href-id");
        if(val){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>shop/change_status",
            data:{tablename:'product',id:id,status:0,whrcol:'product_id',whrstatuscol:'clearance_status',action:"Stock clearacne"},
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

  $(function () {

    $('#examples1').DataTable({

      "paging": true,

      "lengthChange": false,

      "searching": true,

      "ordering": true,

      "info": true,

      "autoWidth": false

    });
  });
  $(".delete").click(function(e){
    var val = confirm("Sure you want to Delete Promotion ?");
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>shop/deleterecord",
        data:{table:'users',id:id,colwhr:'id',action:"Delete"},
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
  $(".deactive").click(function(e){
        var val = confirm("Sure you want to Deaactive Product ?");
        //e.preventDefault(); 
        var id = $(this).attr("href-data");
        //alert(href);
        //var btn = this;
        if(val){
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>shop/change_status",
              data:{tablename:'product',id:id,status:0,whrcol:'product_id',whrstatuscol:'status',action:"Deactive"},
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
  $(".productactive").click(function(e){
    var val = confirm("Sure you want to active Product ?");
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>shop/change_status",
        data:{tablename:'product',id:id,status:1,whrcol:'product_id',whrstatuscol:'status',action:"Active"},
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
  $(".featured_status").click(function(e){
        var val = confirm("Sure you want to Featured Product ?");
        var id = $(this).attr("href-id");
        if(val){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>shop/change_status",
            data:{tablename:'product',id:id,status:1,whrcol:'product_id',whrstatuscol:'featured_status',action:"Featured"},
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

    $(".un_featured_status").click(function(e){
        var val = confirm("Sure you want to Un Featured Product ?");
        var id = $(this).attr("href-id");
        if(val){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>shop/change_status",
            data:{tablename:'product',id:id,status:0,whrcol:'product_id',whrstatuscol:'featured_status',action:"Featured"},
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