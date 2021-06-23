<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UniversityTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(DepartmentStaffTableSeeder::class);
    }
}
