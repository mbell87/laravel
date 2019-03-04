<?php

use Illuminate\Database\Seeder;
use App\UserRole;
class UserRoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        UserRole::create(
            [
	            'name' => "Admin"
            ]
        );

        UserRole::create(
            [
                'name' => "User"
            ]
        );
    }
}
