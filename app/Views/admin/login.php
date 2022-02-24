<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Car Rental Portal | Admin Login</title>
	<link rel="stylesheet" href="<?= site_url()?>back/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= site_url()?>back/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= site_url()?>back/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?= site_url()?>back/css/bootstrap-social.css">
	<link rel="stylesheet" href="<?= site_url()?>back/css/bootstrap-select.css">
	<link rel="stylesheet" href="<?= site_url()?>back/css/fileinput.min.css">
	<link rel="stylesheet" href="<?= site_url()?>back/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="<?= site_url()?>back/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
</head>

<body>

	<div class="login-page bk-img" style="background-image: url(<?= site_url()?>back/img/adminlogin.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">ເຂົ້າສູ່ລະບົບ</h1>
						<hr>
            
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								
                    <form action="<?= base_url('admin/check')?>" method="post" autocomplete="off">
                        <?= csrf_field();?>
                        <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('fail');?></div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="" class="text-uppercase text-sm">ອີເມວ</label>
                            <input type="text" name="email" class="form-control" placeholder="your email" value="<?= set_value('email')?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation,'email'): '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="text-uppercase text-sm">ລະຫັດ</label>
                            <input type="password" name="password" class="form-control" placeholder="enter your password" id="">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation,'password'): '' ?></span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block my-3" type="submit">ເຂົ້າສູ່ລະບົບ</button>
                        </div>
                        <br>
                        
                    </form>
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

</body>

</html>
