<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use DB;

class ProductController extends Controller
{
   
    public function index()
    {
        $data["product_y"] = DB::table('products')->where('USED','1')->paginate(10);
        $data["count_y"] = DB::table('products')->where('USED','1')->count();
        
        return view('pages/products/index', $data);
    }

    public function expired()
    {
        $data["product_n"] = DB::table('products')->where('USED','0')->paginate(10);
        $data["count_n"] = DB::table('products')->where('USED','0')->count();

        return view('pages/products/expired', $data);
    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
