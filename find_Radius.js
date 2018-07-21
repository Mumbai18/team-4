// we assume that you have an array of markers
var markers = [];

//In order to lookup the the position of a zip-code using geocoding API:
var geocode_api_base_url = "http://maps.googleapis.com/maps/api/geocode/json?";
var params = {
    adress : sample_input,
    components : "country:us",
    sensor : false
}
// This is the result set of markers in area
var in_area = [];

//  http://maps.googleapis.com/maps/api/geocode/json?address=05673&components=country:US&sensor=false
$.getJSON( geocode_api_base_url + $.param(params), function(data) {

    var location, search_area, in_area = [];

    location = data['results'][0]['address_components']['geometry']['location'];

    // We create a circle to look within:
    search_area = {
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        center : new google.maps.LatLng(location.lat, location.lon),
        radius : 500
    }

    search_area = new google.maps.Circle(search_area);

    $.each(markers, function(i,marker) {
       if (google.maps.geometry.poly.containsLocation(marker.getPosition(), search_area)) {
         in_area.push(marker);
       }
    });

    console.info(in_area);

});