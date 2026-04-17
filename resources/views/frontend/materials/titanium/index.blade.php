@extends('layouts.master')

@section('title', 'Titanium Alloys – Lightweight & High-Strength') <!-- 52 chars -->
@section('meta_description', 'Discover premium titanium alloys with exceptional strength, corrosion resistance, and light weight for aerospace, medical, and industrial use.')
@section('meta_keywords', 'Titanium Alloys, Titanium Grades, Lightweight Alloy, High Strength Alloy, Corrosion Resistant Titanium, Aerospace Titanium, Medical Titanium, Industrial Titanium, Titanium Pipes, Titanium Tubes, Titanium Fittings')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/titanium/titanium-alloy-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Titanium <br> Lightweight, High-Strength Alloy</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Titanium Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Titanium family.</p>
            </div>

            @php
                $grades = [
                    ['name' => 'Titanium grade 1', 'slug' => 'titanium-grade-1', 'image' => 'assets/images/titanium/titanium-1.webp'],
                    ['name' => 'Titanium grade 2', 'slug' => 'titanium-grade-2', 'image' => 'assets/images/titanium/titanium-2.webp'],
                    ['name' => 'Titanium grade 4 eli', 'slug' => 'titanium-grade-4-eli', 'image' => 'assets/images/titanium/titanium-4.webp'],
                    ['name' => 'Titanium grade 4', 'slug' => 'titanium-grade-4', 'image' => 'assets/images/material/titanium-grade4.webp'],
                    ['name' => 'Titanium grade 5 eli', 'slug' => 'titanium-grade-5-eli', 'image' => 'assets/images/titanium/titanium-5-eli.webp'],
                    ['name' => 'Titanium grade 5', 'slug' => 'titanium-grade-5', 'image' => 'assets/images/titanium/titanium-5.webp'],
                    ['name' => 'Titanium grade 7 nb', 'slug' => 'titanium-grade-7-nb', 'image' => 'assets/images/titanium/titanium-7nb.webp'],
                    ['name' => 'Titanium grade 9', 'slug' => 'titanium-grade-9', 'image' => 'assets/images/titanium/Titanium-9.webp'],
                    ['name' => 'Titanium grade 12', 'slug' => 'titanium-grade-12', 'image' => 'assets/images/titanium/titanium-grade2.webp'],
                    ['name' => 'Titanium grade 7', 'slug' => 'titanium-grade-7', 'image' => 'assets/images/titanium/titanium-7.webp'],
                    ['name' => 'Titanium grade 23', 'slug' => 'titanium-grade-23', 'image' => 'assets/images/titanium/titanium-23.webp'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url((in_array(strtolower(request()->segment(1)), ['se','no','ng','ae','us','sg','mv','sa','de','gb','ca','jo','pe','au','th','ru','fr','be','za','bg','tw','it','nl','in']) ? '/' . request()->segment(1) : '') . '/materials/titanium/' . $grade['slug']) : '#';
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
