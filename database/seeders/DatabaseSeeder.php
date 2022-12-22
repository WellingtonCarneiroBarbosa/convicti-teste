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
            $this->factoryOrdersLocal();
        }

        if (app()->environment('testing')) {
            $this->factoryOrdersTesting();
        }
    }

    private function factoryOrdersLocal(): void
    {
        $this->command->warn('Factoring orders...');

        $sellers = User::role('seller')->get();

        $this->command->withProgressBar(count($sellers), function () use ($sellers) {
            $this->command->getOutput()->progressStart();

            $sellers->each(function (User $seller) {
                Order::factory(random_int(10, 150))->seller($seller)->make()->each(
                    function (Order $order) use ($seller) {
                        $order->unity()->associate($seller->unity);

                        $order->save();
                    }
                );

                $this->command->getOutput()->progressAdvance();
            });
        });
    }

    private function factoryOrdersTesting()
    {
        $this->command->warn('Factoring orders...');

        $seller = User::role('seller')->firstOrFail();

        Order::factory(2)->seller($seller)->make()->each(
            function (Order $order) use ($seller) {
                $order->unity()->associate($seller->unity);

                $order->save();
            }
        );
    }
}
