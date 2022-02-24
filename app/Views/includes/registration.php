
  
<!-- <script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script> -->

<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">ລົງ​ທະ​ບຽນ</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">

              <form id="add-form" method="post" name="signup" action="<?= base_url('adduser')?>" >
                <?= csrf_field();?>
              <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="ຊື່​ເຕັມ" required="required" >
                  <span class="text-danger"><?= isset($validation) ? display_error($validation,'fullname') : ''?></span>
                  
                </div>
                      <div class="form-group">
                  <input type="text" class="form-control" name="mobileno" placeholder="ເບີ​ໂທລະ​ສັບ" maxlength="11" required="required" >
                  <span class="text-danger"><?= isset($validation) ? display_error($validation,'mobileno') : ''?></span>
                  
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="Emailld" placeholder="ທີ່​ຢູ່​ອີ​ເມວ" required="required" >
                  <span class="text-danger"><?= isset($validation) ? display_error($validation,'Emailld') : ''?></span>
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="ລະຫັດຜ່ານ" required="required" >
                  <span class="text-danger"><?= isset($validation) ? display_error($validation,'password') : ''?></span>
                  
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="ຢືນ​ຢັນ​ລະ​ຫັດ" required="required" >
                  <span class="text-danger"><?= isset($validation) ? display_error($validation,'confirmpassword') : ''?></span>
                 
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">ຂ້ອຍເຫັນດີນຳ <a href="#">ຂໍ້ກໍານົດແລະເງື່ອນໄຂ</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="ລົງ​ທະ​ບຽນ" name="signup" id="submit" class="btn btn-block">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>ມີບັນຊີຢູ່ແລ້ວບໍ? <a href="#loginform" data-toggle="modal" data-dismiss="modal">ເຂົ້າສູ່ລະບົບທີ່ນີ້</a></p>
      </div>
    </div>
  </div>
</div>

