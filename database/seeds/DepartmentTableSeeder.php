<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'university_id' => 1,
            'name' => 'Kulliyyah of Engineering',
            'acronym'   => 'KOE',
        ]);

        DB::table('departments')->insert([
            'university_id' => 1,
            'name' => 'Kulliyyah of Information Communication and Technology',
            'acronym'   => 'KICT',
        ]);

        DB::table('departments')->insert([
            'university_id' => 1,
            'name' => 'Kulliyyah of Health Science',
            'acronym'   => 'HS',
        ]);

        DB::table('departments')->insert([
            'university_id' => 1,
            'name' => 'Kulliyyah of Architectural Design',
            'acronym'   => 'KAED',
        ]);

        DB::table('departments')->insert([
            'university_id' => 1,
            'name' => 'Kulliyyah of Law',
            'acronym'   => 'LAW',
        ]);
    }
}
