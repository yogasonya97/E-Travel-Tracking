<html>
<head>
	<title>Javascript geo sample</title>
	<script src="<?php echo URL;?>public/js/geo-min.js" type="text/javascript" charset="utf-8"></script>
</head>	
<body>
	<b>Javascript geo sample</b>
	<script>
		if(geo_position_js.init()){
			geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
		}
		else{
			alert("Functionality not available");
		}

		function success_callback(p)
		{
			alert('lat='+p.coords.latitude.toFixed(2)+';lon='+p.coords.longitude.toFixed(2));
		}
		
		function error_callback(p)
		{
			alert('error='+p.message);
		}		
	</script>
	</body>
</html>