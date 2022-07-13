<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="keywords" content="E-Travel">
		<meta name="author" content="E-Travel">
		<meta name="description" content="E-Travel">
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
		

  <link rel="apple-touch-icon"
        href="<?php echo URL; ?>assets/logo.png" />
  <link rel="apple-touch-icon-precomposed"
        href="<?php echo URL; ?>assets/logo.png" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>E-Travel History Paket</title>
		<link href="<?php echo URL; ?>assets/img/logo.png" rel="shortcut icon" type="image/x-icon">

		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/mobile/css/jquery.mmenu.all.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/mobile/css/style.css" />

		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">
		
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/jquery.easy-pie-chart.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/o-script.js"></script>
		
	</head>
	<body class="o-page" style="background-color:#fff;">
		<div id="page">
			<div id="header">
				<div class="header-content">
					<a href="javascript:history.back();" class="p-link-back"><i class="fa fa-arrow-left"></i></a>
				</div>
			</div>
			</div>
			<div class="bannerPane banner-bg">
				<div class="overlay"></div>
				<div class="s-banner-content">
					History Pengiriman Paket
				</div>
			</div>
			<div id="content">
				
				<article>
					
					<div class="prod-single-content">
					
						<div class="table-responsive">
						<table style="width:100%;border:none;padding:0px;">
							<thead>
							<tr>
								<th style="text-align:center;">Invoice</th>
								<th style="text-align:center;">Tanggal</th>
								<th style="text-align:center;">Status</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->history_paket as $a) {
								$invoice=$a['no_resi'];
								$tanggal=$a['tgl_pengiriman'];
								$status=$a['status'];
								 if ($status=="P") {
								 		$sts = "Menunggu Konfirmasi";
								 }else {
								 	$sts = $status;
								 }
							?>
								<tr>
									<td><a href="<?php echo URL;?>paket/cetak_invoice/<?php echo $invoice;?>"><?php echo $invoice;?></a></td>
									<td style="text-align:center;"><?php echo $tanggal;?></td>
									<td style="text-align:center;"><?php echo $sts;?></td>
									
								</tr>
							<?php } ?>
							</tbody>
							
						</table>
						</div>
						</form>
					</div>
					
				</article>

			</div>
			
			

	
	</body>
</html>