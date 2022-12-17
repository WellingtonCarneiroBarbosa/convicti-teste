<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createMainDirectorUser();

        $this->createSubDirectorUsers();

        $this->createManagerUsers();

        $this->createSellerUsers();
    }

    protected function createMainDirectorUser(): void
    {
        $user = new User();

        $user->forceFill([
            'name'     => ApplicationSeeder::MAIN_DIRECTOR['name'],
            'email'    => ApplicationSeeder::MAIN_DIRECTOR['email'],
            'password' => ApplicationSeeder::DEFAULT_PASSWORD,
        ])->save();

        $user->assignRole(Role::findByName('main-director', 'api'));
    }

    protected function createSubDirectorUsers(): void
    {
        foreach (ApplicationSeeder::SUB_DIRECTORS as $subDirector) {
            $user = new User();

            $user->forceFill([
                'name'     => $subDirector['name'],
                'email'    => $subDirector['email'],
                'password' => ApplicationSeeder::DEFAULT_PASSWORD,
            ])->save();

            $user->assignRole(Role::findByName('sub-director', 'api'));
        }
    }

    protected function createManagerUsers(): void
    {
        foreach (ApplicationSeeder::MANAGERS as $manager) {
            $user = new User();

            $user->forceFill([
                'name'     => $manager['name'],
                'email'    => $manager['email'],
                'password' => ApplicationSeeder::DEFAULT_PASSWORD,
            ])->save();

            $user->assignRole(Role::findByName('manager', 'api'));
        }
    }

    protected function createSellerUsers(): void
    {
        foreach (ApplicationSeeder::SELLERS as $seller) {
            $user = new User();

            $user->forceFill([
                'name'     => $seller['name'],
                'email'    => $seller['email'],
                'password' => ApplicationSeeder::DEFAULT_PASSWORD,
            ])->save();

            $user->assignRole(Role::findByName('seller', 'api'));
        }
    }
}
