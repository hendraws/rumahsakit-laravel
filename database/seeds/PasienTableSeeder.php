<?php

use Illuminate\Database\Seeder;

class PasienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasien = factory(App\Pasien::class, 5)->create();
    }
}
