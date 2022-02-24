
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal</title>
<!--Bootstrap -->
<link rel="stylesheet" href="<?= site_url()?>assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?= site_url()?>assets/css/style.css" type="text/css">
<link rel="stylesheet" href="<?= site_url()?>assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?= site_url()?>assets/css/owl.transitions.css" type="text/css">
<link href="<?= site_url()?>assets/css/slick.css" rel="stylesheet">
<link href="<?= site_url()?>assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="<?= site_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="<?= site_url()?>assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= site_url()?>assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= site_url()?>assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= site_url()?>assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?= site_url()?>assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?= site_url()?>assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>ຊອກຫາລົດທີ່   ເໝາະສົມສໍາລັບທ່ານ.</h1>
            <p>ພວກເຮົາມີລົດຫຼາຍກ່ວາພັນຄັນໃຫ້ທ່ານເລືອກຕາມຄວາມຕ້ອງການ. </p>
            <a href="#" class="btn">ອ່ານ​ເພີ່ມເຕິມ <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>ຊອກຫາສິ່ງທີ່ດີທີ່ສຸດ <span>ລົດ​ສໍາ​ລັບ​ທ່ານ​</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">ລົດໃໝ່</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php foreach($vehicles as $row): ?>

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="<?= base_url('Vehicle_details/'.$row->id_vehicle) ;?>"><img src="back/img/vehicleimages/<?= $row->Vimage1?>" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?= $row->FuelType; ?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?= $row->ModelYear; ?> Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i><?= $row->SeatingCapacity; ?> ບ່ອນນັ່ງ</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="<?= base_url('Vehicle_details/'.$row->id_vehicle) ;?>"><?= $row->Brands; ?>,<?= $row->VehiclesTitle; ?></a></h6>
<span class="price">$<?= $row->PricePerDay; ?> /ມື້</span> 
</div>
<div class="inventory_info_m">
<p><?= $row->VehiclesOverview; ?></p>
</div>
</div>
</div>
<?php endforeach; ?>
       
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 

<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
            <p>ປີໃນທຸລະກິດນີ້</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
            <p>ລົດໃຫມ່ສໍາລັບການຂາຍ</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
            <p>ຂາຍລົດມືສອງ</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
            <p>ລູກຄ້າທີ່ພໍໃຈ</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>ຄວາມເພິ່ງພໍໃຈຂອງ <span>ລູກຄ້າ</span></h2>
    </div>
    <div class="row">
        <div id="testimonial-slider">
          
         
        <?php foreach($showtest as $result){?>
              <div class="testimonial-m">
                <div class="testimonial-img"> <img src="<?php base_url()?>assets/images/cat-profile.png" alt="" /> </div>
                <div class="testimonial-content">
                  <div class="testimonial-heading">
                    <h5><?= $result->FullName; ?></h5>
                    <p><?= $result->Testimonial; ?></p>
                  </div>
                </div>
              </div>
              <?php } ?>
          
        </div>
      </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="<?= site_url()?>assets/js/jquery.min.js"></script>
<script src="<?= site_url()?>assets/js/bootstrap.min.js"></script> 
<script src="<?= site_url()?>/js/interface.js"></script> 
<!--Switcher-->
<script src="<?= site_url()?>assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="<?= site_url()?>assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="<?= site_url()?>assets/js/slick.min.js"></script> 
<script src="<?= site_url()?>assets/js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
  $(document).ready(function(){
   
    <?php if(!empty(session()->getFlashdata('success'))) :?>
      swal({
  title: "<?= session()->getFlashdata('success') ;?>",
  text: "<?= session()->getFlashdata('success_text') ;?>",
  icon: "<?= session()->getFlashdata('success_icon') ;?>",
  button: "Ok",
});

    <?php endif; ?>

  });
</script>
<script>
  $(document).ready(function(){
   
    <?php if(!empty(session()->getFlashdata('fail'))) :?>
      swal({
  title: "<?= session()->getFlashdata('fail') ;?>",
  text: "<?= session()->getFlashdata('fail_text') ;?>",
  icon: "<?= session()->getFlashdata('fail_icon') ;?>",
  button: "Ok",
});

    <?php endif; ?>

  });
</script>


</body>


</html>