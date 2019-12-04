<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DokterTableSeeder::class);
        $this->call(PasienTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PoliklinikTableSeeder::class);
        $this->call(ObatTableSeeder::class);
    }
}
