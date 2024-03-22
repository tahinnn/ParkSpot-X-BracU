<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
            width: 100%;  
            height: 650px;
        }
        .info-window {
            max-width: 300px; 
            max-height: 200px; 
            overflow: auto; 
            padding: 10px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2></h2>
        <div id="map"></div>
    </div>
  
    <script type="text/javascript">
        // Initialize the map
        function initMap() {
            // Create a map object 
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 23.7801, lng: 90.4162},
                zoom: 14.5
            });
        
            // Array of locations (latitude and longitude coordinates)
            var locations = [
                {lat: 23.77280940006052, lng: 90.4253818554993, info: "Merul Badda Parking ", url: "{{ route('location', ['id' => 1]) }}"},
                {lat: 23.780455656854187, lng: 90.40725217125892, info: "Mohakhali Parking ", url: "{{ route('location', ['id' => 2]) }}"},
                {lat: 23.768948535640135, lng: 90.42564139578243, info: "Aftabnagar Parking ", url: "{{ route('location', ['id' => 3]) }}"}
                
            ];
        
            // Create markers for each location
            locations.forEach(function(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    title: 'ParkSpot Parking'
                });

                // Create an info window for each marker
                var infoWindow = new google.maps.InfoWindow({
                    content: '<div class="info-window">' + location.info + '</div>'
                });

                // Show info window when marker is hovered
                marker.addListener('mouseover', function() {
                    infoWindow.open(map, marker);
                });

                // Hide info window when mouse leaves marker
                marker.addListener('mouseout', function() {
                    infoWindow.close();
                });

                // Redirect to the destination page when marker is clicked
                marker.addListener('click', function() {
                    window.location.href = location.url;
                });
            });
        }

        window.initMap = initMap;
    </script>
  
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
</body>
</html>
