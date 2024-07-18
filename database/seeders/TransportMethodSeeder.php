<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TransportMethod;

class TransportMethodSeeder extends Seeder
{
    public function run()
    {
        TransportMethod::factory()->create(['method' => 'Air']);
        TransportMethod::factory()->create(['method' => 'Sea']);
        TransportMethod::factory()->create(['method' => 'Land']);

        TransportMethod::factory()->count(2)->create();
    }
}
