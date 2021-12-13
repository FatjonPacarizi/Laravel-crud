<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EmployeeController::class, 'index'])->name('index');
Route::get('/create', [EmployeeController::class, 'create'])->name('create');
Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
Route::post('/create', [EmployeeController::class, 'store'])->name('store');
Route::delete('/delete/{id}', [EmployeeController::class, 'destroy'])->name('destroy');
Route::put('/update/{id}', [EmployeeController::class, 'update'])->name('update');