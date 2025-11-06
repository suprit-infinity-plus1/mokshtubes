@extends('layouts.master')
@section('title', 'Pipes & Tubes – Stainless, Nickel Alloys') <!-- 53 characters -->
@section('meta_description',
    'Discover welded & seamless pipes in stainless steel, Hastelloy, Inconel. Serving India, Germany, Saudi Arabia.') <!-- 153 characters -->
@section('meta_keywords',
    'Pipes, Tubes, Welded Pipes, Seamless Pipes, Capillaries, Hollow Section Pipes, U-Bent Tubes,
    Boiler Tubes, Stainless Steel Pipes, Nickel Tubes, Titanium Tubes')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/hollow-section-pipe.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Quality Industrial Pipes & Tubes</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Pipe & Tube Types</h2>
            </div>

            <div class="row g-4">
                @php
                    $types = [
                        [
                            'name' => 'Welded Pipes & Tubes (ERW & EFW)',
                            'slug' => 'welded-pipes-and-tubes',
                            'image' => 'assets/images/peoduct/welded-pipes-tubes.webp',
                        ],
                        [
                            'name' => 'Seamless Pipes',
                            'slug' => 'seamless-pipes',
                            'image' => 'assets/images/peoduct/seamless-pipes-2.webp',
                        ],
                        [
                            'name' => 'Capillaries',
                            'slug' => 'capillaries',
                            'image' => 'assets/images/peoduct/capillary-tubes.webp',
                        ],
                        [
                            'name' => 'Hollow Section Pipe',
                            'slug' => 'hollow-section-pipe',
                            'image' => 'assets/images/peoduct/hollow-section-pipe.webp',
                        ],
                        [
                            'name' => 'U-Bent Tubes',
                            'slug' => 'u-bent-tubes',
                            'image' => 'assets/images/peoduct/u-bent-tubes.webp',
                        ],
                        [
                            'name' => 'Boiler & Heat Exchanger Tubes',
                            'slug' => 'boiler-heat-exchanger-tubes',
                            'image' => 'assets/images/peoduct/boiler-heat-exchanger-tubes.webp',
                        ],
                    ];
                @endphp

                @foreach ($types as $type)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="{{ url('/products/pipes-tubes/' . $type['slug']) }}" class="text-decoration-none">
                            <div class="custom-product-card rounded overflow-hidden shadow h-100 position-relative">
                                {{-- <img src="https://placehold.co/600x350/db7227/fff?" class="img-fluid w-100"
                                    alt="{{ $type['name'] }}"> --}}
                                <img src="{{ asset($type['image'] ?? 'assets/images/default.jpg') }}"
                                    alt="{{ $type['name'] }}" class="img-fluid rounded" style="border-radius: 8px;">
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
