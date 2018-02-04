// The following example creates a marker in Stockholm, Sweden
// using a DROP animation. Clicking on the marker will toggle
// the animation between a BOUNCE animation and no animation.

var bytca = new google.maps.LatLng(49.223644, 18.558920);
var mrckovo = new google.maps.LatLng(49.232803, 18.549279);
var marker;
var map;

function initialize() {
  var mapOptions = {
    zoom: 12,
    center: bytca
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);

  marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: mrckovo
  });
  google.maps.event.addListener(marker, 'click', toggleBounce);
}

function toggleBounce() {

  if (marker.getAnimation() != null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

google.maps.event.addDomListener(window, 'load', initialize);