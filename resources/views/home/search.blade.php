<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('public/js/map.js') }}"></script>
    <!-- Include the Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfDfQ5ko4zUOVO-3Vqz7QLR5Wwa2HlU6w&callback=initMap" defer></script>
    <!-- Include CSS file -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title></title>
</head>
<body>
<script src="{{ asset('js/map.js') }}"></script>
<div class="row " style="margin-top: 70px;padding: 40px;" align="center"> 
        <div class="col-lg-6 col-md-6 ">
          <div class="cover">
            <img src="image/park.jpg" alt=""> 
            <div class="input">     
            <div class="mb-3 " >
                <h2 style="padding: 10px;">Choose Car Parking Location</h2>
                <form id="parking-form">

                 <!--
                <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 20px;">FullName</label>
                <div class="col-sm-10">
                  <input type="text" class="fullName" id="name">
                </div>
              </div>
             
      <div class="mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 20px;">PlateNumber</label>
        <div class="col-sm-10">
          <input type="number" class="plate-number" id="pl-num">
        </div>
      </div>

      <div class="mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 20px;">Color</label>
        <div class="col-sm-10">
          <input type="text" class="car-color" id="carC">
        </div>
      </div>

      <div class="mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 20px;">PhoneNumber</label>
        <div class="col-sm-10">
          <input type="tel" class="tel-num" id="telNum">
        </div>
      </div>
      <button type="button" class="btn btn-primary" id="btn"> Park </button>
      </div>
    </form>
-->
    
    <!--google map html -->
    
    @include("googleAutocomplete")


    
    













</body>
</html>



