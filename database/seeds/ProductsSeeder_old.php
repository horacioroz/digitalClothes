<?php

use Illuminate\Database\Seeder;

class ProductSeeder_old extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = factory(App\Product::class, 50)->create();
    }
}
