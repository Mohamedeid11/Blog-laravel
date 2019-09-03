<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(1),
        'posts'=>$faker->sentence(1),
    ];
});
