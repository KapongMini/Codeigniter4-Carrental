
  <!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal | My Profile</title>
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
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>ໂປຣໄຟລ໌ຂອງເຈົ້າ</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">ໜ້າຫຼັກ</a></li>
        <li>ໂປຣໄຟລ໌</li>
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
      <div class="upload_user_logo"> <img src="<?= site_url()?>assets/images/person5.png" alt="image">
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
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">ການ​ຕັ້ງ​ຄ່າ​ທົ່ວ​ໄປ</h5>
          <?php if(!empty(session()->getFlashdata('faill'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('faill');?></div>
                    <?php endif; ?>

                    <?php if(!empty(session()->getFlashdata('successs'))) : ?>
                        <div class="alert alert-info"><?= session()->getFlashdata('successs');?></div>
                    <?php endif; ?>
          <form  method="post" action="<?= base_url('profile/update');?>">
           <div class="form-group">
              <label class="control-label">ວັນທີສ້າງ -</label>
              <?= $userdata['RagDate']; ?>
            </div>
             <?php if($userdata['UpdationDate']!=""){ ?>
            <div class="form-group">
              <label class="control-label">ອັບເດດຫຼ້າສຸດຢູ່ທີ່  -</label>
             <?= $userdata['UpdationDate']; ?>
            </div>
            <?php } ?>
            <div class="form-group">
              <label class="control-label">ຊື່​ເຕັມ</label>
              <input class="form-control white_bg" name="fullname" value="<?= $userdata['FullName']; ?>" id="fullname" type="text"  required>
            </div>
            <div class="form-group">
              <label class="control-label">ທີ່​ຢູ່​ອີ​ເມວ</label>
              <input class="form-control white_bg" value="<?= $userdata['Emailld']; ?>" name="Emailld" id="email" type="email" required readonly>
            </div>
            <div class="form-group">
              <label class="control-label">ເບີ​ໂທລະ​ສັບ</label>
              <input class="form-control white_bg" name="mobilenumber" value="<?= $userdata['ContactNo']; ?>" id="phone-number" type="text" required>
            </div>
            <div class="form-group">
              <label class="control-label">ວັນ​ເດືອນ​ປີ​ເກີດ&nbsp;(ວ/ດ/ປ)</label>
              <input class="form-control white_bg" value="<?= $userdata['dob']; ?>" name="dob" placeholder="ວ/ດ/ປ" id="birth-date" type="text" >
            </div>
            <div class="form-group">
              <label class="control-label">ທີ່ຢູ່ຂອງເຈົ້າ</label>
              <textarea class="form-control white_bg" name="address" rows="4" ><?= $userdata['Address']; ?></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">ປະເທດ</label>
              <input class="form-control white_bg"  id="country" name="country" value="<?= $userdata['Country']; ?>" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">ເມືອງ</label>
              <input class="form-control white_bg" id="city" name="city" value="<?= $userdata['City']; ?>" type="text">
            </div>
            

            <div class="form-group">
              <button type="submit" name="updateprofile" class="btn">ບັນ​ທຶກ​ <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting--> 

<<!--Footer -->
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
</html>
