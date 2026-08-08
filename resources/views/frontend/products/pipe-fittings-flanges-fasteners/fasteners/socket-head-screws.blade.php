@extends('layouts.master')
@section('title', 'Socket Head Screws Manufacturer, Supplier & Exporter in India | Moksh Tubes')
<!-- 76 characters -->
@section('meta_description', 'Moksh Tubes & Fittings LLP is a leading manufacturer, supplier & exporter of Socket Head
    Screws in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys. ISO 4762 & DIN 912 compliant
    with worldwide delivery.')
@section('meta_keywords', 'Socket Head Screws, Socket Head Screws Manufacturer, Socket Head Screws Supplier, Socket Head
    Screws Exporter, Stainless Steel Socket Head Screws, Carbon Steel Socket Head Screws, Alloy Steel Socket Head Screws,
    Duplex Socket Head Screws, Super Duplex Socket Head Screws, Socket Head Cap Screws, Allen Head Screws, ISO 4762 Socket
    Head Screws, DIN 912 Socket Head Screws, Industrial Socket Head Screws, High Tensile Socket Head Screws, Internal Hex
    Socket Screws, Industrial Fasteners, Allen Cap Screws, Hex Socket Screws, Precision Fasteners, High Strength Fasteners,
    Machine Screws, CNC Machined Fasteners, Corrosion Resistant Screws, Mechanical Fasteners, Engineering Fasteners,
    Threaded Industrial Screws, Heavy Duty Socket Screws')
@section('og_title', 'Socket Head Screws Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Premium-quality Socket Head Screws manufactured in Stainless Steel, Carbon Steel, Alloy
    Steel, Duplex, Super Duplex & Nickel Alloys. ISO 4762 & DIN 912 compliant with worldwide export support.')
@section('og_image', asset('assets/images/fasteners/socket-head-cap-screws.jpg'))
@section('og_type', 'product')
@section('twitter_title', 'Socket Head Screws Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Socket Head Screws for machinery, automotive, aerospace, and
    industrial applications. Available in multiple grades, thread types, and finishes with fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/fasteners/socket-head-cap-screws.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Socket Head Screws Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Socket Head Screws are high-strength fasteners designed with a cylindrical head and an internal hex
                        drive, providing superior tightening torque and secure fastening in precision engineering
                        applications. They are widely used in machinery, automotive, aerospace, industrial equipment, and
                        heavy engineering due to their excellent strength, compact design, and reliable performance. At <a
                            href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings
                            LLP</a>, we manufacture, supply, and export premium-quality Socket Head Screws in stainless
                        steel, carbon steel, alloy steel, duplex, super duplex, and nickel alloy grades. Manufactured to
                        international standards, our screws offer exceptional durability, corrosion resistance, and long
                        service life.
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
            <!-- <a href="#packaging">Packaging & Export</a> | -->
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
                    <img src="{{ asset('assets/images/fasteners/socket-head-cap-screws.jpg') }}"
                        alt="Socket Head Screws Manufacturer" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        A <strong>Socket Head Screw</strong>, also known as a <strong>Socket Head Cap Screw (SHCS)</strong>,
                        features a cylindrical head with an internal hexagonal socket that is tightened using an Allen key
                        or hex wrench. Its compact head design makes it ideal for applications with limited installation
                        space while providing high clamping force and excellent resistance to vibration.
                    </p>

                    <p class="fs-6 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we manufacture
                        precision-engineered Socket Head Screws using premium-quality raw materials and advanced CNC
                        machining processes. Available in a wide range of sizes, thread types, and material grades, our
                        screws are designed to meet the demanding requirements of industrial, mechanical, and structural
                        applications.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Datasheet Download -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Socket Head Screws Datasheet</h3>
            <p class="mb-3">
                Get the complete Socket Head Screws datasheet with chemical composition,
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
                                    <td>Socket Head Screw</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ISO 4762, DIN 912, ASTM, ASME, BS</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>M3 to M64 / ⅛" to 2½"</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>6 mm to 300 mm (Custom Sizes Available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thread Type</td>
                                    <td>Metric, UNC, UNF</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Drive Type</td>
                                    <td>Internal Hex (Allen)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Plain, Bright, Black Oxide, Zinc Plated, PTFE Coated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Cold Forged & CNC Machined</td>
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
                The chemical composition of <strong>Socket Head Screws</strong> varies depending on the selected material
                grade. At Moksh Tubes & Fittings LLP, our Socket Head Screws are manufactured using premium-quality raw
                materials that comply with ASTM, ASME, ISO, DIN, EN, and BS standards, ensuring excellent corrosion
                resistance, high strength, and long service life.
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
                    the selected material grade. Carbon Steel, Alloy Steel Grade 12.9, ASTM A193 B7, ASTM A320 L7, Duplex,
                    Super Duplex, and Nickel Alloy Socket Head Screws are also available in accordance with the relevant
                    ASTM, ISO, and DIN material specifications.</small></p>
        </div>
    </section>

    <!-- charts -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
            </div>
            <p class="text-center pb-3">
                Socket Head Screws are manufactured according to <strong>ISO 4762</strong> and <strong>DIN 912</strong>
                standards and are available in a wide range of diameters and lengths.
            </p>

            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Size</th>
                            <th>Thread Pitch</th>
                            <th>Standard Length (mm)</th>
                            <th>Approx. Weight (kg/100 pcs)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>M3</td>
                            <td>0.50</td>
                            <td>6–30</td>
                            <td>0.12</td>
                        </tr>
                        <tr class="t-row">
                            <td>M4</td>
                            <td>0.70</td>
                            <td>6–40</td>
                            <td>0.25</td>
                        </tr>
                        <tr class="t-row">
                            <td>M5</td>
                            <td>0.80</td>
                            <td>8–50</td>
                            <td>0.45</td>
                        </tr>
                        <tr class="t-row">
                            <td>M6</td>
                            <td>1.00</td>
                            <td>10–60</td>
                            <td>0.75</td>
                        </tr>
                        <tr class="t-row">
                            <td>M8</td>
                            <td>1.25</td>
                            <td>12–80</td>
                            <td>1.55</td>
                        </tr>
                        <tr class="t-row">
                            <td>M10</td>
                            <td>1.50</td>
                            <td>16–100</td>
                            <td>2.90</td>
                        </tr>
                        <tr class="t-row">
                            <td>M12</td>
                            <td>1.75</td>
                            <td>20–120</td>
                            <td>5.10</td>
                        </tr>
                        <tr class="t-row">
                            <td>M16</td>
                            <td>2.00</td>
                            <td>25–150</td>
                            <td>10.60</td>
                        </tr>
                        <tr class="t-row">
                            <td>M20</td>
                            <td>2.50</td>
                            <td>30–200</td>
                            <td>18.90</td>
                        </tr>
                        <tr class="t-row">
                            <td>M24</td>
                            <td>3.00</td>
                            <td>40–250</td>
                            <td>31.50</td>
                        </tr>
                        <tr class="t-row">
                            <td>M30</td>
                            <td>3.50</td>
                            <td>50–300</td>
                            <td>58.20</td>
                        </tr>
                        <tr class="t-row">
                            <td>M36</td>
                            <td>4.00</td>
                            <td>60–300</td>
                            <td>94.80</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted"><strong>Note:</strong> Dimensions and weights are approximate and
                may vary depending on the material grade, thread standard (Metric, UNC, UNF), head dimensions, surface
                finish, and manufacturing tolerances. Custom sizes and lengths are available upon request.</p>
        </div>
    </section>

    {{-- Material Pages --}}
    <style>
        .grade-card {
            border: 1px solid #e67e22;
            border-radius: 4px;
            transition: all 0.3s ease;
            cursor: pointer;
            background-color: #ffffff;
        }

        .grade-card .card-icon,
        .grade-card .card-title {
            color: #003366;
            transition: color 0.3s ease;
        }

        .grade-card .card-text {
            color: #6c757d;
            transition: color 0.3s ease;
        }

        .grade-card:hover {
            background-color: #e67e22;
            border-color: #e67e22;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(230, 126, 34, 0.2) !important;
        }

        .grade-card:hover .card-icon,
        .grade-card:hover .card-title,
        .grade-card:hover .card-text {
            color: #ffffff !important;
        }
    </style>
    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Grades &amp; Equivalent</h2>
            </div>

            <div class="row justify-content-center mb-5">
                <!-- Stainless Steel Grades -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-shield-check mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Stainless Steel Grades</h5>
                            <p class="card-text small mb-0">304 / 304L, 316 / 316L</p>
                        </div>
                    </div>
                </div>

                <!-- Carbon & Alloy Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gear-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Carbon &amp; Alloy Steel</h5>
                            <p class="card-text small mb-0">Carbon Steel, Alloy Steel Gr 12.9,<br>ASTM A193 B7, ASTM A320
                                L7
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Duplex & Super Duplex -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gem mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Duplex &amp; Super Duplex</h5>
                            <p class="card-text small mb-0">UNS S31803 / 2205<br>UNS S32750 / 2507</p>
                        </div>
                    </div>
                </div>

                <!-- High-Performance Alloys -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-award-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">High-Performance Alloys</h5>
                            <p class="card-text small mb-0">Inconel&reg;, Monel&reg;, Hastelloy&reg; Alloys</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title center mb-4">
                        <h2>International Equivalents</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th style="width: 25%; text-align: left; padding-left: 20px;">Standard</th>
                                    <th style="text-align: left; padding-left: 20px;">Specification</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>ASTM</strong></td>
                                    <td style="padding-left: 20px;">ASTM A193, ASTM A320</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>ASME</strong></td>
                                    <td style="padding-left: 20px;">ASME SA193, SA320</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>ISO</strong></td>
                                    <td style="padding-left: 20px;">ISO 4762</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>DIN</strong></td>
                                    <td style="padding-left: 20px;">DIN 912</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>EN</strong></td>
                                    <td style="padding-left: 20px;">EN ISO 4762</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>BS</strong></td>
                                    <td style="padding-left: 20px;">BS 4168</td>
                                </tr>
                            </tbody>
                        </table>
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
                <p class="text-center pb-3">Socket Head Screws are widely used in:</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Industrial Machinery</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive Industry</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-airplane"></i></div>
                        <h5>Aerospace Components</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Equipment</h5>
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
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Generation Plants</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cpu"></i></div>
                        <h5>Robotics & Automation</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-tools"></i></div>
                        <h5>Tool & Die Manufacturing</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore Projects</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Construction Equipment</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Precision Engineering</h5>
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
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>High-strength cylindrical head design</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-wrench-adjustable"></i></div>
                        <h4>Internal hex drive for high tightening torque</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box-arrow-in-down-right"></i></div>
                        <h4>Compact design for confined installation spaces</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Excellent corrosion and oxidation resistance</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>High mechanical strength and durability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-check2-circle"></i></div>
                        <h4>Precision-machined threads for secure fastening</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-activity"></i></div>
                        <h4>Resistant to vibration and loosening</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h4>Long service life with low maintenance</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
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
                <p class="text-center">The mechanical properties of <strong>Socket Head Screws</strong> depend on the
                    selected material grade and comply with applicable ASTM, ISO, and DIN standards. The table below shows
                    the typical mechanical properties for commonly supplied stainless steel grades.</p>
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
                    Alloy Steel Grade 12.9, ASTM A193 B7, ASTM A320 L7, Duplex, Super Duplex, and Nickel Alloy Socket Head
                    Screws are available in accordance with their respective ASTM, ISO, and DIN material specifications upon
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
                <p class="fs-5">We ensure that our <strong>Socket Head Screws</strong> are securely packaged to prevent damage
                    during transit. We use high-quality wooden crates, pallets, and shrink-wrapping for export shipments.</p>
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

    {{-- Packaging & Export --}}
    <!-- <section id="packaging" class="sec-padd-top sec-padd-bottom text-center">
            <div class="container">
                <div class="section-title center">
                    <h2>Packaging & Export</h2>
                </div>
                <p class="text-muted" style="max-width: 900px; margin: 0 auto; font-size: 16px; line-height: 1.8;">
                    We ensure that our Socket Head Screws are securely packaged to prevent damage during transit. We use
                    high-quality wooden crates,<br> pallets, and shrink-wrapping for export shipments.<br>
                    We regularly export to countries in the Middle East (UAE, Saudi Arabia, Qatar, Oman, Kuwait), Europe,
                    Africa, and Southeast Asia.
                </p>
            </div>
        </section> -->

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
                                <h4>What is a Socket Head Screw?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    A Socket Head Screw is a high-strength fastener with a cylindrical head and an internal
                                    hexagonal drive, tightened using an Allen key or hex wrench.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where are Socket Head Screws commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    They are widely used in machinery, automotive, aerospace, industrial equipment,
                                    robotics, and precision engineering applications.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We manufacture Socket Head Screws in stainless steel, carbon steel, alloy steel, duplex,
                                    super duplex, and nickel alloy grades.
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
                                    Yes. We manufacture Socket Head Screws in custom diameters, lengths, thread types,
                                    finishes, and material grades according to customer specifications.
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
                    Looking for a trusted <strong>Socket Head Screws</strong> manufacturer and supplier? Contact
                    <strong>Moksh Tubes & Fittings LLP</strong> for premium-quality industrial socket head screws,
                    competitive pricing, ready stock, technical support, and fast worldwide delivery. Request your free
                    quotation today.
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
                      "@id": "https://mokshtubes.com/socket-head-screws#webpage",
                      "name": "Socket Head Screws Manufacturer, Supplier & Exporter in India | Moksh Tubes",
                      "url": "https://mokshtubes.com/socket-head-screws",
                      "description": "Moksh Tubes & Fittings LLP is a leading manufacturer, supplier & exporter of Socket Head Screws in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys. ISO 4762 & DIN 912 compliant with worldwide delivery."
                    },
                    {
                      "@type": ["Product"],
                      "@id": "https://mokshtubes.com/#socketheadscrews",
                      "name": "Socket Head Screws",
                      "image": "https://mokshtubes.com/assets/images/fasteners/socket-head-cap-screws.jpg",
                      "category": "Fasteners",
                      "brand": { "@id": "https://mokshtubes.com/#organization" }
                    },
                    {
                      "@type": "BreadcrumbList",
                      "@id": "https://mokshtubes.com/socket-head-screws#breadcrumb",
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
                          "name": "Socket Head Screws",
                          "item": "https://mokshtubes.com/socket-head-screws"
                        }
                      ]
                    },
                    {
                      "@type": "FAQPage",
                      "@id": "https://mokshtubes.com/socket-head-screws#faq",
                      "mainEntity": [
                        {
                          "@type": "Question",
                          "name": "What is a Socket Head Screw?",
                          "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "A Socket Head Screw is a high-strength fastener with a cylindrical head and an internal hexagonal drive, tightened using an Allen key or hex wrench."
                          }
                        },
                        {
                          "@type": "Question",
                          "name": "Where are Socket Head Screws commonly used?",
                          "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "They are widely used in machinery, automotive, aerospace, industrial equipment, robotics, and precision engineering applications."
                          }
                        },
                        {
                          "@type": "Question",
                          "name": "Which materials are available?",
                          "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "We manufacture Socket Head Screws in stainless steel, carbon steel, alloy steel, duplex, super duplex, and nickel alloy grades."
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
                            "text": "Yes. We manufacture Socket Head Screws in custom diameters, lengths, thread types, finishes, and material grades according to customer specifications."
                          }
                        }
                      ]
                    }
                  ]
                }
                </script>
    @endverbatim
@endsection
