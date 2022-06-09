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

Route::controller(UsingMoneyController::class)->group(function() {
    Route::get('/usingmoney/list', 'list');
    Route::get('/usingmoney/list2', 'list2');

    Route::get('/usingmoney/report', 'report');
    Route::get('/usingmoney/formtransaction', 'formtransaction');
    Route::post('/usingmoney/savetransaction', 'savetransaction');
    Route::get('/usingmoney/exportexcel', 'export_excel');
    Route::get('/usingmoney/sidebar1', 'sidebar1');
    Route::get('/usingmoney/sidebar2', 'sidebar2');
    Route::get('/usingmoney/sidebar3', 'sidebar3');
    Route::get('/usingmoney/sidebar4', 'sidebar4');
    Route::get('/usingmoney/sidebar5', 'sidebar5');
    Route::get('/usingmoney/box1', 'box1');
    Route::get('/usingmoney/valuemodal1', 'valuemodal1');
});

