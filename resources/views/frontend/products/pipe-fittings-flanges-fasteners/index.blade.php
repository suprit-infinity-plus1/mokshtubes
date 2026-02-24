@extends('layouts.master')
@section('title', 'Industrial Pipes, Tubes & Fittings – Mokshtubes LLP') <!-- 52 characters -->
@section('meta_description',
    'Explore pipes, tubes, fittings, flanges & fasteners in stainless steel, nickel alloys, and
    titanium. Global delivery.') <!-- 153 characters -->
@section('meta_keywords',
    'Pipe Fittings, Flanges, Fasteners, Stainless Steel Fittings, Nickel Alloy Fittings, Titanium
    Fittings, Custom Fabricated Fittings')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/product/flangs/Flanges-&-Pipe-Fittings.webp);">
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
                {{-- @php
                    $types = [
                        [
                            'name' => 'Fittings And Flanges',
                            'slug' => 'fittings-and-flanges',
                            'image' => 'assets/images/product/flangs/Flanges-&-Pipe-Fittings.webp',
                        ],
                        [
                            'name' => 'Flanges And Gaskets',
                            'slug' => 'flanges-and-gaskets',
                            'image' => 'assets/images/product/flangs/Flange-Gaskets.webp',
                        ],
                        [
                            'name' => 'Custom Fabricated Fittings',
                            'slug' => 'custom-fabricated-fittings',
                            'image' => 'assets/images/product/flangs/custom-fabricated-fittings.webp',
                        ],
                        [
                            'name' => 'Fasteners',
                            'slug' => 'fasteners',
                            'image' => 'assets/images/product/flangs/FASTENERS.webp',
                        ],
                        [
                            'name' => 'Pipe Fittings ',
                            'slug' => 'pipe-fittings ',
                            'image' => 'assets/images/product/flangs/Pipe-Fittings.webp',
                        ],
                    ];
                @endphp --}}

                {{-- @foreach ($types as $type)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="{{ url('/products/pipe-fittings-flanges-fasteners/' . $type['slug']) }}"
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
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fittings-and-flanges') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/flangs/Flanges-&-Pipe-Fittings.webp') }}"
                                alt="Fittings And Flanges" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Fittings And Flanges
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.flanges-and-gaskets') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/flangs/Flange-Gaskets.webp') }}"
                                alt="Flanges And Gaskets" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Flanges And Gaskets
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/flangs/custom-fabricated-fittings.webp') }}"
                                alt="Custom Fabricated Fittings" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Custom Fabricated Fittings
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/flangs/FASTENERS.webp') }}" alt="Fasteners"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Fasteners
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.pipe-fittings') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/flangs/Pipe-Fittings.webp') }}" alt="Pipe Fittings"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Pipe Fittings
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
