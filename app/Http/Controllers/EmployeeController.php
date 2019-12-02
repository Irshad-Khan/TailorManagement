<?php

namespace App\Http\Controllers;
// use session;
use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employee.index', ['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name=$request->name;
        $employee->address=$request->address;
        $employee->phone=$request->phone;
        $employee->email=$request->email;
        $employee->cnic=$request->cnic;
        $employee->save();
        \Session::flash('alert-success', 'Employee Record Saved Successfully');
        return redirect()->route('employee.index');
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees=Employee::findOrFail($id);
        
        return view('admin.employee.show',compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function editProduct($id)
    {
        $employees = Employee::findOrFail($id);
        return view('admin.employee.edit',compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = $request->input('name');
        $employee->address = $request->input('address');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->cnic = $request->input('cnic');

        $employee->save(); //persist the data
        \Session::flash('alert-success', 'Employee Record Updated Successfully');
        return redirect()->route('employee.index');   
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employees, $id)
    {
        if($id != 0){
            // Delete
            $employees=Employee::find($id);
            $employees->delete();
           
            \Session::flash('alert-danger', 'Employee Record Deleted Successfully');
            return redirect()->back();
    }}
}
