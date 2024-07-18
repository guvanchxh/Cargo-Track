<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use App\Models\Cargo;

class OrderSeeder extends Seeder
{
    public function run()
    {
        User::all()->each(function ($user) {
            Order::factory()->count(2)->create(['user_id' => $user->id]);
        });

        Order::factory()->count(5)->create();
    }
}
