<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Group;


class indexController extends Controller
{
    //
    public function index()
    {
        //    return  Member::find(1)->getGroup;
        // return Member::get();

        return Member::with('group')->get();
    }

    public function group()
    {
        return Group::with('member')->get();
    }
}
