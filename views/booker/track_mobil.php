<?php  date_default_timezone_set('Asia/Jakarta'); ?>
<!doctype html>
<html>
<head>
     
    
    <title>E-Travel Track Mobil</title>
     <meta charset="utf-8">
   <!--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

  <link rel="apple-touch-icon"
        href="<?php echo URL; ?>assets/logo.png" />
  <link rel="apple-touch-icon-precomposed"
        href="<?php echo URL; ?>assets/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo URL;?>assets/sopir/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/material-design-iconic-font.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/DataTables/jquery.dataTables.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/DataTables/extensions/dataTables.colVis.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>assets/admin/css/DataTables/extensions/dataTables.tableTools.css" />
</head>
 
<body>
        <div class="wrapper d-flex align-items-stretch">
             <?php require "views/map/header_menu.php"; ?>
            <!-- <nav id="sidebar">
                <div class="custom-menu">
                    <a href="javascript:history.back();" class="p-link-back"><i class="fa fa-arrow-left"></i></a>
        </div>
         </nav> -->
            
             <div id="content" class="p-4 p-md-5 pt-5">
<center>
    <h1>TRACK POSISI MOBIL MAPS</h1>


<table style="width:100%;border:none;padding:0px;">
                           
                            <tbody>
                            
                                <tr>
                                    
                                    
                                    <td style="text-align:center;">No.Plat Mobil :</td>
                                    <td style="text-align:center;"><?php echo $this->busNo;?>
                                                                   
                                    </td>
                                </tr>
                            
                            </tbody>
</table>



 
<script type="text/javascript" src="<?php echo URL; ?>public/js/map/parse-1.2.18.min.js"></script>
<style type="text/css">
    #map-canvas { 
        height: 400px;
        width: 300px;
        margin-top:50px;
    }
    #map-key { 
        background-color: #F5F5F5;
        border: 1px solid #A4A4A4;
        float: right;
        height: 160px;
        margin-left: 10px;
        margin-top: -950px;
        padding: 0px;
        width: 135px;
    }
</style>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAz0Zo9jDoAopzVB9cqzFzT8onr8XdQ_pk&sensor=false">
</script>
<script type="text/javascript">
    
    var latlog = new google.maps.LatLng(<?php echo $this->lat;?>,<?php echo $this->lng;?>);//7.9000,80.7000 6.9000,79.8700
    var mapOptions = {
        center: latlog,
        zoom: 12 //9
    };
    function initialize() {
        var imageURL= "<?php echo URL; ?>public/images/map/bus-green-icon.png"; 
        var pinImage = new google.maps.MarkerImage(imageURL,
                    new google.maps.Size(30, 30),
                    new google.maps.Point(0,0),
                    new google.maps.Point(10, 34));      
        var map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
        var marker = new google.maps.Marker({
        position:latlog,
        map:map,
        icon: pinImage,
        animation: google.maps.Animation.BOUNCE,
        title:"Here"
    });
        var contentString = '<h6>Data Mobil</h6><table><tr><th>Model :</th><td><?php echo $this->bus_model;?></td></tr><tr><th>No.Plat :</th><td><?php echo $this->busNo;?></td></tr><tr><th>Nama Sopir :</th><td><?php echo $this->nm_sopir;?></td></tr><tr><th>No.Hp :</th><td><?php echo $this->phone;?></td></tr></table>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          position: latlog
        });
         marker.addListener('click', function() {
          // tampilkan info window di atas marker
          infowindow.open(map, marker);
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
    
</script> 
<div id="map-canvas"></div>
</div>
 </div>
  <script src="<?php echo URL; ?>assets/admin/js/DataTables/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL; ?>assets/admin/js/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
    <script src="<?php echo URL; ?>assets/admin/js/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/jquery.min.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/popper.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/bootstrap.min.js"></script>
    <script src="<?php echo URL;?>assets/sopir/js/main.js"></script>
</body>
</html>