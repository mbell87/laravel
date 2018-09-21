<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(App\Workorder::class, function (Faker $faker) {
    return [
        'user_id' => function()
        {
            return factory('App\User')->create()->id;
        },
        'wo_type_id' => function()
        {
            return factory('App\WOType')->create()->id;
        },
        'wwms' => $faker->randomNumber,
        'mdf_id' => function()
        {
            return factory('App\MDF')->create()->id;
        },
        'address' => $faker->address,
        'client' => $faker->name,
        'status_id'  => function()
        {
            return factory('App\Status')->create()->id;
        },
        'mpc_id' => $faker->randomNumber,

        
        
    ];
});

