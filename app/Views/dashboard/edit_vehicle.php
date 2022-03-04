<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Car Rental Portal | Admin Edit Vehicle Info</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

						<h2 class="page-title">ແກ້ໄຂຍານພາຫະນະ</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">ຂໍ້ມູນພື້ນຖານ</div>
									<div class="panel-body">
										<?php

										foreach ($sw as $row) { ?>
											<form method="post" class="form-horizontal" action="<?= site_url('dashboard/update_vehicle/' . $row->id_vehicle); ?>" enctype="multipart/form-data">
												<div class="form-group">
													<label class="col-sm-2 control-label">ຊື່ພາຫະນະ<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="vehicletitle" class="form-control" value="<?= $row->VehiclesTitle; ?>" required>
													</div>
													<label class="col-sm-2 control-label">ເລືອກຍີ່ຫໍ້<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<select class="selectpicker" name="brandname" required>

															<option value="<?= $row->bid; ?>"><?= ($bdname = $row->Brands); ?> </option>

															<?php foreach ($result as $results) : ?>
																<?php if ($results->Brands == $bdname) { ?>
																	continue;
																<?php } else { ?>

																	<option value="<?= $results->id; ?>"><?= $results->Brands; ?></option>

																<?php } ?>



															<?php endforeach; ?>
														</select>
													</div>
												</div>

												<div class="hr-dashed"></div>
												<div class="form-group">
													<label class="col-sm-2 control-label">ພາບລວມຂອງຍານພາຫະນະ<span style="color:red">*</span></label>
													<div class="col-sm-10">
														<textarea class="form-control" name="vehicalorcview" rows="3" required><?= $row->VehiclesOverview; ?></textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">ລາຄາຕໍ່ມື້ (ເປັນ USD)<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="priceperday" class="form-control" value="<?= $row->PricePerDay; ?>" required>
													</div>
													<label class="col-sm-2 control-label">ເລືອກປະເພດນໍ້າມັນເຊື້ອໄຟ<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<select class="selectpicker" name="fueltype" required>
															<option value="<?= $row->FuelType; ?>"><?= $row->FuelType; ?> </option>

															<option value="Petrol">Petrol</option>
															<option value="Diesel">Diesel</option>
															<option value="CNG">CNG</option>
														</select>
													</div>
												</div>


												<div class="form-group">
													<label class="col-sm-2 control-label">ປີຂອງລົດ<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="modelyear" class="form-control" value="<?= $row->ModelYear; ?>" required>
													</div>
													<label class="col-sm-2 control-label">ບ່ອນນັ່ງ<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="seatingcapacity" class="form-control" value="<?= $row->SeatingCapacity; ?>" required>
													</div>
												</div>
												<div class="hr-dashed"></div>
												<div class="form-group">
													<div class="col-sm-12">
														<h4><b>ຮູບພາບຍານພາຫະນະ</b></h4>
													</div>
												</div>


												<div class="form-group">
													<div class="col-sm-4 text-center">
														ຮູບພາບ 1: <br>
														<img src="<?= base_url('back/img/vehicleimages/' . $row->Vimage1); ?>" width="300" class="img-fluid" height="200" style="border:solid 1px #000"> <br>
														<a href="<?= site_url('dashboard/changeimage1/' . $row->id_vehicle) ?>" class="text-center d-flex justify-content-center my-2">ປ່ຽນຮູບທີ 1</a>
													</div>
													<div class="col-sm-4 text-center">
														ຮູບພາບ 2: <br>
														<img src="<?= base_url('back/img/vehicleimages/' . $row->Vimage2); ?>" width="300" class="img-fluid" height="200" style="border:solid 1px #000"><br>
														<a href="<?= site_url('dashboard/changeimage2/' . $row->id_vehicle) ?>" class="text-center d-flex justify-content-center my-2">ປ່ຽນຮູບທີ 2</a>
													</div>
													<div class="col-sm-4 text-center">
														ຮູບພາບ 3: <br>
														<img src="<?= base_url('back/img/vehicleimages/' . $row->Vimage3); ?>" width="300" class="img-fluid" height="200" style="border:solid 1px #000"><br>
														<a href="<?= site_url('dashboard/changeimage3/' . $row->id_vehicle) ?>" class="text-center d-flex justify-content-center my-2">ປ່ຽນຮູບທີ 3</a>
													</div>
												</div>


												<div class="form-group">
													<div class="col-sm-4 text-center">
														ຮູບພາບ 4: <br>
														<img src="<?= base_url('back/img/vehicleimages/' . $row->Vimage4); ?>" width="300" class="img-fluid" height="200" style="border:solid 1px #000"><br>
														<a href="<?= site_url('dashboard/changeimage4/' . $row->id_vehicle) ?>" class="text-center d-flex justify-content-center my-2">ປ່ຽນຮູບທີ 4</a>
													</div>
													<div class="col-sm-4 text-center">
														ຮູບພາບ 5: <br>

														<img src="<?= base_url('back/img/vehicleimages/' . $row->Vimage5); ?>" width="300" class="img-fluid" height="200" style="border:solid 1px #000"><br>
														<a href="<?= site_url('dashboard/changeimage5/' . $row->id_vehicle) ?>" class="text-center d-flex justify-content-center my-2">ປ່ຽນຮູບທີ 5</a>

													</div>

												</div>
											<div class="hr-dashed"></div>
											</div>
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

														<?php if ($row->AirConditioner == 1) { ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="airconditioner" checked value="1">
																<label for="inlineCheckbox1"> ເຄື່ອງ​ປັບ​ອາ​ກາດ </label>
															</div>
														<?php } else { ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="airconditioner" value="1">
																<label for="inlineCheckbox1"> ເຄື່ອງ​ປັບ​ອາ​ກາດ </label>
															</div>
														<?php } ?>

													</div>
													<div class="col-sm-3">

														<?php if ($row->PowerDoorLocks == 1) { ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="powerdoorlocks" checked value="1">
																<label for="inlineCheckbox2"> ລັອກປະຕູໄຟຟ້າ </label>
															</div>
														<?php } else { ?>
															<div class="checkbox checkbox-success checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="powerdoorlocks" value="1">
																<label for="inlineCheckbox2"> ລັອກປະຕູໄຟຟ້າ </label>
															</div>
														<?php } ?>

													</div>
													<div class="col-sm-3">

														<?php if ($row->AntiLockBrakingSystem == 1) { ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="antilockbrakingsys" checked value="1">
																<label for="inlineCheckbox3"> ລະບົບເບກ AntiLock </label>
															</div>
														<?php } else { ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="antilockbrakingsys" value="1">
																<label for="inlineCheckbox3"> ລະບົບເບກ AntiLock </label>
															</div>
														<?php } ?>

													</div>
													<div class="col-sm-3">

														<?php if ($row->BrakeAssist == 1) {
														?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="brakeassist" checked value="1">
																<label for="inlineCheckbox3"> ເບກຊ່ວຍ </label>
															</div>
														<?php } else { ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="brakeassist" value="1">
																<label for="inlineCheckbox3"> ເບກຊ່ວຍ </label>
															</div>
														<?php } ?>

											
											</div>

											<div class="form-group">
												<?php if ($row->PowerSteering == 1) {
												?>
													<div class="col-sm-3">
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="inlineCheckbox1" name="powersteering" checked value="1">
															<label for="inlineCheckbox1"> ພວງມະໄລພະລັງງານ </label>
														</div>
													<?php } else { ?>

														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="inlineCheckbox1" name="powersteering" value="1">
															<label for="inlineCheckbox1"> ພວງມະໄລພະລັງງານ </label>
														<?php } ?>
														</div>
													</div>


													<div class="col-sm-3">

														<?php if ($row->DriverAirbag == 1) {
														?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="driverairbag" checked value="1">
																<label for="inlineCheckbox2">ຖົງລົມນິລະໄພຄົນຂັບ</label>
															</div>
														<?php } else { ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="driverairbag" value="1">
																<label for="inlineCheckbox2">ຖົງລົມນິລະໄພຄົນຂັບ</label>
															<?php } ?>
															</div>
													</div>
													<div class="col-sm-3">

														<?php if ($row->PassengerAirbag == 1) {
														?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="passengerairbag" checked value="1">
																<label for="inlineCheckbox3"> ຖົງລົມນິລະໄພຜູ້ໂດຍສານ </label>
															</div>
														<?php } else { ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="passengerairbag" value="1">
																<label for="inlineCheckbox3"> ຖົງລົມນິລະໄພຜູ້ໂດຍສານ </label>
															</div>
														<?php } ?>

													</div>
													<div class="col-sm-3">

														<?php if ($row->PowerWindows == 1) {
														?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="powerwindow" checked value="1">
																<label for="inlineCheckbox3"> ແວ່ນໄຟຟ້າ </label>
															</div>
														<?php } else { ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="inlineCheckbox1" name="powerwindow" value="1">
																<label for="inlineCheckbox3"> ແວ່ນໄຟຟ້າ </label>
															</div>
														<?php } ?>

													</div>
											

											<div class="form-group">
												<div class="col-sm-3">

													<?php if ($row->CDPlayer == 1) {
													?>
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="inlineCheckbox1" name="cdplayer" checked value="1">
															<label for="inlineCheckbox1"> ເຄື່ອງ​ຫຼີ້ນ​ຊີ​ດີ </label>
														</div>
													<?php } else { ?>
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="inlineCheckbox1" name="cdplayer" value="1">
															<label for="inlineCheckbox1"> ເຄື່ອງ​ຫຼີ້ນ​ຊີ​ດີ </label>
														</div>
													<?php } ?>

												</div>
												<div class="col-sm-3">

													<?php if ($row->CentralLocking == 1) {
													?>
														<div class="checkbox  checkbox-inline">
															<input type="checkbox" id="inlineCheckbox1" name="centrallocking" checked value="1">
															<label for="inlineCheckbox2">ຕົວລັອກ Central</label>
														</div>
													<?php } else { ?>
														<div class="checkbox checkbox-success checkbox-inline">
															<input type="checkbox" id="inlineCheckbox1" name="centrallocking" value="1">
															<label for="inlineCheckbox2">ຕົວລັອກ Central</label>
														</div>
													<?php } ?>

												</div>
												<div class="col-sm-3">

													<?php if ($row->CrashSensor == 1) {
													?>
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="inlineCheckbox1" name="crashcensor" checked value="1">
															<label for="inlineCheckbox3"> ເຊັນເຊີການຂັດຂ້ອງ </label>
														</div>
													<?php } else { ?>
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="inlineCheckbox1" name="crashcensor" value="1">
															<label for="inlineCheckbox3"> ເຊັນເຊີການຂັດຂ້ອງ </label>
														</div>
													<?php } ?>

												</div>
												<div class="col-sm-3">

													<?php if ($row->LeatherSeats == 1) {
													?>
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="inlineCheckbox1" name="leatherseats" checked value="1">
															<label for="inlineCheckbox3"> ບ່ອນນັ່ງຫນັງ </label>
														</div>
													<?php } else { ?>
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="inlineCheckbox1" name="leatherseats" value="1">
															<label for="inlineCheckbox3"> ບ່ອນນັ່ງຫນັງ </label>
														</div>
													<?php } ?>
												</div>
											</div>

										<?php }


										?>



										<div class="form-group">
											<div class="col-sm-8 col-sm-offset-2 text-center">

												<button class="btn btn-primary" name="submit" type="submit" style="margin-top:7%;margin-left: 50px;">ອັບເດດ</button>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>

						</form>
						
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