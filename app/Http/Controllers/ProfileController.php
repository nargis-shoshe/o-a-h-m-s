<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(){

        return view('Frontend.pages.profile');
    }



        public function updateProfile(Request $request)
    {
       //validation
       $user=User::find(auth()->user()->id);
      
       
        $user->update([
           'name'=>$request->user_name,
           'address'=>$request->user_address,
           'mobile'=>$request->user_mobile,
        ]);

        notify()->success('User profile updated.');
        return redirect()->back();
    }
    public function updateImage(Request $request){
        $user=User::find(auth()->user()->id);
        $fileName=auth()->user()->image;
        if($request->hasFile('image'))
        {
           // dd('true');
           //generate name
           $fileName=date('ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->storeAs('/Inserts',$fileName);
        }
        $user->update([
            'image'=>$fileName
         ]);

         return redirect()->back();
    }

    }

