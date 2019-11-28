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
Route::get('employee/edit/{id}','EmployeeController@edit')->name('employee.edit');
Route::get('employee/delete/{id}','EmployeeController@destroy')->name('employee.delete');

Route::get('/dashboard', function(){
    return view('admin.dashboard');
})->name('dashboard');