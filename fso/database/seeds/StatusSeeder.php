<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_types')->delete();
        
        Status::create(
            [
                "name" => "U radu"
            ]
        );

        Status::create(
            [
                "name" => "Završeno"
            ]
        );
        Status::create(
            [
                "name" => "Izvršeno"
            ]
        );

    }
}
