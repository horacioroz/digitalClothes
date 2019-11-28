<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
        $filePath = storage_path('app/public/images/products');
        // $colors = array();
        //  $max=15;
        //  $x= 0;
        //     while ($x<4) {
        //         $num_aleatorio = rand(1,$max);
        //         if (!in_array($num_aleatorio,$colors)) {
        //             array_push($colors,$num_aleatorio);
        //             $x++;
        //          }
        //     }
        //     // for ($i=0; $i < 4; $i++) {
        //     // // get a random digit, but always a new one, to avoid duplicates
        //     // $colors []= $faker->unique()->randomDigitNotNull();
        //     // }
        // $x = 0;
        // $sizes = array();
        //     while ($x<8) {
        //         $num_aleatorio = rand(1,$max);
        //         if (!in_array($num_aleatorio,$sizes)) {
        //             array_push($sizes,$num_aleatorio);
        //             $x++;
        //          }
        //     }
            // for ($i=0; $i < 15; $i++) {
            // // get a random digit, but always a new one, to avoid duplicates
            // $sizes []= $faker->randomDigitNotNull();
            // }

    return [

        'name' => $faker->firstName,
        'description' => ('Una descripción cualquiera'),//$faker->sentences($nb = 3, $asText = false),
        'category_id' => $faker->randomDigitNotNull(0),
        //'prod_img' => ('1,2,3,4'),
        //'prod_img' => $faker->image($filePath,400,300, 'fashion', null, false),
        //'color_id' => $faker->randomElements($array = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'), $count = 4),
        //'size_id' => $faker->randomElements($array = array ('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'),$count=8),
        // 'color_id' => ('1,2,3,4'),
        // 'size_id' => ('1,2,3,4'),

        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000),
        'discount_porcent' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 30),
        'active' => (1),
        ];
});
