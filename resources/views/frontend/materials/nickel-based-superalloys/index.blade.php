@extends('layouts.master')
@section('title', 'Nickel-Based Superalloys | High-Performance Alloys | Mokshtubes')
@section('meta_description',
    'Discover Nickel 200, 201, A286 and other superalloys known for strength, corrosion resistance, and extreme temperature
    performance.')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Nickel Based Superalloys</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Nickel Based Superalloys Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Nickel Based Superalloys family.</p>
            </div>

            @php
                $grades = [
                    ['name' => 'A286_AIS660', 'slug' => 'nickel-based-superalloys-a286-ais660'],
                    ['name' => '200', 'slug' => 'nickel-based-superalloys-200'],
                    ['name' => '201', 'slug' => 'nickel-based-superalloys-201'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href =
                            $grade['slug'] !== '#' ? url('/materials/nickel-based-superalloys/' . $grade['slug']) : '#';
                    @endphp
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ $href }}" class="text-decoration-none d-block h-100">
                            <div class="grade-card border rounded shadow-sm p-3 text-center h-100 transition"
                                style="border-color: #db7227; transition: 0.3s;">
                                <img src="https://placehold.co/300x180/db7227/fff?text={{ urlencode($grade['name']) }}"
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
