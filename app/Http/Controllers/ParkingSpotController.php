<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ParkingLayout;
use App\Models\ParkingSpot;

class ParkingSpotController extends Controller
 
 {
     public function index()
     {
         // Retrieve all parking spots from the database
         $parkingSpots = ParkingSpot::all();
 
         // Pass the parking spots data to the view
         return view('parking.index', compact('parkingSpots'));
     }
 
     
    public function book(Request $request)
    {
        // Retrieve row and column from the request
        $row = $request->input('row');
        $column = $request->input('column');
        
        // Logic to book the parking spot based on row and column
        // This could involve updating the database or performing other operations
        
        // For example, you might update the ParkingLayout model to mark the spot as booked
        ParkingLayout::where('row', $row)
                    ->where('column', $column)
                    ->update(['is_available' => false]);
        
        // Return a response indicating success or failure
        return response()->json(['success' => 'Spot booked successfully']);
    }
    // Inside your ParkingSpotController.php

    public function getParkingLayout()
    {
        // Retrieve parking layout data from the database
        $parkingLayoutData = ParkingLayout::all();
    
        // Return the data as JSON response
        return response()->json($parkingLayoutData);
    }

    
 }
 



