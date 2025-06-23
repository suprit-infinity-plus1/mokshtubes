@extends('layouts.master')
@section('title', 'Hastelloy | Moksh Tubes')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy</h1>
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
                <p class="text-muted fs-5">Explore all available grades in the Hastelloy family.</p>
            </div>

            @php
                $grades = [
                    ['name' => 'Hastelloy C276', 'slug' => 'hastelloy-c276'],
                    ['name' => 'Hastelloy C22', 'slug' => '#'],
                    ['name' => 'Hastelloy C4', 'slug' => '#'],
                    ['name' => 'Hastelloy B2', 'slug' => '#'],
                    ['name' => 'Hastelloy B3', 'slug' => '#'],
                    ['name' => 'Hastelloy C2000', 'slug' => '#'],
                    ['name' => 'Hastelloy G3', 'slug' => '#'],
                    ['name' => 'Hastelloy G30', 'slug' => '#'],
                    ['name' => 'Hastelloy X', 'slug' => '#'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url('/materials/hastelloy/' . $grade['slug']) : '#';
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
