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
            'name'      => 'International Islamic University Malaysia',
            'acronym'   => 'IIUM',
            'image'     => 'images/iium.png',
            'address1'  => 'International Islamic University Malaysia',
            'address2'  => 'Jalan Gombak',
            'postcode'  => '53100',
            'city'      => 'Gombak',
            'state'     => 'Selangor',
            'rating'    => 4.01,
        ]);

        DB::table('universities')->insert([
            'name'      => 'University Teknologi MARA',
            'acronym'   => 'UiTM',
            'image'     => 'images/uitm.png',
            'address1'  => 'University Teknologi MARA',
            'address2'  => 'Jalan Ilmu 1/1',
            'postcode'  => '40450 ',
            'city'      => 'Shah Alam',
            'state'     => 'Selangor',
            'rating'    => 4.01
        ]);

        DB::table('universities')->insert([
            'name'      => 'University of Technology Malaysia',
            'acronym'   => 'UTM',
            'image'     => 'images/utm.png',
            'address1'  => 'International Islamic University Malaysia',
            'address2'  => 'Jalan Gombak',
            'postcode'  => '53100',
            'city'      => 'Gombak',
            'state'     => 'Selangor',
            'rating'    => 4.01
        ]);

        DB::table('universities')->insert([
            'name'      => 'University of Science Malaysia',
            'acronym'   => 'USM',
            'image'     => 'images/usm.png',
            'address1'  => 'International Islamic University Malaysia',
            'address2'  => 'Sultan Ibrahim Chancellery Building',
            'address3'  => 'Jalan Iman',
            'postcode'  => '81310',
            'city'      => 'Skudai',
            'state'     => 'Johor',
            'rating'    => 4.01
        ]);

        DB::table('universities')->insert([
            'name' => 'University Malaya',
            'acronym'   => 'UM',
            'image'     => 'images/um.png',
            'address1'  => 'University Malaya',
            'address2'  => 'Jln Profesor Diraja Ungku Aziz',
            'postcode'  => '50603',
            'city'      => 'Kuala Lumpur',
            'state'     => 'Wilayah Persekutuan Kuala Lumpur',
            'rating'    => 4.01
        ]);
    }
}
