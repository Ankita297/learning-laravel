<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home',function(){
    echo "home";
});


Route::post('/test',function(){
    echo "Testing post method";
});


Route::any('/any',function(){
    echo "Testing any route ";
});

// <---------->

// Route::get('/demo',function(){
//  return view('demo');
// });


//
// <----get data  ->

Route::get('/user/{name}/{id?}',function($name,$id=null){
echo $name . " .";
echo $id ;

});


//----- send data to view

Route::get('/demo/{name}/{id?}',function($name,$id=null){

     $data=compact('name','id');
     return view('demo')->with($data); //take data and got to demo page
});

