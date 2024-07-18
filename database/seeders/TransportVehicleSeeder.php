<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TransportVehicle;

class TransportVehicleSeeder extends Seeder
{
    public function run()
    {
        TransportVehicle::factory()->count(5)->create();
    }
}
