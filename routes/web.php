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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('layout/layout');
});


Route::get('employee/index','EmployeeController@index')->name('employee.index');
Route::get('employee/create','EmployeeController@insert')->name('employee.create');
Route::post('employee/store','EmployeeController@store')->name('employee.store');
Route::get('employee/edit/{id}','EmployeeController@editProduct')->name('employee.edit');
Route::get('employee/show/{id}','EmployeeController@show')->name('employee.show');

Route::get('employee/delete/{id}','EmployeeController@destroy')->name('employee.delete');
Route::post('employee/update/{id}','EmployeeController@update')->name('employee.update');

Route::get('/dashboard', function(){
    return view('admin.dashboard');
})->name('dashboard');