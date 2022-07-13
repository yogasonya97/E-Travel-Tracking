<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html><html class=''>
<html lang="en">
  <head>
  	<title>E-Travel Sopir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo URL; ?>assets/sopir/css/style.css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<link href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' rel='stylesheet' type='text/css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>
<style class="cp-pen-styles">
  body {
   background: #383838;
  font-family: 'Open Sans', sans-serif;
  margin: 0;
  padding: 0;
}

a {
  color: inherit;
  text-decoration: none;
}

a:hover {
  color: rgba(0, 0, 0, .65);
}

a:hover {
  color: rgba(0, 0, 0, .45);
}

.window,
.box,
ul,
li {
  margin: 0;
  /*overflow: hidden;*/
  padding: 0;
  position: relative;
}

ul {
  font-family: 'Fjalla One', sans-serif;
  list-style-type: none;
  text-transform: uppercase;
}

li {
  display: inline-block;
}

img {
  display: block;
  width: 100%;
}

.btn {
  background: rgba(255,255,255,0.8);
  border: 1px solid rgba(255,255,255,0.5);
  /*border-radius: 40px;*/
  color: rgba(0,0,0,0.75);
  display: block;
  font-size: 1em;
  font-weight: 400;
  height: 44px;
  letter-spacing: 5px;
  line-height: 42px;
  margin: 10px auto;
  padding: 0;
  position: relative;
  text-align: center;
  text-transform: uppercase;
  -webkit-transition: all .5s ease;
  transition: all .5s ease;
  vertical-align: middle;
  width: 60%;
}

.btn:hover {
  background: rgba(0,0,0,0.1);
  border: 1px solid rgba(0,0,0,0.15);
}

.overlay {
  background: #158 url(<?php echo URL; ?>assets/mustang.jpg) center no-repeat;
  background-size: cover;
  height: calc(100% + 40px);
  margin: -20px;
  position: relative;
  width: calc(100% + 40px);
  -webkit-filter: blur(10px);
  -moz-filter: blur(10px);
  filter: blur(10px);
}

.window {
  box-shadow: 0 0 100px  rgba(0,0,0,0.25);
  height: 560px;
  margin: 2em auto 0;
  width: 320px;
}

.header {
  background: rgba(0, 97, 145, 0.45);
  color: #FFF;
  height: 430px;
  left: 0;
  position: absolute;
  text-align: center;
  top: 0;
  width: inherit;
}

.header:before {
  border: 2px solid rgba(161, 220, 255, 0.34);
  border-radius: 100%;
  content: "";
  height: 140px;
  left: 0;
  margin: 67px auto;
  padding: 0;
  position: absolute;
  right: 0;
  top: 0;
  width: 140px;
  z-index: 2;
  -webkit-transform: scale(1.24, 1.24);
  -moz-transform: scale(1.24, 1.24);
  transform: scale(1.24, 1.24);
}

.header img {
  border: 5px solid #A1DCFF;
  border-radius: 100%;
  height: 140px;
  margin: 4em auto 2.5em;
  object-fit: cover;
  width: 140px;
}

.header h2 {
  display: inline-block;
  font-family: 'Quicksand', sans-serif;
  font-size: 28px;
  font-weight: 400;
  letter-spacing: -2px;
  margin: 0 auto;
  padding: 0;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
}

.header h4 {
  color: rgba(255, 255, 255, 0.75);
  display: block;
  font-size: 15px;
  margin: 0 auto;
  padding: 5px 0 0;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
  text-transform: uppercase;
}

.footer {
  background: rgba(0, 97, 145, 0.75);
  bottom: 0;
  color: #FFF;
  left: 0;
  position: absolute;
  text-align: center;
  top: 430px;
  width: inherit;
  height: 400px;
}

.footer ul {
  display: flex;
  font-size: 16px;
  font-weight: 400;
  height: 40px;
  line-height: 40px;
  padding: 20px 20px;
}

.footer li:first-child {
  border: 0;
}

.footer li {
  border-left: 2px solid rgba(255, 255, 255, .15);
  font-family: 'Quicksand', sans-serif;
  padding: 0 4px 0 6px;
  width: 100%;
}

