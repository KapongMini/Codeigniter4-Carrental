

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal | My Testimonials </title>
<!--Bootstrap -->
<link rel="stylesheet" href="<?= site_url() ?>assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="<?= site_url() ?>assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="<?= site_url() ?>assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?= site_url() ?>assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="<?= site_url() ?>assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="<?= site_url() ?>assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="<?= site_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="<?= site_url() ?>assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url() ?>assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url() ?>assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url() ?>assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url() ?>assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url() ?>assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= site_url() ?>assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= site_url() ?>assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= site_url() ?>assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= site_url() ?>assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?= site_url() ?>assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?= site_url() ?>assets/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
</head>
<body>
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>ຄໍາຕິຊົມຂອງຂ້ອຍ</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">ໜ້າຫຼັກ</a></li>
        <li>ຄໍາຕິຊົມຂອງຂ້ອຍ</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> <img src="assets/images/person5.png" alt="image">
      </div>

      <div class="dealer_info">
          <h5>ຊື່: <?= $userdata['FullName']; ?></h5>
          <p><?= $userdata['Address']; ?><br>
            <?= $userdata['City']; ?> &nbsp;<?= $userdata['Country']; ?></p>
        </div>
    </div>
  
  <div class="row">
      <div class="col-md-3 col-sm-3">
        <?php include('includes/sidebar.php');?>
      <div class="col-md-8 col-sm-8">



        <div class="profile_wrap">
          <h5 class="uppercase underline">ຄໍາຕິຊົມຂອງຂ້ອຍ </h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">

<?php foreach($results as $result): ?>
              <li>
           
                <div>
                 <h5><?= $result->Testimonial; ?> </h5>
                   <p><b>ໂພສວັນທີ:</b> <?= $result->PostingDate; ?> </p>
                </div>
                <?php if($result->status==1){ ?>
                 <div class="vehicle_status"> <a class="btn outline btn-xs active-btn">ເຄື່ອນໄຫວ</a>

                  <div class="clearfix"></div>
                  </div>
                  <?php } else {?>
               <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">ລໍຖ້າການອະນຸມັດ</a>
                  <div class="clearfix"></div>
                  </div>
                  <?php } ?>
              </li>
            <?php endforeach; ?>
              
            </ul>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles--> 

<<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>

<!-- Scripts --> 
<script src="<?= site_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= site_url() ?>assets/js/bootstrap.min.js"></script> 
<script src="<?= site_url() ?>assets/js/interface.js"></script> 
<!--Switcher-->
<script src="<?= site_url() ?>assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="<?= site_url() ?>assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="<?= site_url() ?>assets/js/slick.min.js"></script> 
<script src="<?= site_url() ?>assets/js/owl.carousel.min.js"></script>
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
