<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [App\Http\Controllers\StudentController::class,'index'])->name('index');
Route::get('/students/create', [App\Http\Controllers\StudentController::class, 'create'])->name('create');
Route::post('/students/insert', [App\Http\Controllers\StudentController::class, 'insert'])->name('insert');
Route::get('/students/update/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('edit');
Route::post('/students/update/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('update');
Route::get('/students/delete/{id}', [App\Http\Controllers\StudentController::class, 'delete'])->name('delete');


