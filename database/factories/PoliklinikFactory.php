<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Poliklinik;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Poliklinik::class, function (Faker $faker) {
    return [
        'nip' => $faker->creditCardNumber,
        'nama_dokter' => $faker->name, 
        'slug' => \Str::slug($faker->name),
        'spesialis' => 'gigi',
        'alamat' => $faker->city,
        'no_telp' => $faker->tollFreePhoneNumber,
    ];
});
