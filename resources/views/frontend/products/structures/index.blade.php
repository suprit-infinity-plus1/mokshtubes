@extends('layouts.master')

@section('title', 'Structures | Moksh Tubes LLP')
@section('meta_description', 'Moksh Tubes LLP offers a wide range of structures including Indian, American, and European profiles.')
@section('canonical', url()->current())

@section('content')
<section class="sec-padd-top sec-padd-bottom bg-white">
    <div class="container">
        <div class="section-title center mb-5">
            <h2 class="fw-bold" style="color: #174268;">Structures</h2>
            <p class="text-center">Explore our comprehensive range of structural profiles.</p>
        </div>

        <div class="row g-4">
            <!-- Indian Profiles -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.structures.indian-profiles') }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Indian Profiles" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Indian Profiles
                        </h6>
                    </div>
                </a>
            </div>

            <!-- American Profiles -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.structures.american-profiles') }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="American Profiles (ASTM / AISC)" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            American Profiles (ASTM / AISC)
                        </h6>
                    </div>
                </a>
            </div>

            <!-- European Profiles -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.structures.european-profiles') }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="European Profiles (EN)" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            European Profiles (EN)
                        </h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
