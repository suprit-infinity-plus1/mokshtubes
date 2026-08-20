@extends('layouts.master')
@section('title', 'Hex Bolts Manufacturer, Supplier & Exporter in India | Moksh Tubes')
@section('meta_description', 'Moksh Tubes & Fittings LLP is a leading manufacturer, supplier & exporter of Hex Bolts in
    Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys. ASTM A193, DIN & ISO standards with
worldwide delivery.')
@section('meta_keywords', 'Hex Bolts, Hex Bolts Manufacturer, Hex Bolts Supplier, Hex Bolts Exporter, Stainless Steel
    Hex Bolts, Carbon Steel Hex Bolts, Alloy Steel Hex Bolts, Duplex Hex Bolts, Super Duplex Hex Bolts, ASTM A193 Hex Bolts,
    ASTM A320 Hex Bolts, DIN 931 Hex Bolts, DIN 933 Hex Bolts, ISO 4014 Hex Bolts, ISO 4017 Hex Bolts, Heavy Duty Hex Bolts,
    Industrial Fasteners, High Tensile Hex Bolts, Structural Bolts, Full Thread Hex Bolts, Partial Thread Hex Bolts,
    Corrosion Resistant Bolts, Heavy Hex Bolts, Mechanical Fasteners, Construction Fasteners, Pipeline Fasteners,
Engineering Fasteners, Precision Fasteners')
@section('og_title', 'Hex Bolts Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Premium-quality Hex Bolts manufactured in Stainless Steel, Carbon Steel, Alloy Steel,
Duplex, Super Duplex & Nickel Alloys. ASTM A193, DIN & ISO compliant with worldwide export support.')
@section('og_image', asset('assets/images/fasteners/hax-bolt.png'))
@section('og_type', 'product')
@section('twitter_title', 'Hex Bolts Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Hex Bolts for construction, structural steel, industrial machinery,
and piping systems. Available in multiple grades, thread types, and finishes with fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/fasteners/hax-bolt.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Hex Bolts Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Hex Bolts are high-strength fasteners with a six-sided hexagonal head, designed for secure and
                        reliable fastening in industrial, construction, and engineering applications. Known for their
                        excellent load-bearing capacity, durability, and corrosion resistance, hex bolts are widely used in
                        machinery, structural steel, piping systems, and heavy equipment. At <a href="{{ route('index') }}"
                            class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we manufacture,
                        supply, and export premium-quality Hex Bolts in stainless steel, carbon steel, alloy steel, duplex,
                        super duplex, and nickel alloy grades. Manufactured to international standards, our hex bolts
                        deliver superior performance in demanding operating conditions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Navigation (Standardized sticky tabs)-->
    <div class="sticky-top bg-white border-bottom material-tabs w-100 shadow-sm">
        <div class="container text-center py-2">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#chemical-composition">Chemical</a> |
            <a href="#size-chart">Size Chart</a> |
            <a href="#grades">Grades</a> |
            <a href="#applications">Applications</a> |
            <a href="#features">Features</a> |
            <a href="#mechanical-properties">Mechanical</a> |
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>

    {{-- Product Overview --}}
    <section id="overview" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Product Overview</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/fasteners/hax-bolt.png') }}" alt="Hex Bolts Manufacturer"
                        class="img-fluid rounded shadow-sm" width="550" height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        A <strong>Hex Bolt</strong> is a threaded fastener with a hexagonal head that is tightened using a
                        wrench or socket. It is typically used with a matching nut and washer to create a strong and secure
                        joint between two or more components. Hex bolts are available in both <strong>fully
                            threaded</strong> and <strong>partially threaded</strong> designs, making them suitable for a
                        wide range of industrial and structural applications.
                    </p>
                    <p class="fs-6 text-justify">
                        At <strong>Moksh Tubes & Fittings LLP</strong>, we manufacture precision-engineered Hex Bolts using
                        premium-quality raw materials and advanced manufacturing processes. Our bolts offer excellent
                        dimensional accuracy, high tensile strength, and reliable performance under heavy loads, vibration,
                        and corrosive environments.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Datasheet Download -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hex Bolts Datasheet</h3>
            <p class="mb-3">
                Get the complete Hex Bolts datasheet with chemical composition,
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
    <section id="specifications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-start">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Specification</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td class="fw-bold ps-4">Product</td>
                                    <td class="ps-4">Hex Bolt</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold ps-4">Standards</td>
                                    <td class="ps-4">ASTM, DIN, ISO, ASME, BS</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold ps-4">Material</td>
                                    <td class="ps-4">Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex &
                                        Nickel Alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold ps-4">Diameter</td>
                                    <td class="ps-4">M6 to M100 / ¼" to 4"</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold ps-4">Length</td>
                                    <td class="ps-4">10 mm to 1000 mm (Custom Sizes Available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold ps-4">Thread Type</td>
                                    <td class="ps-4">Metric, UNC, UNF, BSW</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold ps-4">Thread Style</td>
                                    <td class="ps-4">Full Thread & Partial Thread</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold ps-4">Surface Finish</td>
                                    <td class="ps-4">Plain, Bright, Zinc Plated, PTFE Coated, Hot Dip Galvanized</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold ps-4">Manufacturing</td>
                                    <td class="ps-4">Hot Forged & CNC Machined</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Chemical Composition --}}
    <section id="chemical-composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Chemical Composition</h2>
            </div>
            <p class="text-center mb-4">
                The chemical composition of <strong>Hex Bolts</strong> varies depending on the selected material grade. At
                <strong>Moksh Tubes & Fittings LLP</strong>, our Hex Bolts are manufactured using premium-quality raw
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
                            <td class="fw-bold">Carbon (C)</td>
                            <td>0.08 Max</td>
                            <td>0.03 Max</td>
                            <td>0.08 Max</td>
                            <td>0.03 Max</td>
                        </tr>
                        <tr class="t-row">
                            <td class="fw-bold">Manganese (Mn)</td>
                            <td>2.00 Max</td>
                            <td>2.00 Max</td>
                            <td>2.00 Max</td>
                            <td>2.00 Max</td>
                        </tr>
                        <tr class="t-row">
                            <td class="fw-bold">Silicon (Si)</td>
                            <td>0.75 Max</td>
                            <td>0.75 Max</td>
                            <td>0.75 Max</td>
                            <td>0.75 Max</td>
                        </tr>
                        <tr class="t-row">
                            <td class="fw-bold">Phosphorus (P)</td>
                            <td>0.045 Max</td>
                            <td>0.045 Max</td>
                            <td>0.045 Max</td>
                            <td>0.045 Max</td>
                        </tr>
                        <tr class="t-row">
                            <td class="fw-bold">Sulfur (S)</td>
                            <td>0.030 Max</td>
                            <td>0.030 Max</td>
                            <td>0.030 Max</td>
                            <td>0.030 Max</td>
                        </tr>
                        <tr class="t-row">
                            <td class="fw-bold">Chromium (Cr)</td>
                            <td>18.00–20.00</td>
                            <td>18.00–20.00</td>
                            <td>16.00–18.00</td>
                            <td>16.00–18.00</td>
                        </tr>
                        <tr class="t-row">
                            <td class="fw-bold">Nickel (Ni)</td>
                            <td>8.00–10.50</td>
                            <td>8.00–12.00</td>
                            <td>10.00–14.00</td>
                            <td>10.00–14.00</td>
                        </tr>
                        <tr class="t-row">
                            <td class="fw-bold">Molybdenum (Mo)</td>
                            <td>—</td>
                            <td>—</td>
                            <td>2.00–3.00</td>
                            <td>2.00–3.00</td>
                        </tr>
                        <tr class="t-row">
                            <td class="fw-bold">Nitrogen (N)</td>
                            <td>0.10 Max</td>
                            <td>0.10 Max</td>
                            <td>0.10 Max</td>
                            <td>0.10 Max</td>
                        </tr>
                        <tr class="t-row">
                            <td class="fw-bold">Iron (Fe)</td>
                            <td>Balance</td>
                            <td>Balance</td>
                            <td>Balance</td>
                            <td>Balance</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-2 text-muted text-center"><small><strong>Note:</strong> Chemical composition varies depending on
                    the selected material grade. Carbon Steel, Alloy Steel, ASTM A193 Grade B7, ASTM A193 Grade B7M, ASTM
                    A320 Grade L7, Duplex Stainless Steel, Super Duplex Stainless Steel, Inconel®, Monel®, Hastelloy®, and
                    other Nickel Alloy Hex Bolts are manufactured in accordance with the relevant ASTM and ASME material
                    specifications.</small></p>
        </div>
    </section>

    {{-- Size & Weight Chart --}}
    <section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Size & Weight Chart</h2>
            </div>
            <p class="text-center mb-4">
                Hex Bolts are manufactured according to <strong>ASTM, DIN, ISO, and ASME</strong> standards and are
                available in a wide range of diameters, lengths, and thread configurations.
            </p>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Bolt Size</th>
                            <th>Thread Pitch</th>
                            <th>Across Flats (mm)</th>
                            <th>Standard Length (mm)</th>
                            <th>Approx. Weight (kg/100 pcs)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>M6</td>
                            <td>1.0</td>
                            <td>10</td>
                            <td>10–60</td>
                            <td>0.30</td>
                        </tr>
                        <tr class="t-row">
                            <td>M8</td>
                            <td>1.25</td>
                            <td>13</td>
                            <td>16–80</td>
                            <td>0.65</td>
                        </tr>
                        <tr class="t-row">
                            <td>M10</td>
                            <td>1.5</td>
                            <td>17</td>
                            <td>20–100</td>
                            <td>1.20</td>
                        </tr>
                        <tr class="t-row">
                            <td>M12</td>
                            <td>1.75</td>
                            <td>19</td>
                            <td>25–120</td>
                            <td>2.10</td>
                        </tr>
                        <tr class="t-row">
                            <td>M16</td>
                            <td>2.0</td>
                            <td>24</td>
                            <td>30–150</td>
                            <td>4.30</td>
                        </tr>
                        <tr class="t-row">
                            <td>M20</td>
                            <td>2.5</td>
                            <td>30</td>
                            <td>40–200</td>
                            <td>7.90</td>
                        </tr>
                        <tr class="t-row">
                            <td>M24</td>
                            <td>3.0</td>
                            <td>36</td>
                            <td>50–250</td>
                            <td>12.60</td>
                        </tr>
                        <tr class="t-row">
                            <td>M30</td>
                            <td>3.5</td>
                            <td>46</td>
                            <td>60–300</td>
                            <td>23.40</td>
                        </tr>
                        <tr class="t-row">
                            <td>M36</td>
                            <td>4.0</td>
                            <td>55</td>
                            <td>80–350</td>
                            <td>38.80</td>
                        </tr>
                        <tr class="t-row">
                            <td>M42</td>
                            <td>4.5</td>
                            <td>65</td>
                            <td>100–400</td>
                            <td>58.70</td>
                        </tr>
                        <tr class="t-row">
                            <td>M48</td>
                            <td>5.0</td>
                            <td>75</td>
                            <td>120–500</td>
                            <td>83.20</td>
                        </tr>
                        <tr class="t-row">
                            <td>M56</td>
                            <td>5.5</td>
                            <td>85</td>
                            <td>150–600</td>
                            <td>125.50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-2 text-muted text-center"><small><strong>Note:</strong> Dimensions and weights are approximate and
                    may vary depending on the bolt type (Full Thread or Partial Thread), material grade, thread standard
                    (Metric, UNC, UNF, BSW), surface finish, and manufacturing tolerances. Custom sizes and thread
                    specifications are available upon request.</small></p>
        </div>
    </section>

    {{-- Grades & Equivalent --}}
    <section id="grades" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Grades & Equivalents</h2>
            </div>

            <h4 class="mb-4 text-center">Available Grades</h4>
            <div class="row g-4 justify-content-center mb-5">
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="grade-card">
                        <i class="bi bi-shield-check grade-card-icon"></i>
                        <h5 class="grade-card-title">Stainless Steel</h5>
                        <p class="grade-card-desc">304 / 304L, 316 / 316L</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="grade-card">
                        <i class="bi bi-nut grade-card-icon"></i>
                        <h5 class="grade-card-title">Carbon & Alloy</h5>
                        <p class="grade-card-desc">Carbon Steel, Alloy Steel</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="grade-card">
                        <i class="bi bi-gear-wide-connected grade-card-icon"></i>
                        <h5 class="grade-card-title">ASTM Specs</h5>
                        <p class="grade-card-desc">A193 B7/B7M, A320 L7</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="grade-card">
                        <i class="bi bi-bezier2 grade-card-icon"></i>
                        <h5 class="grade-card-title">Duplex</h5>
                        <p class="grade-card-desc">S31803 / 2205, S32750 / 2507</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="grade-card">
                        <i class="bi bi-layers grade-card-icon"></i>
                        <h5 class="grade-card-title">Nickel Alloys</h5>
                        <p class="grade-card-desc">Inconel®, Monel®, Hastelloy®</p>
                    </div>
                </div>
            </div>

            <div class="section-title center">
                <h2>International Equivalents</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th style="width: 30%; text-align: left; padding-left: 20px;">Standard</th>
                                    <th style="text-align: left; padding-left: 20px;">Specification</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>ASTM</strong></td>
                                    <td style="padding-left: 20px;">ASTM A193</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>ASME</strong></td>
                                    <td style="padding-left: 20px;">ASME SA193</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>DIN</strong></td>
                                    <td style="padding-left: 20px;">DIN 931 / DIN 933</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>ISO</strong></td>
                                    <td style="padding-left: 20px;">ISO 4014 / ISO 4017</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>EN</strong></td>
                                    <td style="padding-left: 20px;">EN ISO 4014 / EN ISO 4017</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>BS</strong></td>
                                    <td style="padding-left: 20px;">BS 3692</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery / Materials --}}
    <section class="our-services sec-padd-top sec-padd-bottom">
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
        <section id="applications" class="sec-padd-top sec-padd-bottom">
            <div class="container">
                <div class="section-title center">
                    <h2>Applications</h2>
                    <p class="text-center pb-3">Hex Bolts are widely used in:</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="application-card">
                            <div class="application-icon"><i class="bi bi-building"></i></div>
                            <h5>Construction & Infrastructure</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="application-card">
                            <div class="application-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Structural Steel Fabrication</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="application-card">
                            <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                            <h5>Oil & Gas Industry</h5>
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
                            <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                            <h5>Industrial Machinery</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="application-card">
                            <div class="application-icon"><i class="bi bi-wrench"></i></div>
                            <h5>Pipe Support Systems</h5>
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
                    <div class="col-md-6 col-lg-6">
                        <div class="application-card">
                            <div class="application-icon"><i class="bi bi-truck"></i></div>
                            <h5>Heavy Equipment Manufacturing</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="application-card">
                            <div class="application-icon"><i class="bi bi-fan"></i></div>
                            <h5>HVAC & Mechanical Installations</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- Features & Advantages --}}
        <section id="features" class="sec-padd-top sec-padd-bottom bg-light">
            <div class="container">
                <div class="section-title center">
                    <h2>Features & Advantages</h2>
                </div>

                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                            <h4>High tensile strength and durability</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-wrench-adjustable"></i></div>
                            <h4>Secure hexagonal head for easy tightening</h4>
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
                            <div class="advantage-icon"><i class="bi bi-building"></i></div>
                            <h4>Suitable for heavy-duty industrial applications</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-arrow-left-right"></i></div>
                            <h4>Available in full and partial thread options</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-bullseye"></i></div>
                            <h4>Precision-machined threads for accurate fit</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-activity"></i></div>
                            <h4>Reliable performance under vibration and heavy loads</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="advantage-card">
                            <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                            <h4>Long service life with minimal maintenance</h4>
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

        {{-- Mechanical Properties --}}
        <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom bg-light">
            <div class="container">
                <div class="section-title center mb-4">
                    <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
                    <p class="text-center">The mechanical properties of <strong>Hex Bolts</strong> depend on the selected
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
                        Alloy Steel, ASTM A193 Grade B7, ASTM A193 Grade B7M, ASTM A320 Grade L7, Duplex Stainless Steel, Super
                        Duplex Stainless Steel, Inconel®, Monel®, Hastelloy®, and other Nickel Alloy Hex Bolts are available in
                        accordance with their respective ASTM and ASME material specifications upon request.</small></p>
            </div>
        </section>

        {{-- Testing & Quality Control --}}
        <!-- <section id="testing" class="sec-padd-top sec-padd-bottom">
                                <div class="container">
                                    <div class="section-title center">
                                        <h2>Testing & Quality</h2>
                                        <p class="text-center">Every Hex Bolt undergoes strict quality inspections before dispatch to ensure
                                            superior performance and dimensional accuracy. Our quality inspection includes:</p>
                                    </div>

                                    <div class="row g-4 mt-4">
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="advantage-card">
                                                <div class="advantage-icon"><i class="bi bi-search"></i></div>
                                                <h4>Positive Material Identification (PMI)</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="advantage-card">
                                                <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                                                <h4>Thread Gauge Inspection</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="advantage-card">
                                                <div class="advantage-icon"><i class="bi bi-bounding-box-circles"></i></div>
                                                <h4>Dimensional Inspection</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="advantage-card">
                                                <div class="advantage-icon"><i class="bi bi-record-circle"></i></div>
                                                <h4>Hardness Testing</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="advantage-card">
                                                <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                                                <h4>Tensile Testing</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="advantage-card">
                                                <div class="advantage-icon"><i class="bi bi-eye"></i></div>
                                                <h4>Visual Inspection</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-12">
                                            <div class="advantage-card">
                                                <div class="advantage-icon"><i class="bi bi-patch-check"></i></div>
                                                <h4>Third-Party Inspection (Available on Request)</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <p class="fs-5"><strong>Test Certificate:</strong> EN 10204 3.1 Material Test Certificate is supplied with
                                            every order.</p>
                                    </div>
                                </div>
                            </section> -->

        {{-- why choose us --}}
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
        <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
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
                                    <h4>What is a Hex Bolt?</h4>
                                </div>
                                <div class="accord-content">
                                    <p>
                                        A Hex Bolt is a threaded fastener with a six-sided head used with a nut to securely join
                                        components in industrial, structural, and mechanical applications.
                                    </p>
                                </div>
                            </div>

                            <div class="accordion accordion-block">
                                <div class="accord-btn">
                                    <h4>Where are Hex Bolts commonly used?</h4>
                                </div>
                                <div class="accord-content">
                                    <p>
                                        Hex Bolts are widely used in construction, machinery, piping systems, oil & gas, power
                                        plants, marine, automotive, and structural steel applications.
                                    </p>
                                </div>
                            </div>

                            <div class="accordion accordion-block">
                                <div class="accord-btn">
                                    <h4>Which materials are available?</h4>
                                </div>
                                <div class="accord-content">
                                    <p>
                                        We manufacture Hex Bolts in stainless steel, carbon steel, alloy steel, duplex, super
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
                                        Yes. We manufacture Hex Bolts in custom diameters, lengths, thread types, coatings, and
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
                        Looking for a trusted <strong>Hex Bolts</strong> manufacturer and supplier? Contact <strong>Moksh Tubes
                            & Fittings LLP</strong> for premium-quality industrial hex bolts, competitive pricing, ready stock,
                        technical support, and fast worldwide delivery. Request your free quotation today.
                    </p>
                    <a href="{{ route('contact-us') }}" class="contact-cta-btn">
                        Get in Touch
                    </a>
                </div>
            </div>
        </section>

@endsection

@push('styles')
    <style>
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
                                                      "@id": "https://mokshtubes.com/hex-bolts#webpage",
                                                      "name": "Hex Bolts Manufacturer, Supplier & Exporter in India | Moksh Tubes",
                                                      "url": "https://mokshtubes.com/hex-bolts",
                                                      "description": "Moksh Tubes & Fittings LLP is a leading manufacturer, supplier & exporter of Hex Bolts in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys. ASTM A193, DIN & ISO standards with worldwide delivery."
                                                    },
                                                    {
                                                      "@type": ["Product"],
                                                      "@id": "https://mokshtubes.com/#hexbolts",
                                                      "name": "Hex Bolts",
                                                      "image": "https://mokshtubes.com/assets/images/fasteners/hex-bolts-manufacturer.webp",
                                                      "category": "Fasteners",
                                                      "brand": { "@id": "https://mokshtubes.com/#organization" }
                                                    },
                                                    {
                                                      "@type": "BreadcrumbList",
                                                      "@id": "https://mokshtubes.com/hex-bolts#breadcrumb",
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
                                                          "name": "Hex Bolts"
                                                        }
                                                      ]
                                                    }
                                                  ]
                                                }
                                                </script>
    @endverbatim
@endsection
