<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function login(){


        return view('backend.pages.login');
    }




    public function dologin(Request $request)
    {
        //dd($request->all());
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('message','invalid credentials');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back()->with('message','Logout successful.');
    }
    
}
      