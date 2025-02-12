<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ViewController::class,'viewMain'])->name('index');
Route::get('/create',[ViewController::class,'viewCreate'])->name('createView');
Route::post('/create',[EmployeeController::class,'createEmployee'])->name( 'create');
Route::delete('/delete/{id}',[EmployeeController::class,'deleteEmployee'])->name('delete');
Route::get('/edit/{id}',[ViewController::class,'viewEdit'])->name('edit');
Route::put('/update/{id}',[EmployeeController::class,'updateEmployee'])->name('update');
/*


*/