<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function list(){
        $citiz=Citizen::painate(2);
return view('Backend.pages.citizens.list',compact('citiz'));

    }

    public function form(){

        return view('Backend.pages.citizens.form');
    }


    public function store(Request $request){

Citizen::create([

    'name'=>$request->name,
    'email'=>$request->email,
    'phone_number'=>$request->Phone_number,
    'address'=>$request->address,
    'image'=>$request->image,
    'description'=>$request->description,
    'status'=>$request->status,

]);
    }
}
