<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="keywords" content="E-Travel">
		<meta name="author" content="E-Travel">
		<meta name="description" content="CV.Purnama Indah Travel">
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
		

  <link rel="apple-touch-icon"
        href="<?php echo URL; ?>assets/logo.png" />
  <link rel="apple-touch-icon-precomposed"
        href="<?php echo URL; ?>assets/logo.png" />
		<title>Metode Pembayaran</title>
		<link href="<?php echo URL; ?>assets/admin/img/logo.png" rel="shortcut icon" type="image/x-icon">

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
					<!-- <a href="#menu" class="p-link-home"><i class="fa fa-bars"></i></a> -->
					<a href="javascript:history.back();" class="p-link-back"><i class="fa fa-arrow-left"></i></a>
				</div>
			</div>

			<div class="bannerPane banner-bg">
				<div class="overlay"></div>
				<div class="s-banner-content">
					<i class="fa fa-credit-card"></i> Metode Pembayaran
				</div>
			</div>
			<!-- MAP -->
			

			
			<div id="content">
				
				
				<a href="<?php echo URL; ?>bookingSeat/paymentConform_cod/<?php echo $this->no_booking; ?>" class="o-buttons blue" style="border:none;height:37px;width:100%;text-align:center;"><span class="fa fa-gift"></span> Bayar di Tempat</a>
				<a href="<?php echo URL; ?>booker/transfer_bank/<?php echo $this->no_booking; ?>" class="o-buttons red" style="border:none;height:37px;width:100%;text-align:center;"><span class="fa fa-exchange"></span> Transfer Bank</a>
				
				
			</div>
			
			<!--<div class="subFooter">Copyright 2013. All rights reserved.</div>-->
			
			
			
		</div>
	</body>
</html>