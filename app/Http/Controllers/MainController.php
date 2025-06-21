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
    public function materials()
    {
        return view('frontend.materials');
    }
    public function nickelAlloys()
    {
        return view('frontend.materials.nickel-alloys.index');
    }
    public function hastelloyC276()
    {
        return view('frontend.materials.hastelloy-c276');
    }
    public function showMaterial($category, $slug)
    {
        $viewPath = "frontend.materials.$category.$slug";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }
        abort(404);
    }
    public function products()
    {
        return view('frontend.products.index');
    }

    public function pipesTubes()
    {
        $types = [
    ['name' => 'Welded Pipes', 'slug' => 'welded-pipes'],
    ['name' => 'Seamless Pipes', 'slug' => 'seamless-pipes'],
    ['name' => 'Capillaries', 'slug' => 'capillaries'],
    ['name' => 'Hollow Section Pipe', 'slug' => 'hollow-section-pipe'],
    ['name' => 'U-Bent Tubes', 'slug' => 'u-bent-tubes'],
    ['name' => 'Boiler & Heat Exchanger Tubes', 'slug' => 'boiler-heat-exchanger-tubes'],
];

        return view('frontend.products.pipes-tubes.index', compact('types'));
    }

    public function weldedPipes()
    {
         return view('frontend.products.pipes-tubes.welded');
    }
}
