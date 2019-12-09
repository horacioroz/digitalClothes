<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
        $filePath = storage_path('app/public/images/products');

    return [

        'name' => $faker->firstName,
        'description' => ('Una descripción cualquiera'),
        'category_id' => $faker->randomDigitNotNull(0),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000),
        'discount_porcent' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 30),
        'active' => (1),
        ];
});
