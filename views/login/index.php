<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login E-Travel</title>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo URL; ?>assets/mustang.png');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="<?php echo URL; ?>login/loginToSystem" method="post">
					<div class="login100-form-avatar">
						<img src="<?php echo URL; ?>assets/Login/images/logo.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						CV.PURNAMA INDAH TRAVEL
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="userName" placeholder="Username">
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

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<!-- <div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div> -->
					
					<div class="text-center w-full"></br>
					</br>
						Tidak Punya Akun ?
						<a class="txt1" href="<?php echo URL; ?>login/registrasi">
							Buat Akun(Registrasi)
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