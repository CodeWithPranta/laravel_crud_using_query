<?php

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

Route::get('/students', [App\Http\Controllers\StudentController::class, 'index'])->name('students');
Route::get('/students/create', [App\Http\Controllers\StudentController::class, 'create'])->name('students.create');
Route::post('/students', [App\Http\Controllers\StudentController::class, 'addNewStudent'])->name('students.store');
Route::get('/students/edit/{id}', [App\Http\Controllers\StudentController::class, 'editStudent'])->name('students.edit');
Route::put('students/{id}', [\App\Http\Controllers\StudentController::class, 'updateStudent'])->name('students.update');
Route::delete('students/{id}', [\App\Http\Controllers\StudentController::class, 'destroy'])->name('students.delete');


