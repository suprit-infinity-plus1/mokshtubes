@extends('layouts.master')
@section('title', 'Super Austenitic Stainless Steel | Moksh Tubes')
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
                    ['name' => 'AL 6XN', 'slug' => 'super-austenitic-stainless-steel-AL-6XN'],
                    ['name' => 'Alloy 926', 'slug' => 'super-austenitic-stainless-steel-Alloy-926'],
                    ['name' => '253 MA', 'slug' => 'super-austenitic-stainless-steel-253-MA'],
                    ['name' => '904L', 'slug' => 'super-austenitic-stainless-steel-904L'],
                    ['name' => 'SMO 254', 'slug' => 'super-austenitic-stainless-steel-SMO-254'],
                    ['name' => 'SMO 654', 'slug' => 'super-austenitic-stainless-steel-SMO-654'],
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
