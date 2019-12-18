<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 50)->create()->each(function ($product) {
            $product->images()->save(factory(App\Image::class)->make());
            $product->images()->save(factory(App\Image::class)->make());
            $product->images()->save(factory(App\Image::class)->make());
        });
    }
}
