<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicController;
use App\Http\Controllers\singleActionController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\formController;
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

Route::get('/',[basicController::class,'index']);

Route::get('/courses',singleActionController::class);


Route::resource('/photo',photoController::class);

Route::get('/register',[formController::class,'index']);

Route::post('/register',[formController::class,'register']);
