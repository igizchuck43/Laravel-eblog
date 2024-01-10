<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainContoller extends Controller
{
    //
    public function index(){
        //return 'this is index info';
        $name = 'Charles';
        $colors =[
            'red', 'blue', 'green'
        ];
        return view('home', [
            'name' => $name,
            'colors' => $colors
        ]);
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
