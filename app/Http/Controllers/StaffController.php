<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function list(){

        return view('Backend.pages.staff');
    }

    public function create(){

        return view('Backend.pages.staffs.stafflist');
    }






        public function store(Request $request)
       {

        //dd($request->all());


             Staff::create([
              'name'=>$request->name,
            'email'=>$request->email,
             'password'=>$request->password


             ]);
             return view('Backend.pages.staffs.staffview');




       }








    # code...
}



