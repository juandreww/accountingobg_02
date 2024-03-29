<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UsingMoneyController;
use App\Http\Controllers\KelapaBakarController;
use App\Http\Controllers\UploadController;

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
    Route::get('/usingmoney/valuemodal2', 'valuemodal2');
    Route::get('/usingmoney/valuemodal3', 'valuemodal3');
    Route::get('/usingmoney/valuemodal4', 'valuemodal4');
    Route::get('/usingmoney/valuemodal5', 'valuemodal5');
    Route::get('/usingmoney/show', 'show');
    Route::post('/usingmoney/edit', 'edit');
    Route::get('/usingmoney/delete', 'destroy');
});

Route::controller(KelapaBakarController::class)->group(function() {
    Route::get('/kelapabakar/list', 'list');
    Route::get('/kelapabakar/dashboard', 'dashboard');
    Route::get('/kelapabakar/show', 'show');
    Route::post('/kelapabakar/save', 'save');
    Route::get('/kelapabakar/display1', 'display1');
    Route::get('/kelapabakar/display2', 'display2');
    Route::get('/kelapabakar/display3', 'display3');
    Route::get('/kelapabakar/display4', 'display4');
    Route::get('/kelapabakar/display5', 'display5');
    Route::get('/kelapabakar/apitest', 'apitest');
});

Route::controller(UploadController::class)->group(function() {
    Route::post('/upload', 'store');
});

