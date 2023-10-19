<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stdcontroller;

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

// this route is used for index function calling from stdcontroller
Route::get('/',[stdcontroller::class,'index'])->name('studentData.index');

// this route is used for create function calling from stdcontroller
Route::get('studentData/create',[stdcontroller::class,'create'])->name('studentData.create');

// this route is used for store function calling from stdcontroller
Route::post('/studentData/store', [stdcontroller::class, 'store'])->name('studentData.store');


// this route is used for edit function calling from stdcontroller
Route::get('stdData/{id}/edit', [stdcontroller::class, 'edit'])->name('studentData.edit');


// this route is used for update function calling from stdcontroller
Route::put('stdData/{id}/update', [stdcontroller::class, 'update'])->name('studentData.update');

// this route is used for delete function calling from stdcontroller
Route::get('stdData/{id}/delete', [stdcontroller::class, 'destroy'])->name('studentData.delete');


