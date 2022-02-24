
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
