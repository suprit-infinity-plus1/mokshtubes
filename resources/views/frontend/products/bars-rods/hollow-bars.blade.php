@extends('layouts.master')
@section('title', 'Hollow Bars Manufacturer, Supplier & Exporter | Stainless & Alloy Steel')
<!-- 84 characters -->
@section('meta_description', 'Moksh Tubes & Fittings LLP manufactures and exports Stainless Steel, Alloy Steel, Carbon
    Steel, Duplex, Nickel Alloy & Titanium Hollow Bars in custom sizes.')
@section('meta_keywords', 'Hollow Bars, Stainless Hollow Bars, Alloy Hollow Bars, MS Hollow Bars, Aluminium Hollow Bars,
    Bronze Hollow Bars, Carbon Steel Hollow Bars, Round Hollow Bars, Square Hollow Bars')
@section('og_title', 'Hollow Bars Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Moksh Tubes & Fittings LLP manufactures and exports Stainless Steel, Alloy Steel, Carbon
    Steel, Duplex, Nickel Alloy & Titanium Hollow Bars in custom sizes with worldwide delivery.')
@section('og_image', asset('assets/images/product/Hollow-Bars.webp'))
@section('og_type', 'product')
@section('twitter_title', 'Hollow Bars Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Hollow Bars in Stainless Steel, Carbon Steel, Alloy Steel, and
    Nickel Alloys grades with fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Hollow-Bars.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Hollow Bars Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Hollow Bars are precision-engineered metal bars with a hollow center that provide excellent
                        strength, reduced weight, and superior machinability. Manufactured in stainless steel, carbon steel,
                        alloy steel, duplex stainless steel, nickel alloys, titanium, and copper alloys, hollow bars are
                        widely used in machining, hydraulic cylinders, construction, automotive, oil & gas, marine,
                        aerospace, and heavy engineering industries. Moksh Tubes & Fittings LLP supplies high-quality hollow
                        bars in seamless and welded forms with custom sizes, finishes, and international standards.
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
                    <img src="{{ asset('assets/images/product/Hollow-Bars.webp') }}" alt="Hollow Bars Manufacturer"
                        class="img-fluid rounded shadow-sm" width="550" height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong>Hollow Bars</strong> are high-strength tubular metal bars manufactured with a precision
                        hollow bore, offering significant weight reduction without compromising structural integrity. Their
                        excellent dimensional accuracy, superior machinability, and reduced material wastage make them an
                        ideal choice for manufacturing hydraulic cylinders, machine components, bearings, bushings, rollers,
                        valve bodies, shafts, and precision engineering parts.
                    </p>

                    <p class="fs-6 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we are a trusted manufacturer,
                        supplier, and exporter of premium-quality Hollow Bars in India. Our extensive product range includes
                        Stainless Steel Hollow Bars, Carbon Steel Hollow Bars, Alloy Steel Hollow Bars, Duplex & Super
                        Duplex Hollow Bars, Nickel Alloy Hollow Bars, Titanium Hollow Bars, Aluminium Hollow Bars, and
                        Copper Alloy Hollow Bars manufactured in accordance with ASTM, ASME, DIN, EN, ISO, and JIS
                        standards.
                    </p>

                    <p class="fs-6 text-justify">
                        Our hollow bars are supplied to industries across India, UAE, Saudi Arabia, Qatar, Oman, Kuwait,
                        Bangladesh, Europe, and other international markets, ensuring reliable performance in demanding
                        industrial applications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Datasheet Download -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hollow Bars Datasheet</h3>
            <p class="mb-3">
                Get the complete Hollow Bars datasheet with chemical composition,
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
                                        Alloys, Titanium, Copper Alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Seamless &amp; Welded Hollow Bars</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A511, ASTM A312, ASTM A790, EN 10294, DIN 17458</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Outer Diameter</td>
                                    <td>25 mm to 450 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Inner Diameter</td>
                                    <td>12 mm to 300 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness</td>
                                    <td>5 mm to 100 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>3 m, 6 m &amp; Cut-to-Length</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Mill Finish, Ground, Polished, Pickled &amp; Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Forms</td>
                                    <td>Round, Square, Rectangular &amp; Oval Hollow Bars</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Supply Condition</td>
                                    <td>Annealed, Solution Annealed, Cold Drawn, Hot Finished</td>
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
                <h2 class="fw-bold" style="color: #174268;">Hollow Bars Size &amp; Weight Chart</h2>
            </div>
            <p class="text-center pb-3">
                <strong>Hollow Section Pipe Weight Chart – Square Sections</strong>
            </p>

            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Size (mm)</th>
                            <th>Outside Width (mm)</th>
                            <th>2.0 mmWt (kg/m)</th>
                            <th>3.0 mmWt (kg/m)</th>
                            <th>4.0 mmWt (kg/m)</th>
                            <th>5.0 mmWt (kg/m)</th>
                            <th>6.0 mmWt (kg/m)</th>
                            <th>8.0 mmWt (kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>20×20</td>
                            <td>20</td>
                            <td>1.10</td>
                            <td>1.60</td>
                            <td>2.10</td>
                            <td>2.60</td>
                            <td>3.10</td>
                            <td>4.10</td>
                        </tr>
                        <tr class="t-row">
                            <td>30×30</td>
                            <td>30</td>
                            <td>1.66</td>
                            <td>2.42</td>
                            <td>3.18</td>
                            <td>3.94</td>
                            <td>4.70</td>
                            <td>6.23</td>
                        </tr>
                        <tr class="t-row">
                            <td>40×40</td>
                            <td>40</td>
                            <td>2.22</td>
                            <td>3.26</td>
                            <td>4.31</td>
                            <td>5.36</td>
                            <td>6.39</td>
                            <td>8.46</td>
                        </tr>
                        <tr class="t-row">
                            <td>50×50</td>
                            <td>50</td>
                            <td>2.83</td>
                            <td>4.18</td>
                            <td>5.53</td>
                            <td>6.88</td>
                            <td>8.21</td>
                            <td>10.88</td>
                        </tr>
                        <tr class="t-row">
                            <td>60×60</td>
                            <td>60</td>
                            <td>3.38</td>
                            <td>4.98</td>
                            <td>6.59</td>
                            <td>8.19</td>
                            <td>9.78</td>
                            <td>13.00</td>
                        </tr>
                        <tr class="t-row">
                            <td>80×80</td>
                            <td>80</td>
                            <td>4.51</td>
                            <td>6.60</td>
                            <td>8.72</td>
                            <td>10.75</td>
                            <td>12.78</td>
                            <td>17.26</td>
                        </tr>
                        <tr class="t-row">
                            <td>100×100</td>
                            <td>100</td>
                            <td>5.70</td>
                            <td>8.43</td>
                            <td>11.17</td>
                            <td>13.90</td>
                            <td>16.61</td>
                            <td>22.05</td>
                        </tr>
                        <tr class="t-row">
                            <td>150×150</td>
                            <td>150</td>
                            <td>8.60</td>
                            <td>12.74</td>
                            <td>16.88</td>
                            <td>21.02</td>
                            <td>25.16</td>
                            <td>33.44</td>
                        </tr>
                        <tr class="t-row">
                            <td>200×200</td>
                            <td>200</td>
                            <td>11.50</td>
                            <td>17.04</td>
                            <td>22.59</td>
                            <td>28.13</td>
                            <td>33.67</td>
                            <td>44.74</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted"><strong>Note:</strong> We also provide detailed weight charts for
                Rectangular and Oval Sections in our downloadable datasheet.</p>
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
                            <p class="card-text small mb-0">304, 304L, 316, 316L, 310, 321, 347</p>
                        </div>
                    </div>
                </div>

                <!-- Carbon Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gear-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Carbon Steel</h5>
                            <p class="card-text small mb-0">ASTM A105, ASTM A350 LF2, IS 2062</p>
                        </div>
                    </div>
                </div>

                <!-- Alloy Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-nut mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Alloy Steel</h5>
                            <p class="card-text small mb-0">4130, 4140, EN19, EN24</p>
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

                <!-- Nickel Alloy -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-award-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Nickel Alloys</h5>
                            <p class="card-text small mb-0">Inconel, Monel, Hastelloy</p>
                        </div>
                    </div>
                </div>

                <!-- Non-Ferrous -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-palette mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Titanium &amp; Copper Alloys</h5>
                            <p class="card-text small mb-0">Titanium Gr 2/5, Cu-Ni 70/30, 90/10, Brass, Bronze</p>
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
                <h2 class="fw-bold" style="color: #174268;">Types of Hollow Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-arrow-repeat"></i></div>
                        <h4>Seamless Hollow Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h4>Welded Hollow Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-record-circle"></i></div>
                        <h4>Round Hollow Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-square"></i></div>
                        <h4>Square Hollow Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-bounding-box-circles"></i></div>
                        <h4>Rectangular Hollow Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-circle"></i></div>
                        <h4>Oval Hollow Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-arrows-collapse"></i></div>
                        <h4>Extruded Hollow Bars</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-droplet"></i></div>
                        <h4>Oil-Filled Hollow Bars</h4>
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
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Applications &amp; Uses</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide"></i></div>
                        <h4>Mechanical Engineering</h4>
                        <p class="small text-muted mt-2">Hydraulic Cylinders, Bushings, Bearings, Rollers, Machine
                            Components.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-funnel"></i></div>
                        <h4>Oil &amp; Gas Industry</h4>
                        <p class="small text-muted mt-2">Valve Bodies, Pump Components, High-Pressure Equipment, Offshore
                            Structures.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cone-striped"></i></div>
                        <h4>Construction &amp; Infrastructure</h4>
                        <p class="small text-muted mt-2">Structural Supports, Columns, Frameworks, Heavy Fabrication.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h4>Marine &amp; Offshore</h4>
                        <p class="small text-muted mt-2">Propeller Shafts, Marine Equipment, Offshore Platforms,
                            Desalination Plants.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-airplane"></i></div>
                        <h4>Automotive &amp; Aerospace</h4>
                        <p class="small text-muted mt-2">Steering Components, Hydraulic Systems, Landing Gear Components,
                            Precision Machined Parts.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-capsule"></i></div>
                        <h4>Food, Pharmaceutical &amp; Chemical</h4>
                        <p class="small text-muted mt-2">Processing Equipment, Hygienic Components, Chemical Processing
                            Systems, Stainless Fabrication.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features & Advantages --}}
    <section id="features" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Advantages of Hollow Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Excellent machinability for precision engineering</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-speedometer2"></i></div>
                        <h4>High strength-to-weight ratio</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-scissors"></i></div>
                        <h4>Reduced material wastage during machining</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bounding-box"></i></div>
                        <h4>Outstanding dimensional accuracy</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Excellent corrosion resistance in stainless grades</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-boxes"></i></div>
                        <h4>Available in seamless and welded construction</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h4>Cost-effective compared to solid bars</h4>
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
                <p class="text-center">Mechanical properties vary depending on the material grade and manufacturing
                    process. Hollow Bars are manufactured to provide excellent tensile strength, yield strength, impact
                    resistance, and dimensional stability for precision engineering applications.</p>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-start">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td><strong>Tensile Strength</strong></td>
                            <td>Varies by material grade; designed to provide high strength for machining and engineering
                                applications.</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Yield Strength</strong></td>
                            <td>Excellent yield strength to withstand heavy loads and mechanical stress.</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Impact Resistance</strong></td>
                            <td>High toughness for reliable performance under dynamic and shock loading conditions.</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Hardness</strong></td>
                            <td>Available in different hardness levels depending on the material grade and heat treatment.
                            </td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Machinability</strong></td>
                            <td>Excellent machinability, reducing machining time, tooling costs, and material waste.</td>
                        </tr>
                        <tr class="t-row">
                            <td><strong>Dimensional Stability</strong></td>
                            <td>Precision manufactured with tight tolerances for accurate machining and consistent
                                performance.</td>
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
                        <h4>Extensive inventory of stainless steel, alloy steel, duplex, nickel alloy hollow bars.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-sliders"></i></div>
                        <h4>Custom sizes, lengths, wall thicknesses, and machining options available.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Manufactured to ASTM, ASME, DIN, EN, ISO, and JIS standards.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h4>Competitive pricing with ready stock for fast delivery.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Trusted exporter serving international markets worldwide.</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-headset"></i></div>
                        <h4>Experienced technical support for industrial and project requirements.</h4>
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
                                <h4>What is a Hollow Bar?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A Hollow Bar is a tubular metal bar with a hollow center designed to reduce weight while
                                    maintaining excellent mechanical strength for machining and structural applications.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We supply stainless steel, carbon steel, alloy steel, duplex stainless steel, super
                                    duplex, nickel alloys, titanium, aluminium, brass, bronze, and copper nickel hollow
                                    bars.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are custom sizes available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. Custom outer diameters, inner diameters, wall thicknesses, and cut-to-length sizes
                                    are available according to customer specifications.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What industries use Hollow Bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Hollow Bars are widely used in oil &amp; gas, petrochemical, marine, construction,
                                    automotive, aerospace, heavy engineering, power generation, food processing, and
                                    pharmaceutical industries.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide Mill Test Certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. EN 10204 3.1 / 3.2 Mill Test Certificates are supplied with every order upon
                                    request.</p>
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
                    Looking for premium-quality <strong>Hollow Bars</strong> for machining, hydraulic systems, structural
                    fabrication, or industrial applications? Contact <strong>Moksh Tubes &amp; Fittings LLP</strong> today
                    for competitive pricing, custom sizes, fast delivery, and global export support.
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
                  "name": "Hollow Bars",
                  "image": "https://mokshtubes.com/assets/images/product/Hollow-Bars.webp",
                  "description": "Premium-quality Hollow Bars manufactured in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy & Titanium grades.",
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
                        "name": "What is a Hollow Bar?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "A Hollow Bar is a tubular metal bar with a hollow center designed to reduce weight while maintaining excellent mechanical strength for machining and structural applications."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "What materials are available?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "We supply stainless steel, carbon steel, alloy steel, duplex stainless steel, super duplex, nickel alloys, titanium, aluminium, brass, bronze, and copper nickel hollow bars."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Are custom sizes available?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Yes. Custom outer diameters, inner diameters, wall thicknesses, and cut-to-length sizes are available according to customer specifications."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "What industries use Hollow Bars?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Hollow Bars are widely used in oil & gas, petrochemical, marine, construction, automotive, aerospace, heavy engineering, power generation, food processing, and pharmaceutical industries."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Do you provide Mill Test Certificates?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Yes. EN 10204 3.1 / 3.2 Mill Test Certificates are supplied with every order upon request."
                        }
                      }
                    ]
                  }
                }
                </script>
    @endverbatim
@endsection
