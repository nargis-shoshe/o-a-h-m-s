<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\User;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function donor()

    {
        $dons=User::where("role","donor")->get();

        return view('Backend.pages.donors.donor',compact('dons'));
    }

    public function donorform()
    {

        return view('Backend.pages.donors.form');

    }
    public function store(Request $request){
        //dd($request->all());
        Donor::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone_number'=>$request->Phone_number,
            'address'=>$request->address,



        ]);
         
         return redirect()->back();


    }

     
public function deletedonor($donor_id)
{
    Donor::findOrFail($donor_id)->delete();

         return redirect()->back();
}



public function viewdonor($donor_id)
    {
      $donor=Donor::find($donor_id);
      return view('Backend.pages.donors.view',compact('donor'));
    }

    public function editdonor($donor_id)
    {
        $donor=Donor::find($donor_id);
        //$categories=Category::all();
        return view('Backend.pages.donors.edit',compact('donor'));
    }


    
    public function updatedonor(Request $request,$donor_id)
    {
        $donor=Donor::find($donor_id);
//dd($request->all());
        $donor->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone_number'=>$request->Phone_number,
            'address'=>$request->address,

              

        ]);

        return redirect()->route('donor')->with('message','Update success.');

    }




}
