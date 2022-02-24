<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Car Rental Portal | Admin Update Image 2</title>

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

						<h2 class="page-title">ຮູບພາບຍານພາຫະນະ 2 </h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">ຮູບພາບລົດ 2 ລາຍລະອຽດ</div>
									<div class="panel-body">
									<?php foreach ($result as $showVi) : ?>
											<form method="post" action="<?= site_url('dashboard/updateimg2/' . $showVi->id_vehicle); ?>" class="form-horizontal" enctype="multipart/form-data">


												<?= csrf_field(); ?>
												<?php if (!empty(session()->getFlashdata('fail'))) : ?>
													<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
												<?php endif; ?>

												<?php if (!empty(session()->getFlashdata('success'))) : ?>
													<div class="alert alert-info"><?= session()->getFlashdata('success'); ?></div>
												<?php endif; ?>



												<div class="form-group">
													<label class="col-sm-4 control-label">ຮູບ​ພາບ​ປະ​ຈຸ​ບັນ 2</label>


													<div class="col-sm-8">
														<img src="<?= base_url('back/img/vehicleimages/' . $showVi->Vimage2); ?>" width="300" height="200" style="border:solid 1px #000">
													</div>

												</div>

												<div class="form-group">
													<label class="col-sm-4 control-label">ອັບໂຫຼດຮູບໃໝ່ 2<span style="color:red">*</span></label>
													<div class="col-sm-8">
														<input type="file" name="img2" required>
													</div>
												</div>
												<div class="hr-dashed"></div>




												<div class="form-group">
													<div class="col-sm-8 col-sm-offset-4">

														<button class="btn btn-primary" name="update" type="submit">ອັບເດດ</button>
													</div>
												</div>

											</form>
										<?php endforeach; ?>


									</div>
								</div>
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