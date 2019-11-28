<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $color=['Azul','Rojo', 'Negro','Blanco','Violeta','Verde','Amarillo','Celeste','Bordó','Rosa','Beige','Crema','Verde Musgo','Azul Francia'];
      // $arrays = range(0,20);
        foreach ($color as $valor) {
          DB::table('colors')->insert([
              'color_name' => $valor,
              'active' => (1)]);  //
        }
    }
}
