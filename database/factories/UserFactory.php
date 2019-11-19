<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
    // $faker = Faker\Factory::create('es_AR');
    $factory->define(App\User::class, function (Faker $faker){
        $filePath = storage_path('app/public/images/users');
        return [
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'avatar' => $faker->image($filePath,400,300, 'people', null, false),
            'phone' => $faker->e164PhoneNumber,
            'address' => $faker->streetAddress,
            'city' => $faker->city,
            'postal' => $faker->postcode,
            'remember_token' => Str::random(10),
        ];
});




