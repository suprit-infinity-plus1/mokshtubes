@extends('layouts.master')

@section('title', 'Abrasion Resistant Steel Sheets, Plates & Coils | Moksh Tubes LLP')
@section('meta_description', 'High quality Abrasion Resistant Steel including Rockstar 400/500, Rockhard 400/500, and NM 400/500.')
@section('canonical', url()->current())

@section('content')
<section class="sec-padd-top sec-padd-bottom bg-white">
    <div class="container">
        <div class="section-title center mb-5">
            <h2 class="fw-bold" style="color: #174268;">Abrasion Resistant Steel</h2>
            <p class="text-center">Browse our comprehensive range of Abrasion Resistant Steel sheets, plates, and coils.</p>
        </div>

        <div class="row g-4">
            <!-- Rockstar 400/500 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'abrasion-resistant-steel', 'slug' => 'rockstar-400-500']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Rockstar 400/500" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Rockstar 400/500
                        </h6>
                    </div>
                </a>
            </div>

            <!-- Rockhard 400/500 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'abrasion-resistant-steel', 'slug' => 'rockhard-400-500']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Rockhard 400/500" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Rockhard 400/500
                        </h6>
                    </div>
                </a>
            </div>

            <!-- NM 400/500 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'abrasion-resistant-steel', 'slug' => 'nm-400-500']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="NM 400/500" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            NM 400/500
                        </h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
