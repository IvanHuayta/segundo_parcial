<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insertar datos 

Empleado::create([
    'nombre' => 'Ana',
    'apellido' => 'Gómez',
    'correo' => 'ana.gomez@empresa.com',
    'salario' => 3500

     ]);
Empleado::create([
 'nombre' => 'Fernando',
'apellido' => 'Rodríguez',
'correo' => 'fernando.rodriguez@empresa.com',
 'salario' => 4500
     ]);

Empleado::create([
    'nombre' => 'Juan',
    'apellido' => 'Mamani',
    'correo' => 'juan.rodriguez@empresa.com',
     'salario' => 4500
]);

Empleado::create([
    'nombre' => 'María',
    'apellido' => 'Gutiérrez',
    'correo' => 'maria.gutierrez@empresa.com',
    'salario' => 6200
]);
Empleado::create([
    'nombre' => 'Mariano',
    'apellido' => 'Rodríguez',
    'correo' => 'mariano.rodriguez@empresa.com',
    'salario' => 3800
]);
Empleado::create([
    'nombre' => 'Ana',
    'apellido' => 'López',
    'correo' => 'ana.lopez@empresa.com',
    'salario' => 7500
]);
Empleado::create([
    'nombre' => 'Pedro',
    'apellido' => 'Sánchez',
    'correo' => 'pedro.sanchez@empresa.com',
    'salario' => 5100
]);
Empleado::create([
    'nombre' => 'Sofía',
    'apellido' => 'Vargas',
    'correo' => 'sofia.vargas@empresa.com',
    'salario' => 4200
]);
Empleado::create([
    'nombre' => 'Javier',
    'apellido' => 'Ramos',
    'correo' => 'javier.ramos@empresa.com',
    'salario' => 8900
]);
Empleado::create([
    'nombre' => 'Laura',
    'apellido' => 'Torres',
    'correo' => 'laura.torres@empresa.com',
    'salario' => 5900
]);
Empleado::create([
    'nombre' => 'Miguel',
    'apellido' => 'Molina',
    'correo' => 'miguel.molina@empresa.com',
    'salario' => 3500
]);
Empleado::create([
    'nombre' => 'Elena',
    'apellido' => 'Pérez',
    'correo' => 'elena.perez@empresa.com',
    'salario' => 7100
]);

}
}
