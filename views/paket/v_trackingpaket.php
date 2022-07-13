<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="keywords" content="E-Travel">
		<meta name="author" content="E-Travel">
		<meta name="description" content="CV.Purnama Indah Travel">
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Tracker</title>
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
					<i class="fa fa-crosshairs"></i> Tracker
				</div>
			</div>
			<!-- MAP -->
			
			<div id="content">
				
			
				
				<form class="contactForm" action="<?php echo URL; ?>paket/search_trackingpaket" method="post">
					
					<input type="text" name="no_resi" placeholder="Masukan No Resi / Invoice Anda" required>
					
					<button type="submit" class="o-buttons red" style="border:none;height:38px;width:100%;margin-left:0px;"><i class="fa fa-crosshairs"></i> Lacak Pemesanan</button>
				</form>
					<p>Masukan No Invoice Anda dan klik Tombol Lacak Pemesanan Untuk melacak status booking Anda.</p>
				
			</div>
			
			<!--<div class="subFooter">Copyright 2013. All rights reserved.</div>-->
			
			<!-- Menu navigation -->
			
			
		</div>
	</body>
</html>