.footer a span {
  color: #9CDFF5;
  display: inline-block;
  font-size: 26px;
  padding: 0 4px 0 0;
  vertical-align: middle;
}
    </style>
		
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
      <?php require "views/sopir_cadangan/header_menu.php"; ?>

       <div id="content" class="p-4 p-md-5 pt-5">
       <!--  <h2 class="mb-4"><font color="white">CV. Purnama Indah Travel </font></h2> -->
        <div class="container bootstrap snippet">

		     <div class="window">
  <div class="overlay"></div>
  <div class="box header">
    <img src="<?php echo URL; ?>assets/mustang.jpg" alt="" />
    <h2><?php echo $name;?></h2>
    <h4>No.Plat Mobil :</h4>
    <h3><strong><?php echo $no_mobil_cadangan;?></strong></br><?php echo $model_mobil_cadangan;?></h3>

    <h4>STATUS</h4>
    
    <?php 
       if ($this->jurusan_lampung == NULL){
                                $status_lampung=""; 
                          }else {
     foreach ($this->jurusan_lampung as $s){ 
                                $status_lampung=$s['status'];} } ?>

    <?php  
     if ($this->jurusan_palembang == NULL){
                                $status_palembang=""; 
                          }else {
    foreach ($this->jurusan_palembang as $g){ 
                                $status_palembang=$g['status'];}} ?>
    <h5><strong><?php 
    if ($status_lampung==NULL && $status_palembang==NULL){
      echo "";
    }else{
    if ($status_lampung=="Ada")
      {
        echo "Di Lampung";
      }
                                                         
    elseif ($status_palembang=="Ada") {
     echo "Di Palembang";
    }
  
    elseif ($status_lampung=="Berangkat" && $status_palembang == "Berangkat") {
      echo "Berangkat";
    }
    else {
      echo "Istirahat";
    }
  }
    ?></strong></h5>

  </div>
  <div class="box footer">
   <!--  <ul>
      <li><a href=""><span class="ion-ios-camera-outline"></span> 401</a></li>
      <li><a href=""><span class="ion-ios-heart-outline"></span> 333K</a></li>
      <li><a href=""><span class="ion-ios-person-outline"></span> 225M</a></li>
    </ul> -->
  </br>
  <form action="<?php echo URL; ?>sopircd/set_tglposisi" method="POST">
  <p> <input type="date" name="tgl_posisi" value="<?php echo date("Y-m-d");?>">
  <input type="submit" value="Set Tanggal"></p>
  </form>

  <?php $a = $this->tgl_posisi;
  if ($a==NULL) {
    echo "";
  }else {
 
  
?>
<h5>Tanggal SET:</h5>
<input type="text" name="tgl_posisi" value="<?php echo $a;?> " disabled>
    <h5>Posisi:</h5>
    <?php               $c=0;
                        if ($this->get_jurusanmobil == NULL){
                                $busNo="";
                                $journeyNo="";
                          }else {
                        foreach ($this->get_jurusanmobil as $x){ 
                                $busNo=$x['busNo'];
                                $journeyNo=$x['journeyNo'];

                               ?>
                          
                        <form action="<?php echo URL; ?>sopircd/set_istirahat" method="post">
                        <input type="hidden" name="tgl_posisi" value="<?php echo $a;?>">
                        <input type="hidden" name="busNo<?php echo $c;?>" value="<?php echo $busNo;?>">
                        <input type="hidden" name="journeyNo<?php echo $c;?>" value="<?php echo $journeyNo;?>">
                        
                        <?php $c++; ?>
                        <?php } } ?> 
                        
                        <span class="fa fa-car"></span><input type="submit" class="btn" value="Istirahat">
                       </form> 

                        <?php               $d=0;
                                   if ($this->get_jurusanmobil == NULL){
                                     $busNo="";
                                    $journeyNo="";
                          }else {
                        foreach ($this->get_jurusanmobil as $x){ 
                                $busNo=$x['busNo'];
                                $journeyNo=$x['journeyNo'];

                               ?>
                          
                        <form action="<?php echo URL; ?>sopircd/set_berangkat" method="post">
                          <input type="hidden" name="tgl_posisi" value="<?php echo $a;?>">
                        <input type="hidden" name="busNo<?php echo $d;?>" value="<?php echo $busNo;?>">
                        <input type="hidden" name="journeyNo<?php echo $d;?>" value="<?php echo $journeyNo;?>">
                        
                        <?php $d++; ?>
                        <?php }} ?> 
                        
                        <input type="submit" class="btn" value="Berangkat">
                       </form> 
   
   <?php               if ($this->jurusan_lampung == NULL){
                                     $busNo="";
                                     $journeyNo="";
                                     $journeyFrom="";
                          }else {
                            $c=0;
                        foreach ($this->jurusan_lampung as $l){ 
                                $busNo=$l['busNo'];
                                $journeyNo=$l['journeyNo'];
                                $journeyFrom=$l['journeyFrom'];

                               ?>
                          
                        <form action="<?php echo URL; ?>sopircd/set_lampung" method="post">
                          <input type="hidden" name="tgl_posisi" value="<?php echo $a;?>">
                        <input type="hidden" name="busNo<?php echo $c;?>" value="<?php echo $busNo;?>">
                        <input type="hidden" name="journeyNo<?php echo $c;?>" value="<?php echo $journeyNo;?>">
                        <input type="hidden" name="journeyFrom<?php echo $c;?>" value="<?php echo $journeyFrom;?>">
                        <?php $c++; }} ?>
                         <?php  
                                 if ($this->jurusan_palembang == NULL){
                                     $busNo1="";
                                     $journeyNo1="";
                                     $journeyFrom1="";
                          }else {  
                          $c=0;   
                        foreach ($this->jurusan_palembang as $p){ 
                                $busNo1=$p['busNo'];
                                $journeyNo1=$p['journeyNo'];
                                $journeyFrom1=$p['journeyFrom'];

                               ?>
                          <input type="hidden" name="tgl_posisi1" value="<?php echo $a;?>">
                        <input type="hidden" name="busNo1<?php echo $c;?>" value="<?php echo $busNo1;?>">
                        <input type="hidden" name="journeyNo1<?php echo $c;?>" value="<?php echo $journeyNo1;?>">
                         <input type="hidden" name="journeyFrom1<?php echo $c;?>" value="<?php echo $journeyFrom1;?>">
                       <?php $c++;}} ?>
                        <input type="submit" class="btn" value="Di Lampung">
                       </form> 
     
        <?php             if ($this->jurusan_palembang == NULL){
                                     $busNo="";
                                     $journeyNo="";
                                     $journeyFrom="";
                          }else {
                          $c=0;       
                        foreach ($this->jurusan_palembang as $l){ 
                                $busNo=$l['busNo'];
                                $journeyNo=$l['journeyNo'];
                                $journeyFrom=$l['journeyFrom'];

                               ?>
                          
                        <form action="<?php echo URL; ?>sopircd/set_palembang" method="post">
                          <input type="hidden" name="tgl_posisi" value="<?php echo $a;?>">
                        <input type="hidden" name="busNo<?php echo $c;?>" value="<?php echo $busNo;?>">
                        <input type="hidden" name="journeyNo<?php echo $c;?>" value="<?php echo $journeyNo;?>">
                        <input type="hidden" name="journeyFrom<?php echo $c;?>" value="<?php echo $journeyFrom;?>">
                        <?php $c++;}} ?>
                         <?php 
                          if ($this->jurusan_palembang == NULL){
                                     $busNo1="";
                                     $journeyNo1="";
                                     $journeyFrom1="";
                          }else {    
                          $c=0;         
                        foreach ($this->jurusan_lampung as $p){ 
                                $busNo1=$p['busNo'];
                                $journeyNo1=$p['journeyNo'];
                                $journeyFrom1=$p['journeyFrom'];

                               ?>
                         <input type="hidden" name="tgl_posisi1" value="<?php echo $a;?>">
                        <input type="hidden" name="busNo1<?php echo $c;?>" value="<?php echo $busNo1;?>">
                        <input type="hidden" name="journeyNo1<?php echo $c;?>" value="<?php echo $journeyNo1;?>">
                         <input type="hidden" name="journeyFrom1<?php echo $c;?>" value="<?php echo $journeyFrom1;?>">
                       <?php $c++;}} ?>
                        <input type="submit" class="btn" value="Di Palembang">
                       </form> 

     <?php  }?>
  </div>
</div>
    </div>
</div>
</div>
   

    <script src="<?php echo URL; ?>assets/sopir/js/jquery.min.js"></script>
    <script src="<?php echo URL; ?>assets/sopir/js/popper.js"></script>
    <script src="<?php echo URL; ?>assets/sopir/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>assets/sopir/js/main.js"></script>
  </body>
</html>






