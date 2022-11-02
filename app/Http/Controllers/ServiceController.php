<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller
{
    public function type(){
        return view('Backend.pages.sevices.service ');
}

public function form(){
    return view('Backend.pages.sevices.serviceform ');

}


public function store(Request $request)
       {

        //dd($request->all());


             Services::create([
              'name'=>$request->name,
               'email'=>$request->email,
             'password'=>$request->password


             ]);
            
             return view('Backend.pages.sevices.serviceform');
        }






}
