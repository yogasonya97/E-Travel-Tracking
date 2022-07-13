<?php  date_default_timezone_set('Asia/Jakarta'); ?>
<!doctype html>
<html>
<head>
     
    
    <title>E-Travel Set Lokasi Mobil</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <?php require "views/sopir/header_menu.php"; ?>
             <div id="content" class="p-4 p-md-5 pt-5">
<center>
    <h1>SET POSISI MOBIL MAPS</h1>
<p id="tampilkan"></p><br>
<?php foreach ($this->getusername as $key) {
    $mobil=$key['busNo'];
} ?>
<p>Cek lokasi anda! >> <button onclick="getLocation()">Cek</button></p>
<form method="POST" action="<?php echo URL;?>sopir/set_lokasi">
 <table class="table table-hover" id="datatable1">
    <tr>
        <td>Plat.Mobil :</td><td><input type="text" name="busNo" value="<?php echo $mobil;?>"></td>
    </tr>
    <tr>
        <td>Longitude :</td><td><input type="text" name="longitude" id="long"></td>
    </tr>
    <tr>
        <td>Latitude :</td><td><input type="text" name="latitude" id="lati"></td>
    </tr>

</table>
<input type="submit" value="Set Lokasi">



</form>
<p></p>

 
<div id="mapcanvas"></div>
</center>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAz0Zo9jDoAopzVB9cqzFzT8onr8XdQ_pk&sensor=false">
</script>
 
<script>
var view = document.getElementById("tampilkan");
var positionOptions = {
      enableHighAccuracy: true,
      timeout: 1000,
      maximumAge: 500
    }

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError, positionOptions);
    } else {
        view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
    }
}
 
function showPosition(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    document.getElementById("long").value = lon;
    document.getElementById("lati").value = lat;
    
    // Latitude: ${latitude} °, 
    latlon = new google.maps.LatLng(lat, lon)
    mapcanvas = document.getElementById('mapcanvas')
    mapcanvas.style.height = '400px';
    mapcanvas.style.width = '300px';
 
    var myOptions = {
    center:latlon,
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    }
    
     var imageURL= "<?php echo URL; ?>public/images/map/bus-green-icon.png"; 
     var pinImage = new google.maps.MarkerImage(imageURL,
                    new google.maps.Size(30, 30),
                    new google.maps.Point(0,0),
                    new google.maps.Point(10, 34));   
    var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
    var marker = new google.maps.Marker({
        position:latlon,
        map:map,
        icon: pinImage,
        title:"You are here!"
    });
}
 
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            view.innerHTML = "Yah, mau deteksi lokasi tapi ga boleh :("
            break;
        case error.POSITION_UNAVAILABLE:
            view.innerHTML = "Yah, Info lokasimu nggak bisa ditemukan nih"
            break;
        case error.TIMEOUT:
            view.innerHTML = "Requestnya timeout bro"
            break;
        case error.UNKNOWN_ERROR:
            view.innerHTML = "An unknown error occurred."
            break;
    }
 }
</script>
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