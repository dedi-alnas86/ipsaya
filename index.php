<!-- COPYRIGHT by ScriptABC.com -->
<?php 
error_reporting(0);
include('config.php'); ?>
<?php include('ip_functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$website_title?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
      <div class="page-header">
      	<div class="alert alert-success" role="alert">
		<center><h1>IP ADDRESS: </h1></center>
        	<center><h1><?php echo $details->ip; ?></h1></center>
        </div>
      </div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center><?php include 'adsense.php';?></center>
		</div>
	</div>
</div>

</br>

<div class="container">
	<div class="row">
		<div class="col-md-8">
	      <div class="alert alert-success" role="alert">
	        <p>Your IP Address: <b><?php echo $details->ip; ?></b></p>
	        <p>Your Hostname: <b><?php echo $details->hostname; ?></b></p>
	        <p>Your Network: <b><?php echo $details->org; ?></b></p>
	        <p>Your Country: <b><?php echo $details->country; ?></b></p>
	        <p>Your Region: <b><?php echo $details->region; ?></b></p>
	        <p>Your City: <b><?php echo $details->city; ?></b></p>
	        <p>Your Postal Code: <b><?php echo $details->postal; ?></b></p>
	      </div>
		</div>
		<div class="col-md-4">
			<center><?php include 'adsense.php';?></center>
		</div>
	</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="map" style="width:100%;height:500px"></div>

      <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />

      <script>
        function myMap(lat, lng) {
          var map = L.map("map").setView([lat, lng], 10);
          L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "&copy; OpenStreetMap contributors"
          }).addTo(map);

          var marker = L.marker([lat, lng]).addTo(map);
          marker.bindPopup("<b>Your Location</b>").openPopup();
        }

        window.onload = function() {
          fetch("https://ipapi.co/json/")
            .then(response => response.json())
            .then(data => {
              myMap(data.latitude, data.longitude);
            })
            .catch(error => {
              console.error(error);
            });
        };
      </script>
    </div>
  </div>
</div>




<div class="container">
  <div class="header clearfix">
      <hr>
      <footer>
        <p>
        	&copy; <?php echo date('Y'); ?> <a href="." title="<?=$website_title?>"><?=$website_title?></a>
        </p>
        <p>
        <!-- You may only delete this notice if you have a "copyright removal licence" - COPYRIGHT by ScriptABC.com -->
          <a href="http://scriptabc.com/" target="_blank" title="<?=$website_title?> Script"><?=$website_title?> Script</a> by <!--<a href="http://scriptabc.com/" target="_blank" title="PHP Scripts">ScriptABC.com</a>
        <!-- You may only delete this notice if you have a "copyright removal licence" - COPYRIGHT by ScriptABC.com -->
        </p>
      </footer>
  </div>
</div>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?=$addthis_pubid?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
    </body>
</html>
<!-- COPYRIGHT by ScriptABC.com -->