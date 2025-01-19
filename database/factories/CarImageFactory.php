<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarImage>
 */
class CarImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<<<<<<< HEAD
            'image_path' => '/img/cars/Lexus-RX200t-2016/' . rand(1, 7) . '.jpeg',
=======
            'image_path' => $this->faker->imageUrl(),
>>>>>>> d31b216de56fc65efa4b782ba714561e21ad7f63
            'position' => function (array $attributes) {
                return Car::find($attributes['car_id'])->images()->count() + 1;
            },
        ];
    }
}
