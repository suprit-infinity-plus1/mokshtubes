<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\DatasheetController;
use App\Http\Controllers\DatasheetLeadController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Original Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/in');
});

// Global Redirects (Legacy support)
Route::redirect(
    '/materials/super-austenitic-stainless-steel/super-austenitic-stainless-steel-SMO-254',
    '/materials/super-austenitic-stainless-steel/super-austenitic-stainless-steel-smo-254',
    301
);

// Global Routes (Cookie, Leads, Export) - Must be defined before {country} wildcard
Route::middleware(['web'])->group(function () {
    Route::post('/cookie/accept', [CookieController::class, 'accept'])->name('cookie.accept');
    Route::post('/cookie/reject', [CookieController::class, 'reject'])->name('cookie.reject');
});

Route::post('/datasheet-leads-capture', [DatasheetLeadController::class, 'store'])->name('lead.capture.global'); // Renamed to avoid confusion, though original had duplicate name
Route::get('/datasheet/export', [DatasheetLeadController::class, 'export'])->name('datasheet.export');

// Admin Routes - Must be defined before {country} wildcard
Route::prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [MainController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
        // blogs
        Route::prefix('blogs')->group(function () {

            Route::get('/', [BlogController::class, 'blogs'])->name('admin.blogs');
            Route::get('/add', [BlogController::class, 'blogsAdd'])->name('admin.blogs.add');
            Route::get('/edit/{id}', [BlogController::class, 'blogsEdit'])->name('admin.blogs.edit');
            Route::post('/delete/{id}', [BlogController::class, 'blogsDelete'])->name('admin.blogs.delete');
            Route::post('/store', [BlogController::class, 'store'])->name('admin.blogs.store');
            Route::post('/update/{id}', [BlogController::class, 'blogsUpdate'])->name('admin.blogs.update');

            // Blog Categories
            Route::get('/categories', [BlogController::class, 'categories'])->name('admin.blogs.categories');
            Route::get('/categories/add', [BlogController::class, 'categoriesAdd'])->name('admin.blogs.categories.add');
            Route::get('/categories/edit/{id}', [BlogController::class, 'categoriesEdit'])->name('admin.blogs.categories.edit');
            Route::post('/categories/delete/{id}', [BlogController::class, 'categoriesDelete'])->name('admin.blogs.categories.delete');
            Route::post('/categories/store', [BlogController::class, 'categoriesStore'])->name('admin.blogs.categories.store');
            Route::post('/categories/update/{id}', [BlogController::class, 'categoriesUpdate'])->name('admin.blogs.categories.update');

            // Blog Tags
            Route::get('/tags', [BlogController::class, 'tags'])->name('admin.blogs.tags');
            Route::get('/tags/add', [BlogController::class, 'tagsAdd'])->name('admin.blogs.tags.add');
            Route::get('/tags/edit/{id}', [BlogController::class, 'tagsEdit'])->name('admin.blogs.tags.edit');
            Route::post('/tags/delete/{id}', [BlogController::class, 'tagsDelete'])->name('admin.blogs.tags.delete');
            Route::post('/tags/store', [BlogController::class, 'tagsStore'])->name('admin.blogs.tags.store');
            Route::post('/tags/update/{id}', [BlogController::class, 'tagsUpdate'])->name('admin.blogs.tags.update');
        });

        Route::prefix('datasheets')->middleware('auth')->group(function () {

            // list
            Route::get('/', [DatasheetController::class, 'index'])->name('datasheets.index');

            Route::get('/add', [DatasheetController::class, 'add'])->name('datasheets.add');

            // store
            Route::post('/store', [DatasheetController::class, 'store'])->name('datasheets.store');

            // edit page
            Route::get('/edit/{id}', [DatasheetController::class, 'edit'])->name('datasheets.edit');

            // update
            Route::post('/update/{id}', [DatasheetController::class, 'update'])->name('datasheets.update');

            // delete
            Route::post('/delete/{id}', [DatasheetController::class, 'destroy'])->name('datasheets.delete');
        });
        // datasheet leads
        Route::prefix('datasheet-leads')->group(function () {
            Route::get('/', [DatasheetLeadController::class, 'datasheetLeads'])->name('datasheet-leads');
            // Route::get('/add', [DatasheetLeadController::class, 'create'])->name('Datasheet.add');
            Route::get('/edit/{id}', [DatasheetLeadController::class, 'edit'])->name('datasheet.edit');
            Route::post('/update/{id}', [DatasheetLeadController::class, 'update'])->name('datasheet.update');

            Route::post('/delete/{id}', [DatasheetLeadController::class, 'destroy'])->name('Datasheet.delete');
        });
        Route::prefix('website-leads')->group(function () {
            Route::get('/', [MainController::class, 'websiteLeads'])->name('website-leads');
            Route::get('/export', [MainController::class, 'exportWebsiteLeads'])->name('website.export');
        });
    });
});

