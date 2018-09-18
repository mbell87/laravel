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

$factory->define(App\WorkOrder::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'type' => $faker->name,
        'user_id' => function()
        {
            return factory('App\User')->create()->id;
        }
        ,
    ];
});

