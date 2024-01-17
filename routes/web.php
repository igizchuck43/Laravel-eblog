<?php

use App\Http\Controllers\MainContoller;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainContoller::class,'index'])->name('home');

Route::get('about', [MainContoller::class,'about'])->name('about');

Route::get('contact', [MainContoller::class,'contact'])->name('contact');

// Route::get('/', [MainContoller::class,'index']);

// Route::get('contact', function(){
//     return 'This is the contact page';
// });

// Route::get('post/{id}', function($id){
//     return 'This is post ==>' . $id;
// }) -> name('post');