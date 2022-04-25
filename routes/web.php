<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UsingMoneyController;

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

Route::get('/table_empty', [MainController::class, 'table_empty']);
Route::get('/table', [MainController::class, 'table']);
Route::get('/users', [MainController::class, 'users']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/usingmoney/list', [App\Http\Controllers\UsingMoneyController::class, 'list']);
Route::get('/usingmoney/formtransaction', [App\Http\Controllers\UsingMoneyController::class, 'formtransaction']);
