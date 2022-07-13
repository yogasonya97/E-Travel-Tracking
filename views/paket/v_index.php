<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="icon" href="<?php echo URL; ?>assets/logo.png">

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

<script type="text/javascript">
    function tampilkan(){
  var nama_wilayah=document.getElementById("search_buses_form").journeyFrom.value;
  if (nama_wilayah=="Palembang")
    {
        document.getElementById("tampil_tujuan").innerHTML="<div class='choose-car-type book-item'><h4>Jurusan Ke :</h4> <select class='custom-select' name='journeyTo' id='journeyTo' data-validation='required'><option selected>Pilih Tujuan</option><option value='MENGGALA-BANDAR JAYA-BANDAR LAMPUNG'>MENGGALA-BANDAR JAYA-BANDAR LAMPUNG</option><option value='PRINGSEWU-PEKALONGAN-METRO'>PRINGSEWU-PEKALONGAN-METRO</option><option value='KOTA GAJAH-SUKADANA'>KOTA GAJAH-SUKADANA</option></select></div>"
    }
  else if (nama_wilayah=="Lampung")
    {
        document.getElementById("tampil_tujuan").innerHTML="<div class='choose-car-type book-item'><h4>Jurusan Ke :</h4> <select class='custom-select' name='journeyTo' id='journeyTo' data-validation='required'><option selected>Pilih Tujuan</option><option value='KAYUAGUNG-PALEMBANG'>KAYUAGUNG-PALEMBANG</option></select></div>";
    }
}
</script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

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
    <?php require "views/paket/header.php"; ?>
    <!--== Header Area End ==-->

    <!--== Slider Area Start ==-->
    <section id="slider-area">
        <!--== slide Item One ==-->
        <div class="single-slide-item overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
                            <form id="search_buses_form" action="<?php echo URL; ?>paket" method="post">
                                <!--== Pick Up Location ==-->
                                <div class="pickup-location book-item">
                                    <h4>Jurusan Dari :</h4>
                                    <select class="custom-select" name="journeyFrom" id="journeyFrom" onchange="tampilkan()" data-validation="required">
                                      <option selected>Pilih </option>
                                      <?php
                                    $journeyFrom = null;
                                    foreach ($this->journeyFrom as $key => $value) {
                                        if($value['journeyFrom'] == $journeyFrom){}
                                        else{
                                        echo '<option value="' . $value['journeyFrom'] . '">' . $value['journeyFrom'] . '</option>';
                                        $journeyFrom = $value['journeyFrom'];
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                                <!--== Pick Up Location ==-->
                                <div id="tampil_tujuan"></div>
                                <!--== Pick Up Date ==-->
                                <div class="pick-up-date book-item">
                                    <h4>Untuk Tanggal :</h4>
                                    <input name="dateOfJourney" class="custom-select" type="date" value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d"); ?>" >

                                   
                                </div>
                               <!--  <div class="pick-up-date book-item">

                                    <div class="return-car">
                                        <h4>Untuk Tanggal :</h4>
                                        <input id="endDate" name="dateOfJourney" placeholder="Untuk Tanggal" />
                                    </div>
                                </div> -->


                                <div class="book-button text-center">
                                    <input class="book-now-btn" type="submit" name="searchBuses" id="searchBuses" value="SUBMIT">
                                    
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <center><h1>KIRIM PAKET SEKARANG!</h1>
                                    <p>SILAHKAN KIRIM PAKET <br> DENGAN TUJUAN YANG ANDA INGINKAN</p>
                                    <p>Di Antar Setiap Hari <br> Setiap Jam 18:00 WIB</p></center>
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