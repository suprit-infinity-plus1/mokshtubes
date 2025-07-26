@extends('layouts.master')
@section('title', 'Engineering Steels | EN8, EN19, 1045, 4140 Grades | Mokshtubes')
@section('meta_description',
    'Versatile engineering steel grades for automotive, construction, and tooling applications. Includes EN series, 1045,
    4340, and more.')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Engineering Steels</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Engineering Steel Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Engineering Steel family.</p>
            </div>

            @php
                $grades = [
                    ['name' => 'Engineering Steel 1045', 'slug' => 'engineering-steels-1045'],
                    ['name' => 'Engineering Steel 1055', 'slug' => 'engineering-steels-1055'],
                    ['name' => 'Engineering Steel 4130', 'slug' => 'engineering-steels-4130'],
                    ['name' => 'Engineering Steel 4140', 'slug' => 'engineering-steels-4140'],
                    ['name' => 'Engineering Steel 4340', 'slug' => 'engineering-steels-4340'],
                    ['name' => 'Engineering Steel EN8', 'slug' => 'engineering-steels-en8'],
                    ['name' => 'Engineering Steel EN9', 'slug' => 'engineering-steels-en9'],
                    ['name' => 'Engineering Steel EN19', 'slug' => 'engineering-steels-en19'],
                    ['name' => 'Engineering Steel EN24', 'slug' => 'engineering-steels-en24'],
                    ['name' => 'Engineering Steel EN31', 'slug' => 'engineering-steels-en31'],
                    ['name' => 'Engineering Steel EN36', 'slug' => 'engineering-steels-en36'],
                    ['name' => 'Engineering Steel EN47', 'slug' => 'engineering-steels-en47'],
                    ['name' => 'Engineering Steel D2', 'slug' => 'engineering-steels-d2'],
                    ['name' => 'Engineering Steel P1', 'slug' => 'engineering-steels-p1'],
                    ['name' => 'Engineering Steel P11', 'slug' => 'engineering-steels-p11'],
                    ['name' => 'Engineering Steel P12', 'slug' => 'engineering-steels-p12'],
                    ['name' => 'Engineering Steel P22', 'slug' => 'engineering-steels-p22'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url('/materials/engineering-steels/' . $grade['slug']) : '#';
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
