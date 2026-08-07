@extends('layouts.master')
@section('title', 'Threaded Rods Manufacturer, Supplier & Exporter in India | SS, Alloy & Carbon Steel')
<!-- 91 characters -->
@section(
    'meta_description',
    'Buy Threaded Rods in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy & Galvanized grades. Available in M6–M64 sizes with weight chart, specifications and worldwide supply.'
)
@section(
    'meta_keywords',
    'Threaded Rods, Stainless Steel Threaded Rods, Galvanized Threaded Rods, ASTM A193 B7 Threaded Rods, SS 316 Threaded Rods, Metric Threaded Rods, Industrial Threaded Rods, Stud Rods, Thread Bar, All Thread Rod, Fully Threaded Rod'
)
@section('og_title', 'Threaded Rods Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Buy Threaded Rods in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy & Galvanized grades. Available in M6–M64 sizes with weight chart, specifications and worldwide supply.')
@section('og_image', asset('assets/images/product/Bars-&-Rods/threaded-rods.webp'))
@section('og_type', 'product')
@section('twitter_title', 'Threaded Rods Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Threaded Rods in Stainless Steel, Carbon Steel, Alloy Steel, and Galvanized grades with fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Bars-&-Rods/threaded-rods.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Threaded Rods Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Threaded Rods are among the most widely used fastening products in construction, infrastructure, manufacturing, oil & gas, marine, and industrial applications. Designed with continuous threading along the entire length, these rods provide secure fastening, easy adjustability, and exceptional load-bearing capability. At Moksh Tubes & Fittings LLP, we supply premium-quality Threaded Rods in Stainless Steel, Carbon Steel, Alloy Steel, Duplex Steel, Nickel Alloys, Titanium, Brass, Copper, and Galvanized Steel grades. Our threaded rods are manufactured according to ASTM, ASME, DIN, ISO, and BS standards and are available in multiple diameters, thread types, finishes, and custom lengths for domestic and international projects.
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
                    <img src="{{ asset('assets/images/product/Bars-&-Rods/threaded-rods.webp') }}"
                        alt="Threaded Rods Manufacturer" class="img-fluid rounded shadow-sm" width="550" height="350"
                        loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong>Threaded Rods</strong>, commonly referred to as Stud Rods, All-Thread Rods, or Thread Bars, are essential fastening components used to connect, secure, suspend, and reinforce structures and mechanical assemblies. Unlike standard bolts, threaded rods feature threading along their entire length, allowing nuts and washers to be installed at any position.
                    </p>

                    <p class="fs-6 text-justify">
                        These versatile fasteners are extensively used in steel structures, concrete anchoring systems, HVAC installations, piping supports, marine structures, petrochemical plants, and heavy engineering projects where strength and reliability are critical.
                    </p>

                    <p class="fs-6 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we offer a complete range of Threaded Rods manufactured from corrosion-resistant and high-strength materials suitable for harsh industrial environments, offshore installations, and structural applications.
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
                Get the complete datasheet with mechanical properties, sizes, weight charts, and application
                guidelines. Enter your email below to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
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
                                    <td>Product</td>
                                    <td>Threaded Rods / Stud Rods</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Diameter Range</td>
                                    <td>M6 to M64</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Imperial Sizes</td>
                                    <td>1/4" to 4"</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>1m, 2m, 3m &amp; Custom Lengths</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thread Type</td>
                                    <td>UNC, UNF, Metric Coarse, Metric Fine</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>DIN 975, DIN 976, ASTM A193, ASTM A307, ISO 898-1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Materials</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy, Titanium, Brass &amp; Copper</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Plain, Zinc Plated, Hot Dip Galvanized, PTFE Coated, Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1, MTC Available</td>
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
                <h2 class="fw-bold" style="color: #174268;">Threaded Rods Weight Chart (Metric – ISO Coarse Pitch)</h2>
            </div>
            
            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Size (M)</th>
                            <th>Pitch (mm)</th>
                            <th>Tensile Stress Area (mm²)</th>
                            <th>Black Steel (kg/m)</th>
                            <th>Zinc Plated (kg/m)</th>
                            <th>Hot Dip Galv (kg/m)</th>
                            <th>SS 304 (kg/m)</th>
                            <th>SS 316 (kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>M6</td><td>1.00</td><td>20.1</td><td>0.222</td><td>0.222</td><td>0.223</td><td>0.224</td><td>0.224</td></tr>
                        <tr class="t-row"><td>M8</td><td>1.25</td><td>36.6</td><td>0.373</td><td>0.374</td><td>0.375</td><td>0.376</td><td>0.376</td></tr>
                        <tr class="t-row"><td>M10</td><td>1.50</td><td>58.0</td><td>0.579</td><td>0.580</td><td>0.582</td><td>0.584</td><td>0.584</td></tr>
                        <tr class="t-row"><td>M12</td><td>1.75</td><td>84.3</td><td>0.821</td><td>0.823</td><td>0.826</td><td>0.829</td><td>0.829</td></tr>
                        <tr class="t-row"><td>M14</td><td>2.00</td><td>115</td><td>1.12</td><td>1.13</td><td>1.14</td><td>1.15</td><td>1.15</td></tr>
                        <tr class="t-row"><td>M16</td><td>2.00</td><td>157</td><td>1.58</td><td>1.59</td><td>1.60</td><td>1.62</td><td>1.62</td></tr>
                        <tr class="t-row"><td>M18</td><td>2.50</td><td>192</td><td>2.00</td><td>2.02</td><td>2.04</td><td>2.06</td><td>2.06</td></tr>
                        <tr class="t-row"><td>M20</td><td>2.50</td><td>245</td><td>2.47</td><td>2.49</td><td>2.51</td><td>2.53</td><td>2.53</td></tr>
                        <tr class="t-row"><td>M22</td><td>2.50</td><td>303</td><td>3.04</td><td>3.06</td><td>3.09</td><td>3.12</td><td>3.12</td></tr>
                        <tr class="t-row"><td>M24</td><td>3.00</td><td>353</td><td>3.77</td><td>3.80</td><td>3.83</td><td>3.86</td><td>3.86</td></tr>
                        <tr class="t-row"><td>M27</td><td>3.00</td><td>459</td><td>4.90</td><td>4.93</td><td>4.97</td><td>5.01</td><td>5.01</td></tr>
                        <tr class="t-row"><td>M30</td><td>3.50</td><td>561</td><td>6.40</td><td>6.44</td><td>6.48</td><td>6.53</td><td>6.53</td></tr>
                        <tr class="t-row"><td>M33</td><td>3.50</td><td>694</td><td>7.98</td><td>8.02</td><td>8.07</td><td>8.12</td><td>8.12</td></tr>
                        <tr class="t-row"><td>M36</td><td>4.00</td><td>817</td><td>9.29</td><td>9.34</td><td>9.39</td><td>9.44</td><td>9.44</td></tr>
                        <tr class="t-row"><td>M39</td><td>4.00</td><td>976</td><td>11.0</td><td>11.1</td><td>11.2</td><td>11.3</td><td>11.3</td></tr>
                        <tr class="t-row"><td>M42</td><td>4.50</td><td>1,134</td><td>13.4</td><td>13.5</td><td>13.6</td><td>13.7</td><td>13.7</td></tr>
                        <tr class="t-row"><td>M45</td><td>4.50</td><td>1,303</td><td>15.5</td><td>15.6</td><td>15.7</td><td>15.9</td><td>15.9</td></tr>
                        <tr class="t-row"><td>M48</td><td>5.00</td><td>1,470</td><td>17.7</td><td>17.8</td><td>18.0</td><td>18.2</td><td>18.2</td></tr>
                        <tr class="t-row"><td>M52</td><td>5.00</td><td>1,676</td><td>20.9</td><td>21.0</td><td>21.2</td><td>21.4</td><td>21.4</td></tr>
                        <tr class="t-row"><td>M56</td><td>5.50</td><td>1,962</td><td>24.8</td><td>25.0</td><td>25.2</td><td>25.4</td><td>25.4</td></tr>
                        <tr class="t-row"><td>M60</td><td>5.50</td><td>2,216</td><td>28.6</td><td>28.8</td><td>29.0</td><td>29.3</td><td>29.3</td></tr>
                        <tr class="t-row"><td>M64</td><td>6.00</td><td>2,561</td><td>33.6</td><td>33.8</td><td>34.0</td><td>34.3</td><td>34.3</td></tr>
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
                <p class="text-center">We supply Threaded Rods in a wide range of grades:</p>
            </div>

            <div class="row justify-content-center mb-5">
                <!-- Stainless Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-shield-check mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Stainless Steel</h5>
                            <p class="card-text small mb-0">304, 304L, 316, 316L, 310, 321<br>For corrosion resistance in marine, food &amp; pharma industries.</p>
                        </div>
                    </div>
                </div>

                <!-- Carbon & Alloy Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gear-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Carbon &amp; Alloy Steel</h5>
                            <p class="card-text small mb-0">ASTM A193 B7/B7M, A320 L7/L7M, ASTM A307<br>For structural &amp; high-strength use.</p>
                        </div>
                    </div>
                </div>

                <!-- Duplex -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gem mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Duplex &amp; Super Duplex</h5>
                            <p class="card-text small mb-0">UNS S31803, S32205, S32750, S32760<br>For offshore &amp; chemical plants.</p>
                        </div>
                    </div>
                </div>

                <!-- High-Performance Alloys -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-award-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Nickel Alloys &amp; Titanium</h5>
                            <p class="card-text small mb-0">Inconel, Monel, Hastelloy, Titanium Grades 2 &amp; 5<br>For extreme heat &amp; corrosive service.</p>
                        </div>
                    </div>
                </div>

                <!-- Non-Ferrous -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-palette mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Brass, Copper &amp; Aluminum</h5>
                            <p class="card-text small mb-0">C36000 Brass, C11000 Copper, Al 6061, 6082<br>For lightweight, decorative &amp; electrical purposes.</p>
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
                <h2 class="fw-bold" style="color: #174268;">Types of Threaded Rods</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-sliders"></i></div>
                        <h4>Fully Threaded Rods (All Thread)</h4>
                        <p class="small text-muted mt-2">Threaded continuously from end to end, offering maximum adjustment flexibility.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-symmetry-horizontal"></i></div>
                        <h4>Double-End Studs</h4>
                        <p class="small text-muted mt-2">Threaded at both ends with an unthreaded center section, commonly used in flange connections.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                        <h4>Tap-End Studs</h4>
                        <p class="small text-muted mt-2">Featuring one short-threaded end and one long-threaded end for equipment assembly applications.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gear-wide"></i></div>
                        <h4>Coarse Thread Rods</h4>
                        <p class="small text-muted mt-2">Suitable for construction and general engineering applications.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h4>Fine Thread Rods</h4>
                        <p class="small text-muted mt-2">Used where vibration resistance and precise clamping force are required.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Custom Threaded Rods</h4>
                        <p class="small text-muted mt-2">Manufactured according to project specifications, including special thread forms, coatings, and lengths.</p>
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
                        <div class="advantage-icon"><i class="bi bi-cone-striped"></i></div>
                        <h4>Construction &amp; Infrastructure</h4>
                        <p class="small text-muted mt-2">Structural steel connections, concrete anchoring systems, building reinforcement, suspension systems.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h4>Marine &amp; Offshore</h4>
                        <p class="small text-muted mt-2">Dock structures, offshore platforms, shipbuilding projects, saltwater applications.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-funnel"></i></div>
                        <h4>Oil &amp; Gas Industry</h4>
                        <p class="small text-muted mt-2">Flange assemblies, pressure vessels, refineries, petrochemical facilities.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Industrial Machinery</h4>
                        <p class="small text-muted mt-2">Pumps, compressors, turbines, manufacturing equipment, machinery assembly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-airplane"></i></div>
                        <h4>Automotive &amp; Aerospace</h4>
                        <p class="small text-muted mt-2">Engine components, suspension systems, aircraft structures.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-house"></i></div>
                        <h4>Architectural Applications</h4>
                        <p class="small text-muted mt-2">Railings, decorative fittings, signage systems, furniture manufacturing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     {{-- Features & Advantages --}}
    <section id="features" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Advantages of Threaded Rods</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightning"></i></div>
                        <h4>High tensile strength</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bricks"></i></div>
                        <h4>Excellent load-bearing capability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Easy installation</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-boxes"></i></div>
                        <h4>Available in multiple materials</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Corrosion-resistant options available</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h4>Cost-effective fastening solution</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-scissors"></i></div>
                        <h4>Easily cut to custom lengths</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-sun"></i></div>
                        <h4>Suitable for high-temperature environments</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h4>Long service life</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
                <p class="text-center">Values are typical and may vary according to size and heat treatment.</p>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Grade</th>
                            <th>Tensile Strength (MPa)</th>
                            <th>Yield Strength (MPa)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>SS 304</td><td>515</td><td>205</td></tr>
                        <tr class="t-row"><td>SS 316</td><td>515</td><td>205</td></tr>
                        <tr class="t-row"><td>ASTM A193 B7</td><td>860</td><td>720</td></tr>
                        <tr class="t-row"><td>ASTM A320 L7</td><td>860</td><td>720</td></tr>
                        <tr class="t-row"><td>Duplex 2205</td><td>620</td><td>450</td></tr>
                        <tr class="t-row"><td>Inconel 625</td><td>827</td><td>414</td></tr>
                        <tr class="t-row"><td>Titanium Grade 2</td><td>345</td><td>275</td></tr>
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
                        <h4>Extensive inventory availability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>ISO-certified quality systems</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Custom manufacturing capabilities</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h4>Competitive pricing</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Worldwide export support</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-truck"></i></div>
                        <h4>Fast dispatch schedules</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-headset"></i></div>
                        <h4>Technical assistance for project requirements</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h4>Complete documentation and certification</h4>
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
                                <h4>What are threaded rods used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Threaded rods are used for fastening, anchoring, suspension systems, structural reinforcement, machinery assembly, and industrial installations.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the standard size range?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Standard sizes range from M6 to M64 and from 1/4" to 4" in imperial dimensions.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which threaded rod material offers the best corrosion resistance?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Stainless Steel 316, Duplex Stainless Steel, Titanium, and Nickel Alloy threaded rods provide excellent corrosion resistance.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can threaded rods be supplied in custom lengths?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. We supply threaded rods in standard and custom lengths according to project requirements.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide test certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. EN 10204 3.1 Mill Test Certificates and additional inspection reports are available.</p>
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
                    Looking for premium-quality <strong>Threaded Rods</strong> for construction, industrial, marine, or oil &amp; gas projects? Contact <strong>Moksh Tubes &amp; Fittings LLP</strong> today for competitive pricing, technical assistance, and worldwide delivery.
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
                  "name": "Threaded Rods",
                  "image": "https://mokshtubes.com/assets/images/product/Bars-&-Rods/threaded-rods.webp",
                  "description": "Premium-quality Threaded Rods manufactured in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy & Galvanized grades.",
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
                        "name": "What are threaded rods used for?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Threaded rods are used for fastening, anchoring, suspension systems, structural reinforcement, machinery assembly, and industrial installations."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "What is the standard size range?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Standard sizes range from M6 to M64 and from 1/4\" to 4\" in imperial dimensions."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Which threaded rod material offers the best corrosion resistance?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Stainless Steel 316, Duplex Stainless Steel, Titanium, and Nickel Alloy threaded rods provide excellent corrosion resistance."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Can threaded rods be supplied in custom lengths?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Yes. We supply threaded rods in standard and custom lengths according to project requirements."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Do you provide test certificates?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Yes. EN 10204 3.1 Mill Test Certificates and additional inspection reports are available."
                        }
                      }
                    ]
                  }
                }
                </script>
    @endverbatim
@endsection