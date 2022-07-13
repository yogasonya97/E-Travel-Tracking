<?php 
    date_default_timezone_set('Asia/Jakarta');
function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
 $tanggal_now=tgl_indo(date('Y-m-d'));
 $waktu_now=date('G:i');
     ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta name="viewport" content="target-densitydpi=device-dpi">
    <meta name="mobile-web-app-capable" content="yes">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

  <link rel="apple-touch-icon"
        href="<?php echo URL; ?>assets/logo.png" />
  <link rel="apple-touch-icon-precomposed"
        href="<?php echo URL; ?>assets/logo.png" />
    <!--=== Favicon ===-->
    <!-- <link rel="icon" href="<?php echo URL; ?>assets/logo.png"> -->

    <title>E-Travel</title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?php echo URL;?>assets/bookingcar/assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?php echo URL;?>assets/bookingcar/assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?php echo URL;?>assets/bookingcar/assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?php echo URL;?>assets/bookingcar/assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?php echo URL;?>assets/bookingcar/assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?php echo URL;?>assets/bookingcar/assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?php echo URL;?>assets/bookingcar/assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?php echo URL;?>assets/bookingcar/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?php echo URL;?>assets/bookingcar/assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



    <!--== Preloader Area Start ==-->
    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?php echo URL;?>assets/bookingcar/assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> 105/-5, CV.Purnama Indah, Loket

                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +62-81377675307
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> <?php echo $tanggal_now."&nbsp;".$waktu_now." WIB"; ?>
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                           
                            <a href="#"><i class="fa fa-facebook"></i></a>
                         
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->
 
        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="<?php echo URL;?>" class="logo">
                            <img src="<?php echo URL;?>assets/bookingcar/assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="<?php echo URL; ?>">Beranda</a>
                                </li>
                                
                                
                                <li><a href="#">Tracking</a>
                                    <ul>
                                         <?php if (Session::get('privilege') == 'BKOnline'): ?>
                                        <li><a href="<?php echo URL; ?>booker/tracking_booking">Tracking Mobil Pesan Travel</a></li>
                                        <li><a href="<?php echo URL; ?>paket/tracking_paket">Tracking Status Paket</a></li>
                                        <?php else: ?>
                                        <li><a href="<?php echo URL; ?>login">Tracking Mobil Pesan Travel</a></li>
                                        <li><a href="<?php echo URL; ?>login">Tracking Status Paket</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>


                                <li><a href="#">Layanan Pemesanan</a>
                                    <ul>
                                         <?php if (Session::get('privilege') == 'BKOnline'): ?>
                                        <li><a href="<?php echo URL; ?>index/pemesanan">Pesan Travel</a></li>
                                        <li><a href="<?php echo URL; ?>index/paket">Pengiriman Paket</a></li>
                                        <?php else: ?>
                                        <li><a href="<?php echo URL; ?>login">Pesan Travel</a></li>
                                        <li><a href="<?php echo URL; ?>login">Pengiriman Paket</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                 <?php if (Session::get('privilege') == 'BKOnline'): ?>
                                <li><a href="#">Layanan Perubahan Data</a>
                                    <ul>
                                        
                                        <li><a href="<?php echo URL; ?>konfirmasi/konfirmasi_ubahdatapelanggan">Pengajuan Ubah Data</a></li>
                                        <li><a href="<?php echo URL; ?>systemUser/changePassword">Ubah Password</a></li>
                                        
                                        
                                    </ul>
                                </li>
                                <?php endif; ?>
                                

                                <?php if (Session::get('privilege') == 'Sopir'): ?>
                                <li><a href="<?php echo URL; ?>sopir">Layanan Sopir</a></li>
                                
                                <?php elseif (Session::get('privilege') == 'BKOnline'): ?>
                                 <li><a href="<?php echo URL; ?>login/logout">Log Out(<?php echo Session::get('userName');?>)</a></li>
                                 <?php else: ?>
                                <li><a href="<?php echo URL; ?>login">Login / Register(Mendaftar)</a></li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->
