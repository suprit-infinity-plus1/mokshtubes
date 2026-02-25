@extends('layouts.master')

@section('title', 'Super Austenitic Stainless Steel – 904L & SMO 254') <!-- 52 chars -->
@section('meta_description', 'Premium super austenitic stainless steels 904L, SMO 254 & Alloy 926 from Mokshtubes —
    chloride-resistant, strong & chemically durable.')
@section('meta_keywords',
    'Super Austenitic Stainless Steel, 904L, SMO 254, Alloy 926, Chloride Resistant Alloy,
    Corrosion Resistant Alloy, Chemical Processing Alloys, Marine Industry Alloys, High Strength Stainless Steel, Industrial
    Stainless Steel Alloys')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/super-austenitic-stainless-steel/stainless-steel-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Super Austenitic Stainless Steel <br> 904L, SMO 254 & Alloy 926</h1>
                </div>
            </div>
        </div>
    </section>


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Super Austenitic Stainless Steel Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Super Austenitic Stainless Steel family.
                </p>
            </div>

            @php
                $grades = [
                    [
                        'name' => 'Super Austenitic Stainless Steel al 6xn',
                        'slug' => 'super-austenitic-stainless-steel-al-6xn',
                        'image' =>
                            'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-AL-6XN.webp',
                    ],
                    [
                        'name' => 'Super Austenitic Stainless Steel alloy 926',
                        'slug' => 'super-austenitic-stainless-steel-alloy-926',
                        'image' =>
                            'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-AL-926.webp',
                    ],
                    [
                        'name' => 'Super Austenitic Stainless Steel 253 ma',
                        'slug' => 'super-austenitic-stainless-steel-253-ma',
                        'image' =>
                            'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-253.webp',
                    ],
                    [
                        'name' => 'Super Austenitic Stainless Steel 904l',
                        'slug' => 'super-austenitic-stainless-steel-904l',
                        'image' =>
                            'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-904L.webp',
                    ],
                    [
                        'name' => 'Super Austenitic Stainless Steel smo 254',
                        'slug' => 'super-austenitic-stainless-steel-smo-254',
                        'image' =>
                            'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-SMO-254.webp',
                    ],
                    [
                        'name' => 'Super Austenitic Stainless Steel smo 654',
                        'slug' => 'super-austenitic-stainless-steel-smo-654',
                        'image' =>
                            'assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-SMO-654.webp',
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href =
                            $grade['slug'] !== '#'
                                ? url((in_array(strtolower(request()->segment(1)), ['se','no','ng','ae','us','sg','mv','sa','de','gb','ca','jo','pe','au','th','ru','fr','be','za','bg','tw','it','nl','in']) ? '/' . request()->segment(1) : '') . '/materials/super-austenitic-stainless-steel/' . $grade['slug'])
                                : '#';
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
