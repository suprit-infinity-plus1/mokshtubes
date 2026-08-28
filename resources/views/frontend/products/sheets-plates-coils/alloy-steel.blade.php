@extends('layouts.master')

@section('title', 'Alloy Steel Sheets, Plates & Coils | Moksh Tubes LLP')
@section('meta_description', 'High quality Alloy Steel including SA 387 Gr 11, 12, 22, P5, P9, P91, and 16Mo3.')
@section('canonical', url()->current())

@section('content')
<section class="sec-padd-top sec-padd-bottom bg-white">
    <div class="container">
        <div class="section-title center mb-5">
            <h2 class="fw-bold" style="color: #174268;">Alloy Steel</h2>
            <p class="text-center">Browse our comprehensive range of Alloy Steel sheets, plates, and coils.</p>
        </div>

        <div class="row g-4">
            <!-- SA 387 Gr 11 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'alloy-steel', 'slug' => 'sa-387-gr-11']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="SA 387 Gr 11" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            SA 387 Gr 11
                        </h6>
                    </div>
                </a>
            </div>

            <!-- SA 387 Gr 12 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'alloy-steel', 'slug' => 'sa-387-gr-12']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="SA 387 Gr 12" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            SA 387 Gr 12
                        </h6>
                    </div>
                </a>
            </div>

            <!-- SA 387 Gr 22 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'alloy-steel', 'slug' => 'sa-387-gr-22']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="SA 387 Gr 22" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            SA 387 Gr 22
                        </h6>
                    </div>
                </a>
            </div>

            <!-- SA 387 Gr P5 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'alloy-steel', 'slug' => 'sa-387-gr-p5']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="SA 387 Gr P5" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            SA 387 Gr P5
                        </h6>
                    </div>
                </a>
            </div>

            <!-- SA 387 Gr P9 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'alloy-steel', 'slug' => 'sa-387-gr-p9']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="SA 387 Gr P9" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            SA 387 Gr P9
                        </h6>
                    </div>
                </a>
            </div>

            <!-- SA 387 Gr P91 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'alloy-steel', 'slug' => 'sa-387-gr-p91']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="SA 387 Gr P91" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            SA 387 Gr P91
                        </h6>
                    </div>
                </a>
            </div>

            <!-- 16Mo3 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'alloy-steel', 'slug' => '16mo3']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="16Mo3" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            16Mo3
                        </h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
