<!DOCTYPE html>
<html>
<head>
     
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Cek Lokasi Geolocation HTML5</title>
</head>
 
<body>
<center>
    <h1>SET POSISI MOBIL MAPS</h1>
<p id="tampilkan"></p><br>
<?php foreach ($this->getusername as $key) {
    $mobil=$key['busNo'];
} ?>
<form method="POST" action="">
<table>
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




</form>

<p>Cek lokasi anda! >> <button onclick="getLocation()">Cek</button></p>
 
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
    mapcanvas.style.height = '500px';
    mapcanvas.style.width = '500px';
 
    var myOptions = {
    center:latlon,
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    }
     
    var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
    var marker = new google.maps.Marker({
        position:latlon,
        map:map,
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
 
</body>
</html>