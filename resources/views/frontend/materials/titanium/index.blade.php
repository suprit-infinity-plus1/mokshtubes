@extends('layouts.master')
@section('title', 'Titanium | Moksh Tubes')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Titanium</h1>
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
                    ['name' => 'Titanium grade 1', 'slug' => 'titanium-grade 1'],
                    ['name' => 'Titanium grade 2', 'slug' => 'titanium-grade 2'],
                    ['name' => 'Titanium grade 4 eli', 'slug' => 'titanium-grade 4 eli'],
                    ['name' => 'Titanium grade 4', 'slug' => 'titanium-grade 4'],
                    ['name' => 'Titanium grade 5 eli', 'slug' => 'titanium-grade 5 eli'],
                    ['name' => 'Titanium grade 5', 'slug' => 'titanium-grade 5'],
                    ['name' => 'Titanium grade 7 nb', 'slug' => 'titanium-grade 7 nb'],
                    ['name' => 'Titanium grade 9', 'slug' => 'titanium-grade 9'],
                    ['name' => 'Titanium grade 12', 'slug' => 'titanium-grade 12'],
                    ['name' => 'Titanium grade 7', 'slug' => 'titanium-grade 7'],
                    ['name' => 'Titanium grade 23', 'slug' => 'titanium-grade 23'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url('/materials/Titanium/' . $grade['slug']) : '#';
                    @endphp
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ $href }}" class="text-decoration-none d-block h-100">
                            <div class="grade-card border rounded shadow-sm p-3 text-center h-100 transition"
                                style="border-color: #db7227; transition: 0.3s;">
                                <img src="https://placehold.co/300x180/db7227/fff?text={{ urlencode($grade['name']) }}"
                                    alt="{{ $grade['name'] }}" class="img-fluid rounded mb-3" style="border-radius: 8px;">
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




    <!--End breadcrumb area-->


@endsection
