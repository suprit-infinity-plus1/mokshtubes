@extends('layouts.master')

@section('title', 'Engineering Steels: EN8, EN19, 1045, 4140 | MokshTubes')
@section('meta_description', 'Explore durable engineering steels EN8, EN19, 1045, and 4140 from MokshTubes, offering
    high strength, toughness, and reliability for industrial and mechanical applications.')
@section('meta_keywords', 'Engineering steels, EN8 steel, EN19 steel, 1045 steel, 4140 steel, high strength steel, tough
    steel, industrial alloy steel, mechanical steel')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Strength Stainless Steel</h1>
                </div>
            </div>
        </div>
    </section>


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">High Strength Stainless Steel Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the High Strength Stainless Steel family.
                </p>
            </div>

            @php
                $grades = [
                    [
                        'name' => '14 4PH Stainless Steel',
                        'slug' => '14-4PH-stainless-steel',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/14-4PH -Stainless-Steel.jpeg',
                    ],
                    [
                        'name' => '15 5PH Stainless Steel',
                        'slug' => '15-5PH-stainless-steel',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/15-5-PH-STAINLESS-STEEL.jpg',
                    ],
                    [
                        'name' => '17 4PH Stainless Steel',
                        'slug' => '17-4PH-stainless-steel',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/17-4-PH-STAINLESS-STEEL.jpg',
                    ],
                    [
                        'name' => '420HC Stainless Steel',
                        'slug' => '420HC-stainless-steel',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/420HC-STAINLESS-STEEL.jpeg',
                    ],
                    [
                        'name' => '430F Stainless Steel',
                        'slug' => '430F-stainless-steel',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/430F-Stainless-Steel.webp',
                    ],
                    [
                        'name' => '440A Stainless Steel',
                        'slug' => '440A-stainless-steel',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/440A-Stainless-Steel.webp',
                    ],
                    [
                        'name' => '440B Stainless Steel',
                        'slug' => '440B-stainless-steel',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/440B-Stainless-Steel.webp',
                    ],
                    [
                        'name' => '440C Stainless Steel',
                        'slug' => '440C-stainless-steel',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/440C-Stainless-Steel.webp',
                    ],
                    [
                        'name' => 'Stainless Steel 403',
                        'slug' => 'stainless-steel-403',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/Stainless-Steel-403.webp',
                    ],
                    [
                        'name' => 'Stainless Steel 405',
                        'slug' => 'stainless-steel-405',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/Stainless-Steel-405.webp',
                    ],
                    [
                        'name' => 'Stainless Steel 410',
                        'slug' => 'stainless-steel-410',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/Stainless-Steel-410.webp',
                    ],
                    [
                        'name' => 'Stainless Steel 416',
                        'slug' => 'stainless-steel-416',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/416-Stainless-Steel.jpeg',
                    ],
                    [
                        'name' => 'Stainless Steel 420',
                        'slug' => 'stainless-steel-420',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/Stainless-Steel-420.webp',
                    ],
                    [
                        'name' => 'Stainless Steel 422',
                        'slug' => 'stainless-steel-422',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/Stainless-Steel-422.webp',
                    ],
                    [
                        'name' => 'Stainless Steel 431',
                        'slug' => 'stainless-steel-431',
                        'image' => 'assets/images/High Strength Stainless Steel WEBP/Stainless-Steel-431.webp',
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href =
                            $grade['slug'] !== '#'
                                ? url('/materials/high-strength-stainless-steel/' . $grade['slug'])
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
