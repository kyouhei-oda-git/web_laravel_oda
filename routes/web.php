<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\InputEmployeeController;
use App\Http\Controllers\ListEmployeeController;
use App\Http\Controllers\ConfirmController;
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

//トップページに遷移
Route::get('/menu',[MenuController::class, 'index'])->name('menu');

//登録画面に遷移
Route::get('/input-employee',[InputEmployeeController::class,'input'])->name('input-employee');

//一覧画面に遷移
Route::get('/list-employee',[ListEmployeeController::class,'list'])->name('list-employee');

//getの時は、inputページに遷移
Route::get('/confirm-screen',[ConfirmController::class,'confirm'])->name('get_confirm_screen');

//postの時は、確認画面に遷移
Route::post('/confirm-screen',[ConfirmController::class,'post_confirm'])->name('post_confirm_screen');