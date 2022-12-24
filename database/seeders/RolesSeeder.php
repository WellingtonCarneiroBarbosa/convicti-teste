<?php

namespace Database\Seeders;

use App\Models\User\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    public const ROLES = [
        [
            'name'       => Role::MAIN_DIRECTOR_ROLE,
            'guard_name' => 'api',
        ],
        [
            'name'       => Role::SUB_DIRECTOR_ROLE,
            'guard_name' => 'api',
        ],
        [
            'name'       => Role::MANAGER_ROLE,
            'guard_name' => 'api',
        ],
        [
            'name'       => Role::SELLER_ROLE,
            'guard_name' => 'api',
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
