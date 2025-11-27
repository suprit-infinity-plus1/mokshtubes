@extends('layouts.master')

@section('title', 'Aluminium Alloys: 6082, 6061, 5083, HE30 | MokshTubes')
@section('meta_description', 'Lightweight, corrosion-resistant aluminium alloys at MokshTubes — 6082, 6061, 5083 & HE30, ideal for aerospace, marine, and structural uses')
@section('meta_keywords', 'Aluminium Alloys, 6082, 6061, 5083, HE30, 7075, Aluminium 6082-T6, Aluminium 6061-T6,
Lightweight Alloys, Corrosion Resistant Aluminium, Aerospace Aluminium Alloys, Marine Aluminium Alloys, Structural
Aluminium Alloys, Industrial Aluminium Grades')
@section('og_image', asset('assets/images/aluminium-alloys/aluminium-banner.jpeg'))
@section('og_type', 'article')

@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(/assets/images/aluminium-alloys/aluminium-banner.webp);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1>Aluminium Alloys – High Strength & Corrosion Resistance</h1>
            </div>
        </div>
    </div>
</section>

<!--End mainmenu area-->

<!--Start breadcrumb area-->
<section class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-5">
            <h2 class="fw-bold" style="color: #174268;">Aluminium Alloys</h2>
            <p class="text-muted fs-5 pb-3">Explore all available grades in the Aluminium Alloys family.</p>
        </div>

        @php
        $grades = [
        [
        'name' => 'aluminium alloys 6061 t6',
        'slug' => 'aluminium-alloys-6061-t6',
        'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6061-t6.webp',
        ],

        [
        'name' => 'aluminium alloys 1100',
        'slug' => 'aluminium-alloys-1100',
        'image' => 'assets/images/aluminium-alloys/aluminium-alloys-1100.webp',
        ],
        [
        'name' => 'aluminium alloys 1200',
        'slug' => 'aluminium-alloys-1200',
        'image' => 'assets/images/aluminium-alloys/aluminium-alloys-1200.webp',
        ],
        [
        'name' => 'aluminium alloys 2014 t6',
        'slug' => 'aluminium-alloys-2014-t6',
        'image' => 'assets/images/aluminium-alloys/aluminium-alloys-2014-t6.webp',
        ],
        [
        'name' => 'aluminium alloys 5083',
        'slug' => 'aluminium-alloys-5083',
        'image' => 'assets/images/aluminium-alloys/aluminium-alloys-5083.webp',
        ],
        [
        'name' => 'aluminium alloys 6012',
        'slug' => 'aluminium-alloys-6012',
        'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
        ],
        [
        'name' => 'aluminium alloys 6063',
        'slug' => 'aluminium-alloys-6063',
        'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
        ],
        [
        'name' => 'aluminium alloys 6082 t6',
        'slug' => 'aluminium-alloys-6082-t6',
        'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6082-t6.webp',
        ],
        [
        'name' => 'aluminium alloys 7075',
        'slug' => 'aluminium-alloys7075',
        'image' => 'assets/images/aluminium-alloys/aluminium-alloys7075.webp',
        ],
        [
        'name' => 'aluminium alloys he30',
        'slug' => 'aluminium-alloys-he30',
        'image' => 'assets/images/aluminium-alloys/aluminium-alloys-he30.webp',
        ],
        ];
        @endphp

        <div class="row g-4">
            @foreach ($grades as $grade)
            @php
            $href = $grade['slug'] !== '#' ? url('/materials/aluminium-alloys/' . $grade['slug']) : '#';
            @endphp
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="{{ $href }}" class="text-decoration-none d-block h-100">
                    <div class="grade-card border rounded shadow-sm p-3 text-center h-100 transition" style="border-color: #db7227; transition: 0.3s;">
                        {{-- <img src="https://placehold.co/300x180/db7227/fff?text={{ urlencode($grade['name']) }}"
                        alt="{{ $grade['name'] }}" class="img-fluid rounded mb-3" style="border-radius: 8px;"> --}}
                        <img src="{{ asset($grade['image']) }}" alt="{{ $grade['name'] }}" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded" style="background-color: #174268; color: #fff; display: inline-block;">
                            {{ $grade['name'] }}
                        </h6>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>




<!--End breadcrumb area-->


@endsection
