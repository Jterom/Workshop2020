// Initialize and add the map
function initMap() {
  // The location of Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: { lat: -25.344, lng: 131.036 },
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: {lat: -45.457, lng: 135.1231},
    map: map,
  });
  const marker2 = new google.maps.Marker({
    position: {lat: -43.57, lng: 135.1231},
    map: map,
  });
}
