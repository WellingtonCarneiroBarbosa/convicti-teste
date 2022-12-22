<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order;
use App\Models\User;
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
        $this->call([
            ApplicationSeeder::class,
        ]);

        if (app()->environment('local')) {
            $this->factoryOrders();
        }
    }

    private function factoryOrders(): void
    {
        $this->command->warn('Factoring orders...');

        $sellers = User::role('seller')->get();

        $this->command->withProgressBar(count($sellers), function () use ($sellers) {
            $this->command->getOutput()->progressStart();

            $sellers->each(function (User $user) {
                Order::factory(random_int(10, 150))->seller($user)->make()->each(
                    function (Order $order) use ($user) {
                        $order->unity()->associate($user->unity);

                        $order->save();
                    }
                );

                $this->command->getOutput()->progressAdvance();
            });
        });
    }
}
