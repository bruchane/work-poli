<?php

namespace Database\Seeders;

use App\Models\Empleo;
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
        $this->call(PersonaSeeder::class);
        $this->call(EmpleoSeeder::class);
    }
}
