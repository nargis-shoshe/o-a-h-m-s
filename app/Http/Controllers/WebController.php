<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        
        return view('Frontend.pages.home');
    }


    public function registration(Request $request){

        User::create([
      'name'=>$request->senior_citizen_name,
      'email'=>$request->senior_citizen_email,
      'password'=>bcrypt($request->senior_citizen_password),
      'role'=>'senior citizen'

        ]);
        notify()->success('Registration successful');
        return redirect()->back() ;
    }
}
