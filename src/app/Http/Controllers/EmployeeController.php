<?php

namespace App\Http\Controllers;

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
    }
}
