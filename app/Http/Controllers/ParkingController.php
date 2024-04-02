<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingSpot; // Import the ParkingSpot model

class ParkingController extends Controller
{
    public function scan(Request $request)
    {
        // Validate the request data
        $request->validate([
            'qr_code_data' => 'required|string', // Assuming the QR code data is sent in the 'qr_code_data' parameter
        ]);

        // Extract data from the scanned QR code
        $qrCodeData = $request->input('qr_code_data');

        // Extract parking spot ID from QR code data
        $parkingSpotId = $this->extractParkingSpotId($qrCodeData);

        if (!$parkingSpotId) {
            return response()->json(['error' => 'Invalid QR code data'], 400);
        }

        // Check if the parking spot with the given ID exists and is available
        $parkingSpot = ParkingSpot::find($parkingSpotId);

        if (!$parkingSpot) {
            return response()->json(['error' => 'Parking spot not found'], 404);
        }

        if (!$parkingSpot->is_available) {
            return response()->json(['error' => 'Parking spot is not available'], 400);
        }

        // Example response
        return response()->json([
            'message' => 'QR code scanned successfully',
            'parking_spot_id' => $parkingSpotId,
        ]);
    }

    // Method to extract parking spot ID from QR code data
    private function extractParkingSpotId(string $qrCodeData): ?int
    {
        // Your logic to extract parking spot ID from QR code data
        // This can vary based on how your QR codes are structured

        // For example, if your QR code data follows a format like 'parking_spot_id:12345',
        // you can extract the ID after the ':' character
        $dataParts = explode(':', $qrCodeData);

        if (count($dataParts) !== 2 || $dataParts[0] !== 'parking_spot_id') {
            return null; // Invalid format
        }

        return intval($dataParts[1]);
    }
}