<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Services;

class ServiceController extends Controller
{
    public function type(){
        
        $servs=Services::paginate(2);
        //dd($servs);
         


        


        return view('Backend.pages.services.service',compact('servs'));
}

public function form(){
    return view('Backend.pages.services.serviceform ');

}


public function store(Request $request)
       {
       //dd($request->all());

        $request->validate([
            'name'=>'required|unique:services,name',
            'image'=>'required',
            'description'=>'required'
        ]);

        $fileName=null;
if($request->hasFile('image'))
{
   // dd('true');
   //generate name
   $fileName=date('ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
   $request->file('image')->storeAs('/Inserts',$fileName);

}
             Services::create([
               'name'=>$request->name,
               'description'=>$request->description,
               'image'=>$fileName


             ]);
            
             return redirect()->route('name');
        }




 }
