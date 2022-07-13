<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="keywords" content="M.Yoga Sonya Agsar">
		<meta name="author" content="M.Yoga Sonya Agsar">
		<meta name="description" content="M.Yoga Sonya Agsar">
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Konfirmasi</title>
		<link href="<?php echo URL; ?>assets/img/logo.png" rel="shortcut icon" type="image/x-icon">

		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/mobile/css/jquery.mmenu.all.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/mobile/css/style.css" />

		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">
		
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/gmap3.min.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/o-script.js"></script>

	</head>
	<body class="o-page">
		<div id="page">
			<div id="header">
				<div class="header-content">
					<a href="javascript:history.back();" class="p-link-back"><i class="fa fa-arrow-left"></i></a>
				</div>
			</div>
			<div class="bannerPane banner-bg">
				<div class="overlay"></div>
				<div class="s-banner-content">
					<i class="fa fa-credit-card"></i> Konfirmasi
				</div>
			</div>
			<!-- MAP -->
			
			<div id="content">
				
				<?php 
								
								foreach ($this->list_invoice as $i){ 
									$nama=$i['bookerName'];
									$bank=$i['rek_bank'];
									$biaya=$i['biaya_pengiriman'];
									

							?>
				<form class="contactForm" action="<?php echo URL;?>paket/simpan_konfirmasi/<?php echo $this->no_resi;?>" method="post" enctype="multipart/form-data">
					<!-- <input type="text" name="nama" value="<?php echo $cek;?>"> -->
					<input type="text" name="no_invoice" value="<?php echo $this->no_resi;?>" required>
					<input type="text" name="nama" value="<?php echo $nama;?>" required>
					<input type="text" name="bank" value="<?php echo $bank;?>" required>				
					<input type="number" name="jumlah" value="<?php echo $biaya;?>" required>
					<input type="file" name="filefoto" accept="image/*">
					<p>NB: Bukti Transfer harus berektensi JPG|PNG|BMP.</p>
					<?php } ?>
					<button type="submit" class="o-buttons red" style="border:none;height:38px;width:100%;margin-top:10px;margin-left:0px;">Konfirmasi</button>
				</form>
					<p>NB: Tanda (*) wajib di isi.</p>
				
			</div>
			
			<!--<div class="subFooter">Copyright 2013. All rights reserved.</div>-->
			
			
			
		</div>
	</body>
</html>