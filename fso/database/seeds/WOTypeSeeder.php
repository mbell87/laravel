<?php

use Illuminate\Database\Seeder;
use App\WOType;
class WOTypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wo_types')->delete();
        
        WOType::create(
            [
                "name" => "FR(n) - Mjerenje linije",
                "job_group" => "B1-13"
            ]
        );

        WOType::create(
            [
                "name" => "FR(n) - Podzemni kabel",
                "job_group" => "B1-13"
            ]
        );
        WOType::create(
            [
                "name" => "FR(n) - Zračni kabel",
                "job_group" => "B1-13"
            ]
        );
    }
}
