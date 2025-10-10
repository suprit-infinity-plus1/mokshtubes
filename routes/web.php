<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LeadController;


// Route::get('/', function () {
//     return view('welcome');
// })

Route::post('/lead-capture', [LeadController::class, 'store'])->name('lead.capture');



Route::get('/', [MainController::class, 'home'])->name('index');
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/contact-us', [MainController::class, 'contactUs'])->name('contact-us');
Route::get('/contact-us/gulalwadi', [MainController::class, 'contactUsGulalwadi'])->name('contact-us-gulalwadi');
Route::get('/contact-us/khetwadi', [MainController::class, 'contactUsKhetwadi'])->name('contact-us-khetwadi');
Route::get('/contact-us/darukhana', [MainController::class, 'contactUsDarukhana'])->name('contact-us-darukhana');
Route::get('/contact-us/kamatipura', [MainController::class, 'contactUsKamatipura'])->name('contact-us-kamatipura');
Route::get('/about-us', [MainController::class, 'aboutUs'])->name('about-us');
Route::get('/calculator', [MainController::class, 'calculator'])->name('calculator');
Route::get('/materials', [MainController::class, 'materials'])->name('materials');
// Route::get('/blogs', [MainController::class, 'blogs'])->name('blogs');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::post('/lead-capture', [LeadController::class, 'store'])->name('lead.capture');



Route::get('/materials/hastelloy', [MainController::class, 'hastelloy'])->name('materials.hastelloy');
Route::get('/materials/monel', [MainController::class, 'monel'])->name('materials.monel');
Route::get('/materials/incoloy', [MainController::class, 'incoloy'])->name('materials.incoloy');
Route::get('/materials/nickel-based-superalloys', [MainController::class, 'nickelBasedSuperalloys'])->name('materials.nickel-Based-Superalloys');
Route::get('/materials/inconel', [MainController::class, 'inconel'])->name('materials.inconel');
Route::get('/materials/titanium', [MainController::class, 'titanium'])->name('materials.titanium');
Route::get('/materials/aluminium-alloys', action: [MainController::class, 'aluminiumAlloys'])->name('materials.aluminium-Alloys');
Route::get('/materials/super-austenitic-stainless-steel', action: [MainController::class, 'superAusteniticStainlessSteel'])->name('materials.super-Austenitic-Stainless-Steel');
Route::get('/materials/hard-to-find-special-alloys', action: [MainController::class, 'hardToFindAndSpecialAlloys'])->name('materials.hard-To-Find-Special-Alloys');
Route::get('/materials/aluminium-alloys', [MainController::class, 'aluminiumAlloys'])->name('materials.aluminium-Alloys');
Route::get('/materials/engineering-steels', [MainController::class, 'engineeringSteels'])->name('materials.engineering-Steels');
Route::get('/materials/engineering-steels/{slug}', [MainController::class, 'engineeringSteelsGrade'])->name('materials.engineering-Steel-grade');
Route::get('/materials/austenitic-stainless-steel', [MainController::class, 'austeniticStainlessSteel'])->name('materials.austenitic-stainless-Steel');
Route::get('/materials/copper-alloys', [MainController::class, 'copperAlloys'])->name('materials.copper-Alloys');
Route::get('/materials/zirconium', [MainController::class, 'zirconium'])->name('materials.zirconium');
Route::get('/materials/haynes-superalloys', [MainController::class, 'haynesSuperalloys'])->name('materials.haynes-Superalloys');
Route::get('/materials/duplex-and-super-duplex', [MainController::class, 'duplexAndSuperDuplex'])->name('materials.duplex-and-super-duplex');
Route::get('/materials/high-strength-stainless-steel', [MainController::class, 'highStrengthStainlessSteel'])->name('materials.high-strength-stainless-steel');

