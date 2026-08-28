@extends('layouts.master')

@section('title', 'American Profiles (ASTM / AISC) | Structures | Moksh Tubes LLP')
@section('meta_description', 'American structural profiles (ASTM / AISC) including angles, channels, beams, columns, and hollow sections.')
@section('canonical', url()->current())

@section('content')
<section class="sec-padd-top sec-padd-bottom bg-white">
    <div class="container">
        <div class="section-title center mb-5">
            <h2 class="fw-bold" style="color: #174268;">American Profiles (ASTM / AISC)</h2>
            <p class="text-center">Browse our comprehensive range of American structural profiles.</p>
        </div>

        <div class="row g-4">
            <!-- Angles -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.structures.profile.item', ['profile' => 'american-profiles', 'slug' => 'angles']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Angles" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Angles
                        </h6>
                    </div>
                </a>
            </div>

            <!-- Channels -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.structures.profile.item', ['profile' => 'american-profiles', 'slug' => 'channels']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Channels" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Channels
                        </h6>
                    </div>
                </a>
            </div>

            <!-- Beams -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.structures.profile.item', ['profile' => 'american-profiles', 'slug' => 'beams']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Beams" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Beams
                        </h6>
                    </div>
                </a>
            </div>

            <!-- Columns -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.structures.profile.item', ['profile' => 'american-profiles', 'slug' => 'columns']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Columns" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Columns
                        </h6>
                    </div>
                </a>
            </div>

            <!-- Hollow Sections -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.structures.profile.item', ['profile' => 'american-profiles', 'slug' => 'hollow-sections']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Hollow Sections" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Hollow Sections
                        </h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
