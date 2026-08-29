@extends('layouts.master')

@section('title', 'Pipe Bends Supplier UAE, Saudi | 45 & 90 Degree Bends Exporter')
@section('meta_description', 'High quality pipe bends exporter. Available in 45 degree and 90 degree bends in stainless steel, carbon, and alloy steel.')
@section('meta_keywords', 'Pipe bends, 45 degree bend, 90 degree bend, steel bends')
@section('og_image', asset('assets/images/product/flangs/u-bends_11zon.jpg'))
@section('og_type', 'article')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/u-bends_11zon.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Pipe Bends Supplier & Exporter</h1>
                    <!-- Short Introduction -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        We supply top-quality 45-degree and 90-degree pipe bends designed to change the direction of flow in piping systems safely and efficiently.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!--Start product area-->
    <section class="sec-padd-top sec-padd-bottom bg-white" id="types">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Types of Pipe Bends</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ url('products/pipe-fittings/bends/45-degree-bend') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('/assets/images/product/flangs/45-degree-elbows_11zon.jpg') }}"
                                alt="45 Degree Bend" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                45 Degree Bend
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ url('products/pipe-fittings/bends/90-degree-bend') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('/assets/images/product/flangs/90-degree-elbows_11zon.jpeg') }}"
                                alt="90 Degree Bend" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                90 Degree Bend
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
