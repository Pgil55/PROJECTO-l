<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpulsionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('expulsion')->insert([
            'expulsion'=> true,
            'alumno_id'=>1

        ]);

        DB::table('expulsion')->insert([
            'expulsion'=> false,
            'alumno_id'=>2
        ]);
    }
}
