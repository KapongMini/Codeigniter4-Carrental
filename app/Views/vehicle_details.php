<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Car Rental Port | Vehicle Details</title>
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

  <!--Listing-Image-Slider-->
  <?php
  foreach ($vehicles as $result) {

  ?>
    <section id="listing_img_slider">
      <div><img src="<?= base_url('back/img/vehicleimages/' . $result->Vimage1); ?>" class="img-responsive" alt="image" width="900" height="560"></div>
      <div><img src="<?= base_url('back/img/vehicleimages/' . $result->Vimage2); ?>" class="img-responsive" alt="image" width="900" height="560"></div>
      <div><img src="<?= base_url('back/img/vehicleimages/' . $result->Vimage3); ?>" class="img-responsive" alt="image" width="900" height="560"></div>
      <div><img src="<?= base_url('back/img/vehicleimages/' . $result->Vimage4); ?>" class="img-responsive" alt="image" width="900" height="560"></div>
      <?php if ($result->Vimage5 == "") {
      } else {
      ?>
        <div><img src="<?= base_url('back/img/vehicleimages/' . $result->Vimage5); ?>" class="img-responsive" alt="image" width="900" height="560"></div>
      <?php } ?>
    </section>
    <!--/Listing-Image-Slider-->


    <!--Listing-detail-->
    <section class="listing-detail">
      <div class="container">
        <div class="listing_detail_head row">
          <div class="col-md-9">
            <h2> <?= $result->Brands; ?>, <?= $result->VehiclesTitle; ?> </h2>
          </div>
          <div class="col-md-3">
            <div class="price_info">
              <p>$<?= $result->PricePerDay; ?> </p>ຕໍ່​ມື້ 

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <div class="main_features">
              <ul>

                <li> <i class="fa fa-calendar" aria-hidden="true"></i>
                  <h5> <?= $result->ModelYear; ?></h5>
                  <p>ປີຂອງລົດ</p>
                </li>
                <li> <i class="fa fa-cogs" aria-hidden="true"></i>
                  <h5> <?= $result->FuelType; ?></h5>
                  <p>ປະເພດນໍ້າມັນ</p>
                </li>

                <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
                  <h5> <?= $result->SeatingCapacity; ?></h5>
                  <p>ບ່ອນນັ່ງ</p>
                </li>
              </ul>
            </div>
            <div class="listing_more_info">
              <div class="listing_detail_wrap">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs gray-bg" role="tablist">
                  <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">ພາບລວມຂອງຍານພາຫະນະ </a></li>

                  <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">ອຸປະກອນເສີມ</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <!-- vehicle-overview -->
                  <div role="tabpanel" class="tab-pane active" id="vehicle-overview">

                    <p><?= $result->VehiclesOverview; ?></p>
                  </div>


                  <!-- Accessories -->
                  <div role="tabpanel" class="tab-pane" id="accessories">
                    <!--Accessories-->
                    <table>
                      <thead>
                        <tr>
                          <th colspan="2">ອຸປະກອນເສີມ</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>ເຄື່ອງ​ປັບ​ອາ​ກາດ</td>
                          <?php if ($result->AirConditioner == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>

                        <tr>
                          <td>ລະບົບເບກ AntiLock</td>
                          <?php if ($result->AntiLockBrakingSystem == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>

                        <tr>
                          <td>ພວງມະໄລພະລັງງານ</td>
                          <?php if ($result->PowerSteering == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>


                        <tr>

                          <td>ແວ່ນໄຟຟ້າ</td>

                          <?php if ($result->PowerWindows == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>

                        <tr>
                          <td>ເຄື່ອງ​ຫຼີ້ນ​ຊີ​ດີ</td>
                          <?php if ($result->CDPlayer == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>

                        <tr>
                          <td>ບ່ອນນັ່ງຫນັງ</td>
                          <?php if ($result->LeatherSeats == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>

                        <tr>
                          <td>ຕົວລັອກ Central</td>
                          <?php if ($result->CentralLocking == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>

                        <tr>
                          <td>ລັອກປະຕູໄຟຟ້າ</td>
                          <?php if ($result->PowerDoorLocks == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>
                        <tr>
                          <td>ເບກຊ່ວຍ</td>
                          <?php if ($result->BrakeAssist == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php  } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>

                        <tr>
                          <td>ຖົງລົມນິລະໄພຄົນຂັບ</td>
                          <?php if ($result->DriverAirbag == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>

                        <tr>
                          <td>ຖົງລົມນິລະໄພຜູ້ໂດຍສານ</td>
                          <?php if ($result->PassengerAirbag == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>

                        <tr>
                          <td>ເຊັນເຊີການຂັດຂ້ອງ</td>
                          <?php if ($result->CrashSensor == 1) {
                          ?>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                          <?php } else { ?>
                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                          <?php } ?>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          <?php } ?>
          </div>

          <!--Side-Bar-->
          <aside class="col-md-3">

            <div class="share_vehicle">
              <p>ແບ່ງປັນ: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
            </div>
            <div class="sidebar_widget">
              <div class="widget_heading">
                <h5><i class="fa fa-envelope" aria-hidden="true"></i>ຈອງດຽວນີ້</h5>
              </div>
              <form method="post" action="<?= base_url('Vdetails/savebook') ?>">
              <div class="form-group">
                <input type="hidden" name="id_vehicle" value="<?= $result->id_vehicle; ?>" id="">
              </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="fromdate" placeholder="ຈາກວັນທີ(ວ/ດ/ປ)" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="todate" placeholder="ເຖິງວັນທີ(ວ/ດ/ປ)" required>
                </div>
                <div class="form-group">
                  <textarea rows="4" class="form-control" name="message" placeholder="ຂໍ້ຄວາມ" required></textarea>
                </div>
                <?php if (session()->get('loggedUser')) { ?>
                  <div class="form-group">
                    <input type="submit" class="btn" name="submit" value="ຈອງເລີຍ">
                  </div>
                <?php } else { ?>
                  <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">ເຂົ້າສູ່ລະບົບເພື່ອຈອງ</a>

                <?php } ?>
              </form>
            </div>
          </aside>
          <!--/Side-Bar-->
        </div>

        <div class="space-20"></div>
        <div class="divider"></div>

        <!--Similar-Cars-->
        <div class="similar_cars">
          <h3>ລົດທີ່ຄ້າຍຄືກັນ</h3>
          <div class="row">
            <?php
          foreach($similar as $sml)
{ ?>   
            <div class="col-md-3 grid_listing">
              <div class="product-listing-m gray-bg">
                <div class="product-listing-img"> <a href="<?= base_url('Vehicle_details/'.$sml->id_vehicle) ;?>"><img src="<?= base_url('back/img/vehicleimages/' . $sml->Vimage1); ?>" class="img-responsive" alt="image" /> </a>
                </div>
                <div class="product-listing-content">
                  <h5><a href="<?= base_url('Vehicle_details/'.$sml->id_vehicle) ;?>"><?= $sml->Brands;?> , <?= $sml->VehiclesTitle;?> </a></h5>
                  <p class="list-price">$<?= $sml->PricePerDay;?></p> / ມື້

                  <ul class="features_list">

                    <li><i class="fa fa-user" aria-hidden="true"></i><?= $sml->SeatingCapacity;?> ບ່ອນນັ່ງ</li>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i><?= $sml->ModelYear;?>model</li>
                    <li><i class="fa fa-car" aria-hidden="true"></i><?= $sml->FuelType;?></li>
                  </ul>
                </div>
              </div>
            </div>
            <?php } ?>  

          </div>
        </div>
        <!--/Similar-Cars-->

      </div>
    </section>
    <!--/Listing-detail-->

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

    <script src="<?= site_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= site_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= site_url() ?>assets/js/interface.js"></script>
    <script src="<?= site_url() ?>assets/switcher/js/switcher.js"></script>
    <script src="<?= site_url() ?>assets/js/bootstrap-slider.min.js"></script>
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