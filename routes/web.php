<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicController;
use App\Http\Controllers\customerController;


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


Route::get('/customer/create',[customerController::class,'create']);

Route::get('/customer/view',[customerController::class,'view']);


Route::post('/customer',[customerController::class,'store']);
