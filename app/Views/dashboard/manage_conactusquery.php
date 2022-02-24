<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Car Rental Portal |Admin Manage Queries </title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="<?= site_url() ?>back/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="<?= site_url() ?>back/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="<?= site_url() ?>back/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="<?= site_url() ?>back/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="<?= site_url() ?>back/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="<?= site_url() ?>back/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="<?= site_url() ?>back/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="<?= site_url() ?>back/css/style.css">


</head>

<body>
	<?php include('includes/header.php'); ?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">ຈັດການ ການຕິດຕໍ່ສອບຖາມພວກເຮົາ</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">ຄໍາຖາມຂອງຜູ້ໃຊ້</div>
							<div class="panel-body">
							<?php  if(!empty(session()->getFlashdata('fail'))):?>
								<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
							<?php endif ?>
							<?php  if(!empty(session()->getFlashdata('success'))):?>
								<div class="alert alert-info"><?= session()->getFlashdata('success'); ?></div>
							<?php endif ?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>ຊື່</th>
											<th>ອີເມວ</th>
											<th>ເບີໂທ</th>
											<th>ຂໍ້ຄວາມ</th>
											<th>ວັນທີໂພສ</th>
											<th>ການປະຕິບັດ</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Email</th>
											<th>Contact No</th>
											<th>Message</th>
											<th>Posting date</th>
											<th>Action</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>

										<?php foreach ($contactqinfo as $key => $value) : ?>
											<tr>
												<td><?= $key + 1 ?></td>
												<td><?= $value->name ?></td>
												<td><?= $value->EmailId ?></td>
												<td><?= $value->ContactNumber ?></td>
												<td><?= $value->Message ?></td>
												<td><?= $value->PostingDate ?></td>
												<?php if ($value->status == 1) {
												?>
													<td>ອ່ານແລ້ວ</td>
												<?php } else { ?>

													<td><a href="<?= site_url('dashboard/manage_contactquery/pending/' . $value->id) ?>" onclick="return confirm('ເຈົ້າຢາກອ່ານແທ້ໆບໍ')">ລໍຖ້າຢູ່</a>
													</td>
												<?php } ?>

											</tr>
										<?php endforeach; ?>

									</tbody>
								</table>



							</div>
						</div>



					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="<?= site_url() ?>back/js/jquery.min.js"></script>
	<script src="<?= site_url() ?>back/js/bootstrap-select.min.js"></script>
	<script src="<?= site_url() ?>back/js/bootstrap.min.js"></script>
	<script src="<?= site_url() ?>back/js/jquery.dataTables.min.js"></script>
	<script src="<?= site_url() ?>back/js/dataTables.bootstrap.min.js"></script>
	<script src="<?= site_url() ?>back/js/Chart.min.js"></script>
	<script src="<?= site_url() ?>back/js/fileinput.js"></script>
	<script src="<?= site_url() ?>back/js/chartData.js"></script>
	<script src="<?= site_url() ?>back/js/main.js"></script>
</body>

</html>