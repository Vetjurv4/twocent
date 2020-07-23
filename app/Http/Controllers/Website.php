<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class Website extends Controller
{
    //
    public function about(){
        return view('about');
    }
    
    public function gallery(){
         return view('gallery');
    }
     
    public function contact(){
         return view('contact');
    }
}
