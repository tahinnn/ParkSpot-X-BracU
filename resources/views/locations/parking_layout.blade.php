<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Layout</title>
    <style>
        /* Add your CSS styling for the parking layout here */
        .parking-spot {
            width: 50px;
            height: 50px;
            background-color: green; /* Default color for available spots */
            border: 1px solid black;
            margin: 5px;
            display: inline-block;
            cursor: pointer; /* Add cursor pointer for interaction */
        }
        .parking-spot.unavailable {
            background-color: red; /* Change color for unavailable spots */
        }
    </style>
</head>
<body>
    <h1>Parking Layout</h1>
    <div id="parking-layout">
        <!-- Parking spots will be dynamically rendered here -->
    </div>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // JavaScript code for dynamic rendering of parking spots
        $(document).ready(function() {
            // Dummy data for demonstration
            var parkingLayoutData = {!! $parkingLayout->layout_data !!}; // Retrieve layout data from the controller
            
            // Function to render parking spots based on data
            function renderParkingSpots(layoutData) {
                var parkingLayoutHtml = '';
                layoutData.forEach(function(parkingSpot) {
                    var availabilityClass = parkingSpot.available ? '' : 'unavailable';
                    parkingLayoutHtml += '<div class="parking-spot ' + availabilityClass + '" data-id="' + parkingSpot.id + '"></div>';
                });
                $('#parking-layout').html(parkingLayoutHtml);
            }

            // Render parking spots initially
            renderParkingSpots(parkingLayoutData);

            // Example of how to handle click event for parking spots
            $(document).on('click', '.parking-spot', function() {
                var spotId = $(this).data('id');
                // Handle click event (e.g., display spot details, reserve spot, etc.)
                alert('Clicked parking spot: ' + spotId);
            });

            // Function to update availability of parking spots (use AJAX to fetch real-time data)
            function updateParkingAvailability() {
                // Example: AJAX request to fetch updated availability data
                // $.ajax({
                //     url: '/api/parking/availability',
                //     method: 'GET',
                //     success: function(data) {
                //         renderParkingSpots(data); // Update parking spots based on fetched data
                //     },
                //     error: function(xhr, status, error) {
                //         console.error('Error fetching parking availability:', error);
                //     }
                // });

                // Dummy example: Toggle availability randomly for demonstration
                $('.parking-spot').each(function() {
                    var isAvailable = Math.random() < 0.5; // Randomly determine availability
                    $(this).toggleClass('unavailable', !isAvailable); // Update availability class
                });
            }

            // Periodically update availability (e.g., every 1 minute)
            setInterval(updateParkingAvailability, 60000); // Update every 60 seconds
        });
    </script>
</body>
</html>
