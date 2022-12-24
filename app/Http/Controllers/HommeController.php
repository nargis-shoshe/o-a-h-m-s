<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;


class HommeController extends Controller
{
    public function index(){
        
        return view('Backend.master');
    
  
}
}