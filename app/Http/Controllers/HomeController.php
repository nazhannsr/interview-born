<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Department;
use App\Models\Staff;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universities = University::all();
        return view('home', compact('universities'));
    }

    public function rating()
    {
        $rating = University::select('id', 'acronym', 'rating')
                            ->get()
                            ->toArray();

        return response()->json($rating);
    }

    public function department()
    {
        $department = Department::select('universities.acronym')
                                ->selectRaw('count(departments.id) as departments')
                                ->leftJoin('universities', 'universities.id', '=', 'departments.university_id')
                                ->groupBy('departments.university_id')
                                ->get()
                                ->toArray();

        return response()->json($department);
    }

    public function staff()
    {
        $staff = Staff::select('universities.acronym')
                      ->selectRaw('count(staff.id) as staff')
                      ->leftJoin('universities', 'universities.id', '=', 'staff.university_id')
                      ->groupBy('staff.university_id')
                      ->get()
                      ->toArray();

        return response()->json($staff);
    }
}
