<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Money;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
    public function Moneyform(){
     return view('Frontend.pages.Donatemoney.donateform');

    }

    public function Moneystore(Request $request){
//dd($request);
          
            Donation::create([
                'donor_amount'=>$request-> donor_amount,
                'donar_name'=>$request-> donor_name,
                'phone_number'=>$request->phone_number,
                'belongings'=>$request->donor_belonging,
                'donor_email'=>$request->donor_email,

             ]);
             
             
             return redirect()->route('webpage');   

    }

    public function donation_moneylist(){
        $money=Donation::all();

    return view('Backend.pages.donatemoney.donatemoney-list',compact('money'));

}

public function viewdonation($donor_id)
    {
      $donor=Donation::find($donor_id);
      return view('Backend.pages.donatemoney.view',compact('donor'));
    }

    
}
