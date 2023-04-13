<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
   
    public function index()
    {
        return view('seller.seller_login');
    }

    public function dashboard()
    {
        return view('seller.index');
    }

    public function login(Request $request)
    {
        $check = $request->all();

        if (Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('seller.dashboard')->with('error', 'seller login successfully');
        } else {
            return redirect()->route('login_from')->with('error', 'invalid');
        }
    }

    public function SellerLogout()
    {
        Auth::guard('seller')->logout();
        return redirect()->route('seller_login_from')->with('error', 'you have logged out successfully');

    }

    public function SellerRegister()
    {
        return view('seller.seller_register');
    }

    public function SellerRegisterCreate(Request $request){

        Seller::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'created_at'=>Carbon::now(),
        ]);

        return redirect()->route('seller_login_from')->with('error', 'you have registered successfully');
    }
}
