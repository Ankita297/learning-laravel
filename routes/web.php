<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicController;
use App\Http\Controllers\customerController;

use App\Http\Controllers\formController;
use App\Http\Controllers\fileUploadController;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;


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

Route::get('/upload',function(){
    return view('upload');
});
Route::post('/upload',[fileUploadController::class,'upload']);


// -------------Routing groups
// [midlleware , prefix details ]

Route::group(['prefix'=>'/customer'],function(){

    Route::get('/create',[customerController::class,'create'])->name('customer.create');

    Route::get('/',[customerController::class,'view']);


    Route::post('/',[customerController::class,'store']);
    Route::post('/update/{id}',[customerController::class,'update'])->name('customer.update');

    Route::get('/delete/{id}',[customerController::class,'delete'])->name('customer.delete');

    Route::get('/edit/{id}',[customerController::class,'edit'])->name('customer.edit');
    Route::get('/trash',[customerController::class,'trash']);
    Route::get('/restore/{id}',[customerController::class,'restore'])->name('customer.restore');
    Route::get('/force-delete/{id}',[customerController::class,'forceDelete'])->name('customer.force-delete');


});


//
Route::get('/welcome',function(){
    return view('welcome');
});

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



//localization

Route::get('/{lane?}',function($lang=null){
App::setLocale($lang);
return view('welcome');
});
