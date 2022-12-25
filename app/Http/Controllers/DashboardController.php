<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Donation;
use App\Models\Services;
use App\Models\Staff;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
        $totalDonation = Donation::sum('donor_amount');
        $totalExpences = Expense::sum('overall_balance');
        $totalBelongings = Donation::whereNotNull('belongings')->count();
        $totalServices= Services::sum('name');
        // dd($totalBelongings);
        return view('Backend.pages.dashboard',compact('totalDonation','totalExpences','totalBelongings','totalServices'));
    }
}
