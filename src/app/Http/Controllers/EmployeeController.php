<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('employee.index');
    }

    public function getEmployees(){
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }
    public function createEmployee(Request $req){
        $validate = $req->validate([
            'name' => 'required|string|max:20|min:5',
            'age' => 'required|int|min:20',
            'phone' => 'required|numeric',
            'address' => 'required|string|max:40|min:10'
        ]);
        Employee::create($validate);
        return ;
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