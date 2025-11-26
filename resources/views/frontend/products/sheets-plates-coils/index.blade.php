@extends('layouts.master')
@section('title', 'Premium Sheets, Plates & Coils – Mokshtubes Metal Products') <!-- 52 characters -->
@section('meta_description', 'Discover high-quality sheets, plates, and coils from MokshTubes—engineered for durability,
    precision, and superior performance in industrial applications.') <!-- 153 characters -->
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/product/Sheets-Plates-and-Coils/Sheets-and-Plates.webp);">
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
                            'image' => 'assets/images/product/Sheets-Plates-and-Coils/chequered-sheets.webp',
                        ],

                        [
                            'name' => 'Strips',
                            'slug' => 'strips',
                            'image' => 'assets/images/product/Sheets-Plates-and-Coils/Metal-Strips.webp',
                        ],
                        [
                            'name' => 'Shim sheets',
                            'slug' => 'shim-sheets',
                            'image' => 'assets/images/product/Sheets-Plates-and-Coils/Shim-Sheets.webp',
                        ],
                        [
                            'name' => 'Sheets and plates',
                            'slug' => 'sheets-and-plates',
                            'image' => 'assets/images/product/Sheets-Plates-and-Coils/Sheets-and-Plates.webp',
                        ],
                        [
                            'name' => 'Perforated sheets',
                            'slug' => 'perforated-sheets',
                            'image' => 'assets/images/product/Sheets-Plates-and-Coils/sheets-Perforated.webp',
                        ],
                        [
                            'name' => 'Coils',
                            'slug' => 'coils',
                            'image' => 'assets/images/product/Sheets-Plates-and-Coils/Metal-Coils.webp',
                        ],
                        [
                            'name' => 'Cladded plates',
                            'slug' => 'cladded-plates',
                            'image' => 'assets/images/product/Sheets-Plates-and-Coils/Cladded-Plates.webp',
                        ],
                        // [
                        //     'name' => 'Capillaries',
                        //     'slug' => 'capillaries',
                        //     'image' => 'assets/images/product/capillary-tubes.webp',
                        // ],
                        // [
                        //     'name' => 'Hollow Section Pipe',
                        //     'slug' => 'hollow-section-pipe',
                        //     'image' => 'assets/images/product/hollow-section-pipe.webp',
                        // ],
                    ];
                @endphp

                @foreach ($types as $type)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="{{ url('/products/sheets-plates-coils/' . $type['slug']) }}"
                            class="text-decoration-none d-block h-100">
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




    <!--End breadcrumb area-->


@endsection
