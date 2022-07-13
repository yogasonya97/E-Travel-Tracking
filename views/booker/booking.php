
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Pilih Kursi Tersedia</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

  <link rel="apple-touch-icon"
        href="<?php echo URL; ?>assets/logo.png" />
  <link rel="apple-touch-icon-precomposed"
        href="<?php echo URL; ?>assets/logo.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="E-Travel" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="<?php echo URL;?>assets/kursi/css/style.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="<?php echo URL; ?>public/css/booker/seat.css" />
 
 <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
  <script src="<?php echo URL; ?>public/css/jquery.min.js"></script>
  <script src="<?php echo URL; ?>public/css/bootstrap.min.js"></script>
  
   <!--link for javascript defalt-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/default.js"></script>

        <!--link for javascript validation-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/form_validation/jquery.form-validator.min.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/form_validation/customValidation.js"></script>


<!--<script type="text/javascript" src="<?php echo URL; ?>public/js/booker/seat.js"></script>-->

        <!--link for javascript data table-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/table/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/table/customTables.js"></script>

        <!--link for javascript date&time-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/date&time/jQuery.ptTimeSelect.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/date&time/jquery-ui-1.8.22.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/date&time/jquery.ui.timepicker.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/date&time/customDateTime.js"></script>

        <!--link for javascript Parse-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/report.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/map/parse-1.2.18.min.js"></script>
 

     <!--link for stylesheet for data table-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/demo_page.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/demo_table.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/demo_table_jui.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/jquery-ui-1.8.4.custom.css" />

        <!--link for stylesheet for date&time-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/date&time/jquery.ptTimeSelect.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/date&time/jquery.ui.timepicker.css" />


 <?php
        if (isset($this->js_1)) {
            foreach ($this->js_1 as $js) {
                echo '<script type="text/javascript" src="' . URL . $js . '"></script>';
            }
        }
        if (isset($this->js_2)) {
            foreach ($this->js_2 as $js) {
                echo '<script type="text/javascript" src="' . URL . $js . '"></script>';
            }
        }
        if (isset($this->js_3)) {
            foreach ($this->js_3 as $js) {
                echo '<script type="text/javascript" src="' . URL . $js . '"></script>';
            }
        }
        ?>  
        <style type="text/css">
            h2 {
    color: #000;
    font-size: 26px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    margin: 30px 0 80px;
}
h2 b {
    color: #ffc000;
}
h2::after {
    content: "";
    width: 100px;
    position: absolute;
    margin: 0 auto;
    height: 4px;
    background: rgba(0, 0, 0, 0.2);
    left: 0;
    right: 0;
    bottom: -20px;
}

h4 b {
    color: #ffc000;
}
 h4 {
    color: #000;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    margin: 1px 0 3px;
}
        </style>
</head>
<body>
    <?php Session::init(); ?>
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand text-uppercase" href="#">CV. Purnama Indah <span class="label label-success text-capitalize">Travel</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <?php if (Session::get('privilege') != 'Admin' && Session::get('privilege') != 'Operator' && Session::get('privilege') != 'Conduct' && Session::get('privilege') != 'BKOnline' && Session::get('privilege') != 'Booker' && Session::get('privilege') != 'AdminLok'): ?>
        <li class="active"><a href="<?php echo URL; ?>index">Home</a></li>
       
        <?php endif; ?>
        <?php if (Session::get('privilege') == 'Admin'): ?>
        <li><a href="<?php echo URL; ?>systemUser">Create Login</a></li>
        <li><a href="<?php echo URL; ?>report">Report</a></li>
        <?php endif; ?>
        <?php if (Session::get('privilege') == 'Operator'): ?>
        <li><a href="<?php echo URL; ?>systemUser">Sistem Pengguna</a></li>
        <li><a href="<?php echo URL; ?>bus">Mobil</a></li>
        <li><a href="<?php echo URL; ?>journey">Jurusan</a></li>
        <li><a href="<?php echo URL; ?>entryPoint">Titik Jemput</a></li>
        
        
        <?php endif; ?>
        <?php if (Session::get('privilege') == 'Conduct'): ?>
            <li><a href="<?php echo URL; ?>report">Report</a></li>
        <?php endif; ?>
        <?php if (Session::get('privilege') == 'BKOnline'): ?>
            <li class="active"><a href="<?php echo URL; ?>index">Home</a></li>
            <li><a href="<?php echo URL; ?>index/pemesanan">Booking Sekarang</a></li>
           
                <?php endif; ?>
                <?php if (Session::get('privilege') == 'AdminLok'): ?>
            <li class="active"><a href="<?php echo URL; ?>admin">Home Admin</a></li>
           
                <?php endif; ?>

        <?php if (Session::get('loggedIn') == true): ?>
        <li><a href="<?php echo URL; ?>systemUser/changePassword">Ubah Password</a></li>
        <li><a href="<?php echo URL; ?>login/logout">Logout(<?php echo Session::get('userName'); ?>)</a></li>
        <?php endif; ?>
      </ul>
      
    </div>
  </div>
