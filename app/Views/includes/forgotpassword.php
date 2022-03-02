<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("ລະ​ຫັດ​ຜ່ານ​ໃຫມ່​ແລະ​ຢືນ​ຢັນ​ລະ​ຫັດ​ຜ່ານ​​ບໍ່​ກົງ​ກັນ​  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
<div class="modal fade" id="forgotpassword">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">ການກູ້ລະຫັດຜ່ານ</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
              <form id="f1" name="chngpwd" method="post" action="<?= site_url('/forgot') ?>" onSubmit="return valid();">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="ທີ່​ຢູ່​ອີ​ເມວ​ຂອງ​ເຈົ້າ*" required="required">
                </div>
  <div class="form-group">
                  <input type="text" name="mobile" class="form-control" placeholder="ເບີໂທລະສັບ*" required="required">
                </div>
  <div class="form-group">
                  <input type="password" name="newpassword" pattern=".{5,}" class="form-control" placeholder="ລະຫັດຜ່ານໃໝ່ > 5*" required="required">
                </div>
  <div class="form-group">
                  <input type="password" name="confirmpassword" pattern=".{5,}" class="form-control" placeholder="ຢືນຢັນລະຫັດ > 5*" required="required">
                </div>
                <div class="form-group">
                  <input type="submit" value="ຣີເຊັດລະຫັດຜ່ານ" name="update" class="btn btn-block">
                </div>
              </form>
              <div class="text-center">
                <p class="gray_text">ສໍາລັບເຫດຜົນດ້ານຄວາມປອດໄພພວກເຮົາບໍ່ໄດ້ເກັບຮັກສາລະຫັດຜ່ານຂອງທ່ານ. ລະ​ຫັດ​ຜ່ານ​ຂອງ​ທ່ານ​ຈະ​ໄດ້​ຮັບ​ການ​ຕັ້ງ​ຄ່າ​ໃຫມ່​ແລະ​ລະ​ຫັດ​ຜ່ານ​ໃຫມ່​ຈະ​ຖືກ​ສົ່ງ​ໄປ​.</p>
                <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> ກັບໄປທີ່ເຂົ້າສູ່ລະບົບ</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
