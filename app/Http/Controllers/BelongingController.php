<?php

namespace App\Http\Controllers;

use App\Models\Belonging;
use Illuminate\Http\Request;

class BelongingController extends Controller
{
public function list(){

return view('Frontend.pages.belongings.belonging_form');
}

public function belongingsform(Request $request){

    $request->validate([
        'donor_name'=>'required',
        'phone_number'=>'required',
        'belonging_details'=>'required',
        ]);
       Belonging::create([


   'donor_name'=>$request->donor_name,
   'phone_number'=>$request->phone_number,
   'belonging_details'=>$request->belonging_details
]);


return redirect()->route('webpage');         


}

public function donationlist(){
    $belonging=Belonging::all();

    return view('Backend.pages.belongings.belonginglist',compact('belonging'));

}
}
