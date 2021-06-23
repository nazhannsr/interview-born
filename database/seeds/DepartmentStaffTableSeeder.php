<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Department;
use App\Models\Staff;
class DepartmentStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Department::all() as $department) {
            $staffs = Staff::where('university_id', $department->university_id)->inRandomOrder()->take(rand(1,5))->pluck('id');
            foreach($staffs as $staff) {
                $department->staffs()->attach($staff);
            }
        }
    }
}
