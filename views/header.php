<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
  
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

  <link rel="apple-touch-icon"
        href="<?php echo URL; ?>assets/logo.png" />
  <link rel="apple-touch-icon-precomposed"
        href="<?php echo URL; ?>assets/logo.png" />
        <title>E-Travel</title>
<!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link rel="icon" href="<?php echo URL; ?>assets/logo.png">
         <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
  <script src="<?php echo URL; ?>public/css/jquery.min.js"></script>
  <script src="<?php echo URL; ?>public/css/bootstrap.min.js"></script>
       <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->

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
        
        <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/font-awesome/css/font-awesome.css" />
        <!--link for stylesheet for defalt-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css" />

        <!--link for stylesheet for booker-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/booker/seat.css" />

        <!--link for stylesheet for data table-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/demo_page.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/demo_table.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/demo_table_jui.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/jquery-ui-1.8.4.custom.css" />

        <!--link for stylesheet for date&time-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/date&time/jquery.ptTimeSelect.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/date&time/jquery.ui.timepicker.css" />

        <!--<link rel="stylesheet" href="<?php echo URL; ?>public/css/booker/ticket.css" />-->


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


        
<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
       /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #333333;
      padding: 10px;
    }
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }

  </style>

  

    </head>

    <body background="<?php echo URL; ?>assets/mustang.jpg">
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
            <li><a href="<?php echo URL; ?>booker/history_order">History Pemesanan Travel</a></li>
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
<div></div>
<div></div>
