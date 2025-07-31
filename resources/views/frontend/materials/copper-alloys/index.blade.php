@extends('layouts.master')
@section('title', 'Copper Alloys | CU-NI, Brass, Bronze, Beryllium Copper | Mokshtubes')
@section('meta_description',
    'Find high-conductivity and corrosion-resistant copper-based alloys including 70/30 Cu-Ni, Brass, Aluminium Bronze, and C63000.')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Alloys</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Copper Alloys</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Copper Alloys family.</p>
            </div>

            @php
                $grades = [
                    ['name' => 'Copper Alloys Aluminium Bronze', 'slug' => 'copper-alloys-aluminium-bronze'],
                    ['name' => 'Copper Alloys Beryllium Copper', 'slug' => 'copper-alloys-beryllium-copper'],
                    ['name' => 'Copper Alloys C44300', 'slug' => 'copper-alloys-c44300'],
                    ['name' => 'Copper Alloys C46400', 'slug' => 'copper-alloys-c46400'],
                    ['name' => 'Copper Alloys C63000', 'slug' => 'copper-alloys-c63000'],
                    ['name' => 'Copper Alloys C71500', 'slug' => 'copper-alloys-c71500'],
                    ['name' => 'Copper Alloys C71520', 'slug' => 'copper-alloys-c71520'],
                    ['name' => 'Copper Alloys Cartridge Brass', 'slug' => 'copper-alloys-cartridge-brass'],
                    ['name' => 'Copper Alloys Cu Ni 70_30', 'slug' => 'copper-alloys-cu-ni-70_30'],
                    ['name' => 'Copper Alloys Cu Ni-90_10', 'slug' => 'copper-alloys-cu-ni-90_10'],
                    ['name' => 'Copper Alloys Ec Copper', 'slug' => 'copper-alloys-ec-copper'],
                    ['name' => 'Copper Alloys Etp Copper', 'slug' => 'copper-alloys-etp-copper'],
                    ['name' => 'Copper Alloys Navel Brass', 'slug' => 'copper-alloys-navel-brass'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($grades as $grade)
                    @php
                        $href = $grade['slug'] !== '#' ? url('/materials/copper-alloys/' . $grade['slug']) : '#';
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
