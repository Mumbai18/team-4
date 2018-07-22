<?php include('connect.php');?>

<?php
//$email=mysqli_real_escape_string($conn,$_POST["email"]);
$sql = "SELECT * FROM donors where email='bkjsd@zc.bsjdv'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    //echo "<br><table><tr><th>First name</th><th>Room No.</th><th>Name</th><th>Gender</th><th>Phone No.</th><th>Age</th><th>Address</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $res=$row['address'];
    }
}
?>
<!DOCTYPE html>
<html>
<!--refer https://developers.google.com/maps/documentation/javascript/directions -->
<head>
  <title>Directions service</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <style>
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

    #map {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */

    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  
  </style>
</head>

<body>
  <div>
  From:
   <input type="text" id="txtFrom" />
   To:
    <input type="text" id="txtTo" />
	
    <button id="directions">Show Directions</button>
    <div>
      <strong>Results</strong>
    </div>
    <div id="output"></div>
  </div>
  	<div id="map"></div>
    <label id="donor_add"></label>  

<script>
	 var map;
    $("#directions").click(function () {
	      var originLoc = "<?php echo $res ?>";
          var destinationLoc = "dadar";
		  var selectedMode = document.getElementById('mode').value;
          var geocoder = new google.maps.Geocoder;
          var directionsDisplay = new google.maps.DirectionsRenderer;
		  var directionsService = new google.maps.DirectionsService;
		  directionsDisplay.setMap(map);
          //getting directions from Google
          directionsService.route	({
            origin: originLoc,
            destination: destinationLoc,
            travelMode: google.maps.TravelMode[selectedMode],
            avoidHighways: false,
            avoidTolls: false
          }, function (response, status) {
            if (status !== 'OK') {
              alert('Error was: ' + status);
            } else {
			  directionsDisplay.setDirections(response);
              var outputDiv = document.getElementById('output');
			  var distance = response.routes[0].legs[0].distance.text;
			  var duration = response.routes[0].legs[0].duration.text;
			  var fromLoc = response.routes[0].legs[0].start_address;
			  var toLoc = response.routes[0].legs[0].end_address;
			  var steps = 'From '+fromLoc+' to '+toLoc+' can be reached by below route in '+duration+ ' travelling '+ distance +'<br/>';
              for (var i = 0; i < response.routes[0].legs[0].steps.length; i++) {
                steps += response.routes[0].legs[0].steps[i].instructions + " For "+response.routes[0].legs[0].steps[i].distance.text + "<br/>";
              }
			  outputDiv.innerHTML = steps;
            }
          });
    });
	
	 function initMap() {
	 console.log('Map init');
      map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 19.02, lng: 72.87 },
        zoom: 12
      });
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB02kJAA_uRSYZ823KxsKM3B1yQemFj4s&callback=initMap">

  </script>
</body>

</html>