<div class="content-wrapper">
<section class="content-header"><h1>Totel Sales</h1></section>
    <section class="content">
<div class="row">
      <div class="col-xs-12">
        <div class="box">
        
          <div class="box-header" style="float: right">
          </div>
          <div class="clearfix"></div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
             
               <table id="examples1" class="table table-striped table-condensed table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                        <tr>
                           <th><input type="checkbox" id="all-check"></th>
                            <th style="width: 20px;">S.NO</th>
                            <td>Qustion</td>
                            <th>Answer</th>
                            <!-- <td>Qustion Hindi</td>
                            <th>Answer Hindi</th> -->
                            <th>Date</th>
                           <!--  <th class="disabled-sorting">Actions</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                           $count = 1; 
                          if(!empty($support)){
                            foreach ($support as $key => $value) {
                                ?>
                                    <tr>
                                      <td><input type="checkbox" name="chkboxshopid" class="check" id="<?php echo $value['id']; ?>" value="<?php echo $value['id']; ?>"></td>
                                        <td><?php echo $count++; ?></td>
                                       
                                          <td><a href="<?php echo base_url() ?>adminnew/FAQ/<?php echo  $value['id']; ?>" title="Edit"><?php if(!empty($value['ans'])){echo $value['ans'];} ?></a></td>
                                          <td><a ><?php if(!empty($value['qustion'])){echo $value['qustion']; }?></a></td>
                                          <!-- <td><?php //if(!empty($value['ans_hindi'])){echo $value['ans_hindi']; }?></td>
                                          <td><?php //if(!empty($value['qustion_hindi'])){echo $value['qustion_hindi'];} ?></td> -->
                                  
                                        <td><?php echo $value['create_date']; ?></td>
                                        <!-- <td><a href="<?php echo base_url() ?>adminnew/FAQ/<?php echo  $value['id']; ?>" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> </td> -->
                                    </tr>

                                <?php
                            }
                          }
                         ?>
                    </tbody>
                </table>
      
            </div>    
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    
    </section>
</div>
 