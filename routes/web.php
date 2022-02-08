<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicController;
use App\Http\Controllers\customerController;

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

Route::get('/',function(){
    return view('index');
});

Route::get('/register',[formController::class,'index']);
Route::post('/register',[formController::class,'register']);


Route::get('/customer/create',[customerController::class,'create'])->name('customer.create');

Route::get('/customer',[customerController::class,'view']);


Route::post('/customer',[customerController::class,'store']);
Route::post('/customer/update/{id}',[customerController::class,'update'])->name('customer.update');

Route::get('/customer/delete/{id}',[customerController::Class,'delete'])->name('customer.delete');

Route::get('/customer/edit/{id}',[customerController::Class,'edit'])->name('customer.edit');


//sess
