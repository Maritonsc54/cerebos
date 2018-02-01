<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Customers;
use DB;

class CustomerController extends Controller
{
    public function index(){
        $data["cust"] = DB::table('customer_new')->paginate(10);
        $data["countall"] = DB::table('customer_new')->count();
        
        return view('pages/customers/index', $data);
    }
}
