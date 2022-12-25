<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\User;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function list(){
        $citiz= User::where("role","Senior Citizen")->paginate(5);;
    return view('Backend.pages.citizens.list',compact('citiz'));

    }

    

}
