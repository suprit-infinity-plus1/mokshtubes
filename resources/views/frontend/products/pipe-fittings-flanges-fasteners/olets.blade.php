@extends('layouts.master')

@section('title', 'Olets Supplier UAE, Saudi | Weldolet & Sockolet Exporter')
@section('meta_description', 'High quality Olets exporter. Available in Weldolet and Sockolet types in stainless steel, carbon, and alloy steel.')
@section('meta_keywords', 'Olets, Weldolet, Sockolet, steel olets')
@section('og_image', asset('assets/images/product/flangs/weldolets_11zon.jpg'))
@section('og_type', 'article')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/weldolets_11zon.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Olets Supplier & Exporter</h1>
                    <!-- Short Introduction -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        We supply top-quality Weldolets and Sockolets designed to provide reinforced branch connections safely and efficiently.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!--Start product area-->
    <section class="sec-padd-top sec-padd-bottom bg-white" id="types">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Types of Olets</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ url('products/pipe-fittings/olets/weldolet') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/product/flangs/weldolets_11zon.jpg') }}"
                                alt="Weldolet" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Weldolet
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ url('products/pipe-fittings/olets/sockolet') }}" class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/product/flangs/sockolets_11zon.jpg') }}"
                                alt="Sockolet" class="img-fluid rounded mb-3"
                                style="border-radius: 8px; object-fit: cover; max-height: 200px; width: 100%;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Sockolet
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
