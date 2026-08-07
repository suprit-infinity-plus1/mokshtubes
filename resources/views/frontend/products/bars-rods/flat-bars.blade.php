@extends('layouts.master')
@section('title', 'Flat Bars Manufacturer, Supplier & Exporter | Stainless & MS')
<!-- 84 characters -->
@section(
    'meta_description',
    'Moksh Tubes & Fittings LLP supplies premium-quality Stainless Steel, MS, Alloy Steel, Aluminium, Brass & Copper Flat Bars in various sizes, grades & thicknesses.'
)
@section(
    'meta_keywords',
    'Flat Bars, Stainless Steel Flat Bars, Mild Steel Flat Bars, MS Flat Bars, Carbon Steel Flat Bars, Alloy Steel Flat Bars, Duplex Flat Bars, Aluminium Flat Bars, Brass Flat Bars, Copper Flat Bars, Nickel Alloy Flat Bars, Flat Bar Manufacturer'
)
@section('og_title', 'Flat Bars Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Premium-quality Stainless Steel, MS, Alloy Steel, Aluminium, Brass & Copper Flat Bars in various sizes, grades, thicknesses, and custom lengths with worldwide delivery.')
@section('og_image', asset('assets/images/product/Flat-Bars.webp'))
@section('og_type', 'product')
@section('twitter_title', 'Flat Bars Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Flat Bars for structural fabrication, machinery manufacturing, construction, and marine applications. Fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Flat-Bars.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Flat Bars Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Flat Bars are versatile rectangular metal sections widely used in structural fabrication, machinery manufacturing, construction, automotive, marine, and industrial engineering applications. Manufactured in stainless steel, carbon steel, alloy steel, duplex stainless steel, aluminium, brass, copper, nickel alloys, and titanium, Flat Bars offer excellent strength, dimensional accuracy, corrosion resistance, and easy machinability. Moksh Tubes & Fittings LLP manufactures, supplies, and exports premium-quality Flat Bars in multiple grades, sizes, and finishes manufactured according to ASTM, ASME, DIN, EN, ISO, and JIS standards.
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
            <a href="#size-chart">Size & Weight Chart</a> |
            <a href="#grades">Grades Available</a> |
            <a href="#types">Types</a> |
            <a href="#applications">Applications</a> |
            <a href="#features">Advantages</a> |
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
                    <img src="{{ asset('assets/images/product/Flat-Bars.webp') }}"
                        alt="Flat Bars Manufacturer" class="img-fluid rounded shadow-sm" width="550" height="350"
                        loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong>Flat Bars</strong> are solid rectangular metal bars designed for superior strength, durability, and versatility across a wide range of engineering and industrial applications. Their flat rectangular profile makes them ideal for structural fabrication, machinery manufacturing, support frameworks, base plates, brackets, fasteners, architectural projects, and precision machining. Due to their excellent load-bearing capacity and ease of fabrication, Flat Bars are one of the most widely used metal products in construction, manufacturing, marine, automotive, aerospace, and heavy engineering industries.
                    </p>

                    <p class="fs-6 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we manufacture, supply, and export premium-quality Stainless Steel Flat Bars, Mild Steel (MS) Flat Bars, Carbon Steel Flat Bars, Alloy Steel Flat Bars, Duplex & Super Duplex Flat Bars, Aluminium Flat Bars, Brass Flat Bars, Copper Flat Bars, Nickel Alloy Flat Bars, and Titanium Flat Bars. Our products are manufactured in compliance with international ASTM, ASME, DIN, EN, ISO, and JIS standards to ensure superior dimensional accuracy, high mechanical strength, corrosion resistance, and long service life.
                    </p>

                    <p class="fs-6 text-justify">
                        With an extensive inventory, custom cutting facilities, and global export capabilities, we provide Flat Bars for projects across India, the Middle East, Europe, Africa, Southeast Asia, and other international markets.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Flat Bars Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with mechanical properties, size charts, weight calculations, and application
                guidelines. Enter your email below to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="flat-bars-datasheet.pdf">
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
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Specifications</h2>
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
                                    <td>Material</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex &amp; Super Duplex, Nickel Alloys, Titanium, Aluminium, Brass &amp; Copper</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing Process</td>
                                    <td>Hot Rolled, Cold Drawn, Precision Ground</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thickness</td>
                                    <td>3 mm to 100 mm (Custom thickness available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Width</td>
                                    <td>20 mm to 400 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>3 m, 6 m &amp; Cut-to-Length</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Mill Finish, Bright Finish, Polished, Pickled &amp; Passivated, Hairline, Mirror Finish</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Edge Type</td>
                                    <td>Square Edge, Rounded Edge, Chamfered Edge</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM, ASME, DIN, EN, ISO &amp; JIS</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- charts -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
            </div>
            <p class="text-center pb-3">
                Flat Bars are available in a wide range of widths and thicknesses to meet the requirements of structural, fabrication, machining, and engineering applications. Custom dimensions and cut-to-length services are also available.
            </p>
            
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-center mb-3">Flat Bar Size Range</h4>
                    <div class="table-responsive mt-4">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Width (mm)</th>
                                    <th>Width (Inch)</th>
                                    <th>Thickness Range (mm)</th>
                                    <th>Standard Length (m)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td>20</td><td>3/4"</td><td>3–25</td><td>6</td></tr>
                                <tr class="t-row"><td>25</td><td>1"</td><td>3–25</td><td>6</td></tr>
                                <tr class="t-row"><td>30</td><td>1¼"</td><td>3–25</td><td>6</td></tr>
                                <tr class="t-row"><td>40</td><td>1½"</td><td>3–30</td><td>6</td></tr>
                                <tr class="t-row"><td>50</td><td>2"</td><td>3–40</td><td>6</td></tr>
                                <tr class="t-row"><td>65</td><td>2½"</td><td>5–40</td><td>6</td></tr>
                                <tr class="t-row"><td>75</td><td>3"</td><td>5–50</td><td>6</td></tr>
                                <tr class="t-row"><td>100</td><td>4"</td><td>6–50</td><td>6</td></tr>
                                <tr class="t-row"><td>150</td><td>6"</td><td>6–60</td><td>6</td></tr>
                                <tr class="t-row"><td>200</td><td>8"</td><td>8–80</td><td>6</td></tr>
                                <tr class="t-row"><td>300</td><td>12"</td><td>10–100</td><td>6</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center mb-3">Flat Bar Weight Chart</h4>
                    <!-- <p class="text-center small mb-3">Formula: Weight (kg/m) = Width (mm) × Thickness (mm) × 0.00785</p> -->
                    <div class="table-responsive mt-4">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Width (mm)</th>
                                    <th>Thickness (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td>25</td><td>5</td><td>0.98</td></tr>
                                <tr class="t-row"><td>25</td><td>10</td><td>1.96</td></tr>
                                <tr class="t-row"><td>50</td><td>5</td><td>1.96</td></tr>
                                <tr class="t-row"><td>50</td><td>10</td><td>3.93</td></tr>
                                <tr class="t-row"><td>75</td><td>6</td><td>3.53</td></tr>
                                <tr class="t-row"><td>100</td><td>12</td><td>9.42</td></tr>
                                <tr class="t-row"><td>150</td><td>10</td><td>11.78</td></tr>
                                <tr class="t-row"><td>150</td><td>20</td><td>23.55</td></tr>
                                <tr class="t-row"><td>200</td><td>12</td><td>18.84</td></tr>
                                <tr class="t-row"><td>250</td><td>20</td><td>39.25</td></tr>
                                <tr class="t-row"><td>300</td><td>25</td><td>58.88</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Grades --}}
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
    <section id="grades" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            </div>

            <div class="row justify-content-center mb-5">
                <!-- Stainless Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-shield-check mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Stainless Steel</h5>
                            <p class="card-text small mb-0">SS 303, 304/304L, 316/316L, 310, 321, 347, 17-4 PH</p>
                        </div>
                    </div>
                </div>

                <!-- Carbon & Mild Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gear-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Carbon &amp; Mild Steel</h5>
                            <p class="card-text small mb-0">ASTM A36, ASTM A105, IS 2062, EN8, EN9</p>
                        </div>
                    </div>
                </div>

                <!-- Alloy Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-nut mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Alloy Steel</h5>
                            <p class="card-text small mb-0">AISI 4130, AISI 4140, EN19, EN24</p>
                        </div>
                    </div>
                </div>

                <!-- Duplex & Super Duplex -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gem mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Duplex &amp; Super Duplex</h5>
                            <p class="card-text small mb-0">Duplex 2205, Super Duplex S32750, S32760</p>
                        </div>
                    </div>
                </div>

                <!-- Nickel Alloy & Titanium -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-award-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Nickel Alloys &amp; Titanium</h5>
                            <p class="card-text small mb-0">Inconel, Monel, Hastelloy, Titanium Gr 2/5</p>
                        </div>
                    </div>
                </div>

                <!-- Non-Ferrous (Brass, Copper, Al) -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-palette mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Aluminium, Brass &amp; Copper</h5>
                            <p class="card-text small mb-0">Al 1100, 5052, 6061 | Brass C360 | Copper C101</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Types --}}
    <section id="types" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Types of Flat Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h4>Stainless Steel Flat Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-building"></i></div>
                        <h4>Mild Steel (MS) Flat Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Carbon &amp; Alloy Steel Flat Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gem"></i></div>
                        <h4>Duplex &amp; Super Duplex Flat Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-star-fill"></i></div>
                        <h4>Aluminium, Brass &amp; Copper</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-snow"></i></div>
                        <h4>Cold Drawn &amp; Bright Flat Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-fire"></i></div>
                        <h4>Hot Rolled Flat Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h4>Precision Ground &amp; Polished Flat Bars</h4>
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
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Applications &amp; Uses</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building"></i></div>
                        <h4>Construction &amp; Infrastructure</h4>
                        <p class="small text-muted mt-2">Structural Supports, Base Plates, Brackets, Building Frameworks.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide"></i></div>
                        <h4>Industrial Manufacturing</h4>
                        <p class="small text-muted mt-2">Machine Frames, Conveyor Systems, Tooling, Heavy Equipment.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-funnel"></i></div>
                        <h4>Oil, Gas &amp; Petrochemical</h4>
                        <p class="small text-muted mt-2">Pipe Supports, Equipment Frames, Skids, Valve Mounting Plates.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h4>Marine &amp; Offshore</h4>
                        <p class="small text-muted mt-2">Shipbuilding, Offshore Platforms, Seawater Equipment, Dock Construction.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-airplane"></i></div>
                        <h4>Automotive &amp; Aerospace</h4>
                        <p class="small text-muted mt-2">Chassis Components, Body Reinforcements, Suspension Components.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h4>Electrical Industry</h4>
                        <p class="small text-muted mt-2">Busbars, Switchgear Components, Electrical Connectors, Conductive Supports.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features & Advantages --}}
    <section id="features" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Advantages of Flat Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h4>High strength and excellent durability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bounding-box"></i></div>
                        <h4>Superior dimensional accuracy</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Excellent machinability and weldability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Outstanding corrosion resistance</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-stars"></i></div>
                        <h4>Smooth surface finish with multiple options</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-boxes"></i></div>
                        <h4>Wide range of materials and grades</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-scissors"></i></div>
                        <h4>Custom cut-to-length services available</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h4>Cost-effective solution for fabrication</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
                <p class="text-center">The mechanical properties of Flat Bars depend on the selected material grade, manufacturing process, and heat treatment. Flat Bars are designed to provide excellent strength, dimensional stability, corrosion resistance, and machinability.</p>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-start">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Typical Performance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td><strong>Tensile Strength</strong></td>
                            <td>High (Varies by material grade)</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Yield Strength</strong></td>
                            <td>Excellent</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Elongation</strong></td>
                            <td>Good to Excellent</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Hardness</strong></td>
                            <td>Grade Dependent</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Impact Strength</strong></td>
                            <td>High Toughness</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Machinability</strong></td>
                            <td>Excellent</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Weldability</strong></td>
                            <td>Excellent (Stainless Steel &amp; Mild Steel Grades)</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Corrosion Resistance</strong></td>
                            <td>Excellent in Stainless Steel, Duplex, Nickel Alloys &amp; Titanium</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Heat Resistance</strong></td>
                            <td>Suitable for High-Temperature Applications (Grade Dependent)</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Dimensional Stability</strong></td>
                            <td>Excellent</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- why choose us --}}
    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes &amp; Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box-seam"></i></div>
                        <h4>Leading Manufacturer, Supplier &amp; Exporter of premium-quality Flat Bars.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-sliders"></i></div>
                        <h4>Extensive stock of Stainless Steel, MS, Carbon, Alloy Steel, Aluminium, Brass &amp; Copper.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Manufactured according to ASTM, ASME, DIN, EN, ISO, and JIS standards.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-scissors"></i></div>
                        <h4>Custom cutting, machining, and finishing services available.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Fast domestic and international delivery with EN 10204 3.1 MTC available.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h4>Competitive pricing with ready stock for immediate dispatch.</h4>
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
                        <div class="section-title center mb-4">
                            <h2 class="fw-bold" style="color: #174268;">Frequently Asked Questions (FAQ)</h2>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>1. What are Flat Bars used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Flat Bars are widely used in construction, fabrication, machinery manufacturing, structural supports, base plates, automotive components, marine applications, and architectural projects due to their strength, versatility, and ease of fabrication.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>2. Which materials are available for Flat Bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We manufacture and supply Flat Bars in Stainless Steel, Carbon Steel, Mild Steel, Alloy Steel, Duplex &amp; Super Duplex Stainless Steel, Aluminium, Brass, Copper, Nickel Alloys, and Titanium.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>3. What are the standard sizes of Flat Bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Standard Flat Bars are available in thicknesses from 3 mm to 100 mm, widths from 20 mm to 400 mm, and standard lengths of 3 m and 6 m. Custom dimensions are also available.</p>
                            </div>
                        </div>
                        
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>4. How do I calculate the weight of a Flat Bar?</h4>
                            </div>
                            <div class="accord-content">
                                <p>The approximate weight per meter can be calculated using the formula: Weight (kg/m) = Width (mm) × Thickness (mm) × 0.00785</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>5. Can Flat Bars be supplied in custom lengths?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. We provide custom cut-to-length Flat Bars based on customer drawings and project requirements to minimize machining time and material wastage.</p>
                            </div>
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
                    Looking for High-Quality <strong>Flat Bars</strong>? Whether you require Stainless Steel Flat Bars, Mild Steel Flat Bars, Alloy Steel Flat Bars, Aluminium Flat Bars, Brass Flat Bars, Copper Flat Bars, or Specialty Alloy Flat Bars, <strong>Moksh Tubes &amp; Fittings LLP</strong> provides reliable products manufactured to international standards with worldwide delivery.
                </p>
                <a href="{{ route('contact-us') }}" class="contact-cta-btn">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

    @verbatim
        <script type="application/ld+json">
                {
                  "@context": "https://schema.org/",
                  "@type": "Product",
                  "name": "Flat Bars",
                  "image": "https://mokshtubes.com/assets/images/product/Flat-Bars.webp",
                  "description": "Premium-quality Flat Bars manufactured in Stainless Steel, Carbon Steel, Alloy Steel, Aluminium, Brass & Copper grades.",
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
                        "name": "What are Flat Bars used for?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Flat Bars are widely used in construction, fabrication, machinery manufacturing, structural supports, base plates, automotive components, marine applications, and architectural projects due to their strength, versatility, and ease of fabrication."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Which materials are available for Flat Bars?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "We manufacture and supply Flat Bars in Stainless Steel, Carbon Steel, Mild Steel, Alloy Steel, Duplex & Super Duplex Stainless Steel, Aluminium, Brass, Copper, Nickel Alloys, and Titanium."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "What are the standard sizes of Flat Bars?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Standard Flat Bars are available in thicknesses from 3 mm to 100 mm, widths from 20 mm to 400 mm, and standard lengths of 3 m and 6 m. Custom dimensions are also available."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "How do I calculate the weight of a Flat Bar?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "The approximate weight per meter can be calculated using the formula: Weight (kg/m) = Width (mm) × Thickness (mm) × 0.00785"
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Can Flat Bars be supplied in custom lengths?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Yes. We provide custom cut-to-length Flat Bars based on customer drawings and project requirements to minimize machining time and material wastage."
                        }
                      }
                    ]
                  }
                }
                </script>
    @endverbatim
@endsection