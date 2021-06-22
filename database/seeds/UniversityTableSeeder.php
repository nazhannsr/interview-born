<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            'name' => 'International Islamic University Malaysia',
            'acronym'   => 'IIUM',
            'image'     => 'test',
        ]);

        DB::table('universities')->insert([
            'name' => 'University Teknologi MARA',
            'acronym'   => 'UiTM',
            'image'     => 'test',
        ]);

        DB::table('universities')->insert([
            'name' => 'University of Technology Malaysia',
            'acronym'   => 'UTM',
            'image'     => 'test',
        ]);

        DB::table('universities')->insert([
            'name' => 'University of Science Malaysia',
            'acronym'   => 'USM',
            'image'     => 'test',
        ]);

        DB::table('universities')->insert([
            'name' => 'University Malaya',
            'acronym'   => 'UM',
            'image'     => 'test',
        ]);
    }
}
