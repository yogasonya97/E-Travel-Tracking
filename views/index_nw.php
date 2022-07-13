<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Travel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo URL; ?>assets/burger/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/burger/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/burger/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/burger/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/burger/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/burger/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/burger/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/burger/css/animate.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/burger/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/burger/css/style.css">


    <script src="<?php echo URL; ?>assets/jquery-2.2.1.min.js"></script>

    <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
    </style>
<script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
    </script>

   <!--  <script type="text/javascript">
        $(document).ready(function(){
            $(".preloader").fadeOut();
        })
    </script> -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

    <div class="preloader">
      <div class="loading">
        <center><img src="<?php echo URL; ?>assets/car-load.gif" width="200">
        <p>Harap Tunggu ...</p></center>
      </div>
    </div>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="<?php echo URL; ?>index">Beranda</a></li>
                                        <li><a href="<?php echo URL; ?>assets/burger/Menu.html">Cek Harga</a></li>
                                        
                                        <li><a href="#">Layanan Tracking Status <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                 <?php if (Session::get('privilege') == 'BKOnline'): ?>
                                                <li><a href="<?php echo URL; ?>booker/tracking_booking">Tracking Status Tujuan</a></li>
                                                <li><a href="<?php echo URL; ?>paket/tracking_paket">Tracking Status Paket</a></li>
                                                <?php else: ?>
                                                <li><a href="<?php echo URL; ?>login">Tracking Booking</a></li>
                                                <li><a href="<?php echo URL; ?>login">Tracking Paket</a></li>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo URL; ?>assets/burger/about.html">Tentang</a></li>
                                       
                                        <li> <?php if (Session::get('privilege') == 'BKOnline'): ?>
                                            <a href="<?php echo URL; ?>login/service">Booking / Kirim Paket Sekarang</a>
                                            <?php elseif (Session::get('privilege') == 'Sopir'): ?>
                                            <a href="<?php echo URL; ?>sopir">Layanan Sopir</a>         
                                        <?php else: ?>
                                            <a href="<?php echo URL; ?>login">Login / Register (Mendaftar)</a>                                                         
                                        <?php endif; ?>

                                           </li>
                                           <li> <?php if (Session::get('privilege') == 'BKOnline'): ?>
                                            <a href="<?php echo URL; ?>login/logout">Log out(<?php echo Session::get('userName'); ?>)</a>                                                                
                                        <?php endif; ?>

                                           </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="<?php echo URL; ?>assets/burger/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <?php if (Session::get('privilege') == 'BKOnline'): ?>
                                     <div class="book_btn d-none d-xl-block">
                                                              <a class="#" href="<?php echo URL; ?>login/service">Booking / Kirim Paket Sekarang</a>
                                                          </div>
                                     <?php elseif (Session::get('privilege') == 'Sopir'): ?>
                                         <div class="book_btn d-none d-xl-block">
                                                              <a class="#" href="<?php echo URL; ?>sopir">Layanan Sopir</a>
                                                          </div>
                                      <?php else: ?>
                                        <div class="book_btn d-none d-xl-block">
                                                              <a class="#" href="<?php echo URL; ?>login">Login / Register (Mendaftar)</a>
                                                          </div>
                                 <?php endif; ?>
                                 
                                
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>CV</span>
                                </div>
                                <h3>PURNAMA <br>
                                    INDAH</h3>
                                <h4>Travel</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>CV</span>
                                </div>
                                <h3>PURNAMA <br>
                                    INDAH</h3>
                                <h4>Travel</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>CV PURNAMA INDAH TRAVEL</span>
                        <h3>Daftar Harga</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo URL; ?>assets/burger/img/burger/1.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Palembang - Lampung</h3>
                            
                            <p>Berangkat : <br><i class="fa fa-clock-o" aria-hidden="true"></i> Jam 18.00 WIB  </p>
                            <span>Rp 250.000,-</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo URL; ?>assets/burger/img/burger/2.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Lampung - Palembang</h3>
                            <p>Berangkat : <br><i class="fa fa-clock-o" aria-hidden="true"></i> Jam 18.00 WIB  </p>
                            <span>Rp 250.000,-</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo URL; ?>assets/burger/img/burger/3.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Burger Bizz</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>$5</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo URL; ?>assets/burger/img/burger/4.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Crackles Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>$5</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo URL; ?>assets/burger/img/burger/5.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Bull Burgers</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>$5</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo URL; ?>assets/burger/img/burger/6.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Rocket Burgers</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>$5</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo URL; ?>assets/burger/img/burger/7.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Smokin Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>$5</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo URL; ?>assets/burger/img/burger/8.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Delish Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>$5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="iteam_links">
                        <a class="boxed-btn5" href="Menu.html">More Items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_startt -->
    <div class="Burger_President_area">
            <div class="Burger_President_here">
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="<?php echo URL; ?>assets/burger/img/burgers/1.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>$20</span>
                                <h3>The Burger President</h3>
                                <p>Great way to make your business appear trust <br> and relevant.</p>
                                <a href="#" class="boxed-btn3">Order Now</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="<?php echo URL; ?>assets/burger/img/burgers/2.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>$20</span>
                                <h3>The Burger President</h3>
                                <p>Great way to make your business appear trust <br> and relevant.</p>
                                <a href="#" class="boxed-btn3">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features_room_end -->
    <!-- about_area_start -->
    <div class="about_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="about_thumb2">
                            <div class="img_1">
                                <img src="<?php echo URL; ?>assets/burger/img/about/1.png" alt="">
                            </div>
                            <div class="img_2">
                                <img src="<?php echo URL; ?>assets/burger/img/about/2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                        <div class="about_info">
                            <div class="section_title mb-20px">
                                <span>About Us</span>
                                <h3>Best Burger <br>
                                        in your City</h3>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate</p>
                            <div class="img_thumb">
                                <img src="<?php echo URL; ?>assets/burger/img/jessica-signature.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about_area_end -->
    <!-- video_area_start -->
    <div class="video_area video_bg overlay">
        <div class="video_area_inner text-center">
            <h3>Burger <br>
                Bachelor</h3>
            <span>How we make delicious Burger</span>
            <div class="video_payer">
                <a href="<?php echo URL; ?>assets/video/aw.mkv" class="video_btn popup-video">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- testimonial_area_start  -->
        <div class="testimonial_area ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                                <div class="section_title mb-60 text-center">
                                        <span>Testimonials</span>
                                        <h3>Happy Customers</h3>
                                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_active owl-carousel">
                                <div class="single_carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single_testmonial text-center">
                                                <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                                    sed
                                                    neque.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="<?php echo URL; ?>assets/burger/img/testmonial/1.png" alt="">
                                                    </div>
                                                    <h4>Kristiana Chouhan</h4>
                                                    <div class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single_testmonial text-center">
                                                <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                                    sed
                                                    neque.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="<?php echo URL; ?>assets/burger/img/testmonial/2.png" alt="">
                                                    </div>
                                                    <h4>Arafath Hossain</h4>
                                                    <div class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single_testmonial text-center">
                                                <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                                    sed
                                                    neque.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="<?php echo URL; ?>assets/burger/img/testmonial/3.png" alt="">
                                                    </div>
                                                    <h4>A.H Shemanto</h4>
                                                    <div class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    <!-- testimonial_area_ned  -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?php echo URL; ?>assets/burger/img/instragram/1.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?php echo URL; ?>assets/burger/img/instragram/2.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?php echo URL; ?>assets/burger/img/instragram/3.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?php echo URL; ?>assets/burger/img/instragram/4.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- instragram_area_end -->

    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                        New York
                                </h3>
                                <p>5th flora, 700/D kings road, <br> 
                                        green lane New York-1782 <br>
                                        <a href="#">info@burger.com</a></p>
                                <a class="number" href="#">+10 378 483 6782</a>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                    California
                                </h3>
                                <p>5th flora, 700/D kings road, <br> 
                                        green lane New York-1782 <br>
                                        <a href="#">info@burger.com</a></p>
                                <a class="number" href="#">+10 378 483 6782</a>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-4">
                                <div class="footer_widget">
                                        <h3 class="footer_title">
                                                Stay Connected
                                        </h3>
                                        <form action="#" class="newsletter_form">
                                            <input type="text" placeholder="Enter your mail">
                                            <button type="submit">Sign Up</button>
                                        </form>
                                        <p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
                                    </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="socail_links text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    <!-- JS here -->
    <script src="<?php echo URL; ?>assets/burger/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/popper.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/owl.carousel.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/isotope.pkgd.min.js"></script>
    <script src="j<?php echo URL; ?>assets/burger/s/ajax-form.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/waypoints.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/jquery.counterup.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/scrollIt.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/wow.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/nice-select.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/plugins.js"></script>

    <!--contact js-->
    <script src="<?php echo URL; ?>assets/burger/js/contact.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/jquery.form.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/jquery.validate.min.js"></script>
    <script src="<?php echo URL; ?>assets/burger/js/mail-script.js"></script>

    <script src="<?php echo URL; ?>assets/burger/js/main.js"></script>

</body>

</html>