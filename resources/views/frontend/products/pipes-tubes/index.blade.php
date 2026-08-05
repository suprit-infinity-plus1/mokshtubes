@extends('layouts.master')
@section('title', 'Pipes & Tubes – Welded, Seamless, U-Bend, Boiler | Moksh Tubes') <!-- 53 characters -->
@section('meta_description',
    'Explore welded, seamless, U-bend, boiler tubes & capillaries in stainless steel and nickel
    alloys. High-quality industrial pipes & tubes supplied globally by Moksh Tubes LLP.') <!-- 153 characters -->
@section('meta_keywords',
    'Pipes, Tubes, Welded Pipes, Seamless Pipes, Capillaries, Hollow Section Pipes, U-Bent Tubes,
    Boiler Tubes, Stainless Steel Pipes, Nickel Tubes, Titanium Tubes')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/hollow-section-pipe.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Quality Industrial Pipes & Tubes</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Pipe & Tube Types</h2>
            </div>

            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/welded-pipes-tubes.webp') }}"
                                alt="Welded Pipes & Tubes (ERW & EFW)" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Welded Pipes & Tubes (ERW & EFW)
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.seamless-pipes') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/seamless-pipes.webp') }}" alt="Seamless Pipes"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Seamless Pipes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.capillaries') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/capillary-tubes.webp') }}" alt="Capillaries"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Capillaries
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.hollow-section-pipe') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/hollow-section-pipe.webp') }}"
                                alt="Hollow Section Pipe" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Hollow Section Pipe
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.u-bent-tubes') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/u-bent-tubes.webp') }}" alt="U-Bent Tubes"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                U-Bent Tubes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.boiler-heat-exchanger-tubes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/product/boiler-heat-exchanger-tubes.webp') }}"
                                alt="Boiler & Heat Exchanger Tubes" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Boiler & Heat Exchanger Tubes
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    


    <!--End breadcrumb area-->


@endsection
