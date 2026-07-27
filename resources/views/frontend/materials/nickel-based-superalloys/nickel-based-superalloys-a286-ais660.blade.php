@extends('layouts.master')

@section('title', 'Nickel A286 – High-Strength & Heat Resistant Superalloy') <!-- 53 chars -->
@section('meta_description',
    'A286 (AIS660) superalloy from Moksh Tubes — high strength, heat-resistant, reliable for
    aerospace & high-temperature industrial applications.')
@section('meta_keywords',
    'Nickel A286, AIS600 Superalloy, High Strength Nickel, Heat Resistant Alloy, Aerospace Nickel
    Alloy, Industrial Superalloy, Corrosion Resistant Nickel, High Temperature Alloy, Nickel-Based Alloy')
@section('og_image', asset('assets/images/nickel-based-superalloys/nickel-based-superalloys-A286_AIS660.webp'))
@section('og_type', 'article')
@section('content')
<section class="breadcrumb-area"
        style="background-image: url(/assets/images/nickel-based-superalloys/nickel-based-superalloys-A286_AIS660.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Nickel A286 <br> High-Strength & Heat Resistant Superalloy</h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Nickel A286 is a precipitation-hardenable Fe–Ni–Cr alloy designed for high strength, oxidation
                        resistance, and corrosion resistance at elevated temperatures up to 704 °C (1300 °F).
                        Below is the complete datasheet in the master blade format including chemical composition,
                        properties, applications, and product availability.

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
                Introduction To Nickel A286 / Alloy A286 / AISI 660 / UNS S66286 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/nickel-based-superalloys/nickel-based-superalloys-A286_AIS660.webp') }}"
                        alt="Nickel A286 AIS600" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> proudly, supplies,
                            exports, and stocks a wide range of<strong class="text-black"> Nickel A286 products</strong>,
                            including <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Sheets,
                            Plates, Coils, Bars, Forgings, Fasteners, Pipe Fittings, Flanges, Wire Mesh, Welding Rods, and
                            Custom Components designed for high-performance applications.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Alloy A286</strong>, also known as <strong class="text-black">AISI
                                660 </strong>or UNS S66286, is a
                            high-strength, iron-<a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a>-chromium alloy with
                            additions of molybdenum and titanium. It is
                            designed for applications requiring excellent strength and corrosion resistance at temperatures
                            up to 704 °C (1300 °F). It exhibits outstanding mechanical properties and oxidation resistance,
                            making it a widely used material in aerospace, automotive, marine, and industrial gas turbine
                            components.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Nickel Based Superalloys A286 Datasheet</h3>
            <p class="mb-3">
                Get the complete Nickel Based Superalloys A286 datasheet with chemical composition,
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
                                    <td>A286 / Alloy A286 / AISI 660 / UNS S66286</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Precipitation-Hardenable Iron–Nickel–Chromium Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Temperature Resistance</td>
                                    <td>Up to 704 °C (1300 °F)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Strengthening Mechanism</td>
                                    <td>Precipitation Hardening (Ti, Mo, V)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Forms Available</td>
                                    <td>Pipes, Tubes, Plates, Bars, Coils, Fittings, Flanges, Fasteners</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions</td>
                                    <td>Solution Annealed / Aged</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>NACE</td>
                                    <td>MR0175 / ISO 15156 Compliant</td>
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
                <h2>Chemical Composition of Alloy A286</h2>
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
                                    <td>Nickel (Ni)</td>
                                    <td>24.0 – 27.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>13.5 – 16.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium (Ti)</td>
                                    <td>1.90 – 2.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>1.00 – 1.50</td>
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
                                    <td>Carbon (C)</td>
                                    <td>≤ 0.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Vanadium (V)</td>
                                    <td>0.10 – 0.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.030</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.030</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum (Al)</td>
                                    <td>≤ 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Boron (B)</td>
                                    <td>0.003 – 0.010</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            Designed for strength + oxidation resistance + stability at high temperatures.
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
                <h2 class="fw-bold" style="color: #174268;">Technical Composition of Nickel A286</h2>
            </div>
            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Nickel A286</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Imperial</th>
                                    <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>0.286 lb/in³</td>
                                    <td>7.92 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2550 °F</td>
                                    <td>1399 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.10 Btu/lb·°F</td>
                                    <td>420 J/kg·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>—</td>
                                    <td>12–13 W/m·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>—</td>
                                    <td>0.91 Ω·mm²/m</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability</td>
                                    <td>~1.007–1.010</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (E)</td>
                                    <td>—</td>
                                    <td>~200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Expansion (70–1200 °F)</td>
                                    <td>9.2–9.9 ×10⁻⁶ /°F</td>
                                    <td>16.5–17.8 ×10⁻⁶ /°C</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            Duplex S31803 has double the strength of 304/316 stainless steel and significantly higher
                            pitting resistance.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center mt-5" id="mechanical">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of Alloy A286</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Condition</th>
                                    <th>Tensile Strength</th>
                                    <th>Yield Strength (0.2%)</th>
                                    <th>Elongation</th>
                                    <th>Hardness</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Aged</td>
                                    <td>130–160 ksi (895–1103 MPa)</td>
                                    <td>≥ 90 ksi (620 MPa)</td>
                                    <td>15%</td>
                                    <td>248–341 HB / 24–35 HRC</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aged / Forged Bar (300 mm)</td>
                                    <td>130–175 ksi (895–1200 MPa)</td>
                                    <td>90 ksi (620 MPa)</td>
                                    <td>16%</td>
                                    <td>Comparable</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Bar</td>
                                    <td>130 ksi (895 MPa)</td>
                                    <td>85 ksi (585 MPa)</td>
                                    <td>15%</td>
                                    <td>248–341 HB</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            A286 retains strength better than most stainless steels at high temperatures.
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
                    Mechanical Properties of Nickel A286 (Annealed)
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Temperature</th>
                            <th>Tensile Strength (MPa)</th>
                            <th>Yield Strength (MPa)</th>
                            <th>Hardness (BHN)</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>25 °C (80 °F)</td>
                            <td>379</td>
                            <td>207</td>
                            <td>145</td>
                        </tr>
                        <tr class="t-row">
                            <td>425 °C (800 °F)</td>
                            <td>~207</td>
                            <td>~124</td>
                            <td>~100</td>
                        </tr>
                        <tr class="t-row">
                            <td>540 °C (1000 °F)</td>
                            <td>~172</td>
                            <td>~103</td>
                            <td>~90</td>
                        </tr>
                        <tr class="t-row">
                            <td>650 °C (1200 °F)</td>
                            <td>~138</td>
                            <td>~83</td>
                            <td>~85</td>
                        </tr>
                        <tr class="t-row">
                            <td>705 °C (1300 °F)</td>
                            <td>~124</td>
                            <td>~69</td>
                            <td>~80</td>
                        </tr>
                        <tr class="t-row">
                            <td>760 °C (1400 °F)</td>
                            <td>~117</td>
                            <td>~62</td>
                            <td>~75</td>
                        </tr>
                    </tbody>
                </table>
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
                        <h5 class="fw-bold mt-3">Flat Products</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">✔ Plates – ASTM A693</li>
                            <li class="list-group-item">✔ Sheets &amp; Strips – Hot / Cold Rolled</li>
                        </ul>

                        <h5 class="fw-bold mt-3">Long Products</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">✔ Seamless Pipes – ASTM B468</li>
                            <li class="list-group-item">✔ Welded Pipes – AMS 5734</li>
                            <li class="list-group-item">✔ Tubes – Capillary, Boiler, Heat Exchanger</li>
                            <li class="list-group-item">✔ Round / Flat / Hex Bars – ASTM A638 / A484 / AMS 5731, 5732, 5737
                            </li>
                        </ul>

                        <h5 class="fw-bold mt-3">Fittings &amp; Flanges</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">✔ Buttweld Fittings – ASTM A403</li>
                            <li class="list-group-item">✔ Flanges – ASTM A182</li>
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
                <h2>Products in Nickel A286 / AISI 660</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Nickel A286 / AISI 660</strong> is engineered for high-temperature,
                        high-stress environments where other alloys fail. It maintains excellent corrosion resistance, good
                        formability, and superior long-term stability in oxidizing conditions.
                    </p>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        This alloy meets several recognized industry standards, including:
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
                        <h5>Excellent Corrosion Resistance in acids like hydrochloric, sulfuric, nitric, and organic acids
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good Strength and Toughness at room and elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Easily Weldable and Formable—supports complex fabrication</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Low Reactivity with Process Media—ideal for sensitive applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-toxic and Biocompatible—used in medical and high-purity chemical systems</h5>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Economical compared to other titanium grades with higher alloy content</h5>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

<section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Nickel Alloy A286</h2>
                <p class="text-center pb-3"><strong class="text-dark">Nickel Alloy A286</strong> is widely used in
                    environments where thermal stability and mechanical strength are critical. Key applications include:
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

{-- 
<section id="price" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>High tensile and creep rupture strength at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent oxidation and corrosion resistance in high-heat environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Superior fabricability and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Maintains strength over long service periods</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-magnetic after heat treatment</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Readily available in both annealed and age-hardened forms</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
 --}

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
                                <h4>What is Nickel A286 (AISI 660) and what are its key properties?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nickel A286, also known as AISI 660 or UNS S66286, is a high-strength
                                    iron nickel chromium alloy with additions of molybdenum and titanium. It is designed for
                                    applications requiring excellent strength and corrosion resistance at temperatures up to
                                    704 °C (1300 °F). The alloy exhibits superior mechanical properties, oxidation
                                    resistance, and thermal stability, making it ideal for aerospace, automotive, marine,
                                    power generation, and chemical processing applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What Nickel A286 products does Moksh Tubes & Fittings LLP supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP manufactures, stocks, and exports a wide range of Nickel A286
                                    products including seamless and welded pipes, tubes, sheets, plates, coils, strips,
                                    round bars, flat bars, hex bars, square bars, pipe fittings, flanges, fasteners, wire
                                    mesh, welding rods, and custom fabricated components. All products are designed for
                                    high-performance applications in extreme environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main advantages of using Nickel A286 in industrial applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nickel A286 offers high tensile and creep rupture strength even at elevated
                                    temperatures, excellent oxidation and corrosion resistance, and long-term dimensional
                                    stability. It is easily fabricated and welded, maintains mechanical integrity over
                                    prolonged service periods, and is non magnetic after heat treatment. These features make
                                    it suitable for critical, high-temperature, high stress industrial applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Nickel A286 alloy products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nickel A286 is widely used in aerospace for jet engines, turbines, exhaust systems, and
                                    fasteners; in power generation for turbines, boilers, and high temperature steam
                                    systems; in automotive for turbochargers and engine components; in chemical processing
                                    for high-temperature equipment; and in oil & gas, marine, and industrial sectors for
                                    heat exchangers, subsea tools, and high pressure fasteners.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Nickel A286 supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP provides certified, high performance Nickel A286 products
                                    with comprehensive test reports and compliance with international standards. With
                                    decades of expertise in nickel based alloys, in house machining, custom fabrication,
                                    ready stock for fast delivery, global export capabilities, and dedicated technical
                                    support, the company ensures reliable solutions for critical industrial applications.
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

<section id="contact-us"  id="contact us"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Connect with <strong>Moksh Tubes & Fittings LLP</strong> for precision products built for performance.
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
                            <th>Form</th>
                            <th>Standards</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Bars &amp; Rods</td>
                            <td>ASTM A638, A484, AMS 5731 / 5732 / 5737</td>
                        </tr>
                        <tr class="t-row">
                            <td>Plates / Sheets / Strips</td>
                            <td>ASTM A693, AMS 5525</td>
                        </tr>
                        <tr class="t-row">
                            <td>Pipes &amp; Tubes</td>
                            <td>ASTM B468, AMS 5734</td>
                        </tr>
                        <tr class="t-row">
                            <td>Fasteners</td>
                            <td>ASTM A453 Grade 660 A / B / C / D</td>
                        </tr>
                        <tr class="t-row">
                            <td>Other Forms</td>
                            <td>ASME SA638, EN 10269</td>
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
                "name": "What is Nickel A286 (AISI 660) and what are its key properties?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nickel A286, also known as AISI 660 or UNS S66286, is a high-strength iron-nickel-chromium alloy with additions of molybdenum and titanium. It is designed for applications requiring excellent strength and corrosion resistance at temperatures up to 704 °C (1300 °F). The alloy exhibits superior mechanical properties, oxidation resistance, and thermal stability, making it ideal for aerospace, automotive, marine, power generation, and chemical processing applications."
                }
                },
                {
                "@type": "Question",
                "name": "What Nickel A286 products does Moksh Tubes & Fittings LLP supply?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moksh Tubes & Fittings LLP supplies a wide range of Nickel A286 products including seamless and welded pipes, tubes, sheets, plates, coils, strips, round bars, flat bars, hex bars, square bars, pipe fittings, flanges, fasteners, wire mesh, welding rods, and custom fabricated components designed for high-performance applications in extreme environments."
                }
                },
                {
                "@type": "Question",
                "name": "What are the main advantages of using Nickel A286 in industrial applications?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nickel A286 offers high tensile and creep rupture strength at elevated temperatures, excellent oxidation and corrosion resistance, and long-term dimensional stability. It is easily fabricated and welded, maintains mechanical integrity over prolonged service periods, and is non-magnetic after heat treatment—making it ideal for critical, high-temperature, high-stress industrial applications."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries commonly use Nickel A286 alloy products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nickel A286 is used in aerospace for jet engines, turbines, exhaust systems, and fasteners; in power generation for turbines and high-temperature steam systems; in automotive for turbochargers and engine components; in chemical processing for high-temperature equipment; and in oil & gas, marine, and industrial sectors for heat exchangers, subsea tools, and high-pressure fasteners."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose Moksh Tubes & Fittings LLP for Nickel A286 supply?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moksh Tubes & Fittings LLP provides certified, high-performance Nickel A286 products with full test reports and compliance with international standards. With decades of expertise in nickel-based alloys, in-house machining, custom fabrication, ready stock for fast delivery, and global export capabilities, the company ensures reliable solutions for critical industrial applications."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection


