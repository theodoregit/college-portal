<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

//model factory for courses
$factory->define(App\ComputerScience::class, function (Faker\Generator $faker){
    return [
        'coursename' => $faker->word,
        'coursenumber' => $faker->word,
        'year' => $faker->numberBetween($min = 1, $max = 7),
        'semester' => $faker->numberBetween($min = 1, $max = 3),
        'credithr' => $faker->numberBetween($min = 1, $max = 6)
    ];
});
