@extends('layouts.master')
@section('title', 'Industrial Pipes & Tubes: Premium Products | MokshTubes')
@section('meta_description',
    'Industrial pipes & tubes from Moksh Tubes, including 904L, SMO 254 & Alloy 926 —
    engineered for corrosion resistance, strength & durability.')
    {{-- @section('meta_description',
    'Superior welded, seamless, U-bend & boiler tubes engineered for strength, precision, and long-lasting industrial
    performance.
    ') --}}
    {{-- @section('meta_description',
    'Browse Mokshtubes’ extensive range of premium industrial pipes and tubes designed for strength, reliability, and
    superior performance in all sectors.
    ') --}}
@section('content')
    <!--Start breadcrumb area-->


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/product/pipes-tubes-banner.webp);">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Industrial Pipes & Tubes</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Our Product Categories</h2>
                <p class="text-muted fs-5 pb-2">Explore a wide range of precision-engineered products for your industry.</p>
            </div>

            <div class="row g-4">

                @php
                    $types = [
                        [
                            'name' => 'Pipes & Tubes',
                            'slug' => 'pipes-tubes',
                            'image' => 'assets/images/product/main-product/pipes&tubes.webp',
                        ],
                        [
                            'name' => 'Sheets, Plates & Coils',
                            'slug' => 'sheets-plates-coils',
                            'image' => 'assets/images/product/main-product/SheetsPlates.webp',
                        ],
                        [
                            'name' => 'Bars & Rods',
                            'slug' => 'bars-rods',
                            'image' => 'assets/images/product/main-product/rods.webp',
                        ],
                        [
                            'name' => 'Pipe Fittings, Flanges & Fasteners',
                            'slug' => 'pipe-fittings-flanges-fasteners',
                            'image' => 'assets/images/product/main-product/fittings.webp',
                        ],
                        [
                            'name' => 'Special Fabricated',
                            'slug' => 'special-fabricated',
                            'image' => 'assets/images/product/main-product/Special.webp',
                        ],
                    ];
                @endphp


                @foreach ($types as $type)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="{{ url('/products/' . $type['slug']) }}" class="text-decoration-none d-block h-100">
                            <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                                style="border-color: #db7227; transition: 0.3s;">

                                <img src="{{ asset($type['image'] ?? 'assets/images/default.webp') }}"
                                    alt="{{ $type['name'] }}" class="img-fluid rounded mb-3" style="border-radius: 8px;">

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

@endsection
