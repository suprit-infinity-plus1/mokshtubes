@extends('layouts.master')

@section('title', 'Stainless Steel Sheets, Plates & Coils | Moksh Tubes LLP')
@section('meta_description', 'High quality Stainless Steel including SS 300 Series, SS 400 Series, Austenitic, Ferritic, and Martensitic grades.')
@section('canonical', url()->current())

@section('content')
<section class="sec-padd-top sec-padd-bottom bg-white">
    <div class="container">
        <div class="section-title center mb-5">
            <h2 class="fw-bold" style="color: #174268;">Stainless Steel</h2>
            <p class="text-center">Browse our comprehensive range of Stainless Steel sheets, plates, and coils.</p>
        </div>

        <div class="row g-4">
            <!-- SS 300 Series -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'stainless-steel', 'slug' => 'ss-300-series']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="SS 300 Series" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            SS 300 Series
                        </h6>
                    </div>
                </a>
            </div>

            <!-- SS 400 Series -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'stainless-steel', 'slug' => 'ss-400-series']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="SS 400 Series" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            SS 400 Series
                        </h6>
                    </div>
                </a>
            </div>

            <!-- Austenitic -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'stainless-steel', 'slug' => 'austenitic']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Austenitic" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Austenitic
                        </h6>
                    </div>
                </a>
            </div>

            <!-- Ferritic -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'stainless-steel', 'slug' => 'ferritic']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Ferritic" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Ferritic
                        </h6>
                    </div>
                </a>
            </div>

            <!-- Martensitic -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'stainless-steel', 'slug' => 'martensitic']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Martensitic" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Martensitic
                        </h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
