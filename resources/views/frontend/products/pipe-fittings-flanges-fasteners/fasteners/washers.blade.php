@extends('layouts.master')
@section('title', 'Industrial Washers Manufacturer, Supplier & Exporter in India | Moksh Tubes')
@section('meta_description', 'Moksh Tubes & Fittings LLP is a leading manufacturer, supplier & exporter of Industrial
    Washers in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys. ASTM, DIN & ISO standards
with worldwide delivery.')
@section('meta_keywords', 'Industrial Washers, Industrial Washers Manufacturer, Industrial Washers Supplier, Industrial
Washers Exporter')
@section('og_image', asset('/assets/images/product/flangs/FASTENERS.webp'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/FASTENERS.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Industrial Washers Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Premium-quality Industrial Washers manufactured in Stainless Steel, Carbon Steel, Alloy Steel,
                        Duplex, Super Duplex & Nickel Alloys. ASTM, DIN & ISO compliant with worldwide export support.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Navigation -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100 shadow-sm">
        <div class="container text-center py-2">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#composition">Chemical Composition</a> |
            <a href="#size-chart">Size Chart</a> |
            <a href="#grades">Grades</a> |
            <a href="#applications">Applications</a> |
            <a href="#features">Advantages</a> |
            <a href="#mechanical-properties">Mechanical</a> |
            <a href="#why-choose-us">Why CHoose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>

    {{-- Product Overview --}}
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Product Overview</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/FASTENERS.webp') }}"
                        alt="Industrial Washers Manufacturer" class="img-fluid rounded shadow-sm" width="550" height="350"
                        loading="lazy">
                </div>
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        An <strong>Industrial Washer</strong> is a thin, flat disc with a central hole designed to be placed
                        between a fastener and the mounting surface. Washers help distribute the clamping force evenly,
                        reduce wear on surfaces, prevent loosening caused by vibration, and improve the overall performance
                        of bolted joints. Depending on the application, different types of washers are available, including
                        <strong>Flat Washers, Spring Washers, Lock Washers, Plain Washers, Fender Washers, and Square
                            Washers</strong>.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we manufacture high-quality
                        Industrial Washers using premium-grade materials and precision machining processes. Our washers are
                        available in a wide range of sizes, thicknesses, and material grades to meet the requirements of
                        industrial, construction, and engineering applications.
                    </p>
                    <p class="fs-6 text-justify">
                        Industrial Washers are precision-engineered fastening components used with bolts, nuts, and threaded
                        rods to distribute load, protect surfaces, reduce vibration, and ensure secure fastening.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Datasheet Download -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Washers Datasheet</h3>
            <p class="mb-3">
                Get the complete Washers datasheet with chemical composition,
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

    {{-- Specifications --}}
    <section id="specifications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>SPECIFICATIONS</h2>
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
                                    <td><strong>Product</strong></td>
                                    <td>Industrial Washers</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Standards</strong></td>
                                    <td>ASTM, DIN, ISO, ASME, BS</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Material</strong></td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Size Range</strong></td>
                                    <td>M6 to M100 / &frac14;" to 4"</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Washer Types</strong></td>
                                    <td>Flat Washer, Spring Washer, Lock Washer, Plain Washer, Fender Washer, Square Washer
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Surface Finish</strong></td>
                                    <td>Plain, Bright, Zinc Plated, PTFE Coated, Hot Dip Galvanized</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Thickness</strong></td>
                                    <td>Standard & Custom Sizes Available</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Manufacturing</strong></td>
                                    <td>Stamped, Forged & CNC Machined</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Chemical Composition --}}
    <section id="composition" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Chemical Composition</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="text-center mb-4">
                        The chemical composition of Industrial Washers varies depending on the selected material grade. At
                        Moksh Tubes & Fittings LLP, our Industrial Washers are manufactured using premium-quality raw
                        materials that comply with ASTM, ASME, DIN, ISO, EN, and BS standards, ensuring excellent corrosion
                        resistance, high mechanical strength, and long service life.
                    </p>
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
                                    <td><strong>Carbon (C)</strong></td>
                                    <td>0.08 Max</td>
                                    <td>0.03 Max</td>
                                    <td>0.08 Max</td>
                                    <td>0.03 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Manganese (Mn)</strong></td>
                                    <td>2.00 Max</td>
                                    <td>2.00 Max</td>
                                    <td>2.00 Max</td>
                                    <td>2.00 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Silicon (Si)</strong></td>
                                    <td>0.75 Max</td>
                                    <td>0.75 Max</td>
                                    <td>0.75 Max</td>
                                    <td>0.75 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Phosphorus (P)</strong></td>
                                    <td>0.045 Max</td>
                                    <td>0.045 Max</td>
                                    <td>0.045 Max</td>
                                    <td>0.045 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Sulfur (S)</strong></td>
                                    <td>0.030 Max</td>
                                    <td>0.030 Max</td>
                                    <td>0.030 Max</td>
                                    <td>0.030 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Chromium (Cr)</strong></td>
                                    <td>18.00–20.00</td>
                                    <td>18.00–20.00</td>
                                    <td>16.00–18.00</td>
                                    <td>16.00–18.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Nickel (Ni)</strong></td>
                                    <td>8.00–10.50</td>
                                    <td>8.00–12.00</td>
                                    <td>10.00–14.00</td>
                                    <td>10.00–14.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Molybdenum (Mo)</strong></td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>2.00–3.00</td>
                                    <td>2.00–3.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Nitrogen (N)</strong></td>
                                    <td>0.10 Max</td>
                                    <td>0.10 Max</td>
                                    <td>0.10 Max</td>
                                    <td>0.10 Max</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Iron (Fe)</strong></td>
                                    <td>Balance</td>
                                    <td>Balance</td>
                                    <td>Balance</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-2 small text-muted"><strong>Note:</strong> Chemical composition varies
                        depending on the selected material grade. Carbon Steel, Alloy Steel, Duplex, Super Duplex, and
                        Nickel Alloy Industrial Washers are also available in accordance with the relevant ASTM and ASME
                        material specifications.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Size & Weight Chart --}}
    <section id="size-chart" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Size & Weight Chart</h2>
            </div>
            <p class="text-center mb-4">
                Industrial Washers are manufactured according to ASTM, DIN, ISO, and ASME standards and are available in a
                wide range of inner diameters, outer diameters, and thicknesses.
            </p>
            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Washer Size</th>
                            <th>Inner Diameter (mm)</th>
                            <th>Outer Diameter (mm)</th>
                            <th>Thickness (mm)</th>
                            <th>Approx. Weight (kg/100 pcs)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>M6</td>
                            <td>6.4</td>
                            <td>12</td>
                            <td>1.6</td>
                            <td>0.20</td>
                        </tr>
                        <tr class="t-row">
                            <td>M8</td>
                            <td>8.4</td>
                            <td>16</td>
                            <td>1.6</td>
                            <td>0.35</td>
                        </tr>
                        <tr class="t-row">
                            <td>M10</td>
                            <td>10.5</td>
                            <td>20</td>
                            <td>2.0</td>
                            <td>0.60</td>
                        </tr>
                        <tr class="t-row">
                            <td>M12</td>
                            <td>13.0</td>
                            <td>24</td>
                            <td>2.5</td>
                            <td>0.95</td>
                        </tr>
                        <tr class="t-row">
                            <td>M16</td>
                            <td>17.0</td>
                            <td>30</td>
                            <td>3.0</td>
                            <td>1.80</td>
                        </tr>
                        <tr class="t-row">
                            <td>M20</td>
                            <td>21.0</td>
                            <td>37</td>
                            <td>3.0</td>
                            <td>2.90</td>
                        </tr>
                        <tr class="t-row">
                            <td>M24</td>
                            <td>25.0</td>
                            <td>44</td>
                            <td>4.0</td>
                            <td>4.60</td>
                        </tr>
                        <tr class="t-row">
                            <td>M30</td>
                            <td>31.0</td>
                            <td>56</td>
                            <td>4.0</td>
                            <td>7.40</td>
                        </tr>
                        <tr class="t-row">
                            <td>M36</td>
                            <td>37.0</td>
                            <td>66</td>
                            <td>5.0</td>
                            <td>11.20</td>
                        </tr>
                        <tr class="t-row">
                            <td>M42</td>
                            <td>43.0</td>
                            <td>78</td>
                            <td>6.0</td>
                            <td>16.40</td>
                        </tr>
                        <tr class="t-row">
                            <td>M48</td>
                            <td>50.0</td>
                            <td>92</td>
                            <td>6.0</td>
                            <td>23.10</td>
                        </tr>
                        <tr class="t-row">
                            <td>M56</td>
                            <td>58.0</td>
                            <td>105</td>
                            <td>8.0</td>
                            <td>34.80</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted"><strong>Note:</strong> Dimensions and weights are approximate and
                may vary depending on the washer type (Flat, Spring, Lock, Plain, Fender, or Square), material grade,
                surface finish, and applicable manufacturing standards. Custom sizes and thicknesses are available upon
                request.</p>
        </div>
    </section>

    {{-- Grades & Equivalent --}}
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
                            <p class="card-text small mb-0">Carbon Steel, Alloy Steel,<br>Duplex, Super Duplex</p>
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
                            <a class="w-100" href="{{ route('materials.duplex-and-super-duplex.grade', 'duplex-s31803') }}">
                                <img class="w-100"
                                    src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-6061-t6.webp') }}"
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
                <p class="text-center pb-3">Industrial Washers are widely used in:</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
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
                        <div class="application-icon"><i class="bi bi-funnel"></i></div>
                        <h5>Chemical Processing Industries</h5>
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
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Infrastructure</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-bricks"></i></div>
                        <h5>Structural Steel Fabrication</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Industrial Machinery</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore Projects</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive Industry</h5>
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
                        <h4>Protects surfaces from damage and wear</h4>
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
                        <div class="advantage-icon"><i class="bi bi-activity"></i></div>
                        <h4>Reduces loosening caused by vibration</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>High mechanical strength and durability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                        <h4>Available in multiple sizes and washer types</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-bullseye"></i></div>
                        <h4>Precision-manufactured for accurate fit</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h4>Long service life with minimal maintenance</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Manufactured according to international quality standards</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-check2-circle"></i></div>
                        <h4>Even load distribution for secure fastening</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Mechanical Properties --}}
    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Mechanical Properties</h2>
            </div>
            <p class="text-center mb-4">
                The mechanical properties of <strong>Industrial Washers</strong> depend on the selected material grade and
                comply with applicable ASTM and ASME standards. The table below shows the typical mechanical properties for
                commonly supplied stainless steel grades.
            </p>
            <div class="table-responsive mt-4">
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
                            <td><strong>Tensile Strength (MPa)</strong></td>
                            <td>515 Min</td>
                            <td>515 Min</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Yield Strength (MPa)</strong></td>
                            <td>205 Min</td>
                            <td>205 Min</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Hardness (HB Max)</strong></td>
                            <td>201</td>
                            <td>217</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Corrosion Resistance</strong></td>
                            <td>Excellent</td>
                            <td>Excellent</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted"><strong>Note:</strong> Mechanical properties for Carbon Steel,
                Alloy Steel, Duplex, Super Duplex, and Nickel Alloy Industrial Washers are available in accordance with
                their respective ASTM/ASME material specifications upon request.</p>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <style>
        .why-card {
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            transition: all 0.3s ease;
            background-color: #ffffff;
            height: 100%;
        }

        .why-card .icon-circle {
            background-color: #e67e22;
            color: #ffffff;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .why-card .why-text {
            color: #003366;
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }

        .why-card:hover {
            border-color: #e67e22;
            box-shadow: 0 5px 15px rgba(230, 126, 34, 0.1);
        }

        .why-card:hover .icon-circle {
            background-color: #003366;
        }
    </style>
    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Why Choose Moksh Tubes &amp; Fittings LLP?</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="why-card text-center p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-award"></i></div>
                        <h6 class="why-text mb-0">Leading Manufacturer, Supplier &amp; Exporter</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card text-center p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-hexagon"></i></div>
                        <h6 class="why-text mb-0">Premium Quality Industrial Fasteners</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card text-center p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-diagram-3"></i></div>
                        <h6 class="why-text mb-0">Wide Range of Sizes, Thread Types &amp; Material Grades</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card text-center p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-box-seam"></i></div>
                        <h6 class="why-text mb-0">Ready Stock for Immediate Dispatch</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card text-center p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-tags"></i></div>
                        <h6 class="why-text mb-0">Competitive Pricing</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card text-center p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-shield-check"></i></div>
                        <h6 class="why-text mb-0">Strict Quality Assurance</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card text-center p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-globe2"></i></div>
                        <h6 class="why-text mb-0">Global Export Experience</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card text-center p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-file-earmark-text"></i></div>
                        <h6 class="why-text mb-0">Complete Documentation Support</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card text-center p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-tools"></i></div>
                        <h6 class="why-text mb-0">Expert Technical Assistance</h6>
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
                                <h4>What are Industrial Washers?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Industrial Washers are flat or shaped fastening components placed between a bolt, nut,
                                    or screw and the mounting surface to distribute load, reduce wear, and improve joint
                                    stability.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which types of washers do you supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We supply Flat Washers, Spring Washers, Lock Washers, Plain Washers, Fender Washers,
                                    Square Washers, and custom washer types.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We manufacture Industrial Washers in stainless steel, carbon steel, alloy steel, duplex,
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
                                    Yes. We manufacture Industrial Washers in custom sizes, thicknesses, finishes, and
                                    material grades according to customer specifications.
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
                    Looking for a trusted <strong>Industrial Washers</strong> manufacturer and supplier? Contact
                    <strong>Moksh Tubes & Fittings LLP</strong> for premium-quality industrial washers, competitive pricing,
                    ready stock, technical support, and fast worldwide delivery. Request your free quotation today.
                </p>
                <a href="{{ route('contact-us') }}" class="contact-cta-btn">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection