<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Car Rental Portal | Admin Post Vehicle</title>

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

						<h2 class="page-title">ໂພສ ຍານພາຫະນະ</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">ຂໍ້ມູນພື້ນຖານ</div>
									<!-- <div class="errorWrap"><strong>ERROR</strong>: </div>
									<div class="succWrap"><strong>SUCCESS</strong>: </div> -->

									<div class="panel-body">
										<form method="post" class="form-horizontal" action="<?= site_url('dashboard/save_vehicles')?>" enctype="multipart/form-data">
																
                                        <?= csrf_field(); ?>
                    <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail');?></div>
                    <?php endif; ?>

                    <?php if(!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-info"><?= session()->getFlashdata('success');?></div>
                    <?php endif; ?>
										<div class="form-group">
												<label class="col-sm-2 control-label">ຊື່ພາຫະນະ<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="vehicletitle" class="form-control" required>
												</div>
												<label class="col-sm-2 control-label">ເລືອກຍີ່ຫໍ້<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<select class="selectpicker" name="brandname" required>
														<option value=""> ເລືອກ </option>
														<?php
														foreach($Brand_name as $row)
														{

														echo '<option value="'.$row["id"].'">'.$row["Brands"].'</option>';
														}

														?>

													</select>
												</div>
											</div>

											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">ພາບລວມຂອງຍານພາຫະນະ<span style="color:red">*</span></label>
												<div class="col-sm-10">
													<textarea class="form-control" name="vehicalorcview" rows="3" required></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">ລາຄາຕໍ່ມື້ (ເປັນ USD)<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="priceperday" class="form-control" required>
												</div>
												<label class="col-sm-2 control-label">ເລືອກປະເພດນໍ້າມັນເຊື້ອໄຟ<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<select class="selectpicker" name="fueltype" required>
														<option value=""> ເລືອກ </option>

														<option value="Petrol">Petrol</option>
														<option value="Diesel">Diesel</option>
														<option value="CNG">CNG</option>
													</select>
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-2 control-label">ປີຂອງລົດ<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="modelyear" class="form-control" required>
												</div>
												<label class="col-sm-2 control-label">ບ່ອນນັ່ງ<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="seatingcapacity" class="form-control" required>
												</div>
											</div>
											<div class="hr-dashed"></div>


											<div class="form-group">
												<div class="col-sm-12">
													<h4><b>ອັບໂຫຼດຮູບພາບ</b></h4>
												</div>
											</div>


											<div class="form-group">
												<div class="col-sm-4">
												ຮູບພາບ 1 <span style="color:red">*</span><input type="file" name="img1" required>
												</div>
												<div class="col-sm-4">
												ຮູບພາບ 2<span style="color:red">*</span><input type="file" name="img2" required>
												</div>
												<div class="col-sm-4">
												ຮູບພາບ 3<span style="color:red">*</span><input type="file" name="img3" required>
												</div>
											</div>


											<div class="form-group">
												<div class="col-sm-4">
												ຮູບພາບ 4<span style="color:red">*</span><input type="file" name="img4" required>
												</div>
												<div class="col-sm-4">
												ຮູບພາບ 5<input type="file" name="img5">
												</div>

											</div>
											<div class="hr-dashed"></div>
									</div>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">ອຸປະກອນເສີມ</div>
									<div class="panel-body">


										<div class="form-group">
											<div class="col-sm-3">
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="airconditioner" name="airconditioner" value="1">
													<label for="airconditioner"> ເຄື່ອງ​ປັບ​ອາ​ກາດ </label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="powerdoorlocks" name="powerdoorlocks" value="1">
													<label for="powerdoorlocks"> ລັອກປະຕູໄຟຟ້າ </label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
													<label for="antilockbrakingsys"> ລະບົບເບກ AntiLock </label>
												</div>
											</div>
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="brakeassist" name="brakeassist" value="1">
												<label for="brakeassist"> ເບກຊ່ວຍ </label>
											</div>
										</div>



										<div class="form-group">
											<div class="col-sm-3">
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="powersteering" name="powersteering" value="1">
													<input type="checkbox" id="powersteering" name="powersteering" value="1">
													<label for="inlineCheckbox5"> ພວງມະໄລພະລັງງານ </label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="driverairbag" name="driverairbag" value="1">
													<label for="driverairbag">ຖົງລົມນິລະໄພຄົນຂັບ</label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="passengerairbag" name="passengerairbag" value="1">
													<label for="passengerairbag"> ຖົງລົມນິລະໄພຜູ້ໂດຍສານ </label>
												</div>
											</div>
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="powerwindow" name="powerwindow" value="1">
												<label for="powerwindow"> ແວ່ນໄຟຟ້າ </label>
											</div>
										</div>


										<div class="form-group">
											<div class="col-sm-3">
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="cdplayer" name="cdplayer" value="1">
													<label for="cdplayer"> ເຄື່ອງ​ຫຼີ້ນ​ຊີ​ດີ </label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="checkbox h checkbox-inline">
													<input type="checkbox" id="centrallocking" name="centrallocking" value="1">
													<label for="centrallocking"> ຕົວລັອກ Central </label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="crashcensor" name="crashcensor" value="1">
													<label for="crashcensor"> ເຊັນເຊີການຂັດຂ້ອງ </label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="leatherseats" name="leatherseats" value="1">
													<label for="leatherseats">ບ່ອນນັ່ງຫນັງ </label>
												</div>
											</div>
										</div>
										<br>
										<br>
										<br>
										<div class="form-group mb-5x">
											<div class="col-sm-8 col-sm-offset-2 " style="
											
											 display:flex;
											 justify-content: end;">
											 <button class="btn btn-primary" name="submit" type="submit">ບັນທຶກ</button>&nbsp;&nbsp;&nbsp;
											<button class="btn btn-default" type="reset">ຍົກເລີກ</button>
												
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