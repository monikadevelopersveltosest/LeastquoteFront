<style type="text/css">
	.dropzone {
	  cursor: pointer;
	  border: 2px dashed #0087F7;
	  border-radius: 5px;
	  background: #fafafa;
	  min-height: 150px;
	  padding: 54px 54px;
	  margin-bottom: 25px;
	}
	.fileupload{
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  top:0;
	  right: 0;
	  cursor: pointer;
	  opacity: 0;
	}
	.bspHasModal{
	  list-style-type: none;
	}
	.mb-3{
		margin-bottom: 10px;
	}
	input:checked + .slider {
	    background-color: rgb(100, 189, 99);
	}
	.slider {
	    position: absolute;
	    cursor: pointer;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    background-color: #888888;
	    -webkit-transition: .4s;
	    transition: .4s;
	}
	.slider.round {
	    border-radius: 20px;
	}
	.slider:before {
	    position: absolute;
	    content: "";
	    height: 18px;
	    width: 18px;
	    left: 0px;
	    bottom: 0px;
	    background-color: white;
	    -webkit-transition: .4s;
	    transition: .4s;
	}
	.switch {
	    position: relative;
	    display: inline-block;
	    width: 38px;
	    height: 18px;
	}
	.custom-input-file--4 + label {
	    background: transparent;
	    padding: 0;
	}
	.custom-input-file {
	    width: 0.1px;
	    height: 0.1px;
	    opacity: 0;
	    outline: none;
	    overflow: hidden;
	    position: absolute;
	    z-index: -1;
	}
	.custom-input-file + label {
	    max-width: 80%;
	    font-size: 0.875rem;
	    font-weight: 600;
	    text-overflow: ellipsis;
	    white-space: nowrap;
	    cursor: pointer;
	    display: block;
	    overflow: hidden;
	    padding: 0.625rem 1.25rem;
	    border: 1px solid #e6e6e6;
	    border-radius: 2px;
	    color: #FFF;
	    outline: none;
	}
	.custom-input-file--4+label strong {
	    color: #676767;
	    background-color: #e6e6e6;
	    font-size: 14px;
	    padding: 0.4rem 1.25rem;
	    font-weight: 400;
	}
	.custom-input-file--4 + label strong {
	    float: right;
	    height: 100%;
	    color: #000;
	    display: inline-block;
	    font-weight: 600;
	}
	label{
		font-size: 15px;
	}
	.box{
		padding: 10px;
		box-shadow: none;
	}
</style>
<style type="text/css">
  .fa-toggle-on{
    color: #00a65a;
    font-size: 26px;
  }
  .fa-toggle-off{
    font-size: 26px;
  }
  .f24{
  	color: #000;
    font-size: 24px;
    font-weight: 600;
  }
</style>
<link rel="stylesheet" href="<?php echo base_url();?>common_assets/editor/jodit.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<style type="text/css">
	.select2-container--default .select2-selection--multiple .select2-selection__choice {
	    color: #000;
	}
