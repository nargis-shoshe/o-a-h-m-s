<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function scregistration(Request $request){
       

        // dd($request->all());

        $validate=Validator::make($request->all(),
        [
            // 'senior_citizen_name'=>'required',
            // 'senior_citizen_email'=>'required',
            // 'image'=>'required',
            // 'phone_number'=>'required',
            // 'senior_citizen_password'=>'required',
            // 'address'=>'required',
            // 'registration_date'=>'required',
            'date_of_birth'=>'required|before: -50 years',
            // 'emergency_number'=>'required',
            

        ]);

        if($validate->fails())
        {
            notify()->error($validate->getMessageBag());

            return redirect()->back();
        }
    
        $fileName=null;
        if($request->hasFile('image'))
        {
           // dd('true');
           //generate name
           $fileName=date('ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->storeAs('/Inserts',$fileName);
        
        }
    
        User::create([
       
    
    'registration_date'=>$request->registration_date,
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>bcrypt($request->password),
    'address'=>$request->address,
    'image'=>$fileName,
    
    'date_of_birth'=>$request->date_of_birth,
    'mobile'=>$request->phone_number,
    'emergency_number'=>$request->emergency_number,

    'status'=>'inactive',
    'role'=>'Senior Citizen '
    
    
        ]);
        notify()->success('Registration successful');
        return redirect()->back() ;
    }


    public function scuserlist(){
        $scuser=User::paginate(2);
        return view('Backend.pages.userverify.scuserlist',compact('scuser'));
       
    }


    public function active(Request $request,$scuser_id)
    {
      
        $scuser=User::find($scuser_id);
        $scuser->update([

         'status'=>'approve'
        ]);
        return redirect()->route('scuser.list')->with('message','Senior Citizen Approved');

    
    }


    public function reject(Request $request,$scuser_id)
    {
      
        $scuser=User::find($scuser_id);
        $scuser->update([

         'status'=>'reject'
        ]);
        return redirect()->route('scuser.list')->with('message','Senor-Citizen is not active');

    
    }
}
