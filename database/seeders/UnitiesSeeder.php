<?php

namespace Database\Seeders;

use App\Models\Unity;
use Illuminate\Database\Seeder;

class UnitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (ApplicationSeeder::UNITIES as $unity) {
            $unit = new Unity();

            $unit->forceFill([
                'name'      => $unity['name'],
                'latitude'  => $unity['latitude'],
                'longitude' => $unity['longitude'],
                'region'    => $unity['region'],
            ])->save();
        }
    }
}
