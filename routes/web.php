<?php
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

Route::get('/', [TaskController::class, 'index'])->name('index');
Route::get('/task', [TaskController::class,'create'])->name('task');
Route::post('/store', [TaskController::class,'store'])->name('store');
Route::get('/{id}', [TaskController::class,'edit'])->name('edit');
Route::post('/update/{id}', [TaskController::class,'update'])->name('update');
Route::post('/{id}', [TaskController::class,'destroy'])->name('destroy');