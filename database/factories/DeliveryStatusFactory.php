<?php

namespace Database\Factories;

use App\Models\DeliveryStatus;
use App\Models\Shipment;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryStatusFactory extends Factory
{
    protected $model = DeliveryStatus::class;

    public function definition()
    {
        return [
            'shipment_id' => Shipment::factory(),
            'status' => $this->faker->randomElement(['Pending', 'In Transit', 'Delivered']),
        ];
    }
}
