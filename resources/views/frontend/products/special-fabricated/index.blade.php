@extends('layouts.master')
@section('title', 'Special Fabricated Products - Custom Steel & Alloy | Moksh Tubes')
@section('meta_description',
    'Discover Special Fabricated Products at Moksh Tubes – custom steel, alloy & stainless solutions. Precision-made, high quality & global fabrication standards.')
@section('content')
    <!--Start breadcrumb area-->


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Special Fabricated</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Special Fabricated Types</h2>
            </div>

            <div class="row g-4">
                @php
                    $types = [
                        [
                            'name' => 'Custom Steel Furniture',
                            'slug' => 'custom-steel-furniture',
                            'image' => 'assets/images/peoduct/steel-furniture/custom-steel-furniture.webp',
                        ],
                        [
                            'name' => 'Fabricated SS Grills',
                            'slug' => 'fabricated-ss-grills',
                            'image' => 'assets/images/peoduct/seamless-pipes-2.webp',
                        ],
                        [
                            'name' => 'SS Railings',
                            'slug' => 'ss-railings',
                            'image' => 'assets/images/peoduct/seamless-pipes-2.webp',
                        ],
                          [
                            'name' => 'Glass Railings',
                            'slug' => 'glass-railings',
                            'image' => 'assets/images/peoduct/seamless-pipes-2.webp',
                        ],
                        // [
                        //     'name' => 'Capillaries',
                        //     'slug' => 'capillaries',
                        //     'image' => 'assets/images/peoduct/capillary-tubes.webp',
                        // ],
                        // [
                        //     'name' => 'Hollow Section Pipe',
                        //     'slug' => 'hollow-section-pipe',
                        //     'image' => 'assets/images/peoduct/hollow-section-pipe.webp',
                        // ],
                    ];
                @endphp

                @foreach ($types as $type)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="{{ url('/products/special-fabricated/' . $type['slug']) }}" class="text-decoration-none">
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
