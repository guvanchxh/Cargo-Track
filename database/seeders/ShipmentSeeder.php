<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shipment;
use App\Models\Order;
use App\Models\TransportVehicle;
use App\Models\TransportMethod;

class ShipmentSeeder extends Seeder
{
    public function run()
    {
        Order::all()->each(function ($order) {
            Shipment::factory()->count(1)->create([
                'order_id' => $order->id,
                'transport_vehicle_id' => TransportVehicle::inRandomOrder()->first()->id,
                'transport_method_id' => TransportMethod::inRandomOrder()->first()->id,
            ]);
        });

        Shipment::factory()->count(3)->create();
    }
}
