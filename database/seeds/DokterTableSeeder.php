<?php

use Illuminate\Database\Seeder;

class DokterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dokter = factory(App\Dokter::class, 5)->create();
    }
}
