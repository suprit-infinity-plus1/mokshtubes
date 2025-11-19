@extends('layouts.master')

@section('title',
    'Metal Materials | High-Quality Alloys & Grades | Mokshtubes
    ')

@section('meta_description',
    'Explore premium metal materials and alloys with superior strength, corrosion resistance, and versatility for industrial
    applications.

    ')

@section('meta')
    <!-- Open Graph -->
    <meta property="og:title" content="Metal Materials | High-Quality Alloys & Grades | Mokshtubes" />
    <meta property="og:description"
        content="Explore premium metal materials and alloys with superior strength, corrosion resistance, and versatility for industrial applications." />
    <meta property="og:image" content="{{ asset('assets/images/material/materials-banner.jpg') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Metal Materials | High-Quality Alloys & Grades | Mokshtubes">
    <meta name="twitter:description"
        content="Discover top-grade metal materials engineered for durability, strength, and industrial performance.">
    <meta name="twitter:image" content="{{ asset('assets/images/material/materials-banner.jpg') }}">
@endsection

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/material/materials-banner.jpg);">
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
                @php
                    $materials = [
                        [
                            'name' => 'Hastelloy',
                            'slug' => 'hastelloy',
                            'image' => 'assets/images/material/hastelloy.webp',
                        ],
                        [
                            'name' => 'Monel',
                            'slug' => 'monel',
                            'image' => 'assets/images/material/monel.webp',
                        ],
                        [
                            'name' => 'Inconel',
                            'slug' => 'inconel',
                            'image' => 'assets/images/inconel/inconel-600.webp',
                        ],
                        [
                            'name' => 'Incoloy',
                            'slug' => 'incoloy',
                            'image' => 'assets/images/incoloy/incoloy-800.webp',
                        ],
                        [
                            'name' => 'Nickel Based Superalloys',
                            'slug' => 'nickel-based-superalloys',
                            'image' => 'assets/images/material/Nickel-Based-Superalloys.webp',
                        ],
                        [
                            'name' => 'Titanium',
                            'slug' => 'titanium',
                            'image' => 'assets/images/titanium/titanium-5.webp',
                        ],
                        [
                            'name' => 'Duplex and Super Duplex',
                            'slug' => 'duplex-and-super-duplex',
                            'image' => 'assets/images/material/Duplex-and-Super-Duplex.webp',
                        ],
                        [
                            'name' => 'Austenitic Stainless Steel',
                            'slug' => 'austenitic-stainless-steel',
                            'image' => 'assets/images/material/Austenitic-Stainless-Steel.webp',
                        ],
                        [
                            'name' => 'High Strength Stainless Steel',
                            'slug' => 'high-strength-stainless-steel',
                            'image' => 'assets/images/material/stainless.webp',
                        ],
                        [
                            'name' => 'Super Austenitic Stainless Steel',
                            'slug' => 'super-austenitic-stainless-steel',
                            'image' => 'assets/images/material/Super-Austenitic-Stainless-Steel.webp',
                        ],
                        [
                            'name' => 'Zirconium',
                            'slug' => 'zirconium',
                            'image' => 'assets/images/zirconium/zirconium704.webp',
                        ],
                        [
                            'name' => 'Engineering Steels',
                            'slug' => 'engineering-steels',
                            'image' => 'assets/images/material/Engineering-Steels.webp',
                        ],
                        [
                            'name' => 'Aluminium Alloys',
                            'slug' => 'aluminium-alloys',
                            'image' => 'assets/images/material/Aluminium-Alloys-Aluminium-Alloys.webp',
                        ],
                        [
                            'name' => 'Copper Alloys',
                            'slug' => 'copper-alloys',
                            'image' => 'assets/images/material/Copper-Alloys-Copper-Alloys.webp',
                        ],
                        [
                            'name' => 'Hard To Find Special Alloys',
                            'slug' => 'hard-to-find-special-alloys',
                            'image' => 'assets/images/material/Hard-To-Find-Special-Alloys.webp',
                        ],
                        [
                            'name' => 'Haynes Superalloys',
                            'slug' => 'haynes-superalloys',
                            'image' => 'assets/images/material/Haynes-Superalloys.webp',
                        ],
                    ];
                @endphp

                {{-- @foreach ($materials as $material)
                    @php
                        $slug = Str::slug($material);
                        $link = url('/materials/' . $slug);
                    @endphp

                    <div class="col-12 col-md-4 col-lg-3">
                        <a href="{{ $link }}" class="text-decoration-none d-block h-100">
                            <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                                style="border-color: #db7227; transition: 0.3s;">
                                <img src="https://placehold.co/300x180/db7227/fff?text={{ urlencode($material) }}"
                                    alt="{{ $material }}" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                                <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                    style="background-color: #174268; color: #fff; display: inline-block;">
                                    {{ $material }}
                                </h6>
                            </div>
                        </a>
                    </div>
                @endforeach --}}
                @foreach ($materials as $material)
                    <div class="col-12 col-md-4 col-lg-3">
                        <a href="{{ url('/materials/' . $material['slug']) }}" class="text-decoration-none d-block h-100">
                            <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                                style="border-color: #db7227; transition: 0.3s;">
                                <img src="{{ asset($material['image'] ?? 'assets/images/default.jpg') }}"
                                    alt="{{ $material['name'] }}" class="img-fluid rounded mb-3"
                                    style="border-radius: 8px;">
                                <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                    style="background-color: #174268; color: #fff; display: inline-block;">
                                    {{ $material['name'] }}
                                </h6>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="col-12 col-sm-6 col-lg-4">

                        <a href="{{ url('/products/' . $type['slug']) }}" class="text-decoration-none">
                            <div class="custom-product-card rounded overflow-hidden shadow h-100 position-relative">

                                <img src="{{ asset($type['image'] ?? 'assets/images/default.jpg') }}"
                                    alt="{{ $type['name'] }}" class="img-fluid rounded" style="border-radius: 8px;">
                                <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
                                    style="background: rgba(23, 66, 104, 0.65); transition: 0.3s;">
                                    <h5 class="text-white text-center fw-bold text-uppercase">{{ $type['name'] }}</h5>
                                </div>
                            </div>
                        </a>
                    </div> --}}
                @endforeach
            </div>
        </div>
    </section>

@endsection
