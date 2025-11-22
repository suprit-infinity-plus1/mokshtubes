@extends('layouts.master')
@section('title', 'Bars & Rods – Round, Square, Hex & Flat') <!-- 52 characters -->
@section('meta_description', 'Moksh Tubes offers premium Bars & Rods – Round, Square, Hex, Flat & Threaded in SS, Alloy
    & Duplex grades with worldwide delivery.') <!-- 153 characters -->
@section('meta_keywords', 'Bars & Rods, Round Bars, Square Bars, Hex Bars, Flat Bars, Threaded Rods, Stainless Steel
    Rods, Alloy Bars, Duplex Bars')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/Bars-&-Rods/square-bars.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium Round, Square, Hex & Flat Bars</h1> <!-- 52 characters -->
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
                            'image' => 'assets/images/peoduct/Bars-&-Rods/square-bars.webp',
                        ],
                        [
                            'name' => 'Threaded Rods',
                            'slug' => 'threaded-rods',
                            'image' => 'assets/images/peoduct/Bars-&-Rods/threaded-rods.webp',
                        ],
                        [
                            'name' => 'Round Bars',
                            'slug' => 'round-bars',
                            'image' => 'assets/images/peoduct/Bars-&-Rods/round-bars.webp',
                        ],
                        [
                            'name' => 'Hollow Bars',
                            'slug' => 'hollow-bars',
                            'image' => 'assets/images/peoduct/Hollow-Bars.jpeg',
                        ],
                        [
                            'name' => 'Hexagon Bars',
                            'slug' => 'hexagon-bars',
                            'image' => 'assets/images/peoduct/Hexagon-Bars.jpg',
                        ],
                        [
                            'name' => 'Flat Bars',
                            'slug' => 'flat-bars',
                            'image' => 'assets/images/peoduct/Flat-Bars.jpg',
                        ],
                    ];
                @endphp

                @foreach ($types as $type)
                    <div class="col-12 col-sm-6 col-lg-4">
    <a href="{{ url('/products/bars-rods/' . $type['slug']) }}" class="text-decoration-none d-block h-100">
        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
             style="border-color: #db7227; transition: 0.3s;">

            <img src="{{ asset($type['image'] ?? 'assets/images/default.jpg') }}"
                 alt="{{ $type['name'] }}"
                 class="img-fluid rounded mb-3"
                 style="border-radius: 8px;">

            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                style="background-color: #174268; color: #fff; display: inline-block;">
                {{ $type['name'] }}
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
