<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    //
    public function home()
    {
        $blogs = Blog::where('status', 1)->latest()->paginate(3);

        return view('frontend.index', compact('blogs'));

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
        $blogs = Blog::where('status', true)
            ->orderBy('published_at', 'desc')
            ->paginate(9);
        // dd($blogs);

        return view('frontend.blogs', compact('blogs'));
    }

    public function specificBlog($slug)
    {
        // $blogs = Blog::where('status', true)
        //     ->orderBy('published_at', 'desc');
        $allBlogs = Blog::where('status', true)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
        // Fetch the current blog with its FAQs
        $blog = Blog::where('slug', $slug)
            ->with('faqs') // eager load FAQs
            ->firstOrFail();

        return view('frontend.blogs.single-blog', compact('blog', 'allBlogs'));
    }

    public function contactUsKhetwadi()
    {
        return view('frontend.khetwadi');
    }

    public function contactUsKamatipura()
    {
        return view('frontend.kamatipura');
    }

    public function contactUsDarukhana()
    {
        return view('frontend.darukhana');
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

    public function indiasStainlessSteelExportIndustry()
    {

        return view('frontend.blogs.indias-stainless-steel-export-industry');
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

        return view('frontend.blogs.uaes-ultimate-guide');
    }

    public function stainlessSteelUsesInKitchen()
    {

        return view('frontend.blogs.stainless-steel-uses-in-kitchen');
    }

    public function whereToBuyHighQuality()
    {

        return view('frontend.blogs.where-to-buy-high-quality');
    }

    public function howToChooseTheBestStainlessSteelPipes()
    {

        return view('frontend.blogs.how-to-choose-the-best-stainless-steel-pipes');
    }

    public function HowStainlessSteelTubesImproveProcessEfficiency()
    {

        return view('frontend.blogs.how-stainless-steel-tubes-improve-process-efficiency');
    }

    public function stainlessSteelVsOtherMetals()
    {

        return view('frontend.blogs.stainless-steel-vs-other-metals');
    }

    public function stainlessSteelPipeInstallation()
    {

        return view('frontend.blogs.stainless-steel-pipe-installation');
    }

    public function stainlessSteelTubeGradesExplained()
    {

        return view('frontend.blogs.stainless-steel-tube-grades-explained');
    }

    public function stainlessSteelTubesApplicationsBenefitsAndCostGuide()
    {

        return view('frontend.blogs.stainless-steel-tubes-applications-benefits-and-cost-guide');
    }

    public function stainlessSteelTubingForFoodAndBeverageIndustry()
    {

        return view('frontend.blogs.stainless-steel-tubing-for-food-and-beverage-industry');
    }

    public function topTenUsesOfStainlessSteel()
    {

        return view('frontend.blogs.top-ten-uses-of-stainless-steel');
    }

    public function maintenanceTipsForStainlessSteel()
    {

        return view('frontend.blogs.maintenance-tips-for-stainless-steel');
    }

    public function stainlessSteelTubesVsCarbonSteelPipes()
    {

        return view('frontend.blogs.stainless-steel-tubes-vs-carbon-steel-pipes');
    }

    public function stainlessSteelSeamlessVsErwPipes()
    {

        return view('frontend.blogs.stainless-steel-seamless-vs-erw-pipes');
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
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Hastelloy%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.hastelloy.index', compact('blogs'));
    }

    public function hastelloyGrade($slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Hastelloy%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.hastelloy.'.$slug, compact('blogs', 'slug'));
    }

    public function monel()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Monel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.monel.index', compact('blogs'));
    }

    public function incoloy()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%incoloy%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.incoloy.index', compact('blogs'));
    }

    public function nickelBasedSuperalloys()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%nickelBasedSuperalloys%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.nickel-based-superalloys.index', compact('blogs'));
    }

    public function inconel()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Inconel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.inconel.index', compact('blogs'));
    }

    public function titanium()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Titanium%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.titanium.index', compact('blogs'));
    }

    public function aluminiumAlloys()
    {
        // $blogCategories = BlogCategory::where('status', 1)->get();
        // dd($blogCategories);

        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Aluminium Alloys%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.aluminium-alloys.index', compact('blogs'));
    }

    public function superAusteniticStainlessSteel()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%superAusteniticStainlessSteel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.super-austenitic-stainless-steel.index', compact('blogs'));
    }

    public function hardToFindAndSpecialAlloys()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Hard To Find and Special Alloy%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.hard-to-find-special-alloys.index', compact('blogs'));

    }

    public function austeniticStainlessSteel()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%austeniticStainlessSteel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);

        // dd($blogs);
        return view('frontend.materials.austenitic-stainless-steel.index', compact('blogs'));

    }

    public function engineeringSteels()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Engineering Steel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.engineering-steels.index', compact('blogs'));
    }

    public function engineeringSteelsGrade($slug)
    {
        $viewPath = 'frontend.materials.engineering-steels.'.$slug;

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        abort(404);
    }

    public function copperAlloys()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Copper Alloys%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.copper-alloys.index', compact('blogs'));
    }

    public function zirconium()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Zirconium%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.zirconium.index', compact('blogs'));
    }

    public function haynesSuperalloys()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Haynes Alloys%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.haynes-superalloys.index', compact('blogs'));
    }

    public function duplexAndSuperDuplex()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Duplex & Super Duplex%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.duplex-and-super-duplex.index', compact('blogs'));
    }

    public function highStrengthStainlessSteel()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%High Strength Stainless Steel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.high-strength-stainless-steel.index', compact('blogs'));
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
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%pipes tubes%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.products.pipes-tubes.index', compact('blogs'));
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
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Special Fabricated%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.products.special-fabricated.index', compact('blogs'));
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
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Pipe Fittings, Flanges & Fasteners%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.products.pipe-fittings-flanges-fasteners.index', compact('blogs'));
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
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Bars and Rods%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.products.bars-rods.index', compact('blogs'));
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
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Sheets & Plates%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);

        // dd($blogs);
        return view('frontend.products.sheets-plates-coils.index', compact('blogs'));
    }

    public function chequeredSheets()
    {
        return view('frontend.products.sheets-plates-coils.chequered-sheets');
    }

    public function strips()
    {
        // dd('I AM HERE');
        return view('frontend.products.sheets-plates-coils.strips');
    }

    public function shimsheets()
    {
        return view('frontend.products.sheets-plates-coils.shim-sheets');
    }

    public function sheetsandplates()
    {
        return view('frontend.products.sheets-plates-coils.sheets-and-plates');
    }

    public function perforatedsheets()
    {
        return view('frontend.products.sheets-plates-coils.perforated-sheets');
    }

    public function coils()
    {
        return view('frontend.products.sheets-plates-coils.coils');
    }

    public function claddedplates()
    {
        return view('frontend.products.sheets-plates-coils.cladded-plates');
    }

    public function downloadDatasheet()
    {
        // Path to PDF in storage/app/public/datasheets/
        $filePath = storage_path('app/public/datasheets/en8.pdf');

        if (! file_exists($filePath)) {
            abort(404, 'File not found');
        }

        // Return PDF as download
        return response()->download($filePath, 'EN8_Steel_Datasheet.pdf');
    }

    public function dashboard()
    {
        // $blogsCount = Blog::count();

        // // Only count properties with p_status = 1
        // $propertiesCount = Property::where('p_status', 1)->count();

        // // Only count interiors with status = 1
        // $interiorsCount = Interior::where('status', 1)->count();

        // dd('dashboard5');

        $data = [
            'blogsCount' => Blog::count(),
            'categoriesCount' => BlogCategory::count(),
            'tagsCount' => Tag::count(),
        ];

        return view('backend.dashboard', $data);

    }
}

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class LeadController extends Controller
// {
//     public function store(Request $request)
//     {
//         // Validate email
//         $request->validate([
//             'email' => 'required|email',
//         ]);

//         // Path to datasheet in public folder
//         $filePath = public_path('datasheets/EN8_Datasheet_v2.docx');

//         if (! file_exists($filePath)) {
//             return back()->with('error', 'Datasheet file not found!');
//         }

//         // Download the file
//         return response()->download($filePath, 'EN8_Datasheet.docx');
//     }
// }
