<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
      'role'=>$request->senior_citizen

        ]);
        notify()->success('Registration successful');
        return redirect()->back() ;
    }

    public function login(Request $request)
    {
        // dd($request->all());
            $request->validate([
            'email'=>'required',
            'password'=>'required',

            ]);

            $credentials=$request->except('_token');
        // dd($credentials);
            if(auth()->attempt($credentials))
            {
          notify()->success('Login success');
                return redirect()->route('webpage');
            }
            notify()->error('invalid password');
            return redirect()->back();
        }
        
  
   public function logout(){

            Auth()->logout();
            notify()->success('Logout success');
            return redirect()->back();

   }
    
}
