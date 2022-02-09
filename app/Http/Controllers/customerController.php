<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class customerController extends Controller
{
    //

    public function create()
    {
        $url = url('/customer');
        $title = "Customer Registration";
        $data = compact('url', 'title');
        return view('customer_registration')->with($data);
    }

    public function store(Request $Req)
    {
        // Insert query

        // p($Req->all());
        // die;

        $customer = new Customer;
        $customer->name = $Req['name'];
        $customer->email = $Req['email'];
        $customer->password = md5($Req['password']);
        $customer->country = $Req['country'];
        $customer->state = $Req['state'];
        $customer->address = $Req['address'];
        $customer->dob = $Req['dob'];
        $customer->gender = $Req['gender'];

        $customer->save();
        return redirect("/customer");
    }

    //select query
    public function view(Request $Req)
    {
        $search = $Req['search'] ?? "";
        if($search!=""){

               $customers = Customer::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
               //name when equal to search
        }else{
          $customers=Customer::paginate(15);
        }
        $data = compact('customers','search');
        return view('customer_view')->with($data);
    }


    public function delete($id)
    {

        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }

        return redirect('/customer');
    }


    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect('/customer');
        } else {
            $title = "Update Customer";

            $url = url('/customer/update') . "/" . $id;
            $data = compact('customer', 'url', 'title');
            return view('customer_registration')->with($data);
        }
    }

    public function update($id, Request $Req)
    {
        $customer = Customer::find($id);
        $customer->name = $Req['name'];
        $customer->email = $Req['email'];
        $customer->country = $Req['country'];
        $customer->state = $Req['state'];
        $customer->address = $Req['address'];
        $customer->dob = $Req['dob'];
        $customer->gender = $Req['gender'];

        $customer->save();
        return redirect("/customer");
    }

    public function trash()
    {
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer_trash')->with($data);
    }

    public function restore($id)
    {

        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->restore();
        }

        return redirect('/customer');
    }
    public function forceDelete($id)
    {

        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->forceDelete();
        }

        return redirect('/customer');
    }
}
