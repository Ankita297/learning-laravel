<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileUploadController extends Controller
{
    //
    public function upload(Request $Req){
    //   echo"<pre>";
    //   print_r($Req->all());


   //laravel assign unique name
//    if we want to assign our name

$fileName=time()."-tech.".$Req->file('image')->getClientOriginalExtension();
// echo $fileName;

echo $Req->file('image')->store('uploads',$fileName);
    }
}
