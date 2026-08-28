@extends('layouts.master')

@section('title', 'Carbon Steel Sheets, Plates & Coils | Moksh Tubes LLP')
@section('meta_description', 'High quality Carbon Steel including BQ Plates - SA 516 Gr 60/70, SA 537 Class 1 & 2, and C45.')
@section('canonical', url()->current())

@section('content')
<section class="sec-padd-top sec-padd-bottom bg-white">
    <div class="container">
        <div class="section-title center mb-5">
            <h2 class="fw-bold" style="color: #174268;">Carbon Steel</h2>
            <p class="text-center">Browse our comprehensive range of Carbon Steel sheets, plates, and coils.</p>
        </div>

        <div class="row g-4">
            <!-- BQ Plates - SA 516 Gr 60/70 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'carbon-steel', 'slug' => 'bq-plates-sa-516-gr-60-70']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="BQ Plates - SA 516 Gr 60/70" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            BQ Plates - SA 516 Gr 60/70
                        </h6>
                    </div>
                </a>
            </div>

            <!-- SA 537 Class 1 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'carbon-steel', 'slug' => 'sa-537-class-1']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="SA 537 Class 1" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            SA 537 Class 1
                        </h6>
                    </div>
                </a>
            </div>

            <!-- SA 537 Class 2 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'carbon-steel', 'slug' => 'sa-537-class-2']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="SA 537 Class 2" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            SA 537 Class 2
                        </h6>
                    </div>
                </a>
            </div>

            <!-- C45 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'carbon-steel', 'slug' => 'c45']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="C45" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            C45
                        </h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
