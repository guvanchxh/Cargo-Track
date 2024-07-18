<?php

namespace Database\Factories;

use App\Models\TransportVehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransportVehicleFactory extends Factory
{
    protected $model = TransportVehicle::class;

    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['truck', 'ship', 'plane']),
            'license_plate' => $this->faker->unique()->bothify('TM-####'),
            'capacity' => $this->faker->numberBetween(1000, 10000),
        ];
    }
}
