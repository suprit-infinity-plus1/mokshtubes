@extends('layouts.master')

@section('title', 'Nickel Superalloys – Extreme Strength & Corrosion') <!-- 53 chars -->
@section('meta_description', 'Explore nickel-based superalloys from Moksh Tubes built for extreme temperatures and harsh conditions with superior corrosion resistance and strength.')
@section('meta_keywords', 'Nickel Superalloys, Nickel 200, Nickel 201, A286, High-Temperature Alloys, Corrosion Resistant Alloys, Nickel-Based Alloys, Extreme Temperature Alloys, High Strength Alloys, Industrial Superalloys')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/nickel-based-superalloys/nickel-based-alloys-banner.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Nickel-Based Superalloys <br> High Strength & Corrosion Resistance</h1>
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
                    ['name' => 'Nickel Based superalloys A286_AIS660', 'slug' => 'nickel-based-superalloys-a286-ais660', 'image' => 'assets/images/nickel-based-superalloys/nickel-based-superalloys-A286_AIS660.webp'],
                    ['name' => 'Nickel Based superalloys 200', 'slug' => 'nickel-based-superalloys-200', 'image' => 'assets/images/nickel-based-superalloys/nickel-based-superalloys-200.webp'],
                    ['name' => 'Nickel Based superalloys 201', 'slug' => 'nickel-based-superalloys-201', 'image' => 'assets/images/nickel-based-superalloys/nickel-based-superalloys-201.webp'],
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
