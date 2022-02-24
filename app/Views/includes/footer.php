
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <h6>ກ່ຽວກັບເຮົາ</h6>
          <ul>


          <li><a href="<?= site_url('page') ?>">ກ່ຽວກັບເຮົາ</a></li>
            <li><a href="<?= site_url('faq_page') ?>">FAQs</a></li>
            <li><a href="<?= site_url('privacy_page') ?>">ຄວາມເປັນສ່ວນຕົວ</a></li>
          <li><a href="<?= site_url('terms_page') ?>">ເງື່ອນໄຂການນໍາໃຊ້</a></li>
               <li><a href="admin/">ເຂົ້າສູ່ລະບົບ Admin</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6">
          <h6>ຈອງຈົດຫມາຍຂ່າວ</h6>
          <div class="newsletter-form">
            <form method="post" action="<?= base_url('sub'); ?>">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="ໃສ່ທີ່ຢູ່ ອີເມວ" />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">ຕິດຕາມ <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*ພວກເຮົາສົ່ງຂໍ້ສະເໜີ ທີ່ຍິ່ງໃຫຍ່ແລະຂ່າວອັດຕະໂນມັດຫຼ້າສຸດໃຫ້ກັບຜູ້ໃຊ້ທີ່ຈອງຂອງພວກເຮົາ.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
            <p>ເຊື່ອມຕໍ່ກັບພວກເຮົາ:</p>
            <ul>
              <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; 2022 Car Rental Portal. <a href="https://web.facebook.com/ppong.sml">Pong Keosithong</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
