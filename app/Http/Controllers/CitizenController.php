<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function details(){

        return view('Backend.pages.seniorcitizen.details');
    }

    public function create(){

        return view('Backend.pages.seniorcitizen.createcitizen');
    }
}
