<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
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
    public function calculator()
    {
        return view('frontend.calculator');
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }
    public function contactUsGulalwadi()
    {
        return view('frontend.gulalwadi');
    }

    public function blogs()
    {
        return view('frontend.blogs');
    }

    public function contactUsKhetwadi()
    {
        return view('frontend.khetwadi');
    }

    public function StainlessSteelInconelTubes()
    {

        return view('frontend.blogs.stainless-steel-inconel-tubes');
    }

    public function tenMistakesToAvoidWhenBuyingStainlessSteelPipes()
    {

        return view('frontend.blogs.10-mistakes-to-avoid-when-buying-stainless-steel-pipes');
    }
    public function emergingTrendsInIndustrialPipingFor2025AndBeyond()
    {

        return view('frontend.blogs.emerging-trends-in-industrial-piping-for-2025-and-beyond');
    }

    public function everythingYouNeedToKnowAboutWeldedAndSeamlessPipes()
    {

        return view('frontend.blogs.everything-you-need-to-know-about-welded-and-seamless-pipes');
    }

    public function india’sStainlessSteelExportIndustry()
    {

        return view('frontend.blogs.india’s-stainless-steel-export-industry');
    }
    public function theRoleOfHighPerformance()
    {

        return view('frontend.blogs.the-role-of-high-performance');
    }
    public function topSevenAdvantagesOfUsing()
    {

        return view('frontend.blogs.top-7-advantages-of-using');
    }
    public function weldedVsSeamless()
    {

        return view('frontend.blogs.welded-vs-seamless');
    }
    public function whyHastelloyWeighsMoreThanStainlessSteel()
    {

        return view('frontend.blogs.why-hastelloy-weighs-more-than-stainless-steel');
    }
    public function dinStandardMetalAlloys()
    {

        return view('frontend.blogs.din-standard-metal-alloys');
    }
    public function uae’sUltimateGuide()
    {

        return view('frontend.blogs.uae’s-ultimate-guide');
    }
    public function stainlessSteelUsesInKitchen()
    {

        return view('frontend.blogs.stainless-steel-uses-in-kitchen');
    }




    public function materials()
    {
        $materials = [
            'Hastelloy',
            'Monel',
            'Inconel',
            'Incoloy',
            'Nickel Based Superalloys',
            'Titanium',
            // 'Duplex & Super Duplex',
            'Austenitic Stainless Steel',
            // 'High Strength Stainless Steel',
            'Super Austenitic Stainless Steel',
            'Zirconium',
            'Engineering Steels',
            'Aluminium Alloys',
            'Copper Alloys',
            'Hard To Find Special Alloys',
            'Haynes Superalloys',
        ];

        return view(
            'frontend.materials',
            compact('materials')
        );
    }

    public function hastelloy()
    {
        // $grades = [
        //     ['name' => 'C276', 'slug' => 'c276'],
        //     ['name' => 'C22', 'slug' => 'c22'],
        //     ['name' => 'C4', 'slug' => 'c4'],
        //     ['name' => 'B2', 'slug' => 'b2'],
        //     ['name' => 'B3', 'slug' => 'b3'],
        //     ['name' => 'C2000', 'slug' => 'c2000'],
        //     ['name' => 'G3', 'slug' => 'g3'],
        //     ['name' => 'G30', 'slug' => 'g30'],
        //     ['name' => 'Hastelloy X', 'slug' => 'hastelloy-x'],
        // ];

        // return view('frontend.materials.hastelloy.index', compact('grades'));
        return view('frontend.materials.hastelloy.index');
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
            ['name' => 'A286_AIS660', 'slug' => 'nickel-based-superalloys-a286-ais660'],
            ['name' => '200', 'slug' => 'nickel-based-superalloys-200'],
            ['name' => '201', 'slug' => 'nickel-based-superalloys-201'],
        ];

        return view('frontend.materials.nickel-based-superalloys.index', compact('grades'));
    }

    public function inconel()
    {
        $grades = [
            ['name' => '600', 'slug' => '600'],
            ['name' => '617', 'slug' => '617'],
            ['name' => '625', 'slug' => '625'],
            ['name' => '690', 'slug' => '690'],
            ['name' => '718', 'slug' => '718'],
            ['name' => 'x750', 'slug' => 'x750'],
        ];

        return view('frontend.materials.inconel.index', compact('grades'));
    }

    public function titanium()
    {
        $grades = [
            ['name' => 'grade 1', 'slug' => 'grade-1'],
            ['name' => 'grade 2', 'slug' => 'grade-2'],
            ['name' => 'grade 4 eli', 'slug' => 'grade-4-eli'],
            ['name' => 'grade 4', 'slug' => 'grade-4'],
            ['name' => 'grade 5 eli', 'slug' => 'grade-5-eli'],
            ['name' => 'grade 5', 'slug' => 'grade-5'],
            ['name' => 'grade 7 nb', 'slug' => 'grade-7-nb'],
            ['name' => 'grade 9', 'slug' => 'grade-9'],
            ['name' => 'grade 12', 'slug' => 'grade-12'],
            ['name' => 'grade 7', 'slug' => 'grade-7'],
            ['name' => 'grade 23', 'slug' => 'grade-23'],
        ];

        return view('frontend.materials.titanium.index', compact('grades'));
    }

    public function aluminiumAlloys()
    {
        $grades = [
            ['name' => '6061 T6', 'slug' => 'aluminium-alloys-6061-T6'],
            ['name' => '1100', 'slug' => 'aluminium-alloys-1100'],
            ['name' => '1200', 'slug' => 'aluminium-alloys-1200'],
            ['name' => '2014 T6', 'slug' => 'aluminium-alloys-2014-T6'],
            ['name' => '5083', 'slug' => 'aluminium-alloys-5083'],
            ['name' => '6012', 'slug' => 'aluminium-alloys-6012'],
            ['name' => '6063', 'slug' => 'aluminium-alloys-6063'],
            ['name' => '6082 T6', 'slug' => 'aluminium-alloys-6082-T6'],
            ['name' => '7075', 'slug' => '-aluminium-alloys7075'],
            ['name' => 'HE30', 'slug' => 'aluminium-alloys-HE30'],
        ];

        return view('frontend.materials.aluminium-alloys.index', compact('grades'));
    }

    public function superAusteniticStainlessSteel()
    {
        $grades = [
            ['name' => 'AL 6XN', 'slug' => 'super-austenitic-stainless-steel-AL-6XN'],
            ['name' => 'Alloy 926', 'slug' => 'super-austenitic-stainless-steel-Alloy-926'],
            ['name' => '253 MA', 'slug' => 'super-austenitic-stainless-steel-253-MA'],
            ['name' => '904L', 'slug' => 'super-austenitic-stainless-steel-904L'],
            ['name' => 'SMO 254', 'slug' => 'super-austenitic-stainless-steel-SMO-254'],
            ['name' => 'SMO 654', 'slug' => 'super-austenitic-stainless-steel-SMO-654'],
        ];

        return view('frontend.materials.super-austenitic-stainless-steel.index', compact('grades'));
    }

    public function hardToFindAndSpecialAlloys()
    {
        $grades = [
            ['name' => 'Carbide', 'slug' => 'hard-to-find-special-alloys-carbide'],
            ['name' => 'Nimonic', 'slug' => 'hard-to-find-special-alloys-nimonic'],
            ['name' => 'Nitinol', 'slug' => 'hard-to-find-special-alloys-nitinol'],
            ['name' => 'Stellite', 'slug' => 'hard-to-find-special-alloys-stellite'],
            ['name' => 'Tantalum', 'slug' => 'hard-to-find-special-alloys-tantalum'],
            ['name' => 'Tungsten', 'slug' => 'hard-to-find-special-alloys-tungsten'],

        ];

        return view('frontend.materials.hard-to-find-special-alloys.index', compact('grades'));

    }

    public function austeniticStainlessSteel()
    {
        $grades = [
            ['name' => 'Austenitic Stainless Steel 304', 'slug' => 'austenitic-stainless-steel-304'],
            ['name' => 'Austenitic Stainless Steel 309', 'slug' => 'austenitic-stainless-steel-309'],
            ['name' => 'Austenitic Stainless Steel 310', 'slug' => 'austenitic-stainless-steel-310'],
            ['name' => 'Austenitic Stainless Steel 316', 'slug' => 'austenitic-stainless-steel-316'],
            ['name' => 'Austenitic Stainless Steel 316Ti', 'slug' => 'austenitic-stainless-steel-316Ti'],
            ['name' => 'Austenitic Stainless Steel 317', 'slug' => 'austenitic-stainless-steel-317'],
            ['name' => 'Austenitic Stainless Steel 321', 'slug' => 'austenitic-stainless-steel-321'],
            ['name' => 'Austenitic Stainless Steel 347', 'slug' => 'austenitic-stainless-steel-347'],
            ['name' => 'Austenitic Stainless Steel Nitronic 50', 'slug' => 'austenitic-stainless-steel-nitronic-50'],
            ['name' => 'Austenitic Stainless Steel Nitronic 60', 'slug' => 'austenitic-stainless-steel-nitronic-60'],

        ];

        return view('frontend.materials.austenitic-stainless-steel.index', compact('grades'));

    }


    public function engineeringSteels()
    {
        $grades = [
            ['name' => 'Engineering Steel 1045', 'slug' => 'engineering-steels-1045'],
            ['name' => 'Engineering Steel 1055', 'slug' => 'engineering-steels-1055'],
            ['name' => 'Engineering Steel 4130', 'slug' => 'engineering-steels-4130'],
            ['name' => 'Engineering Steel 4140', 'slug' => 'engineering-steels-4140'],
            ['name' => 'Engineering Steel 4340', 'slug' => 'engineering-steels-4340'],
            ['name' => 'Engineering Steel EN8', 'slug' => 'engineering-steels-en8'],
            ['name' => 'Engineering Steel EN9', 'slug' => 'engineering-steels-en9'],
            ['name' => 'Engineering Steel EN19', 'slug' => 'engineering-steels-en19'],
            ['name' => 'Engineering Steel EN24', 'slug' => 'engineering-steels-en24'],
            ['name' => 'Engineering Steel EN31', 'slug' => 'engineering-steels-en31'],
            ['name' => 'Engineering Steel EN36', 'slug' => 'engineering-steels-en36'],
            ['name' => 'Engineering Steel EN47', 'slug' => 'engineering-steels-en47'],
            ['name' => 'Engineering Steel D2', 'slug' => 'engineering-steels-d2'],
            ['name' => 'Engineering Steel P1', 'slug' => 'engineering-steels-p1'],
            ['name' => 'Engineering Steel P11', 'slug' => 'engineering-steels-p11'],
            ['name' => 'Engineering Steel P12', 'slug' => 'engineering-steels-p12'],
            ['name' => 'Engineering Steel P22', 'slug' => 'engineering-steels-p22'],
        ];

        return view('frontend.materials.engineering-steels.index', compact('grades'));
    }

    public function copperAlloys()
    {
        $grades = [
            ['name' => 'Copper Alloys Aluminium Bronze', 'slug' => 'copper-alloys-aluminium-bronze'],
            ['name' => 'Copper Alloys Beryllium Copper', 'slug' => 'copper-alloys-beryllium-copper'],
            ['name' => 'Copper Alloys C44300', 'slug' => 'copper-alloys-c44300'],
            ['name' => 'Copper Alloys C46400', 'slug' => 'copper-alloys-c46400'],
            ['name' => 'Copper Alloys C63000', 'slug' => 'copper-alloys-c63000'],
            ['name' => 'Copper Alloys C71500', 'slug' => 'copper-alloys-c71500'],
            ['name' => 'Copper Alloys C71520', 'slug' => 'copper-alloys-c71520'],
            ['name' => 'Copper Alloys Cartridge Brass', 'slug' => 'copper-alloys-cartridge-brass'],
            ['name' => 'Copper Alloys Cu Ni 70_30', 'slug' => 'copper-alloys-cu-ni-70-30'],
            ['name' => 'Copper Alloys Cu Ni-90_10', 'slug' => 'copper-alloys-cu-ni-90-10'],
            ['name' => 'Copper Alloys Ec Copper', 'slug' => 'copper-alloys-ec-copper'],
            ['name' => 'Copper Alloys Etp Copper', 'slug' => 'copper-alloys-etp-copper'],
            ['name' => 'Copper Alloys Navel Brass', 'slug' => 'copper-alloys-navel-brass'],
        ];

        return view('frontend.materials.copper-alloys.index', compact('grades'));
    }

    public function zirconium()
    {
        $grades = [
            ['name' => 'Zirconium 702', 'slug' => 'zirconium-702'],
            ['name' => 'Zirconium 704', 'slug' => 'zirconium-704'],
            ['name' => 'Zirconium 705', 'slug' => 'zirconium-705'],
        ];

        return view('frontend.materials.zirconium.index', compact('grades'));
    }

    public function haynesSuperalloys()
    {
        $grades = [
            ['name' => 'haynes-superalloys 160', 'slug' => 'haynes-superalloys-160'],
            ['name' => 'haynes-superalloys 188', 'slug' => 'haynes-superalloys-188'],
            ['name' => 'haynes-superalloys 230', 'slug' => 'haynes-superalloys-230'],
            ['name' => 'haynes-superalloys 242', 'slug' => 'haynes-superalloys-242'],
        ];

        return view('frontend.materials.haynes-superalloys.index', compact('grades'));
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

    // 1st Product pipes & tubes
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
        return view('frontend.products.pipes-tubes.welded-pipes');
    }
    public function seamlessPipes()
    {
        return view('frontend.products.pipes-tubes.seamless-pipes');
    }

    public function capillaries()
    {
        return view('frontend.products.pipes-tubes.capillaries');
    }

    public function hollowSectionPipe()
    {
        return view('frontend.products.pipes-tubes.hollow-section-pipe');
    }

    public function uBentTubes()
    {
        return view('frontend.products.pipes-tubes.u-bent-tubes');
    }

    public function boilerHeatExchangerTubes()
    {
        return view('frontend.products.pipes-tubes.boiler-heat-exchanger-tubes');
    }

    // Special Fabricated Product
    public function specialFabricated()
    {
        $types = [
            ['name' => 'Custom Steel Furniture', 'slug' => 'custom-steel-furniture'],
            ['name' => 'Fabricated SS Grills', 'slug' => 'fabricated-ss-grills'],
            // ['name' => 'Capillaries', 'slug' => 'capillaries'],
            // ['name' => 'Hollow Section Pipe', 'slug' => 'hollow-section-pipe'],
            // ['name' => 'U-Bent Tubes', 'slug' => 'u-bent-tubes'],
            // ['name' => 'Boiler & Heat Exchanger Tubes', 'slug' => 'boiler-heat-exchanger-tubes'],
        ];

        return view('frontend.products.special-fabricated.index', compact('types'));
    }

    public function customSteelFurniture()
    {
        return view('frontend.products.special-fabricated.custom-steel-furniture');
    }
    public function fabricatedSsGrills()
    {
        return view('frontend.products.special-fabricated.fabricated-ss-grills');
    }
    public function ssrailings()
    {
        return view('frontend.products.special-fabricated.ss-railings');
    }
    public function glassrailings()
    {
        return view('frontend.products.special-fabricated.glass-railings');
    }

    public function pipeFittingsFlangesFasteners()
    {
        $types = [
            ['name' => 'Custom Steel Furniture', 'slug' => 'custom-steel-furniture'],
            ['name' => 'Fabricated SS Grills', 'slug' => 'fabricated-ss-grills'],
            ['name' => 'Custom Fabricated Fittings', 'slug' => 'custom-fabricated-fittings'],
            // ['name' => 'Hollow Section Pipe', 'slug' => 'hollow-section-pipe'],
            // ['name' => 'U-Bent Tubes', 'slug' => 'u-bent-tubes'],
            // ['name' => 'Boiler & Heat Exchanger Tubes', 'slug' => 'boiler-heat-exchanger-tubes'],
        ];

        return view('frontend.products.pipe-fittings-flanges-fasteners.index', compact('types'));
    }
    public function fittingsAndFlanges()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.fittings-and-flanges');
    }
    public function flangesAndGaskets()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.flanges-and-gaskets');
    }
    public function customFabricatedFittings()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings');
    }
    public function fasteners()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.fasteners');
    }
    public function pipeFittings()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.pipe-fittings');
    }

    public function barsRods()
    {
        $types = [
            ['name' => 'Square Bars', 'slug' => 'square-bars'],
            ['name' => 'Threaded Rods', 'slug' => 'threaded-rods'],
            // ['name' => 'Capillaries', 'slug' => 'capillaries'],
            // ['name' => 'Hollow Section Pipe', 'slug' => 'hollow-section-pipe'],
            // ['name' => 'U-Bent Tubes', 'slug' => 'u-bent-tubes'],
            // ['name' => 'Boiler & Heat Exchanger Tubes', 'slug' => 'boiler-heat-exchanger-tubes'],
        ];

        return view('frontend.products.bars-rods.index', compact('types'));
    }

    public function squareBars()
    {
        return view('frontend.products.bars-rods.square-bars');
    }
    public function threadedRods()
    {
        return view('frontend.products.bars-rods.threaded-rods');
    }
    public function roundBars()
    {
        return view('frontend.products.bars-rods.round-bars');
    }
    public function hollowBars()
    {
        return view('frontend.products.bars-rods.hollow-bars');
    }
    public function hexagonBars()
    {
        return view('frontend.products.bars-rods.hexagon-bars');
    }
    public function flatBars()
    {
        return view('frontend.products.bars-rods.flat-bars');
    }


    public function sheetsPlatesCoils()
    {
        $types = [
            ['name' => 'Custom Steel Furniture', 'slug' => 'custom-steel-furniture'],
            ['name' => 'Fabricated SS Grills', 'slug' => 'fabricated-ss-grills'],
            ['name' => 'Custom Fabricated Fittings', 'slug' => 'custom-fabricated-fittings'],
            // ['name' => 'Hollow Section Pipe', 'slug' => 'hollow-section-pipe'],
            // ['name' => 'U-Bent Tubes', 'slug' => 'u-bent-tubes'],
            // ['name' => 'Boiler & Heat Exchanger Tubes', 'slug' => 'boiler-heat-exchanger-tubes'],
        ];

        return view('frontend.products.sheets-plates-coils.index', compact('types'));
    }

    public function chequeredSheets()
    {
        return view('frontend.products.sheets-plates-coils.chequered-sheets');
    }


    public function downloadDatasheet()
{
    // Path to PDF in storage/app/public/datasheets/
    $filePath = storage_path('app/public/datasheets/en8.pdf');

    if (!file_exists($filePath)) {
        abort(404, 'File not found');
    }

    // Return PDF as download
    return response()->download($filePath, 'EN8_Steel_Datasheet.pdf');
}
}



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email',
        ]);

        // Path to datasheet in public folder
        $filePath = public_path('datasheets/EN8_Datasheet_v2.docx');

        if (!file_exists($filePath)) {
            return back()->with('error', 'Datasheet file not found!');
        }

        // Download the file
        return response()->download($filePath, 'EN8_Datasheet.docx');
    }
}

