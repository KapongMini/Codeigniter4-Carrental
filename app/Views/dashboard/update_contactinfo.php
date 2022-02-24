<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Car Rental Portal | Admin Manage ContactInfo</title>

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

						<h2 class="page-title">ອັບເດດຂໍ້ມູນການຕິດຕໍ່</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">ຊ່ອງຂໍ້ມູນແບບຟອມ</div>
									<div class="panel-body">
										<form method="post" action="<?= base_url('dashboard/update_contactinfo/update'); ?>" name="chngpwd" class="form-horizontal" onSubmit="return valid();">

											<?php if (!empty(session()->getFlashdata('fail'))) : ?>
												<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
											<?php endif ?>
											<?php if (!empty(session()->getFlashdata('success'))) : ?>
												<div class="alert alert-info"><?= session()->getFlashdata('success'); ?></div>
											<?php endif ?>
											<?php foreach ($contactinfo as $result) : ?>

												<div class="form-group">
													<label class="col-sm-4 control-label"> ທີ່ຢູ່</label>
													<div class="col-sm-8">
														<input type="hidden" name="id" value="<?= $result->id; ?>">
														<textarea class="form-control" name="address" id="address" required><?= $result->Address; ?></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label"> ອີເມວ</label>
													<div class="col-sm-8">
														<input type="email" class="form-control" name="email" id="email" value="<?= $result->Email; ?>" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label"> ເບີໂທ </label>
													<div class="col-sm-8">
														<input type="text" class="form-control" value="<?= $result->ContactNo; ?>" name="contactno" id="contactno" required>
													</div>
												</div>
											<?php endforeach; ?>
											<div class="hr-dashed"></div>




											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">

													<button class="btn btn-primary" name="submit" type="submit">ອັບເດດ</button>
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