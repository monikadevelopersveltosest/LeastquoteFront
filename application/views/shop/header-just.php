<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo getWebOptionValue('site_title');?>| Dashboard</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.css">
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/Ionicons/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins  
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/dist/css/skins/_all-skins.min.css">
<!-- Morris chart -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/morris.js/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/jvectormap/jquery-jvectormap.css">
<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>backend_assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>backend_assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>backend_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- bootstrap-notify -->
<script src="<?php echo base_url();?>backend_assets/dist/js/bootstrap-notify.js"></script>
<script src="<?php echo base_url();?>backend_assets/dist/js/nicEdit-latest.js"></script>
<script type="text/javascript">
  var base_url = "<?php echo base_url(); ?>";
</script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<!-- Google Font -->
<style type="text/css">
    .skin-blue .main-header .navbar {
      background-color: #005551 !important;
    }
    .skin-blue .main-header .logo {
      background-color: #005551 !important;
    }
    .skin-blue .main-header .navbar .sidebar-toggle:hover {
          background: rgba(0,0,0,0.1);
    }
    .skin-blue .sidebar-menu>li.active>a {
      border-left-color: #005551 !important;
    }
    .p10{
      padding : 10px;
    }
	.w-100{ width:100%  !important;}
	.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-1 {
  margin-top: 0.25rem !important;
}

.mt-2 {
  margin-top: 0.5rem !important;
}

