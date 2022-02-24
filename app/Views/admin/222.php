<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= site_url()?>back/css/bootstrap.min.css">
    <title>Car Rental Portal | Admin Login</title>
	<style>
        body{
           background-image: url('<?= site_url()?>back/img/adminlogin.jpg');
        }
        
    </style>

</head>
<body>
    <div class="container bg-white rounded-3">
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-4 col-md-offset-4">
                    <h4>Sign In</h4>
                    <form action="<?= base_url('admin/check')?>" method="post" autocomplete="off" class="">
                        <?= csrf_field();?>
                        <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('fail');?></div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="your email" value="<?= set_value('email')?>" >
                            <span class="text-danger"><?= isset($validation) ? display_error($validation,'email'): '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="enter your password" id="" >
                            <span class="text-danger"><?= isset($validation) ? display_error($validation,'password'): '' ?></span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block my-3" type="submit">Sign In</button>
                        </div>
                        <br>
                        <a href="<?= site_url('admin/register'); ?>">have no account, create new account</a>
                    </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>