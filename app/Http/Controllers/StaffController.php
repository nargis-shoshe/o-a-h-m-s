<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    public function list(){


        $staff=Staff::all();
        //dd($staff);


        return view('Backend.pages.staff',compact('staff'));
    }

    public function create(){

        return view('Backend.pages.staffs.stafflist');
    }






        public function store(Request $request)
       {

        //dd($request->all());
        $request->validate([
            'name'=>'required|unique:staff,name',
            'email'=>'required',
            'image'=>'required',

        ]);
$fileName=null;
if($request->hasFile('image'))
{
   // dd('true');
   //generate name
   $fileName=date('ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
   $request->file('image')->storeAs('/Inserts',$fileName);

}

             Staff::create([
              'name'=>$request->name,
            'email'=>$request->email,
             'password'=>$request->password,
             'image'=>$fileName


             ]);
             return view('Backend.pages.staffs.staffview');




       }


public function deletestaff($staff_id)
{
    staff::findOrFail($staff_id)->delete();
         return redirect()->back()->with('message','staff deleted successfully.');
}



public function viewstaff($staff_id)
    {
      $staff=staff::find($staff_id);
      return view('Backend.pages.staffs.view',compact('staff'));
    }

    public function editstaff($staff_id)
    {
        $staff=staff::find($staff_id);
        //$categories=Category::all();
        return view('Backend.pages.staffs.edit',compact('staff'));
    }


    public function update(Request $request,$staff_id){

        $staff=staff::find($staff_id);
        $fileName=$staff->image;

        if($request->hasFile('image'))
        {
            // unsave file 
            $removeFile=public_path().'/Inserts/'.$fileName;
            File::delete($removeFile);
             // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/Inserts',$fileName);
        }

//dd($request->all());
        $staff->update([
            'name'=>$request->name,
            'email'=>$request->email,
             'password'=>$request->password,
             'image'=>$fileName

        ]);

        return redirect()->route('add')->with('message','Update success.');

    }





    
}



