<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('addemployee', [EmployeeController::class,'create']);
Route::post('addemployee',[EmployeeController::class,'store'])->name('data.store');

Route::get('show',[EmployeeController::class,'show'])->name('show.data');

Route::get('edit/{id}', [EmployeeController::class,'edit'])->name('data.edit');
Route::post('update/{id}',[EmployeeController::class,'update'])->name('data.update');

Route::get('delete/{id}',[EmployeeController::class,'delete'])->name('data.delete');
