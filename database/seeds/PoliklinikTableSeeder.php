<?php

use Illuminate\Database\Seeder;

class PoliklinikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $poliklinik = factory(App\Poliklinik::class, 1)->create();
    }
}
