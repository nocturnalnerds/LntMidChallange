<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function getEmployees(){
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }
    public function createEmployee(Request $req){
        $validate = $req->validate([
            'name' => 'required|string',
            'age' => 'required|int',
            'phone' => 'required|string',
            'address' => 'required|string'
        ]);
        
        Employee::create($validate);
        return redirect()->route('index');
    }
    public function deleteEmployee($id){
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('index')->with('success', 'Employee deleted successfully');
    }
    public function updateEmployee(Request $req, $id){
        $employees = Employee::findOrFail($id);
        // dd($req);
        $employees->update([
            'name' => $req->name,
            'age'=> $req->age,
            'phone' => $req->phone,
            'address' => $req->address,
        ]);
        return redirect()->route('index')->with('success', 'employee updated!');
    }
}