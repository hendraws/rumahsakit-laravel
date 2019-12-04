<?php

use Illuminate\Database\Seeder;

class ObatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obat = factory(App\Obat::class, 1)->create();
    }
}
