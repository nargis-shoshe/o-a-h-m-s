<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Services;
use Faker\Core\File;

class ServiceController extends Controller
{
    public function type(){
        
        $servs=Services::paginate(7);
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

        public function editservice($service_id)
        {
            $service=Services::find($service_id);
            //$categories=Category::all();
            return view('Backend.pages.services.edit',compact('service'));
        }
    
    
        public function update(Request $request,$service_id){
    
            $service=Services::find($service_id);
            $fileName=$service->image;
    
            if($request->hasFile('image'))
            {
                
                 // generate name
                $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('/Inserts',$fileName);
            }
    
    //dd($request->all());
            $service->update([
                'name'=>$request->name,
                'description'=>$request->description,
                  
                 'image'=>$fileName
    
            ]);
    
            return redirect()->route('name')->with('message',' servicce Updated successfully.');
    
        }


 }
