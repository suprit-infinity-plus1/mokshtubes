@extends('layouts.master')
@section('title', 'Austenitic Stainless Steels | 304, 316, 310, 321 Grades | Mokshtubes')
@section('meta_description',
    'A complete range of Austenitic Stainless Steel grades offering excellent formability, corrosion resistance, and
    weldability for industrial applications.')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Austenitic Stainless Steel</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Austenitic Stainless Steel Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Austenitic Stainless Steel family.</p>
            </div>

            @php
                $grades = [
                    ['name' => 'Austenitic Stainless Steel 304', 'slug' => 'austenitic-stainless-steel-304'],
                    ['name' => 'Austenitic Stainless Steel 309', 'slug' => 'austenitic-stainless-steel-309'],
                    ['name' => 'Austenitic Stainless Steel 310', 'slug' => 'austenitic-stainless-steel-310'],
                    ['name' => 'Austenitic Stainless Steel 316', 'slug' => 'austenitic-stainless-steel-316'],
                    ['name' => 'Austenitic Stainless Steel 316Ti', 'slug' => 'austenitic-stainless-steel-316Ti'],
                    ['name' => 'Austenitic Stainless Steel 317', 'slug' => 'austenitic-stainless-steel-317'],
                    ['name' => 'Austenitic Stainless Steel 321', 'slug' => 'austenitic-stainless-steel-321'],
                    ['name' => 'Austenitic Stainless Steel 347', 'slug' => 'austenitic-stainless-steel-347'],
                    [
                        'name' => 'Austenitic Stainless Steel Nitronic 50',
                        'slug' => 'austenitic-stainless-steel-nitronic-50',
                    ],
                    [
                        'name' => 'Austenitic Stainless Steel Nitronic 60',
                        'slug' => 'austenitic-stainless-steel-nitronic-60',
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href =
                            $grade['slug'] !== '#'
                                ? url('/materials/austenitic-stainless-steel/' . $grade['slug'])
                                : '#';
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
