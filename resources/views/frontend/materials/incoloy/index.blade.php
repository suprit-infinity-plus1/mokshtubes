@extends('layouts.master')
@section('title', 'Incoloy Alloys 800, 825, 925 | Nickel-Iron-Chromium Supplier')
@section('meta_description',
    'Incoloy 800, 825 & 925 alloys from Moksh Tubes — high strength, oxidation-resistant &
    corrosion-protected for chemical, marine & high-temperature use.')
@section('meta_keywords',
    'Incoloy Alloys, Corrosion Resistant Incoloy, Heat Resistant Incoloy, Incoloy Pipes, Incoloy
    Tubes, Incoloy Fittings, Chemical Industry Incoloy, Power Industry Incoloy, Industrial Incoloy Alloys, High Performance
    Incoloy, Industrial Heat Resistant Alloys')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/incoloy/incoloy-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Incoloy Alloys <br> High Strength, Heat & Corrosion Resistance</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Inconel Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the incoloy family.</p>
            </div>

            @php
                $grades = [
                    [
                        'name' => 'Incoloy 825',
                        'slug' => 'incoloy-825',
                        'image' => 'assets/images/incoloy/incoloy-825.webp',
                    ],
                    [
                        'name' => 'Incoloy 800',
                        'slug' => 'incoloy-800',
                        'image' => 'assets/images/incoloy/incoloy-800.webp',
                    ],
                    [
                        'name' => 'Incoloy 925',
                        'slug' => 'incoloy-925',
                        'image' => 'assets/images/incoloy/incoloy-925.webp',
                    ],
                    [
                        'name' => 'Incoloy 800h / 800ht',
                        'slug' => 'incoloy-800h-800ht',
                        'image' => 'assets/images/incoloy/incoloy-800h_800ht.webp',
                    ],
                    [
                        'name' => 'Incoloy 020',
                        'slug' => 'incoloy-020',
                        'image' => 'assets/images/incoloy/incoloy-020.webp',
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url('/materials/incoloy/' . $grade['slug']) : '#';
                    @endphp
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ $href }}" class="text-decoration-none d-block h-100">
                            <div class="grade-card border rounded shadow-sm p-3 text-center h-100 transition"
                                style="border-color: #db7227; transition: 0.3s;">
                                {{-- <img src="https://placehold.co/300x180/db7227/fff?text={{ urlencode($grade['name']) }}"
                                    alt="{{ $grade['name'] }}" class="img-fluid rounded mb-3" style="border-radius: 8px;"> --}}
                                <img src="{{ asset($grade['image']) }}" alt="{{ $grade['name'] }}"
                                    class="img-fluid rounded mb-3" style="border-radius: 8px;">
                                <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                    style="background-color: #174268; color: #fff; display: inline-block;">
                                    {{ $grade['name'] }}
                                </h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if ($blogs->count() > 0)
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
    @endif




    <!--End breadcrumb area-->


@endsection
