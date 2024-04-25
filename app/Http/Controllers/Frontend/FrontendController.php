<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public $route="frontend";

    public function index()
    {
        $about=About::first();
        return view($this->route.'.home', compact('about'));
    }
    public function about()
    {
        return view($this->route.'.about');
    }
    public function services()
    {
        return view($this->route.'.services');
    }
    public function portfolio()
    {
        return view($this->route.'.portfolio');
    }
    public function projectDetails()
    {
        return view($this->route.'.project-details');
    }
    public function elements()
    {
        return view($this->route.'.elements');
    }
    public function blog()
    {
        return view($this->route.'.blog');
    }
    public function blogDetails()
    {
        return view($this->route.'.blog-details');
    }

    public function contact()
    {
        return view($this->route.'.contact');
    }
}
