@extends('layouts.master')
@section('title', 'Incoloy Alloys | Corrosion & Heat Resistant Grades | Mokshtubes')
@section('meta_description',
    'Find premium Incoloy grades such as 800, 825, and 925 – engineered for heat, stress, and acidic environments in
    petrochemical and marine sectors.
    ')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Incoloy</h1>
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
                <p class="text-muted fs-5 pb-3">Explore all available grades in the incoloy family.</p>
            </div>

            @php
                $grades = [
                    ['name' => '825', 'slug' => 'incoloy-825', 'image' => 'assets/images/incoloy/incoloy-825.jpeg'],
                    ['name' => '800', 'slug' => 'incoloy-800', 'image' => 'assets/images/incoloy/incoloy-800.jpg'],
                    ['name' => '925', 'slug' => 'incoloy-925', 'image' => 'assets/images/incoloy/incoloy-925.jpg'],
                    [
                        'name' => '800H_800HT',
                        'slug' => 'incoloy-800H-800HT',
                        'image' => 'assets/images/incoloy/incoloy-800H_800HT.jpeg',
                    ],
                    ['name' => '020', 'slug' => 'incoloy-020', 'image' => 'assets/images/incoloy/incoloy-020.jpeg'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url('/materials/incoloy/' . $grade['slug']) : '#';
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
