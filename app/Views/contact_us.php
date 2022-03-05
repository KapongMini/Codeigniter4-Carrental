
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal | Contact Us</title>
<!--Bootstrap -->
<link rel="stylesheet" href="<?= site_url()?>assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="<?= site_url()?>assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="<?= site_url()?>assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?= site_url()?>assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="<?= site_url()?>assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="<?= site_url()?>assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="<?= site_url()?>assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="<?= site_url()?>assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url()?>assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
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

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>ຕິດ​ຕໍ່​ພວກ​ເຮົາ</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">ໜ້າຫຼັກ</a></li>
        <li>ຕິດ​ຕໍ່​ພວກ​ເຮົາ</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        <h3>ຕິດຕໍ່ໄດ້ໂດຍໃຊ້ແບບຟອມຂ້າງລຸ່ມນີ້</h3>
        <?php if(!empty(session()->getFlashdata('failll'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('failll');?></div>
                    <?php endif; ?>

                    <?php if(!empty(session()->getFlashdata('successss'))) : ?>
                        <div class="alert alert-info"><?= session()->getFlashdata('successss');?></div>
                    <?php endif; ?>
        <div class="contact_form gray-bg">
          <form  method="post" action="<?= site_url('contact_us/sent') ?>">
            <div class="form-group">
              <label class="control-label">ຊື່​ເຕັມ <span>*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">ທີ່​ຢູ່​ອີ​ເມວ <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">ເບີ​ໂທລະ​ສັບ <span>*</span></label>
              <input type="text" name="contactno" class="form-control white_bg" id="phonenumber" required>
            </div>
            <div class="form-group">
              <label class="control-label">ຂໍ້ຄວາມ <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">ສົ່ງ​ຂໍ້​ຄວາມ <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6"> 
        <h3>ຂໍ້​ມູນ​ຕິດ​ຕໍ່</h3>
        <div class="contact_detail">
   <?php foreach($contactinfo as $result): ?>
          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m"><?=  $result->Address;?></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="tel:61-1234-567-90"><?=  $result->ContactNo;?></a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="mailto:contact@exampleurl.com"><?=  $result->Email;?></a></div>
            </li>
          </ul>
  <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Contact-us--> 


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
<script src="<?= site_url()?>assets/js/interface.js"></script> 
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

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->
</html>
