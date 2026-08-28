@extends('layouts.master')

@section('title', 'Mild Steel Sheets, Plates & Coils | Moksh Tubes LLP')
@section('meta_description', 'High quality Mild Steel including MS IS 2062 E250, E350 (A/BR/C), A36, and S275JR.')
@section('canonical', url()->current())

@section('content')
<section class="sec-padd-top sec-padd-bottom bg-white">
    <div class="container">
        <div class="section-title center mb-5">
            <h2 class="fw-bold" style="color: #174268;">Mild Steel</h2>
            <p class="text-center">Browse our comprehensive range of Mild Steel sheets, plates, and coils.</p>
        </div>

        <div class="row g-4">
            <!-- MS IS 2062 E250 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'mild-steel', 'slug' => 'ms-is-2062-e250']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="MS IS 2062 E250" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            MS IS 2062 E250
                        </h6>
                    </div>
                </a>
            </div>

            <!-- MS IS 2062 E350 (A/BR/C) -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'mild-steel', 'slug' => 'ms-is-2062-e350']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="MS IS 2062 E350 (A/BR/C)" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            MS IS 2062 E350 (A/BR/C)
                        </h6>
                    </div>
                </a>
            </div>

            <!-- A36 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'mild-steel', 'slug' => 'a36']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="A36" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            A36
                        </h6>
                    </div>
                </a>
            </div>

            <!-- S275JR -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'mild-steel', 'slug' => 's275jr']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="S275JR" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            S275JR
                        </h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
