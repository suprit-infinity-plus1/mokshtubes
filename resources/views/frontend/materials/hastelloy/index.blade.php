@extends('layouts.master')

@section('meta_title', 'Hastelloy Alloys | Grades, Properties & Applications | Mokshtubes')

@section('meta_description',
    'Explore the full range of Hastelloy alloys including C276, C22, B2, and G30. Ideal for
    corrosion resistance in chemical, marine, and power plant industries.')
@section('meta_keywords',
    'Hastelloy C276, Hastelloy C22, Hastelloy B2, corrosion resistant alloys, nickel alloys,
    chemical processing materials, marine grade alloys, oil and gas materials, industrial alloy solutions')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/hastelloy-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy Alloys: C276, C22, B2 <br> Corrosion Resistant Nickel Alloys</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Hastelloy Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Hastelloy family.</p>
            </div>

            @php
                $grades = [
                    [
                        'name' => 'Hastelloy C276',
                        'slug' => 'hastelloy-c276',
                        'image' => 'assets/images/hastelloy/hastelloy-c276.webp',
                    ],
                    [
                        'name' => 'Hastelloy C22',
                        'slug' => 'hastelloy-c22',
                        'image' => 'assets/images/hastelloy/hastelloy-c22.webp',
                    ],
                    [
                        'name' => 'Hastelloy C4',
                        'slug' => 'hastelloy-c4',
                        'image' => 'assets/images/hastelloy/hastelloy-C4.webp',
                    ],
                    [
                        'name' => 'Hastelloy B2',
                        'slug' => 'hastelloy-b2',
                        'image' => 'assets/images/hastelloy/hastelloy-b2.webp',
                    ],
                    [
                        'name' => 'Hastelloy B3',
                        'slug' => 'hastelloy-b3',
                        'image' => 'assets/images/hastelloy/Hastelloy-B3.webp',
                    ],
                    [
                        'name' => 'Hastelloy C2000',
                        'slug' => 'hastelloy-c2000',
                        'image' => 'assets/images/hastelloy/hastelloy-c2000.webp',
                    ],
                    [
                        'name' => 'Hastelloy G3',
                        'slug' => 'hastelloy-g3',
                        'image' => 'assets/images/hastelloy/hastelloy-G3.webp',
                    ],
                    [
                        'name' => 'Hastelloy G30',
                        'slug' => 'hastelloy-g30',
                        'image' => 'assets/images/hastelloy/Hastelloy-G30.webp',
                    ],
                    [
                        'name' => 'Hastelloy X',
                        'slug' => 'hastelloy-x',
                        'image' => 'assets/images/hastelloy/hastelloy-x.webp',
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url((in_array(strtolower(request()->segment(1)), ['se','no','ng','ae','us','sg','mv','sa','de','gb','ca','jo','pe','au','th','ru','fr','be','za','bg','tw','it','nl','in']) ? '/' . request()->segment(1) : '') . '/materials/hastelloy/' . $grade['slug']) : '#';
                    @endphp
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        {{-- <a href="{{ $href }}" class="text-decoration-none d-block h-100"> --}}
                        <a href="{{ route('materials.hastelloy.grade', ['slug' => $grade['slug']]) }}"
                            class="text-decoration-none d-block h-100">
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
