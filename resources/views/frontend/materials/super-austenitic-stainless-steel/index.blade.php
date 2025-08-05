@extends('layouts.master')
@section('title',
    'Super Austenitic Stainless Steel | 904L, SMO 254, Alloy 926 | Mokshtubes')
@section('meta_description',
    'Premium austenitic alloys like 904L and SMO 254 – built for chloride resistance, strength, and harsh chemical exposure.
    ')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Super Austenitic Stainless Steel</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Super Austenitic Stainless Steel Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Super Austenitic Stainless Steel family.
                </p>
            </div>

            @php
                $grades = [
                    ['name' => 'Super Austenitic Stainless Steel AL 6XN', 'slug' => 'super-austenitic-stainless-steel-AL-6XN', 'image' => 'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-AL-6XN.jpeg'],
                    ['name' => 'Super Austenitic Stainless Steel Alloy 926', 'slug' => 'super-austenitic-stainless-steel-Alloy-926', 'image' => 'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-AL-926.jpg'],
                    ['name' => 'Super Austenitic Stainless Steel 253 MA', 'slug' => 'super-austenitic-stainless-steel-253-MA', 'image' => 'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-253.jpeg'],
                    ['name' => 'Super Austenitic Stainless Steel 904L', 'slug' => 'super-austenitic-stainless-steel-904L', 'image' => 'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-904L.png'],
                    ['name' => 'Super Austenitic Stainless Steel SMO 254', 'slug' => 'super-austenitic-stainless-steel-SMO-254', 'image' => 'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-SMO-254.jpg'],
                    ['name' => 'Super Austenitic Stainless Steel SMO 654', 'slug' => 'super-austenitic-stainless-steel-SMO-654', 'image' => 'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-SMO-654.jpg'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href =
                            $grade['slug'] !== '#'
                                ? url('/materials/super-austenitic-stainless-steel/' . $grade['slug'])
                                : '#';
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
