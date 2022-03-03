<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Car Rental Portal |Admin Manage Bookings </title>

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

						<h2 class="page-title">ຈັດການ ການຈອງ</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">ຂໍ້ມູນການຈອງ</div>
							<div class="panel-body">
								<?php if (!empty(session()->getFlashdata('fail'))) : ?>
									<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
								<?php endif ?>
								<?php if (!empty(session()->getFlashdata('success'))) : ?>
									<div class="alert alert-info"><?= session()->getFlashdata('success'); ?></div>
								<?php endif ?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>ຊື່</th>
											<th>ພາຫະນະ</th>
											<th>ຈາກວັນທີ</th>
											<th>ເຖິງວັນທີ</th>
											<th>ຂໍ້ຄວາມ</th>
											<th>ສະຖານະ</th>
											<th>ວັນທີໂພສ</th>
											<th>ການປະຕິບັດ</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Vehicle</th>
											<th>yyyy/dd/mm</th>
											<th>yyyy/dd/mm</th>
											<th>Message</th>
											<th>Status</th>
											<th>Posting date</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>

										<?php foreach ($msbooking as $key => $value) : ?>
											<tr>
												<td><?= $key + 1 ?></td>
												<td><?= $value->FullName; ?></td>
												<td><a href="<?= site_url('dashboard/edit_vehicle/' . $value->id_vehicle) ?>"><?= $value->Brands; ?>, <?= $value->VehiclesTitle; ?></td>
												<td><?= $value->FromDate; ?></td>
												<td><?= $value->ToDate; ?></td>
												<td><?= $value->message; ?></td>
												<td>
													<?php
													if ($value->Status == 0) {
														echo "ຍັງບໍ່ໄດ້ຢືນຢັນ";
													} else if ($value->Status == 1) {
														echo "ຢືນຢັນແລ້ວ";
													} else {
														echo "ຍົກເລີກ";
													} ?>
												</td>
												<td><?= $value->PostingDate; ?></td>
												<td><a href="<?= site_url('dashboard/manage_booking/conf/' . $value->id) ?>" onclick="return confirm('ທ່ານຕ້ອງການຢືນຢັນການຈອງນີ້ແທ້ໆບໍ')"> ຢືນຢັນ</a> /


													<a href="<?= site_url('dashboard/manage_booking/cancel/' . $value->id) ?>" onclick="return confirm('ທ່ານຕ້ອງການຍົກເລີກການຈອງນີ້ແທ້ໆບໍ')"> ຍົກເລີກ</a>
												</td>

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