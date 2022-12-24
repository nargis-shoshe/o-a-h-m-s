<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\User;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function list(){
        $citiz= User::where("role","Senior Citizen")->paginate(5);;
    return view('Backend.pages.citizens.list',compact('citiz'));

    }

    public function form(){

        return view('Backend.pages.citizens.form');
    }


    public function store(Request $request){

        $fileName=null;
        if($request->hasFile('image'))
        {
           // dd('true');
           //generate name
           $fileName=date('ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->storeAs('/Inserts',$fileName);
        
        }

Citizen::create([

    'name'=>$request->name,
    'registration_number'=>$request->registration_number,
    'registration_date'=>$request->registration_date,
    'address'=>$request->address,
    'image'=>$fileName,
    'date_of_birth'=>$request->date_of_birth,
    'phone_number'=>$request->phone_number,
    'emergency_number'=>$request->emergency_number,
    'status'=>$request->status,

]);

return redirect()->route('details');
    }
}
