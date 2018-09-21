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
                "name" => "FR(n) - Mjerenje linije"
            ]
        );

        WOType::create(
            [
                "name" => "FR(n) - Podzemni kabel"
            ]
        );
        WOType::create(
            [
                "name" => "FR(n) - Zračni kabel"
            ]
        );
    }
}
