<div class="brand clearfix">
	
		<a href="<?= site_url('/dashboard') ?>" style="font-size: 25px;" class="brand logo">
			Admin Panel
			<!-- <img src="<?= site_url()?>assets/images/logg.png" alt=""> -->
		</a>
	

	<span class="menu-btn"><i class="fa fa-bars"></i></span>
	<ul class="ts-profile-nav">

		<li class="ts-account">
			<a href="#"><img src="<?= site_url() ?>back/img/avater_person.png" class="ts-avatar hidden-side" alt=""> ຂໍ້ມູນບັນຊີ <i class="fa fa-angle-down hidden-side"></i></a>
			<ul>
				<li><a href="<?= site_url('dashboard/update_password'); ?>">ປ່ຽນລະຫັດຜ່ານ</a></li>
				<li><a href="<?= site_url('admin/logout') ?>">ອອກຈາກລະບົບ</a></li>
			</ul>
		</li>
	</ul>
</div>