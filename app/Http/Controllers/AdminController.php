<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }

    public function dashboard(){
        return view('admin.index');
    }

    public function login(Request $request){
        $check = $request->all();

        if(Auth::guard('admin')->attempt(['email'=>$check['email'],'password'=>$check['password']])){
            return redirect()->route('admin.dashboard')->with('error','admin login successfully');
        }else{
            return redirect()->route('login_from')->with('error','invalid');
        }
    }

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login_from')->with('error','you have logged out successfully');

    }
}
