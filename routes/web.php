<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicController;
use App\Http\Controllers\customerController;

use App\Http\Controllers\formController;
use Illuminate\Http\Request;


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

Route::get('/customer/delete/{id}',[customerController::class,'delete'])->name('customer.delete');

Route::get('/customer/edit/{id}',[customerController::class,'edit'])->name('customer.edit');
Route::get('/customer/trash',[customerController::class,'trash']);
Route::get('/customer/restore/{id}',[customerController::class,'restore'])->name('customer.restore');
Route::get('/customer/force-delete/{id}',[customerController::class,'forceDelete'])->name('customer.force-delete');

//session requests

Route::get('get-all-sessions',function(){
    $session=session()->all();
     p($session);
});

Route::get('set-session',function(Request $Req){
    $Req->session()->put('user_name','ankita');
    $Req->session()->put('user_id','123');
    $Req->session()->flash('status','success');
    return redirect('get-all-sessions');

});


Route::get('destroy-session',function(){
session()->forget('user_name');
session()->forget('user_id');
return redirect('get-all-sessions');


});


