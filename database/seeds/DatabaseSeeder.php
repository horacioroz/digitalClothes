<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
         $this->truncateTables([
             'users'
         ]);

        $this->call(UserTableSeeder::class);
    }

    protected function truncateTables(array $tables){
       DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
        DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
/*DESACTIVA REVISION DE FOREING KEYS EN LA BASE DE DATOS*/
//elimina los datos de la tabla antes de generar los nuevos seeds, toma las tablas del array de arriba y las elimina una por una
/*ACTIVA REVISION DE FOREING KEYS EN LA BASE DE DATOS*/

