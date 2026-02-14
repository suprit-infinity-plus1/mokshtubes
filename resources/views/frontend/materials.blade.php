@extends('layouts.master')

@section('title',
    'Metal Materials | High-Quality Alloys & Grades | Mokshtubes
    ')

@section('meta_description',
    'Explore premium metal materials and alloys with superior strength, corrosion resistance, and versatility for industrial
    applications.

    ')

    <meta property="og:image" content="{{ asset('assets/images/material/materials-banner.webp') }}" />
    <meta property="og:type" content="website" />


@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/material/materials-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Materials</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Explore Our Materials</h2>
            </div>

            <div class="row g-4">
                {{-- @php
            $materials = [
            [
            'name' => 'Hastelloy',
            'slug' => 'hastelloy',
            'image' => 'assets/images/product/main-product/Hastelloy.webp',
            ],
            [
            'name' => 'Monel',
            'slug' => 'monel',
            'image' => 'assets/images/product/main-product/Monel.webp',
            ],
            [
            'name' => 'Inconel',
            'slug' => 'inconel',
            'image' => 'assets/images/product/main-product/Inconel.webp',
            ],
            [
            'name' => 'Incoloy',
            'slug' => 'incoloy',
            'image' => 'assets/images/product/main-product/Incoloy.webp',
            ],
            [
            'name' => 'Nickel Based Superalloys',
            'slug' => 'nickel-based-superalloys',
            'image' => 'assets/images/product/main-product/Nickel-Based-Superalloys.webp',
            ],
            [
            'name' => 'Titanium',
            'slug' => 'titanium',
            'image' => 'assets/images/product/main-product/Titanium.webp',
            ],
            [
            'name' => 'Duplex and Super Duplex',
            'slug' => 'duplex-and-super-duplex',
            'image' => 'assets/images/product/main-product/Duplex-and-Super-Duplex.webp',
            ],
            [
            'name' => 'Austenitic Stainless Steel',
            'slug' => 'austenitic-stainless-steel',
            'image' => 'assets/images/product/main-product/Austenitic-Stainless-Steel.webp',
            ],
            [
            'name' => 'High Strength Stainless Steel',
            'slug' => 'high-strength-stainless-steel',
            'image' => 'assets/images/product/main-product/High-Strength-Stainless-Steel.webp',
            ],
            [
            'name' => 'Super Austenitic Stainless Steel',
            'slug' => 'super-austenitic-stainless-steel',
            'image' => 'assets/images/product/main-product/Super-Austenitic-Stainless-Steel.webp',
            ],
            [
            'name' => 'Zirconium',
            'slug' => 'zirconium',
            'image' => 'assets/images/product/main-product/Zirconium.webp',
            ],
            [
            'name' => 'Engineering Steels',
            'slug' => 'engineering-steels',
            'image' => 'assets/images/product/main-product/Engineering-Steels.webp',
            ],
            [
            'name' => 'Aluminium Alloys',
            'slug' => 'aluminium-alloys',
            'image' => 'assets/images/product/main-product/Aluminium-Alloys.webp',
            ],
            [
            'name' => 'Copper Alloys',
            'slug' => 'copper-alloys',
            'image' => 'assets/images/product/main-product/Copper-Alloys.webp',
            ],
            [
            'name' => 'Hard To Find Special Alloys',
            'slug' => 'hard-to-find-special-alloys',
            'image' => 'assets/images/product/main-product/Hard-To-Find-Special-Alloys.webp',
            ],
            [
            'name' => 'Haynes Superalloys',
            'slug' => 'haynes-superalloys',
            'image' => 'assets/images/product/main-product/Haynes-Superalloys.webp',
            ],
            ];
            @endphp --}}

                {{-- @foreach ($materials as $material)
                    @php
                        $slug = Str::slug($material);
                        $link = url('/materials/' . $slug);
                    @endphp

                    <div class="col-12 col-md-4 col-lg-3">
                        <a href="{{ $link }}" class="text-decoration-none d-block h-100">
            <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition" style="border-color: #db7227; transition: 0.3s;">
                <img src="https://placehold.co/300x180/db7227/fff?text={{ urlencode($material) }}" alt="{{ $material }}" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded" style="background-color: #174268; color: #fff; display: inline-block;">
                    {{ $material }}
                </h6>
            </div>
            </a>
        </div>
        @endforeach --}}
                {{-- @foreach ($materials as $material)
        <div class="col-12 col-md-4 col-lg-3">
            <a href="{{ url('/materials/' . $material['slug']) }}" class="text-decoration-none d-block h-100">
                <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition" style="border-color: #db7227; transition: 0.3s;">
                    <img src="{{ asset($material['image'] ?? 'assets/images/default.webp') }}" alt="{{ $material['name'] }}" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                    <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded" style="background-color: #174268; color: #fff; display: inline-block;">
                        {{ $material['name'] }}
                    </h6>
                </div>
            </a>
        </div>
        @endforeach --}}

                <!-- Hastelloy -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.hastelloy') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/hastelloy.webp') }}" alt="Hastelloy"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Hastelloy
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Monel -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.monel') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/monel.webp') }}" alt="Monel"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Monel
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Inconel -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.inconel') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/inconel/inconel-600.webp') }}" alt="Inconel"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Inconel
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Incoloy -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.incoloy') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/incoloy/incoloy-800.webp') }}" alt="Incoloy"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Incoloy
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Nickel Based Superalloys -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.nickel-Based-Superalloys') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/Nickel-Based-Superalloys.webp') }}"
                                alt="Nickel Based Superalloys" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Nickel Based Superalloys
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Titanium -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.titanium') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/titanium/titanium-5.webp') }}" alt="Titanium"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Titanium
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Duplex and Super Duplex -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.duplex-and-super-duplex') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/Duplex-and-Super-Duplex.webp') }}"
                                alt="Duplex and Super Duplex" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Duplex and Super Duplex
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Austenitic Stainless Steel -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.austenitic-stainless-Steel') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/Austenitic-Stainless-Steel.webp') }}"
                                alt="Austenitic Stainless Steel" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Austenitic Stainless Steel
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- High Strength Stainless Steel -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.high-strength-stainless-steel') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/stainless.webp') }}"
                                alt="High Strength Stainless Steel" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                High Strength Stainless Steel
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Super Austenitic Stainless Steel -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.super-Austenitic-Stainless-Steel') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/Super-Austenitic-Stainless-Steel.webp') }}"
                                alt="Super Austenitic Stainless Steel" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Super Austenitic Stainless Steel
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Zirconium -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.zirconium') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/zirconium/zirconium704.webp') }}" alt="Zirconium"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Zirconium
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Engineering Steels -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.engineering-Steels') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/Engineering-Steels.webp') }}"
                                alt="Engineering Steels" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Engineering Steels
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Aluminium Alloys -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.aluminium-Alloys') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/Aluminium-Alloys-Aluminium-Alloys.webp') }}"
                                alt="Aluminium Alloys" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Aluminium Alloys
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Copper Alloys -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.copper-Alloys') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/Copper-Alloys-Copper-Alloys.webp') }}"
                                alt="Copper Alloys" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Copper Alloys
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Hard To Find Special Alloys -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.hard-To-Find-Special-Alloys') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/Hard-To-Find-Special-Alloys.webp') }}"
                                alt="Hard To Find Special Alloys" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Hard To Find Special Alloys
                            </h6>
                        </div>
                    </a>
                </div>

                <!-- Haynes Superalloys -->
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('materials.haynes-Superalloys') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/material/Haynes-Superalloys.webp') }}"
                                alt="Haynes Superalloys" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Haynes Superalloys
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
