<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Services;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function home(){
        $servs=Services::all();
        $staff=Staff::all();
        return view('Frontend.pages.home',compact('servs','staff'));
    }


    public function registration(Request $request){

        $request->validate([
            'senior_citizen_name'=>'required',
            'senior_citizen_email'=>'required',
            //'image'=>'required',
            'phone_number'=>'required',
            'senior_citizen_password'=>'required',
            //'address'=>'required',
            //'registration_date'=>'required',
            //'date_of_birth'=>'required|before:-50 years',
            //'emergency_number'=>'required',
            

        ]);

        $fileName=null;
        if($request->hasFile('image'))
        {
           // dd('true');
           //generate name
           $fileName=date('ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->storeAs('/Inserts',$fileName);
        
        }

        User::create([
      'name'=>$request->senior_citizen_name,
      'email'=>$request->senior_citizen_email,
      'mobile'=>$request->phone_number,
      'password'=>bcrypt($request->senior_citizen_password),
      'role'=>"doner",
      'status'=>'inactive',
      'address'=>$request->address,
      'registration_date'=>$request->registration_date,
      'image'=>$fileName,
      'date_of_birth'=>$request->date_of_birth,
      'emergency_number'=>$request->emergency_number,

       

        ]);
        notify()->success('Registration successful');
        return redirect()->back() ;
    }

    public function login(Request $request)
    {
      
          
            $credentials=$request->except('_token');
        // dd(auth()->attempt($credentials));
            if(auth()->attempt($credentials))
            {
                notify()->success('Login success');  
                return redirect()->route('webpage');   
            }
            else{
                notify()->error('invalid email and password');
              return redirect()->back();
              }
    }   
  
   public function logout(){

            Auth()->logout();
            notify()->success('Logout success');
            return redirect()->route('webpage');

   }
    
    
}
