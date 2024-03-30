<?php

namespace Database\Factories;
use App\Models\ParkingLayout;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ParkingLayout>
 */
class ParkingLayoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ParkingLayout::class; 
    public function definition(): array
    {
        return [
            'location_id' => $this->faker->randomNumber(),
            'row' => $this->faker->numberBetween(0, 22),
            'column' => $this->faker->numberBetween(0, 22),
            'is_available' => $this->faker->boolean(),
        ];
    }
}
