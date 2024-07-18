<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeliveryStatus;
use App\Models\Shipment;

class DeliveryStatusSeeder extends Seeder
{
    public function run()
    {
        Shipment::all()->each(function ($shipment) {
            DeliveryStatus::factory()->count(1)->create(['shipment_id' => $shipment->id]);
        });

        DeliveryStatus::factory()->count(2)->create();
    }
}
