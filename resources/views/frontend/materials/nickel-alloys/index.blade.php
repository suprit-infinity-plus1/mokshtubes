@extends('layouts.master')
@section('title', 'Nickel Alloys | Moksh Tubes')
@section('content')
    <!--Start breadcrumb area-->


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Nickel Alloys</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->
<section class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center">
                <h2>Nickel Alloy Grades</h2>
                 {{-- <p class="text-center text-muted fs-5 mb-5 my-4">Explore our complete range of high-performance nickel-based alloys grouped by family.</p> --}}
            </div>

        {{-- <h1 class="section-title">Nickel Alloy Grades</h1>
        <p class="text-center text-muted fs-5 mb-5">Explore our complete range of high-performance nickel-based alloys grouped by family.</p> --}}

        {{-- HASTELLOY --}}
        <div class="mb-5">
    <h2 class="category-heading">Hastelloy</h2>
    <div class="row g-4">
       @foreach (['C276', 'C22', 'C4', 'B2', 'B3', 'C2000', 'G3', 'G30', 'Hastelloy X'] as $grade)
    @php
        $slug = Str::slug($grade); // convert to lowercase dash-separated
        $url = $slug === 'c276'
            ? url('/materials/nickel-alloys/hastelloy-c276')
            : '#';
    @endphp

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="{{ $url }}" class="text-decoration-none d-block h-100">
            <div class="grade-card">
                <h5>Hastelloy {{ $grade }}</h5>
            </div>
        </a>
    </div>
@endforeach

    </div>
</div>


        {{-- INCONEL --}}
        <div class="mb-5">
            <h2 class="category-heading">Inconel</h2>
            <div class="row g-4">
                @foreach (['600', '601', '625', '690', '718', 'X750'] as $grade)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="text-decoration-none d-block h-100">
                            <div class="grade-card">
                                <h5>Inconel {{ $grade }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- INCOLOY --}}
        <div class="mb-5">
            <h2 class="category-heading">Incoloy</h2>
            <div class="row g-4">
                @foreach (['800', '825', '925'] as $grade)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="text-decoration-none d-block h-100">
                            <div class="grade-card">
                                <h5>Incoloy {{ $grade }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- MONEL --}}
        <div class="mb-5">
            <h2 class="category-heading">Monel</h2>
            <div class="row g-4">
                @foreach (['400', 'K500', 'R405'] as $grade)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="text-decoration-none d-block h-100">
                            <div class="grade-card">
                                <h5>Monel {{ $grade }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- NICKEL --}}
        <div class="mb-4">
            <h2 class="category-heading">Nickel</h2>
            <div class="row g-4">
                @foreach (['200', '201', 'A286 660'] as $grade)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="text-decoration-none d-block h-100">
                            <div class="grade-card">
                                <h5>Nickel {{ $grade }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('materials') }}" class="btn btn-outline-primary">← Back to All Materials</a>
        </div>
    </div>
</section>

@endsection
