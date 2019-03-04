<?php

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
            MDFSeeder::class,
            StatusSeeder::class,
            TaskTypeSeeder::class,
            WorkorderTypeSeeder::class,
            UserRoleSeeder::class,
            UserSeeder::class,
            CallTypeSeeder::class,
        ]);
        }
}
