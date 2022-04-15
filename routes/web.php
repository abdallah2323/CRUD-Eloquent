<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');

Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/store', [TaskController::class, 'store'])->name('task.store');

Route::delete('task/destroy/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
Route::get('task/destroy/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit'); 
Route::post('/task/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');

Route::get('task/update/{id}', [TaskController::class, 'update'])->name('task.update');
Route::put('task/update/{id}', [TaskController::class, 'update'])->name('task.update');