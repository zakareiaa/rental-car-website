<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
<<<<<<< HEAD
use App\Models\Model;
=======
>>>>>>> d31b216de56fc65efa4b782ba714561e21ad7f63
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'maker_id' => Maker::inRandomOrder()->first()->id,
            'model_id' => function (array $attributes) {
<<<<<<< HEAD
                return Model::where('maker_id', $attributes['maker_id'])->inRandomOrder()->first()->id;
=======
                return Maker::where('id', $attributes['maker_id'])->inRandomOrder()->first()->id;
>>>>>>> d31b216de56fc65efa4b782ba714561e21ad7f63
            },
            'year' => $this->faker->year(),
            'price' => ((int)$this->faker->randomFloat(2, 5, 100)) * 1000,
            'vin' => strtoupper(Str::random(17)),
            'mileage' => ((int)$this->faker->randomFloat(2, 5, 500)) * 1000,
            'car_type_id' => CarType::inRandomOrder()->first()->id,
            'fuel_type_id' => FuelType::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'city_id' => City::inRandomOrder()->first()->id,
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'description' => $this->faker->text(),
            'published_at' => $this->faker->optional(.9)->dateTimeBetween('-1 months', '+1 day'),
        ];
    }
}
