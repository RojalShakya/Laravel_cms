<?php

use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return view('frontend.home');
})->name('home');
Route::get('/about',function(){
    return view('frontend.about');
})->name('about');
Route::get('/services',function(){
    return view('frontend.services');
})->name('services');
Route::get('/contact',function(){
    return view('frontend.contact');
})->name('contact');
Route::get('/portfolio',function(){
    return view('frontend.portfolio');
})->name('portfolio');
Route::get('/projectdetails',function(){
    return view('frontend.projectdetails');
})->name('projectdetails');

Route::get('/elements',function(){
    return view('frontend.elements');
})->name('elements');
Route::get('/blogs',function(){
    return view('frontend.blogs');
})->name('blogs');
Route::get('/blogsdetail',function(){
    return view('frontend.blogsdetail');
})->name('blogsdetail');
