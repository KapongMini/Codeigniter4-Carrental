<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Car Rental Portal | About Page</title>
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
  <!--card -->
  <link href="<?= site_url() ?>assets/css/card.css" rel="stylesheet">

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
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Start Switcher -->
  <?php include('includes/colorswitcher.php'); ?>
  <!-- /Switcher -->

  <!--Header-->
  <?php include('includes/header.php'); ?>

  <section class="page-header aboutus_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1><?= $tital ?></h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="#">?????????????????????</a></li>
          <li><?= $tital; ?></li>
        </ul>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <section class="about_us section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="<?= site_url() ?>assets/images/ptx.png" alt="pong" style="width:100%;border-top-left-radius: 5px;
    border-top-right-radius: 5px;">
            <hr>
            <h3>Pong KST</h3>
            <p class="titlel">Backend Developer</p>
            <p>University of laos</p>
            <p><a href="#"><i class="fa fa-dribbble acard"></i></a>
            <a href="#"><i class="fa fa-twitter acard"></i></a>
            <a href="#"><i class="fa fa-linkedin acard"></i></a>
            <a href="#"><i class="fa fa-facebook acard"></i></a></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="<?= site_url() ?>assets/images/ptx1.png" alt="sin" style="width:100%;border-top-left-radius: 5px;
    border-top-right-radius: 5px;">
            <hr>
            <h3>Sinxay XBM</h3>
            <p class="titlel">Design Developer</p>
            <p>University of laos</p>
            
            <p><a href="#"><i class="fa fa-dribbble acard"></i></a>
            <a href="#"><i class="fa fa-twitter acard"></i></a>
            <a href="#"><i class="fa fa-linkedin acard"></i></a>
            <a href="#"><i class="fa fa-facebook acard"></i></a></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="<?= site_url() ?>assets/images/ptx2.png" alt="many" style="width:100%;border-top-left-radius: 5px;
    border-top-right-radius: 5px;">
            <hr>
            <h3>Manythong YBD</h3>
            <p class="titlel">Frontend Developer</p>
            <p>University of laos</p>
            <p><a href="#"><i class="fa fa-dribbble acard"></i></a>
            <a href="#"><i class="fa fa-twitter acard"></i></a>
            <a href="#"><i class="fa fa-linkedin acard"></i></a>
            <a href="#"><i class="fa fa-facebook acard"></i></a></p>
          </div>
        </div>
      </div>

<br><br>
      <div class="section-header text-center">


        <?php foreach ($result as $vlue) : ?>

          <p><?= $vlue->detail; ?></p>
      </div>
    <?php endforeach; ?>
    </div>
  </section>
  <!-- /About-us-->

  <<!--Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- /Footer-->

    <!--Back to top-->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!--/Back to top-->

    <!--Login-Form -->
    <?php include('includes/login.php'); ?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php'); ?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php'); ?>
    <!--/Forgot-password-Form -->

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
      $(document).ready(function() {

        <?php if (!empty(session()->getFlashdata('success'))) : ?>
          swal({
            title: "<?= session()->getFlashdata('success'); ?>",
            text: "<?= session()->getFlashdata('success_text'); ?>",
            icon: "<?= session()->getFlashdata('success_icon'); ?>",
            button: "Ok",
          });

        <?php endif; ?>

      });
    </script>
    <script>
      $(document).ready(function() {

        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
          swal({
            title: "<?= session()->getFlashdata('fail'); ?>",
            text: "<?= session()->getFlashdata('fail_text'); ?>",
            icon: "<?= session()->getFlashdata('fail_icon'); ?>",
            button: "Ok",
          });

        <?php endif; ?>

      });
    </script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:12 GMT -->

</html>