@extends('layouts.master')

@section('title', 'Welded Pipes Supplier UAE, Saudi | ERW EFW LSAW Exporter India')
@section('meta_description', 'Welded pipes exporter to UAE, Saudi Arabia, Qatar & Oman. ERW, EFW, LSAW, DSAW pipes in stainless steel, carbon & alloy steel. Fast delivery from India.')
@section('meta_keywords', 'Welded pipes, ERW pipes, EFW pipes, LSAW pipes, DSAW pipes, welded pipes exporter, carbon steel welded pipes, stainless steel welded pipes, ASTM welded pipes')
@section('og_image', asset('assets/images/product/welded-pipes-tubes.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/welded-pipes-tubes.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Welded Pipes & Tubes Supplier & Exporter <br> ERW / EFW / LSAW / DSAW Industrial Pipes</h1>
                    <!-- Short Introduction -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Welded Pipes & Tubes are widely used across industries due to their cost efficiency, dimensional
                        accuracy, and versatile applications. At Moksh Tubes & Fittings LLP, we are a leading supplier and
                        exporter of welded pipes in India, delivering high-quality pipes across GCC countries, Europe, and
                        global markets.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sticky Navigation -->
    <div class="sticky-top bg-white border-bottom shadow-sm">
        <div class="container text-center">
            <ul class="nav justify-content-center py-2 nav-pills custom-nav-scroll">
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#overview">Overview</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#specifications">Specifications</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#types">Types</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#size-chart">Size Chart</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#grades">Grades</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#applications">Applications</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#industries">Industries</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#manufacturing">Manufacturing</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#export">Export</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#quality">Quality</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#faq">FAQ</a></li>
            </ul>
        </div>
    </div>

    <!-- Product Overview -->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction to Welded Pipes & Tubes
            </h2>

            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/welded-pipes-tubes.webp') }}" alt="Welded Pipes"
                        class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-3 text-justify" style="text-align: justify;">
                            <strong class="text-black">Welded pipes and tubes</strong> play a critical role in modern
                            industries where strength, precision, and cost efficiency are required. Unlike
                            <a class="text-primary text-decoration-none fw-semibold" href="{{ route('products.pipes-tubes.seamless-pipes', ['country' => $country ?? 'india']) }}">seamless pipes</a>,
                            they are manufactured by rolling metal sheets or strips and welding the seam, offering a
                            versatile and cost-effective solution for a wide range of applications.
                        </p>

                        <ul class="fs-6 mb-4 list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Consistent wall thickness
                                across the length</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Better dimensional control
                                & accuracy</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Lower production cost
                                compared to seamless pipes</li>
                        </ul>

                        <p class="fs-6 mb-3 text-justify" style="text-align: justify;">
                            At <strong class="text-black">Moksh Tubes & Fittings LLP</strong>, we supply welded pipes
                            tailored for EPC projects, oil & gas, power plants, and international export requirements. Wide
                            range of alloys available including
                            <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.austenitic-stainless-Steel', ['country' => $country ?? 'india']) }}">stainless steel</a>,
                            <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.engineering-Steels', ['country' => $country ?? 'india']) }}">carbon steel</a>,
                            <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.nickel-Based-Superalloys', ['country' => $country ?? 'india']) }}">nickel alloys</a>, and
                            <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.duplex-and-super-duplex', ['country' => $country ?? 'india']) }}">duplex steel</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Key Features</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-lightning-charge-fill fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold mb-3">High Weld Integrity</h4>
                        <p class="text-muted">ERW & EFW processes ensure strong, tested weld seams with minimal failure risk.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-currency-dollar fs-1 text-success mb-3"></i>
                        <h4 class="fw-bold mb-3">Cost-Effective Solution</h4>
                        <p class="text-muted">More economical than seamless pipes while meeting the same dimensional standards.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-rulers fs-1 text-info mb-3"></i>
                        <h4 class="fw-bold mb-3">Dimensional Accuracy</h4>
                        <p class="text-muted">Uniform wall thickness and precise OD/ID tolerances across all lengths.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-arrows-fullscreen fs-1 text-warning mb-3"></i>
                        <h4 class="fw-bold mb-3">Large Diameter Availability</h4>
                        <p class="text-muted">Available in extremely large diameters not feasible in seamless production.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-collection-fill fs-1 text-secondary mb-3"></i>
                        <h4 class="fw-bold mb-3">Wide Range of Alloys</h4>
                        <p class="text-muted">
                            <a class="text-decoration-none" style="color: inherit;" href="{{ route('materials.austenitic-stainless-Steel', ['country' => $country ?? 'india']) }}">Stainless steel</a>,
                            <a class="text-decoration-none" style="color: inherit;" href="{{ route('materials.engineering-Steels', ['country' => $country ?? 'india']) }}">carbon steel</a>,
                            <a class="text-decoration-none" style="color: inherit;" href="{{ route('materials.duplex-and-super-duplex', ['country' => $country ?? 'india']) }}">duplex</a>,
                            <a class="text-decoration-none" style="color: inherit;" href="{{ route('materials.nickel-Based-Superalloys', ['country' => $country ?? 'india']) }}">nickel alloys</a> & more.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-box-seam fs-1 text-danger mb-3"></i>
                        <h4 class="fw-bold mb-3">Export-Ready Packaging</h4>
                        <p class="text-muted">Complete documentation and fast global delivery included.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specifications -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="specifications">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive shadow-sm rounded">
                        <table class="table table-bordered table-striped align-middle mb-0 bg-white">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th width="30%">Category</th>
                                    <th width="70%">Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-start fs-6">
                                <tr>
                                    <td class="fw-bold">Material</td>
                                    <td>
                                        <a class="text-primary text-decoration-none" href="{{ route('materials.austenitic-stainless-Steel', ['country' => $country ?? 'india']) }}">Stainless Steel</a>,
                                        <a class="text-primary text-decoration-none" href="{{ route('materials.engineering-Steels', ['country' => $country ?? 'india']) }}">Carbon Steel</a>,
                                        Alloy Steel,
                                        <a class="text-primary text-decoration-none" href="{{ route('materials.duplex-and-super-duplex', ['country' => $country ?? 'india']) }}">Duplex</a>,
                                        <a class="text-primary text-decoration-none" href="{{ route('materials.nickel-Based-Superalloys', ['country' => $country ?? 'india']) }}">Nickel Alloys</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Welding Type</td>
                                    <td>ERW, EFW, LSAW (DSAW), SSAW (HSAW)</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">OD Range</td>
                                    <td>6 mm to 2000 mm</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Thickness</td>
                                    <td>All standard schedules (5S to XXS)</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Length</td>
                                    <td>Up to 12 meters (custom lengths available)</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Finish</td>
                                    <td>Pickled, Polished, Galvanized, 2B, Mirror</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Forms</td>
                                    <td>Round, Square, Rectangular</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Standards</td>
                                    <td>ASTM A53, A135, A178, A214, A269, ASME, API 5L, DIN, EN</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!--Start product area-->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Welded Pipes and Tubes</h2>
            </div>

            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.ss-304-welded-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/welded/SS-304-Welded.png') }}" alt="SS-304-Welded-Pipes"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                SS 304 Welded Pipes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.ss-316-welded-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/welded/ss-316-welded-pipes.png') }}"
                                alt="SS-316-Welded-Pipes" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                SS 316 Welded Pipes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.ss-304-semi-welded-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/welded/ss-304-semi-welded-pipes.jpg') }}"
                                alt="SS-316-Welded-Pipes" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                SS 304 Semi Welded Pipes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.ss-316-semi-welded-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/welded/image.png') }}"
                                alt="SS-316-Welded-Pipes" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                SS 316 Semi Welded Pipes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.SS-304-ERW-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/all-product/ss-304-ERW-PIPES.jpg') }}"
                                alt="Boiler & Heat Exchanger Tubes" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                STAINLESS STEEL 304 ERW PIPES
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.SS-316-ERW-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-316.webp') }}"
                                alt="Boiler & Heat Exchanger Tubes" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                STAINLESS STEEL 316 ERW PIPES
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <!--Start product area-->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Welded Pipes and Tubes</h2>
            </div>

            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.ss-304-welded-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/welded/SS-304-Welded.png') }}" alt="SS-304-Welded-Pipes"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                SS 304 Welded Pipes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.ss-316-welded-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/welded/ss-316-welded-pipes.png') }}"
                                alt="SS-316-Welded-Pipes" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                SS 316 Welded Pipes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.ss-304-semi-welded-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/welded/ss-304-semi-welded-pipes.jpg') }}"
                                alt="SS-316-Welded-Pipes" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                SS 304 Semi Welded Pipes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.ss-316-semi-welded-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/welded/image.png') }}"
                                alt="SS-316-Welded-Pipes" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                SS 316 Semi Welded Pipes
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.SS-304-ERW-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/all-product/ss-304-ERW-PIPES.jpg') }}"
                                alt="Boiler & Heat Exchanger Tubes" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                STAINLESS STEEL 304 ERW PIPES
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.SS-316-ERW-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-316.webp') }}"
                                alt="Boiler & Heat Exchanger Tubes" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                STAINLESS STEEL 316 ERW PIPES
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Types of Welded Pipes -->
    <section id="types" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Types of Welded Pipes</h2>
            </div>

            <div class="row g-4 justify-content-center pt-2">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-primary">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-primary"><i class="bi bi-lightning-fill me-2"></i>ERW Pipes</h4>
                            <p class="card-text fs-6 mt-3">Electric Resistance Welded: Most common type, used for moderate-pressure fluid and gas transport lines.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-success">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-success"><i class="bi bi-fire me-2"></i>EFW Pipes</h4>
                            <p class="card-text fs-6 mt-3">Electric Fusion Welded: Suitable for thicker walls and larger diameters requiring stronger weld integrity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-warning">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-warning"><i class="bi bi-pipeline me-2"></i>LSAW / DSAW</h4>
                            <p class="card-text fs-6 mt-3">Submerged Arc Welded: Used for large diameter and thick-walled pipelines in oil & gas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-info">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-info"><i class="bi bi-water me-2"></i>SSAW / HSAW</h4>
                            <p class="card-text fs-6 mt-3">Spiral Submerged Arc Welded: Suitable for long-distance fluid transport and infrastructure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Charts Table -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Charts</h2>
            </div>

            <div class="section-title center mb-4">
                <h4 class="fw-bold" style="color: #db7227;">Welded Pipes & Tubes – Combined Weight & Size Chart</h4>
            </div>
            <p class="text-center text-muted mb-4">Weight and size charts for welded pipes can be provided upon request, customized to the required schedules.</p>

            <div class="table-responsive mb-5">
                <table class="table table-bordered table-striped text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>NB (mm)</th>
                            <th>Size (inches)</th>
                            <th>OD (mm)</th>
                            <th>Schedule 5S (Kg/m)</th>
                            <th>Schedule 10S (Kg/m)</th>
                            <th>Schedule 40S (Kg/m)</th>
                            <th>Schedule 80S (Kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>3</td><td>1/8</td><td>10.3</td><td>1.24 / 0.28</td><td>1.24 / 0.28</td><td>1.73 / 0.37</td><td>2.41 / 0.47</td></tr>
                        <tr><td>6</td><td>1/4</td><td>13.7</td><td>1.24 / 0.39</td><td>1.65 / 0.49</td><td>2.24 / 0.63</td><td>3.02 / 0.80</td></tr>
                        <tr><td>10</td><td>3/8</td><td>17.1</td><td>1.24 / 0.49</td><td>1.65 / 0.63</td><td>2.31 / 0.84</td><td>3.20 / 1.10</td></tr>
                        <tr><td>15</td><td>1/2</td><td>21.3</td><td>1.65 / 0.80</td><td>2.11 / 1.00</td><td>2.77 / 1.27</td><td>3.73 / 1.62</td></tr>
                        <tr><td>20</td><td>3/4</td><td>26.7</td><td>1.65 / 1.02</td><td>2.11 / 1.28</td><td>2.87 / 1.68</td><td>3.91 / 2.20</td></tr>
                        <tr><td>25</td><td>1</td><td>33.4</td><td>1.65 / 1.30</td><td>2.77 / 2.09</td><td>3.38 / 2.50</td><td>4.55 / 3.24</td></tr>
                        <tr><td>32</td><td>1 1/4</td><td>42.2</td><td>1.65 / 1.65</td><td>2.77 / 2.69</td><td>3.56 / 3.38</td><td>4.85 / 4.47</td></tr>
                        <tr><td>40</td><td>1 1/2</td><td>48.3</td><td>1.65 / 1.91</td><td>2.77 / 3.11</td><td>3.68 / 4.05</td><td>5.08 / 5.41</td></tr>
                        <tr><td>50</td><td>2</td><td>60.3</td><td>1.65 / 2.40</td><td>2.77 / 3.93</td><td>3.91 / 5.44</td><td>5.54 / 7.48</td></tr>
                        <tr><td>65</td><td>2 1/2</td><td>73.0</td><td>2.11 / 3.70</td><td>3.05 / 5.26</td><td>5.16 / 8.63</td><td>7.01 / 11.4</td></tr>
                        <tr><td>80</td><td>3</td><td>88.9</td><td>2.11 / 4.52</td><td>3.05 / 6.45</td><td>5.49 / 11.30</td><td>7.62 / 15.2</td></tr>
                        <tr><td>100</td><td>4</td><td>114.3</td><td>2.11 / 5.84</td><td>3.05 / 8.37</td><td>6.02 / 16.07</td><td>8.56 / 22.3</td></tr>
                        <tr><td>150</td><td>6</td><td>168.3</td><td>2.77 / 11.31</td><td>3.40 / 13.85</td><td>7.11 / 28.26</td><td>10.97 / 42.56</td></tr>
                        <tr><td>200</td><td>8</td><td>219.1</td><td>2.77 / 14.80</td><td>3.76 / 20.00</td><td>8.18 / 42.55</td><td>12.70 / 64.64</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Start Accordion Charts -->
            <div class="row justify-content-center pt-4">
                <div class="col-lg-10">
                    <h4 class="fw-bold mb-4 text-center" style="color: #174268;">
                        DETAILED SIZE CHARTS
                    </h4>
                    <div class="accordion" id="accordionSizeCharts">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5S">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5S" aria-expanded="true" aria-controls="collapse5S">Schedule 5S
                                    – Size Chart</button>
                            </h2>
                            <div id="collapse5S" class="accordion-collapse collapse show" aria-labelledby="heading5S"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>NPS</th>
                                                    <th>NB (mm)</th>
                                                    <th>OD (mm)</th>
                                                    <th>Wall (mm)</th>
                                                    <th>ID (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>1/8</td><td>3</td><td>10.3</td><td>1.24</td><td>7.8</td><td>0.276</td></tr>
                                                <tr><td>1/4</td><td>6</td><td>13.7</td><td>1.24</td><td>11.2</td><td>0.390</td></tr>
                                                <tr><td>3/8</td><td>10</td><td>17.1</td><td>1.24</td><td>14.6</td><td>0.490</td></tr>
                                                <tr><td>1/2</td><td>15</td><td>21.3</td><td>1.65</td><td>18.0</td><td>0.840</td></tr>
                                                <tr><td>3/4</td><td>20</td><td>26.7</td><td>1.65</td><td>23.4</td><td>1.030</td></tr>
                                                <tr><td>1</td><td>25</td><td>33.4</td><td>1.65</td><td>30.1</td><td>1.300</td></tr>
                                                <tr><td>1 1/4</td><td>32</td><td>42.2</td><td>1.65</td><td>38.9</td><td>1.650</td></tr>
                                                <tr><td>1 1/2</td><td>40</td><td>48.3</td><td>1.65</td><td>44.9</td><td>1.910</td></tr>
                                                <tr><td>2</td><td>50</td><td>60.3</td><td>1.65</td><td>57.0</td><td>2.400</td></tr>
                                                <tr><td>2 1/2</td><td>65</td><td>73.0</td><td>2.11</td><td>68.8</td><td>3.700</td></tr>
                                                <tr><td>3</td><td>80</td><td>88.9</td><td>2.11</td><td>84.7</td><td>4.520</td></tr>
                                                <tr><td>4</td><td>100</td><td>114.3</td><td>2.11</td><td>110.1</td><td>5.840</td></tr>
                                                <tr><td>6</td><td>150</td><td>168.3</td><td>2.77</td><td>162.8</td><td>11.310</td></tr>
                                                <tr><td>8</td><td>200</td><td>219.1</td><td>2.77</td><td>213.6</td><td>14.800</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10S">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse10S" aria-expanded="false" aria-controls="collapse10S">Schedule
                                    10S (ASME B36.19)</button>
                            </h2>
                            <div id="collapse10S" class="accordion-collapse collapse" aria-labelledby="heading10S"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>NPS</th>
                                                    <th>NB (mm)</th>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>ID (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>1/8</td><td>3</td><td>10.3</td><td>1.65</td><td>7.0</td><td>0.37</td></tr>
                                                <tr><td>1/4</td><td>6</td><td>13.7</td><td>1.65</td><td>10.4</td><td>0.52</td></tr>
                                                <tr><td>3/8</td><td>10</td><td>17.1</td><td>1.65</td><td>13.8</td><td>0.66</td></tr>
                                                <tr><td>1/2</td><td>15</td><td>21.3</td><td>1.65</td><td>18.0</td><td>0.84</td></tr>
                                                <tr><td>3/4</td><td>20</td><td>26.7</td><td>2.11</td><td>22.5</td><td>1.33</td></tr>
                                                <tr><td>1</td><td>25</td><td>33.4</td><td>2.11</td><td>29.2</td><td>1.70</td></tr>
                                                <tr><td>1 1/4</td><td>32</td><td>42.2</td><td>2.11</td><td>38.0</td><td>2.15</td></tr>
                                                <tr><td>1 1/2</td><td>40</td><td>48.3</td><td>2.11</td><td>44.0</td><td>2.51</td></tr>
                                                <tr><td>2</td><td>50</td><td>60.3</td><td>2.77</td><td>54.8</td><td>3.93</td></tr>
                                                <tr><td>2 1/2</td><td>65</td><td>73.0</td><td>3.05</td><td>67.0</td><td>5.26</td></tr>
                                                <tr><td>3</td><td>80</td><td>88.9</td><td>3.05</td><td>82.8</td><td>6.45</td></tr>
                                                <tr><td>4</td><td>100</td><td>114.3</td><td>3.05</td><td>108.2</td><td>8.37</td></tr>
                                                <tr><td>6</td><td>150</td><td>168.3</td><td>3.40</td><td>161.5</td><td>13.85</td></tr>
                                                <tr><td>8</td><td>200</td><td>219.1</td><td>3.76</td><td>211.6</td><td>20.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading40S">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse40S" aria-expanded="false" aria-controls="collapse40S">Schedule
                                    40S (ASME B36.19)</button>
                            </h2>
                            <div id="collapse40S" class="accordion-collapse collapse" aria-labelledby="heading40S"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>NPS</th>
                                                    <th>NB (mm)</th>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>ID (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>1/2</td><td>15</td><td>21.3</td><td>2.77</td><td>15.76</td><td>1.27</td></tr>
                                                <tr><td>3/4</td><td>20</td><td>26.7</td><td>2.87</td><td>20.96</td><td>1.69</td></tr>
                                                <tr><td>1</td><td>25</td><td>33.4</td><td>3.38</td><td>26.64</td><td>2.50</td></tr>
                                                <tr><td>1 1/4</td><td>32</td><td>42.2</td><td>3.56</td><td>35.08</td><td>3.39</td></tr>
                                                <tr><td>1 1/2</td><td>40</td><td>48.3</td><td>3.68</td><td>40.94</td><td>4.05</td></tr>
                                                <tr><td>2</td><td>50</td><td>60.3</td><td>3.91</td><td>52.48</td><td>5.44</td></tr>
                                                <tr><td>2 1/2</td><td>65</td><td>73.0</td><td>5.16</td><td>62.68</td><td>8.63</td></tr>
                                                <tr><td>3</td><td>80</td><td>88.9</td><td>5.49</td><td>77.92</td><td>11.29</td></tr>
                                                <tr><td>4</td><td>100</td><td>114.3</td><td>6.02</td><td>102.26</td><td>16.07</td></tr>
                                                <tr><td>6</td><td>150</td><td>168.3</td><td>7.11</td><td>154.08</td><td>28.26</td></tr>
                                                <tr><td>8</td><td>200</td><td>219.1</td><td>8.18</td><td>202.74</td><td>42.55</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading80S">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse80S" aria-expanded="false" aria-controls="collapse80S">Schedule
                                    80S (ASME B36.19)</button>
                            </h2>
                            <div id="collapse80S" class="accordion-collapse collapse" aria-labelledby="heading80S"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>NPS</th>
                                                    <th>NB (mm)</th>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>ID (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>1/2</td><td>15</td><td>21.3</td><td>3.73</td><td>13.84</td><td>1.62</td></tr>
                                                <tr><td>3/4</td><td>20</td><td>26.7</td><td>3.91</td><td>18.88</td><td>2.20</td></tr>
                                                <tr><td>1</td><td>25</td><td>33.4</td><td>4.55</td><td>24.30</td><td>3.24</td></tr>
                                                <tr><td>1 1/4</td><td>32</td><td>42.2</td><td>4.85</td><td>32.50</td><td>4.47</td></tr>
                                                <tr><td>1 1/2</td><td>40</td><td>48.3</td><td>5.08</td><td>38.14</td><td>5.41</td></tr>
                                                <tr><td>2</td><td>50</td><td>60.3</td><td>5.54</td><td>49.22</td><td>7.48</td></tr>
                                                <tr><td>2 1/2</td><td>65</td><td>73.0</td><td>7.01</td><td>58.98</td><td>11.41</td></tr>
                                                <tr><td>3</td><td>80</td><td>88.9</td><td>7.62</td><td>73.66</td><td>15.27</td></tr>
                                                <tr><td>4</td><td>100</td><td>114.3</td><td>8.56</td><td>97.18</td><td>22.32</td></tr>
                                                <tr><td>6</td><td>150</td><td>168.3</td><td>10.97</td><td>146.36</td><td>42.56</td></tr>
                                                <tr><td>8</td><td>200</td><td>219.1</td><td>12.70</td><td>193.70</td><td>64.64</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading160S">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse160S" aria-expanded="false"
                                    aria-controls="collapse160S">Schedule 160S – Size Chart</button>
                            </h2>
                            <div id="collapse160S" class="accordion-collapse collapse" aria-labelledby="heading160S"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>NPS</th>
                                                    <th>NB (mm)</th>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>ID (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>1/2</td><td>15</td><td>21.3</td><td>4.78</td><td>11.74</td><td>1.95</td></tr>
                                                <tr><td>3/4</td><td>20</td><td>26.7</td><td>5.56</td><td>15.58</td><td>3.06</td></tr>
                                                <tr><td>1</td><td>25</td><td>33.4</td><td>6.35</td><td>20.70</td><td>4.24</td></tr>
                                                <tr><td>1 1/4</td><td>32</td><td>42.2</td><td>6.35</td><td>29.50</td><td>5.61</td></tr>
                                                <tr><td>1 1/2</td><td>40</td><td>48.3</td><td>7.14</td><td>34.02</td><td>7.25</td></tr>
                                                <tr><td>2</td><td>50</td><td>60.3</td><td>8.74</td><td>42.82</td><td>11.11</td></tr>
                                                <tr><td>3</td><td>80</td><td>88.9</td><td>11.13</td><td>66.64</td><td>21.30</td></tr>
                                                <tr><td>4</td><td>100</td><td>114.3</td><td>13.49</td><td>87.32</td><td>33.54</td></tr>
                                                <tr><td>6</td><td>150</td><td>168.3</td><td>18.26</td><td>131.78</td><td>67.56</td></tr>
                                                <tr><td>8</td><td>200</td><td>219.1</td><td>23.01</td><td>173.08</td><td>111.20</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Accordion -->
        </div>
    </section>

    <!-- Grades Available -->
    <section id="grades" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Grades Available</h2>
            </div>
            <p class="fs-6 text-center mb-4">We supply welded pipes in the following grades and specifications:</p>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• 304, 304L, 316, 316L, 321, 347, 904L</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-layers"></i></div>
                        <h5>Carbon & Alloy Steel</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• ASTM A53, A106, A135, IS 2062, EN8</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box"></i></div>
                        <h5>Duplex & Super Duplex</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• 2205, S31803, 2507, S32750, S32760</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-nut"></i></div>
                        <h5>Nickel Alloys</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Inconel 600/625, Monel 400, Incoloy 825</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-heptagon-fill"></i></div>
                        <h5>Copper & Aluminium</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Cupro Nickel 70/30, 90/10, Brass</li>
                            <li>• Aluminium 6061, 6063</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Applications -->
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Applications</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Onshore & offshore pipelines</li>
                            <li>• Crude oil & gas transport</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Plants</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Boiler & heat exchanger tubes</li>
                            <li>• Steam & cooling lines</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Chemical Industry</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Acid & corrosive fluid transport</li>
                            <li>• Reactors & processing units</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building-fill"></i></div>
                        <h5>Infrastructure</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Structural frameworks</li>
                            <li>• Bridges & commercial buildings</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Water Management</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Desalination plants</li>
                            <li>• Municipal water systems</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Served -->
    <section id="industries" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Industries Served</h2>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Oil & Gas</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Power Generation</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Petrochemical</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Marine & Offshore</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Construction & Infrastructure</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Aerospace & Defense</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• HVAC & Refrigeration</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Food & Beverage</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manufacturing Process -->
    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center mb-4">
                <h2>Manufacturing Process</h2>
            </div>
            <p class="fs-6 text-center text-success fw-bold mb-4">Precision engineering at every stage of production.</p>
            <div class="row g-4 mt-3">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-1-circle-fill"></i></div>
                        <h5>Strip / Plate Slitting</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-2-circle-fill"></i></div>
                        <h5>Pipe Forming (Roll Forming)</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-3-circle-fill"></i></div>
                        <h5>ERW / EFW / LSAW Welding</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-4-circle-fill"></i></div>
                        <h5>Heat Treatment & Annealing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-5-circle-fill"></i></div>
                        <h5>Sizing & Straightening</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-6-circle-fill"></i></div>
                        <h5>Inspection & Testing</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Supply & Export Capability -->
    <section id="export" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Supply & Export Capability</h2>
            </div>
            <p class="fs-6 text-center text-muted mb-4">
                We are a trusted global supplier and exporter of welded pipes, delivering to EPC contractors, oil & gas
                projects, and international buyers across GCC and beyond.
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 bg-white rounded shadow-sm border border-light h-100">
                        <h4 class="fw-bold text-primary mb-3"><i class="bi bi-globe me-2"></i>Export Countries</h4>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> UAE</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Saudi Arabia</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Qatar</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Oman</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Kuwait</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Bahrain & Europe</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Southeast Asia & USA</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 bg-white rounded shadow-sm border border-light h-100">
                        <h4 class="fw-bold text-primary mb-3"><i class="bi bi-box-seam me-2"></i>Export Services</h4>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Export-grade packaging</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> EN 10204 3.1 certification</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Complete technical documentation</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Fast shipping & logistics support</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Bulk project supply capability</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Third-party inspection (SGS, TUV, DNV)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages & Quality Control -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-title mb-4">
                        <h2>Advantages</h2>
                    </div>
                    <ul class="fs-6 list-unstyled">
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Cost-effective alternative to seamless pipes</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> High dimensional accuracy and consistency</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Available in extremely large diameters</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Excellent corrosion resistance with right alloy</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Uniform wall thickness across the full length</li>
                    </ul>
                </div>

                <div id="quality" class="col-lg-6">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4 border-primary h-100">
                        <h3 class="fw-bold mb-4" style="color: #174268;">Testing & Quality Control</h3>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Hydrostatic testing for leak detection</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Ultrasonic testing (UT) for weld integrity</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Eddy current testing</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • X-Ray / Radiography inspection</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Tensile & hardness testing</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • PMI & spectrochemical analysis</li>
                        </ul>
                        <p class="fs-6 mt-4 fw-bold text-success"><i class="bi bi-patch-check-fill me-2"></i> EN 10204 3.1
                            certification provided.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Welded vs Seamless Comparison -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-md-10">
                    <div class="p-4 bg-light rounded shadow-sm border-start border-4 border-warning h-100">
                        <h3 class="fw-bold mb-4" style="color: #174268;">Welded vs. Seamless – Comparison</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle bg-white mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Feature</th>
                                        <th>Welded Pipes</th>
                                        <th>Seamless Pipes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td class="fw-bold">Manufacturing</td><td>Formed from strips/plates and welded</td><td>Extruded from solid billets</td></tr>
                                    <tr><td class="fw-bold">Wall Thickness</td><td>High uniformity across the length</td><td>May have slight variations</td></tr>
                                    <tr><td class="fw-bold">Cost</td><td>More economical & cost-effective</td><td>Higher due to complex process</td></tr>
                                    <tr><td class="fw-bold">Pressure Rating</td><td>Ideal for low to medium-high pressure</td><td>Suitable for ultra-high pressure</td></tr>
                                    <tr><td class="fw-bold">Size Availability</td><td>Available in extremely large diameters</td><td>Limited in very large sizes</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Moksh Tubes -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP</h2>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam-fill"></i></div>
                        <h5>200+ tons ready stock</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                        <h5>Global export expertise</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-gem"></i></div>
                        <h5>Wide alloy range (rare materials available)</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-currency-dollar"></i></div>
                        <h5>Competitive pricing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast delivery timelines</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                        <h5>Technical support for EPC projects</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--End breadcrumb area-->
<!--Start faq content area-->
<section class="faq-content-area sec-padd2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="section-title center">
                        <h2>FAQ's</h2>
                    </div>

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>
                                What are welded pipes and tubes?
                            </h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                Welded pipes and tubes are manufactured by rolling a metal plate or strip into a cylindrical shape and welding the seam.
                                They are widely used in <a href="{{ route('products.pipes-tubes.welded-pipes') }}">industrial piping systems</a>, structural applications,
                                and fluid transportation due to their strength, precision, and cost-effectiveness.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>
                                Which materials are used for manufacturing welded pipes and tubes?
                            </h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                Welded pipes and tubes are available in various materials such as Stainless Steel (304, 316, 310),
                                Carbon Steel, Alloy Steel, Duplex & Super Duplex, Copper Alloys, Titanium, and Nickel Alloys.
                                The choice depends on the required corrosion resistance, temperature, and pressure conditions.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>
                                What are the advantages of welded pipes compared to seamless pipes?
                            </h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                Welded pipes offer several advantages including uniform wall thickness, larger size availability, and lower production costs.
                                They are ideal for applications with moderate pressure and temperature requirements. 
                                Additionally, welded pipes provide excellent surface finish and dimensional accuracy.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>
                                What industries commonly use welded pipes and tubes?
                            </h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                Welded pipes and tubes are used across multiple industries including oil & gas, petrochemical, power generation,
                                water treatment, marine, construction, and food & pharmaceutical sectors. 
                                Their versatility makes them suitable for both fluid transport and structural applications.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>
                                What types of welded pipes and tubes are supplied by Moksh Tubes & Fittings LLP?
                            </h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                <b>Moksh Tubes & Fittings LLP</b> offers a comprehensive range of <a href="{{ route('products.pipes-tubes.welded-pipes') }}">welded pipes and tubes</a> such as:
                            </p>
                            <ul>
                                <li>ERW (Electric Resistance Welded) Pipes & Tubes</li>
                                <li>EFW (Electric Fusion Welded) Pipes</li>
                                <li>LSAW (Longitudinal Submerged Arc Welded) Pipes</li>
                                <li>Spiral Welded Pipes</li>
                                <li>Heat Exchanger & Condenser Tubes</li>
                                <li>Custom Fabricated Welded Tubing</li>
                            </ul>
                            <p>
                                All products are manufactured and tested according to ASTM, ASME, DIN, and EN standards.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                </div>
            </div>
        </div>
    </div>
</section>
<!--End faq content area-->
 <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For further information, quotes, or customized welded-pipes products, <strong>Moksh Tubes & Fittings
                        LLP</strong> your dependable partner in aluminum alloys.</p>
               <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection

@section('jsscripts')
    <script type="application/ld+json">
        @verbatim
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Welded Pipes",
                "description": "Welded pipes (ERW, EFW, LSAW) supplier and exporter to UAE, Saudi Arabia, Qatar and Oman",
                "brand": {
                    "@type": "Brand",
                    "name": "Moksh Tubes & Fittings LLP"
                },
                "areaServed": ["UAE","Saudi Arabia","Qatar","Oman","Kuwait"]
            }
        @endverbatim
    </script>

    <script type="application/ld+json">
        @verbatim
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "Do you supply welded pipes to UAE and Saudi Arabia?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, we export welded pipes (ERW, EFW, LSAW) to UAE, Saudi Arabia, Qatar, Oman, and Kuwait."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What is the difference between ERW and EFW pipes?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "ERW uses high-frequency electrical current to weld the seam without filler metal. EFW uses an electric arc with filler material, suited for thicker walls and higher-pressure applications."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are welded pipes used for?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Welded pipes are used in oil & gas pipelines, power plants, chemical processing, water management, structural infrastructure, and marine applications."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Do you provide ASTM certified welded pipes?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, we supply welded pipes certified to ASTM A53, A135, A178, A214, A269, and EN standards with Mill Test Certificates (MTC) as per EN 10204 3.1 or 3.2."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Can you provide custom lengths and sizes?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, Moksh Tubes & Fittings LLP provides welded pipes in custom lengths and custom OD/wall thickness combinations based on your project requirements."
                        }
                    }
                ]
            }
        @endverbatim
    </script>
@endsection
