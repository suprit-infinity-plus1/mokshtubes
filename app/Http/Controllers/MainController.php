<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home()
    {
        return view('frontend.index');
    }
    public function aboutUs()
    {
        return view('frontend.about');
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }
    public function contactUsGulalwadi()
    {
        return view('frontend.gulalwadi');
    }
    public function contactUsKhetwadi()
    {
        return view('frontend.khetwadi');
    }
}
