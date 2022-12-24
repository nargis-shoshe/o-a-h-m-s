<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Money;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MoneyController extends Controller
{
    public function Moneyform(){
     return view('Frontend.pages.Donatemoney.donateform');

    }

    public function Moneystore(Request $request){
//dd($request->all());
  $request->validate([
      
      
      
     'account_number'=>'required',
     'donor_amount'=>'required',
     'donor_belonging'=>'required',
     'transaction_id'=>'required',
     

     ]);
          
            Donation::create([
                "user_id" => auth()->user()->id,
                'donor_amount'=>$request-> donor_amount,
                'belongings'=>$request->donor_belonging,
                'account_number'=>$request->account_number,
                'transaction_id'=>$request->transaction_id,
                'payment_method'=>$request->status,

             ]);
             
             notify()->success('Thank You for Your Donation');
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


public function report(){

    return view('Backend.pages.donatemoney.report');
}

public function reportsearch(Request $request)
{
//        $request->validate([
//            'from_date'    => 'required|date',
//            'to_date'      => 'required|date|after:from_date',
//        ]);

    $validator = Validator::make($request->all(), [
        'from_date'    => 'required|date|before_or_equal:now',
        'to_date'      => 'required|date|after:from_date',
    ]);
    
    if($validator->fails())
    {
//            notify()->error($validator->getMessageBag());
        notify()->error('From date and to date required and to should greater then from date.');
        return redirect()->back();
    }

 
   $from=$request->from_date;
   $to=$request->to_date;
   

//       $status=$request->status;

    $donor=Donation::whereBetween('created_at', [$from, $to])->get();
    //dd($donor);
    return view('Backend.pages.donatemoney.report',compact('donor'));

}
    
}
