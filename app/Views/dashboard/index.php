
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Car Rental Portal | Admin Dashboard</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="<?= site_url()?>back/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="<?= site_url()?>back/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="<?= site_url()?>back/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="<?= site_url()?>back/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="<?= site_url()?>back/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="<?= site_url()?>back/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="<?= site_url()?>back/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="<?= site_url()?>back/css/style.css">
</head>

<body>
	
<?php include('includes/header.php');?>

	<div class="ts-main-content">
<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">ແຜງຄວບຄຸມ</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 "><?= $usercount ?></div>
													<div class="stat-panel-title text-uppercase">ຜູ້ໃຊ້ງານ</div>
												</div>
											</div>
											<a href="<?= site_url('dashboard/reg_users')?>" class="block-anchor panel-footer ">ລາຍລະອຽດ &nbsp;<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												

													<div class="stat-panel-number h1 "><?= $vehiclecount ?></div>
													<div class="stat-panel-title text-uppercase">ຍານພາຫະນະທີ່ມີລາຍຊື່</div>
												</div>
											</div>
											<a href="<?= site_url('dashboard/manage_vehicles')?>" class="block-anchor panel-footer text-center">ລາຍລະອຽດ &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">


													<div class="stat-panel-number h1 "><?= $bookingcount ?></div>
													<div class="stat-panel-title text-uppercase">ການຈອງທັງໝົດ</div>
												</div>
											</div>
											<a href="<?= site_url('dashboard/manage_booking')?>" class="block-anchor panel-footer text-center">ລາຍລະອຽດ &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
												
													<div class="stat-panel-number h1 "><?= $brandcount ?></div>
													<div class="stat-panel-title text-uppercase">ຍີ່ຫໍ້ລົດທັງໝົດ</div>
												</div>
											</div>
											<a href="<?= site_url('dashboard/manage_brands')?>" class="block-anchor panel-footer text-center">ລາຍລະອຽດ &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



<div class="row">
					<div class="col-md-12">

						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 "><?= $subcount ?></div>
													<div class="stat-panel-title text-uppercase">ສະມາຊິກ</div>
												</div>
											</div>
											<a href="<?= site_url('dashboard/manage_subscribers')?>" class="block-anchor panel-footer">ລາຍລະອຽດ <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
										

													<div class="stat-panel-number h1 "><?= $contact ?></div>
													<div class="stat-panel-title text-uppercase">ແບບສອບຖາມ</div>
												</div>
											</div>
											<a href="<?= site_url('dashboard/manage_contactquery')?>" class="block-anchor panel-footer text-center">ລາຍລະອຽດ &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">


													<div class="stat-panel-number h1 "><?= $counttest ?></div>
													<div class="stat-panel-title text-uppercase">ຂໍ້ຄວາມຮອງຮັບ</div>
												</div>
											</div>
											<a href="<?= site_url('dashboard/manage_testimonial')?>" class="block-anchor panel-footer text-center">ລາຍລະອຽດ &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
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
	<script src="<?= site_url()?>back/js/jquery.min.js"></script>
	<script src="<?= site_url()?>back/js/bootstrap-select.min.js"></script>
	<script src="<?= site_url()?>back/js/bootstrap.min.js"></script>
	<script src="<?= site_url()?>back/js/jquery.dataTables.min.js"></script>
	<script src="<?= site_url()?>back/js/dataTables.bootstrap.min.js"></script>
	<script src="<?= site_url()?>back/js/Chart.min.js"></script>
	<script src="<?= site_url()?>back/js/fileinput.js"></script>
	<script src="<?= site_url()?>back/js/chartData.js"></script>
	<script src="<?= site_url()?>back/js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>
</html>
