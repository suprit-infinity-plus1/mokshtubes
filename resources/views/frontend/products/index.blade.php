@extends('layouts.master')
@section('title',
    'Industrial Pipes & Tubes: Premium Products | MokshTubes')
@section('meta_description',
    'Explore industrial pipes & tubes at MokshTubes, including 904L, SMO 254 & Alloy 926, offering exceptional corrosion resistance and durability in harsh conditions.')
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
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Products</h1>
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

            @php
                $products = [
                    ['name' => 'Pipes & Tubes', 'slug' => 'pipes-tubes'],
                    ['name' => 'Sheets, Plates & Coils', 'slug' => 'sheets-plates-coils'],
                    ['name' => 'Bars & Rods', 'slug' => 'bars-rods'],
                    ['name' => 'Pipe Fittings, Flanges & Fasteners', 'slug' => 'pipe-fittings-flanges-fasteners'],
                    ['name' => 'Special Fabricated', 'slug' => 'special-fabricated'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-lg-4">
                        {{-- Generate URL based on slug --}}
                        <a href="{{ url('/products/' . $product['slug']) }}" class="text-decoration-none d-block h-100">
                            <div class="product-card b  order rounded shadow-sm p-2 text-center h-100">
                                <img style="transition: 0.3s; border: 2px solid ##db7227; rounded: 10px;"
                                    src="https://placehold.co/370x200/db7227/fff?" class="img-fluid "
                                    alt="{{ $product['name'] }}">
                                <h5 class="fw-semibold" style="color: #174268   ;">{{ $product['name'] }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
