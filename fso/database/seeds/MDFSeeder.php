<?php

use Illuminate\Database\Seeder;
use App\MDF;
use App\TaskType;
class MDFSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mdfs')->delete();
        
        MDF::create(
            [
                "name" => "RG_20_GOVEĐARI"
            ]
        );

        MDF::create(
            [
                "name" => "RG_20_BABINO POLJE"
            ]
        );

        DB::table('task_types')->delete();
        

    }
}
