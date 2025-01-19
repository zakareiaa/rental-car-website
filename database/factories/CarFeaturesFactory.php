<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFeaturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'abs' => $this->faker->boolean(),
            'air_conditioning' => $this->faker->boolean(),
            'power_windows' => $this->faker->boolean(),
            'power_door_locks' => $this->faker->boolean(),
            'cruise_control' => $this->faker->boolean(),
            'bluetooth_connectivity' => $this->faker->boolean(),
            'remote_start' => $this->faker->boolean(),
            'gps_navigation' => $this->faker->boolean(),
            'heater_seats' => $this->faker->boolean(),
            'climate_control' => $this->faker->boolean(),
            'rear_parking_sensors' => $this->faker->boolean(),
            'leather_seats' => $this->faker->boolean()
        ];
    }
}
