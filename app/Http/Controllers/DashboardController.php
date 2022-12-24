<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Donation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
        $totalDonation = Donation::sum('donor_amount');
        $totalExpences = Expense::sum('overall_balance');
        $totalBelongings = Donation::whereNotNull('belongings')->count();
        // dd($totalBelongings);
        return view('Backend.pages.dashboard',compact('totalDonation','totalExpences','totalBelongings'));
    }
}
