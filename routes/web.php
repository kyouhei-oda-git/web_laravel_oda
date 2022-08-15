<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\InputEmployeeController;
use App\Http\Controllers\ListEmployeeController;
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

Route::get('/menu',[MenuController::class, 'index'])->name('menu');

Route::get('/input-employee',[InputEmployeeController::class,'input'])->name('input-employee');

Route::get('/list-employee',[ListEmployeeController::class,'list'])->name('list-employee');
