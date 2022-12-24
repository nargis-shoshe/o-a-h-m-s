<?php

namespace App\Http\Controllers;

use App\Models\User;
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


    public function userlist(){
        $user=User::paginate(10);
        return view('Backend.pages.userverify.userlist',compact('user'));
       
    }


    public function active(Request $request,$user_id)
    {
      
        $user=User::find($user_id);
        $user->update([

         'status'=>'Approve'
        ]);
        return redirect()->route('user.list')->with('message','Approved successfully');

    
    }


    public function reject(Request $request,$user_id)
    {
      
        $user=user::find($user_id);
        $user->update([

         'status'=>'reject'
        ]);
        return redirect()->route('user.list')->with('message','User is not active');

    
    }


    
}
      