<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingSpot; // Import the ParkingSpot model

class ParkingBookingController extends Controller
{
    public function book(Request $request)
    {
        // Validate the request data
        $request->validate([
            'parking_spot_id' => 'required|integer', // Assuming the parking spot ID is sent in the 'parking_spot_id' parameter
        ]);

        // Extract parking spot ID from the request
        $parkingSpotId = $request->input('parking_spot_id');

        // Find the parking spot by ID
        $parkingSpot = ParkingSpot::find($parkingSpotId);

        if (!$parkingSpot) {
            return response()->json(['error' => 'Parking spot not found'], 404);
        }

        // Check if the parking spot is available
        if (!$parkingSpot->is_available) {
            return response()->json(['error' => 'Parking spot is not available'], 400);
        }

        // Book the parking spot
        $parkingSpot->is_available = false;
        $parkingSpot->save();

        // Example response
        return response()->json([
            'message' => 'Parking spot booked successfully',
            'parking_spot_id' => $parkingSpotId,
        ]);
    }
}