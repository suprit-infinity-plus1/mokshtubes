@extends('layouts.master')

@section('title', 'Zirconium Alloys 702, 704, 705 – Corrosion Resistant') <!-- 52 chars -->
@section('meta_description', 'High-purity Zirconium alloys 702, 704, 705 with excellent corrosion resistance and durability for nuclear, chemical, and industrial applications.')
@section('meta_keywords', 'Zirconium Alloys, Zirconium 702, Zirconium 704, Zirconium 705, Corrosion Resistant Zirconium, Nuclear Industry Alloys, Chemical Processing Alloys, Industrial Zirconium Grades, Durable Zirconium Alloys')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/zirconium/zirconium-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Zirconium Alloys 702, 704, 705</h1>
                </div>
            </div>
        </div>
    </section>


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Zirconium Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Zirconium family.</p>
            </div>

            @php
                $grades = [
                    [
                        'name' => 'Zirconium 702',
                        'slug' => 'zirconium-702',
                        'image' => 'assets/images/zirconium/zirconium-702.webp',
                    ],
                    [
                        'name' => 'Zirconium 704',
                        'slug' => 'zirconium-704',
                        'image' => 'assets/images/zirconium/zirconium704.webp',
                    ],
                    [
                        'name' => 'Zirconium 705',
                        'slug' => 'zirconium-705',
                        'image' => 'assets/images/zirconium/zirconium-705.webp',
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url('/materials/zirconium/' . $grade['slug']) : '#';
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
