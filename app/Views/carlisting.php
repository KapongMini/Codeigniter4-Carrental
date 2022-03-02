<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Car Rental Portal | Car Listing</title>
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
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Start Switcher -->
  <?php include('includes/colorswitcher.php'); ?>
  <!-- /Switcher -->

  <!--Header-->
  <?php include('includes/header.php'); ?>
  <!-- /Header -->

  <!--Page Header-->
  <section class="page-header listing_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>ລາຍການລົດ</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="#">ໜ້າຫຼັກ</a></li>
          <li>ລາຍການລົດ</li>
        </ul>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <!-- /Page Header-->

  <!--Listing-->
  <section class="listing-page">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-push-3">
          <div class="result-sorting-wrapper">
            <div class="sorting-count">


              <p><span><?php echo $vehicles ?> ລາຍການ</span></p>
            </div>
          </div>

          <?php
          foreach ($results as $result) {  ?>
            <div class="product-listing-m gray-bg">
              <div class="product-listing-img"><img src="<?= base_url('back/img/vehicleimages/' . $result['Vimage1']); ?>" class="img-responsive" alt="Image" /> </a>
              </div>
              <div class="product-listing-content">
                <h5><a href="<?= base_url('Vehicle_details/' . $result['id_vehicle']); ?>"><?= $result['Brands']; ?> , <?= $result['VehiclesTitle']; ?> </a></h5>
                <p class="list-price">$<?= $result['PricePerDay']; ?> ຕໍ່ມື້</p>
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i><?= $result['SeatingCapacity']; ?> ບ່ອນນັ່ງ</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i><?= $result['ModelYear']; ?> model</li>
                  <li><i class="fa fa-car" aria-hidden="true"></i><?= $result['FuelType']; ?></li>
                </ul>
                <a href="<?= base_url('Vehicle_details/' . $result['id_vehicle']); ?>" class="btn">ເບິ່ງ​ລາຍ​ລະ​ອຽດ <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
              </div>
            </div>
            
          <?php } ?>
          
          <?= $pager->links('carlist','Carlist_paggination') ?>
          
       
        </div>


        <!--Side-Bar-->
        <aside class="col-md-3 col-md-pull-9">
          <div class="sidebar_widget">
            <div class="widget_heading">
              <h5><i class="fa fa-filter" aria-hidden="true"></i> ຊອກຫາລົດຂອງທ່ານ </h5>
            </div>
            <div class="sidebar_filter">
              <form action="<?= base_url('car_listing/search'); ?>" method="post" id="form4">
                <div class="form-group select">
                  <select class="form-control required" name="brand">
                    <option selected disabled>ເລືອກຍີ່ຫໍ້</option>
                    <?php
                    foreach ($findbrand as $result) {       ?>

                      <option value="<?= $result->id; ?>"><?= $result->Brands; ?></option>
                    <?php } ?>

                  </select>
                </div>
                <div class="form-group select">
                  <select class="form-control required" name="fueltype">
                    <option selected disabled>ເລືອກປະເພດນ້ຳມັນ</option>
                    <option value="Petrol">Petrol</option>
                    <option value="Diesel">Diesel</option>
                    <option value="CNG">CNG</option>
                  </select>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> ຄົ້ນຫາລົດ</button>
                </div>
              </form>
            </div>
          </div>

          <div class="sidebar_widget">
            <div class="widget_heading">
              <h5><i class="fa fa-car" aria-hidden="true"></i> ລົດທີ່ຈົດທະບຽນລ່າສຸດ</h5>
            </div>
            <div class="recent_addedcars">
              <ul>
                <?php
                foreach ($findcar2 as $results) {  ?>

                  <li class="gray-bg">
                    <div class="recent_post_img"> <a href="<?= base_url('Vehicle_details/' . $results->id_vehicle); ?>"><img src="<?= base_url('back/img/vehicleimages/' . $results->Vimage1); ?>" alt="image"></a> </div>
                    <div class="recent_post_title"> <a href="<?= base_url('Vehicle_details/' . $results->id_vehicle); ?>"> <?= $results->Brands; ?> , <?= $results->VehiclesTitle; ?> </a>
                      <p class="widget_price">$ <?= $results->PricePerDay; ?> / ມື້</p>
                    </div>
                  </li>

                <?php } ?>
              </ul>
            </div>
          </div>
        </aside>
        <!--/Side-Bar-->
      </div>
    </div>
  </section>
  <!-- /Listing-->

  <!--Footer -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
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
  <script src="<?= site_url() ?>assets/js/validateselect.js"></script>




</body>

</html>