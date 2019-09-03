<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\stident;
use Faker\Generator as Faker;

$factory->define(stident::class, function (Faker $faker) {
    return [
        'studentname'=>$faker->sentence(1),
        'image'=>$faker->sentence(1),
    ];
});
