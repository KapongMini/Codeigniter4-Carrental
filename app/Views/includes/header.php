<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="<?= site_url() ?>assets/images/logg.png" alt="image" /></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">ສໍາລັບສະຫນັບສະຫນູນພວກເຮົາ : </p>
              <a href="mailto:info@example.com">keosithong.12@gmail.com</a>
            </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">ບໍລິການສາຍດ່ວນໂທຫາພວກເຮົາ: </p>
              <a href="tel:61-1234-5678-09">+856-20-29785894</a>
            </div>
            <div class="social-follow">
              <ul>
                <li><a href="https://web.facebook.com/ppong.sml"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://web.facebook.com/ppong.sml"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="https://web.facebook.com/ppong.sml"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="https://web.facebook.com/ppong.sml"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="https://web.facebook.com/ppong.sml"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php if (session()->get('loggedUser') == null) {
            ?>
              <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">ເຂົ້າສູ່ລະບົບ / ລົງທະບຽນ</a> </div>
            <?php } else {

              echo "<strong>ຍິນດີຕ້ອນຮັບສູ່ Portal ໃຫ້ເຊົ່າລົດ</strong>";
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
            <?php if (session()->get('loggedUser')) {
            ?>
                <?= $userdata['FullName'] ; ?>
              <?php } ?>
                <i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
              <?php if (session()->get('loggedUser')) {
            ?>
                <li><a href="<?= site_url('profile'); ?>">ການຕັ້ງຄ່າໂປຣໄຟລ໌</a></li>
                <li><a href="<?= site_url('Change_password'); ?>">ປ່ຽນລະຫັດຜ່ານ</a></li>
                <li><a href="<?= site_url('my_booking') ?>">ການຈອງຂອງຂ້ອຍ</a></li>
                <li><a href="<?= site_url('post_testimonial'); ?>">ໂພສຂໍ້ຄວາມຕິຊົມ</a></li>
                <li><a href="<?= site_url('my_testimonial'); ?>">ຂໍ້ຄວາມຕິຊົມຂອງຂ້ອຍ</a></li>
                <li><a href="<?= site_url('logout') ?>">ອອກຈາກລະບົບ</a></li>
                <?php } else { ?>
                <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">ການຕັ້ງຄ່າໂປຣໄຟລ໌</a></li>
                <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">ປ່ຽນລະຫັດຜ່ານ</a></li>
                <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">ການຈອງຂອງຂ້ອຍ</a></li>
                <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">ໂພສຂໍ້ຄວາມຕິຊົມ</a></li>
                <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">ຂໍ້ຄວາມຕິຊົມຂອງຂ້ອຍ</a></li>
                <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">ອອກຈາກລະບົບ</a></li>
                <?php } ?>
              </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="ຄົ້ນຫາ..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="/">ໜ້າຫຼັກ</a> </li>

          <li><a href="<?= site_url('page') ?>">ກ່ຽວກັບເຮົາ</a></li>
          <li><a href="<?= site_url('car_listing') ?>">ລາຍການລົດ</a>
          <li><a href="<?= site_url('faq_page') ?>">FAQs</a></li>
          <li><a href="<?= site_url('contact_us') ?>">ຕິດ​ຕໍ່​ພວກ​ເຮົາ</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end -->

</header>