<?php

namespace Database\Factories;

use App\Models\Shipment;
use App\Models\Order;
use App\Models\TransportVehicle;
use App\Models\TransportMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipmentFactory extends Factory
{
    protected $model = Shipment::class;

    public function definition()
    {
        return [
            'order_id' => Order::factory(),
            'transport_vehicle_id' => TransportVehicle::factory(),
            'transport_method_id' => TransportMethod::factory(),
            'shipment_date' => $this->faker->date(),
        ];
    }
}
