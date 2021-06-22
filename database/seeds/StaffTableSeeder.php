<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'university_id' => 1,
            'name'          => 'haha',
            'image'         => 'haha',
        ]);
    }
}
