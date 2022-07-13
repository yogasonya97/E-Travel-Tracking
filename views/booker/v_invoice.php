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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
		<title>Invoice</title>
		<link href="<?php echo URL; ?>assets/img/logo.png" rel="shortcut icon" type="image/x-icon">

		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/mobile/css/jquery.mmenu.all.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/mobile/css/style.css" />

		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">
		
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/jquery.easy-pie-chart.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/o-script.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
		<!-- <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> -->
		<!-- <script type="text/javascript">
			$(document).ready(function(){
		setInterval(function(){
		      $("#notif").load(window.location.href + " #notif" );
		}, 5000);
		});
		</script> -->
		<script>
			$(function () {
				$(".rateyo").rateYo({starWidth:"30px",rating: 2,fullStar: true}).on("rateyo.change", function (e, data){
					var rating = data.rating;
					$(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
					$(this).parent().find('.result').text('Rating :'+ rating);
					$(this).parent().find('input[name=rating]').val(rating);
				});
			});
		</script>
	</head>
	<body class="o-page" style="background-color:#fff;">
		<!-- <div id="notif"> -->
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
				<?php foreach ($this->cek_ticket as $d) {
                                $cek=$d['cek'];
                                # code...
                            }
                            
                ?>
                
                
				<?php 			$no_booking=$this->no_booking;
								$c=0;
								foreach ($this->list_invoice as $i) {
									$id_booker=$i['bookerNICNo']; 
									$id=$i['rek_id'];
									$rek_no=$i['rek_no'];
									$rek_nama=$i['rek_nama'];
									$rek_bank=$i['rek_bank'];
									$rek_cabang=$i['rek_cabang'];
									$rek_logo=$i['rek_logo'];
									
									$lng=$i['lng'];
									$lat=$i['lat'];

									$tgl=$i['tgl'];
									$tgl_booking=$i['tgl_booking'];
									$plg=$i['bookerName'];
									$metode_bayar=$i['metode_bayar'];
									$sts=$i['payment_status'];
									$total=$i['ammount'];
									$jumlah_kursi=$i['no_of_seat'];
									$dari=$i['journeyFrom'];
									$ke=$i['journeyTo'];
									$mobil=$i['busNo'];

									$status_sopir=$i['status_akun_sopir'];
									$no_mobil_cadangan=$i['no_mobil_cadangan'];

									if ($ke=="KP") {
                                            $tujuan="KAYUAGUNG-PALEMBANG";
                                        }elseif ($ke=="BBM") {
                                            $tujuan="BANDAR LAMPUNG-BANDAR JAYA-MENGGALA";
                                        }elseif ($ke=="MPP") {
                                            $tujuan="METRO-PEKALONGAN-PRINGSEWU";
                                        }elseif ($ke=="SK") {
                                            $tujuan="SUKADANA-KOTA GAJAH";
                                        }
								

							?>
				<article>
					<center><h1><b>INVOICE </b></h1></center>
					<div class="prod-single-content">
						<table style="border:none;padding:0px;font-size:3px;">
							<tr style="background-color:#fff;">
								<td>No.Plat Mobil </td>
								<td>:</td>
								<td><strong><?php echo $mobil;?> </strong><?php if ($status_sopir=="Dialihkan") { 
									echo "Dialihkan Ke <strong>".$no_mobil_cadangan."</strong>"; }?>
									
								
									
										<?php if ($sts=="Transaksi Selesai") {
												echo "";
										 }else {?>
										<a href="<?php echo URL;?>booker/track_mobil/<?php echo $no_booking;?>" class="o-buttons green">Track Mobil</a>
										<?php } ?>
									
								</td>
							</tr>
							<?php if ($sts=="Transaksi Selesai"||$sts=="Telah Sampai Tujuan") { ?>
							<tr>
								<td></td>
								<td></td>
								<td>
									<form action="<?php echo URL;?>booker/rate_mobil" method="post">
									<input type="hidden" name="no_booking" value="<?php echo $no_booking;?>">
									<input type="hidden" name="booker_id" value="<?php echo $id_booker;?>">
									<input type="hidden" name="no_mobil" value="<?php echo $mobil;?>">
									<div class="rateyo" id="rating" data-rateyo-rating="0" data-rateyo-num-stars="5" data-rateyo-score="3">
									</div>
									<span class="result"></span>
									<input type="hidden" name="rating"><br>
									<input type="submit" name="add" class="o-buttons green" value="Beri Rating Mobil">
									</form> 
								</td>
							</tr>
						<?php }else{echo "";}?>
							<tr style="background-color:#fff;">
								<td>No. Booking</td>
								<td>:</td>
								<td><?php echo $no_booking;?></td>
							</tr>
							<tr style="background-color:#fff;">
								<td>Customer</td>
								<td>:</td>
								<td><?php echo $plg;?></td>
							</tr>
							<tr style="background-color:#fff;">
								<td>Tanggal </td>
								<td>:</td>
								<td><?php echo $tgl;?></td>
							</tr>
							<tr style="background-color:#fff;">
								<td>Untuk Tanggal </td>
								<td>:</td>
								<td><?php echo $tgl_booking;?></td>
							</tr>
							
							<tr style="background-color:#fff;">
								<td>Jurusan </td>
								<td>:</td>
								<td><?php echo $dari." ke ".$tujuan; ?></td>
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
										if ($sts=="P"){
											echo "<font size='4' ><b>Menunggu Konfirmasi</b></font>";
										}
										else if ($sts=="N") {
											echo "<b>Konfirmasi Ditolak </b>(Silahkan Konfirmasi Ulang Dengan Data Yang Benar)";
										}
										else if ($sts=="Ok") {
											echo "<font size='4' ><b>Telah Di Konfirmasi</b></font>"; 

											 if ($cek == 0) { ?>
											 	
											 	<?php foreach ($this->list_ticket as $x){ 
							                					$ticketNo=$x['ticketNo'];
																$passengerName=$x['passengerName'];
																$seatNo=$x['seatNo'];
																$gender=$x['gender'];
																$date=$x['date'];
																$journeyNo=$x['journeyNo'];

							                 ?>
			     								
											 	<form action="<?php echo URL; ?>bookingSeat/paymentConform_transfer_acc/<?php echo $this->no_booking; ?>" method="post">
											 	
											 	<input type="hidden" name="ticketNo<?php echo $c;?>" value="<?php echo $ticketNo;?>">
											 	<input type="hidden" name="passengerName<?php echo $c;?>" value="<?php echo $passengerName;?>">
											 	<input type="hidden" name="seatNo<?php echo $c;?>" value="<?php echo $seatNo;?>">
											 	<input type="hidden" name="gender<?php echo $c;?>" value="<?php echo $gender;?>">
											 	<input type="hidden" name="new_nobooking<?php echo $c;?>" value="<?php echo $no_booking;
											 	?>">
											 	<input type="hidden" name="date<?php echo $c;?>" value="<?php echo $date;?>">
											 	<input type="hidden" name="journeyNo<?php echo $c;?>" value="<?php echo $journeyNo;?>">
											 	<?php $c++; ?>
											 	<?php } ?> 
											 	<input type="hidden" name="hitung" value="<?php echo $this->hitung;?>">
											 	
											 	<span class="fa fa-print"></span><input type="submit" class="o-buttons green" value="Cetak Tiket">
											 </form> 
                            					<!-- <a href="" class="o-buttons green" style="border:none;height:37px;width:35%;text-align:center;"><span class="fa fa-print"></span> Cetak Tiket</a> -->
                            				<?php }else{ ?>
                            						<a href="<?php echo URL; ?>printTicket/index/<?php echo $this->no_booking; ?>" class="o-buttons green" style="border:none;height:37px;width:35%;text-align:center;"><span class="fa fa-print"></span> Cetak Tiket</a>
                            				<?php } ?>
											
										 <?php } ?>
										 	<?php if($metode_bayar=='COD'){?>
										 			<?php if ($sts=="Transaksi Selesai") {
															echo "";
													 }else {?>
													<a href="<?php echo URL; ?>printTicket/index/<?php echo $this->no_booking; ?>" class="o-buttons green" style="border:none;height:37px;width:35%;text-align:center;"><span class="fa fa-print"></span> Cetak Tiket</a><?php } ?>
											<?php } ?>
										 
									<?php if ($sts!="P" && $sts!="N" && $sts!="Ok"){
										echo "<font size='4' ><b>".$sts."</b></font>";
									}?>
								</td>
							</tr>
						</table>
						<table style="width:100%;border:none;padding:0px;">
							<thead>
							<tr>
								
								
								<th style="text-align:center;">Jumlah Kursi</th>
								<th style="text-align:center;">Subtotal</th>
							</tr>
							</thead>
							<tbody>
							
								<tr>
									
									
									<td style="text-align:center;"><?php echo $jumlah_kursi;?></td>
									<td style="text-align:center;"><?php echo number_format($total);?></td>
								</tr>
							
							</tbody>
							<tfoot>
								<tr>
									<td>Total</td>
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
			if ($sts=="N"||$sts=="P") {
											# code...
										 ?>
			
			<!-- <center><a href="" class="o-buttons green" style="border:none;height:37px;width:35%;text-align:center;"><span class="fa fa-gift"></span> Batal Booking</a></center> 
			 -->
			 <?php if ($metode_bayar=="COD"){
			 	echo "";
			 }else{?>
			 <form action="<?php echo URL;?>konfirmasi" method="POST">
			 	<input type="hidden" name="no_invoice" value="<?php echo $no_booking;?>">
			 	<input type="hidden" name="nama" value="<?php echo $plg;?>">
			 	<input type="hidden" name="bank" value="<?php echo $rek_bank;?>">
			 	<input type="hidden" name="nominal" value="<?php echo $total;?>">
			 	<input type="submit" class="o-buttons blue" style="border:none;height:37px;width:100%;text-align:center;" value="Konfirmasi Sekarang">
			 </form>
			<!-- <a href="<?php echo URL; ?>konfirmasi" class="o-buttons blue" style="border:none;height:37px;width:100%;text-align:center;"><span class="fa fa-gift"></span> Konfirmasi Sekarang</a> -->
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