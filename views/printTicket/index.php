<!DOCTYPE html>
<html>
<head>
  <title>Cetak Tiket</title>
  <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
   <script src="<?php echo URL; ?>public/css/jquery.min.js"></script>
  <script src="<?php echo URL; ?>public/css/bootstrap.min.js"></script>
  
  <style type="text/css">
  .cardWrap {
  width: 27em;
  margin: 3em auto;
  color: #fff;
  font-family: sans-serif;
}

.card {
  background: linear-gradient(to bottom, #e84c3d 0%, #e84c3d 26%, #ecedef 26%, #ecedef 100%);
  height: 21em;
  float: left;
  position: relative;
  padding: 1em;
  margin-top: 100px;
}

.card1 {
  background: linear-gradient(to bottom, #e84c3d 0%, #e84c3d 26%, #ecedef 26%, #ecedef 100%);
  height: 26em;
  float: left;
  position: relative;
  padding: 1em;
  margin-top: 100px;
}

.cardLeft {
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
  width: 16em;
}

.cardRight {
  width: 9.5em;
  border-left: .18em dashed #fff;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
}
.cardRight:before, .cardRight:after {
  content: "";
  position: absolute;
  display: block;
  width: .9em;
  height: .9em;
  background: #fff;
  border-radius: 50%;
  left: -.5em;
}
.cardRight:before {
  top: -.4em;
}
.cardRight:after {
  bottom: -.4em;
}

h1 {
  font-size: 1.1em;
  margin-top: 0;
}
h1 span {
  font-weight: normal;
}


.title, .name, .seat, .time {
  text-transform: uppercase;
  font-weight: normal;
}
.title h2, .name h2, .seat h2, .time h2 {
  font-size: .9em;
  color: #525252;
  margin: 0;
}
.title span, .name span, .seat span, .time span {
  font-size: .7em;
  color: #a2aeae;
}

.title {
  margin: 2em 0 0 0;
}

.name, .seat {
  margin: .7em 0 0 0;
}

.time {
  margin: .7em 0 0 1em;
}

.seat, .time {
  float: left;
}

.eye {
  position: relative;
  width: 2em;
  height: 1.5em;
  background: #fff;
  margin: 0 auto;
  border-radius: 1em/0.6em;
  z-index: 1;
}
.eye:before, .eye:after {
  content: "";
  display: block;
  position: absolute;
  border-radius: 50%;
}
.eye:before {
  width: 1em;
  height: 1em;
  background: #e84c3d;
  z-index: 2;
  left: 8px;
  top: 4px;
}
.eye:after {
  width: .5em;
  height: .5em;
  background: #fff;
  z-index: 3;
  left: 12px;
  top: 8px;
}

.number {
  text-align: center;
  text-transform: uppercase;
}
.number h3 {
  color: #e84c3d;
  margin: .9em 0 0 0;
  font-size: 2.5em;
}
.number span {
  display: block;
  color: #a2aeae;
}

.barcode {
  height: 2em;
  width: 0;
  margin: 1.2em 0 0 .8em;
  box-shadow: 1px 0 0 1px #343434, 5px 0 0 1px #343434, 10px 0 0 1px #343434, 11px 0 0 1px #343434, 15px 0 0 1px #343434, 18px 0 0 1px #343434, 22px 0 0 1px #343434, 23px 0 0 1px #343434, 26px 0 0 1px #343434, 30px 0 0 1px #343434, 35px 0 0 1px #343434, 37px 0 0 1px #343434, 41px 0 0 1px #343434, 44px 0 0 1px #343434, 47px 0 0 1px #343434, 51px 0 0 1px #343434, 56px 0 0 1px #343434, 59px 0 0 1px #343434, 64px 0 0 1px #343434, 68px 0 0 1px #343434, 72px 0 0 1px #343434, 74px 0 0 1px #343434, 77px 0 0 1px #343434, 81px 0 0 1px #343434;
}

.subHeader, .subFooter { 
  margin-top: 12px;
  margin: center;
  background-color:#000000;
  font-size: 14px;
  color: #fff;
  text-align: center;
  line-height: 40px;
  height: 40px;
  padding: 0 10px;
  position:relative;
  width: 10em;
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
            <li><a href="<?php echo URL; ?>index/pemesanan">Booking Sekarang</a>
            <li><a href="<?php echo URL; ?>konfirmasi">Konfirmasi Pembayaran</a>
            <li><a href="<?php echo URL; ?>booker/tracking_booking">Tracker(Lacak)No.Invoice</a>
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
<div class="container">
    <div class="row">
        <div class="col-md-16">
<div id="printableArea">
<?php
if(isset($this->bookingTicket)){
    foreach ($this->bookingTicket as $key => $value) { $daria=$value['journeyFrom']; ?>
<div class="cardWrap">
  <div class="card1 cardLeft">
    <h1>E-Travel <span>Bukti Tiket</span></h1>
    <br><br>
    <div class="title">
      <span>Booking Id</span>
      <h2><?php echo $value['bookingID'];?></h2>
    </div>
    <div class="name">
      <span>Booker NIC</span>
      <h2><?php echo $value['bookerNICNo'];?></h2>
      
    </div>
    <div class="seat">
      <span>Dari</span>
      <h2><?php echo $daria;?></h2>
    </div>
    <div class="time">
      <span>Ke</span>
      <h2><?php if ($daria=="Palembang") {
              echo "Lampung";
      }elseif ($daria=="Lampung") {
              echo "Palembang";
      } ?></h2>
    </div>
    <br><br><br>
    <div class="seat">
      <span>NO.MOBIL</span>
      <h2><?php echo $value['busNo'];?></h2>
    </div>
    <div class="time">
      <span>TITIK JEMPUT</span>
      <h2><?php echo $value['entryPoint'];?></h2>
    </div>
    <br><br><br>
    <div class="seat">
      <span>Tanggal</span>
      <h2><?php echo $value['date'];?></h2>
    </div>
    <div class="time">
      <span>HARGA</span>
      <h2>Rp <?php echo $value['ammount'];?> ,-</h2>
    </div>
      
  </div>
  <div class="card1 cardRight">
    <div><center><img src="<?php echo URL;?>assets/cetak/tiket.png" width="70px"></center></div>
    <br>
    <div class="number">
      <h3><?php echo $value['no_of_seat'];?></h3>
      <span>Jumlah Kursi</span>
    </div>
    <div class="barcode"></div>
  </div>

</div>
 <?php }
} ?>


<?php 
if(isset($this->busTicket)){
    foreach ($this->busTicket as $key => $value) { $dari=$value['journeyFrom']; $gender=$value['gender']; ?>
<div class="cardWrap">
  <div class="card cardLeft">
    <h1>E-Travel <span>Tiket Kursi</span></h1>
    <br>
    <div class="title">
      <span>NO.TIKET</span>
      <h2><?php echo $value['ticketNo'];?></h2>
    </div>
   
    <div class="seat">
      <span>Dari</span>
      <h2><?php echo $dari;?></h2>
    </div>
    <div class="time">
      <span>Ke</span>
      <h2><?php if ($dari=="Palembang") {
              echo "Lampung";
      }elseif ($dari=="Lampung") {
              echo "Palembang";
      } ?></h2>
    </div>
    <br><br><br>
    <div class="seat">
      <span>Tanggal</span>
      <h2><?php echo $value['date'];?></h2>
    </div>
    <div class="time">
      <span>Jenis Kelamin</span>
      <h2><?php if ($gender=="M"){
        echo "Laki-laki";
      }elseif($gender=="F"){
        echo "Perempuan";
      }?></h2>
    </div>
      <br><br><br>
     <div class="name">
      <span>Booking Id</span>
      <h2><?php echo $value['bookingID'];?></h2>
      
    </div>
  </div>
  <div class="card cardRight">
    <div><center><img src="<?php echo URL;?>assets/cetak/tiket.png" width="70px"></center></div>
    <div class="number">
      <h3><?php echo $value['seatNo'];?></h3>
      <span>No.Kursi</span> <span><?php echo $value['passengerName'];?></span>
    </div>
   
    <div class="barcode"></div>
    
  </div>

</div>
 <?php  }
} ?>

</div>


<input type="button" onclick="printDiv('printableArea')" value="Cetak" class="subFooter" />
</div>
</div>
</div>
</body>
<script type="text/javascript">

function printDiv(printableArea) 
{
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}</script>
</html>
