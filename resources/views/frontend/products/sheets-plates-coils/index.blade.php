@extends('layouts.master')
@section('title', 'Premium Sheets, Plates & Coils – Mokshtubes Metal Products') <!-- 52 characters -->
@section('meta_description',
    'Discover high-quality sheets, plates, and coils from MokshTubes—engineered for durability, precision, and superior performance in industrial applications.') <!-- 153 characters -->
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/Sheets-Plates-and-Coils/Sheets-and-Plates.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Quality Sheets, Plates & Coils for Industry</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Sheets, Plates & Coils Types</h2>
            </div>

            <div class="row g-4">
                @php
                    $types = [
                        [
                            'name' => 'Chequered Sheets',
                            'slug' => 'chequered-sheets',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/chequered-sheets.jpeg',
                        ],

                         [
                            'name' => 'Strips',
                            'slug' => 'strips',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/Metal-Strips.jpg',
                        ],
                         [
                            'name' => 'Shim sheets',
                            'slug' => 'shim-sheets',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/Shim-Sheets.jpeg',
                        ],
                         [
                            'name' => 'Sheets and plates',
                            'slug' => 'sheets-and-plates',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/Sheets-and-Plates.jpg',
                        ],
                         [
                            'name' => 'Perforated sheets',
                            'slug' => 'perforated-sheets',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/sheets-Perforated.jpeg',
                        ],
                         [
                            'name' => 'Coils',
                            'slug' => 'coils',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/Metal-Coils.jpeg',
                        ],
                         [
                            'name' => 'Cladded plates',
                            'slug' => 'cladded-plates',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/Cladded-Plates.jpg',
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
                        <a href="{{ url('/products/sheets-plates-coils/' . $type['slug']) }}" class="text-decoration-none">
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
