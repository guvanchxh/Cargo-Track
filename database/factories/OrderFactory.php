<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use App\Models\Cargo;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'cargo_id' => Cargo::factory(),
            'order_date' => $this->faker->date(),
        ];
    }
}