<body>
    <!--== Slider Area Start ==-->
    <section id="slider-area">
        <!--== slide Item One ==-->
        <div class="single-slide-item overlay">
            <div class="container">
                <div class="row">

                     <div class="col-lg-3">
                        <div class="book-a">
                           
                               
                                
                                <!--== Car Choose ==--> 

                               
                           
                        </div>
                    </div>
                


                    <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <center><h1>CV.PURNAMA INDAH TRAVEL</h1>
                                    <p>MELAYANI ANTAR - JEMPUT DAN KIRIM BARANG<br> PALEMBANG - LAMPUNG - PALEMBANG<br> DAFTAR DAN PESAN SEKARANG !!!</p><br> <div class="book-button text-center">
                                    
                                    <a href="<?php echo URL; ?>login/registrasi" class="book-now-btn">DAFTAR SEKARANG</a>
                                </div></center>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!--== slide Item One ==-->
    </section>
    <!--== Slider Area End ==-->

    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Tentang Kami</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>CV.PURNAMA INDAH TRAVEL</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p align="justify">&nbsp; &nbsp;<strong>CV.Purnama Indah Travel</strong>, merupakan perusahaan yang bergerak dalam bidang jasa antar jemput yang saat ini melayani rute perjalanan Palembang-Lampung begitu juga sebaliknya.
                                CV. Purnama Indah Travel berdiri pada tahun 2005, yang bernama CV. Purnama Indah Tour and Travel, 

                                Selain melayani travel Palembang-Lampung via darat, kami juga melayani paket barang ke semua jurusan yang kami layani. Konsumen dapat mengirim paket barang atau dokumen dengan cepat, aman, dan harga murah.

                                CV.Purnama Indah Travel sudah berpengalaman dalam melayani travel antar kota. Kami melayani dengan mobil yang reprentatif serta supir yang handal serta mengetahui kondisi jalan. 
                            </br>
                                </br>
                                Salam </br></br>

                                CV.Purnama Indah Travel</p>

                                
                              <!--   <div class="about-btn">
                                    <a href="#">Book a Car</a>
                                    <a href="#">Contact Us</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-video">
                        
                        <iframe src=""></iframe>
                    </div>
                </div>
                <!-- About Video End -->
            </div>
        </div>
    </section>
    <!--== About Us Area End ==-->

    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?php echo URL;?>assets/bookingcar/assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?php echo URL;?>assets/bookingcar/assets/img/partner/partner-logo-2.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?php echo URL;?>assets/bookingcar/assets/img/partner/partner-logo-3.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?php echo URL;?>assets/bookingcar/assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?php echo URL;?>assets/bookingcar/assets/img/partner/partner-logo-5.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?php echo URL;?>assets/bookingcar/assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?php echo URL;?>assets/bookingcar/assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Fasilitas MOBIL</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Menyediakan Layanan Mobil</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

           
			<!-- Service Content Start -->
			<div class="row">
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">

						<i class="fa fa-snowflake-o"></i>
						<h3>FULL AC</h3>
						
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-television"></i>
						<h3>TV/MP4</h3>
						
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-wifi"></i>
						<h3>WI-FI</h3>
						
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<!-- <div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-life-ring"></i>
						<h3>life insurance</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div> -->
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<!-- <div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-bath"></i>
						<h3>car wash</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div> -->
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<!-- <div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-phone"></i>
						<h3>call driver</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div> -->
				<!-- Single Service End -->
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                             <?php foreach ($this->jml_sopir as $a) {
                                $sopir=$a['sopir'];
                            } ?>
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $sopir;?></span>+</p>
                                        <h4>SOPIR</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                            <?php foreach ($this->jml_mobil as $k) {
                                $car=$k['car'];
                            } ?>
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $car;?></span>+</p>
                                        <h4>JUMLAH MOBIL</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                            <?php foreach ($this->jml_pelanggan as $q) {
                                $plg=$q['plg'];
                            } ?>
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $plg;?></span>+</p>
                                        <h4>Pelanggan</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

 
    <!--== Choose Car Area End ==-->

    <!--== Pricing Area Start ==-->
    <section id="pricing-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>JURUSAN DAN HARGA</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p></p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>
        
            <!-- Pricing Table Conatent Start -->
            <div class="row">
                <?php foreach ($this->list_informasi as $inf) {
                $jurusan=$inf['jurusan'];
                $harga=$inf['harga'];
        ?>
                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3><?php echo $jurusan;?></h3>
                        <h2>Rp <?php echo number_format($harga);?>,-</h2>
                        <h5>PER KURSI</h5>

                        <ul class="package-list">
                            <li>FULL AC</li>
                            <li>TV/MP4</li>
                            <li>WI-FI</li>
                           <!--  <li>TRANSPORT ABROAD</li>
                            <li>ALL INCLUSIVE MINI BAR</li>
                            <li>CHAUFFER INCLUDED IN PRICE</li> -->
                        </ul>
                    </div>
                </div>
            <?php } ?>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <!-- <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>Trial</h3>
                        <h2>Free</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>FREE VEHICLE DELIVERY</li>
                            <li>OTHER CELEBRATIONS</li>
                            <li>FULL INSURANCE</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>MINI BAR</li>
                            <li>INCLUDED IN PRICE</li>
                        </ul>
                    </div>
                </div> -->
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <!-- <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>standard</h3>
                        <h2>$ 35.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>DELIVERY AT AIRPORT</li>
                            <li>WEDDINGS AND OTHER</li>
                            <li>FULL INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL MINI BAR</li>
                            <li>CHAUFFER PRICE</li>
                        </ul>
                    </div>
                </div> -->
                <!-- Single Pricing Table -->
            </div>
            <!-- Pricing Table Conatent End -->
        </div>
    </section>
    <!--== Pricing Area End ==-->

   

    <!--== Mobile App Area Start ==-->
   
    <!--== Mobile App Area End ==-->

    <!--== Articles Area Start ==-->
   
    <!--== Articles Area End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Tentang Kami</h2>
                            <div class="widget-body">
                                <img src="<?php echo URL;?>assets/bookingcar/assets/img/logo.png" alt="JSOFT">
                                <p align="justify">&nbsp; <strong>CV.Purnama Indah Travel</strong>, merupakan perusahaan yang bergerak dalam bidang jasa antar jemput yang saat ini melayani rute perjalanan Palembang-Lampung begitu juga sebaliknya.</p>
<!-- 
                                <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                           
                            <div class="widget-body">
                               

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> 105/-5, CV.Purnama Indah, Loket</li>
                                    <li><i class="fa fa-mobile"></i> +62-81377675307</li>
                                    <!-- <li><i class="fa fa-envelope"></i> kazukamdu83@gmail.com</li> -->
                                </ul>
                                <a href="https://www.google.com.bd/maps/place/Sumbersari,+Sekampung,+East+Lampung+Regency,+Lampung+34382/@-5.1297815,105.4897578,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x2e40947783d56a99:0xbe083380b082eea0!2sJl.+Hargomulyo,+Hargomulyo,+Sekampung,+Kabupaten+Lampung+Timur,+Lampung!3b1!8m2!3d-5.1377329!4d105.4815149!3m4!1s0x2e40940f9e305aa7:0xb8428a9b708bf0a8!8m2!3d-5.1295177!4d105.4916941?hl=en" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <a href="<?php echo URL;?>" target="_blank">CV.Purnama Indah Travel</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="<?php echo URL;?>assets/bookingcar/assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="<?php echo URL;?>assets/bookingcar/assets/js/main.js"></script>

</body>

</html>