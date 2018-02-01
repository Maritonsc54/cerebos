<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotions;

class PromotionController extends Controller
{
    public function index(){
        $data['promotions'] = Promotions::where('USED','1')->paginate(10);

        return view('pages/promotions/index', $data);
    }
}
