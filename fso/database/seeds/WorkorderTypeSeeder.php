<?php

use Illuminate\Database\Seeder;
use App\WorkorderType;

class WorkorderTypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workorder_types')->delete();
        
        WorkorderType::create(
            [
                "name" => "FR(n) - Mjerenje linije",
                "job_group" => "B1-13"
            ]
        );

        WorkorderType::create(
            [
                "name" => "FR(n) - Podzemni kabel",
                "job_group" => "B1-13"
            ]
        );
        WorkorderType::create(
            [
                "name" => "FR(n) - Zračni kabel",
                "job_group" => "B1-13"
            ]
        );
    }
}
