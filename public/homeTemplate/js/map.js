// public/js/map.js

// Initialize the map

// function initMap() {
//     // Create a map object and specify the DOM element for display.
//     var map = new google.maps.Map(document.getElementById('map'), {
//         center: {lat: -34.397, lng: 150.644},
//         zoom: 8
//     });
// }


function resizeMap() {
    // Trigger a resize event on the map to adjust its size
    google.maps.event.trigger(map, 'resize');
}