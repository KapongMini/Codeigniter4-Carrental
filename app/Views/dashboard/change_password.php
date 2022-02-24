<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Car Rental Portal | Admin Change Password</title>

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

						<h2 class="page-title">ປ່ຽນລະຫັດຜ່ານ</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">ຊ່ອງຂໍ້ມູນແບບຟອມ</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();" action="<?= site_url('dashboard/update_password/update') ?>">
											<?php if (!empty(session()->getFlashdata('failll'))) : ?>
												<div class="alert alert-danger"><?= session()->getFlashdata('failll'); ?></div>
											<?php endif; ?>

											<?php if (!empty(session()->getFlashdata('yes'))) : ?>
												<div class="alert alert-info"><?= session()->getFlashdata('yes'); ?></div>
											<?php endif; ?>

											<div class="form-group">
												<label class="col-sm-4 control-label">ລະ​ຫັດ​ປັດ​ຈຸ​ບັນ</label>
												<div class="col-sm-8">
													<input type="password" class="form-control" name="password" id="password" required>
													<?php if (!empty(session()->getFlashdata('faills'))) : ?>
														<span class="text-danger"><?= session()->getFlashdata('faills'); ?></span>
													<?php endif; ?>
												</div>
											</div>
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-4 control-label">ລະ​ຫັດ​ໃໝ່</label>
												<div class="col-sm-8">
													<input type="password" class="form-control" name="newpassword" required>
													<span class="text-danger"><?= isset($validation) ? display_error($validation, 'newpassword') : '' ?></span>
												</div>
											</div>
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-4 control-label">ຢືນຢັນລະຫັດ</label>
												<div class="col-sm-8">
													<input type="password" class="form-control" name="confirmpassword" required>
													<span class="text-danger"><?= isset($validation) ? display_error($validation, 'confirmpassword') : '' ?></span>
												</div>
											</div>
											<div class="hr-dashed"></div>



											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">

													<button class="btn btn-primary" name="submit" type="submit">ບັນທຶກ</button>
												</div>
											</div>

										</form>

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