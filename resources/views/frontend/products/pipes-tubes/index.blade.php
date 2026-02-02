@extends('layouts.master')
@section('title', 'Pipes & Tubes – Welded, Seamless, U-Bend, Boiler | Moksh Tubes') <!-- 53 characters -->
@section('meta_description',
    'Explore welded, seamless, U-bend, boiler tubes & capillaries in stainless steel and nickel
    alloys. High-quality industrial pipes & tubes supplied globally by Moksh Tubes LLP.') <!-- 153 characters -->
@section('meta_keywords',
    'Pipes, Tubes, Welded Pipes, Seamless Pipes, Capillaries, Hollow Section Pipes, U-Bent Tubes,
    Boiler Tubes, Stainless Steel Pipes, Nickel Tubes, Titanium Tubes')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/hollow-section-pipe.webp);">
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
                {{-- @php
                    $types = [
                        [
                            'name' => 'Welded Pipes & Tubes (ERW & EFW)',
                            'slug' => 'welded-pipes-and-tubes',
                            'image' => 'assets/images/product/welded-pipes-tubes.webp',
                        ],
                        [
                            'name' => 'Seamless Pipes',
                            'slug' => 'seamless-pipes',
                            'image' => 'assets/images/product/seamless-pipes.webp',
                        ],
                        [
                            'name' => 'Capillaries',
                            'slug' => 'capillaries',
                            'image' => 'assets/images/product/capillary-tubes.webp',
                        ],
                        [
                            'name' => 'Hollow Section Pipe',
                            'slug' => 'hollow-section-pipe',
                            'image' => 'assets/images/product/hollow-section-pipe.webp',
                        ],
                        [
                            'name' => 'U-Bent Tubes',
                            'slug' => 'u-bent-tubes',
                            'image' => 'assets/images/product/u-bent-tubes.webp',
                        ],
                        [
                            'name' => 'Boiler & Heat Exchanger Tubes',
                            'slug' => 'boiler-heat-exchanger-tubes',
                            'image' => 'assets/images/product/boiler-heat-exchanger-tubes.webp',
                        ],
                    ];
                @endphp

                @foreach ($types as $type)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="{{ url('/products/pipes-tubes/' . $type['slug']) }}"
                            class="text-decoration-none d-block h-100">
                            <a href="{{ route('products.pipes-tubes.slug', ['slug' => $type['slug']]) }}"
                            class="text-decoration-none d-block h-100">
                            <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                                style="border-color: #db7227; transition: 0.3s;">

                                <img src="{{ asset('$type['image']' ?? 'assets/images/default.webp') }}"
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
                    <a href="{{ route('products.pipes-tubes.welded-pipes') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/welded-pipes-tubes.webp') }}"
                                alt="Welded Pipes & Tubes (ERW & EFW)" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Welded Pipes & Tubes (ERW & EFW)
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.seamless-pipes') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/seamless-pipes.webp') }}" alt="Seamless Pipes"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Seamless Pipes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.capillaries') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/capillary-tubes.webp') }}" alt="Capillaries"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Capillaries
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.hollow-section-pipe') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/hollow-section-pipe.webp') }}"
                                alt="Hollow Section Pipe" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Hollow Section Pipe
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.u-bent-tubes') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/u-bent-tubes.webp') }}" alt="U-Bent Tubes"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                U-Bent Tubes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.boiler-heat-exchanger-tubes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/boiler-heat-exchanger-tubes.webp') }}"
                                alt="Boiler & Heat Exchanger Tubes" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Boiler & Heat Exchanger Tubes
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
