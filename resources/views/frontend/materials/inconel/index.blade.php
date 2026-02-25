@extends('layouts.master')

@section('title', 'Inconel Alloys – High-Performance Nickel | MokshTubes') <!-- 54 chars -->
@section('meta_description', 'Explore Inconel alloys 600, 625, 718 & X-750 at MokshTubes, offering high-temperature strength, corrosion resistance, and extreme durability.')
@section('meta_keywords', 'Inconel Alloys, Inconel 600, Inconel 625, Inconel 718, Inconel X-750, Nickel Alloys, High-Performance Nickel Alloys, Corrosion Resistant Alloys, High Temperature Alloys, MokshTubes Inconel')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/inconel/inconel-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Inconel Alloys <br> High-Performance Nickel for Extreme Conditions</h1>
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
                <p class="text-muted fs-5 pb-3">Explore all available grades in the inconel family.</p>
            </div>

            @php
                $grades = [
                    ['name' => 'Inconel 600', 'slug' => 'inconel-600', 'image' => 'assets/images/inconel/inconel-600.webp'],
                    ['name' => 'Inconel 617', 'slug' => 'inconel-617', 'image' => 'assets/images/inconel/Inconel-617.webp'],
                    ['name' => 'Inconel 625', 'slug' => 'inconel-625', 'image' => 'assets/images/inconel/Inconel-625.webp'],
                    ['name' => 'Inconel 690', 'slug' => 'inconel-690', 'image' => 'assets/images/inconel/Inconel-690.webp'],
                    ['name' => 'Inconel 718', 'slug' => 'inconel-718', 'image' => 'assets/images/inconel/Inconel-718.webp'],
                    ['name' => 'Inconel x750', 'slug' => 'inconel-x750', 'image' => 'assets/images/inconel/Inconel-X 750.webp'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url((in_array(strtolower(request()->segment(1)), ['se','no','ng','ae','us','sg','mv','sa','de','gb','ca','jo','pe','au','th','ru','fr','be','za','bg','tw','it','nl','in']) ? '/' . request()->segment(1) : '') . '/materials/inconel/' . $grade['slug']) : '#';
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
