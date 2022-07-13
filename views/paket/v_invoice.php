<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="keywords" content="E-Travel">
		<meta name="author" content="E-Travel">
		<meta name="description" content="CV.Purnama Indah Travel">
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Invoice</title>
		<link href="<<?php echo URL; ?>assets/img/logo.png" rel="shortcut icon" type="image/x-icon">

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
					<a href="<?php echo URL; ?>" class="p-link-back"><i class="fa fa-home"></i></a>
				</div>
			</div>
			
			<div class="bannerPane banner-bg">
				<div class="overlay"></div>
				<div class="s-banner-content">
					
				</div>
			</div>
			<div id="printableArea">
      
			<div id="content">
				
                
                
				<?php 			$no_resi=$this->no_resi;
								
								foreach ($this->list_invoice as $i) { 
									$id=$i['rek_id'];
									$rek_no=$i['rek_no'];
									$rek_nama=$i['rek_nama'];
									$rek_bank=$i['rek_bank'];
									$rek_cabang=$i['rek_cabang'];
									$rek_logo=$i['rek_logo'];
									
									
									$tgl_pengiriman=$i['tgl_kirim'];
									$plg=$i['bookerName'];
									$metode_bayar=$i['metode_bayar'];
									$sts=$i['status'];
									$total=$i['biaya_pengiriman'];
									$jurusan=$i['jurusan'];
									$jenis_barang=$i['jenis_barang'];
									$nama_penerima=$i['nama_penerima'];
									$telepon_penerima=$i['telepon_penerima'];
									$alamat_penerima=$i['alamat_penerima'];
									$qty=$i['jumlah_barang'];
								
									
								

							?>
				<article>
					<center><h1><b>INVOICE </b></h1></center>
					<div class="prod-single-content">
						<table style="border:none;padding:0px;font-size:3px;">
							<tr style="background-color:#fff;">
								<td>No. Resi</td>
								<td>:</td>
								<td><?php echo $no_resi;?></td>
							</tr>
							<tr style="background-color:#fff;">
								<td>Tanggal </td>
								<td>:</td>
								<td><?php echo $tgl_pengiriman;?></td>
							</tr>
							
							<tr style="background-color:#fff;">
								<td>Jurusan </td>
								<td>:</td>
								<td><?php echo $jurusan; ?></td>
							</tr>
							<tr style="background-color:#fff;">
								<td>Customer / Pengirim</td>
								<td>:</td>
								<td><?php echo $plg;?></td>
							</tr>
							<tr style="background-color:#fff;">
								<td>Penerima </td>
								<td>:</td>
								<td><?php echo $nama_penerima;?></td>
							</tr>
							<tr style="background-color:#fff;">
								<td>Nomor Penerima </td>
								<td>:</td>
								<td><?php echo $telepon_penerima;?></td>
							</tr>
							<tr style="background-color:#fff;">
								<td>Alamat Penerima </td>
								<td>:</td>
								<td><?php echo $alamat_penerima;?></td>
							</tr>
							<?php if($metode_bayar=='COD'){?>
							<tr style="background-color:#fff;">
								<td>Pembayaran</td>
								<td>:</td>
								<td><?php echo "Cash (COD)";?></td>
							</tr>
							<?php }else{?>
							<tr style="background-color:#fff;">
								<td>Pembayaran</td>
								<td>:</td>
								<td><?php echo 'Transfer Bank '.$rek_bank;?></td>
							</tr>
							<tr style="background-color:#fff;">
								<td>No Rekening</td>
								<td>:</td>
								<td><b><?php echo $rek_no;?></b> <?php echo " (Silahkan Transfer Ke No.Rekening Ini)";?></td>
							</tr>
							<tr style="background-color:#fff;">
								<td>Atas Nama</td>
								<td>:</td>
								<td><?php echo $rek_nama;?></td>
							</tr>
							<?php } ?>
							<tr style="background-color:#fff;">
								<td>Status Order</td>
								<td>:</td>
								<td><?php 
										if ($sts=="P" && $metode_bayar=="COD"){
											echo "<font size=4><b>Sedang Dalam Penjemputan</b></font>";
										}
										else if ($sts=="P" && $metode_bayar=="Transfer Bank") {
											echo "<font size=4><b>Menunggu Konfirmasi</b></font>"; 

										}else if ($sts=="Ok"){
												echo "<b>Telah Dikonfirmasi Dan Menunggu Waktu Penjemputan</b>";
											}else {
												echo "<font size=4><b>".$sts."</b></font>";
											} ?>
 
									
								</td>
							</tr>
						</table>
						<table style="width:100%;border:none;padding:0px;">
							<thead>
							<tr>
								
								
								<th style="text-align:center;">Jenis Barang</th>
								<th style="text-align:center;">Jumlah Barang</th>
								<th style="text-align:center;">Subtotal</th>
							</tr>
							<thead>
							<tbody>
							
								<tr>
									
									
									<td style="text-align:center;"><?php echo $jenis_barang;?></td>
									<td style="text-align:center;"><?php echo $qty;?></td>
									<td style="text-align:center;"><?php echo number_format($total);?></td>
								</tr>
							
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2">Total</td>
									<td style="text-align:center;"><?php echo number_format($total)?></td>
								</tr>
							</tfoot>
						</table>
						
	
	<?php } ?>
	

						</form>
					</div>
					<div class="notifications info">
						<p style="text-align:justify;">Silahkan Print Screen Invoice Anda. Jika pembayaran melalui transfer bank, silahkan bayar sesuai dengan nominal yang tertera pada invoice.</p>
					</div>
				</article>

			</div>
			</div>
			<?php
			if ($sts=="Ok"){
											echo "";
										}elseif ($sts=="P") {
											# code...
										 ?>
			
			<!-- <center><a href="" class="o-buttons green" style="border:none;height:37px;width:35%;text-align:center;"><span class="fa fa-gift"></span> Batal Booking</a></center>  -->
			<?php if($metode_bayar=='COD'){ echo"";
			}else{?>

			<a href="<?php echo URL; ?>paket/konfirmasi/<?php echo $no_resi;?>" class="o-buttons blue" style="border:none;height:37px;width:100%;text-align:center;"><span class="fa fa-gift"></span> Konfirmasi Sekarang</a>
		<?php } ?>
			<input type="button" onclick="printDiv('printableArea')" value="Screenshoots" class="subFooter" />
			<?php } ?>
			
			
<script>
function printDiv(printableArea) 
{
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
	
	</body>
</html>