<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }
    return view('auth.login');
});

Auth::routes();

/** Dashboard */
Route::get('/home', 'HomeController@index')->name('home');
Route::post('getRating', 'HomeController@rating')->name('get.rating');
Route::post('getDepartment', 'HomeController@department')->name('get.department');
Route::post('getStaff', 'HomeController@staff')->name('get.staff');

/** University Management */
Route::get('university', 'UniversityController@index')->name('university.index');
Route::get('university/{university}/edit', 'UniversityController@edit')->name('university.edit');
Route::post('university/{university}', 'UniversityController@update')->name('university.update');
Route::get('university/create', 'UniversityController@create')->name('university.create');
Route::post('university', 'UniversityController@store')->name('university.store');
Route::delete('university/{university}', 'UniversityController@destroy')->name('university.destroy');
Route::get('university/fetch_data', 'UniversityController@fetch_data')->name('university.pagination');

/** Department Management */
Route::get('department/{university}', 'DepartmentController@index')->name('department.index');
Route::get('department/{university}/{department}/edit', 'DepartmentController@edit')->name('department.edit');
Route::post('department/{university}/{department}', 'DepartmentController@update')->name('department.update');
Route::get('department/{university}/create', 'DepartmentController@create')->name('department.create');
Route::post('department/{university}', 'DepartmentController@store')->name('department.store');
Route::delete('department/{department}', 'Departmentcontroller@destroy')->name('department.destroy');
Route::get('department/{university}/fetch_data', 'DepartmentController@fetch_data')->name('department.pagination');

/** Assign Staff to Department */
Route::get('department/{university}/{department}/staff', 'DepartmentStaffController@index')->name('department.staff.index');
Route::get('department/{university}/{department}/staff/create', 'DepartmentStaffController@create')->name('department.staff.create');
Route::post('department/{university}/{department}/staff', 'DepartmentStaffController@store')->name('department.staff.store');
Route::get('department/{university}/{department}/staff/fetch_data', 'DepartmentStaffController@fetch_data')->name('department.staff.pagination');
Route::post('department/{university}/{department}/staff/{staff}/detach', 'DepartmentStaffController@destroy')->name('department.staff.detach');

/** Staff Management */
Route::get('staff', 'StaffController@index')->name('staff.index');
Route::get('staff/create', 'StaffController@create')->name('staff.create');
Route::post('staff', 'StaffController@store')->name('staff.store');
Route::get('staff/{staff}/edit', 'StaffController@edit')->name('staff.edit');
Route::post('staff/{staff}', 'StaffController@update')->name('staff.update');
Route::delete('staff/{staff}', 'StaffController@destroy')->name('staff.destroy');
Route::get('staff/fetch_data', 'StaffController@fetch_data')->name('staff.pagination');

