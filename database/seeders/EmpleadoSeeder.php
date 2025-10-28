<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insertar datos 

           Empleados::create([
                'nombre' => 'Ana',
                'apellido' => 'Gómez',
                'correo' => 'ana.gomez@empresa.com',
                'salario' => 35000.00

           ]);
            Empleados::create([
                'nombre' => 'Carlos',
                'apellido' => 'Rodríguez',
                'correo' => 'carlos.rodriguez@empresa.com',
                'salario' => 55000.50

            ]);
            Empleados::create([
                'nombre' => 'Luisa',
                'apellido' => 'Pérez',
                'correo' => 'luisa.perez@empresa.com',
                'salario' => 42500.75

            ]);



    }
}
