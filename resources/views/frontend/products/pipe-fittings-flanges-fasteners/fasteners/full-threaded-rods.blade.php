@extends('layouts.master')
@section('title', 'Threaded Rods Manufacturer, Supplier & Exporter in India | Moksh Tubes')
<!-- 69 characters -->
@section('meta_description',
    'Moksh Tubes & Fittings LLP is a leading manufacturer, supplier & exporter of Threaded Rods in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys. ASTM & DIN standards with worldwide delivery.')
@section('meta_keywords',
    'Threaded Rods, Threaded Rods Manufacturer, Threaded Rods Supplier, Threaded Rods Exporter, Stainless Steel Threaded Rods, Carbon Steel Threaded Rods, Alloy Steel Threaded Rods, Duplex Threaded Rods, Super Duplex Threaded Rods, ASTM A193 B7 Threaded Rods, ASTM A320 L7 Threaded Rods, Fully Threaded Rods, Industrial Threaded Rods, Stud Rods, All Thread Rods, Threaded Fasteners, Industrial Fasteners, Stud Bolts, Fully Threaded Bars, Anchor Rods, Structural Fasteners, Heavy Duty Threaded Rods, Construction Fasteners, Pipe Support Rods, Metric Threaded Rods, UNC Threaded Rods, UNF Threaded Rods, High Tensile Threaded Rods')
