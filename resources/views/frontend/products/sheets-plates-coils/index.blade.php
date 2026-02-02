@extends('layouts.master')
@section('title', 'Premium Sheets, Plates & Coils – Mokshtubes Metal Products') <!-- 52 characters -->
@section('meta_description',
    'Discover high-quality sheets, plates, and coils from MokshTubes—engineered for durability,
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
                {{-- @php
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
                @endphp --}}

                {{-- @foreach ($types as $type)
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
                @endforeach --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.sheets-plates-coils.chequered-sheets') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/chequered-sheets.webp') }}"
                                alt="Chequered Sheets" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Chequered Sheets
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.sheets-plates-coils.strips') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/Metal-Strips.webp') }}"
                                alt="Strips" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Strips
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.sheets-plates-coils.shim-sheets') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/Shim-Sheets.webp') }}"
                                alt="Shim sheets" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Shim sheets
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.sheets-plates-coils.sheets-and-plates') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/Sheets-and-Plates.webp') }}"
                                alt="Sheets and plates" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Sheets and plates
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.sheets-plates-coils.perforated-sheets') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/sheets-Perforated.webp') }}"
                                alt="Perforated sheets" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Perforated sheets
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.sheets-plates-coils.coils') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/Metal-Coils.webp') }}"
                                alt="Coils" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Coils
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.sheets-plates-coils.cladded-plates') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/Cladded-Plates.webp') }}"
                                alt="Cladded plates" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Cladded plates
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-section sec-padd2">
        <div class="container">
            <div class="section-title">
                <h2>blogs</h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    {{-- {{ dd($blog) }} --}}
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated">

                            <figure class="img-holder mb-0">
                                <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                    <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="{{ $blog->title }}"
                                        loading="lazy">
                                </a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                    <h5>{{ Str::limit($blog->title, 30) }}</h5>
                                </a>

                                <div class="post-meta">
                                    by {{ $blog->author ?? 'Admin' }} |
                                    {{ $blog->created_at->format('F d, Y') }}
                                </div>

                                <!--<div class="text">-->
                                <!--</div>-->
                                {!! \Str::limit(strip_tags($blog->content, '<i>'), 120) !!}

                                <div class="link">
                                    <a href="{{ route('frontend.single-blog', $blog->slug) }}" class="default_link">
                                        Read More <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!--End breadcrumb area-->


@endsection
