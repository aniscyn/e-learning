<?php

namespace Database\Seeders;

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
        $this->call(AdminSeeder::class);
        $this->call(MapelSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(SiswaSeeder::class);
    }
}
