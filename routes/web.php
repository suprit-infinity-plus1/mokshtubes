<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [MainController::class, 'home']);
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/contact-us', [MainController::class, 'contactUs'])->name('contact-us');
Route::get('/contact-us/gulalwadi', [MainController::class, 'contactUsGulalwadi'])->name('contact-us-gulalwadi');
Route::get('/contact-us/khetwadi', [MainController::class, 'contactUsKhetwadi'])->name('contact-us-khetwadi');
Route::get('/about-us', [MainController::class, 'aboutUs'])->name('about-us');
Route::get('/calculator', [MainController::class, 'calculator'])->name('calculator');
Route::get('/materials', [MainController::class, 'materials'])->name('materials');
Route::get('/materials/hastelloy', [MainController::class, 'hastelloy'])->name('materials.hastelloy');
Route::get('/materials/monel', [MainController::class, 'monel'])->name('materials.monel');
Route::get('/materials/incoloy', [MainController::class, 'incoloy'])->name('materials.incoloy');
Route::get('/materials/nickel-based-superalloys', [MainController::class, 'nickelBasedSuperalloys'])->name('materials.nickel-Based-Superalloys');
Route::get('/materials/inconel', [MainController::class, 'inconel'])->name('materials.inconel');
Route::get('/materials/titanium', [MainController::class, 'titanium'])->name('materials.titanium');
Route::get('/materials/aluminium-alloys', [MainController::class, 'aluminiumAlloys'])->name('materials.aluminium-Alloys');
Route::get('/materials/engineering-steels', [MainController::class, 'engineeringSteels'])->name('materials.engineering-Steels');

Route::get('/materials/{family}/{grade}', [MainController::class, 'showMaterialGrade'])->name('material.grade');
Route::get('/materials/{category}/{slug}', [MainController::class, 'showMaterial'])->name('materials.grade');
Route::get('/products', [MainController::class, 'products'])->name('products');
Route::get('/products/pipes-tubes', [MainController::class, 'pipesTubes'])->name('products.pipes-tubes');
Route::get('/products/pipes-tubes/welded-pipes-and-tubes', [MainController::class, 'weldedPipes'])->name('products.pipes-tubes.welded');


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
