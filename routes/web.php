<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add/employee',function (){
return view('addemployee');
});
Route::post('employee/added' , [EmployeeController::class, 'addEmployee'])->name('addEmployee');
Route::get('display/employee',[EmployeeController::class, 'display']);
Route::get('edit/employee/{id}',[EmployeeController::class, 'editEmployee'])->name('editEmployee');
Route::get('delete/employee/{id}',[EmployeeController::class, 'deleteEmployee'])->name('deleteEmployee');
Route::post('update/employee/{id}',[EmployeeController::class, 'updateEmployee'])->name('update');
?>
