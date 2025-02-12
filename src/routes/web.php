<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ViewController::class,'viewMain'])->name('index');
Route::delete('/delete/{id}',[EmployeeController::class,'deleteEmployee'])->name('delete');
Route::get('/edit/{id}',[ViewController::class,'viewEdit'])->name('edit');
Route::put('/update/{id}',[EmployeeController::class,'updateEmployee'])->name('update');
/*


*/