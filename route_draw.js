<!DOCTYPE html>
<html>
<head>
<title>Donor to Volunteer distance</title>

<script>
// *** This is a test script file, to draw the distance on the map form JpMorgan Office to SPIT College***

        function mapLocation() {
          var directionsDisplay;
          var directionsService = new google.maps.DirectionsService();
          var map;

            function initialize() {
                directionsDisplay = new google.maps.DirectionsRenderer();
                var jpmc = new google.maps.LatLng(19.1714867, 72.774886);
                var mapOptions = {
                    zoom: 7,
                    center: jpmc
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                directionsDisplay.setMap(map);
            }

            function calcRoute() {
                var start = new google.maps.LatLng(19.1714867, 72.774886);
                var end = new google.maps.LatLng(19.1190415, 72.840626);


                var request = {
                    origin: start,
                    destination: end,
                    travelMode: google.maps.TravelMode.DRIVING
                };
                directionsService.route(request, function (response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                    }
                });
            }            

            google.maps.event.addDomListener(window, 'load', initialize);
        }
        mapLocation();
    </script>