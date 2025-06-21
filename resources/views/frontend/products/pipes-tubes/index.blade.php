@extends('layouts.master')
@section('title', 'Pipes & Tubes | Moksh Tubes')
@section('content')
    <!--Start breadcrumb area-->


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Pipes & Tubes</h1>
                </div>
            </div>
        </div>
    </section>


  <section class="sec-padd-top sec-padd-bottom bg-white">
    <div class="container">
        <div class="section-title center mb-5">
            <h2 class="fw-bold" style="color: #174268;">Pipe &amp; Tube Types</h2>
        </div>

        <div class="row g-4">
            @php
                $types = [
                    ['name' => 'Welded Pipes', 'slug' => 'welded-pipes'],
                    ['name' => 'Seamless Pipes', 'slug' => 'seamless-pipes'],
                    ['name' => 'Capillaries', 'slug' => 'capillaries'],
                    ['name' => 'Hollow Section Pipe', 'slug' => 'hollow-section-pipe'],
                    ['name' => 'U-Bent Tubes', 'slug' => 'u-bent-tubes'],
                    ['name' => 'Boiler & Heat Exchanger Tubes', 'slug' => 'boiler-heat-exchanger-tubes'],
                ];
            @endphp

            @foreach ($types as $type)
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ url('/products/pipes-tubes/' . $type['slug']) }}" class="text-decoration-none">
                        <div class="custom-product-card rounded overflow-hidden shadow h-100 position-relative">
                            <img src="https://placehold.co/600x350/" class="img-fluid w-100" alt="{{ $type['name'] }}">
                            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                <h5 class="text-white text-center fw-bold text-uppercase">{{ $type['name'] }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>




    <!--End breadcrumb area-->


@endsection
