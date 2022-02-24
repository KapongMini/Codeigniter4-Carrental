	<nav class="ts-sidebar">
		<ul class="ts-sidebar-menu">

			<li class="ts-label">ໜ້າຫຼັກ</li>
			<li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> ແຜງຄວບຄຸມ</a></li>

			<li><a href="#"><i class="fa fa-files-o"></i> ຍີ່ຫໍ້ພາຫະນະ</a>
				<ul>
					<li><a href="<?= site_url('dashboard/create_brand') ?>">ສ້າງຍີ່ຫໍ້ພາຫະນະ</a></li>
					<li><a href="<?= site_url('dashboard/manage_brands') ?>">ຈັດການ ຍີ່ຫໍ້ພາຫະນະ</a></li>
				</ul>
			</li>

			<li><a href="#"><i class="fa fa-sitemap"></i> ພາຫະນະ</a>
				<ul>
					<li><a href="<?= site_url('dashboard/post_avehical') ?>">ໂພສພາຫະນະ</a></li>
					<li><a href="<?= site_url('dashboard/manage_vehicles') ?>">ຈັດການ ພາຫະນະ</a></li>
				</ul>
			</li>
			<li><a href="<?= site_url('dashboard/manage_booking') ?>"><i class="fa fa-users"></i> ຈັດການ ການຈອງ</a></li>

			<li><a href="<?= site_url('dashboard/manage_testimonial') ?>"><i class="fa fa-table"></i> ຈັດການ ຄຳຮອງຮັບ</a></li>
			<li><a href="<?= site_url('dashboard/manage_contactquery') ?>"><i class="fa fa-desktop""></i> ຈັດການ ແບບສອບຖາມ</a></li>
			<li><a href=" <?= site_url('dashboard/reg_users') ?>"><i class="fa fa-users"></i> ຈັດການ ບັນຊີຜູ້ໃຊ້</a></li>
			<li><a href="#"><i class="fa fa-files-o"></i> ຈັດການ ໜ້າຕ່າງໆ</a>
				<ul>
					<li><a href="<?= site_url('dashboard/manage_page') ?>">ກ່ຽວກັບເຮົາ</a></li>
					<li><a href="<?= site_url('dashboard/manage_faq') ?>">ໜ້າ FAQ </a></li>
					<li><a href="<?= site_url('dashboard/manage_privacy') ?>">ໜ້າຄວາມເປັນສ່ວນຕົວ</a></li>
					<li><a href="<?= site_url('dashboard/manage_terms') ?>">ໜ້າເງື່ອນໄຂຂອງພວກເຮົາ</a></li>
				</ul>
			</li>
			
			<li><a href="<?= site_url('dashboard/update_contactinfo') ?>"><i class="fa fa-files-o"></i> ອັບເດດຂໍ້ມູນການຕິດຕໍ່</a></li>

			<li><a href="<?= site_url('dashboard/manage_subscribers') ?>"><i class="fa fa-table"></i> ຈັດການ ສະມາຊິກ</a></li>

		</ul>
	</nav>