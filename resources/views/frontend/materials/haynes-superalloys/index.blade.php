@extends('layouts.master')
@section('title', 'Haynes Superalloys: 188, 230, 242, 160 | MokshTubes')
@section('meta_description', 'Browse Haynes superalloys 188, 230, 242, and 160 at MokshTubes, offering exceptional strength, oxidation resistance, and long-term performance in extreme conditions.')


@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Haynes Superalloys</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Haynes Superalloys Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Haynes Superalloys family.</p>
            </div>

            @php
                $grades = [
                    [
                        'name' => 'haynes-superalloys 160',
                        'slug' => 'haynes-superalloys-160',
                        'image' => 'assets/images/haynes /haynes-alloy-160.webp',
                    ],
                    [
                        'name' => 'haynes-superalloys 188',
                        'slug' => 'haynes-superalloys-188',
                        'image' => 'assets/images/haynes /haynes-alloy-188.webp',
                    ],
                    [
                        'name' => 'haynes-superalloys 230',
                        'slug' => 'haynes-superalloys-230',
                        'image' => 'assets/images/haynes /haynes-230.webp',
                    ],
                    [
                        'name' => 'haynes-superalloys 242',
                        'slug' => 'haynes-superalloys-242',
                        'image' => 'assets/images/haynes /haynes- 242.webp',
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url('/materials/haynes-superalloys/' . $grade['slug']) : '#';
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




    <!--End breadcrumb area-->


@endsection
