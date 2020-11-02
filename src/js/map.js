let map;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: {lat: 47.218371, lng: -1.553621},
        zoom: 13,
    });
}
