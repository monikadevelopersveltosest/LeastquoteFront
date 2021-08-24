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
              <h3 class="box-title" style="padding-bottom: 10px;">All Pream Destribution History List</h3>
                <div class="row">
                    <form method="POST" action="<?php echo base_url();?>shop/filterbydate">
                        <div class="col-md-12" style="margin-bottom: 16px;">
                            <div class="col-md-12">
                                <input type="date" name="date" value="" required>
                                <input type="submit" name="submit" value="Filter">
                            </div>
                        </div>
                    </form>
                </div>
                <table id="examples1" class="table table-striped table-condensed table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 20px;">S.NO</th>
                            <th>Customer Name</th>
                            <th>Pabulic Id</th>
                            <th>Image</th>
                            <th>Check In Time</th>
                            <th>Amount Of Spent</th>
                            <th class="disabled-sorting">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i = 1;
                            if(!empty($customerlist)){
                            foreach ($customerlist as $key => $value) {
                                //echo "<pre>";print_r($value['pid']);die;
                                ?>
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td><?php echo $value['name']; ?></td>
                                        <td><a ><?php echo $value['pablic_id']; ?></a></td>
                                        <td><?php  echo (!empty($value['image'])?'<img src='.base_url().'uploads/promotion/'.$value['image'].' style="width:50px;height:50px">':'none'); ?></td>
                                        <td><?php echo $value['checkintime']; ?></td>
                                         <td><?php echo $value['amount']; ?></td>
                                        <td>
                                          <a href="<?php echo base_url().'shop/productlist1/'.$value['id']?>"><i class="fa fa-eye" aria-hidden="true"></i></a> 
                                          &nbsp;
                                          <a href="javascript:void(0)" href-data="<?php echo $value['id']?>" class="delete" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php
                            }
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
    var val = confirm("Sure you want to Delete pream destribution customer ?");
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>shop/deleterecord",
        data:{table:'customer',id:id,colwhr:'id',action:"Delete"},
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