</nav>
	
<div class="content">
    
	<h2>E-Travel CV.Purnama Indah <b>Travel</b></h2>
	<div class="main">
		<h2>Pilih Kursi Yang Tersedia</h2>
		<div class="demo">
			<div id="seat-map">
				<div class="front"> 
        <div class="timeOut" style="text-align:center; color: #d14"></div>
     </div>	
     &nbsp; 
				 <div id="viweSeat"></div>				
			</div>
			<div class="booking-details">
				<ul class="book-left">
					<li>Tgl.Booking </li>
					<li>No.Mobil </li>
					<li>Harga</li>
					<li>Kursi </li>
				</ul>
				<form id="" action="<?php echo URL; ?>booker/<?php if (Session::get('privilege') == 'Booker') {
        echo 'manualBooker';
    } else {
        echo 'onlineBooker';
    } ?>/" method="post">
    			<input type="hidden" name="selecting_s" id="selecting_s" value=""/>
            <input type="hidden" name="book_date" id="seat_book_date" value="<?php echo $this->busDara['book_date']; ?>"/>
            <input type="hidden" name="book_journeyNo" id="seat_book_journeyNo" value="<?php echo $this->journeyNo[0]['journeyNo']; ?>"/>
            <input type="hidden" name="book_busNo" id="seat_book_busNo" value="<?php echo $this->busDara['book_busNo']; ?>"/>
            <input type="hidden" name="book_numberOfSeat" id="seat_book_numberOfSeat" value="<?php echo $this->busDara['book_numberOfSeat']; ?>"/>
            <input type="hidden" name="book_price" id="seat_book_price" value="<?php echo $this->busDara['book_price']; ?>"/>
				<ul class="book-right">
					<li> <?php echo $this->busDara['book_date']; ?></li>
					<li> <?php echo $this->busDara['book_busNo']; ?></li>
					<li>   <input type="text" size="15" name="book_total_ammount" id="total_price_for_selecting_seate" value="0"/> </li>
					<li> </li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"><textarea name="" id="selecting_seate_for_booker" data-validation="required" ></textarea></ul>
			
						
				<input type="submit" class="checkout-button" name="Continue" value="Book Now">
				<input type="button" class="checkout-button" id="reset" value="Reset">
				</form>
				 <div id="imgseate" style="width:200px;text-align:center;overflow:auto"> </div>
			<div id="legend"> <ul id="seatDescription">
            <li id="a_seat" style="">Kursi Kosong</li>
            <li id="b_seat" style="">Kursi telah dibooking</li>
            <li id="s_seat" style="">Kursi telah dipilih</li>
            <li id="h_seat" style="">Kursi Pesanan ditahan</li>
            </ul></div>
			</div>
			<div style="clear:both"></div>
	    </div>

			
	</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	<p class="copy_rights">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <a href="<?php echo URL;?>" target="_blank">CV.Purnama Indah Travel</a></p>
</div>

</body>
</html>
