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
            TaskTypeSeeder::class,
            TaskTypeSeeder1::class,
            WOTypeSeeder::class,
            StatusSeeder::class,
            UserSeeder::class,
        ]);
        }
}
