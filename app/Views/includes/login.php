
  
<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">ເຂົ້າ​ສູ່​ລະ​ບົບ</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post" action="<?= base_url('checkuser2')?>">
              <?= csrf_field();?>
              
                <div class="form-group">
                  <input type="email" class="form-control" name="Emailld" placeholder="ທີ່​ຢູ່​ອີ​ເມວ*" value="<?= set_value('Emailld')?>" required>
                  <span class="text-danger"><?= isset($validation) ? display_error($validation,'Emailld'): '' ?></span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="ລະຫັດຜ່ານ*" required>
                  <span class="text-danger"><?= isset($validation) ? display_error($validation,'password'): '' ?></span>
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">
               
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="ເຂົ້າ​ສູ່​ລະ​ບົບ" class="btn btn-block">
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>ບໍ່ມີບັນຊີບໍ? <a href="#signupform" data-toggle="modal" data-dismiss="modal">ສະໝັກທີ່ນີ້</a></p>
        <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">ລືມລະຫັດຜ່ານ ?</a></p>
      </div>
    </div>
  </div>
</div>


