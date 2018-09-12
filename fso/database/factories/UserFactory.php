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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

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

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'description' => $faker->name,
        'type' => $faker->name,
        'user_id' => function()
        {
            return factory('App\User')->create()->id;
        },
        'workorder_id' => function()
        {
            return factory('App\WorkOrder')->create()->id;
        },
    ];
});


