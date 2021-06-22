<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\University;

class DepartmentController extends Controller
{
    public static $paginate = 2;
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(University $university) {
        $departments = $university->departments()->paginate(self::getPaginate());

        return view('department.index', compact('departments', 'university'));
    }

    public function edit(University $university, Department $department) {
        return view('department.edit', compact('university', 'department'));
    }

    public function update(Request $request, University $university, Department $department) {
        $validated = $request->validate([
            'name'      => 'required',
            'acronym'   => 'required',
        ]);

        $department->name = $request->name;
        $department->acronym = $request->acronym;
        $department->save();

        return redirect()->back()->with('success', 'Successfully updated department');
    }

    public function create(University $university){
        $universities = University::all();
        return view('department.create', compact('university', 'universities'));
    }

    public function store(Request $request, University $university){
        $validated = $request->validate([
            'name'      => 'required',
            'acronym'   => 'required',
        ]);

        $department = new Department();
        $department->name = $request->name;
        $department->acronym = $request->acronym;
        $department->university_id = $university->id;
        $department->save();

        return redirect()->route('department.index', compact('university'))->with('success', 'Successfully created department');
    }

    public function destroy(Department $department){
        $department->delete();

        return  redirect()->back()->with('success', 'Successfully deleted department');
    }

    public function fetch_data(Request $request, University $university) {
        if($request->ajax()){
            $departments = $university->departments()->paginate(self::getPaginate());

            return view('pagination.department.index', compact('departments', 'university'))->render();
        }
    }

    public static function getPaginate(){
        return static::$paginate;
    }
}
