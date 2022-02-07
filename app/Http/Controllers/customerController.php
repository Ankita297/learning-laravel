<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class customerController extends Controller
{
    //

    public function create(){
        return view('customer_registration');
    }

    public function store(Request $Req  ){
// Insert query

$customer=new Customer;
$customer->name=$Req['name'];
$customer->email=$Req['email'];
$customer->password=md5($Req['password']);
$customer->country=$Req['country'];
$customer->state=$Req['state'];
$customer->address=$Req['address'];
$customer->dob=$Req['dob'];
$customer->gender=$Req['gender'];

$customer->save();
return redirect("/customer/view");


    }

    //select query 
    public function view (){

        $customers=Customer::all();
        $data=compact('customers');
      return view('customer_view')->with($data);
    }
}
