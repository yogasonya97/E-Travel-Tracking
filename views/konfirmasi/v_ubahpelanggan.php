<!DOCTYPE html>
<html lang="en">
<head>
	<title>Perubahan Data Pelanggan</title>
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
	<?php foreach ($this->list_akunbooker as $booker) {
				$bookerNICNo=$booker['bookerNICNo'];
				$email=$booker['email'];
				$bookerName=$booker['bookerName'];
				$alamat=$booker['alamat'];
				$phone=$booker['bookerMNo'];
				$jk=$booker['jenis_kelamin'];
				$foto_ktp=$booker['foto_ktp'];
	} ?>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo URL; ?>assets/Login/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="<?php echo URL; ?>konfirmasi/konfirmasi_dataplg" method="post" enctype="multipart/form-data">
					<input type="hidden" name="bookerNICNo" value="<?php echo $bookerNICNo;?>">
					<div class="login100-form-avatar">
						<img src="<?php echo URL; ?>assets/Login/images/logo.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						PENGAJUAN UBAH DATA PELANGGAN
					</span>
					

					<div class="wrap-input100 validate-input m-b-10" data-validate = "E-mail is required">
						<input class="input100" type="text" name="email" placeholder="E-mail" value="<?php echo $email;?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
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
						<input class="input100" type="text" name="namalengkap" placeholder="Nama Lengkap" value="<?php echo $bookerName;?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Alamat is required">
						<input class="input100" type="text" name="alamat" placeholder="Alamat" value="<?php echo $alamat;?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-card"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Phone is required">
						
						<!-- <input class="input100" type="tel" name="phone" placeholder="Phone" pattern="^\d{12}$" required title="Harus 11-12 Digit" > -->
						<input class="input100" type="tel" name="phone" placeholder="Phone" pattern="^08[0-9]{9,}$" required title="Harus 11-12 Digit" value="<?php echo $phone;?>" >
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone-square"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Jenis Kelamin is required">
						<!-- <input class="input100" type="select" name="gender" placeholder="Laki-laki"> -->
						<select class="input100" name="gender">
							<?php if ($jk=="Laki-laki") { ?>
								<option class="input100" value="Laki-laki" selected>Laki-laki</option>
								<option class="input100" value="Perempuan">Perempuan</option>
							<?php }elseif ($jk=="Perempuan") { ?>
								<option class="input100" value="Laki-laki">Laki-laki</option>
								<option class="input100" value="Perempuan" selected>Perempuan</option>
							<?php } ?>
							
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-venus-mars"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Foto KTP is required">
					
							<h5><font color="white">Foto KTP </font> </h5><br>
							<img src="<?php echo URL;?>assets/admin/img/booker/<?php echo $foto_ktp;?>" width="300px"><br><br>
							<input type="hidden" name="filelama" value="<?php echo $foto_ktp;?>">
							<input type="file" name="filefoto" class="form-control" id="regular13" accept="image/*" style="display:none" onchange="document.getElementById('filefoto').value=this.value">
							<input type="text" id="filefoto">
							<input type="button" value="Ubah Foto KTP" onclick="document.getElementById('regular13').click()">
					
					</div>
					
					<div class="container-login100-form-btn p-t-10">
						<!-- <button class="login100-form-btn">
							Mendaftar
						</button> -->
						<input type="submit" class="login100-form-btn" value="Ubah Dan Ajukan">
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