@extends('layouts.master')
@section('title', 'Special & Rare Alloys: Nimonic, Tantalum, Stellite | MokshTubes')
@section('meta_description',
    'Explore rare special alloys including Nimonic, Tantalum, Stellite & Tungsten at MokshTubes, engineered for superior strength, durability, heat resistance, and long-lasting corrosion protection.')


    {{-- @section('meta_description',
    'Explore a niche range of hard-to-source alloys such as Nimonic, Tungsten, Carbide, Tantalum, and Nitinol for critical
    high-performance needs.') --}}
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hard To Find And Special Alloys</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Hard To Find & Special Alloys Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Hard To Find & Special Alloys family.
                </p>
            </div>

            @php
                $grades = [
                    [
                        'name' => 'Hard To Find Special Alloys Carbide',
                        'slug' => 'hard-to-find-special-alloys-carbide',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-carbide.webp',
                    ],
                    [
                        'name' => 'Hard To Find Special Alloys Nimonic',
                        'slug' => 'hard-to-find-special-alloys-nimonic',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-nimonic.webp',
                    ],
                    [
                        'name' => 'Hard To Find Special Alloys Nitinol',
                        'slug' => 'hard-to-find-special-alloys-nitinol',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-nitinol.webp',
                    ],
                    [
                        'name' => 'Hard To Find Special Alloys Stellite',
                        'slug' => 'hard-to-find-special-alloys-stellite',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-stellite.webp',
                    ],
                    [
                        'name' => 'Hard To Find Special Alloys Tantalum',
                        'slug' => 'hard-to-find-special-alloys-tantalum',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-tantalum.webp',
                    ],
                    [
                        'name' => 'Hard To Find Special Alloys Tungsten',
                        'slug' => 'hard-to-find-special-alloys-tungsten',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-tungsten.webp',
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href =
                            $grade['slug'] !== '#'
                                ? url('/materials/hard-to-find-special-alloys/' . $grade['slug'])
                                : '#';
                    @endphp
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ $href }}" class="text-decoration-none d-block h-100">
                            <div class="grade-card border rounded shadow-sm p-3 text-center h-100 transition"
                                style="border-color: #db7227; transition: 0.3s;">
                                {{-- <img src="https://placehold.co/300x180/db7227/fff?text={{ urlencode($grade['name']) }}"
                                    alt="{{ $grade['name'] }}" class="img-fluid rounded mb-3" style="border-radius: 8px;"> --}}
                                <img src="{{ asset($grade['image']) }}" alt="{{ $grade['name'] }}"
                                    class="img-fluid rounded mb-3" style="border-radius: 8px;">
                                <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                    style="background-color: #174268; color: #fff; display: inline-block;">
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
