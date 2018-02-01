<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use App\Products;
use Input;
use App\Promotions;

class CartsController extends Controller
{
    public function index(){
        return view('pages/carts/index');
    }

    public function search(Request $request){
        $txt_search = $request->search;
        $cust = Customers::where('cust_id',$txt_search)
        ->orderBy('cust_id', 'desc')
        ->get();

        $data["cust"] = $cust ;
        return view('pages/carts/index' , $data);
    }

    public function cust_detail($cust_id){
        $data["cust"] = Customers::where('cust_id',$cust_id)->get();
        $data["promotion"] = Promotions::limit(5)->orderBy('id','desc')->get();

        return view('pages/carts/customer',$data);
    }

    public function select_product($cust_id){
        $data["cust"] = Customers::where('cust_id',$cust_id)->get();
        $data["product"] = Products::where('USED','1')->get();
        
        return view('pages/carts/product', $data);
    }

    
    public function invoice(Request $request){
        $data["product"] = Products::where('USED','1')->orderby('code','id')->get();
        $data["cust"] = Customers::where('cust_id',$request->cust_id)->get();
        
        return view('pages/carts/invoice', $data);

    }
}