// Auth Routes - Must be before {country}
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Country Specific Routes
Route::prefix('{country}')
    ->middleware('check.country')
    ->group(function () {
    Route::get('/', [MainController::class, 'home'])->name('index');
    Route::get('/contact-us', [MainController::class, 'contactUs'])->name('contact-us');
    Route::get('/contact-us/gulalwadi', [MainController::class, 'contactUsGulalwadi'])->name('contact-us-gulalwadi');
    Route::get('/contact-us/khetwadi', [MainController::class, 'contactUsKhetwadi'])->name('contact-us-khetwadi');
    Route::get('/contact-us/darukhana', [MainController::class, 'contactUsDarukhana'])->name('contact-us-darukhana');
    Route::get('/contact-us/kamatipura', [MainController::class, 'contactUsKamatipura'])->name('contact-us-kamatipura');
    Route::get('/about-us', [MainController::class, 'aboutUs'])->name('about-us');
    Route::get('/calculator', [MainController::class, 'calculator'])->name('calculator');
    Route::get('/materials', [MainController::class, 'materials'])->name('materials');
    Route::get('/blogs', [MainController::class, 'blogs'])->name('blogs');

    Route::get('/whatsapp-intent', [MainController::class, 'whatsappIntent'])->name('whatsapp-intent');

    // Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
    // Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/blogs/{slug}', [MainController::class, 'specificBlog'])->name('frontend.single-blog');
    Route::post('/lead-capture', [DatasheetLeadController::class, 'store'])->name('lead.capture');

    Route::post('/sendmail', [MainController::class, 'sendMail'])->name('sendmail');

    Route::get('/materials/hastelloy', [MainController::class, 'hastelloy'])->name('materials.hastelloy');
    Route::get('/materials/hastelloy/{slug}', [MainController::class, 'hastelloyGrade'])->name('materials.hastelloy.grade');

    Route::get('/materials/monel', [MainController::class, 'monel'])->name('materials.monel');
    Route::get('/materials/monel/{slug}', [MainController::class, 'monelGrade'])->name('materials.monel.grade');

    Route::get('/materials/incoloy', [MainController::class, 'incoloy'])->name('materials.incoloy');
    Route::get('/materials/incoloy/{slug}', [MainController::class, 'incoloyGrade'])->name('materials.incoloy.grade');

    Route::get('/materials/nickel-based-superalloys', [MainController::class, 'nickelBasedSuperalloys'])->name('materials.nickel-Based-Superalloys');
    Route::get('/materials/nickel-based-superalloys/{slug}', [MainController::class, 'nickelBasedSuperalloysGrade'])->name('materials.nickel-based-superalloys.grade');

    Route::get('/materials/inconel', [MainController::class, 'inconel'])->name('materials.inconel');
    Route::get('/materials/inconel/{slug}', [MainController::class, 'inconelGrade'])->name('materials.inconel.grade');

    Route::get('/materials/titanium', [MainController::class, 'titanium'])->name('materials.titanium');
    Route::get('/materials/titanium/{slug}', [MainController::class, 'titaniumGrade'])->name('materials.titanium.grade');

    Route::get('/materials/aluminium-alloys', action: [MainController::class, 'aluminiumAlloys'])->name('materials.aluminium-Alloys');
    Route::get('/materials/aluminium-alloys/{slug}', [MainController::class, 'aluminiumAlloysGrade'])->name('materials.aluminium-alloys.grade');

    Route::get('/materials/super-austenitic-stainless-steel', action: [MainController::class, 'superAusteniticStainlessSteel'])->name('materials.super-Austenitic-Stainless-Steel');
    Route::get('/materials/super-austenitic-stainless-steel/{slug}', [MainController::class, 'superAusteniticStainlessSteelGrade'])->name('materials.super-austenitic-stainless-steel.grade');

    Route::get('/materials/hard-to-find-special-alloys', action: [MainController::class, 'hardToFindAndSpecialAlloys'])->name('materials.hard-To-Find-Special-Alloys');
    Route::get('/materials/hard-to-find-special-alloys/{slug}', [MainController::class, 'hardToFindAndSpecialAlloysGrade'])->name('materials.hard-to-find-special-alloys.grade');
    Route::get('/materials/aluminium-alloys', [MainController::class, 'aluminiumAlloys'])->name('materials.aluminium-Alloys');
    Route::get('/materials/engineering-steels', [MainController::class, 'engineeringSteels'])->name('materials.engineering-Steels');
    Route::get('/materials/engineering-steels/{slug}', [MainController::class, 'engineeringSteelsGrade'])->name('materials.engineering-Steel-grade');

    Route::get('/materials/austenitic-stainless-steel', [MainController::class, 'austeniticStainlessSteel'])->name('materials.austenitic-stainless-Steel');
    Route::get('/materials/austenitic-stainless-steel/{slug}', [MainController::class, 'austeniticStainlessSteelGrade'])->name('materials.austenitic-stainless-steel.grade');

    Route::get('/materials/copper-alloys', [MainController::class, 'copperAlloys'])->name('materials.copper-Alloys');
    Route::get('/materials/copper-alloys/{slug}', [MainController::class, 'copperAlloysGrade'])->name('materials.copper-alloys.grade');
    Route::get('/materials/zirconium', [MainController::class, 'zirconium'])->name('materials.zirconium');
    Route::get('/materials/zirconium/{slug}', [MainController::class, 'zirconiumGrade'])->name('materials.zirconium.grade');

    Route::get('/materials/haynes-superalloys', [MainController::class, 'haynesSuperalloys'])->name('materials.haynes-Superalloys');
    Route::get('/materials/haynes-superalloys/{slug}', [MainController::class, 'haynesSuperalloysGrade'])->name('materials.haynes-superalloys.grade');

    Route::get('/materials/duplex-and-super-duplex', [MainController::class, 'duplexAndSuperDuplex'])->name('materials.duplex-and-super-duplex');
    Route::get('/materials/duplex-and-super-duplex/{slug}', [MainController::class, 'duplexAndSuperDuplexGrade'])->name('materials.duplex-and-super-duplex.grade');

    Route::get('/materials/high-strength-stainless-steel', [MainController::class, 'highStrengthStainlessSteel'])->name('materials.high-strength-stainless-steel');
    Route::get('/materials/high-strength-stainless-steel/{slug}', [MainController::class, 'highStrengthStainlessSteelGrade'])->name('materials.high-strength-stainless-steel.grade');

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
});
