<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainContoller extends Controller
{
    //
    public function index(){
        //return 'this is index info';
        return view('home');
    }
    public function about(){
       // return 'this is about info';
       return view('others.about');
    }
    public function contact(){
       // return 'this is contact info';
       return view('others.contact');
    }
}