@section('og_title', 'Threaded Rods Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Premium-quality Threaded Rods manufactured in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys. ASTM & DIN compliant with worldwide export support.')
@section('og_image', asset('/assets/images/fasteners/full-threaded-rods.png'))
@section('og_type', 'product')
@section('twitter_title', 'Threaded Rods Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Threaded Rods in multiple diameters, thread standards, coatings, and material grades with fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/fasteners/full-threaded-rods.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Threaded Rods Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px; max-width: 900px;">
                        Threaded Rods are fully threaded fasteners used for fastening, anchoring, bracing, and structural support in construction, industrial, and engineering applications. They provide excellent load-bearing capacity, corrosion resistance, and reliable performance in demanding environments. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we manufacture, supply, and export premium-quality Threaded Rods in stainless steel, carbon steel, alloy steel, duplex, super duplex, and nickel alloy grades. Manufactured to international standards, our threaded rods ensure superior strength, precision, and long service life.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Navigation (Standardized sticky tabs)-->
    <div class="sticky-top bg-white border-bottom material-tabs w-100 shadow-sm">
        <div class="container text-center py-3">
            <a href="#overview">Product Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#chemical-composition">Chemical Composition</a> |
            <a href="#size-chart">Size & Weight Chart</a> |
            <a href="#grades">Grades & Equivalent</a> |
            <a href="#features">Features & Advantages</a> |
            <a href="#applications">Applications</a> |<br>
            <a href="#mechanical-properties">Mechanical Properties</a> |
            <a href="#testing">Testing & Quality</a> |
            <a href="#packaging">Packaging & Export</a> |
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
                    <img src="{{ asset('/assets/images/fasteners/full-threaded-rods.png') }}"
                        alt="Threaded Rods Manufacturer" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        A <strong>Threaded Rod</strong>, also known as an <strong>All Thread Rod</strong> or <strong>Stud Rod</strong>, is a long metal rod with continuous threads along its entire length. It is used with nuts and washers to create strong and adjustable fastening solutions for piping systems, steel structures, machinery, HVAC installations, and construction projects. Threaded rods are available in various diameters, lengths, thread types, and material grades to meet different industrial requirements.
                    </p>
                    <p class="fs-6 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we manufacture precision-engineered Threaded Rods using premium-quality raw materials and advanced threading technology. Our rods offer excellent dimensional accuracy, high tensile strength, and outstanding corrosion resistance, making them suitable for both indoor and outdoor applications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Threaded Rods Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with chemical composition, mechanical properties, thread details, and application guidelines. Enter your email below to receive the PDF instantly.
            </p>
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="threaded-rods-datasheet.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required="" class="form-control p-3"
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
            <hr class="my-4">
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
                            <tbody>
                                <tr class="t-row">
                                    <td>Product</td>
                                    <td>Threaded Rod</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM, DIN, ISO, ASME, BS</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex & Nickel Alloys</td>
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
                                    <td>Metric, UNC, UNF, BSW, BSP</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thread Style</td>
                                    <td>Fully Threaded</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Plain, Bright, Zinc Plated, PTFE Coated, Hot Dip Galvanized</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Cold Drawn / CNC Threaded</td>
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
                The chemical composition of <strong>Threaded Rods</strong> varies depending on the selected material grade. At Moksh Tubes & Fittings LLP, our Threaded Rods are manufactured using premium-quality raw materials that comply with ASTM, ASME, DIN, ISO, EN, and BS standards, ensuring excellent corrosion resistance, high tensile strength, and long service life.
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
            <p class="mt-2 text-muted text-center"><small><strong>Note:</strong> Chemical composition varies depending on the selected material grade. Carbon Steel, Alloy Steel, ASTM A193 B7/B7M, ASTM A320 L7, Duplex, Super Duplex, and Nickel Alloy Threaded Rods are also available in accordance with the relevant ASTM and ASME material specifications.</small></p>
        </div>
    </section>

    <!-- charts -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
            </div>
            <p class="text-center pb-3">
                Threaded Rods are available in a wide range of metric and imperial sizes with various lengths to meet industrial and construction requirements.
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
                        <tr class="t-row"><td>M6</td><td>1.0</td><td>1000–3000</td><td>0.22</td></tr>
                        <tr class="t-row"><td>M8</td><td>1.25</td><td>1000–3000</td><td>0.39</td></tr>
                        <tr class="t-row"><td>M10</td><td>1.5</td><td>1000–3000</td><td>0.62</td></tr>
                        <tr class="t-row"><td>M12</td><td>1.75</td><td>1000–3000</td><td>0.89</td></tr>
                        <tr class="t-row"><td>M16</td><td>2.0</td><td>1000–3000</td><td>1.58</td></tr>
                        <tr class="t-row"><td>M20</td><td>2.5</td><td>1000–3000</td><td>2.47</td></tr>
                        <tr class="t-row"><td>M24</td><td>3.0</td><td>1000–3000</td><td>3.56</td></tr>
                        <tr class="t-row"><td>M30</td><td>3.5</td><td>1000–3000</td><td>5.55</td></tr>
                        <tr class="t-row"><td>M36</td><td>4.0</td><td>1000–3000</td><td>7.99</td></tr>
                        <tr class="t-row"><td>M42</td><td>4.5</td><td>1000–3000</td><td>10.90</td></tr>
                        <tr class="t-row"><td>M48</td><td>5.0</td><td>1000–3000</td><td>14.20</td></tr>
                        <tr class="t-row"><td>M56</td><td>5.5</td><td>Up to 6000</td><td>19.40</td></tr>
                        <tr class="t-row"><td>M64</td><td>6.0</td><td>Up to 6000</td><td>25.30</td></tr>
                        <tr class="t-row"><td>M72</td><td>6.0</td><td>Up to 6000</td><td>32.00</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted"><strong>Note:</strong> Dimensions and weights are approximate and may vary depending on the material grade, thread standard (Metric, UNC, UNF, BSW, BSP), coating, and manufacturing tolerances. Custom diameters, lengths, and thread types are available upon request.</p>
        </div>
    </section>

    {{-- Material Pages --}}
    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Grades & Equivalent</h2>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-shield-check mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Stainless Steel Grades</h5>
                            <p class="card-text small mb-0">304 / 304L, 316 / 316L</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gear-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Carbon & Alloy Steel</h5>
                            <p class="card-text small mb-0">Carbon Steel, Alloy Steel<br>ASTM A193 Grade B7/B7M, ASTM A320 Grade L7</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gem mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Duplex & Super Duplex</h5>
                            <p class="card-text small mb-0">UNS S31803 / 2205<br>UNS S32750 / 2507</p>
                        </div>
                    </div>
                </div>
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
                                <tr class="t-row"><td style="padding-left: 20px;"><strong>ASTM</strong></td><td style="padding-left: 20px;">ASTM A193, ASTM A320</td></tr>
                                <tr class="t-row"><td style="padding-left: 20px;"><strong>ASME</strong></td><td style="padding-left: 20px;">ASME SA193, SA320</td></tr>
                                <tr class="t-row"><td style="padding-left: 20px;"><strong>DIN</strong></td><td style="padding-left: 20px;">DIN 975 / DIN 976</td></tr>
                                <tr class="t-row"><td style="padding-left: 20px;"><strong>ISO</strong></td><td style="padding-left: 20px;">ISO 898-1</td></tr>
                                <tr class="t-row"><td style="padding-left: 20px;"><strong>EN</strong></td><td style="padding-left: 20px;">EN ISO 898</td></tr>
                                <tr class="t-row"><td style="padding-left: 20px;"><strong>BS</strong></td><td style="padding-left: 20px;">BS 3692</td></tr>
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
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-steel.grade', 'austenitic-stainless-steel-304') }}">
                                <img class="w-100" src="{{ asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-304.webp') }}" alt="Stainless Steel 304" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a href="{{ route('materials.austenitic-stainless-steel.grade', 'austenitic-stainless-steel-304') }}" style="color: inherit; text-decoration: none;">Stainless Steel 304</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-steel.grade', 'austenitic-stainless-steel-316') }}">
                                <img class="w-100" src="{{ asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-316.webp') }}" alt="Stainless Steel 316" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a href="{{ route('materials.austenitic-stainless-steel.grade', 'austenitic-stainless-steel-316') }}" style="color: inherit; text-decoration: none;">Stainless Steel 316</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.engineering-Steel-grade', 'engineering-steels-1045') }}">
                                <img class="w-100" src="{{ asset('assets/images/engineering-steels/engineering-steels-1045.webp') }}" alt="Carbon Steel" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a href="{{ route('materials.engineering-Steel-grade', 'engineering-steels-1045') }}" style="color: inherit; text-decoration: none;">Carbon Steel</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.engineering-Steel-grade', 'engineering-steels-4140') }}">
                                <img class="w-100" src="{{ asset('assets/images/engineering-steels/engineering-steels-4140.webp') }}" alt="Alloy Steel" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a href="{{ route('materials.engineering-Steel-grade', 'engineering-steels-4140') }}" style="color: inherit; text-decoration: none;">Alloy Steel</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.duplex-and-super-duplex.grade', 'duplex-s31803') }}">
                                <img class="w-100" src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp') }}" alt="Duplex Stainless Steel" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a href="{{ route('materials.duplex-and-super-duplex.grade', 'duplex-s31803') }}" style="color: inherit; text-decoration: none;">Duplex Stainless Steel</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 mb-4">
                    <div class="single-our-service border bg-white">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.inconel.grade', 'inconel-625') }}">
                                <img class="w-100" src="{{ asset('assets/images/inconel/Inconel-625.webp') }}" alt="Inconel Alloys" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0 mb-0"><a href="{{ route('materials.inconel.grade', 'inconel-625') }}" style="color: inherit; text-decoration: none;">Inconel Alloys</a></h6>
                        </div>
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
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h4>High tensile strength and durability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-link-45deg"></i></div>
                        <h4>Fully threaded design for secure fastening</h4>
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
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h4>Available in multiple thread standards and coatings</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-wrench-adjustable"></i></div>
                        <h4>Easy installation with nuts and washers</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h4>Precision-machined threads for accurate fit</h4>
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

    {{-- Applications --}}
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
                <p class="text-center pb-3">Threaded Rods are widely used in:</p>
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
                        <div class="application-icon"><i class="bi bi-bounding-box-circles"></i></div>
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
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
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
                        <div class="application-icon"><i class="bi bi-snow"></i></div>
                        <h5>HVAC Systems</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-wrench"></i></div>
                        <h5>Plumbing Installations</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Pipe Support Systems</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore Projects</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-anchor"></i></div>
                        <h5>Equipment Mounting & Anchoring</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
                 <p class="text-center">The mechanical properties of <strong>Threaded Rods</strong> depend on the selected material grade and comply with applicable ASTM and ASME standards. The table below shows the typical mechanical properties for commonly supplied stainless steel grades.</p>
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
            <p class="text-center mt-2 small text-muted"><strong>Note:</strong> Mechanical properties for Carbon Steel, Alloy Steel, ASTM A193 B7/B7M, ASTM A320 L7, Duplex, Super Duplex, and Nickel Alloy Threaded Rods are available in accordance with their respective ASTM/ASME material specifications upon request.</p>
        </div>
    </section>

    <section id="testing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Testing & Quality</h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="testing-card">
                        <div class="testing-icon"><i class="bi bi-hammer"></i></div>
                        <h5>Tensile Test</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testing-card">
                        <div class="testing-icon"><i class="bi bi-shield"></i></div>
                        <h5>Proof Load Test</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testing-card">
                        <div class="testing-icon"><i class="bi bi-check2-circle"></i></div>
                        <h5>PMI Test</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testing-card">
                        <div class="testing-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Thread Gauging</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testing-card">
                        <div class="testing-icon"><i class="bi bi-bullseye"></i></div>
                        <h5>Hardness Test</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testing-card">
                        <div class="testing-icon"><i class="bi bi-brightness-high"></i></div>
                        <h5>Magnetic Particle Inspection</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="packaging" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Packaging & Export</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <p class="fs-6 text-muted">
                        We ensure that our Threaded Rods are securely packaged to prevent damage during transit. We use high-quality wooden crates, pallets, and shrink-wrapping for export shipments.<br>
                        We regularly export to countries in the Middle East (UAE, Saudi Arabia, Qatar, Oman, Kuwait), Europe, Africa, and Southeast Asia.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
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
                                <h4>What is a Threaded Rod?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    A Threaded Rod is a fully threaded metal rod used with nuts and washers for fastening, anchoring, bracing, and structural support in industrial and construction applications.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where are Threaded Rods commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Threaded Rods are widely used in construction, steel fabrication, piping systems, HVAC installations, industrial machinery, power plants, and offshore projects.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We manufacture Threaded Rods in stainless steel, carbon steel, alloy steel, duplex, super duplex, and nickel alloy grades.
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
                                    Yes. We manufacture Threaded Rods in custom diameters, lengths, thread types, coatings, and material grades according to customer specifications.
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
            <div class="contact-cta-box text-center">
                <h2>Request a Quote</h2>
                <p>
                    Looking for a trusted <strong>Threaded Rods</strong> manufacturer and supplier? Contact <strong>Moksh Tubes & Fittings LLP</strong> for premium-quality industrial threaded rods, competitive pricing, ready stock, technical support, and fast worldwide delivery. Request your free quotation today.
                </p>
                <a href="javascript:void(0);" class="contact-cta-btn btn btn-primary mt-3" data-bs-toggle="modal"
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
        .single-our-service .img-box img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        /* Custom Check List */
        .custom-check-list li {
            position: relative;
            padding-left: 30px;
        }
        .custom-check-list li i {
            position: absolute;
            left: 0;
            top: 4px;
            font-size: 1.1rem;
        }


        .material-tabs a {
            color: #174268;
            font-weight: 700;
            font-size: 14px;
            padding: 5px 8px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .material-tabs a:hover {
            color: #e67e22;
        }

        /* Card Styles */
        .advantage-card, .application-card, .why-banner-block {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            text-align: center;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid #f1f1f1;
            cursor: pointer;
        }
        .advantage-card:hover, .application-card:hover, .why-banner-block:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(230, 126, 34, 0.2) !important;
            border-color: #e67e22;
            background-color: #fff;
        }
        .advantage-icon, .application-icon, .why-banner-icon {
            font-size: 2.2rem;
            color: #ffffff;
            margin: 0 auto 15px auto;
            transition: all 0.3s ease;
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: #e67e22;
        }
        .advantage-card h4, .application-card h5, .why-banner-block h5 {
            font-size: 1.1rem;
            margin-bottom: 0;
            color: #174268;
            transition: color 0.3s ease;
        }
        .advantage-card:hover .advantage-icon i, 
        .application-card:hover .application-icon i,
        .why-banner-block:hover .why-banner-icon i {
            color: #ffffff !important;
        }
        .advantage-card:hover .advantage-icon, 
        .application-card:hover .application-icon,
        .why-banner-block:hover .why-banner-icon {
            background-color: #174268;
        }
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

        /* Testing Cards */
        .testing-card {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid #e67e22;
            cursor: pointer;
        }
        .testing-card .testing-icon i {
            font-size: 2.2rem;
            color: #174268;
            margin: 0 auto 15px auto;
            transition: all 0.3s ease;
            display: block;
        }
        .testing-card h5 {
            font-size: 1.1rem;
            margin-bottom: 0;
            color: #174268;
            font-weight: 600;
        }
        .testing-card:hover {
            background-color: #e67e22;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(230, 126, 34, 0.2) !important;
        }
        .testing-card:hover .testing-icon i {
            color: #ffffff !important;
        }
    </style>
@endpush
