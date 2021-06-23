<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Models\Staff;
use App\Models\University;

class StaffController extends Controller
{
    public static $paginate = 5;

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $staffs = Staff::paginate(self::getPaginate());

        return view('staff.index', compact('staffs'));
    }

    public function edit(Staff $staff){
        $universities = University::all();

        return view('staff.edit', compact('staff', 'universities'));
    }

    public function update(Request $request, Staff $staff) {
        if(isset($request->image)){
            $validated = $request->validate([
                'image'         => 'required|mimes:jpeg,jpg,png,jfif,svg|max:2048',
            ]);
        }
        $validated = $request->validate([
            'name'          => 'required',
            'university'    => 'required',
        ]);

        try{
            

            if(isset($request->image)){
                if($staff->image != 'assets/image-resources/avatar.jpg'){
                    $imageName = $staff->image;
                    File::delete(public_path('images/'.$imageName));
                }
                
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images'), $imageName);
                
                $staff->image           = 'images/'.$imageName;
            }
    
            $staff->name            = $request->name;
            $staff->university_id   = $request->university;
            $staff->save();
        }
        catch(Throwable $e) {
            return redirect()->route('staff.index')->with('danger', 'Failed to add new staff');
        }

        return redirect()->back()->with('success', 'Successfully edited staff');
    }

    public function create() {
        $universities = University::all();
        return view('staff.create', compact('universities'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'          => 'required',
            'university'    => 'required',
            'image'         => 'required|mimes:jpeg,jpg,png,jfif,svg|max:2048',
        ]);

        try{
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
    
            $staff = new Staff();
            $staff->name            = $request->name;
            $staff->image           = $imageName;
            $staff->university_id   = $request->university;
            $staff->save();
        }
        catch(Exception $e) {
            return redirect()->route('staff.index')->with('danger', 'Failed to add new staff');
        }

        return redirect()->route('staff.index')->with('success', 'Successfully added new staff');
    }

    public function destroy(Staff $staff) {
        try{
            if($staff->image != 'assets/image-resources/avatar.jpg'){
                    $imageName = $staff->image;
                File::delete(public_path('images/'.$imageName));
            }
            $staff->delete();
        }
        catch(Exception $e) {
            return redirect()->back()->with('danger', 'Failed removed staff');
        }

        return redirect()->back()->with('success', 'Successfully removed staff');
    }
    public function fetch_data(Request $request) {
        if($request->ajax()) {
            $staffs = Staff::paginate(self::getPaginate());

            return view('pagination.staff.index', compact('staffs'))->render();
        }
    }

    public static function getPaginate() {
        return static::$paginate;
    }
}
