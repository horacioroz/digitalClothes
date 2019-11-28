<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
         'color_id' => $faker->numberBetween($min = 1, $max = 14),
         'product_id' => $faker->numberBetween($min = 1, $max = 15),
    ];
});
