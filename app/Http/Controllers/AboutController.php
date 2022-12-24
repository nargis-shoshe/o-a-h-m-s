<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutlist(){
        $about=About::all();
        return view('Backend.pages.about.aboutlist',compact('about'));
    }
    public function aboutform(){
        return view('Backend.pages.about.aboutform');    
    }
    public function aboutstore(Request $request){
        $request->validate([
            'description'=>'required'
        ]);
        About::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        return redirect()->route('aboutlist');
    }

}
