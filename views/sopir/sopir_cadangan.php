<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sopir Cadangan E-Travel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" href="<?php echo URL; ?>assets/logo.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/Login/css/main.css">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo URL; ?>assets/Login/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form" action="<?php echo URL; ?>sopir/register_sopircadangan" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id_sopir_utama" value="<?php echo $this->id_sopir_utama;?>">
					<div class="login100-form-avatar">
						<img src="<?php echo URL; ?>assets/Login/images/logo.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Buat Akun Sopir Cadangan
					</span>
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
				
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
											<input class="input100" type="password" name="password" placeholder="Password">
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-lock"></i>
											</span>
					</div>

					
					
					<!-- <div class="wrap-input100 validate-input m-b-10" data-validate = "NIK KTP is required">
						<input class="input100" type="text" name="nik" placeholder="NIK. KTP" pattern="^\d{16}$" required title="Minimal 16 Digit">
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-card"></i>
						</span>
					</div> -->
					
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Nama Lengkap is required">
						<input class="input100" type="text" name="namalengkap" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Phone is required">
						
						<!-- <input class="input100" type="tel" name="phone" placeholder="Phone" pattern="^\d{12}$" required title="Harus 11-12 Digit" > -->
						<input class="input100" type="tel" name="phone" placeholder="Phone" pattern="^08[0-9]{9,}$" required title="Harus 11-12 Digit" >
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone-square"></i>
						</span>
					</div>

					

					<div class="container-login100-form-btn p-t-10">
						
						<input type="submit" class="login100-form-btn" value="Buat Akun">
					</div>


					<div class="text-center w-full">
						<a class="txt1" href="<?php echo URL; ?>sopir/listsopir_cadangan">
							Kembali
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->	
	<script src="<?php echo URL; ?>assets/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo URL; ?>assets/Login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo URL; ?>assets/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo URL; ?>assets/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo URL; ?>assets/Login/js/main.js"></script>

</body>
</html>