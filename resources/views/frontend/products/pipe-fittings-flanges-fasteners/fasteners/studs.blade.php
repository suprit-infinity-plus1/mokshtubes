@extends('layouts.master')
@section('title', 'Stud Bolts Manufacturer, Supplier & Exporter in India | Moksh Tubes')
<!-- 66 characters -->
@section('meta_description', 'Moksh Tubes & Fittings LLP is a leading manufacturer, supplier & exporter of Stud Bolts in
    Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys. ASTM A193 & ASTM A320 certified with
    worldwide delivery.')
@section('meta_keywords', 'Stud Bolts, Stud Bolts Manufacturer, Stud Bolts Supplier, Stud Bolts Exporter, Stainless
    Steel Stud Bolts, Carbon Steel Stud Bolts, Alloy Steel Stud Bolts, Duplex Stud Bolts, Super Duplex Stud Bolts, ASTM A193
    Stud Bolts, ASTM A320 Stud Bolts, ASTM A193 B7 Stud Bolts, ASTM A193 B16 Stud Bolts, Industrial Stud Bolts, Heavy Hex
    Stud Bolts, Fully Threaded Stud Bolts, Industrial Fasteners, Flange Stud Bolts, Heavy Hex Nuts, High Tensile Stud Bolts,
    Pressure Vessel Fasteners, Pipeline Fasteners, Flange Fastening Solutions, Corrosion Resistant Stud Bolts, Petrochemical
    Fasteners, Oil & Gas Fasteners, High Pressure Fasteners, Heat Exchanger Stud Bolts')
@section('og_title', 'Stud Bolts Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Premium-quality Stud Bolts manufactured in Stainless Steel, Carbon Steel, Alloy Steel,
    Duplex, Super Duplex & Nickel Alloys. ASTM A193 & ASTM A320 compliant with worldwide export support.')
@section('og_image', asset('assets/images/fasteners/full-threaded-rods.png'))
@section('og_type', 'product')
@section('twitter_title', 'Stud Bolts Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Stud Bolts for flange joints, pressure vessels, and industrial
    piping systems. Available in multiple grades, thread types, and coatings with fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/fasteners/full-threaded-rods.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Stud Bolts Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Stud Bolts are high-strength threaded fasteners used to securely join flanges, valves, pressure
                        vessels, and other critical piping components. Designed for high-pressure and high-temperature
                        applications, they provide excellent load distribution, reliable clamping force, and long-lasting
                        performance. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh
                            Tubes & Fittings LLP</a>, we manufacture, supply, and export premium quality Stud Bolts in
                        stainless steel, carbon steel, alloy steel, duplex, super duplex, and high-performance alloy
                        materials. Our stud bolts are manufactured to international standards, ensuring exceptional
                        strength, corrosion resistance, and durability for industrial applications.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Quick Navigation (Standardized sticky tabs)-->
    <div class="sticky-top bg-white border-bottom material-tabs w-100 shadow-sm">
        <div class="container text-center py-2">
            <a href="#overview">Product Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#chemical-composition">Chemical Composition</a> |
            <a href="#size-chart">Size & Weight Chart</a> |
            <a href="#grades">Grades & Equivalent</a> |
            <a href="#applications">Applications</a> |
            <a href="#features">Features & Advantages</a> |
            <a href="#mechanical-properties">Mechanical Properties</a> |
            <!-- <a href="#testing">Testing & Quality</a> | -->
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Product Overview</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/fasteners/full-threaded-rods.png') }}" alt="Stud Bolts Manufacturer"
                        class="img-fluid rounded shadow-sm" width="550" height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        A <strong>Stud Bolt</strong> is a fully threaded rod used with two heavy hex nuts to fasten flanged
                        joints and pressure-containing equipment. Stud bolts provide uniform clamping force across the
                        flange connection, ensuring leak-proof sealing even under high pressure and extreme temperatures.
                        They are widely used in piping systems, refineries, offshore platforms, and heavy industrial
                        equipment.
                    </p>

                    <p class="fs-6 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we manufacture
                        precision-engineered Stud Bolts using premium-grade raw materials and advanced threading technology.
                        Our stud bolts are available in a wide range of diameters, lengths, thread types, and material
                        grades to meet international standards and customer-specific requirements.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Datasheet Download -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Stud Bolts Datasheet</h3>
            <p class="mb-3">
                Get the complete Stud Bolts datasheet with chemical composition,
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

    <section id="specifications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Specification</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row">
                                    <td>Product</td>
                                    <td>Stud Bolt</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A193, ASTM A320, ASTM A453, DIN, ISO, ASME</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Diameter</td>
                                    <td>M6 to M100 / ¼" to 4"</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>Up to 6000 mm (Custom Sizes Available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thread Type</td>
                                    <td>UNC, UNF, Metric, BSW, BSP</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thread Style</td>
                                    <td>Fully Threaded</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Plain, Black, Zinc Plated, PTFE Coated, Hot Dip Galvanized</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Hot Forged / CNC Threaded</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="chemical-composition" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition</h2>
            </div>
            <p class="text-center pb-3">
                The chemical composition of <strong>Stud Bolts</strong> depends on the selected material grade. At Moksh
                Tubes & Fittings LLP, our Stud Bolts are manufactured using premium-quality raw materials that comply with
                ASTM, ASME, DIN, ISO, EN, and BS standards, ensuring excellent corrosion resistance, high tensile strength,
                and long service life.
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>SS 304 (%)</th>
                                    <th>SS 304L (%)</th>
                                    <th>SS 316 (%)</th>
                                    <th>SS 316L (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.08 Max</td>
                                    <td>0.03 Max</td>
                                    <td>0.08 Max</td>
                                    <td>0.03 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>2.00 Max</td>
                                    <td>2.00 Max</td>
                                    <td>2.00 Max</td>
                                    <td>2.00 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.75 Max</td>
                                    <td>0.75 Max</td>
                                    <td>0.75 Max</td>
                                    <td>0.75 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>0.045 Max</td>
                                    <td>0.045 Max</td>
                                    <td>0.045 Max</td>
                                    <td>0.045 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.030 Max</td>
                                    <td>0.030 Max</td>
                                    <td>0.030 Max</td>
                                    <td>0.030 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>18.00–20.00</td>
                                    <td>18.00–20.00</td>
                                    <td>16.00–18.00</td>
                                    <td>16.00–18.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>8.00–10.50</td>
                                    <td>8.00–12.00</td>
                                    <td>10.00–14.00</td>
                                    <td>10.00–14.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>2.00–3.00</td>
                                    <td>2.00–3.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen (N)</td>
                                    <td>0.10 Max</td>
                                    <td>0.10 Max</td>
                                    <td>0.10 Max</td>
                                    <td>0.10 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                    <td>Balance</td>
                                    <td>Balance</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <p class="mt-2 text-muted text-center"><small><strong>Note:</strong> Chemical composition varies depending on
                    the selected material grade. Carbon Steel, Alloy Steel, ASTM A193 B7/B7M/B16, ASTM A320 L7/L7M, Duplex,
                    Super Duplex, and Nickel Alloy Stud Bolts are also available in accordance with the relevant ASTM and
                    ASME material specifications.</small></p>
        </div>
    </section>

    <!-- charts -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
            </div>
            <p class="text-center pb-3">
                Stud Bolts are manufactured according to <strong>ASTM A193, ASTM A320, DIN, ISO</strong>, and
                <strong>ASME</strong> standards and are available in a wide range of diameters and lengths.
            </p>

            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Diameter</th>
                            <th>Thread Pitch</th>
                            <th>Standard Length (mm)</th>
                            <th>Approx. Weight (kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>M6</td>
                            <td>1.0</td>
                            <td>1000–3000</td>
                            <td>0.22</td>
                        </tr>
                        <tr class="t-row">
                            <td>M8</td>
                            <td>1.25</td>
                            <td>1000–3000</td>
                            <td>0.39</td>
                        </tr>
                        <tr class="t-row">
                            <td>M10</td>
                            <td>1.5</td>
                            <td>1000–3000</td>
                            <td>0.62</td>
                        </tr>
                        <tr class="t-row">
                            <td>M12</td>
                            <td>1.75</td>
                            <td>1000–3000</td>
                            <td>0.89</td>
                        </tr>
                        <tr class="t-row">
                            <td>M16</td>
                            <td>2.0</td>
                            <td>1000–3000</td>
                            <td>1.58</td>
                        </tr>
                        <tr class="t-row">
                            <td>M20</td>
                            <td>2.5</td>
                            <td>1000–3000</td>
                            <td>2.47</td>
                        </tr>
                        <tr class="t-row">
                            <td>M24</td>
                            <td>3.0</td>
                            <td>1000–3000</td>
                            <td>3.56</td>
                        </tr>
                        <tr class="t-row">
                            <td>M30</td>
                            <td>3.5</td>
                            <td>1000–3000</td>
                            <td>5.55</td>
                        </tr>
                        <tr class="t-row">
                            <td>M36</td>
                            <td>4.0</td>
                            <td>1000–3000</td>
                            <td>7.99</td>
                        </tr>
                        <tr class="t-row">
                            <td>M42</td>
                            <td>4.5</td>
                            <td>1000–3000</td>
                            <td>10.90</td>
                        </tr>
                        <tr class="t-row">
                            <td>M48</td>
                            <td>5.0</td>
                            <td>1000–3000</td>
                            <td>14.20</td>
                        </tr>
                        <tr class="t-row">
                            <td>M56</td>
                            <td>5.5</td>
                            <td>Up to 6000</td>
                            <td>19.40</td>
                        </tr>
                        <tr class="t-row">
                            <td>M64</td>
                            <td>6.0</td>
                            <td>Up to 6000</td>
                            <td>25.30</td>
                        </tr>
                        <tr class="t-row">
                            <td>M72</td>
                            <td>6.0</td>
                            <td>Up to 6000</td>
                            <td>32.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted"><strong>Note:</strong> Dimensions and weights are approximate and
                may vary depending on the material grade, thread standard (UNC, UNF, Metric, BSW, BSP), coating, and
                manufacturing tolerances. Custom diameters, lengths, and thread specifications are available upon request.
            </p>
        </div>
    </section>

    {{-- Grades & Equivalent --}}
    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Grades & Equivalent</h2>
            </div>

            <div class="row justify-content-center g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="grade-card">
                        <div class="grade-card-icon"><i class="bi bi-shield-check"></i></div>
                        <h4 class="grade-card-title">Stainless Steel Grades</h4>
                        <p class="grade-card-desc">304 / 304L, 316 / 316L</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="grade-card">
                        <div class="grade-card-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4 class="grade-card-title">Carbon & Alloy Steel</h4>
                        <p class="grade-card-desc">Carbon Steel, ASTM A193 B7/B16,<br>ASTM A320 L7</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="grade-card">
                        <div class="grade-card-icon"><i class="bi bi-gem"></i></div>
                        <h4 class="grade-card-title">Duplex & Super Duplex</h4>
                        <p class="grade-card-desc">UNS S31803 / 2205<br>UNS S32750 / 2507</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="grade-card">
                        <div class="grade-card-icon"><i class="bi bi-award-fill"></i></div>
                        <h4 class="grade-card-title">High-Performance Alloys</h4>
                        <p class="grade-card-desc">Inconel®, Monel®, Hastelloy® Alloys</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery / Products --}}
    <section class="our-services sec-padd-top">
        <div class="container">
            <div class="row">
                <!-- Stainless Steel 304 -->
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100"
                                href="{{ route('materials.austenitic-stainless-steel.grade', 'austenitic-stainless-steel-304') }}">
                                <img class="w-100"
                                    src="{{ asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-304.webp') }}"
                                    alt="Stainless Steel 304" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a
                                    href="{{ route('materials.austenitic-stainless-steel.grade', 'austenitic-stainless-steel-304') }}"
                                    style="color: inherit; text-decoration: none;">Stainless Steel 304</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Stainless Steel 316 -->
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100"
                                href="{{ route('materials.austenitic-stainless-steel.grade', 'austenitic-stainless-steel-316') }}">
                                <img class="w-100"
                                    src="{{ asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-316.webp') }}"
                                    alt="Stainless Steel 316" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a
                                    href="{{ route('materials.austenitic-stainless-steel.grade', 'austenitic-stainless-steel-316') }}"
                                    style="color: inherit; text-decoration: none;">Stainless Steel 316</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Carbon Steel -->
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100"
                                href="{{ route('materials.engineering-Steel-grade', 'engineering-steels-1045') }}">
                                <img class="w-100"
                                    src="{{ asset('assets/images/engineering-steels/engineering-steels-1045.webp') }}"
                                    alt="Carbon Steel" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a
                                    href="{{ route('materials.engineering-Steel-grade', 'engineering-steels-1045') }}"
                                    style="color: inherit; text-decoration: none;">Carbon Steel</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Alloy Steel -->
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100"
                                href="{{ route('materials.engineering-Steel-grade', 'engineering-steels-4140') }}">
                                <img class="w-100"
                                    src="{{ asset('assets/images/engineering-steels/engineering-steels-4140.webp') }}"
                                    alt="Alloy Steel" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a
                                    href="{{ route('materials.engineering-Steel-grade', 'engineering-steels-4140') }}"
                                    style="color: inherit; text-decoration: none;">Alloy Steel</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Duplex Stainless Steel -->
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100"
                                href="{{ route('materials.duplex-and-super-duplex.grade', 'duplex-s31803') }}">
                                <img class="w-100"
                                    src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp') }}"
                                    alt="Duplex Stainless Steel" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a
                                    href="{{ route('materials.duplex-and-super-duplex.grade', 'duplex-s31803') }}"
                                    style="color: inherit; text-decoration: none;">Duplex Stainless Steel</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Inconel Alloys -->
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.inconel.grade', 'inconel-625') }}">
                                <img class="w-100" src="{{ asset('assets/images/inconel/Inconel-625.webp') }}"
                                    alt="Inconel Alloys" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a href="{{ route('materials.inconel.grade', 'inconel-625') }}"
                                    style="color: inherit; text-decoration: none;">Inconel Alloys</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Applications --}}
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
                <p class="text-center pb-3">Stud Bolts are widely used in:</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Pipelines</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-ev-station"></i></div>
                        <h5>Petrochemical Plants</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Refineries</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Generation Plants</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Offshore & Marine Projects</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-speedometer2"></i></div>
                        <h5>Pressure Vessels</h5>
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
                        <div class="application-icon"><i class="bi bi-tools"></i></div>
                        <h5>Valves & Pumps</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Industrial Process Piping</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features & Advantages --}}
    <section id="features" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Features & Advantages</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>High tensile strength and durability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Excellent corrosion and oxidation resistance</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h4>Suitable for high-pressure and high-temperature applications</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Uniform clamping force for leak-proof flange joints</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Precision-machined threads for secure fastening</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-check2-circle"></i></div>
                        <h4>Excellent fatigue and wear resistance</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-palette"></i></div>
                        <h4>Available in multiple thread standards and coatings</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h4>Long service life with low maintenance</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Manufactured according to international quality standards</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
                <p class="text-center">The mechanical properties of <strong>Stud Bolts</strong> depend on the selected
                    material grade and comply with applicable ASTM and ASME standards. The table below shows the typical
                    mechanical properties for commonly supplied stainless steel grades.</p>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>SS 304 / 304L</th>
                            <th>SS 316 / 316L</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>515 Min</td>
                            <td>515 Min</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (MPa)</td>
                            <td>205 Min</td>
                            <td>205 Min</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>40 Min</td>
                            <td>40 Min</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness (HB Max)</td>
                            <td>201</td>
                            <td>217</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-2 text-muted text-center"><small><strong>Note:</strong> Mechanical properties for Carbon Steel,
                    Alloy Steel, ASTM A193 B7/B7M/B16, ASTM A320 L7/L7M, Duplex, Super Duplex, and Nickel Alloy Stud Bolts
                    are available in accordance with their respective ASTM/ASME material specifications upon
                    request.</small></p>
        </div>
    </section>

    <!-- Testing & Quality Control -->
    <!-- <section id="testing" class="sec-padd-top sec-padd-bottom bg-light">
            <div class="container">
                <div class="section-title center">
                    <h2>Testing & Quality</h2>
                </div>

                <div class="row g-4 mt-4">

                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                            <h4>Tensile Test</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                            <h4>Proof Load Test</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-check2-circle"></i></div>
                            <h4>PMI Test</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                            <h4>Thread Gauging</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-record-circle"></i></div>
                            <h4>Hardness Test</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-brightness-high"></i></div>
                            <h4>Magnetic Particle Inspection</h4>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->

    <!-- Packaging & Export -->
    <!-- <section id="packaging" class="sec-padd-top sec-padd-bottom">
            <div class="container text-center">
                <div class="section-title center mb-4">
                    <h2 class="fw-bold" style="color: #174268;">Packaging & Export</h2>
                </div>
                <p class="fs-5">We ensure that our <strong>Stud Bolts</strong> are securely packaged to prevent damage during
                    transit. We use high-quality wooden crates, pallets, and shrink-wrapping for export shipments.</p>
                <p class="fs-5">We regularly export to countries in the Middle East (UAE, Saudi Arabia, Qatar, Oman, Kuwait),
                    Europe, Africa, and Southeast Asia.</p>
            </div>
        </section> -->

    {{-- why choose us --}}
    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Leading Manufacturer, Supplier & Exporter</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-nut"></i></div>
                        <h5>Premium Quality Industrial Fasteners</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Wide Range of Sizes, Thread Types & Material Grades</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Ready Stock for Immediate Dispatch</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tags"></i></div>
                        <h5>Competitive Pricing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Strict Quality Assurance</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Export Experience</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5>Complete Documentation Support</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tools"></i></div>
                        <h5>Expert Technical Assistance</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>Frequently Asked Questions (FAQ)</h2>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is a Stud Bolt?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    A Stud Bolt is a fully threaded fastener used with two heavy hex nuts to connect
                                    flanges, valves, pressure vessels, and other piping components securely.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where are Stud Bolts commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Stud Bolts are widely used in oil & gas, petrochemical plants, refineries, power plants,
                                    offshore platforms, and industrial piping systems.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We manufacture Stud Bolts in stainless steel, carbon steel, alloy steel, duplex, super
                                    duplex, and nickel alloy grades.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide material test certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes. EN 10204 3.1 Material Test Certificates are supplied with every order.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can you manufacture custom sizes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes. We manufacture Stud Bolts in standard and custom diameters, lengths, thread types,
                                    coatings, and material grades according to customer specifications.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Request a Quote</h2>
                <p>
                    Looking for a trusted <strong>Stud Bolts</strong> manufacturer and supplier? Contact <strong>Moksh Tubes
                        & Fittings LLP</strong> for premium-quality industrial stud bolts, competitive pricing, ready stock,
                    technical support, and fast worldwide delivery. Request your free quotation today.
                </p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection

@push('styles')
    <style>
        tr.collapse {
            opacity: 0;
            transform: translateY(-6px) scale(0.98);
            transition: opacity .35s ease, transform .35s ease;
        }

        tr.collapsing {
            opacity: 0;
            transform: translateY(-10px) scale(0.96);
            display: table-row !important;
        }

        tr.collapse.show {
            opacity: 1;
            transform: translateY(0) scale(1);
            display: table-row;
        }

        /* Gallery Images Fix */
        .img-box img {
            height: 260px;
            object-fit: contain;
            background-color: #fff;
            padding: 10px;
            width: 100%;
        }

        /* Grade Cards Style */
        .grade-card {
            border: 1px solid #e58a40;
            border-radius: 8px;
            padding: 25px 15px;
            text-align: center;
            background-color: #fff;
            height: 100%;
            transition: all 0.3s ease;
        }

        .grade-card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
            background-color: #db7227;
            border-color: #db7227;
        }

        .grade-card-icon {
            font-size: 32px;
            color: #174268;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        .grade-card-title {
            color: #174268;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }

        .grade-card-desc {
            color: #666;
            font-size: 14px;
            margin-bottom: 0;
            transition: color 0.3s ease;
        }

        .grade-card:hover .grade-card-icon,
        .grade-card:hover .grade-card-title {
            color: #fff;
        }

        .grade-card:hover .grade-card-desc {
            color: #f1f1f1;
        }
    </style>
@endpush

@section('jsscripts')
    @verbatim
        <script type="application/ld+json">
                {
                  "@context": "https://schema.org",
                  "@graph": [
                    {
                      "@type": ["Organization", "LocalBusiness"],
                      "@id": "https://mokshtubes.com/#organization",
                      "name": "Moksh Tubes & Fittings LLP",
                      "url": "https://mokshtubes.com/",
                      "logo": "https://mokshtubes.com/assets/images/logo.webp",
                      "telephone": "+91-9769584950",
                      "email": "info@mokshtubes.com"
                    },
                    {
                      "@type": "WebPage",
                      "@id": "https://mokshtubes.com/stud-bolts#webpage",
                      "name": "Stud Bolts Manufacturer, Supplier & Exporter in India | Moksh Tubes",
                      "url": "https://mokshtubes.com/stud-bolts",
                      "description": "Moksh Tubes & Fittings LLP is a leading manufacturer, supplier & exporter of Stud Bolts in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys. ASTM A193 & ASTM A320 certified with worldwide delivery."
                    },
                    {
                      "@type": ["Product"],
                      "@id": "https://mokshtubes.com/#studbolts",
                      "name": "Stud Bolts",
                      "image": "https://mokshtubes.com/assets/images/fasteners/full-threaded-rods.png",
                      "category": "Fasteners",
                      "brand": { "@id": "https://mokshtubes.com/#organization" }
                    },
                    {
                      "@type": "BreadcrumbList",
                      "@id": "https://mokshtubes.com/stud-bolts#breadcrumb",
                      "itemListElement": [
                        {
                          "@type": "ListItem",
                          "position": 1,
                          "name": "Home",
                          "item": "https://mokshtubes.com/"
                        },
                        {
                          "@type": "ListItem",
                          "position": 2,
                          "name": "Fasteners",
                          "item": "https://mokshtubes.com/fasteners"
                        },
                        {
                          "@type": "ListItem",
                          "position": 3,
                          "name": "Stud Bolts",
                          "item": "https://mokshtubes.com/stud-bolts"
                        }
                      ]
                    },
                    {
                      "@type": "FAQPage",
                      "@id": "https://mokshtubes.com/stud-bolts#faq",
                      "mainEntity": [
                        {
                          "@type": "Question",
                          "name": "What is a Stud Bolt?",
                          "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "A Stud Bolt is a fully threaded fastener used with two heavy hex nuts to connect flanges, valves, pressure vessels, and other piping components securely."
                          }
                        },
                        {
                          "@type": "Question",
                          "name": "Where are Stud Bolts commonly used?",
                          "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Stud Bolts are widely used in oil & gas, petrochemical plants, refineries, power plants, offshore platforms, and industrial piping systems."
                          }
                        },
                        {
                          "@type": "Question",
                          "name": "Which materials are available?",
                          "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "We manufacture Stud Bolts in stainless steel, carbon steel, alloy steel, duplex, super duplex, and nickel alloy grades."
                          }
                        },
                        {
                          "@type": "Question",
                          "name": "Do you provide material test certificates?",
                          "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes. EN 10204 3.1 Material Test Certificates are supplied with every order."
                          }
                        },
                        {
                          "@type": "Question",
                          "name": "Can you manufacture custom sizes?",
                          "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes. We manufacture Stud Bolts in standard and custom diameters, lengths, thread types, coatings, and material grades according to customer specifications."
                          }
                        }
                      ]
                    }
                  ]
                }
                </script>
    @endverbatim
@endsection
