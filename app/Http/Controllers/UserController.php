<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Input;
use Redirect;

class UserController extends Controller
{
    public function index(){
        $data['user_agent'] = User::where('level','1')->get();
        $data['count_agent'] = User::where('level','1')->count();
        $data['count_agent_online'] = User::where('level','1')->where('online','1')->count();
        $data['user_admin'] = User::where('level','3')->get();
        $data['count_admin'] = User::where('level','3')->count();
        $data['count_admin_online'] = User::where('level','3')->where('online','1')->count();
        
        return view('pages/users/index', $data);
    }

    public function add_user(Request $request){
     //   $data = Input::except(array('token'));
      //  dd( $data);

         User::create([
            'firstname' => $request->c_firstname,
            'lastname' => $request->c_lastname,
            'mobile' => $request->c_mobile,
            'email' => $request->c_email,
            'username' => $request->c_username,
            'password' => bcrypt($request->c_password),
            'level' => $request->c_level,
            'status' => $request->c_status,
            'online' => 0,
        ]);
        
        return Redirect::to('/users');
    }
}
