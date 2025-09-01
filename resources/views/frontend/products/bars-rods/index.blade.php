@extends('layouts.master')
@section('title', 'Bars & Rods - Round, Square, Hex, Flat | Moksh Tubes')
@section('meta_description',
    'Explore premium Bars & Rods from Moksh Tubes – Round, Square, Hex, Flat & Threaded in SS, Alloy & Duplex grades with global quality standards.')
@section('content')
    <!--Start breadcrumb area-->


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Bars & Rods</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Bars & Rods Types</h2>
            </div>

            <div class="row g-4">
                @php
                    $types = [
                        [
                            'name' => 'Square Bars',
                            'slug' => 'square-bars',
                            'image' => 'assets/images/peoduct/Bars & Rods/square-bars.webp',
                        ],
                        [
                            'name' => 'Threaded Rods',
                            'slug' => 'threaded-rods',
                            'image' => 'assets/images/peoduct/Bars & Rods/threaded-rods.webp',
                        ],
                        [
                            'name' => 'Round Bars',
                            'slug' => 'round-bars',
                            'image' => 'assets/images/peoduct/Bars & Rods/round-bars.webp',
                        ],
                        [
                            'name' => 'Hollow Bars',
                            'slug' => 'hollow-bars',
                            'image' => 'assets/images/peoduct/hollow-section-pipe.webp',
                        ],
                        [
                            'name' => 'Hexagon Bars',
                            'slug' => 'hexagon-bars',
                            'image' => 'assets/images/peoduct/u-bent-tubes.webp',
                        ],
                        [
                            'name' => 'Flat Bars',
                            'slug' => 'flat-bars',
                            'image' => 'assets/images/peoduct/boiler-heat-exchanger-tubes.webp',
                        ],
                       ];
                @endphp

                @foreach ($types as $type)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="{{ url('/products/bars-rods/' . $type['slug']) }}" class="text-decoration-none">
                            <div class="custom-product-card rounded overflow-hidden shadow h-100 position-relative">
                                {{-- <img src="https://placehold.co/600x350/db7227/fff?" class="img-fluid w-100"
                                    alt="{{ $type['name'] }}"> --}}
                                <img src="{{ asset($type['image'] ?? 'assets/images/default.jpg') }}"
                                    alt="{{ $type['name'] }}" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                                <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
                                    style="background: rgba(23, 66, 104, 0.65); transition: 0.3s;">
                                    <h5 class="text-white text-center fw-bold text-uppercase">{{ $type['name'] }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>




    <!--End breadcrumb area-->


@endsection
