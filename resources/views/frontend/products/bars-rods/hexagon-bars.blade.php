@extends('layouts.master')
@section('title', 'Hexagon Bars Manufacturer, Supplier & Exporter | Stainless & Brass')
<!-- 84 characters -->
@section('meta_description', 'Moksh Tubes & Fittings LLP manufactures and exports Hexagon Bars in Stainless Steel,
Carbon Steel, Alloy Steel, Duplex, Brass, Aluminium & Titanium grades.')
@section('meta_keywords', 'Hexagon Bars, Hex Bars, Hexagonal Bars, Stainless Steel Hex Bars, Alloy Steel Hex Bars, Brass
Hex Bars, Aluminium Hex Bars, Carbon Steel Hex Bars, Duplex Hex Bars, Precision Hex Bars, Bright Drawn Hex Bars')
@section('og_title', 'Hexagon Bars Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Premium-quality Hexagon Bars manufactured in Stainless Steel, Carbon Steel, Alloy Steel,
Duplex, Brass, Aluminium & Titanium grades in custom sizes with worldwide delivery.')
@section('og_image', asset('assets/images/product/Hexagon-Bars.webp'))
@section('og_type', 'product')
@section('twitter_title', 'Hexagon Bars Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Hexagon Bars for precision machining, fastener manufacturing, and
structural fabrication. Fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Hexagon-Bars.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Hexagon Bars Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Hexagon Bars are precision-engineered six-sided solid metal bars widely used in machining, fastener
                        manufacturing, construction, automotive, marine, aerospace, and heavy engineering applications.
                        Manufactured in stainless steel, carbon steel, alloy steel, duplex stainless steel, nickel alloys,
                        titanium, brass, copper, and aluminium, Hexagon Bars offer excellent machinability, dimensional
                        accuracy, high strength, and superior surface finish. Moksh Tubes & Fittings LLP manufactures,
                        supplies, and exports premium-quality Hexagon Bars in various grades, sizes, and finishes that
                        comply with international ASTM, ASME, DIN, EN, and JIS standards.
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
                    <img src="{{ asset('assets/images/product/Hexagon-Bars.webp') }}" alt="Hexagon Bars Manufacturer"
                        class="img-fluid rounded shadow-sm" width="550" height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong>Hexagon Bars</strong>, also known as Hexagonal Bars or Hex Bars, are six-sided solid metal
                        bars specifically designed for precision machining, fastener manufacturing, structural fabrication,
                        and engineering applications. Their unique hexagonal shape provides excellent gripping, easy
                        handling, and superior machining performance, making them ideal for producing nuts, bolts, studs,
                        shafts, valve components, hydraulic fittings, and precision mechanical parts.
                    </p>

                    <p class="fs-6 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we are a trusted manufacturer,
                        supplier, and exporter of premium-quality Hexagon Bars in India. Our product range includes
                        Stainless Steel Hexagon Bars, Carbon Steel Hex Bars, Alloy Steel Hex Bars, Duplex & Super Duplex
                        Hexagon Bars, Nickel Alloy Hex Bars, Titanium Hex Bars, Brass Hexagon Bars, Copper Hex Bars, and
                        Aluminium Hexagon Bars manufactured in accordance with ASTM, ASME, DIN, EN, ISO, and JIS standards.
                    </p>

                    <p class="fs-6 text-justify">
                        Our Hexagon Bars are supplied to customers across India, UAE, Saudi Arabia, Qatar, Oman, Kuwait,
                        Europe, Southeast Asia, Africa, and other international markets, delivering outstanding performance
                        in demanding industrial and commercial applications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Datasheet Download -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hexagon Bars Datasheet</h3>
            <p class="mb-3">
                Get the complete Hexagon Bars datasheet with chemical composition,
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
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex &amp; Super Duplex, Nickel
                                        Alloys, Titanium, Aluminium, Brass &amp; Copper</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Hot Rolled, Cold Drawn, Bright Drawn &amp; Precision Ground</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A276, ASTM A484, ASTM B160, EN 10060, JIS H3250</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range (Across Flats)</td>
                                    <td>6 mm to 75 mm (Custom sizes up to 100 mm available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>3 m, 6 m &amp; Cut-to-Length</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Shape</td>
                                    <td>Hexagonal Solid Bars</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Bright Finish, Polished, Mill Finish, Shot Blasted, Pickled &amp; Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Supply Condition</td>
                                    <td>Annealed, Cold Drawn, Hot Rolled, Solution Annealed</td>
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
                <h2 class="fw-bold" style="color: #174268;">Hexagon Bars Weight Chart</h2>
            </div>
            <p class="text-center pb-3">
                Moksh Tubes & Fittings LLP supplies Hexagon Bars in a wide range of across-flat dimensions suitable for
                machining, fabrication, fastener manufacturing, and precision engineering applications. The weight per meter
                varies depending on the material density, making this chart useful for estimating material requirements and
                project costs.
            </p>

            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Across Flats (mm)</th>
                            <th>MS (kg/m)</th>
                            <th>SS (kg/m)</th>
                            <th>Aluminium (kg/m)</th>
                            <th>Brass (kg/m)</th>
                            <th>Copper (kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>10</td>
                            <td>0.68</td>
                            <td>0.69</td>
                            <td>0.23</td>
                            <td>0.73</td>
                            <td>0.77</td>
                        </tr>
                        <tr class="t-row">
                            <td>12</td>
                            <td>0.98</td>
                            <td>0.99</td>
                            <td>0.34</td>
                            <td>1.05</td>
                            <td>1.11</td>
                        </tr>
                        <tr class="t-row">
                            <td>14</td>
                            <td>1.33</td>
                            <td>1.35</td>
                            <td>0.46</td>
                            <td>1.43</td>
                            <td>1.51</td>
                        </tr>
                        <tr class="t-row">
                            <td>16</td>
                            <td>1.73</td>
                            <td>1.75</td>
                            <td>0.60</td>
                            <td>1.86</td>
                            <td>1.97</td>
                        </tr>
                        <tr class="t-row">
                            <td>18</td>
                            <td>2.19</td>
                            <td>2.22</td>
                            <td>0.75</td>
                            <td>2.35</td>
                            <td>2.49</td>
                        </tr>
                        <tr class="t-row">
                            <td>20</td>
                            <td>2.72</td>
                            <td>2.75</td>
                            <td>0.94</td>
                            <td>2.91</td>
                            <td>3.10</td>
                        </tr>
                        <tr class="t-row">
                            <td>22</td>
                            <td>3.31</td>
                            <td>3.34</td>
                            <td>1.14</td>
                            <td>3.53</td>
                            <td>3.76</td>
                        </tr>
                        <tr class="t-row">
                            <td>25</td>
                            <td>4.25</td>
                            <td>4.29</td>
                            <td>1.46</td>
                            <td>4.54</td>
                            <td>4.84</td>
                        </tr>
                        <tr class="t-row">
                            <td>30</td>
                            <td>6.11</td>
                            <td>6.16</td>
                            <td>2.09</td>
                            <td>6.54</td>
                            <td>6.95</td>
                        </tr>
                    </tbody>
                </table>
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
                            <p class="card-text small mb-0">SS 303, SS 304, SS 304L, SS 310, SS 316, SS 316L, SS 321, SS
                                347, 17-4 PH</p>
                        </div>
                    </div>
                </div>

                <!-- Carbon Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gear-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Carbon Steel</h5>
                            <p class="card-text small mb-0">ASTM A36, ASTM A105, EN8, EN9, IS 2062</p>
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
                            <p class="card-text small mb-0">Al 6061, 6082, 7075 | Brass C360, C385 | Copper C101, C110</p>
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
                <h2 class="fw-bold" style="color: #174268;">Types of Hexagon Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h4>Stainless Steel Hexagon Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-hexagon-fill"></i></div>
                        <h4>Carbon &amp; Alloy Steel Hex Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-hexagon-half"></i></div>
                        <h4>Brass &amp; Copper Hexagon Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-hexagon"></i></div>
                        <h4>Aluminium Hexagon Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-stars"></i></div>
                        <h4>Bright Drawn Hex Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-snow"></i></div>
                        <h4>Cold Drawn Hex Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-fire"></i></div>
                        <h4>Hot Rolled Hex Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h4>Precision Ground Hex Bars</h4>
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
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Applications &amp; Uses</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-nut"></i></div>
                        <h4>Fastener Manufacturing</h4>
                        <p class="small text-muted mt-2">Nuts, Bolts, Studs, Washers, Threaded Components.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide"></i></div>
                        <h4>Industrial Manufacturing</h4>
                        <p class="small text-muted mt-2">Precision Machined Components, Shafts, Valve Parts, Hydraulic
                            Components, Machine Parts.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building"></i></div>
                        <h4>Construction &amp; Infrastructure</h4>
                        <p class="small text-muted mt-2">Structural Supports, Brackets, Frameworks, Heavy Fabrication.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-funnel"></i></div>
                        <h4>Oil &amp; Gas Industry</h4>
                        <p class="small text-muted mt-2">Valve Components, Pump Parts, Instrumentation, Petrochemical
                            Equipment.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h4>Marine &amp; Offshore</h4>
                        <p class="small text-muted mt-2">Offshore Platforms, Shipbuilding, Marine Hardware, Desalination
                            Plants.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-airplane"></i></div>
                        <h4>Automotive &amp; Aerospace</h4>
                        <p class="small text-muted mt-2">Suspension Components, Engine Parts, Landing Gear, Lightweight
                            Structural Components.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features & Advantages --}}
    <section id="features" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Advantages of Hexagon Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Excellent machinability for CNC operations</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bounding-box"></i></div>
                        <h4>High dimensional accuracy</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-stars"></i></div>
                        <h4>Superior surface finish</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h4>High strength and durability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Excellent corrosion resistance</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-boxes"></i></div>
                        <h4>Available in multiple alloys and grades</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h4>Cost-effective for machining applications</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Suitable for heavy-duty industrial applications</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
                <p class="text-center">The mechanical properties of Hexagon Bars vary depending on the selected material
                    grade, manufacturing process, and heat treatment condition. Hexagon Bars are manufactured to deliver
                    high tensile strength, excellent dimensional accuracy, superior machinability, and reliable performance.
                </p>
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
                            <td>High (Depends on alloy and heat treatment)</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Elongation</strong></td>
                            <td>Good to Excellent</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Hardness</strong></td>
                            <td>Grade-specific</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Impact Strength</strong></td>
                            <td>Excellent toughness for engineering applications</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Machinability</strong></td>
                            <td>Excellent for precision machining</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Weldability</strong></td>
                            <td>Excellent in stainless steel grades; varies for alloy steels</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Corrosion Resistance</strong></td>
                            <td>Excellent in stainless steel, duplex, nickel alloys, titanium, and copper alloys</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Heat Resistance</strong></td>
                            <td>Available for high-temperature applications depending on material</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Dimensional Accuracy</strong></td>
                            <td>Excellent with close manufacturing tolerances</td>
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
                        <h4>Manufacturer, Supplier &amp; Exporter of Premium Quality Hexagon Bars.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-sliders"></i></div>
                        <h4>Extensive inventory of Stainless, Carbon, Alloy Steel, Brass, Copper &amp; Aluminium.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Manufactured in accordance with ASTM, ASME, DIN, EN, ISO, and JIS standards.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h4>Competitive pricing with ready stock for immediate dispatch.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Trusted exporter serving customers across India, the Middle East, Europe, Africa, and Southeast
                            Asia.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-headset"></i></div>
                        <h4>Technical support from experienced engineering professionals.</h4>
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
                                <h4>1. What are Hexagon Bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Hexagon Bars are six-sided solid metal bars used for precision machining, fastener
                                    manufacturing, engineering components, and structural applications. Their shape provides
                                    better gripping and easier machining compared to round bars.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>2. Which materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We supply Hexagon Bars in Stainless Steel, Carbon Steel, Alloy Steel, Duplex Stainless
                                    Steel, Super Duplex, Nickel Alloys, Titanium, Aluminium, Brass, and Copper.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>3. What sizes do you manufacture?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Standard sizes range from 6 mm to 75 mm across flats, with custom sizes up to 100 mm
                                    available on request.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>4. What surface finishes are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Available finishes include Mill Finish, Bright Finish, Polished, Pickled &amp;
                                    Passivated, Shot Blasted, and Precision Ground.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>5. What industries use Hexagon Bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Hexagon Bars are widely used in automotive, aerospace, construction, oil &amp; gas,
                                    petrochemical, marine, fastener manufacturing, electrical, and heavy engineering
                                    industries.</p>
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
                    Looking for Premium Quality <strong>Hexagon Bars</strong>? Whether you need Hexagon Bars for precision
                    machining, fastener manufacturing, construction, marine, oil &amp; gas, or heavy engineering
                    applications, <strong>Moksh Tubes &amp; Fittings LLP</strong> offers high-quality products, competitive
                    pricing, and reliable worldwide delivery.
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
                          "name": "Hexagon Bars",
                          "image": "https://mokshtubes.com/assets/images/product/Hexagon-Bars.webp",
                          "description": "Premium-quality Hexagon Bars manufactured in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Brass, Aluminium & Titanium grades.",
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
                                "name": "What are Hexagon Bars?",
                                "acceptedAnswer": {
                                  "@type": "Answer",
                                  "text": "Hexagon Bars are six-sided solid metal bars used for precision machining, fastener manufacturing, engineering components, and structural applications. Their shape provides better gripping and easier machining compared to round bars."
                                }
                              },
                              {
                                "@type": "Question",
                                "name": "Which materials are available?",
                                "acceptedAnswer": {
                                  "@type": "Answer",
                                  "text": "We supply Hexagon Bars in Stainless Steel, Carbon Steel, Alloy Steel, Duplex Stainless Steel, Super Duplex, Nickel Alloys, Titanium, Aluminium, Brass, and Copper."
                                }
                              },
                              {
                                "@type": "Question",
                                "name": "What sizes do you manufacture?",
                                "acceptedAnswer": {
                                  "@type": "Answer",
                                  "text": "Standard sizes range from 6 mm to 75 mm across flats, with custom sizes up to 100 mm available on request."
                                }
                              },
                              {
                                "@type": "Question",
                                "name": "What surface finishes are available?",
                                "acceptedAnswer": {
                                  "@type": "Answer",
                                  "text": "Available finishes include Mill Finish, Bright Finish, Polished, Pickled & Passivated, Shot Blasted, and Precision Ground."
                                }
                              },
                              {
                                "@type": "Question",
                                "name": "What industries use Hexagon Bars?",
                                "acceptedAnswer": {
                                  "@type": "Answer",
                                  "text": "Hexagon Bars are widely used in automotive, aerospace, construction, oil & gas, petrochemical, marine, fastener manufacturing, electrical, and heavy engineering industries."
                                }
                              }
                            ]
                          }
                        }
                        </script>
    @endverbatim
@endsection