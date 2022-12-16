<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    public const ROLES = [
        [
            'name' => 'main-director',
            'guard_name' => 'api'
        ],
        [
            'name' => 'director',
            'guard_name' => 'api'
        ],
        [
            'name' => 'manager',
            'guard_name' => 'api'
        ],
        [
            'name' => 'seller',
            'guard_name' => 'api'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::ROLES as $role) {
            Role::create($role);
        }
    }
}