// Route::get('/materials/{family}/{grade}', [MainController::class, 'showMaterialGrade'])->name('material.grade');
Route::get('/materials/{category}/{slug}', [MainController::class, 'showMaterial'])->name('materials.grade');
Route::get('/products', [MainController::class, 'products'])->name('products');
Route::get('/products/pipes-tubes', [MainController::class, 'pipesTubes'])->name('products.pipes-tubes');
Route::get('/products/pipes-tubes/welded-pipes-and-tubes', [MainController::class, 'weldedPipes'])->name('products.pipes-tubes.welded-pipes');
Route::get('/products/pipes-tubes/seamless-pipes', [MainController::class, 'seamlessPipes'])->name('products.pipes-tubes.seamless-pipes');
Route::get('/products/pipes-tubes/capillaries', [MainController::class, 'capillaries'])->name('products.pipes-tubes.capillaries');
Route::get('/products/pipes-tubes/hollow-section-pipe', [MainController::class, 'hollowSectionPipe'])->name('products.pipes-tubes.hollow-section-pipe');
Route::get('/products/pipes-tubes/u-bent-tubes', [MainController::class, 'uBentTubes'])->name('products.pipes-tubes.u-bent-tubes');
Route::get('/products/pipes-tubes/boiler-heat-exchanger-tubes', [MainController::class, 'boilerHeatExchangerTubes'])->name('products.pipes-tubes.boiler-heat-exchanger-tubes');

Route::get('/products/special-fabricated', [MainController::class, 'specialFabricated'])->name('products.special-fabricated');
Route::get('/products/special-fabricated/custom-steel-furniture', [MainController::class, 'customSteelFurniture'])->name('products.special-fabricated.custom-steel-furniture');
Route::get('/products/special-fabricated/fabricated-ss-grills', [MainController::class, 'fabricatedSsGrills'])->name('products.special-fabricated.fabricated-ss-grills');
Route::get('/products/special-fabricated/ss-railings', [MainController::class, 'ssrailings'])->name('products.special-fabricated.ss-railings');
Route::get('/products/special-fabricated/glass-railings', [MainController::class, 'glassrailings'])->name('products.special-fabricated.glass-railings');

Route::get('/products/pipe-fittings-flanges-fasteners', [MainController::class, 'pipeFittingsFlangesFasteners'])->name('products.pipe-fittings-flanges-fasteners');
Route::get('/products/pipe-fittings-flanges-fasteners/fittings-and-flanges', [MainController::class, 'fittingsAndFlanges'])->name('products.pipe-fittings-flanges-fasteners.fittings-and-flanges');
Route::get('/products/pipe-fittings-flanges-fasteners/flanges-and-gaskets', [MainController::class, 'flangesAndGaskets'])->name('products.pipe-fittings-flanges-fasteners.flanges-and-gaskets');
Route::get('/products/pipe-fittings-flanges-fasteners/custom-fabricated-fittings', [MainController::class, 'customFabricatedFittings'])->name('products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings');
Route::get('/products/pipe-fittings-flanges-fasteners/fasteners', [MainController::class, 'fasteners'])->name('products.pipe-fittings-flanges-fasteners.fasteners');
Route::get('/products/pipe-fittings-flanges-fasteners/pipe-fittings', [MainController::class, 'pipeFittings'])->name('products.pipe-fittings-flanges-fasteners.pipe-fittings');

Route::get('/products/sheets-plates-coils', [MainController::class, 'sheetsPlatesCoils'])->name('products.sheets-plates-coils');
Route::get('/products/sheets-plates-coils/chequered-sheets', [MainController::class, 'chequeredSheets'])->name('products.sheets-plates-coils.chequered-sheets');
Route::get('/products/sheets-plates-coils/strips', [MainController::class, 'strips'])->name('products.sheets-plates-coils.strips');
Route::get('/products/sheets-plates-coils/shim-sheets', [MainController::class, 'shimsheets'])->name('products.sheets-plates-coils.shim-sheets');
Route::get('/products/sheets-plates-coils/sheets-and-plates', [MainController::class, 'sheetsandplates'])->name('products.sheets-plates-coils.sheets-and-plates');
Route::get('/products/sheets-plates-coils/perforated-sheets', [MainController::class, 'perforatedsheets'])->name('products.sheets-plates-coils.perforated-sheets');
Route::get('/products/sheets-plates-coils/coils', [MainController::class, 'coils'])->name('products.sheets-plates-coils.coils');
Route::get('/products/sheets-plates-coils/cladded-plates', [MainController::class, 'claddedplates'])->name('products.sheets-plates-coils.cladded-plates');


