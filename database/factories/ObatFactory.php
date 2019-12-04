<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Obat;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Obat::class, function (Faker $faker) {
    return [
        'nama_obat' => 'acarbose',
        'slug' => 'acarbose',
        'keterangan' => 'obat antidiabetes yang digunakan untuk menangani diabetes tipe 2.',
    ];
});
