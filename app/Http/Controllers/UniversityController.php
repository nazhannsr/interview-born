<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use Illuminate\Support\Facades\File; 

class UniversityController extends Controller
{

    public static $paginate = 3;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $universities = University::paginate(self::getPaginate());

        return view('university.index', compact('universities'));
    }

    public function edit(University $university) {
        return view('university.edit', compact('university'));
    }

    public function update(Request $request, University $university) {
        if(isset($request->image)){
        $validated = $request->validate([
            'image'     => 'required|mimes:jpeg,jpg,png,jfif,svg|max:2048',
            ]);
        }
        $validated = $request->validate([
            'name'      => 'required',
            'acronym'     => 'required',
        ]);

        if(isset($request->image)){
            $imageName = $university->image;
            File::delete(public_path('images/'.$imageName));
    
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $university->image      = 'images/'.$imageName;
        }

        $university->name       = $request->name;
        $university->acronym    = $request->acronym;
        $university->rating     = (isset($request->rating))? $request->rating : null;
        $university->address1   = (isset($request->address1))? $request->address1 : null;
        $university->address2   = (isset($request->address2))? $request->address2 : null;
        $university->address3   = (isset($request->address3))? $request->address3 : null;
        $university->postcode  = (isset($request->postcode))? $request->postcode : null;
        $university->city       = (isset($request->city))? $request->city : null;
        $university->state      = (isset($request->state))? $request->state : null;
        $university->country    = (isset($request->country))? $request->country : null;
        $university->save();

        return redirect()->back()->with('success', 'Update successful');
    }

    public function create() {
        return view('university.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'      => 'required',
            'acronym'   => 'required',
            'image'     => 'required|mimes:jpeg,jpg,png,jfif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        $university = new University();
        $university->name       = $request->name;
        $university->acronym    = $request->acronym;
        $university->image      = 'images/'.$imageName;
        $university->rating     = (isset($request->rating))? $request->rating : null;
        $university->address1   = (isset($request->address1))? $request->address1 : null;
        $university->address2   = (isset($request->address2))? $request->address2 : null;
        $university->address3   = (isset($request->address3))? $request->address3 : null;
        $university->postcode  = (isset($request->postcode))? $request->postcode : null;
        $university->city       = (isset($request->city))? $request->city : null;
        $university->state      = (isset($request->state))? $request->state : null;
        $university->country    = (isset($request->country))? $request->country : null;
        $university->save();

        return redirect()->route('university.index')->with('success', 'Successfully created new university');
    }

    public function destroy(University $university) {

        try{
            $imageName = $university->image;

            File::delete(public_path($imageName));

            $university->delete();
        }
        catch(Exception $e){
            return redirect()->back()->with('danger', 'Failed to delete');
        }
        return redirect()->back()->with('success', 'Deleted successfully');
    }

    public function fetch_data(Request $request) {
        if($request->ajax()){
            $universities = University::paginate(self::getPaginate());
            return view('pagination.university.index', compact('universities'))->render();
        }
    }

    public static function getPaginate() {
        return static::$paginate;
    }
}
