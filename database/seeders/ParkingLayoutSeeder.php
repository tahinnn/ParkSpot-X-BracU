<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ParkingLayout;

class ParkingLayoutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for parking_layouts table
        $data = [
            ['location_id' => 1, 'row' => 1, 'column' => 1, 'layout_data' => '...', 'is_available' => true],
            ['location_id' => 1, 'row' => 1, 'column' => 2, 'layout_data' => '...', 'is_available' => true],
            ['location_id' => 1, 'row' => 2, 'column' => 1, 'layout_data' => '...', 'is_available' => false],
            // Add more data as needed
        ];

        // Insert data into the parking_layouts table
        foreach ($data as $row) {
            ParkingLayout::create($row);
        }
    }
}
