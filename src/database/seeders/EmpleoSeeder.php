<?php

namespace Database\Seeders;

use App\Models\Empleo;
use Illuminate\Database\Seeder;

class EmpleoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleo = new Empleo();
        $empleo->rol = "fullStack Developer";
        $empleo->experiencia = 10;
        $empleo->sueldo = 3000;

        $empleo->save();

        $empleo2 = new Empleo();
        $empleo2->rol = "BackEnd Developer";
        $empleo2->experiencia = 10;
        $empleo2->sueldo = 3000;

        $empleo2->save();

        $empleo3 = new Empleo();
        $empleo3->rol = "FrontEnd Developer";
        $empleo3->experiencia = 10;
        $empleo3->sueldo = 3000;

        $empleo3->save();
    }
}