// Bars & Rods
Route::get('/products/bars-rods', [MainController::class, 'barsRods'])->name('products.bars-rods');
Route::get('/products/bars-rods/square-bars', [MainController::class, 'squareBars'])->name('products.bars-rods.square-bars');
Route::get('/products/bars-rods/threaded-rods', [MainController::class, 'threadedRods'])->name('products.bars-rods.threaded-rods');
Route::get('/products/bars-rods/round-bars', [MainController::class, 'roundBars'])->name('products.bars-rods.round-bars');
Route::get('/products/bars-rods/hollow-bars', [MainController::class, 'hollowBars'])->name('products.bars-rods.hollow-bars');
Route::get('/products/bars-rods/hexagon-bars', [MainController::class, 'hexagonBars'])->name('products.bars-rods.hexagon-bars');
Route::get('/products/bars-rods/flat-bars', [MainController::class, 'flatBars'])->name('products.bars-rods.flat-bars');


//blogs//
Route::get('/blogs/stainless-steel-inconel-tubes', [MainController::class, 'StainlessSteelInconelTubes'])->name('blogs.stainless-steel-inconel-tubes');
Route::get('/blogs/10-mistakes-to-avoid-when-buying-stainless-steel-pipes', [MainController::class, 'tenMistakesToAvoidWhenBuyingStainlessSteelPipes'])->name('blogs.10-mistakes-to-avoid-when-buying-stainless-steel-pipes');
Route::get('/blogs/emerging-trends-in-industrial-piping-for-2025-and-beyond', [MainController::class, 'emergingTrendsInIndustrialPipingFor2025AndBeyond'])->name('blogs.emerging-trends-in-industrial-piping-for-2025-and-beyond');
Route::get('/blogs/everything-you-need-to-know-about-welded-and-seamless-pipes', [MainController::class, 'everythingYouNeedToKnowAboutWeldedAndSeamlessPipes'])->name('blogs.everything-you-need-to-know-about-welded-and-seamless-pipes');
Route::get('/blogs/india’s-stainless-steel-export-industry', [MainController::class, 'india’sStainlessSteelExportIndustry'])->name('blogs.india’s-stainless-steel-export-industry');
Route::get('/blogs/the-role-of-high-performance', [MainController::class, 'theRoleOfHighPerformance'])->name('blogs.the-role-of-high-performance');
Route::get('/blogs/top-7-advantages-of-using', [MainController::class, 'topSevenAdvantagesOfUsing'])->name('blogs.top-7-advantages-of-using');
Route::get('/blogs/welded-vs-seamless', [MainController::class, 'weldedVsSeamless'])->name('blogs.welded-vs-seamless');
Route::get('/blogs/why-hastelloy-weighs-more-than-stainless-steel', [MainController::class, 'whyHastelloyWeighsMoreThanStainlessSteel'])->name('blogs.why-hastelloy-weighs-more-than-stainless-steel');
Route::get('/blogs/din-standard-metal-alloys', [MainController::class, 'dinStandardMetalAlloys'])->name('blogs.din-standard-metal-alloys');
Route::get('/blogs/uae’s-ultimate-guide', [MainController::class, 'Uae’sUltimateGuide'])->name('blogs.uae’s-ultimate-guide');
Route::get('/blogs/stainless-steel-uses-in-kitchen', [MainController::class, 'stainlessSteelUsesInKitchen'])->name('blogs.stainless-steel-uses-in-kitchen');
Route::get('/blogs/where-to-buy-high-quality', [MainController::class, 'WhereToBuyHighQuality'])->name('blogs.where-to-buy-high-quality');
Route::get('/blogs/how-to-choose-the-best-stainless-steel-pipes', [MainController::class, 'howToChooseTheBestStainlessSteelPipes'])->name('blogs.how-to-choose-the-best-stainless-steel-pipes');
Route::get('/blogs/how-stainless-steel-tubes-improve-process-efficiency', [MainController::class, 'HowStainlessSteelTubesImproveProcessEfficiency'])->name('blogs.how-stainless-steel-tubes-improve-process-efficiency');


// Route::get('/materials/nickel-alloys', [MainController::class, 'nickelAlloys'])->name('materials.nickel-alloys');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
