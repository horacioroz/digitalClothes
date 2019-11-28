<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      // $arrays = range(0,20);
        for ($i=1;$i<30; $i++) {
          DB::table('color_product')->insert([
                'color_id' => mt_rand(1,14),
                'product_id' => mt_rand(1,15),
                ]);//
        }
    }
}
