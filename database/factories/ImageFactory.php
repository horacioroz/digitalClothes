<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
     $filePath = storage_path('app/public/images/products');
    return [
        'image_name' => $faker->image($filePath,200,400, 'fashion', null, false),
        'product_id' => $faker->numberBetween($min = 16, $max = 50),
        'active' => (1),
    ];
});

