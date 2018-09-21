<?php

use Illuminate\Database\Seeder;
use App\TaskType;
class TaskTypeSeeder1 extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_types')->delete();
        
        TaskType::create(
            [
                "name" => "Mjerenje linije"
            ]
        );

        TaskType::create(
            [
                "name" => "Podzemni kabel"
            ]
        );
        TaskType::create(
            [
                "name" => "Zračni kabel"
            ]
        );

        TaskType::create(
            [
                "name" => "Iskop"
            ]
        );

    }
}
