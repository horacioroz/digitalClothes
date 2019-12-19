<?php

use Illuminate\Database\Seeder;

class ImageProductSeeder_old extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = factory(App\Image::class, 35)->create();
    }
}
