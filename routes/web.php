<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;
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

Route::get('/', [todosController::class,'index'])->name("todo.home");
Route::get('/create', function () {
    return view('create');
})->name("todo.create");
// create edit route
Route::get('/edit/{id}', [todosController::class,'edit'])->name("todo.edit");

// update todo route
Route::post('/update', [todosController::class,'updateData'])->name("todo.updatData");

// create Todo route
Route::post('/create', [todosController::class,'store'])->name("todo.store");

// delete Todo route
Route::get('/delete/{id}', [todosController::class,'delete'])->name("todo.delete");
