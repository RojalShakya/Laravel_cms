<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about= About::first();
        return view('dashboard.about',compact('about'));
    }
    public function update(Request $request)
    {
        $about = About::first();
        if($request->hasFile('logo_file')){
            $random = Str::random(6) . '-';
            $uploadedFile = $request->logo_file->storeAs('image', $random . $request->logo_file->getClientOriginalName(), 'public');
            $request->request->add(['logo'=>'storage/'.$uploadedFile]);
        }
        if($request->hasFile('profile_file')){
            $random = Str::random(6) . '-';
            $uploadedFile = $request->profile_file->storeAs('image',$random . $request->profile_file->getClientOriginalName(), 'public');
            $request->request->add(['profile'=>'storage/'.$uploadedFile]);
        }
        dd($request->all());
        if($about!=null){
            $about->update($request->all());
        }else{
            About::create($request->all());
        }
        return redirect()->back();

    }
}
