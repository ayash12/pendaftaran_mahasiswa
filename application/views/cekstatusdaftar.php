<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pendaftaran Mahasiswa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animate/animate.css')?>">	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animsition/css/animsition.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/select2/select2.min.css')?>">	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/daterangepicker/daterangepicker.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main_login.css')?>">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="<?= base_url('status/hasil');?>" method="post">
					<span class="login100-form-title">
						Cek Status Daftar
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="no" placeholder="Input No HP">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Cek Daftar
						</button>
					</div>

					<div class="flex-col-c p-t-80 p-b-20">
					
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<script src="<?= base_url('assets/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
	<script src="<?= base_url('assets/vendor/animsition/js/animsition.min.js')?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?= base_url('assets/vendor/select2/select2.min.js')?>"></script>
	<script src="<?= base_url('assets/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?= base_url('assets/vendor/daterangepicker/daterangepicker.js')?>"></script>
	<script src="<?= base_url('assets/vendor/countdowntime/countdowntime.js')?>"></script>
	<script src="<?= base_url('assets/js/main.js')?>"></script>

</body>
</html>