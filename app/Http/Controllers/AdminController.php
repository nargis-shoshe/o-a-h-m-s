<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function panel(){

        return view('Backend.pages.admin');
    }
}
