<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     ApplicationSeeder::class,
        // ]);

        if (app()->environment('local')) {
            $this->factoryOrders();
        }
    }

    private function factoryOrders(): void
    {
        Order::factory(200)->make()->each(function (Order $order) {
            dd($order->amount->formatted(true));
        });
    }
}
