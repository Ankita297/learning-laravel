<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class customerController extends Controller
{
    //

    public function create(){
        $url=url('/customer');
        $title="Customer Registration";
        $data=compact('url','title');
        return view('customer_registration')->with($data);
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
return redirect("/customer");


    }

    //select query
    public function view (){

        $customers=Customer::all();
        $data=compact('customers');
      return view('customer_view')->with($data);
    }


    public function delete($id){

    $customer= Customer::find($id);
    if(is_null($customer)){
        $customer->delete();
    }
return redirect('/customer');

    }


    public function edit($id){
        $customer=Customer::find($id);
        if(is_null($customer)){
            return redirect('/customer');

        }
        else {
            $title="Update Customer";

            $url=url('/customer/update')."/".$id;
                        $data=compact('customer','url','title');
           return view('customer_registration')->with($data);
                }
    }

    public function update($id,Request $Req){
        $customer=Customer::find($id);
        $customer->name=$Req['name'];
        $customer->email=$Req['email'];
        $customer->country=$Req['country'];
        $customer->state=$Req['state'];
        $customer->address=$Req['address'];
        $customer->dob=$Req['dob'];
        $customer->gender=$Req['gender'];

        $customer->save();
        return redirect("/customer");

    }
}
