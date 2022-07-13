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
                                 <?php if (Session::get('privilege') != 'Owner' && Session::get('privilege') != 'Operator' && Session::get('privilege') != 'Conduct' && Session::get('privilege') != 'BKOnline' && Session::get('privilege') != 'Booker' && Session::get('privilege') != 'AdminLok'): ?>
                                <li class="active"><a href="<?php echo URL;?>">Beranda</a>
                                </li>
                                 <?php endif; ?>
                                  <?php if (Session::get('privilege') == 'Operator'): ?>
                                    <li><a href="<?php echo URL; ?>systemUser">Sistem Pengguna</a></li>
                                    <li><a href="<?php echo URL; ?>bus">Mobil</a></li>
                                    <li><a href="<?php echo URL; ?>journey">Jurusan</a></li>
                                    <li><a href="<?php echo URL; ?>entryPoint">Entry Point</a></li>
                                    <li><a href="<?php echo URL; ?>conductor">Conductor</a></li>
                                    <li><a href="<?php echo URL; ?>report">Report</a></li>
                                    <?php endif; ?>
                               
                                    <?php if (Session::get('privilege') == 'AdminLok'): ?>
                                    <li class="active"><a href="<?php echo URL; ?>admin">Beranda Admin</a></li>
                                        <?php endif; ?>
                                         <?php if (Session::get('privilege') == 'BKOnline'): ?>
                                     <li class="active"><a href="<?php echo URL; ?>index">Beranda</a></li>
                                    <li><a href="<?php echo URL; ?>index/pemesanan">Booking Sekarang</a></li>
                                <li><a href="#">Layanan</a>
                                    <ul>
                                        <li><a href="<?php echo URL; ?>booker/history_order">History Pemesanan Travel</a></li>
                                    </ul>
                                </li>
                                <?php endif; ?>
                                     <?php if (Session::get('loggedIn') == true): ?>
                                    <li><a href="<?php echo URL; ?>systemUser/changePassword">Ubah Password</a></li>
                                    <li><a href="<?php echo URL; ?>login/logout">Sign Out(<?php echo Session::get('userName'); ?>)</a></li>
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