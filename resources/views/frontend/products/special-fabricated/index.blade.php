@extends('layouts.master')
@section('title', 'Special Fabricated Products – Steel & Stainless Solutions') <!-- 53 characters -->
@section('meta_description', 'Custom fabricated products from Moksh Tubes — steel furniture, stainless grills, railings
    & glass solutions, designed for durability, function & style.') <!-- 153 characters -->
@section('meta_keywords', 'special fabricated, custom steel furniture, stainless steel grills, railings, glass
    solutions, modern fabricated products, durable fabricated items, custom metal works, industrial steel fabrication')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/product/steel-furniture/custom-steel-furniture.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium Special Fabricated Products</h1> <!-- 52 characters -->
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
                            'image' => 'assets/images/product/steel-furniture/custom-steel-furniture.webp',
                        ],
                        [
                            'name' => 'Fabricated SS Grills',
                            'slug' => 'fabricated-ss-grills',
                            'image' => 'assets/images/product/SS-grill.webp',
                        ],
                        [
                            'name' => 'SS Railings',
                            'slug' => 'ss-railings',
                            'image' => 'assets/images/product/SS-railings.webp',
                        ],
                        [
                            'name' => 'Glass Railings',
                            'slug' => 'glass-railings',
                            'image' => 'assets/images/product/Glass-railing.webp',
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
                        <a href="{{ url('/products/special-fabricated/' . $type['slug']) }}"
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
