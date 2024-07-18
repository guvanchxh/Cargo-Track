<?php

namespace Database\Factories;

use App\Models\TransportMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransportMethodFactory extends Factory
{
    protected $model = TransportMethod::class;

    public function definition()
    {
        return [
            'method' => $this->faker->randomElement(['Air', 'Sea', 'Land']),// generate random method
        ];
    }
}
