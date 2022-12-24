<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function list(){

        
        return view('Frontend.pages.enquiries.list' );

    }


    public function store(Request $request){
        //dd($request);
         $request->validate([
         'name'=>'required',
         'email'=>'required',
         'message'=>'required',
         ]);
        Enquiry::create([


    'name'=>$request->name,
    'email'=>$request->email,
    'message'=>$request->message,
]);


return redirect()->route('webpage');         



    }



    public function enquirylist(){
        $enquiries=Enquiry::all();
        return view('Backend.pages.enquiries.enquirylist',compact('enquiries'));
    }

    public function readenquiry($enquiry_id)
    {
        Enquiry::findOrFail($enquiry_id)->update([
            "status"=>"read"
        ]);
    
             return redirect()->back();
    }
}
