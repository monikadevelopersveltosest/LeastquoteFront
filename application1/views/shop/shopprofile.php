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
                include("shoPprofileNav.php");
                $shop_data = shopprofilebysession();
          ?>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- left column -->
      <div class="row">
        <div class="box box-primary">
          <div class="box-header with-border">
          </div>
          <?php if(isset($success) && !empty($success)){ 
                echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button>
                  <h4><i class="fa fa-spinner fa-spin"></i> '.$success.'</h4>
                  </div>';
               echo '<meta http-equiv="refresh" content="2;url='.base_url('shop/profile').'">';
            } 
            if(isset($error) && !empty($error)){
          ?>
            <div class="alert alert-danger" align="center">
              <strong><?php echo $error; ?></strong>
            </div>
          <?php } ?>
          <form role="form" enctype="multipart/form-data" method="post" action="">
            <div class="col-md-6">
              <div class="form-group">
                <label>Owner Name</label>
                <input type="text" class="form-control" name="owner_name" value="<?php echo (!empty($shop_data) && !empty($shop_data['owner_name']) ? $shop_data['owner_name'] : "" )?>" required>
              </div>
              <div class="form-group">
                <label>Shop Name</label>
                <input type="text" class="form-control" name="shop_name" value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_name']) ? $shop_data['shop_name'] : "" )?>" required>
              </div>
              <div class="form-group">
                <label>Email-ID</label>
                <input type="email" class="form-control" name="email" value="<?php echo (!empty($shop_data) && !empty($shop_data['email']) ? $shop_data['email'] : "" )?>" required>
                <?php if(isset($error_email) && !empty($error_email)){echo "<span class='error'>$error_email</span>";}?>
              </div>
              <?php if(!empty($shop_data['owner_image'])){ ?>
                <div class="form-group">
                  <img src="<?php echo base_url()?>uploads/shop_images/shop_owner_images/<?php echo $shop_data['owner_image'];?>" class="img-responsive">
                </div>
              <?php  } ?>
              <div class="form-group">
                <label>Owner Image</label>
                <input type="file" name="owner_image" class="form-control">
              </div>
             <!--  <?php if(!empty($shop_data['shop_logo'])){ ?>
                <div class="form-group">
                  <img src="<?php echo base_url()?>uploads/shop_images/shop_logos/<?php echo $shop_data['shop_logo'];?>" class="img-responsive">
                </div>
              <?php  } ?> -->
             <!--  <div class="form-group">
                <label>Shop Logo (150 * 150 px)</label>
                <input type="file" name="shop_logo" class="form-control">
              </div> -->
            </div>
            <div class="col-md-6">
              <?php if(!isset($shop_data['shop_id']) && empty($shop_data['shop_id'])){ ?>
                <div class="form-group">
                  <label>Mobile Number</label>
                  <input type="text" class="form-control" name="mobile_no" value="<?php echo (!empty($shop_data) && !empty($shop_data['mobile_no']) ? $shop_data['mobile_no'] : "" )?>" required>
                </div>
               <!--  <div class="form-group">
                  <label>GST Number</label>
                  <input type="text" class="form-control" name="gst_number" value="<?php echo (!empty($shop_data) && !empty($shop_data['gst_number']) ? $shop_data['gst_number'] : "" )?>" required>
                </div> -->
                <div class="form-group">
                  <label>Tax identification number</label>
                  <input type="text" class="form-control" name="pan_no" value="<?php echo (!empty($shop_data) && !empty($shop_data['pan_no']) ? $shop_data['pan_no'] : "" )?>" required>
                </div>
                <div class="form-group">
                  <label>Employer Identification number</label>
                  <input type="text" class="form-control" name="adhar_no" value="<?php echo (!empty($shop_data) && !empty($shop_data['adhar_no']) ? $shop_data['adhar_no'] : "" )?>" required>
                </div>
              <?php } ?>
              <?php if(!empty($shop_data['shop_image_desktop'])){ ?>
                <div class="form-group">
                  <img src="<?php echo base_url()?>uploads/shop_images/shop_image_desktop/<?php echo $shop_data['shop_image_desktop'];?>" class="img-responsive">
                </div>
              <?php } ?>
              <div class="form-group">
                <label>Shop Image (265 * 165 px )</label>
                <input type="file" name=" shop_image_mobile" class="form-control">
              </div>
              <!-- <?php if(!empty($shop_data['shop_image_mobile'])){ ?>
                <div class="form-group">
                  <img src="<?php echo base_url()?>uploads/shop_images/shop_image_mobile/<?php echo $shop_data['shop_image_mobile'];?>" class="img-responsive">
                </div>
              <?php } ?>
              <div class="form-group">
                <label>shop Image For Mobile (265 * 100 px ) </label>
                <input type="file" name="shop_image_desktop" class="form-control">
              </div> -->
              <!-- <?php if(!empty($shop_type_list)){ ?>
                  <div class="form-group">
                    <label>Select Shop Type</label>
                    <select class="form-control" name="shop_type_id"  required>
                      <option value="">Select Any Shop Type</option>
                      <?php 
                      foreach ($shop_type_list as $shop_type_list) {
                      ?>
                        <option value="<?php echo $shop_type_list['id']?>" <?php echo (isset($shop_data['shop_type_id']) && $shop_data['shop_type_id'] == $shop_type_list['id'] ? "selected" : ''); ?>><?php echo $shop_type_list['name'];?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
              <?php
              }
              ?> -->
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Address</label>
                <input name=" shop_address" class="form-control"  id="pac-input" value="<?php echo (!empty($shop_data) && !empty($shop_data[' shop_address']) ? $shop_data['  shop_address'] : "Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India" )?>"  >
              </div>
            </div>

            <div class="col-md-12" style="padding: 0px">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Latitude</label>
                  <input type="text" name="shop_latitude"  class="form-control" id="latitude"  value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_latitude']) ? $shop_data['shop_latitude'] : "22.71720790" )?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Longitude</label>
                  <input type="text" name="shop_longitude"  class="form-control" id="longitude"  value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_longitude']) ? $shop_data['shop_longitude'] : "75.86841130" )?>">
                </div>
              </div>
            </div>

            <div class="col-md-12" style="height: 243px;" id="gmap"></div>
            <div class="clearfix"></div>
            <div id="infowindow-content">
              <img src="" width="16" height="16" id="place-icon">
              <!-- <span id="place-name"  class="title">Indore</span><br> -->
              <span id="place-address"><?php echo (!empty($shop_data) && !empty($shop_data['address']) ? $shop_data['address'] : "Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India" )?></span>
            </div>
                 <div class="col-md-12" style="margin: 10px;">
                  <?php if(isset($shop_data['shop_id']) && !empty($shop_data['shop_id'])){ ?>
                    <input type="hidden" name="shop_id" value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_id']) ? $shop_data['shop_id'] : "" )?>">
                    <button type="submit" name="update"  class="btn btn-primary pull-right">Update</button>
                  <?PHP  }else{ ?>
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                  <?php } ?>
                </div>
          </form>
        </div>
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1jqCFvq7QWDreBKSOQi0tgL6wYBdXbWA&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">
$(document).ready(function(){
      $('#basicExample').timepicker({
        timeFormat: 'HH:mm',
        startTime: '07:00',
        minTime: '07:00', // 11:45:00 AM,
        maxHour: 23,
        interval: 30 
      });

      $('#basicExampleclose').timepicker({
        timeFormat: 'H:mm',
        startTime: '07:00',
        minTime: '07:00', // 11:45:00 AM,
        maxHour: 23,
        interval: 30 
      });
});

function initMap() {
    var latt = ($("#latitude").val() != "")? parseFloat($("#latitude").val()) : 22.71720790;
    var longg = ($("#longitude").val() != "")? parseFloat($("#longitude").val()) : 75.86841130;
    console.log("latt =",latt," longg =",longg);
    var map = new google.maps.Map(document.getElementById('gmap'), {
      center: {lat: latt, lng: longg},
      zoom: 13
    });
    var input = document.getElementById('pac-input');
    var autocomplete = new google.maps.places.Autocomplete(input);
    // Bind the map's bounds (viewport) property to the autocomplete object,

    // so that the autocomplete requests use the current map bounds for the

    // bounds option in the request.

    autocomplete.bindTo('bounds', map);
    var infowindow = new google.maps.InfoWindow();
    var infowindowContent = document.getElementById('infowindow-content');
    infowindow.setContent(infowindowContent);
    var marker = new google.maps.Marker({
      map: map,
      position : new google.maps.LatLng(latt, longg),
    });
    infowindow.open(map, marker);
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
    autocomplete.addListener('place_changed', function() {
      infowindow.close();
      marker.setVisible(false);
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        // User entered the name of a Place that was not suggested and
        // pressed the Enter key, or the Place Details request failed.
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
      $("#latitude").val(place.geometry.location.lat().toFixed(8));
      $("#longitude").val(place.geometry.location.lng().toFixed(8));
      // If the place has a geometry, then present it on a map.
      if (place.geometry.viewport) {
        map.fitBounds(place.geometry.viewport);
      } else {

        map.setCenter(place.geometry.location);

        map.setZoom(17);  // Why 17? Because it looks good.

      }

      marker.setPosition(place.geometry.location);

      marker.setVisible(true);



      var address = '';

      if (place.address_components) {

        address = [

          (place.address_components[0] && place.address_components[0].short_name || ''),

          (place.address_components[1] && place.address_components[1].short_name || ''),

          (place.address_components[2] && place.address_components[2].short_name || '')

        ].join(' ');

      }



      infowindowContent.children['place-icon'].src = place.icon;

      infowindowContent.children['place-name'].textContent = place.name;

      infowindowContent.children['place-address'].textContent = address;

      infowindow.open(map, marker);

    });
}

</script>
