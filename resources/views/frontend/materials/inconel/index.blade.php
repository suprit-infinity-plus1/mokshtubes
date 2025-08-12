@extends('layouts.master')
@section('title', 'Inconel Alloys | High-Performance Nickel Alloys | Mokshtubes')
@section('meta_description', 'Discover top Inconel grades like 600, 625, 718, and X-750. Known for high-temperature
    strength, oxidation resistance, and performance in extreme environments.')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>inconel</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Inconel Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the inconel family.</p>
            </div>

            @php
                $grades = [
                    ['name' => 'Inconel 600', 'slug' => 'inconel-600', 'image' => 'assets/images/inconel/inconel-600.webp'],
                    ['name' => 'Inconel 617', 'slug' => 'inconel-617', 'image' => 'assets/images/inconel/Inconel-617.webp'],
                    ['name' => 'Inconel 625', 'slug' => 'inconel-625', 'image' => 'assets/images/inconel/Inconel-625.webp'],
                    ['name' => 'Inconel 690', 'slug' => 'inconel-690', 'image' => 'assets/images/inconel/Inconel-690.webp'],
                    ['name' => 'Inconel 718', 'slug' => 'inconel-718', 'image' => 'assets/images/inconel/Inconel-718.webp'],
                    ['name' => 'Inconel x750', 'slug' => 'inconel-x750', 'image' => 'assets/images/inconel/Inconel-X 750.webp'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url('/materials/inconel/' . $grade['slug']) : '#';
                    @endphp
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ $href }}" class="text-decoration-none d-block h-100">
                            <div class="grade-card border rounded shadow-sm p-3 text-center h-100 transition"
                                style="border-color: #db7227; transition: 0.3s;">
                                {{-- <img src="https://placehold.co/300x180/db7227/fff?text={{ urlencode($grade['name']) }}"
                                    alt="{{ $grade['name'] }}" class="img-fluid rounded mb-3" style="border-radius: 8px;"> --}}
                                    <img src="{{ asset($grade['image']) }}"
                                    alt="{{ $grade['name'] }}" class="img-fluid rounded mb-3" style="border-radius: 8px;">
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
