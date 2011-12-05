function initialize() {
  var latlng = new google.maps.LatLng(-36.713906,-73.113078);
  var myOptions = {
    zoom: 15,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

  var marker = new google.maps.Marker({map: map, position: map.getCenter()});

  var infowindow = new google.maps.InfoWindow();
  infowindow.setContent('<p><b>MASEG</b></p><p>Bulnes 136 Of. 309, Talcahuano</p>');
  google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
  });
}
$(document).ready(function(){
  initialize();
});