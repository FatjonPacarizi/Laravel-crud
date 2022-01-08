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
        if ($employees) {
            return view('employee.index')->with('employees', $employees);
        }
        return view('employee.index')->with('message', 'Failed');
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(EmployeeRequest $request)
    {
        $employee = Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        return redirect('/')->with('message', 'Emplyee Registred');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            return view('employee.edit')->with([
                'employee' => $employee
            ]);
        }
        return redirect('/')->with('message', 'Failed');
    }

    public function update(EmployeeRequest $request, $id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            $employee->update($request->all());
            if ($employee) {
                return redirect('/')->with('message', 'Employee Updated');
            }
        }
        return redirect('/')->with('message', 'Failed');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        if ($employee) {
            $employee->delete();
            if ($employee) {
                return redirect('/')->with('message', 'Emplyee Deleted');
            }
        }
        return redirect('/')->with('message', 'Failed');
    }
}