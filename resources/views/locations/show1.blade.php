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
    const row = event.target.dataset.row;
    const column = event.target.dataset.column;
    alert(`Clicked on parking spot at row ${row}, column ${column}`);
}


generateParkingSpots();
</script>
</body>
</html>
