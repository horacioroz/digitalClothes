<?php

use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<50; $i++) {
          DB::table('product_size')->insert([
                'product_id' => mt_rand(1,15),
                'size_id' => mt_rand(1,14),
                ]);//
        }

    }
}
