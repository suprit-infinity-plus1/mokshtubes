@extends('layouts.master')

@section('title', 'Tantalum | Superior Corrosion & Heat Resistance')
@section('meta_description',
    'Tantalum offers exceptional corrosion resistance, high melting point & durability for
    chemical, electronics, aerospace & industrial applications.')
@section('meta_keywords',
    'Tantalum, corrosion resistant metal, heat resistant metal, high melting point metal, chemical
    industry metal, electronics metal, aerospace metal, durable Tantalum')
@section('og_image',
    asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-tantalum.webp'))
@section('og_type', 'article')
@section('content')
<section class="breadcrumb-area"
        style="background-image: url(/assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-tantalum.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Tantalum Alloy <br> Corrosion & Heat Resistant Metal</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Tantalum Alloy is a high-performance metal known for its exceptional resistance to corrosion and
                        excellent stability at elevated temperatures. It offers outstanding chemical inertness, good
                        ductility, and reliable mechanical strength, making it ideal for chemical processing equipment, heat
                        exchangers, aerospace components, and demanding industrial applications where durability in extreme
                        environments is required.
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
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Tantalum
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-tantalum.webp') }}"
                        alt="Tantalum" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a reliable manufacturer,
                            supplier, exporter, importer, and stockist of premium-grade<strong class="text-black"> Tantalum
                                products</strong> including Tantalum
                            <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Sheets & Plates, Rods & Bars,
                            Wire, Foil, Crucibles, Fasteners, and Custom
                            Fabricated Products for critical applications.
                        </p>
                        <p> <strong class="text-black">Tantalum</strong> is a rare, ductile, and highly corrosion-resistant
                            metal with excellent biocompatibility and high melting point. It is highly resistant to most
                            acids (including aqua regia), making it a prime material for demanding chemical processing and
                            high-temperature applications.<a href="{{ route('materials.hard-To-Find-Special-Alloys') }}">
                                Tantalum</a> maintains its
                            mechanical strength at elevated
                            temperatures and offers excellent workability in various forms.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hard To Find Special Alloy Tantalum Datasheet</h3>
            <p class="mb-3">
                Get the complete Hard To Find Special Alloy Tantalum datasheet with chemical composition,
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

{{-- 
<section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Material Summary – Tantalum (Ta)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td>Tantalum (Ta)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Atomic Number</td>
                                    <td>73</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Purity</td>
                                    <td>≥ 99.95%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>16.69 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2996 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Excellent (including aqua regia)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Biocompatibility</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Property</td>
                                    <td>Non-Magnetic</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Stability</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Workability</td>
                                    <td>Good (annealed condition)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}

<section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of Tantalum (99.95% min)</h2>
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
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tantalum (Ta)</td>
                                    <td>99.95 min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Niobium (Nb)</td>
                                    <td>0.01 – 0.10 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>0.01 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium (Ti)</td>
                                    <td>0.01 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tungsten (W)</td>
                                    <td>0.05 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.005 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxygen (O)</td>
                                    <td>0.015 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen (N)</td>
                                    <td>0.01 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.01 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hydrogen (H)</td>
                                    <td>0.001 max</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- 
<section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">
                    Physical Properties of Tantalum
                </h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Imperial Units</th>
                            <th>Metric Units</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Density</td>
                            <td>0.311 lb/in³</td>
                            <td>16.69 g/cm³</td>
                        </tr>
                        <tr class="t-row">
                            <td>Melting Point</td>
                            <td>5425 °F</td>
                            <td>2996 °C</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elastic Modulus (Tension)</td>
                            <td>15 × 10³ ksi</td>
                            <td>103 GPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elastic Modulus (Compression)</td>
                            <td>15 × 10³ ksi</td>
                            <td>103 GPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elastic Modulus (Torsion)</td>
                            <td>6 × 10³ ksi</td>
                            <td>41 GPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Poisson’s Ratio</td>
                            <td>0.34</td>
                            <td>—</td>
                        </tr>
                        <tr class="t-row">
                            <td>Curie Temperature</td>
                            <td>Not applicable</td>
                            <td>Not applicable</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Heat Treatment -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color:#db7227;">
                        Heat Treatment & Fabrication of Tantalum
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature Range</th>
                                    <th>Purpose</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>900 – 1200 °C</td>
                                    <td>Restore ductility</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>600 – 800 °C</td>
                                    <td>Reduce residual stress</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Working</td>
                                    <td>—</td>
                                    <td>Increase strength</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Welding</td>
                                    <td>—</td>
                                    <td>TIG / EB welding preferred</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Machining</td>
                                    <td>—</td>
                                    <td>Carbide tools recommended</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            ✔ Tantalum cannot be hardened by heat treatment; properties are controlled via cold work and
                            annealing.
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
                <h2 class="fw-bold" style="color:#174268;">
                    Mechanical Properties of Tantalum (Annealed)
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Annealed</th>
                            <th>Cold-Drawn</th>
                            <th>Sheet</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength</td>
                            <td>276 – 414 MPa</td>
                            <td>517 – 690 MPa</td>
                            <td>276 – 414 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>138 – 276 MPa</td>
                            <td>345 – 552 MPa</td>
                            <td>172 – 310 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>30 – 50%</td>
                            <td>10 – 25%</td>
                            <td>30 – 50%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Brinell Hardness</td>
                            <td>90 – 120</td>
                            <td>140 – 180</td>
                            <td>90 – 120</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>40 – 50 B</td>
                            <td>60 – 70 B</td>
                            <td>40 – 50 B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

{{-- 
<section class="sec-padd-top sec-padd-bottom bg-light" id="available-forms">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forms & Size Range – Tantalum</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product Form</th>
                            <th>Size Range</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Rods & Bars</td>
                            <td>Ø 2 – 150 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>0.05 – 40 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Foils</td>
                            <td>As thin as 0.01 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Pipes & Tubes</td>
                            <td>OD 6 – 120 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Wires</td>
                            <td>0.02 – 5 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Crucibles</td>
                            <td>Standard & custom</td>
                        </tr>
                        <tr class="t-row">
                            <td>Machined Parts</td>
                            <td>As per drawing</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
--}}

@php
        $products = [
            [
                'name' => 'Pipes',
                'route' => 'products.pipes-tubes.seamless-pipes',
                'image' => 'assets/images/all-product/seamless-pipes-10.webp',
            ],
            [
                'name' => 'Tubes',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all-product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Sheets',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
            ],
            [
                'name' => 'Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
            ],
            [
                'name' => 'Flanges',
                'route' => 'products.flanges.flanges-and-gaskets',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Bars',
                'route' => 'products.bars-rods',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
            ],
            [
                'name' => 'Fittings',
                'route' => 'products.pipe-fittings',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ]
        ];
    @endphp

<section id="products" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Tantalum</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Tantalum</strong> is commonly supplied as:
                    </p>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We supply Tantalum materials in accordance with the most stringent industry standards: </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col d-flex">
                        <a href="{{ route($product['route']) }}" class="text-decoration-none w-100">
                            <div class="product-card h-100">
                                <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                    class="img-fluid w-100">
                                <h6 class="product-card-title text-center mt-0 py-4">{{ $product['name'] }}</h6>
                            </div>
                        </a>
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
                        <h5>Excellent corrosion resistance to almost all acids including aqua regia</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High melting point (over 3000°C)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Exceptional biocompatibility for medical applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Outstanding thermal and electrical conductivity</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-toxic and suitable for ultra-pure environments</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Tantalum</h2>
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
                <h2>TANTALUM PRICE PER KG (INDIA)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹18,000 – ₹45,000 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by OD, wall thickness, form, and finish)
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
                            <h2>FAQ's</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is Tantalum and where is it used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Tantalum is a highly corrosion-resistant metal with a high melting point, used in
                                    chemical processing, electronics, medical implants, aerospace, and laboratory equipment
                                    for its durability, biocompatibility, and resistance to strong acids.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which forms of Tantalum products are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Tantalum is supplied as seamless and welded pipes, tubes, sheets, plates, coils, strips,
                                    round/flat/hex/square bars, pipe fittings, flanges, fasteners, wire, foil, crucibles,
                                    and custom-fabricated components.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key advantages of Tantalum?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Tantalum offers excellent corrosion resistance to acids, high thermal and electrical
                                    conductivity, exceptional biocompatibility, non toxicity, and suitability for ultra-pure
                                    environments, while maintaining strength at high temperatures.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In which industries is Tantalum commonly applied?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Tantalum is widely used in chemical processing equipment, electronics and semiconductor
                                    components, medical devices, aerospace and defense, and laboratory equipment due to its
                                    chemical and thermal stability.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS for Tantalum alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We provide high-purity Tantalum in various grades, precision manufacturing, in-house
                                    quality testing, fast turnaround, custom solutions, global logistics, and reliable
                                    documentation, trusted by chemical, aerospace, and electronics industries worldwide.
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

<section id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Contact <strong>Moksh Tubes & Fittings LLP</strong> — for quotes, technical queries, and bulk orders.
                    We are your one-stop solution for rare metals and corrosion-resistant alloys.

                </p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

    <!-- Extra Sections (Commented Out) -->
{{-- datasheet --}}

{{-- 
<section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades – Tantalum</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>B365, B521, B708, B775</td>
                        </tr>
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>R05200, R05400</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>3.7103</td>
                        </tr>
                        <tr class="t-row">
                            <td>AMS</td>
                            <td>AMS 7850</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM Medical</td>
                            <td>ASTM F560</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>ISO 9001</td>
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
                "name": "What is Tantalum and where is it used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tantalum is a highly corrosion-resistant metal with a high melting point, used in chemical processing, electronics, medical implants, aerospace, and laboratory equipment for its durability, biocompatibility, and resistance to strong acids."
                }
                },
                {
                "@type": "Question",
                "name": "Which forms of Tantalum products are available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tantalum is supplied as seamless and welded pipes, tubes, sheets, plates, coils, strips, round/flat/hex/square bars, pipe fittings, flanges, fasteners, wire, foil, crucibles, and custom-fabricated components."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key advantages of Tantalum?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tantalum offers excellent corrosion resistance to acids, high thermal and electrical conductivity, exceptional biocompatibility, non toxicity, and suitability for ultra-pure environments, while maintaining strength at high temperatures."
                }
                },
                {
                "@type": "Question",
                "name": "In which industries is Tantalum commonly applied?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tantalum is widely used in chemical processing equipment, electronics and semiconductor components, medical devices, aerospace and defense, and laboratory equipment due to its chemical and thermal stability."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS for Tantalum alloys?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide high-purity Tantalum in various grades, precision manufacturing, in-house quality testing, fast turnaround, custom solutions, global logistics, and reliable documentation, trusted by chemical, aerospace, and electronics industries worldwide."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection


