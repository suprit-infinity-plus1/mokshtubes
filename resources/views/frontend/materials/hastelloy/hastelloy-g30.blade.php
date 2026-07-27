@extends('layouts.master')

@section('title', 'Hastelloy G30 | Superior Oxidation Resistance')
@section('meta_description',
    'Hastelloy G30 pipes, tubes & fittings offer exceptional resistance to nitric, phosphoric,
    and sulfuric acids, ideal for harsh chemical processing.')
@section('meta_keywords',
    'Hastelloy G30, Oxidation Resistant Alloy, Hastelloy G30 Pipes, Hastelloy G30 Tubes, Hastelloy
    G30 Fittings, Chemical Processing Alloys, Acid Resistant Alloy, Industrial Corrosion Resistant Alloys')
@section('og_image', asset('assets/images/hastelloy/Hastelloy-G30.webp'))
@section('og_type', 'article')
@section('content')
<section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/Hastelloy-G30.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy G30 Alloy <br> Superior Oxidation Resistant Nickel Alloy</h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Hastelloy G-30 (UNS N06030) is an advanced corrosion-resistant alloy engineered for superior
                        performance in strong oxidizing acid environments such as nitric, phosphoric, and sulfuric acids.
                        This page provides the complete technical datasheet including composition, specifications,
                        properties, applications, advantages, and more.</p>
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
                Introduction To Hastelloy G30 Alloy / UNS R60702
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/zirconium/zirconium-702.webp') }}" alt="Hastelloy G30 Alloy"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> proudly manufactures, supplies,
                            exports, imports, and stocks a wide range of<strong class="text-black"> Hastelloy G30 Alloy (UNS
                                R60702) <a href="{{ route('products') }}">products</a></strong>. Our offerings
                            include Pipes & Tubes, Fittings, Flanges, Fasteners, Sheets, Plates, Coils, Wires, Bars, Welding
                            Rods, and Custom-Engineered Components—all tailored to meet the needs of demanding industries.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.zirconium') }}">Hastelloy
                                    702</a></strong class="text-black"> is a commercially pure
                            zirconium alloy known for its exceptional corrosion resistance, particularly in aggressive
                            chemical environments like strong acids and alkalis. With excellent weldability, ductility, and
                            mechanical strength, it’s a go-to material for applications that require purity, performance,
                            and longevity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-bottom bg-light">
            <div class="datasheet-download px-4 text-center">
                <h3 class="mb-3" style="color:#174268;">Download Hastelloy G30 Datasheet</h3>
                <p class="mb-3">
                    Get the complete Hastelloy G30 datasheet with chemical composition,
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
                    <h2>Stainless Steel 410 Specifications (UNS S41000)</h2>
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
                                        <td>Material Type</td>
                                        <td>Martensitic Stainless Steel</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>UNS Designation</td>
                                        <td>S41000</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>AISI</td>
                                        <td>410</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Chromium Content</td>
                                        <td>11.5 – 13.5 %</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Carbon Level</td>
                                        <td>Low to Medium</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Heat Treatable</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Maximum Hardness</td>
                                        <td>Up to ~45 HRC</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Corrosion Resistance</td>
                                        <td>Moderate</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Magnetic Property</td>
                                        <td>Magnetic</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Typical Density</td>
                                        <td>7.75 g/cm³</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p class="mt-3 text-center">
                                The chromium content provides corrosion resistance, while carbon enables hardening through
                                heat treatment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section id="composition" class="sec-padd-top sec-padd-bottom">
            <div class="container">
                <div class="section-title center">
                    <h2>Chemical Composition of Stainless Steel 410</h2>
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
                                        <td>Carbon (C)</td>
                                        <td>0.08 – 0.15</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Chromium (Cr)</td>
                                        <td>11.5 – 13.5</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Manganese (Mn)</td>
                                        <td>1.00 max</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Silicon (Si)</td>
                                        <td>1.00 max</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Phosphorus (P)</td>
                                        <td>0.040 max</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Sulfur (S)</td>
                                        <td>0.030 max</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Nickel (Ni)</td>
                                        <td>0.75 max</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Iron (Fe)</td>
                                        <td>Balance</td>
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
                        Physical Properties of Stainless Steel 410
                    </h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark text-center">
                                    <tr class="t-row">
                                        <th>Property</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr class="t-row">
                                        <td>Density</td>
                                        <td>7.75 g/cm³</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Melting Point</td>
                                        <td>1480 – 1530 °C</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Modulus of Elasticity</td>
                                        <td>200 GPa</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Thermal Conductivity</td>
                                        <td>24.9 W/m·K (100 °C)</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Electrical Resistivity</td>
                                        <td>0.55 µΩ·m</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Magnetic Properties</td>
                                        <td>Magnetic (Martensitic)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Heat Treatment -->
                <div class="row justify-content-center mt-5" id="heat-treatment">
                    <div class="col-lg-8">
                        <h4 class="text-center mb-3" style="color:#db7227;">
                            Heat Treatment of Stainless Steel 410
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
                                        <td>815 – 900 °C</td>
                                        <td>Improves machinability</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Hardening (Austenitizing)</td>
                                        <td>925 – 1010 °C</td>
                                        <td>Martensitic transformation</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Quenching</td>
                                        <td>Oil / Air</td>
                                        <td>Achieves hardness</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Tempering</td>
                                        <td>150 – 370 °C</td>
                                        <td>Balances strength and toughness</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Stress Relieving</td>
                                        <td>600 – 650 °C</td>
                                        <td>Reduces residual stresses</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p class="mt-3 text-center">
                                Proper quenching and tempering provide the best strength–toughness balance.
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
                        Mechanical Properties of Stainless Steel 410
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
                        <tbody class="text-center">
                            <tr class="t-row">
                                <td>Tensile Strength (Annealed)</td>
                                <td>450 – 650 MPa</td>
                                <td>65,000 – 95,000 psi</td>
                            </tr>
                            <tr class="t-row">
                                <td>Yield Strength (0.2%)</td>
                                <td>275 MPa</td>
                                <td>40,000 psi</td>
                            </tr>
                            <tr class="t-row">
                                <td>Elongation</td>
                                <td>20%</td>
                                <td>20%</td>
                            </tr>
                            <tr class="t-row">
                                <td>Hardness (Annealed)</td>
                                <td>170 – 200 HB</td>
                                <td>170 – 200 HB</td>
                            </tr>
                            <tr class="t-row">
                                <td>Hardness (Hardened)</td>
                                <td>35 – 45 HRC</td>
                                <td>35 – 45 HRC</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

{{-- 
<section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – Hastelloy G30 Alloy</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="text-center mb-3">
                        We supply Hastelloy G30 Alloy in the following product forms:
                    </p>
                    <ul class="list-unstyled text-center">
                        <li>✔ Seamless & Welded Pipes</li>
                        <li>✔ Capillary & Boiler Tubes</li>
                        <li>✔ Sheets, Plates & Coils</li>
                        <li>✔ Strips & Foils</li>
                        <li>✔ Round / Flat / Hex Bars</li>
                        <li>✔ Wire & Welding Rods</li>
                        <li>✔ Pipe Fittings & Flanges (All ASME Types)</li>
                        <li>✔ Fasteners & CNC-Machined Components</li>
                    </ul>
                    <p class="text-center mt-3">
                        All materials comply with ASTM B551 / B523 / B658 / B493 / B550.
                    </p>
                </div>
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
                    <h2>Products in Hastelloy G30</h2>
                </div>

                <!-- Highlighted Paragraph -->
                <div class="row justify-content-center mb-4" style="text-align: justify;">
                    <div class="col-lg-10">
                        <p class="fs-6">
                            <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, with a proven track record in
                            corrosion-resistant alloys,delivers reliable ALLOY G-30 components used in harsh chemical
                            environments where superior resistance to oxidizing media is crucial. G-30 is especially valued
                            for
                            maintaining structural integrity under mixed acid conditions.
                        </p>
                    </div>
                </div>

                <!-- Emphasized Line -->
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-10">
                        <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                            We offer Hastelloy G30 in a wide range of product forms, including:
                        </p>
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
                            <h5>Outstanding resistance to nitric, phosphoric, and sulfuric acid</h5>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                            <h5>Enhanced protection against oxidizing chlorides and mixed acid solutions</h5>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                            <h5>Excellent intergranular corrosion resistance post-welding</h5>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                            <h5>Reliable mechanical properties in aggressive chemical environments</h5>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                            <h5>Good fabricability and formability</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                            <h5>Long-term service life in corrosion-prone sectors</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section id="applications" class="sec-padd-top sec-padd-bottom">
            <div class="container">
                <div class="section-title center">
                    <h2>Applications of Hastelloy G30</h2>
                    <p class="text-center pb-3"><strong class="text-dark">HASTELLOY G-30</strong> is ideally suited for
                        industrial applications involving strong oxidizing acids and multi-component chemical streams.
                        Typical
                        uses include:
                    </p>
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
                <h2> Hastelloy G-30 Price in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹2,400 – ₹5,200 per kg
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
                                    <h4>What is Hastelloy G-30 and why is it important in industrial use?</h4>
                                </div>
                                <div class="accord-content">
                                    <p>
                                        Hastelloy G-30 (UNS N06030) is a nickel-chromium-iron alloy with significant
                                        additions
                                        of cobalt, molybdenum, and copper, designed for superior resistance to strongly
                                        oxidizing acid environments such as nitric and phosphoric acid. It offers better
                                        performance than Alloy G-3 in highly oxidizing conditions and maintains excellent
                                        resistance to intergranular corrosion even after welding, making it a critical
                                        material
                                        for industries dealing with aggressive chemical environments.
                                    </p>
                                </div>
                            </div>

                            <!-- Q2 -->
                            <div class="accordion accordion-block">
                                <div class="accord-btn">
                                    <h4>What are the main properties of Hastelloy G-30?</h4>
                                </div>
                                <div class="accord-content">
                                    <p>
                                        Hastelloy G-30 combines outstanding corrosion resistance with reliable mechanical
                                        stability. It has a density of 8.22 g/cm³, a melting point of 1330–1380°C, tensile
                                        strength of 100,000 psi, yield strength of 45,000 psi, and elongation of 40%. The
                                        alloy
                                        provides superior protection against nitric, sulfuric, and phosphoric acids,
                                        oxidizing
                                        chlorides, and mixed acid environments while retaining good formability and
                                        weldability
                                        for complex industrial applications.
                                    </p>
                                </div>
                            </div>

                            <!-- Q3 -->
                            <div class="accordion accordion-block">
                                <div class="accord-btn">
                                    <h4>Which industries commonly use Hastelloy G-30 products?</h4>
                                </div>
                                <div class="accord-content">
                                    <p>
                                        Hastelloy G-30 is widely used in fertilizer production, where it resists corrosion
                                        from
                                        phosphoric acid, as well as in chemical processing plants handling aggressive acid
                                        mixtures. It is also applied in pickling equipment, pollution control systems such
                                        as
                                        scrubbers and absorber towers, pulp and paper bleaching units, food and beverage
                                        facilities requiring chemical cleaning resistance, and wastewater treatment plants
                                        exposed to acid laden effluents.
                                    </p>
                                </div>
                            </div>

                            <!-- Q4 -->
                            <div class="accordion accordion-block">
                                <div class="accord-btn">
                                    <h4>What types of Hastelloy G-30 products are available from MOKSH TUBES & FITTINGS LLP?
                                    </h4>
                                </div>
                                <div class="accord-content">
                                    <p>
                                        MOKSH TUBES & FITTINGS LLP manufactures and supplies a wide range of Hastelloy G-30
                                        products including seamless and welded pipes, tubes, sheets, plates, coils, flanges,
                                        fittings, fasteners, round bars, wire mesh, welding rods, and custom-fabricated
                                        components. Each product is engineered to international quality standards to deliver
                                        long-term durability and performance in aggressive chemical environments.
                                    </p>
                                </div>
                            </div>

                            <!-- Q5 -->
                            <div class="accordion accordion-block">
                                <div class="accord-btn">
                                    <h4>Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy G-30 materials?</h4>
                                </div>
                                <div class="accord-content">
                                    <p>
                                        MOKSH TUBES & FITTINGS LLP is a trusted supplier of corrosion-resistant alloys with
                                        a
                                        deep inventory, global shipping capabilities, and expertise in precision
                                        engineering.
                                        The company adheres to ASTM and ASME standards, offers custom cut sizes and
                                        fabrications, and ensures reliable delivery of high-quality Hastelloy G-30 products,
                                        backed by responsive customer service and a strong commitment to client
                                        satisfaction.
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
                                        <img src="{{ asset('storage/' . $blog->cover_image) }}"
                                            alt="{{ $blog->title }}" loading="lazy">
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
                        <strong>Moksh Tubes & Fittings LLP</strong> your reliable source for
                        <strong>HASTELLOY G-30</strong> products built for demanding chemical environments and long-term
                        durability.
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
                    <h2>International Standards & Equivalent Grades</h2>
                </div>

                <div class="table-responsive col-lg-8 mx-auto">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark text-center">
                            <tr class="t-row">
                                <th>Standard</th>
                                <th>Equivalent Grade</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="t-row">
                                <td>UNS</td>
                                <td>S41000</td>
                            </tr>
                            <tr class="t-row">
                                <td>AISI</td>
                                <td>410</td>
                            </tr>
                            <tr class="t-row">
                                <td>EN</td>
                                <td>1.4006</td>
                            </tr>
                            <tr class="t-row">
                                <td>DIN</td>
                                <td>X12Cr13</td>
                            </tr>
                            <tr class="t-row">
                                <td>ASTM</td>
                                <td>A240, A276, A479</td>
                            </tr>
                            <tr class="t-row">
                                <td>JIS</td>
                                <td>SUS 410</td>
                            </tr>
                            <tr class="t-row">
                                <td>ISO</td>
                                <td>X12Cr13</td>
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
                "name": "What is Hastelloy G-30 and why is it important in industrial use?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy G-30 (UNS N06030) is a nickel-chromium-iron alloy with significant additions of cobalt, molybdenum, and copper, designed for superior resistance to strongly oxidizing acid environments such as nitric and phosphoric acid. It offers better performance than Alloy G-3 in highly oxidizing conditions and maintains excellent resistance to intergranular corrosion even after welding, making it a critical material for industries dealing with aggressive chemical environments."
                }
                },
                {
                "@type": "Question",
                "name": "What are the main properties of Hastelloy G-30?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy G-30 combines outstanding corrosion resistance with reliable mechanical stability. It has a density of 8.22 g/cm³, a melting point of 1330–1380°C, tensile strength of 100,000 psi, yield strength of 45,000 psi, and elongation of 40%. The alloy provides superior protection against nitric, sulfuric, and phosphoric acids, oxidizing chlorides, and mixed acid environments while retaining good formability and weldability for complex industrial applications."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries commonly use Hastelloy G-30 products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy G-30 is widely used in fertilizer production, where it resists corrosion from phosphoric acid, as well as in chemical processing plants handling aggressive acid mixtures. It is also applied in pickling equipment, pollution control systems such as scrubbers and absorber towers, pulp and paper bleaching units, food and beverage facilities requiring chemical cleaning resistance, and wastewater treatment plants exposed to acid laden effluents."
                }
                },
                {
                "@type": "Question",
                "name": "What types of Hastelloy G-30 products are available from MOKSH TUBES & FITTINGS LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP manufactures and supplies a wide range of Hastelloy G-30 products including seamless and welded pipes, tubes, sheets, plates, coils, flanges, fittings, fasteners, round bars, wire mesh, welding rods, and custom-fabricated components. Each product is engineered to international quality standards to deliver long-term durability and performance in aggressive chemical environments."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy G-30 materials?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted supplier of corrosion-resistant alloys with a deep inventory, global shipping capabilities, and expertise in precision engineering. The company adheres to ASTM and ASME standards, offers custom cut sizes and fabrications, and ensures reliable delivery of high-quality Hastelloy G-30 products, backed by responsive customer service and a strong commitment to client satisfaction."
                }
                }
            ]
            }
        @endverbatim
    </script>
    @endsection


