<?php

use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $size=['Small','Medium', 'Large','Xlarge','XXlarge','Xsmall','XXsmall','34','35','36','37','38','39','40','41','42','43','44','45','46'];
      // $arrays = range(0,20);
        foreach ($size as $valor) {
          DB::table('sizes')->insert([
              'size_name' => $valor,
              'active' => (1)]);  //
        }
    }
}
