@extends('layouts.master')
@section('title', 'Blog – Industry Insights & Updates | Moksh Tubes')

@section('meta_description',
'Stay updated with Moksh Tubes Blog: industry news, product insights, and expert articles
on stainless steel, alloys, pipes, tubes, and fittings.')
@section('meta_keywords',
'Mokshtubes Blog, Industrial Alloys Insights, Stainless Steel Updates, Pipes and Tubes News,
Metal Industry Articles, Alloy Supply Updates, Expert Metal Solutions')


{{-- OG fields (only image & type) --}}
@section('og_image', asset('assets/images/slides/Mokshtubes-banner-desktop.webp'))
@section('og_type', 'website')

@section('content')

<!--Start rev slider wrapper-->

<section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1>Moksh Tubes Blog <br> Industry Insights</h1>
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
                            <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="{{ $blog->title }}">
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

        <!-- Custom Pagination -->
        <div class="custom-pagination">
            @if ($blogs->onFirstPage())
            <span class="disabled">« Prev</span>
            @else
            <a href="{{ $blogs->previousPageUrl() }}">« Prev</a>
            @endif

            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
            @if ($page == $blogs->currentPage())
            <span class="active">{{ $page }}</span>
            @else
            <a href="{{ $url }}">{{ $page }}</a>
            @endif
            @endforeach

            @if ($blogs->hasMorePages())
            <a href="{{ $blogs->nextPageUrl() }}">Next »</a>
            @else
            <span class="disabled">Next »</span>
            @endif
        </div>
    </div>
</section>

@endsection