</style>
<?php //p($product_data); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Product Details</h1>
	</section>
	<section class="content">
	    <div class="row">
	    	<div class="col-xs-12" style="background-color: #fff">
	    		<div class="row">
			        <div class="box box-primary">
			            <input type="hidden" name="product_id" value="<?php echo (isset($product_data) && !empty($product_data['product_id']) ? $product_data['product_id'] : "" )?>">
			            <div class="col-md-6">
			            	<?php if(!empty($all_categories) ){ 
			            			//p($product_data);
			            		?>
			                  <div class="form-group">
			                    <label>Category</label>
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
			                  <div class="form-group subcategorylist" disabled>
			                  	<?php if(isset($product_data['brand']) && !empty($product_data['brand'])){ 
			                  	?>
				                  	<select class="form-control" name="sub_categories_id" id="sub_categories_id">
									  <option value="">Select Sub Category</option>
									  <?php 
									  foreach ($all_brand as $subcategory){
									  ?>
									    <option value="<?php echo $subcategory['brand_name']?>" <?php echo (isset($product_data['brand']) && $product_data['brand'] == $subcategory['brand_name'] ? "selected" : ''); ?> ><?php echo $subcategory['brand_name'];?></option>
									  <?php
									  }
									  ?>
									</select>
								<?php } ?>
			                  </div>
							<?php } ?>
			              <div class="form-group">
			                <label>Product Name</label>
			                <input type="text" class="form-control" name="name" value="<?php echo (!empty($product_data) && !empty($product_data['name']) ? $product_data['name'] : "" )?>" disabled>
			              </div>
			              <!--<div class="form-group">-->
			              <!--  <label>Description &nbsp;<b style="color:#ff0000;">*</b></label>-->
			                            
                 <!--           <textarea class="form-control editor" rows="5" name="description" id="description" value="<?php echo (!empty($product_data['description']))? $product_data['description']:''; ?>" > <?php echo (!empty($product_data['description']))? $product_data['description']:''; ?> </textarea>-->
                 <!--           <div class="help-block with-errors"></div>-->
			              <!--</div>-->
			              <!--<div class="form-group">-->
			              <!--  <label>Quantity</label>-->
			              <!--  <input type="number" class="form-control" name="quantity" value="<?php echo (!empty($product_data) && !empty($product_data['quantity']) ? $product_data['quantity'] : "" )?>" disabled>-->
			              <!--  <?php if(isset($error_email) && !empty($error_email)){echo "<span class='error'>$error_email</span>";}?>-->
			              <!--</div>-->
			            </div>
			            <div class="col-md-6">
			              	<div class="form-group">
			                  <label>Price</label>
			                  <input type="text" class="form-control" step="0.01" name="unit_price" value="<?php echo (!empty($product_data) && !empty($product_data['con_vfeess']) ? $product_data['con_vfeess'] : "" )?>" disabled>
			                </div>
			                

			               <!-- <div class="form-group">-->
				              <!--  <label>Return Policy &nbsp;<b style="color:#ff0000;">*</b></label>-->
				                            
	                 <!--           <textarea class="form-control editor" rows="5" name="return_policy" id="return_policy" value="<?php echo (!empty($product_data['return_policy']))? $product_data['return_policy']:''; ?>" > <?php echo (!empty($product_data['return_policy']))? $product_data['return_policy']:''; ?> </textarea>-->
	                 <!--           <div class="help-block with-errors"></div>-->
				              <!--</div>-->
			            </div>
						<div class="col-md-12">
							<label>Main Image <small>(290x300)</small> <span class="required-star">*</span></label>
							<?php if(isset($product_data['product_images']) && !empty($product_data['product_images'])){ ?>
									<img src="<?php echo base_url().'uploads/product_images/'.$product_data['product_images']?>" class="img-responsive">
							<?php } ?>
                            
                        </div>
			          </form>
			        </div>
			     </div>
	    	</div>
	    </div>
	</section>
</div>
<script src="<?php echo base_url();?>common_assets/editor/jodit.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    // $('.js-example-basic-multiple').select2();
	   // update_sku();
	    $('.remove-files').on('click', function(){
            $(this).parents(".imgWrapper").remove();
        });
	    $('.color-var-select').select2({
	        templateResult: colorCodeSelect,
	        templateSelection: colorCodeSelect,
	        escapeMarkup: function(m) { return m; }
	    });

	    function colorCodeSelect(state) {
	        var colorCode = $(state.element).val();
	        if (!colorCode) return state.text;
	        return  "<span class='color-preview' style='background-color:"+colorCode+";'></span>" + state.text;
	    }

		$(".demo-select2-multiple-selects").select2();

		$('.editor').each(function(el){
			var $this = $(this);
	        var buttons = $this.data('buttons');
	        buttons = !buttons ? "bold,underline,italic,hr,|,ul,ol,|,align,paragraph,|,image,table,link,undo,redo" : buttons;

			var editor = new Jodit(this, {
	            "uploader": {
	                "insertImageAsBase64URI": true
	            },
	            "toolbarAdaptive": false,
	            "defaultMode": "1",
	            "toolbarSticky": false,
	            "showXPathInStatusbar": false,
	            "buttons": buttons,
	        });
		});

		$(".pulish_status").click(function(e){
		    var val = confirm("Sure you want to Publised Product ?");
		    var id = $(this).attr("href-id");
		    if(val){
		      $.ajax({
		        type: "POST",
		        url: "<?php echo base_url();?>adminnew/change_status",
		        data:{tablename:'product',id:id,status:1,whrcol:'product_id',whrstatuscol:'status',action:"Publised"},
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

		$(".un_pulish_status").click(function(e){
		    var val = confirm("Sure you want to Un Publised Product ?");
		    var id = $(this).attr("href-id");
		    if(val){
		      $.ajax({
		        type: "POST",
		        url: "<?php echo base_url();?>adminnew/change_status",
		        data:{tablename:'product',id:id,status:0,whrcol:'product_id',whrstatuscol:'status',action:"Un Publised"},
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
		        url: "<?php echo base_url();?>adminnew/change_status",
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
		        url: "<?php echo base_url();?>adminnew/change_status",
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
	});
</script>

      