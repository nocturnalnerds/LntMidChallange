<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewMain(){
        $employees = Employee::all();
        return view('index', compact('employees'));
    }
    public function viewCreate(){
        return view('create');
    }
    public function viewEdit($id){
        $employee = Employee::findOrFail($id);
        return view('edit',compact('employee'));
    }
}