<?php

use Illuminate\Database\Seeder;
use App\CallType;
class CallTypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('call_types')->delete();
        
        CallType::create(
            [
                "name" => "Standardni"
            ]
        );

        CallType::create(
            [
                "name" => "Hitni"
            ]
        );
        CallType::create(
            [
                "name" => "Interventni"
            ]
        );

    }
}
