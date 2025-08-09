@extends('layouts.master')

@section('title',
    'Metal Materials | High-Quality Alloys & Grades | Mokshtubes
    ')

@section('meta_description',
    'Discover a broad selection of high-quality metal materials and alloys, offering exceptional strength, corrosion
    resistance, and versatility for every industry.

    ')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
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
                        'Hastelloy',
                        'Monel',
                        'Inconel',
                        'Incoloy',
                        'Nickel Based Superalloys',
                        'Titanium',
                        // 'Duplex & Super Duplex',
                        'Austenitic Stainless Steel',
                        // 'High Strength Stainless Steel',
                        'Super Austenitic Stainless Steel',
                        'Zirconium',
                        'Engineering Steels',
                        'Aluminium Alloys',
                        'Copper Alloys',
                        'Hard To Find And Special Alloys',
                        'Haynes Superalloys',
                    ];
                @endphp

                @foreach ($materials as $material)
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
                @endforeach
            </div>
        </div>
    </section>

@endsection
