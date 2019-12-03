<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pasien;
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

$factory->define(Pasien::class, function (Faker $faker) {
    return [
        'nik' => $faker->creditCardNumber,
        'nama' => $faker->name,
        'slug' => \Str::slug($faker->name),
        'jenis_kelamin' => 'L',
        'alamat' => $faker->address,
        'no_telp' => $faker->phoneNumber,
    ];
});
