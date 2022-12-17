<?php

namespace Database\Seeders;

use App\Models\Unity;
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
        $this->command->comment('Seeding main director user...');

        $user = new User();

        $user->forceFill([
            'name'     => ApplicationSeeder::MAIN_DIRECTOR['name'],
            'email'    => ApplicationSeeder::MAIN_DIRECTOR['email'],
            'password' => ApplicationSeeder::DEFAULT_PASSWORD,
        ])->save();

        $user->assignRole(Role::findByName('main-director', 'api'));

        $this->command->info('Done.');

        $this->command->newLine(1);
    }

    protected function createSubDirectorUsers(): void
    {
        $this->command->comment('Seeding sub director users...');

        $this->command->withProgressBar(count(ApplicationSeeder::SUB_DIRECTORS), function () {
            $this->command->getOutput()->progressStart();

            foreach (ApplicationSeeder::SUB_DIRECTORS as $subDirector) {
                $user = new User();

                $user->forceFill([
                    'name'     => $subDirector['name'],
                    'email'    => $subDirector['email'],
                    'password' => ApplicationSeeder::DEFAULT_PASSWORD,
                ])->save();

                $user->assignRole(Role::findByName('sub-director', 'api'));

                $this->command->getOutput()->progressAdvance();
            }
        });

        $this->command->newLine(2);
    }

    protected function createManagerUsers(): void
    {
        $this->command->comment('Seeding manager users...');

        $this->command->withProgressBar(count(ApplicationSeeder::MANAGERS), function () {
            $this->command->getOutput()->progressStart();

            foreach (ApplicationSeeder::MANAGERS as $manager) {
                $user = new User();

                $user->forceFill([
                    'name'     => $manager['name'],
                    'email'    => $manager['email'],
                    'password' => ApplicationSeeder::DEFAULT_PASSWORD,
                ]);

                $user->unity()->associate(
                    Unity::findByName($manager['unity'], true),
                );

                $user->save();

                $user->assignRole(Role::findByName('manager', 'api'));

                $this->command->getOutput()->progressAdvance();
            }
        });

        $this->command->newLine(2);
    }

    protected function createSellerUsers(): void
    {
        $this->command->comment("Seeding seller users...");

        $this->command->withProgressBar(count(ApplicationSeeder::SELLERS), function () {
            $this->command->getOutput()->progressStart();

            foreach (ApplicationSeeder::SELLERS as $seller) {
                $user = new User();

                $user->forceFill([
                    'name'     => $seller['name'],
                    'email'    => $seller['email'],
                    'password' => ApplicationSeeder::DEFAULT_PASSWORD,
                ]);

                $user->unity()->associate(
                    Unity::findByName($seller['unity'], true),
                );

                $user->save();

                $user->assignRole(Role::findByName('seller', 'api'));

                $this->command->getOutput()->progressAdvance();
            }
        });

        $this->command->newLine(2);
    }
}
