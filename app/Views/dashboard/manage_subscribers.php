
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Car Rental Portal |Admin Manage Subscribers   </title>

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
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">ຈັດການຜູ້ຕິດຕາມ</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">ລາຍລະອຽດຜູ້ສະໝັກໃຊ້</div>
							<div class="panel-body">
							<?php if(!empty(session()->getFlashdata('delete'))): ?>
								<div class="alert alert-danger"><?= session()->getFlashdata('delete'); ?></div>
								<?php endif; ?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
												<th>ອີເມວ</th>
											<th>ວັນທີສະຫມັກ</th>
											<th>ການປະຕິບັດ</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
										<th>Email Id</th>
										<th>Subscription Date</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>
<?php foreach($result as $key=>$value) : ?>
										<tr>
											<td><?= $key+1 ?></td>
											<td><?= $value->SubscriberEmail; ?></td>
									
											<td><?= $value->PostingDate; ?></td>

										<td>


<a href="<?= base_url('dashboard/manage_subscribers/delete/' . $value->id); ?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບບໍ');"><i class="fa fa-close"></i></a>
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