.mt-3 {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.me-0 {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2 {
  margin-right: 0.5rem !important;
}

.me-3 {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3 {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2 {
  margin-left: 0.5rem !important;
}

.ms-3 {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.375rem + 1.5vw) !important;
}

.fs-2 {
  font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-3 {
  font-size: calc(1.3rem + 0.6vw) !important;
}

.fs-4 {
  font-size: calc(1.275rem + 0.3vw) !important;
}

.fs-5 {
  font-size: 1.25rem !important;
}

.fs-6 {
  font-size: 1rem !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-light {
  font-weight: 300 !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-normal {
  font-weight: 400 !important;
}

.fw-bold {
  font-weight: 700 !important;
}

.fw-bolder {
  font-weight: bolder !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-sm {
  line-height: 1.25 !important;
}

.lh-base {
  line-height: 1.5 !important;
}
#poduct span{ margin-left:10px !important; margin-top:20px !important; border:1px #D4D4D4 solid; padding-top:5px !important; padding-bottom:5px !important; padding-left:5px !important; padding-right:5px !important;}
</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<?php  $session_userdata = $this->session->userdata(SHOP_SESSION); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo base_url();?>admin" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>ES</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><img src="<?php echo base_url().'uploads/'. getWebOptionValue('backlogo');?>" alt="<?php echo  getWebOptionValue('site_title');?>"></span> </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
    <div class="navbar-custom-menu">
     <ul class="nav navbar-nav">
         <li><a class="btn btn-primary" data-toggle="modal" data-target="#myModal" href="#">Pream Distribution</a></li>
    </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url();?>backend_assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo (isset($session_userdata) && !empty($session_userdata) ?$session_userdata['owner_name'] .'('. $session_userdata['shop_reg_id'] .')': '');?></span> </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li> <a href="<?php echo base_url();?>shop/profile" class="btn btn-default btn-flat" style="width:100%;"><i class="fa fa-user"></i> My Profile</a> </li>
            <li> <a href="<?php echo base_url();?>shop/changePassword" class="btn btn-default btn-flat" style="width:100%;"><i class="fa fa-key"></i> change Password</a> </li>
            <li> <a href="<?php echo base_url();?>shop/logout" class="btn btn-default btn-flat" style="width:100%;"><i class="fa fa-sign-out"></i> Sign out</a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <style type="text/css">
   @media (max-width: 767px){
    .skin-blue .main-header .navbar .dropdown-menu li a{
        color: #000 !important;
    }
  }
  @media (max-width: 991px){
        .navbar-custom-menu>.navbar-nav>li>.dropdown-menu {
        background: #eee !important;
    }
  }
  .skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li.menu-open>a {
      color: #fff;
      background: #005551 !important ;
  }
  </style>
</header>
<!--Model open start-->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
          
       <!-- <h4 class="modal-title">Modal Heading</h4>-->
    <div class="d-flex flex-column text-center">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
            <?php /*?><div class="form-group">
                <input type="text" class="form-control" id="publicid"placeholder="Enter Customer public ID..">
            </div>
            <button type="button" class = "btn btn-primary btn-sm" name="search" id="public_id">Search</button><?php */?>
      </div>
</div>
      <!-- Modal body -->
      <div class="modal-body" id="userdetail" style="display:block;">
            <div class="row">
                <div class="col-lg-5">
                	<img src="<?php echo base_url()."uploads/pream-destribution-img1.jpg";//echo $image; ?>" style="width:100%;height:auto; margin-top:50%;">
                </div>
                <div class="col-sm-7" >
                    <div class="w-100" style="font-size:30px; line-height:40px; margin-bottom:20px; font-weight:bold">Pream Destribution</div>         
                    <div class="w-100 bg-light border" style="border:1px #999 solid; padding:30px; width:100%; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.10); float:left;">
                        <div class="w-100">
                            <?php         
                                $shop = $this->session->userdata(SHOP_SESSION);
                                $productlistdat=$this->Common_model->GetWhere('product', array("shop_id"=>$shop['shop_id']));
                                if(!empty($productlistdat)){
                                    ?>
                            <div class="">
                            <select class="form-control mb-3" id="productlist" onChange="changeproduclist()" style=" border:1px #F00 solid;" aria-describedby="basic-addon1">
                                <option >Select Product</option>
                                <?php 
                                foreach($productlistdat as $val){
                                    echo "<option value='".$val['product_id']."' data-val='".$val['name']."'>".$val['name']."</option>";
                                }
                                ?>
                            </select>
                            </div> 
                            <span class=" ml-2" id="poduct" style="margin-left:10px !important;"></span> 
                            <?php 
                                }
                            ?>
                            <div class="input-group mt-3">
                                <input type="text" class="form-control" id="publicid" placeholder="Enter User Public ID" aria-describedby="basic-addon1" style=" border:1px #F00 solid;">
                                <span class="input-group-addon glyphicon glyphicon-search" name="search" id="public_id" onclick="myfunction2()" style=" border:1px #F00 solid;" id="basic-addon1"></span>
                            </div>
                        </div>
                        <div id="userinfo" style="display:none;">
                        <div class="w-100" style="margin-top:20px; margin-top:30px; border-bottom:1px #C7C7C7 solid; color:#F00; font-size:22px;">User Information</div>
                        <div class="w-100" style="margin-top:20px;  border-bottom:1px #C7C7C7 solid; padding-bottom:20px;">
                            <table width="100%" border="0" style="font-size:16px;">
                              <tr style="padding-bottom:120px;"> 
                                <td rowspan="3"><img src="<?php echo base_url()."uploads/user-icon1.jpg";//echo $image; ?>" style="width:auto;height:auto"></td>
                                <td id="publicid1" style="font-weight:bold;">Customer not here</td>
                              </tr>
                              <!--<tr>-->
                              <!--  <td id="name" style="font-weight:bold;">Name</td>-->
                              <!--  <td>: Ram</td>-->
                              <!--</tr>-->
                              <!--<tr>-->
                              <!--  <td  id="checkin" style="font-weight:bold;">Check In Time</td>-->
                              <!--  <td>: 12:00PM</td>-->
                              <!--</tr>-->
                            </table>
                        </div>     
                        <div class="w-100" style="margin-top:10px; text-align:center;  color:#F00; font-weight:bold ;font-size:16px;">Amount Spent on this visit</div>
                            <div class="w-100" style="margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="4000" style="border:1px #F00 solid;">
                            </div>
                            <div class="w-100" style="margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;">      
                                <button type="submit" class="btn btn-danger amountpay" style="padding-left:20px; padding-right:20px;" onclick='myfunction(0)'>Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
<?php 
$customerdata=$this->session->tempdata('customerdata');
//echo "<pre>";print_r($customerdata);die;
?>
<div class="modal" id="myModal2">
<!--  <div class="modal-dialog modal-lg">-->
<!--    <div class="modal-content">-->

      <!-- Modal Header -->
<!--      <div class="modal-header">-->
          
       <!-- <h4 class="modal-title">Modal Heading</h4>-->
<!--            <div class="d-flex flex-column text-center">-->
<!--            <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--        <?php if(empty($customerdata)){?>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control" id="publicid"placeholder="Enter Customer public ID..">-->
<!--            </div>-->
<!--            <button type="button" class = "btn btn-primary btn-sm" name="search" id="public_id">Search</button>-->
<!--        <?php }?>-->
<!--      </div>-->
<!--    </div>-->
      <!-- Modal body -->
<!--      <div class="modal-body">-->
<!--            <?php 
            // if(!empty($customerdata['image'])){
            //     $image=base_url()."uploads/category/".$customerdata['image'];
            // }else if(empty($customerdata['image'])){-->
            //   $image=base_url()."backend_assets/dist/img/user2-160x160.jpg";
            // }
            ?>
            <?php /*?><div class="row">
			            <div class='col-sm-6' id='image122'><img src="<?php echo base_url()."uploads/pream-destribution-img1.jpg";//echo $image; ?>" style="width:100%;height:auto"></div>

			<div class='col-sm-6'>fnfjcgmhcb</div>
                <div class="col-sm-6" >
                   <p id="publicid12">Public Id: <?php echo ($customerdata['pablic_id']) ? $customerdata['pablic_id'] : '';?></p>
                   <p id="name">Name: <?php echo ($customerdata['name']) ? $customerdata['name'] : '';?></p>
                   <p id="checkin">Check In Time: <?php echo ($customerdata['checkintime']) ? $customerdata['checkintime'] : '';?></p>
                </div>
            </div><?php */?>
<!--            <div class="row">-->
            
<!--            <div class="col-lg-5">-->
                		<img src="<?php echo base_url()."uploads/pream-destribution-img1.jpg";//echo $image; ?>" style="width:100%;height:auto; margin-top:50%;">
<!--                </div>-->
                
                
<!--                <div class="col-sm-7" >-->
                           
<!--                   <div class="w-100" style="font-size:30px; line-height:40px; margin-bottom:20px; font-weight:bold">Pream Destribution</div>         -->
                            
<!--        <div class="w-100 bg-light border" style="border:1px #999 solid; padding:30px; width:100%; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.10); float:left;">-->
       
    
<!--<div class="w-100" style=" border-bottom:1px #C7C7C7 solid; color:#F00; font-size:22px;">User Information</div>-->

<!--<div class="w-100" style="margin-top:20px;  border-bottom:1px #C7C7C7 solid; padding-bottom:20px;">-->
<!--                 <table width="100%" border="0" style="font-size:16px;">-->
<!--  <tr style="padding-bottom:120px;"> -->
                   
    <td rowspan="3"><img src="<?php echo base_url()."uploads/user-icon1.jpg";//echo $image; ?>" style="width:auto;height:auto"></td>
<!--    <td id="publicid1" style="font-weight:bold;">Public Id</td>-->
<!--    <td>:1212</td>-->
<!--  </tr>-->
<!--  <tr>-->
<!--    <td id="name" style="font-weight:bold;">Name</td>-->
<!--    <td>: Ram</td>-->
<!--  </tr>-->
<!--  <tr>-->
<!--    <td  id="checkin" style="font-weight:bold;">Check In Time</td>-->
<!--    <td>: 12:00PM</td>-->
<!--  </tr>-->
<!--</table>-->

<!--              </div>-->
              

<!--<div class="w-100" style=" margin-top:10px; border-bottom:1px #C7C7C7 solid; color:#F00; font-size:22px;">Reciept of Destibution</div>-->
<!--              <div class="w-100" style="margin-top:20px;  border-bottom:1px #C7C7C7 solid; padding-bottom:20px;">-->
<!--                 <table width="100%" border="0" style="font-size:16px;">-->
<!--  <tr style="padding-bottom:120px;"> -->
                   
    
<!--    <td id="publicid1" style="font-weight:bold;">Amount Spent</td>-->
<!--    <td>:1212</td>-->
<!--  </tr>-->
<!--  <tr>-->
<!--    <td id="name" style="font-weight:bold;">Pream Awarded</td>-->
<!--    <td>: Ram</td>-->
<!--  </tr>-->
<!--  <tr>-->
<!--    <td  id="checkin" style="font-weight:bold;">Vendor Pream</td>-->
<!--    <td>: 12:00PM</td>-->
<!--  </tr>-->
<!--    <tr>-->
<!--    <td  id="checkin" style="font-weight:bold;">Global Pream</td>-->
<!--    <td>: 12:00PM</td>-->
<!--  </tr>-->
<!--</table>-->

<!--              </div>-->
              
            
<!--              <form>-->
<!--                <div class="">-->
<!--                    <div class="text-center" >-->
<!--                        <h4 class="">Reciept of Destribution</h4>-->
<!--                        Amount Spent :  <?php echo ($customerdata['amount']) ? $customerdata['amount'] : '0.00';?>-->
                        <!--<div class="form-group">-->
                        <!--    <input type="text" class="form-control" name="amount" value="" id="amount" required>-->
                        <!--</div>-->
<!--                        <br><br><a class="btn btn-danger" id="newdistribution">New Destribution</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--                  </div>-->
<!--                </div>-->
                
                      
<!--            </div>-->
<!--      </div>-->
	  
	  

      <!-- Modal footer -->
<!--      <div class="modal-footer">-->
            
<!--      </div>-->

<!--    </div>-->
<!--  </div>-->
</div>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <?php 
        $shop = $this->session->userdata(SHOP_SESSION);
        $shop_id=$shop['shop_id'];
    ?>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header" style="color: #fff"><?php echo (isset($session_userdata) && !empty($session_userdata) ?$session_userdata['owner_name'] . ' ('. $session_userdata['shop_reg_id'] .')': '');?></li>
      <li class="<?php echo (checkTabActive(array("index"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a> </li>
      <li class="<?php echo (checkTabActive(array("profile"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/profile"><i class="fa fa-user"></i> <span>Edit Profile</span></a> </li>
      <li class="<?php echo (checkTabActive(array("shopdetail"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/shopdetail"><i class="fa fa-user"></i> <span>Shop Detail</span></a> </li>
      <li> <a href="<?php echo base_url();?>shop/userdeails/<?php echo $shop_id; ?>"><i class="fa fa-user"></i> <span>User Detail</span></a> </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>shop/categories"><i class="fa fa-circle-o"></i> Category</a></li>
            <!--<li><a href="<?php echo base_url();?>shop/subcategories"><i class="fa fa-circle-o"></i> Sub category</a></li>-->
          </ul>
      </li>
      <li class="<?php echo (checkTabActive(array("productlist","addproduct"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/productlist"><i class="fa fa-cart-arrow-down"></i> <span>Products</span></a> </li>
      <li class="<?php echo (checkTabActive(array("neworders"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/neworders"><i class="fa fa-cart-arrow-down"></i> <span>New Orders</span></a> </li>
      <li class="<?php echo (checkTabActive(array("orderhistory"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/orderhistory"><i class="fa fa-cart-arrow-down"></i> <span>orderhistroy</span></a> </li>
      <li class="<?php echo (checkTabActive(array("chat"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/support_ticket"><i class="fa fa-comment"></i> <span>Support Chat</span></a> </li>
      <li class="<?php echo (checkTabActive(array("coupons"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/coupons"><i class="fa fa-comment"></i> <span>coupons</span></a> </li>
      <li><a href="<?php echo base_url();?>shop/faqlist"><i class="fa fa-question-circle"></i><span>FAQ</span></a>
      </li>
      <li><a href="<?php echo base_url();?>shop/feedback"><i class="fa fa-question-circle"></i><span>Feedback</span></a>
      </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Analytics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>shop/Total_Sales"><i class="fa fa-circle-o"></i>Total Sales</a></li>
            <li><a href="<?php echo base_url();?>shop/Total_Following_Users"><i class="fa fa-circle-o"></i>Total Following Users</a></li>
            <li><a href="<?php echo base_url();?>shop/Total_CheckIn_Users"><i class="fa fa-circle-o"></i>Total CheckIn Users</a></li>
            <li><a href="<?php echo base_url();?>shop/Tokens"><i class="fa fa-circle-o"></i> Tokens</a></li>
          </ul>
      </li>
      <li><a href="<?php echo base_url();?>shop/promotionlist"><i class="fa fa-question-circle"></i><span>Promotion List</span></a>
      </li>
       <li><a href="<?php echo base_url();?>shop/contact_us"><i class="fa fa-question-circle"></i><span>Contact Us</span></a>
      </li>
       <li><a href="<?php echo base_url();?>shop/Smart_Contract_Details"><i class="fa fa-question-circle"></i><span>Smart Contract Details</span></a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<script>
    
    function myfunction(id){
         var ammount=$(".amount").val();
         var id2=$("#publicid").val();
        if(ammount!=""){
            $("#userinfo").css("display","block");
        $.ajax({
          type:"POST",
          url:"<?php echo base_url()?>shop/amountpay",
          data:{ammount:ammount,id:id,id2:id2},
          dataType:"json",
          success:function(res){
              if(res.status==1){
                  if(res.data.seller_data.image!=""){
                      var img="<?php echo base_url()?>uploads/category/"+res.data.seller_data.image;
                  }else{
                      var img="<?php echo base_url();?>uploads/user-icon1.jpg";
                  }
                $.notify(res.msg, "success");
                    $("#myModal").css("display","none");
                 $("#myModal2").css("display","block");
                 var html="<div class='modal-dialog modal-lg'><div class='modal-content'><div class='modal-header'><div class='d-flex flex-column text-center'><button type='button' class='close' data-dismiss='modal'>&times;</button></div></div><div class='modal-body'><div class='row'><div class='col-lg-5'><img src='<?php echo base_url()."uploads/pream-destribution-img1.jpg"; ?>' style='width:100%;height:auto; margin-top:50%;'></div><div class='col-sm-7'><div class='w-100' style='font-size:30px; line-height:40px; margin-bottom:20px; font-weight:bold'>Pream Destribution</div><div class='w-100 bg-light border' style='border:1px #999 solid; padding:30px; width:100%; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.10); float:left;'><div class='w-100' style='border-bottom:1px #C7C7C7 solid; color:#F00; font-size:22px;'>User Information</div><div class='w-100' style='margin-top:20px;  border-bottom:1px #C7C7C7 solid; padding-bottom:20px;'><table width='100%' border='0' style='font-size:16px;'><tr style='padding-bottom:120px;'><td rowspan='3'><img src='"+img+"' style='width:100px;height:100px;'></td><td id='publicid1' style='font-weight:bold;'>Public Id</td><td>:"+res.data.seller_data.pablic_id+"</td></tr><tr><td id='name' style='font-weight:bold;'>Name</td><td>: "+res.data.seller_data.name+"</td></tr><tr><td  id='checkin' style='font-weight:bold;'>Check In Time</td><td>: "+res.data.seller_data.checkintime+"</td></tr></table></div><div class='w-100' style='margin-top:10px; border-bottom:1px #C7C7C7 solid; color:#F00; font-size:22px;'>Reciept of Destibution</div><div class='w-100' style='margin-top:20px;  border-bottom:1px #C7C7C7 solid; padding-bottom:20px;'><table width='100%' border='0' style='font-size:16px;'><tr style='padding-bottom:120px;'><td id='publicid1' style='font-weight:bold;'>Amount Spent</td><td>:"+res.data.ammount+"</td></tr><tr><td id='name' style='font-weight:bold;'>Pream Awarded</td><td>: "+res.data.seller_data.name+"</td></tr><tr><td  id='checkin' style='font-weight:bold;'>Vendor Pream</td><td>: "+res.data.seller_data.checkintime+"</td></tr><tr><td id='checkin' style='font-weight:bold;'>Pream point</td><td>: "+res.data.pream_points+"</td></tr><tr><td  id='checkin' style='font-weight:bold;'>Global Pream</td><td>: "+res.data.seller_data.checkintime+"</td></tr></table></div><div class=''><div class='text-center'><h4 class=''>Reciept of Destribution</h4>Amount Spent : "+res.data.ammount+"<br><br><a class='btn btn-danger' type='button' onclick='newDestri();'>New Destribution</a></div></div></div></div></div></div><div class='modal-footer'></div></div></div>";
                $("#myModal2").html(html);
              }else{
                    $.notify(res.msg, "error");
              }
              //$("#userdetail").html("<p id='publicid1'>Public Id:"+res.seller_data.pablic_id+"</p><p id='name'>Name: "+res.seller_data.name+"</p><p id='checkin'>Check In Time: "+res.seller_data.checkintime+"</p>");
          }
    });
        }else{
            $.notify("Please fill amount", "error");
        }
    }
    
     function myfunction2(){ 
         var public_id=$("#publicid").val();
         var productid=[];
            $("#poduct span").each(function(i,e){
              var elems =this.id;
            	productid.push({'id' : elems})
            })
        if(public_id!=""){
             $.ajax({
              type:"POST",
              url:"<?php echo base_url()?>shop/publiclist",
              data:{public_id:public_id,productid:productid},
              dataType:"json",
              success:function(res){
                  if(res.seller_data!="null"){
                      if(res.seller_data.image!=""){
                         var img='<?php echo base_url();?>uploads/category/'+res.seller_data.image;
                     }else{
                         var img='<?php echo base_url()?>uploads/user-icon1.jpg';
                     }
                     var html="<div class='row'>";
                     html+="<div class='col-lg-5'>";
                     html+=  "<img src='<?php echo base_url().'uploads/pream-destribution-img1.jpg';//echo $image; ?>' style='width:100%;height:auto; margin-top:50%;'>";
                     html+="</div>";
                     html+="<div class='col-sm-7'>";
                     html+="<div class='w-100' style='font-size:30px; line-height:40px; margin-bottom:20px; font-weight:bold'>";
                     html+="Pream Destribution";
                     html+="</div>";
                     html+="<div class='w-100 bg-light border' style='border:1px #999 solid; padding:30px; width:100%; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.10); float:left;'>";
                     html+="<div class='w-100'>";
                     <?php 
                            $shop = $this->session->userdata(SHOP_SESSION);
                            $productlistdat=$this->Common_model->GetWhere('product', array("shop_id"=>$shop['shop_id']));
                            if(!empty($productlistdat)){
                         ?>
                         html+="<div class=''>";
                         html+="<select class='form-control' id='productlist' onchange='changeproduclist()' style='border:1px #F00 solid;' aria-describedby='basic-addon1'>";
                         html+="<option >Select Product</option>";
                         <?php 
                         foreach($productlistdat as $val){ 
                             ?>
                            html+="<option value='<?php echo $val['product_id'];?>' data-val='<?php echo $val['name']; ?>'><?php echo $val['name']; ?></option>";
                        <?php  } ?>
                             html+="</select>";
                              $("#poduct span").each(function(i,e){
                              var pnmae=this.textContent;
                              html+="<span id='poduct'>"+pnmae+"</span>";
                            })
                             html+="</div>";
                    <?php } ?>
                             html+="<div class='input-group'>";
                             html+="<input type='text' class='form-control' id='publicid' placeholder='Enter User Public ID' aria-describedby='basic-addon1' style='border:1px #F00 solid;' value='"+res.seller_data.pablic_id+"'><span class='input-group-addon glyphicon glyphicon-search' name='search' id='public_id'  style='border:1px #F00 solid;' id='basic-addon1'></span></div>";
                             html+="</div>";
                             html+="<div class='w-100' style='margin-top:20px; margin-top:30px; border-bottom:1px #C7C7C7 solid; color:#F00; font-size:22px;'>User Information</div>";
                             html+="<div class='w-100' style='margin-top:20px;  border-bottom:1px #C7C7C7 solid; padding-bottom:20px;'>";
                             html+="<table width='100%' border='0' style='font-size:16px;'><tr style='padding-bottom:120px;'>";
                             html+="<td rowspan='3'>";
                             html+="<img src='"+img+"' style='width:100px;height:100px;'>";
                             html+="</td>";
                             html+="<td id='publicid1' style='font-weight:bold;'>Public Id</td>";
                             html+="<td>:"+res.seller_data.pablic_id+"</td>";
                             html+="</tr>";
                             html+="<tr>";
                             html+="<td id='name' style='font-weight:bold;'>Name</td>";
                             html+="<td>: "+res.seller_data.name+"</td>";
                             html+="</tr>";
                             html+="<tr>";
                             html+="<td  id='checkin' style='font-weight:bold;'>Check In Time</td>";
                             html+="<td>: "+res.seller_data.checkintime+"</td>";
                             //html+="</tr><tr><td  id='checkin' style='font-weight:bold;'>Preams Point</td>";
                           //  html+="<td>: "+res.pream_points+"</td>";
                             html+="</tr>";
                             html+="</table>";
                             html+="</div>";
                             html+="<div class='w-100' style='margin-top:10px; text-align:center;  color:#F00; font-weight:bold ;font-size:16px;'>Amount Spent on this visit</div>";
                             html+="<div class='w-100' style='margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;'>";
                             html+="<input type='text' class='form-control amount' id='inputEmail3' placeholder='4000' style='border:1px #F00 solid;'></div>";
                             html+="<div class='w-100' style='margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;'>";
                             html+="<button type='button' class='btn btn-danger' style='padding-left:20px; padding-right:20px;' onclick='myfunction("+res.seller_data.pablic_id+")'>Submit</button>";
                             html+="</div></div></div></div>";
                            $("#userdetail").html(html);
                  }else{
                    setTimeout(function(){location.reload()},1000);
                  }

                    }
            });
        }else{
            var html="<div class='row'>";
                     html+="<div class='col-lg-5'>";
                     html+=  "<img src='<?php echo base_url().'uploads/pream-destribution-img1.jpg';//echo $image; ?>' style='width:100%;height:auto; margin-top:50%;'>";
                     html+="</div>";
                     html+="<div class='col-sm-7'>";
                     html+="<div class='w-100' style='font-size:30px; line-height:40px; margin-bottom:20px; font-weight:bold'>";
                     html+="Pream Destribution";
                     html+="</div>";
                     html+="<div class='w-100 bg-light border' style='border:1px #999 solid; padding:30px; width:100%; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.10); float:left;'>";
                     html+="<div class='w-100'>";
                     <?php 
                            $shop = $this->session->userdata(SHOP_SESSION);
                            $productlistdat=$this->Common_model->GetWhere('product', array("shop_id"=>$shop['shop_id']));
                            if(!empty($productlistdat)){
                         ?>
                         html+="<div class=''>";
                         html+="<select class='form-control' id='productlist' onchange='changeproduclist()' style='border:1px #F00 solid;' aria-describedby='basic-addon1'>";
                         html+="<option >Select Product</option>";
                         <?php 
                         foreach($productlistdat as $val){ 
                            $pid= $val['product_id'];
                             ?>
                             var pid='<?php echo $pid; ?>';//console.log("pid="+pid+"res.productlist.pream_points="+res.productlist.pream_points);
                            //  if(res.productlist.pream_points==pid){
                            //     html+="<option value='<?php echo $val['product_id'];?>' selected><?php echo $val['name']; ?></option>";<?php //echo "<option value='".$val['product_id']."'>".$val['name']."</option>"; ?>;
                            //   }else{
                                 html+="<option value='<?php echo $val['product_id'];?>' data-val='<?php echo $val['name']; ?>'><?php echo $val['name']; ?></option>";
                             // }
                        <?php  } ?>
                             html+="</select>";
                             html+="</div>";
                             //if(productid!=""){
                              $("#poduct span").each(function(i,e){
                                  var pnmae=this.textContent;
                                  html+="<span id='poduct'>"+pnmae+"</span><br>";
                            })
                            // }
                            // html+="<br><div id='poduct'></div><br>";
                    <?php } ?>
                             html+="<div class='input-group'>";
                             html+="<input type='text' class='form-control' id='publicid' placeholder='Enter User Public ID' aria-describedby='basic-addon1' style='border:1px #F00 solid;' value=''><span class='input-group-addon glyphicon glyphicon-search' name='search' id='public_id'  style='border:1px #F00 solid;' id='basic-addon1'></span></div>";
                             html+="<p id='error1' class='text-danger'>Please Fill Public ID</p></div>";
                             html+="<div class='w-100' style='margin-top:20px; margin-top:30px; border-bottom:1px #C7C7C7 solid; color:#F00; font-size:22px;'>User Information</div>";
                             html+="<div class='w-100' style='margin-top:20px;  border-bottom:1px #C7C7C7 solid; padding-bottom:20px;'>";
                             html+="<table width='100%' border='0' style='font-size:16px;'><tr style='padding-bottom:120px;'>";
                             html+="<td rowspan='3'>";
                             html+="Please enter valid Pablic Id";
                             html+="</td>";
                            //  html+="<td id='publicid1' style='font-weight:bold;'>Public Id</td>";
                            //  html+="<td>:"+res.seller_data.pablic_id+"</td>";
                            //  html+="</tr>";
                            //  html+="<tr>";
                            //  html+="<td id='name' style='font-weight:bold;'>Name</td>";
                            //  html+="<td>: "+res.seller_data.name+"</td>";
                            //  html+="</tr>";
                            //  html+="<tr>";
                            //  html+="<td  id='checkin' style='font-weight:bold;'>Check In Time</td>";
                            //  html+="<td>: "+res.seller_data.checkintime+"</td>";
                             html+="</tr>";
                             html+="</table>";
                             html+="</div>";
                             //html+="<div class='w-100' style='margin-top:10px; text-align:center;  color:#F00; font-weight:bold ;font-size:16px;'>Amount Spent on this visit</div>";
                            // html+="<div class='w-100' style='margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;'>";
                             //html+="<input type='text' class='form-control amount' id='inputEmail3' placeholder='4000' style='border:1px #F00 solid;'></div>";
                            // html+="<div class='w-100' style='margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;'>";
                             //html+="<button type='button' class='btn btn-danger' style='padding-left:20px; padding-right:20px;' onclick='myfunction()'>Submit</button>";
                             html+="</div></div></div></div>";
                            $("#userdetail").html(html);
                            setTimeout(function(){location.reload()},1000);
            //$("#userdetail").html("<div class='row'><div class='col-lg-5'><img src='<?php echo base_url().'uploads/pream-destribution-img1.jpg';//echo $image; ?>' style='width:100%;height:auto; margin-top:50%;'></div><div class='col-sm-7'><div class='w-100' style='font-size:30px; line-height:40px; margin-bottom:20px; font-weight:bold'>Pream Destribution</div><div class='w-100 bg-light border' style='border:1px #999 solid; padding:30px; width:100%; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.10); float:left;'><div class='w-100'><div class='input-group'><input type='text' class='form-control' id='publicid' placeholder='Enter User Public ID' aria-describedby='basic-addon1' style='border:1px #F00 solid;' value=''><span class='input-group-addon glyphicon glyphicon-search' name='search' onclick='myfunction2()' id='public_id'  style='border:1px #F00 solid;' id='basic-addon1'></span></div><p id='error1' class='text-danger'>Please Fill Public ID</p></div><div class='w-100' style='margin-top:20px; margin-top:30px; border-bottom:1px #C7C7C7 solid; color:#F00; font-size:22px;'>User Information</div><div class='w-100' style='margin-top:20px;  border-bottom:1px #C7C7C7 solid; padding-bottom:20px;'><table width='100%' border='0' style='font-size:16px;'><tr style='padding-bottom:120px;'><td rowspan='3'><img src='<?php echo base_url();?>uploads/user-icon1.jpg?>' style='width:100px;height:100px;'></td><td>Customer not registerd</td></tr></table></div><div class='w-100' style='margin-top:10px; text-align:center;  color:#F00; font-weight:bold ;font-size:16px;'>Amount Spent on this visit</div><div class='w-100' style='margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;'><input type='text' class='form-control amount' id='inputEmail3' placeholder='4000' style='border:1px #F00 solid;'></div><div class='w-100' style='margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;'><p id='error'></p><button type='button' class='btn btn-danger' style='padding-left:20px; padding-right:20px;' onclick='myfunction(0)'>Submit</button></div></div></div></div>");
        //$("#userdetail").html(html);

                            //  html+="<td id='publicid1' style='font-weight:bold;'>Public Id</td>";
                            //  html+="<td>:"+res.seller_data.pablic_id+"</td>";
                            //  html+="</tr>";
                            //  html+="<tr>";
                            //  html+="<td id='name' style='font-weight:bold;'>Name</td>";
                            //  html+="<td>: "+res.seller_data.name+"</td>";
                            //  html+="</tr>";
                            //  html+="<tr>";
                            //  html+="<td  id='checkin' style='font-weight:bold;'>Check In Time</td>";
                            //  html+="<td>: "+res.seller_data.checkintime+"</td>";
                            //  html+="</tr>";
                            //  html+="</table>";
                            //  html+="</div>";
                            //  html+="<div class='w-100' style='margin-top:10px; text-align:center;  color:#F00; font-weight:bold ;font-size:16px;'>Amount Spent on this visit</div>";
                            //  html+="<div class='w-100' style='margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;'>";
                            //  html+="<input type='text' class='form-control amount' id='inputEmail3' placeholder='4000' style='border:1px #F00 solid;'></div>";
                            //  html+="<div class='w-100' style='margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;'>";
                            //  html+="<button type='button' class='btn btn-danger' style='padding-left:20px; padding-right:20px;' onclick='myfunction("+res.seller_data.pablic_id+")'>Submit</button>";
                            //  html+="</div></div></div></div>";   
        }
        
    }
    function newDestri(){
        $("#myModal2").hide();
        $("#myModal").css("display","block");
        setTimeout(function(){location.reload()},1000);
    }
    $(document).ready(function(){
    $(document).on('click', '.close', function(){
        // $("#myModal2").hide();
        // $("#myModal").hide();
          setTimeout(function(){location.reload()},1000);
    });
    });
    
    function changeproduclist(){
       var pr= $("#productlist option:selected").text();
       var pid=$("#productlist option:selected").val();
       if(pr!="Select Product"){
            $("#poduct").append("<span id='"+pid+"' data-value='"+pr+"'>"+pr+"</span>");
       }
    }
</script>