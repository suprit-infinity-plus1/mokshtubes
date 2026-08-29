@extends('layouts.master')

@section('title', 'Flanges Supplier UAE, Saudi | Slip On, Weld Neck, Blind Exporter')
@section('meta_description', 'High quality industrial flanges exporter. Slip on, weld neck, blind, socket weld, lap joint, and threaded flanges in stainless steel, carbon, and alloy steel.')
@section('meta_keywords', 'Flanges, Slip On Flange, Weld Neck Flange, Blind Flange, Socket Weld Flange, Lap Joint Flange, Threaded Flange')
@section('og_image', asset('assets/images/product/flangs/Flanges-&-Pipe-Fittings.webp'))
@section('og_type', 'article')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/Flanges-&-Pipe-Fittings.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Industrial Flanges Supplier & Exporter</h1>
                    <!-- Short Introduction -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        We supply top-quality industrial flanges designed to connect pipes, valves, pumps, and other equipment safely and efficiently.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!--Start product area-->
    <section class="sec-padd-top sec-padd-bottom bg-white" id="types">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Types of Flanges</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/flanges/slip-on-flanges') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/sorf-flanges_11zon.jpg') }}"
                                alt="Slip On Flanges" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Slip On Flanges
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/flanges/weld-neck-flanges') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/WNRF-Flanges_11zon.jpg') }}"
                                alt="Weld Neck Flanges" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Weld Neck Flanges
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/flanges/blind-flanges') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/blind-flanges_11zon.jpg') }}"
                                alt="Blind Flanges" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Blind Flanges
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/flanges/socket-weld-flanges') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/sorf-flanges_11zon.jpg') }}"
                                alt="Socket Weld Flanges" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Socket Weld Flanges
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/flanges/lap-joint-flanges') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/ljff-flanges_11zon.jpeg') }}"
                                alt="Lap Joint Flanges" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Lap Joint Flanges
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/flanges/threaded-flanges') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/sorf-flanges_11zon.jpg') }}"
                                alt="Threaded Flanges" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Threaded Flanges
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ url('products/flanges/spectacle-blind-flanges') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/blind-flanges_11zon.jpg') }}"
                                alt="Spectacle Blind Flanges" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Spectacle Blind Flanges
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection