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
        if ($validate['age'] < 20) {
            return redirect()->back()->withErrors(['age' => 'The age must be at least 20.']);
        }
        if (strlen($validate['name']) < 5  && strlen($validate['name']) > 20) {
            return redirect()->back()->withErrors(['name' => 'The name must be at least 5 characters and no more than 20 characters long.']);
        }
        if (strlen($validate['phone']) < 9  && strlen($validate['phone']) > 12) {
            return redirect()->back()->withErrors(['phone' => 'The phone number must be at least 9 and no more than 12 characters long.']);
        }
        if (strlen($validate['address']) < 10 && strlen($validate['address']) > 40) {
            return redirect()->back()->withErrors(['address' => 'The address must be at least 10 and no more than 40 characters long.']);
        }
        
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