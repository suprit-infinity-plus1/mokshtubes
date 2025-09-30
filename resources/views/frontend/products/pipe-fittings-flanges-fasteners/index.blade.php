@extends('layouts.master')
@section('title', 'Pipe Fittings, Flanges & Fasteners – Mokshtubes') <!-- 52 characters -->
@section('meta_description',
    'Mokshtubes provides premium pipe fittings, flanges, fasteners, gaskets & custom fabricated fittings designed for industrial strength, durability & precision.') <!-- 153 characters -->
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium Pipe Fittings, Flanges & Fasteners</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>




    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Pipe Fittings Flanges Fasteners Types</h2>
            </div>

            <div class="row g-4">
                @php
                    $types = [
                        [
                            'name' => 'Fittings And Flanges',
                            'slug' => 'fittings-and-flanges',
                            'image' => 'assets/images/peoduct/flangs/Flanges-&-Pipe-Fittings.webp',
                        ],
                        [
                            'name' => 'Flanges And Gaskets',
                            'slug' => 'flanges-and-gaskets',
                            'image' => 'assets/images/peoduct/seamless-pipes-2.webp',
                        ],
                        [
                            'name' => 'Custom Fabricated Fittings',
                            'slug' => 'custom-fabricated-fittings',
                            'image' => 'assets/images/peoduct/flangs/custom-fabricated-fittings.jpeg',
                        ],
                        [
                            'name' => 'Fasteners',
                            'slug' => 'fasteners',
                            'image' => 'assets/images/peoduct/flangs/FASTENERS.jpeg',
                        ],
                        [
                            'name' => 'Pipe Fittings ',
                            'slug' => 'pipe-fittings ',
                            'image' => 'assets/images/peoduct/flangs/FASTENERS.jpeg',
                        ],
                    ];
                @endphp

                @foreach ($types as $type)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="{{ url('/products/pipe-fittings-flanges-fasteners/' . $type['slug']) }}" class="text-decoration-none">
                            <div class="custom-product-card rounded overflow-hidden shadow h-100 position-relative">
                                {{-- <img src="https://placehold.co/600x350/db7227/fff?" class="img-fluid w-100"
                                    alt="{{ $type['name'] }}"> --}}
                                <img src="{{ asset($type['image'] ?? 'assets/images/default.jpg') }}"
                                    alt="{{ $type['name'] }}" class="img-fluid rounded " style="border-radius: 8px;">
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
