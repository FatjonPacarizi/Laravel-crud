<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::paginate(5);
        return view('employee.index')->with('employees', $employees);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(EmployeeRequest $request)
    {
        $employee = new Employee();

        $employee->name = request('name');
        $employee->email = request('email');
        $employee->address = request('address');
        $employee->phone = request('phone');

        $employee->save();

        return redirect('/')->with('message', 'Emplyee Registred');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit')->with([
            'employee' => $employee
        ]);
    }

    public function update(EmployeeRequest $request, $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');

        $employee->update();

        return redirect('/')->with('message', 'Employee Updated');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        
        return redirect('/')->with('message', 'Emplyee Deleted');
    }
}
