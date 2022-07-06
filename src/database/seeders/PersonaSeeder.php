<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persona = new Persona();
        $persona->nombres = "Bruno Alexander";
        $persona->apellidos = "Chavarria Neira";
        $persona->cedula = "0927693409";

        $persona->save();

        $persona2 = new Persona();
        $persona2->nombres = "Alejandro Alexander";
        $persona2->apellidos = "Magno";
        $persona2->cedula = "0928999999";

        $persona2->save();
    }
}
