<?php 
$n=10; 
function getName($n) { 
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
  
// echo getName($n); 
?> 
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="keywords" content="M.Yoga Sonya Agsar">
		<meta name="author" content="M.Yoga Sonya Agsar">
		<meta name="description" content="M.Yoga Sonya Agsar">
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Paket</title>
		<link href="<?php echo URL; ?>assets/img/logo.png" rel="shortcut icon" type="image/x-icon">

		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/mobile/css/jquery.mmenu.all.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/mobile/css/style.css" />

		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">
		
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/gmap3.min.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>assets/mobile/js/o-script.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>	
	<script type="text/javascript">
    function tampilkan(){
  var jenis_barang=document.getElementById("form").tipe.value;
  
  if (jenis_barang=="Dokumen")
    {
        document.getElementById("tampil_barang").innerHTML="<input type='hidden' id='jumlah_barang' name='jumlah_barang' value='1'  >"
    }
  else
    {
    	
        document.getElementById("tampil_barang").innerHTML="<input type='number' id='jumlah_barang' name='jumlah_barang' placeholder='Masukkan Jumlah Paket *Qty'>"
    }


}


</script>
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
					<i class="fa fa-credit-card"></i> Pengiriman Paket
				</div>
			</div>
			<!-- MAP -->
			 <?php               
                        foreach ($this->booker as $x){ 
                        		$no_booker=$x['bookerNICNo'];
                                $nama_pengirim=$x['bookerName'];
                                $phone_pengirim=$x['bookerMNo'];
						}
                               ?>
			<div id="content">
				
				
				<form class="contactForm" id="form" action="<?php echo URL; ?>paket/simpan_paket" id="form" method="post" enctype="multipart/form-data">
					<h3><strong>Info Pengirim :</strong></h3>
					
					<input type="text" name="no_booker" value="<?php echo $no_booker; ?>" >
					<input type="text" name="nm_pengirim" value="<?php echo $nama_pengirim; ?>" >
					<input type="number" name="phone_pengirim" value="<?php echo $phone_pengirim; ?>" >
					<?php if ($this->jurusanDari=="Lampung"){ ?>
					<select name="titik_jemput" required>
							<option value="">--- Titik Jemput ---</option>
							<option value="Tanjung Karang">Tanjung Karang</option>
							<option value="Metro">Metro</option>
							<option value="Sukadana">Sukadana</option>
							<option value="Lainnya">Lainnya</option>
					</select>
					<textarea name="alamat_jemput" placeholder="Alamat Lengkap*" required></textarea>
					<?php }elseif ($this->jurusanDari=="Palembang"){?>
					<select name="titik_jemput" required>
							<option value="">--- Titik Jemput ---</option>
							<option value="Lemabang">Lemabang</option>
							<option value="Pusri">Pusri</option>
							<option value="Kenten">Kenten</option>
							<option value="Sekojo">Sekojo</option>
							<option value="Perumnas">Perumnas</option>
							<option value="Lainnya">Lainnya</option>
					</select>
					<textarea name="alamat_jemput" placeholder="Alamat Lengkap*" required></textarea>
					<?php } ?>
					<h3><strong>Info Penerima :</strong></h3>
					<input type="text" name="nm_penerima" placeholder="Nama Penerima*" required>
					<input type="number" name="phone_penerima" placeholder="No.Telpon*" required>
					<textarea name="alamat" placeholder="Alamat*" required></textarea>				
					

					<h3><strong>Info Paket :</strong></h3>
					<p>No.Resi :</p>
					<input type="text" name="no_resi" value="<?php echo getName($n).$no_booker;?>"  >
					<input type="text" name="jurusan" value="<?php echo $this->jurusanDari;?> Ke <?php echo $this->jurusanKe;?>" >
					<input type="text" name="tanggal" value="<?php echo $this->tanggal;?>" >
					<select name="tipe" id="tipe" onchange="tampilkan()" required>
						<option value="">--- Pilih Jenis Barang ---</option>
						<option value="Dokumen">Dokumen Penting</option>
						<option value="Makanan">Makanan</option>
						<option value="Elektronik">Elektronik</option>
						<option value="Lainnya">Lainnya</option>
					</select>
					<div id="tampil_barang"></div>
					<!-- <p>Harga Per Ukuran :</br>
						- Kecil Rp 50.000</br>
						- Sedang Rp 75.000</br>
						- Besar Rp 100.000</p> -->
					<select name="ukuran" id="ukuran" required>
						<option value="">--- Pilih Ukuran---</option>
						<option value="Kecil">Kecil</option>
						<option value="Sedang">Sedang</option>
						<option value="Besar">Besar</option>
						
					</select></br>			
					
					
					<input type="file" name="filefoto">
					<p>NB: Foto harus berektensi JPG|PNG.</p>
					
					<button type="button" onclick="sweet()" class="o-buttons red" style="border:none;height:38px;width:100%;margin-top:10px;margin-left:0px;">Metode Bayar</button>
				</form>
					<p>NB: Tanda (*) wajib di isi.</p>
				
			</div>
			
			<!--<div class="subFooter">Copyright 2013. All rights reserved.</div>-->
			
			
			
		</div>
	<script>

		function sweet(){
			var tipe_barang = document.getElementById("form").tipe.value;
			var ukuran = document.getElementById("form").ukuran.value;
			var qty = document.getElementById("form").jumlah_barang.value;
			if (tipe_barang=="Dokumen"){
				 var harga=100000*qty;
				
			}else if(tipe_barang=="Makanan"){
				if (ukuran=="Besar") {
					var harga=100000*qty;
					
				}else if(ukuran=="Sedang"){
					var harga=75000*qty;
					
				}else if(ukuran=="Kecil"){
					var harga=50000*qty;
					
				}
			}else if (tipe_barang=="Elektronik"||tipe_barang=="Lainnya") {
				if (ukuran=="Besar") {
					var harga=200000*qty;
					
				}else if(ukuran=="Sedang"){
					 var harga=150000*qty;
					
				}else if(ukuran=="Kecil"){
					var harga=100000*qty;
					
				}	
			}
			Swal.fire({
			  title: '<strong>Konfirmasi Harga</u></strong>',
			  icon: 'info',
			  html:
			    '<h2>Harga Pengiriman Paket</h2>' +
			    '<b>Rp '+harga+
			    ' ,-</b><br>Setuju untuk Lanjutkan',
			  showCloseButton: true,
			  showCancelButton: true,
			  focusConfirm: false,
			  confirmButtonText:
			    'Setuju',
			  confirmButtonAriaLabel: 'Thumbs up, great!',
			  cancelButtonText:
			    'Batal',
			  cancelButtonAriaLabel: 'Thumbs down'
			}).then((result) => {
				if (result.value) {
					document.getElementById('form').submit(); 
				}
			})
		}
	
	</script>
	</body>
</html>