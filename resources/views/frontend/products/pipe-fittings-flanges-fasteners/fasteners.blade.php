@extends('layouts.master')

@section('title', 'Fasteners Supplier UAE, Saudi | Bolts, Nuts, Studs Exporter')
@section('meta_description', 'High quality industrial fasteners exporter. Hex bolts, allen bolts, studs, nuts, washers, and threaded rods in stainless steel, carbon, and alloy steel.')
@section('meta_keywords', 'Fasteners, Hex Bolts, Allen Bolts, Studs, Nuts, Washers, Threaded Rods, Socket Head Screws')
@section('og_image', asset('assets/images/product/flangs/FASTENERS.webp'))
@section('og_type', 'article')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/FASTENERS.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Industrial Fasteners Supplier & Exporter</h1>
                    <!-- Short Introduction -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        We supply top-quality industrial fasteners including bolts, nuts, studs, washers, and screws designed for high-stress applications across various industries.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!--Start product area-->
    <section class="sec-padd-top sec-padd-bottom bg-white" id="types">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Types of Fasteners</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/fasteners/hex-bolts') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('/assets/images/fasteners/hax-bolt.png') }}"
                                alt="Hex Bolts" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Hex Bolts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/fasteners/allen-bolts') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('/assets/images/product/flangs/FASTENERS.webp') }}"
                                alt="Allen Bolts" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Allen Bolts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/fasteners/studs') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/full-threaded-rods.png') }}"
                                alt="Studs" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Studs
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/fasteners/nuts') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('/assets/images/product/flangs/FASTENERS.webp') }}"
                                alt="Nuts" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Nuts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/fasteners/washers') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('/assets/images/product/flangs/FASTENERS.webp') }}"
                                alt="Washers" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Washers
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/fasteners/threaded-rods') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('/assets/images/fasteners/full-threaded-rods.png') }}"
                                alt="Threaded Rods" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Threaded Rods
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/fasteners/socket-head-screws') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/socket-head-cap-screws.jpg') }}"
                                alt="Socket Head Screws" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Socket Head Screws
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/fasteners/heavy-hex-nuts') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('/assets/images/product/flangs/FASTENERS.webp') }}"
                                alt="Heavy Hex Nuts" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Heavy Hex Nuts
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
