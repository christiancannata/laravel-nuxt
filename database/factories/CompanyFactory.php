<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
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

$factory->define(\App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'headquarter_address' => $faker->streetAddress,
        'city' => $faker->city,
        'country' => $faker->country,
        'postcode' => $faker->postcode,
        'logo' => $faker->imageUrl(300, 300)];
});

$factory->state(User::class, 'company', function () {
    return [
        'role' => 'COMPANY'
    ];
});


$factory->state(User::class, 'user', function () {
    return [
        'role' => 'USER'
    ];
});
