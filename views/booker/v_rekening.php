<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="keywords" content="E-Travel">
		<meta name="author" content="E-Travel">
		<meta name="description" content="CV.Purnama Indah Travel">
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
		<meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

  <link rel="apple-touch-icon"
        href="<?php echo URL; ?>assets/logo.png" />
  <link rel="apple-touch-icon-precomposed"
        href="<?php echo URL; ?>assets/logo.png" />
		<title>Rekening Bank</title>
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
		
			<div id="header">
				<div class="header-content">
					<!-- <a href="#menu" class="p-link-home"><i class="fa fa-bars"></i></a> -->
					<a href="javascript:history.back();" class="p-link-back"><i class="fa fa-arrow-left"></i></a>
				</div>
			</div>
	
		<div class="bannerPane banner-bg">
				<div class="overlay"></div>
				<div class="s-banner-content">
					Rekening Bank
				</div>
		</div>
			<div id="content">
				
				<article>
					
					<div class="prod-single-content">
						<table style="width:100%">
							<thead>
							<tr>
								<th style="text-align:left;">Bank</th>
								<th style="text-align:center;">Aksi</th>
	
							</tr>
							</thead>
							<tbody>
							
							<?php 
								
								foreach ($this->list_rekening as $i){ 
									$id=$i['rek_id'];
									$rek_no=$i['rek_no'];
									$rek_nama=$i['rek_nama'];
									$rek_bank=$i['rek_bank'];
									$rek_cabang=$i['rek_cabang'];
									$rek_logo=$i['rek_logo'];

							?>
								<tr>
									<td>
										<?php if($id==005) { echo "";?>
										<?php }else { ?>
										<img src="<?php echo URL; ?>assets/admin/img/<?php echo $rek_logo;?>"/>
										<?php } ?>
									</td>
									<td style="text-align:center;vertical-align:middle;">
										<form action="<?php echo URL; ?>bookingSeat/paymentConform_transfer_bank/<?php echo $this->no_booking;?>" method="post">
										<?php if($id==005) { echo "";?>
										<?php }else { ?>
										<input type="hidden" name="rek_id" value="<?php echo $id;?>">
										<input type="hidden" name="bank" value="<?php echo $rek_bank;?>">		
										<input type="submit" class="o-buttons blue" value="Pilih">
											<?php } ?>
										</form>
									</td>
								</tr>
							
							<?php } ?>
							</tbody>
							
						</table>
		
					</div>
					<div class="notifications info">
						<p style="text-align:justify;">Silahkan Anda Memilih Pembayaran Transfer Bank yang Di inginkan</p>
					</div>
				</article>

			</div>

			
			
		

	
	</body>
</html>