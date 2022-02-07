<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public  function index(){
        return view('form');
    }

    public function register(Request $req){
        $req->validate([
             'name'=>'required',
             'email'=>'email',
             'password'=>'required | confirmed',
             'password_confirmation'=>'required'
        ]);
        echo "<pre>";

        print_r($req->all());

    }
}
