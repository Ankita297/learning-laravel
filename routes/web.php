<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicController;
use App\Http\Controllers\customerController;

use App\Http\Controllers\formController;
use App\Http\Controllers\fileUploadController;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use App\Http\Controllers\indexController;
use App\Http\Middleware\routeMiddleware;
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

//localization


// protected


// <------->



Route::middleware(['guard'])->group(
    function(){

        Route::get('group',[indexController::class,'group']);

        Route::get('data',[indexController::class,'index']);

    }
);

Route::get('/no-access',function(){
    echo "You are not allowed to access it ";
    die;
});


Route::get('/login',function(){
    session()->put('user_id',1);
    return redirect('/');
});


Route::get('logout',function(){
    session()->forget('user_id');
    return redirect('/');

});

Route::get('/{lane?}',function($lang=null){
App::setLocale($lang);
return view('welcome');
});



//group members
