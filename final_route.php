<?php include('connect.php');?>

<?php
//$email=mysqli_real_escape_string($conn,$_POST["email"]);
$sql = "SELECT * FROM donors where email='bkjsd@zc.bsjdv'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    //echo "<br><table><tr><th>First name</th><th>Room No.</th><th>Name</th><th>Gender</th><th>Phone No.</th><th>Age</th><th>Address</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $don=$row['address'];
    }
}
$sql = "SELECT * FROM volunteers where email='bkjsd@zc.bsjdv'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    //echo "<br><table><tr><th>First name</th><th>Room No.</th><th>Name</th><th>Gender</th><th>Phone No.</th><th>Age</th><th>Address</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $vol=$row['address'];
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
  Donor:
   <input type="text" id="txtFrom" />
   Volunteer:
    <input type="text" id="txtTo" />
  Mode of Travel:
  <select id="mode">
    <option value="DRIVING">Driving</option>
    <option value="WALKING">Walking</option>
    <option value="BICYCLING">Bicycling</option>
    <option value="TRANSIT">Transit</option>
  </select>
    <button id="directions">Show Directions</button>
    <div>
      <strong>Results</strong>
    </div>
    <div id="output"></div>
  </div>
    <div id="map"></div>

  <script>
   var map;
    $("#directions").click(function () {
        var originLoc = "<?php echo $don ?>";
          var destinationLoc = "<?php echo $don ?>" ;
      var selectedMode = document.getElementById('mode').value;
          var geocoder = new google.maps.Geocoder;
          var directionsDisplay = new google.maps.DirectionsRenderer;
      var directionsService = new google.maps.DirectionsService;
      directionsDisplay.setMap(map);
          //getting directions from Google
          directionsService.route ({
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
