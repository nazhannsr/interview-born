<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Staff;
use App\Models\University;

class DepartmentStaffController extends Controller
{
    public static $paginate = 5;

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(University $university, Department $department)
    {
        $staffs = Staff::whereIn('id', $department->staffs->pluck('id'))->paginate(self::getPaginate());
        return view('department-staff.index', compact('staffs', 'university', 'department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(University $university, Department $department)
    {

        $active_staffs = Staff::rightJoin('department_staff', 'department_staff.staff_id', '=', 'staff.id')
                             ->where('staff.university_id', $university->id)
                             ->where('department_staff.department_id', $department->id)
                             ->select('staff.*')
                             ->get()
                             ->pluck('id');

        $staffs = Staff::where('university_id', $university->id)
                       ->whereNotIn('id', $active_staffs)
                       ->get();

        return view('department-staff.create', compact('staffs', 'university', 'department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, University $university, Department $department)
    {
        $validated = $request->validate([
            'staff' => 'required',
        ]);

        foreach($request->staff as $staff_id){
            $department->staffs()->attach($staff_id);
        }

        return redirect()->route('department.staff.index', [$university->id, $department->id])->with('success', 'Successfully added staffs to department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university, Department $department, Staff $staff)
    {
   
        $department->staffs()->detach($staff->id);

        return redirect()->back()->with('success', 'Successfully removed staff from department');
    }

    public function fetch_data(Request $request, University $university, Department $department){
        if($request->ajax()) {
            $staffs = Staff::whereIn('id', $department->staffs->pluck('id'))->paginate(self::getPaginate());
            return view('pagination.department-staff.index', compact('staffs', 'university', 'department'))->render();
        }
    }

    public static function getPaginate() {
        return static::$paginate;
    }
}
