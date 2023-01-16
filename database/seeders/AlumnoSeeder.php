<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('alumnos')->insert([
            'nombre'=> 'Pedro',
            'telefono'=>'600600600',
            'edad'=>34,
            'password'=>'12345',
            'email'=>'p@gmail.com',
            'sexo'=>'hombre',
            

        ]);

        DB::table('alumnos')->insert([
            'nombre'=> 'Alberto',
            'telefono'=>'600600601',
            'edad'=>30,
            'password'=>'12345',
            'email'=>'pe@gmail.com',
            'sexo'=>'hombre',
            
        ]);

        DB::table('alumnos')->insert([
            'nombre'=> 'Luis',
            'telefono'=>'605600601',
            'edad'=>37,
            'password'=>'123456',
            'email'=>'ped@gmail.com',
            'sexo'=>'hombre',
            
        ]);

        DB::table('alumnos')->insert([
            'nombre'=> 'Teresa',
            'telefono'=>'630600601',
            'edad'=>12,
            'password'=>'1234567',
            'email'=>'pedr@gmail.com',
            'sexo'=>'mujer',
            
        ]);
    }
}
