<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Services;

class ServiceController extends Controller
{
    public function type(){
        
        $servs=Services::all();
        //dd($servs);


        return view('Backend.pages.services.service',compact('servs'));
}

public function form(){
    return view('Backend.pages.services.serviceform ');

}


public function store(Request $request)
       {

       // dd($request->all());


             Services::create([
              'name'=>$request->name,
               'email'=>$request->email,
             'password'=>$request->password


             ]);
            
             return 'successfull';
        }




 }
