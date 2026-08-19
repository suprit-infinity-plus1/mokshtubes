@extends('layouts.master')
@section('title', 'Blind Flanges Manufacturer, Supplier & Exporter in India | Moksh Tubes')
<!-- 76 characters -->
@section('meta_description', 'Buy premium-quality Blind Flanges for secure pipeline end closure. Available in RF, RTJ &
    FF facing types, multiple pressure classes, and material grades with fast worldwide delivery.')
@section('meta_keywords', 'Blind Flanges, Blind Flanges Manufacturer, Blind Flanges Supplier, Blind Flanges Exporter,
    Stainless Steel Blind Flanges, Carbon Steel Blind Flanges, Alloy Steel Blind Flanges, Duplex Blind Flanges, Super Duplex
    Blind Flanges, High Pressure Blind Flanges, RF Blind Flanges, RTJ Blind Flanges, FF Blind Flanges, Forged Blind Flanges,
    Industrial Flanges, Pipeline End Closure')
@section('og_title', 'Blind Flanges Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Premium-quality Blind Flanges manufactured in Stainless Steel, Carbon Steel, Alloy Steel,
    Duplex, Super Duplex & Nickel Alloys. ISO 4762 & DIN 912 compliant with worldwide export support.')
@section('og_image', asset('assets/images/fasteners/blind-flanges.jpg'))
@section('og_type', 'product')
@section('twitter_title', 'Blind Flanges Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Blind Flanges for machinery, automotive, aerospace, and industrial
    applications. Available in multiple grades, thread types, and finishes with fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/fasteners/blind-flanges_11zon.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Blind Flanges Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Blind Flanges are solid pipe flanges used to seal the end of pipelines, valves, pressure vessels,
                        and piping systems. They provide a secure, leak-proof closure while allowing easy access for future
                        maintenance, inspection, or system expansion. At Moksh Tubes & Fittings LLP, we manufacture, supply,
                        and export premium-quality Blind Flanges in stainless steel, carbon steel, alloy steel, duplex,
                        super duplex, nickel alloys, and titanium grades. Manufactured to international standards, our Blind
                        Flanges deliver outstanding strength, corrosion resistance, and long-lasting performance in
                        demanding industrial environments.
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
            <!-- <a href="#chemical-composition">Chemical Composition</a> | -->
            <a href="#size-chart">Size & Weight Chart</a> |
            <a href="#grades">Grades & Equivalent</a> |
            <a href="#applications">Applications</a> |
            <a href="#features">Features & Advantages</a> |
            <a href="#mechanical-properties">Mechanical Properties</a> |
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
                    <img src="{{ asset('assets/images/fasteners/blind-flanges_11zon.jpg') }}"
                        alt="Blind Flanges Manufacturer" class="img-fluid rounded shadow-sm" width="550" height="350"
                        loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        A <strong>Blind Flange (BL Flange)</strong> is a solid flange without a bore, designed to close or
                        terminate the end of a piping system. It is bolted to another flange using a gasket to create a
                        tight, leak-proof seal. Blind Flanges are commonly used when future pipeline extensions, pressure
                        testing, maintenance, or equipment isolation may be required.
                    </p>

                    <p class="fs-6 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we manufacture
                        precision-engineered Blind Flanges using premium-quality forged materials and advanced CNC machining
                        technology. Our flanges are available in a wide range of sizes, pressure classes, and material
                        grades, making them suitable for high-pressure, high-temperature, and corrosive industrial
                        applications.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Datasheet Download -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Blind Flanges Datasheet</h3>
            <p class="mb-3">
                Get the complete Blind Flanges datasheet with chemical composition,
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
                                    <td>Blind Flange</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASME B16.5, ASME B16.47 (Series A & B), DIN, EN 1092-1, BS 4504, AWWA</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>½" to 48" (Custom Sizes Available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pressure Classes</td>
                                    <td>150#, 300#, 600#, 900#, 1500#, 2500#, PN6 to PN64</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Facing Types</td>
                                    <td>Raised Face (RF), Flat Face (FF), Ring Type Joint (RTJ)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Forged, CNC Machined</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="chemical-composition" class="sec-padd-top sec-padd-bottom bg-light">
                <div class="container">
                    <div class="section-title center">
                        <h2>Chemical Composition</h2>
                    </div>
                    <p class="text-center pb-3">
                        The chemical composition of <strong>Blind Flanges</strong> varies depending on the selected material grade. At Moksh Tubes & Fittings LLP, our Blind Flanges are manufactured using premium-quality raw materials that comply with ASTM, ASME, ISO, DIN, EN, and BS standards, ensuring excellent corrosion resistance, high strength, and long service life.
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
                                        <tr class="t-row"><td>Carbon (C)</td><td>0.08 Max</td><td>0.03 Max</td><td>0.08 Max</td><td>0.03 Max</td></tr>
                                        <tr class="t-row"><td>Manganese (Mn)</td><td>2.00 Max</td><td>2.00 Max</td><td>2.00 Max</td><td>2.00 Max</td></tr>
                                        <tr class="t-row"><td>Silicon (Si)</td><td>0.75 Max</td><td>0.75 Max</td><td>0.75 Max</td><td>0.75 Max</td></tr>
                                        <tr class="t-row"><td>Phosphorus (P)</td><td>0.045 Max</td><td>0.045 Max</td><td>0.045 Max</td><td>0.045 Max</td></tr>
                                        <tr class="t-row"><td>Sulfur (S)</td><td>0.030 Max</td><td>0.030 Max</td><td>0.030 Max</td><td>0.030 Max</td></tr>
                                        <tr class="t-row"><td>Chromium (Cr)</td><td>18.00–20.00</td><td>18.00–20.00</td><td>16.00–18.00</td><td>16.00–18.00</td></tr>
                                        <tr class="t-row"><td>Nickel (Ni)</td><td>8.00–10.50</td><td>8.00–12.00</td><td>10.00–14.00</td><td>10.00–14.00</td></tr>
                                        <tr class="t-row"><td>Molybdenum (Mo)</td><td>—</td><td>—</td><td>2.00–3.00</td><td>2.00–3.00</td></tr>
                                        <tr class="t-row"><td>Nitrogen (N)</td><td>0.10 Max</td><td>0.10 Max</td><td>0.10 Max</td><td>0.10 Max</td></tr>
                                        <tr class="t-row"><td>Iron (Fe)</td><td>Balance</td><td>Balance</td><td>Balance</td><td>Balance</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <p class="mt-2 text-muted text-center"><small><strong>Note:</strong> Chemical composition varies depending on the selected material grade. Carbon Steel, Alloy Steel Grade 12.9, ASTM A193 B7, ASTM A320 L7, Duplex, Super Duplex, and Nickel Alloy Blind Flanges are also available in accordance with the relevant ASTM, ISO, and DIN material specifications.</small></p>
                </div>
            </section> -->

    <!-- charts -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
            </div>
            <p class="text-center pb-3">
                Blind Flanges are manufactured according to <strong>ISO 4762</strong> and <strong>DIN 912</strong> standards
                and are available in a wide range of diameters and lengths.
            </p>

            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Pipe Size (NPS)</th>
                            <th>Outside Diameter (OD) - Class 150 (mm)</th>
                            <th>Thickness - Class 150 (mm)</th>
                            <th>Approx. Weight (kg) - Class 150</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>1/2"</td>
                            <td>89.0</td>
                            <td>11.2</td>
                            <td>0.7</td>
                        </tr>
                        <tr class="t-row">
                            <td>3/4"</td>
                            <td>98.6</td>
                            <td>12.7</td>
                            <td>0.9</td>
                        </tr>
                        <tr class="t-row">
                            <td>1"</td>
                            <td>108.0</td>
                            <td>14.3</td>
                            <td>1.1</td>
                        </tr>
                        <tr class="t-row">
                            <td>1½"</td>
                            <td>127.0</td>
                            <td>17.5</td>
                            <td>1.8</td>
                        </tr>
                        <tr class="t-row">
                            <td>2"</td>
                            <td>152.4</td>
                            <td>19.1</td>
                            <td>2.7</td>
                        </tr>
                        <tr class="t-row">
                            <td>3"</td>
                            <td>190.5</td>
                            <td>23.9</td>
                            <td>5.4</td>
                        </tr>
                        <tr class="t-row">
                            <td>4"</td>
                            <td>228.6</td>
                            <td>23.9</td>
                            <td>7.7</td>
                        </tr>
                        <tr class="t-row">
                            <td>6"</td>
                            <td>279.4</td>
                            <td>25.4</td>
                            <td>11.8</td>
                        </tr>
                        <tr class="t-row">
                            <td>8"</td>
                            <td>342.9</td>
                            <td>28.4</td>
                            <td>21.3</td>
                        </tr>
                        <tr class="t-row">
                            <td>10"</td>
                            <td>406.4</td>
                            <td>30.2</td>
                            <td>31.8</td>
                        </tr>
                        <tr class="t-row">
                            <td>12"</td>
                            <td>482.6</td>
                            <td>31.8</td>
                            <td>49.9</td>
                        </tr>
                        <tr class="t-row">
                            <td>16"</td>
                            <td>596.9</td>
                            <td>36.6</td>
                            <td>83.9</td>
                        </tr>
                        <tr class="t-row">
                            <td>20"</td>
                            <td>698.5</td>
                            <td>42.9</td>
                            <td>133.8</td>
                        </tr>
                        <tr class="t-row">
                            <td>24"</td>
                            <td>812.8</td>
                            <td>47.8</td>
                            <td>190.5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted"><strong>Note:</strong> Dimensions and weights are for Class 150 RF
                Blind Flanges. Data for Class 300, 600, 900, 1500, and 2500, as well as RTJ and FF facings, are available
                upon request or in our datasheet.</p>
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
                <p class="text-center pb-3">Blind Flanges are widely used in:</p>
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
                        <h4>Complete isolation of piping systems</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-wrench-adjustable"></i></div>
                        <h4>Provides a secure, leak-proof seal</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-box-arrow-in-down-right"></i></div>
                        <h4>Withstands high-pressure and high-temperature environments</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Available in RF, RTJ, and FF facings for versatile applications</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Allows for easy pipeline inspection, modification, and maintenance</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-check2-circle"></i></div>
                        <h4>Precision CNC machined for accurate fitment and alignment</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-activity"></i></div>
                        <h4>Excellent corrosion resistance for harsh industrial conditions</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h4>Long service life with reliable structural integrity</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Manufactured to ASME, DIN, and AWWA international standards</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
                <p class="text-center">The mechanical properties of <strong>Blind Flanges</strong> depend on the selected
                    material grade and comply with applicable ASTM, ISO, and DIN standards. The table below shows the
                    typical mechanical properties for commonly supplied stainless steel grades.</p>
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
                    Alloy Steel Grade 12.9, ASTM A193 B7, ASTM A320 L7, Duplex, Super Duplex, and Nickel Alloy Blind Flanges
                    are available in accordance with their respective ASTM, ISO, and DIN material specifications upon
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
                <p class="fs-5">We ensure that our <strong>Blind Flanges</strong> are securely packaged to prevent damage during
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

    {{-- Packaging & Export --}}
    <!-- <section id="packaging" class="sec-padd-top sec-padd-bottom text-center">
            <div class="container">
                <div class="section-title center">
                    <h2>Packaging & Export</h2>
                </div>
                <p class="text-muted" style="max-width: 900px; margin: 0 auto; font-size: 16px; line-height: 1.8;">
                    We ensure secure and standardized packaging to prevent damage during transit. Our <strong>Blind
                        Flanges</strong> are packed in high-quality wooden crates, shrink-wrapped, and securely strapped on
                    pallets for international shipping.
                    Moksh Tubes & Fittings LLP is a trusted exporter with a strong presence in the Middle East, Europe, Africa,
                    and Southeast Asia.
                </p>
            </div>
        </section> -->

    {{-- Export Locations --}}
    <!-- <section class="sec-padd-top sec-padd-bottom bg-light">
            <div class="container text-center">
                <div class="section-title center">
                    <h2>Global Export Locations</h2>
                </div>
                <div class="row g-3 justify-content-center mt-4">
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Saudi Arabia</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">UAE</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Qatar</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Oman</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Kuwait</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Bahrain</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Egypt</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">South Africa</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Nigeria</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Indonesia</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Malaysia</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Vietnam</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Thailand</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Australia</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">United Kingdom</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Germany</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">United States</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Canada</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Mexico</span></div>
                    <div class="col-auto"><span class="badge bg-secondary px-3 py-2 fs-6">Brazil</span></div>
                </div>
            </div>
        </section> -->

    {{-- faq --}}
    <section id="faq" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5 text-center">
                <h2 style="color: #174268;">Frequently Asked Questions (FAQ)</h2>
                <hr style="width: 50px; border-top: 2px solid #db7227; opacity: 1; margin: 15px auto;">
            </div>

            <div class="accordion faq-accordion" id="faqAccordion">

                <!-- FAQ Item 1 -->
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is a Blind Flange?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            A Blind Flange is a solid disc used to block off a pipeline or to create a stop. It is heavily
                            stressed due to system pressure, making it crucial for safely terminating piping systems and
                            pressure vessels.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What is the difference between Raised Face (RF) and Ring Type Joint (RTJ) Blind Flanges?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            A Raised Face (RF) Blind Flange has a slightly raised surface around the bore area to
                            concentrate gasket pressure. An RTJ (Ring Type Joint) Blind Flange has a machined groove
                            designed to accommodate a metal ring gasket, providing a high-integrity seal for high-pressure
                            and high-temperature applications.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What materials are Moksh Tubes Blind Flanges available in?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            We manufacture Blind Flanges in Stainless Steel (304, 316), Carbon Steel, Alloy Steel, Duplex,
                            Super Duplex, Nickel Alloys, and Titanium, catering to diverse industrial requirements.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Are your Blind Flanges manufactured to international standards?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Yes, our Blind Flanges are manufactured in strict compliance with ASME B16.5, ASME B16.47, DIN,
                            EN 1092-1, and AWWA standards.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Can you manufacture custom sizes and pressure classes?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Yes, we can manufacture Blind Flanges in non-standard sizes, heavy wall thicknesses, and special
                            facings based on customer drawings and specifications.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Request a Quote</h2>
                <p>
                    Looking for a trusted <strong>Blind Flanges</strong> manufacturer and supplier? Contact <strong>Moksh
                        Tubes & Fittings LLP</strong> for premium-quality industrial blind flanges, competitive pricing,
                    ready stock, technical support, and fast worldwide delivery. Request your free quotation today.
                </p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>


    <style>
        .faq-accordion .accordion-button {
            background-color: #e9ecef !important;
            color: #495057 !important;
            border: none;
            box-shadow: none;
            font-size: 15px;
            padding: 15px 20px;
            border-radius: 0 !important;
        }

        .faq-accordion .accordion-button:focus {
            box-shadow: none;
        }

        .faq-accordion .accordion-button:not(.collapsed) {
            background-color: #db7227 !important;
            color: #ffffff !important;
            box-shadow: none;
        }

        .faq-accordion .accordion-button::after {
            background-image: none !important;
            content: '+';
            font-size: 20px;
            color: #fff;
            background-color: #174268;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 3px;
            font-weight: bold;
            line-height: 1;
        }

        .faq-accordion .accordion-button:not(.collapsed)::after {
            content: '-';
        }

        .faq-accordion .accordion-item {
            border: none;
            margin-bottom: 5px;
            background-color: transparent;
        }

        .faq-accordion .accordion-body {
            background-color: #fff;
            border: 1px solid #e9ecef;
            border-top: none;
            font-size: 15px;
            padding: 20px;
        }
    </style>

    @verbatim
        <script type="application/ld+json">
                {
                  "@context": "https://schema.org/",
                  "@type": "Product",
                  "name": "Blind Flanges",
                  "image": "https://mokshtubes.com/assets/images/fasteners/blind-flanges.jpg",
                  "description": "Premium-quality Blind Flanges manufactured in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys. Compliant with ISO 4762 & DIN 912 standards.",
                  "brand": {
                    "@type": "Brand",
                    "name": "Moksh Tubes & Fittings LLP"
                  },
                  "manufacturer": {
                    "@type": "Organization",
                    "name": "Moksh Tubes & Fittings LLP",
                    "url": "https://mokshtubes.com"
                  },
                  "offers": {
                    "@type": "AggregateOffer",
                    "url": "https://mokshtubes.com",
                    "priceCurrency": "USD",
                    "price": "1.00",
                    "availability": "https://schema.org/InStock"
                  },
                  "mainEntityOfPage": {
                    "@type": "FAQPage",
                    "mainEntity": [
                      {
                        "@type": "Question",
                        "name": "\"What is a Blind Flange?\"",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "\"A Blind Flange is a solid disc used to block off a pipeline or to create a stop. It is heavily stressed due to system pressure, making it crucial for safely terminating piping systems and pressure vessels.\""
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "\"What is the difference between Raised Face (RF) and Ring Type Joint (RTJ) Blind Flanges?\"",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "\"A Raised Face (RF) Blind Flange has a slightly raised surface around the bore area to concentrate gasket pressure. An RTJ (Ring Type Joint) Blind Flange has a machined groove designed to accommodate a metal ring gasket, providing a high-integrity seal for high-pressure and high-temperature applications.\""
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "\"What materials are Moksh Tubes Blind Flanges available in?\"",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "\"We manufacture Blind Flanges in Stainless Steel (304, 316), Carbon Steel, Alloy Steel, Duplex, Super Duplex, Nickel Alloys, and Titanium, catering to diverse industrial requirements.\""
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "\"Are your Blind Flanges manufactured to international standards?\"",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "\"Yes, our Blind Flanges are manufactured in strict compliance with ASME B16.5, ASME B16.47, DIN, EN 1092-1, and AWWA standards.\""
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "\"Can you manufacture custom sizes and pressure classes?\"",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "\"Yes, we can manufacture Blind Flanges in non-standard sizes, heavy wall thicknesses, and special facings based on customer drawings and specifications.\""
                        }
                      }
                    ]
                  }
                }
                </script>
    @endverbatim
@endsection
