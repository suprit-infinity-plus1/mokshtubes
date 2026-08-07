@extends('layouts.master')

@section('title', 'Aluminium Alloy 5083 | Marine Grade Aluminium')

@section('meta_description',
    'Aluminium 5083 – marine-grade alloy offering excellent corrosion resistance, weldability,
    and durability for shipbuilding and offshore applications.')

@section('meta_keywords',
    'Aluminium Alloy 5083, Marine Grade Aluminium, Aluminium 5083 Pipes, Aluminium 5083 Tubes,
    Aluminium 5083 Sheets, Corrosion Resistant Aluminium, Seawater Resistant Aluminium, Weldable Aluminium Alloy, Marine
    Industry Aluminium, Industrial Aluminium Grades')

@section('og_image', asset('assets/images/aluminium-alloys/aluminium-alloys-5083.webp'))
@section('og_type', 'article')

@section('content')
<section class="breadcrumb-area"
        style="background-image: url(/assets/images/aluminium-alloys/aluminium-alloys-5083.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Aluminium 5083 <br> Marine-Grade Corrosion-Resistant Alloy</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Aluminium Alloy 5083 is a high-strength, non-heat-treatable aluminium alloy known for its
                        exceptional corrosion resistance, particularly in marine and chemically aggressive environments.
                        Below is the complete datasheet including composition, properties, heat treatment, applications, and
                        price.
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
                <h2>Aluminium 5083 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Aluminium 5083
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-5083.webp') }}" alt="Aluminium 5083"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> Aluminium Alloy 5083
                                <a href="{{ route('products') }}"> products</a></strong> including sheets,
                            plates, bars, rods,<a href="{{ route('products.pipes-tubes') }}"> tubes</a>, and custom
                            fabricated components.
                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Aluminium 5083</strong> is a non-heat-treatable alloy known for
                            exceptional corrosion resistance, especially in marine and highly corrosive environments. It
                            offers excellent performance in extreme conditions such as seawater exposure, making it a
                            popular choice for marine, automotive, and industrial applications. The alloy is strengthened
                            primarily by magnesium and manganese and exhibits high strength combined with good weldability
                            and formability. 5083 is widely used where strength, corrosion resistance, and weldability are
                            critical.
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Alluminium Alloy 5083 Datasheet</h3>
            <p class="mb-3">
                Get the complete Alluminium Alloy 5083 datasheet with chemical composition,
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
                <h2>Aluminium 5083 Specifications (AA5083 / UNS A95083)</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
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
                            <td>Aluminium 5083 / AA5083 / UNS A95083</td>
                        </tr>
                         <tr class="t-row">
                            <td>Type</td>
                            <td>Non-heat-treatable, strain-hardenable aluminium alloy</td>
                        </tr>
                         <tr class="t-row">
                            <td>Strengthening Method</td>
                            <td>Cold working (H tempers)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Typical Chemical Composition</td>
                            <td>Mg 4.0–4.9%, Mn 0.4–1.0%, Cr 0.05–0.25%</td>
                        </tr>
                         <tr class="t-row">
                            <td>Conditions</td>
                            <td>O, H111, H112, H116, H321</td>
                        </tr>
                         <tr class="t-row">
                            <td>Testing</td>
                            <td>Tensile, Hardness, Chemical, UT (on request)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Certification</td>
                            <td>EN 10204 – 3.1 / 3.2 (MTC Available)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

<section class="sec-padd-top sec-padd-bottom" id="composition">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition – Aluminium Alloy 5083</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Element</th>
                            <th>Composition (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Magnesium (Mg)</td>
                            <td>4.0 – 4.9</td>
                        </tr>
                         <tr class="t-row">
                            <td>Manganese (Mn)</td>
                            <td>0.4 – 1.0</td>
                        </tr>
                         <tr class="t-row">
                            <td>Chromium (Cr)</td>
                            <td>0.05 – 0.25</td>
                        </tr>
                         <tr class="t-row">
                            <td>Iron (Fe)</td>
                            <td>0.40 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Silicon (Si)</td>
                            <td>0.40 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Copper (Cu)</td>
                            <td>0.10 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Zinc (Zn)</td>
                            <td>0.25 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Titanium (Ti)</td>
                            <td>0.15 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Aluminium (Al)</td>
                            <td>Balance</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                Aluminium 5083 is preferred for its marine-grade corrosion resistance and excellent strength.
            </p>
        </div>
    </section>

{{-- 
<section class="sec-padd-top sec-padd-bottom bg-light" id="properties">
        <div class="container">
            <div class="section-title center">
                <h2>Physical Properties – Aluminium Alloy 5083</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property</th>
                            <th>Imperial</th>
                            <th>Metric</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Density</td>
                            <td>0.099 lb/in³</td>
                            <td>2.66 g/cm³</td>
                        </tr>
                         <tr class="t-row">
                            <td>Melting Range</td>
                            <td>1175 – 1225 °F</td>
                            <td>635 – 665 °C</td>
                        </tr>
                         <tr class="t-row">
                            <td>Modulus of Elasticity</td>
                            <td>10.0 × 10³ ksi</td>
                            <td>69 GPa</td>
                        </tr>
                         <tr class="t-row">
                            <td>Thermal Conductivity</td>
                            <td>—</td>
                            <td>120 W/m·K</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>29% IACS</td>
                            <td>—</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
--}}

<section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center">
                <h2>Mechanical Properties – Aluminium Alloy 5083</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property</th>
                            <th>Annealed (O)</th>
                            <th>Hot Finished</th>
                            <th>Cold Drawn</th>
                            <th>Hot Rolled</th>
                            <th>Sheet (H321)</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>275 – 330</td>
                            <td>310 – 380</td>
                            <td>345 – 415</td>
                            <td>310 – 380</td>
                            <td>310 – 400</td>
                        </tr>
                         <tr class="t-row">
                            <td>Yield Strength (MPa)</td>
                            <td>125 – 170</td>
                            <td>170 – 240</td>
                            <td>210 – 275</td>
                            <td>195 – 240</td>
                            <td>210 – 260</td>
                        </tr>
                         <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>16 – 23</td>
                            <td>12 – 18</td>
                            <td>10 – 16</td>
                            <td>12 – 18</td>
                            <td>10 – 16</td>
                        </tr>
                         <tr class="t-row">
                            <td>Brinell Hardness</td>
                            <td>75 – 85 HB</td>
                            <td>80 – 90 HB</td>
                            <td>85 – 95 HB</td>
                            <td>80 – 90 HB</td>
                            <td>80 – 90 HB</td>
                        </tr>
                         <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>40 – 55 B</td>
                            <td>55 – 65 B</td>
                            <td>60 – 70 B</td>
                            <td>55 – 65 B</td>
                            <td>60 – 70 B</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                Aluminium 5083 offers high strength combined with excellent corrosion resistance, especially in seawater
                environments.
            </p>
        </div>
    </section>

{{-- 
<section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forms & Size Range – Aluminium 5083</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Product Form</th>
                            <th>Size Range / Description</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>2 mm – 200 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Marine Sheets (H116 / H321)</td>
                            <td>2 mm – 50 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Bars & Rods</td>
                            <td>6 mm – 300 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Strips & Coils</td>
                            <td>0.5 mm – 10 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Pipes & Tubes</td>
                            <td>OD 6 mm – 200 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Extrusions & Profiles</td>
                            <td>Custom shapes</td>
                        </tr>
                         <tr class="t-row">
                            <td>Fabricated Components</td>
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
                <h2>Products in Aluminium Alloys</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Aluminium 5083</strong> is available in various mill forms such as:
                    </p>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We supply Aluminium 5083 materials in accordance with the most stringent industry standards: </p>
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
                        <h5>Exceptional corrosion resistance, especially to seawater and industrial chemicals</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High strength-to-weight ratio</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent weldability and formability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good fatigue resistance and toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-magnetic and resistant to stress corrosion cracking</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Aluminium 5083</h2>
                <p class="text-center pb-3"><strong class="text-dark">Aluminium 5083</strong> is extensively used where
                    corrosion resistance, strength, and weldability are paramount:
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
                <h2>Aluminium Alloy 5083 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹350 – ₹550 per kg
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
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn ">
                                <h4>
                                    What is Aluminium Alloy 5083 and what makes it special?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminium Alloy 5083 is a non heat treatable, marine grade <a
                                        href="{{ route('materials.aluminium-Alloys') }}">aluminum alloy</a> known for its
                                    exceptional corrosion resistance, especially in seawater and industrial chemical
                                    environments. Strengthened primarily by magnesium and manganese, it offers high
                                    strength, excellent weldability, and toughness, making it ideal for harsh operating
                                    conditions.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Where is Aluminium 5083 commonly used?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminium 5083 is widely used in industries requiring strength, durability, and
                                    resistance to corrosion, including:
                                </p>
                                <ul>
                                    <li><strong>Marine</strong>: shipbuilding, boat hulls, and offshore structures.</li>
                                    <li><strong>Transportation</strong>: Truck bodies, trailers, and rail cars.</li>
                                    <li><strong>Pressure Vessels</strong>: LPG tanks, cryogenic tanks, and chemical storage.
                                    </li>
                                    <li><strong>Automotive</strong>: Body panels, frames, and structural components.</li>
                                    <li><strong>Industrial Applications</strong>: Chemical plants, piping, and tanks.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Is Aluminium Alloy 5083 heat-treatable?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    No, Aluminium 5083 is a non heat treatable alloy. Instead, it achieves its mechanical
                                    strength through strain hardening and cold working. Despite this, it retains excellent
                                    weldability and formability, making it highly versatile for fabrication in demanding
                                    industries.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the main advantages of Aluminium 5083?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Key benefits of Aluminium Alloy 5083 include:
                                </p>
                                <ul>
                                    <li>Outstanding corrosion resistance, especially in seawater.</li>
                                    <li>High strength to weight ratio for lightweight structural designs.</li>
                                    <li>Excellent weldability and formability.</li>
                                    <li>Good fatigue resistance and toughness.</li>
                                    <li>Non magnetic and resistant to stress corrosion cracking.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What Aluminium 5083 products does Moksh Tubes & Fittings LLP offer?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP supplies Aluminium 5083 in various mill forms, including:
                                <ul>
                                    <li>Sheets, Plates, Coils & Strips.</li>
                                    <li>Pipes & Tubes (<a
                                            href="{{ url('products/pipes-tubes/seamless-pipes') }}">Seamless</a>, <a
                                            href="{{ url('products/pipes-tubes/welded-pipes') }}">Welded</a>, Heat
                                        Exchanger, U-Bend).</li>
                                    <li>Bars & Rods (Round, Hex, Flat, Square).</li>
                                    <li>Pipe Fittings, Flanges, and Fasteners.</li>
                                    <li>Custom Fabricated Components designed to meet client specifications.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->
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
                    For inquiries, quotations, or custom Aluminium Alloy 5083 solutions, <strong>Moksh Tubes & Fittings
                        LLP</strong> your reliable partner for high-quality aluminum alloy products.</p>
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

{{-- end datasheet --}}

{{-- 
<section class="sec-padd-top sec-padd-bottom" id="heat-treatment">
        <div class="container">
            <div class="section-title center">
                <h2>Heat Treatment – Aluminium Alloy 5083</h2>
            </div>

            <p class="text-center">
                ⚠ Aluminium Alloy 5083 is a <strong>non-heat-treatable alloy</strong>.
                Strength is achieved by cold work (H tempers), not by solution treatment or aging.
            </p>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Heat Treatment Process</th>
                            <th>Temperature Range</th>
                            <th>Cooling / Procedure</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Annealing (O Temper)</td>
                            <td>350 – 410 °C</td>
                            <td>Slow furnace cool</td>
                            <td>Restores full ductility before forming</td>
                        </tr>
                         <tr class="t-row">
                            <td>Stabilization Treatment (H321 / Marine)</td>
                            <td>200 – 260 °C</td>
                            <td>Air cool</td>
                            <td>Improves resistance to stress corrosion cracking</td>
                        </tr>
                         <tr class="t-row">
                            <td>Stress Relieving</td>
                            <td>200 – 260 °C</td>
                            <td>Air cool</td>
                            <td>Removes stresses from machining or forming</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
--}}

{{-- 
<section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades – Aluminium 5083</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>ASTM</td>
                            <td>B209 (Sheets & Plates), B221 (Extrusions)</td>
                        </tr>
                         <tr class="t-row">
                            <td>ISO</td>
                            <td>6361</td>
                        </tr>
                         <tr class="t-row">
                            <td>EN</td>
                            <td>AW-5083</td>
                        </tr>
                         <tr class="t-row">
                            <td>JIS</td>
                            <td>H4000 Series</td>
                        </tr>
                         <tr class="t-row">
                            <td>BS</td>
                            <td>N4</td>
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
      "name": "What is Aluminium Alloy 5083 and what makes it special?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aluminium Alloy 5083 is a non heat treatable, marine grade aluminum alloy known for its exceptional corrosion resistance, especially in seawater and industrial chemical environments. Strengthened primarily by magnesium and manganese, it offers high strength, excellent weldability, and toughness, making it ideal for harsh operating conditions."
      }
    },
    {
      "@type": "Question",
      "name": "Where is Aluminium 5083 commonly used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aluminium 5083 is widely used in industries requiring strength, durability, and resistance to corrosion, including: Marine: shipbuilding, boat hulls, and offshore structures. Transportation: Truck bodies, trailers, and rail cars. Pressure Vessels: LPG tanks, cryogenic tanks, and chemical storage. Automotive: Body panels, frames, and structural components. Industrial Applications: Chemical plants, piping, and tanks."
      }
    },
    {
      "@type": "Question",
      "name": "Is Aluminium Alloy 5083 heat-treatable?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, Aluminium 5083 is a non heat treatable alloy. Instead, it achieves its mechanical strength through strain hardening and cold working. Despite this, it retains excellent weldability and formability, making it highly versatile for fabrication in demanding industries."
      }
    },
    {
      "@type": "Question",
      "name": "What are the main advantages of Aluminium 5083?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Key benefits of Aluminium Alloy 5083 include: Outstanding corrosion resistance, especially in seawater. High strength to weight ratio for lightweight structural designs. Excellent weldability and formability. Good fatigue resistance and toughness. Non magnetic and resistant to stress corrosion cracking."
      }
    },
    {
      "@type": "Question",
      "name": "What Aluminium 5083 products does Moksh Tubes & Fittings LLP offer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Moksh Tubes & Fittings LLP supplies Aluminium 5083 in various mill forms, including: Sheets, Plates, Coils & Strips. Pipes & Tubes (Seamless, Welded, Heat Exchanger, U-Bend). Bars & Rods (Round, Hex, Flat, Square). Pipe Fittings, Flanges, and Fasteners. Custom Fabricated Components designed to meet client specifications."
      }
    }
  ]
}
@endverbatim
</script>
@endsection


