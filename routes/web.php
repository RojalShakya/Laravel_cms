<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class,'index'])->name('frontend.home');
Route::get('/about',[App\Http\Controllers\Frontend\FrontendController::class,'about'])->name('frontend.about');
Route::get('/services',[App\Http\Controllers\Frontend\FrontendController::class,'services'])->name('frontend.services');
Route::get('/portfolio',[App\Http\Controllers\Frontend\FrontendController::class,'portfolio'])->name('frontend.portfolio');
Route::get('/project-details',[App\Http\Controllers\Frontend\FrontendController::class,'projectDetails'])->name('frontend.project-details');
Route::get('/elements',[App\Http\Controllers\Frontend\FrontendController::class,'elements'])->name('frontend.elements');
Route::get('/blog',[App\Http\Controllers\Frontend\FrontendController::class,'blog'])->name('frontend.blogs');
Route::get('/blog-details',[App\Http\Controllers\Frontend\FrontendController::class,'blogDetials'])->name('frontend.blog-details');
Route::get('/contact',[App\Http\Controllers\Frontend\FrontendController::class,'contact'])->name('frontend.contact');
Route::get('dashboard/about',[App\Http\Controllers\Dashboard\AboutController::class,'index'])->name('backend.about');
Route::post('dashboard/about',[App\Http\Controllers\Dashboard\AboutController::class,'update'])->name('backend.aboutupdate');


// Route::get('/home', function()
// {
//     return view('frontend.home');
// })->name('home');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
