<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function on_get(){
        $c_all = Customer::all();
        return response()->json($c_all, 200);
    }
    public function on_getid($id){
        $c_id = Customer::find($id);
        return response()->json($c_id, 200);
    }
}
