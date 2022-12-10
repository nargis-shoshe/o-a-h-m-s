<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
    }

