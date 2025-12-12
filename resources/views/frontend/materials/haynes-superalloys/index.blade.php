@extends('layouts.master')
@section('title', 'Haynes Superalloys: 188, 230, 242, 160 | MokshTubes')
@section('meta_description', 'Haynes superalloys 188, 230, 242 & 160 – extreme strength, oxidation-resistant, and durable for demanding industrial applications.')
@section('meta_keywords', 'Haynes Superalloys, Haynes 188, Haynes 230, Haynes 242, Haynes 160, High-Temperature Alloys, Corrosion Resistant Alloys, Industrial Superalloys, Heat Resistant Alloys, Nickel-Based Superalloys, Aerospace Alloys, Power Generation Alloys')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Haynes Superalloys 188, 230, 242, 160</h1>

                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Haynes Superalloys Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Haynes Superalloys family.</p>
            </div>

            @php
                $grades = [
                    [
                        'name' => 'haynes-superalloys 160',
                        'slug' => 'haynes-superalloys-160',
                        'image' => 'assets/images/haynes/haynes-alloy-160.webp',
                    ],
                    [
                        'name' => 'haynes-superalloys 188',
                        'slug' => 'haynes-superalloys-188',
                        'image' => 'assets/images/haynes/haynes-alloy-188.webp',
                    ],
                    [
                        'name' => 'haynes-superalloys 230',
                        'slug' => 'haynes-superalloys-230',
                        'image' => 'assets/images/haynes/haynes-230.webp',
                    ],
                    [
                        'name' => 'haynes-superalloys 242',
                        'slug' => 'haynes-superalloys-242',
                        'image' => 'assets/images/haynes/haynes-242.webp',
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url('/materials/haynes-superalloys/' . $grade['slug']) : '#';
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
