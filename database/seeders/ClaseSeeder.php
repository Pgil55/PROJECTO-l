<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clase')->insert([
            'lengua'=>'true',
            'matematicas'=>'false',
            'ciencias'=>'false',
            'educacion_fisica'=>'false',
            'lenguas_extrangeras'=>'true'
        ]);

        DB::table('clase')->insert([
            'lengua'=>'false',
            'matematicas'=>'true',
            'ciencias'=>'true',
            'educacion_fisica'=>'false',
            'lenguas_extrangeras'=>'true'
        ]);

        DB::table('clase')->insert([
            'lengua'=>'false',
            'matematicas'=>'false',
            'ciencias'=>'true',
            'educacion_fisica'=>'true',
            'lenguas_extrangeras'=>'true'
        ]);
    }
}
