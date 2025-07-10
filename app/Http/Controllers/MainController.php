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
    // public function materials()
    // {
    //     return view('frontend.materials');
    // }
    public function materials()
    {
        $materials = [
            'Hastelloy',
            'Monel',
            'Inconel',
            'Incoloy',
            'Nickel Based Superalloys',
            'Titanium',
            'Duplex & Super Duplex',
            'Austenitic Stainless Steel',
            'High Strength Stainless Steel',
            'Super Austenitic Stainless Steel',
            'Zirconium',
            'Engineering Steels',
            'Aluminium Alloys',
            'Copper Alloys',
            'Hard To Find & Special Alloys',
            'Haynes Superalloys',
        ];

        return view(
            'frontend.materials',
            compact('materials')
        );
    }

    public function hastelloy()
    {
        $grades = [
            ['name' => 'C276', 'slug' => 'c276'],
            ['name' => 'C22', 'slug' => 'c22'],
            ['name' => 'C4', 'slug' => 'c4'],
            ['name' => 'B2', 'slug' => 'b2'],
            ['name' => 'B3', 'slug' => 'b3'],
            ['name' => 'C2000', 'slug' => 'c2000'],
            ['name' => 'G3', 'slug' => 'g3'],
            ['name' => 'G30', 'slug' => 'g30'],
            ['name' => 'Hastelloy X', 'slug' => 'hastelloy-x'],
        ];

        return view('frontend.materials.hastelloy.index', compact('grades'));
    }

    public function monel()
    {
        $grades = [
            ['name' => 'K500', 'slug' => 'k500'],
            ['name' => 'R405', 'slug' => 'r405'],
            ['name' => '400', 'slug' => '400'],
        ];

        return view('frontend.materials.monel.index', compact('grades'));
    }

    public function incoloy()
    {
        $grades = [
            ['name' => '825', 'slug' => '825'],
            ['name' => '800', 'slug' => '800'],
            ['name' => '925', 'slug' => '925'],
            ['name' => '800H_800HT', 'slug' => '800H_800HT'],
            ['name' => '020', 'slug' => '020'],
        ];

        return view('frontend.materials.incoloy.index', compact('grades'));
    }


    public function nickelBasedSuperalloys()
    {
        $grades = [
            ['name' => 'A286 AIS 660', 'slug' => 'nickel-based-superalloys-a286 ais 660'],
            ['name' => '200', 'slug' => 'nickel-based-superalloys-200'],
            ['name' => '201', 'slug' => 'nickel-based-superalloys-201'],
        ];

        return view('frontend.materials.nickel-based-superalloys.index', compact('grades'));
    }



    public function showMaterialGrade($family, $grade)
    {
        $viewPath = "frontend.materials.$family.$grade";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        abort(404, 'Material grade page not found.');
    }



    // public function nickelAlloys()
    // {
    //     return view('frontend.materials.nickel-alloys.index');
    // }
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
        abort(code: 404);
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
