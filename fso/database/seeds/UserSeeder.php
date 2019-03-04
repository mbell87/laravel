<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Seed the application"s database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->delete();
        
        User::create(
            [
	            "name" => "Pero Perić",
	            "email" => "pero.peric"."@mail.com",
                "password" => bcrypt("123456"),
                "user_role_id" => 1,
            ]
        );

        User::create(
            [
	            "name" => "Mato Matić",
	            "email" => "mato.matic"."@mail.com",
                "password" => bcrypt("123456"),
                "user_role_id" => 2,

            ]
        );
        User::create(
            [
	            "name" => "Ivo Ivić",
	            "email" => "ivo.ivic"."@mail.com",
	            "password" => bcrypt("123456"),
                "user_role_id" => 2,

            ]
        );

    }
}
