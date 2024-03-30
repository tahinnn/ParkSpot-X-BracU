<!-- resources/views/parking/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Parking Basement Map</title>
<style>
        
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center; 
        align-items: center; 
        height: 100vh; 
    }
    #map-container {
        width: 1290px; 
        height: 412px; 
    }
    .row {
        display: flex;
        margin-bottom: 10px; 
    }
    .spot {
        width: 80px; 
        height: 100px; 
        border: 1px solid #333;
        cursor: pointer;
        margin-right: 8px; 
    }
    .spot:last-child {
        margin-right: 0;
    }
    .available {
        background-color: green;
    }
    .unavailable {
        background-color: red;
    }
</style>
</head>
<body>

<div id="map-container">
    <div id="map">
        
    </div>
</div>

<script>
const parkingData = [
    [1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1],
    [1, 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1],
    [0, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1],
    [1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1],
    [1, 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1],
];

function generateParkingSpots() {
    const map = document.getElementById('map');
    map.innerHTML = ''; 

    parkingData.forEach((row, rowIndex) => {
        const rowDiv = document.createElement('div');
        rowDiv.classList.add('row');

        row.forEach((spot, columnIndex) => {
            const spotDiv = document.createElement('div');
            spotDiv.classList.add('spot');
            spotDiv.classList.add(spot ? 'available' : 'unavailable');
            spotDiv.dataset.row = rowIndex;
            spotDiv.dataset.column = columnIndex;
            spotDiv.addEventListener('click', handleSpotClick);
            rowDiv.appendChild(spotDiv);
        });

        map.appendChild(rowDiv);
    });
}

function handleSpotClick(event) {
    const spot = event.target;
    const isAvailable = spot.classList.contains('available');
    
    if (isAvailable) {
        const row = spot.dataset.row;
        const column = spot.dataset.column;
        
        // Send a booking request to the server
        fetch('{{ route('parking.book') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ row, column })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update spot availability to booked
                spot.classList.remove('available');
                spot.classList.add('unavailable');
                alert(data.success);
            } else {
                alert(data.error);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    } else {
        alert('This spot is unavailable.');
    }
}

generateParkingSpots();
</script>

</body>
</html>
