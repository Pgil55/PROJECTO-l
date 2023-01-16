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
            'expulsion'=> true
        ]);

        DB::table('expulsion')->insert([
            'expulsion'=> false
        ]);
    }
}
