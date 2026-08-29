@extends('layouts.master')

@section('title', 'Pipe Fittings Supplier UAE, Saudi | Buttweld, Socket Weld Exporter')
@section('meta_description', 'High quality pipe fittings exporter from India. Elbows, bends, reducers, and olets available in stainless steel, carbon, and alloy steel.')
@section('meta_keywords', 'Pipe fittings, elbows, bends, reducers, olets, buttweld fittings, socket weld fittings')
@section('og_image', asset('assets/images/product/flangs/Pipe-Fittings.webp'))
@section('og_type', 'article')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/Pipe-Fittings.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Pipe Fittings Supplier & Exporter</h1>
                    <!-- Short Introduction -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        We offer a comprehensive range of pipe fittings including elbows, bends, reducers, and olets in various grades to meet your industrial piping requirements.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!--Start product area-->
    <section class="sec-padd-top sec-padd-bottom bg-white" id="types">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Types of Pipe Fittings</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/pipe-fittings/elbows') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/product/flangs/90-degree-elbows_11zon.jpeg') }}"
                                alt="Elbows" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Elbows
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/pipe-fittings/bends') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/product/flangs/u-bends_11zon.jpg') }}"
                                alt="Bends" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Bends
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/pipe-fittings/reducers') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/product/flangs/concentric-reducers_11zon.jpg') }}"
                                alt="Reducers" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Reducers
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/pipe-fittings/olets') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/product/flangs/weldolets_11zon.jpg') }}"
                                alt="Olets" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Olets
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection