@extends('layouts.master')

@section('title', 'Super Duplex Stainless Steel S32760 | Moksh Tubes LLP')

@section('meta_description',
    'Super Duplex Stainless Steel S32760 — high-strength, corrosion-resistant alloy from Moksh
    Tubes for pipes, tubes, and fittings in harsh industries.')

@section('meta_keywords',
    'Super Duplex Stainless Steel S32760, S32760 pipes, S32760 tubes, S32760 fittings,
    corrosion-resistant stainless steel, high strength super duplex steel, Mokshtubes LLP, chemical processing steel, marine
    engineering steel, oil and gas stainless steel, desalination plant steel, stainless steel plates, stainless steel
    flanges')
@section('og_image', asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp'))
@section('og_type', 'article')
@section('content')
<section class="breadcrumb-area" style="background-image: url(images/background/3.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Super Duplex Stainless Steel S32760 <br> Ultra-Corrosion-Resistant Alloy</h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        S32760 Super Duplex Stainless Steel is an ultra-corrosion-resistant alloy combining high strength
                        with exceptional resistance to pitting, crevice, and stress corrosion, ideal for chemical, offshore,
                        and industrial applications.
                    </p>
                    <!-- End extra content -->
                </div>
            </div>
        </div>
    </section>

<div class="sticky-top bg-white border-bottom material-tabs  w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#specification">Specifications</a> |
            <a href="#composition">Chemical Composition</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#price">Advantages</a> |
            <a href="#applications">Applications</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact-us">Contact Us</a>
        </div>
    </div>

<section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Super Duplex S32760 | Product Overview</h2>
            </div>

            <h3 class="h2 fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Super Duplex Stainless Steel S32760
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp') }}"
                        alt="Super Duplex Stainless Steel S32760" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black">Super Duplex Stainless Steel S32760</strong> (commonly called PREN 50
                            stainless steel) is a premium duplex stainless steel grade with superior resistance to pitting,
                            crevice corrosion, and stress corrosion cracking. It contains high chromium, molybdenum, and
                            nitrogen content, making it one of the most corrosion-resistant stainless steels available.
                        </p>

                        <p class="fs-6 text-justify" style="text-align: justify;">
                            <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a reliable supplier, exporter,
                            importer, and stockist of Super
                            Duplex Stainless Steel S32760 (UNS S32760 / ASTM A182 F55) in multiple<a
                                href="{{ route('products') }}"> product</a> forms including
                            Pipes & Tubes, Sheets, Plates, Coils, Bars, Pipe Fittings, Flanges, Fasteners, Welding Rods,
                            Wire Mesh, and custom-fabricated components.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Duplex S32760 Datasheet</h3>
            <p class="mb-3">
                Get the complete Duplex S32760 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf

                <input type="hidden" name="page_path" value="{{ $slug }}">

                <div class="row justify-content-center">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required class="form-control p-3"
                            placeholder="Enter your email address">
                    </div>

                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white"
                            style="background-color:#db7227; border-radius:8px;">
                            Get Datasheet
                        </button>
                    </div>
                </div>
            </form>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <p class="small text-muted">
                We respect your privacy. Your email will only be used to send the datasheet.
            </p>
        </div>
    </section>

<section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Duplex Stainless Steel S31803 Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Grade</td>
                                    <td>Super Duplex S32760 / UNS S32760 / ASTM A182 F55</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Super Duplex Stainless Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions</td>
                                    <td>Hot Rolled, Annealed, Cold Drawn, Solution Annealed</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>Tensile, Hardness, PMI, Impact, Corrosion Testing</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- col-lg-8 -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

<section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of Super Duplex S32760</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>24 – 26</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>6 – 7</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>3 – 5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen (N)</td>
                                    <td>0.24 – 0.32</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>≤ 2.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 1.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.030</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.020</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>≤ 0.030</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            PREN 40, confirming super duplex grade with excellent seawater corrosion resistance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- 
<section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Properties of Super Duplex S32760</h2>
            </div>
            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Super Duplex S32760
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>7.80 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1390–1450°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
                                    <td>200 GPa (29,000 ksi)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>16–19 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>500 J/kg·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Response</td>
                                    <td>Slightly Magnetic</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <p class="mt-3 text-center">
                            Duplex S31803 has double the strength of 304/316 stainless steel and significantly higher
                            pitting resistance.
                        </p> -->
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Heat Treatment of Super Duplex Stainless Steel
                        S32760</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature</th>
                                    <th>Cooling Method</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Solution Annealing</td>
                                    <td>1050–1120°C</td>
                                    <td>Water Quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving / Aging (optional)</td>
                                    <td>350–450°C</td>
                                    <td>Air Cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Machining / Post-Weld Heat Treatment</td>
                                    <td>900–950°C (local)</td>
                                    <td>Air or Controlled Cool</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            S32760 is typically used in solution-annealed condition to achieve maximum corrosion resistance
                            and mechanical properties.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}

<section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties of Super Duplex Stainless Steel S32760
                </h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Metric</th>
                            <th>Imperial</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Tensile Strength</td>
                            <td>800 – 900 MPa</td>
                            <td>116,000 – 130,500 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>550 – 700 MPa</td>
                            <td>79,800 – 101,500 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>≥ 25%</td>
                            <td>≥ 25%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness</td>
                            <td>≤ 95 HRB</td>
                            <td>≤ 95 HRB</td>
                        </tr>
                        <tr class="t-row">
                            <td>Impact Toughness</td>
                            <td>Excellent</td>
                            <td>Excellent</td>
                        </tr>
                        <tr class="t-row">
                            <td>PREN</td>
                            <td>≥ 40</td>
                            <td>≥ 40</td>
                        </tr>
                    </tbody>
                </table>
                {{-- <p class="mt-3 text-center">
                    After quenching & tempering, 1055 steel hardness can reach 45–55 HRC depending on cooling media.
                </p> --}}

            </div>
        </div>
    </section>

{{-- 
<section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5" id="available forms">
                <h2>Available Forms & Size Range</h2>
            </div>

            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        We supply Duplex Stainless Steel S31803 in the following product forms and dimensions:
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color:#db7227;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">✔ Seamless Pipes</li>
                            <li class="list-group-item">✔ ERW &amp; EFW Welded Pipes</li>
                            <li class="list-group-item">✔ Capillary, U-Bend &amp; Heat Exchanger Tubes</li>
                            <li class="list-group-item">✔ Sheets &amp; Plates</li>
                            <li class="list-group-item">✔ Coils &amp; Strips</li>
                            <li class="list-group-item">✔ Round, Flat, Square &amp; Hex Bars</li>
                            <li class="list-group-item">✔ Pipe Fittings (Elbows, Tees, Reducers, Stub Ends, Caps)</li>
                            <li class="list-group-item">✔ Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)</li>
                            <li class="list-group-item">✔ Fasteners (Bolts, Nuts, Washers, Studs, Screws)</li>
                            <li class="list-group-item">✔ Custom Components based on drawing</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
--}}

@php
        $products = [
            [
                'name' => 'Pipes',
                'url' => 'products/pipes-tubes/seamless-pipes',
                'image' => 'assets/images/all-product/seamless-pipes-10.webp',
            ],
            [
                'name' => 'Tubes',
                'url' => 'products/pipes-tubes/welded-pipes',
                'image' => 'assets/images/all-product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Sheets',
                'url' => 'products/sheets-plates-coils/sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
            ],
            [
                'name' => 'Plates',
                'url' => 'products/sheets-plates-coils/sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
            ],
            [
                'name' => 'Flanges',
                'url' => 'products/flanges/flanges-and-gaskets',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Bars',
                'url' => 'products/bars-rods',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
            ],
            [
                'name' => 'Fittings',
                'url' => 'products/pipe-fittings',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ]
        ];
    @endphp

<section id="products" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Super Duplex Stainless Steel S32760</h2>
            </div>
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Super Duplex Stainless Steel S32760</strong> is available in a variety of
                        mill forms:
                    </p>
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                    <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                    <span>{{ $product['name'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <h2 class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We supply Super Duplex Stainless Steel S32760 materials in accordance with the most stringent
                        industry standards:
                    </h2>
                </div>
            </div>

            <div class="row g-4">
                @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <div class="mx-auto" style="width: 100%; max-width: 300px;">
                            <a href="{{ url($product['url']) }}" class="text-decoration-none">
                                <div class="product-card h-100">
                                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                        class="img-fluid  w-100">
                                    <h6 class="product-card-title text-center mt-2 px-2">{{ $product['name'] }}</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

<section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h3>Exceptional resistance to chloride-induced stress corrosion cracking</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h3>Superior pitting and crevice corrosion resistance, especially in seawater</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrow-up-square"></i></div>
                        <h3>Excellent mechanical strength at elevated temperatures</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h3>Good weldability and formability</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h3>Long service life in harsh, aggressive environments</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

<section id="applications"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Super Duplex Stainless Steel S32760</h2>
                <p class="text-center pb-3"><strong class="text-dark">Super Duplex Stainless Steel S32760</strong> is
                    widely used across multiple industries:</p>
            </div>

                        <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Pharmaceutical</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-thermometer-half"></i></div>
                        <h5>Heat Exchangers</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Plants</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

                        <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>ISO Certified</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-check"></i></div>
                        <h5>MTC 3.1</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast Delivery</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Worldwide Export</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-cash-coin"></i></div>
                        <h5>Competitive Price</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- 
<section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Duplex Stainless Steel S31803 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹650 – ₹1,300 per kg
            </p>
            <p class="text-center mb-2">
                ( Prices vary based on size, thickness, form & order quantity.)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>
--}}

<section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ – Super Duplex Stainless Steel S32760</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is Super Duplex S32760?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    A high-performance super duplex stainless steel offering exceptional corrosion resistance & very high mechanical strength.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What makes S32760 corrosion resistant?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Its high Cr–Mo–N content results in a PREN ≥ 40, ideal for seawater & harsh chemical environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is S32760 used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Offshore oil & gas, desalination plants, chemical industry, marine engineering, and high-pressure systems.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is Super Duplex S32760 weldable?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes — with controlled heat input to maintain the duplex phase balance.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Superior quality, global delivery, precise dimensions & project-based customization.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- 
<section class="blog-section sec-padd2">
        <div class="container">
            <div class="section-title">
                <h2>blogs</h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <!-- {{ dd($blog) }} -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated">

                            <figure class="img-holder mb-0">
                                <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                    <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="{{ $blog->title }}"
                                        loading="lazy">
                                </a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                    <h5>{{ Str::limit($blog->title, 30) }}</h5>
                                </a>

                                <div class="post-meta">
                                    by {{ $blog->author ?? 'Admin' }} |
                                    {{ $blog->created_at->format('F d, Y') }}
                                </div>

                                <!--<div class="text">-->
                                <!--</div>-->
                                {!! \Str::limit(strip_tags($blog->content, '<i>'), 120) !!}

                                <div class="link">
                                    <a href="{{ route('frontend.single-blog', $blog->slug) }}" class="default_link">
                                        Read More <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
--}}

<section id="contact-us" id="contact us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For inquiries, pricing, or customized Super Duplex Stainless Steel S32760 solutions, <strong>Moksh Tubes
                        &
                        Fittings
                        LLP</strong> is your reliable partner in Super Duplex Stainless Steel S32760.</p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

    <!-- Extra Sections (Commented Out) -->
{{-- datasheet --}}

{{-- end datasheet --}}

{{-- 
<section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades</h2>
            </div>
            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>S32760</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN / DIN</td>
                            <td>1.4501</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>A182 F55, A240, A276, A479, A789, A790</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASME</td>
                            <td>SA182 F55, SA240, SA789, SA790</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>17784</td>
                        </tr>
                        <tr class="t-row">
                            <td>NACE</td>
                            <td>MR0175 / ISO 15156 (H₂S service)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
--}}

{{-- blog section start --}}

{{-- blog section end --}}

@endsection
@section('jsscripts')
    <script type="application/ld+json">
    @verbatim
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is Super Duplex S32760?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A high-performance super duplex stainless steel offering exceptional corrosion resistance & very high mechanical strength."
      }
    },
    {
      "@type": "Question",
      "name": "What makes S32760 corrosion resistant?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Its high Cr–Mo–N content results in a PREN ≥ 40, ideal for seawater & harsh chemical environments."
      }
    },
    {
      "@type": "Question",
      "name": "Where is S32760 used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Offshore oil & gas, desalination plants, chemical industry, marine engineering, and high-pressure systems."
      }
    },
    {
      "@type": "Question",
      "name": "Is Super Duplex S32760 weldable?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes — with controlled heat input to maintain the duplex phase balance."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose Moksh Tubes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Superior quality, global delivery, precise dimensions & project-based customization."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
