@extends('layouts.master')
@section('title', 'Eccentric Reducers | Seamless & Welded Pipe Reducers | Moksh Tubes')
<!-- 52 characters -->
@section('meta_description',
    'High-quality Eccentric Reducers for horizontal pipeline size transitions. Available in Stainless Steel, Carbon Steel, and Alloy Steel in seamless and welded forms.')
@section('meta_keywords',
    'Eccentric Reducers, Pipe Reducers, Seamless Reducers, Welded Reducers, Stainless Steel Eccentric Reducer, Carbon Steel Reducers')
@section('og_image', asset('assets/images/product/flangs/eccentric-reducers_11zon.jpg'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/eccentric-reducers_11zon.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Eccentric Reducers (Seamless & Welded)</h1>
                        <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Eccentric Reducers are essential pipe fittings designed to connect pipes of different diameters in horizontal piping systems. By maintaining a flat side (usually at the bottom), they prevent the accumulation of liquids and trapping of gases. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we supply precision-manufactured seamless and welded eccentric reducers in carbon steel, alloy steel, stainless steel, duplex, nickel alloys, and titanium—fully compliant with ASME, ANSI, DIN, and EN standards.  
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Start Material Tabs -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#size-weight">Size & Weight</a> |
            <a href="#grades">Grades</a> |
            <a href="#applications">Applications</a> |
            <a href="#seamless-vs-welded">Seamless vs Welded</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#tolerances">Tolerances</a> |
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>
    <!-- End Material Tabs -->

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Eccentric Reducers</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/eccentric-reducers_11zon.jpg') }}"
                        alt="Eccentric Reducers" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Eccentric Reducers</strong> are critical pipeline components designed to reduce the pipe size while keeping one side of the fitting flat. This unique geometry ensures that the bottom (or top) of the pipeline remains level, facilitating complete drainage and preventing cavitation, especially near pump suction lines.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a trusted manufacturer,
                        supplier, and exporter of Eccentric Reducers in India, supplying premium-quality fittings
                        conforming to ASME B16.9 and MSS-SP-43 standards. Our products are widely
                        supplied to <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian projects</a> and
                        Gulf / GCC countries including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Manufactured using advanced hot-forming and cold-forming processes, our seamless and welded eccentric reducers offer excellent mechanical strength, corrosion resistance, dimensional accuracy, and long service life, even in extreme high-pressure operating conditions.
                    </p>

                </div>
            </div>
        </div>
    </section>
    {{-- datasheet --}}
    
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
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>,
                                        <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex
                                            Steel</a>, <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                            Alloys</a>, <a href="{{ route('materials.inconel') }}">Inconel</a>, Monel, <a
                                            href="{{ route('materials.titanium') }}">Titanium</a>, Copper Alloys, Alloy
                                        Steel, Carbon Steel
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>1/2" NB to 48" NB (Seamless up to 24", Welded 8" to 48")</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thickness</td>
                                    <td>Schedule 5S, 10S, 20S, S10, S20, S30, STD, 40S, S40, S60, XS, 80S, S80, S100, S120, S140, S160, XXS</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Seamless, Welded, Fabricated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Form</td>
                                    <td>Eccentric (Offset) Reducer</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Shot Blasted, Black Paint, Anti-Rust Oil, Galvanized</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASME B16.9, MSS-SP-43, EN 10253, DIN 2616</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Pump Suction Lines, Oil & Gas Processing, Chemical Plants, Horizontal Piperacks</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- charts -->
    <section id="size-weight" class="sec-padd-top sec-padd-bottom bg-light">

        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Charts</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h3 class="text-center mb-0" style="color: #db7227;">Size Range Chart</h3>
                <h4 class="text-center mb-0" style="color: #db7227;">Eccentric Reducers Size & Weight Chart</h4>
            </div>
            <!-- Schedule 10C -->
            <div class="section-title center mb-3 mt-4">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 10C Size & Weight Chart</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>NPS (Large x Small)</th>
                            <th>Large End OD (mm)</th>
                            <th>Small End OD (mm)</th>
                            <th>Length (L) (mm)</th>
                            <th>Approx Weight (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>1" x 1/2"</td><td>33.4</td><td>21.3</td><td>51</td><td>0.12</td></tr>
                        <tr class="t-row"><td>1-1/2" x 1"</td><td>48.3</td><td>33.4</td><td>64</td><td>0.24</td></tr>
                        <tr class="t-row"><td>2" x 1"</td><td>60.3</td><td>33.4</td><td>76</td><td>0.40</td></tr>
                        <tr class="t-row"><td>2" x 1-1/2"</td><td>60.3</td><td>48.3</td><td>76</td><td>0.45</td></tr>
                        <tr class="t-row"><td>3" x 2"</td><td>88.9</td><td>60.3</td><td>89</td><td>0.85</td></tr>
                        <tr class="t-row"><td>4" x 2"</td><td>114.3</td><td>60.3</td><td>102</td><td>1.30</td></tr>
                        <tr class="t-row"><td>4" x 3"</td><td>114.3</td><td>88.9</td><td>102</td><td>1.50</td></tr>
                        <tr class="t-row"><td>6" x 4"</td><td>168.3</td><td>114.3</td><td>140</td><td>3.20</td></tr>
                        <tr class="t-row"><td>8" x 6"</td><td>219.1</td><td>168.3</td><td>152</td><td>5.10</td></tr>
                        <tr class="t-row"><td>10" x 8"</td><td>273.0</td><td>219.1</td><td>178</td><td>7.50</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Schedule 40 -->
            <div class="section-title center mb-3 mt-4">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 40 Size & Weight Chart</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>NPS (Large x Small)</th>
                            <th>Large End OD (mm)</th>
                            <th>Small End OD (mm)</th>
                            <th>Length (L) (mm)</th>
                            <th>Approx Weight (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>1" x 1/2"</td><td>33.4</td><td>21.3</td><td>51</td><td>0.18</td></tr>
                        <tr class="t-row"><td>1-1/2" x 1"</td><td>48.3</td><td>33.4</td><td>64</td><td>0.35</td></tr>
                        <tr class="t-row"><td>2" x 1"</td><td>60.3</td><td>33.4</td><td>76</td><td>0.55</td></tr>
                        <tr class="t-row"><td>2" x 1-1/2"</td><td>60.3</td><td>48.3</td><td>76</td><td>0.65</td></tr>
                        <tr class="t-row"><td>3" x 2"</td><td>88.9</td><td>60.3</td><td>89</td><td>1.25</td></tr>
                        <tr class="t-row"><td>4" x 2"</td><td>114.3</td><td>60.3</td><td>102</td><td>1.95</td></tr>
                        <tr class="t-row"><td>4" x 3"</td><td>114.3</td><td>88.9</td><td>102</td><td>2.25</td></tr>
                        <tr class="t-row"><td>6" x 4"</td><td>168.3</td><td>114.3</td><td>140</td><td>4.75</td></tr>
                        <tr class="t-row"><td>8" x 6"</td><td>219.1</td><td>168.3</td><td>152</td><td>7.80</td></tr>
                        <tr class="t-row"><td>10" x 8"</td><td>273.0</td><td>219.1</td><td>178</td><td>12.5</td></tr>
                        <tr class="t-row"><td>12" x 10"</td><td>323.8</td><td>273.0</td><td>203</td><td>18.0</td></tr>
                        <tr class="t-row"><td>16" x 12"</td><td>406.4</td><td>323.8</td><td>356</td><td>35.5</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Schedule 80 -->
            <div class="section-title center mb-3 mt-4">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 80 Size & Weight Chart</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>NPS (Large x Small)</th>
                            <th>Large End OD (mm)</th>
                            <th>Small End OD (mm)</th>
                            <th>Length (L) (mm)</th>
                            <th>Approx Weight (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>1" x 1/2"</td><td>33.4</td><td>21.3</td><td>51</td><td>0.25</td></tr>
                        <tr class="t-row"><td>1-1/2" x 1"</td><td>48.3</td><td>33.4</td><td>64</td><td>0.50</td></tr>
                        <tr class="t-row"><td>2" x 1"</td><td>60.3</td><td>33.4</td><td>76</td><td>0.80</td></tr>
                        <tr class="t-row"><td>2" x 1-1/2"</td><td>60.3</td><td>48.3</td><td>76</td><td>0.90</td></tr>
                        <tr class="t-row"><td>3" x 2"</td><td>88.9</td><td>60.3</td><td>89</td><td>1.75</td></tr>
                        <tr class="t-row"><td>4" x 2"</td><td>114.3</td><td>60.3</td><td>102</td><td>2.85</td></tr>
                        <tr class="t-row"><td>4" x 3"</td><td>114.3</td><td>88.9</td><td>102</td><td>3.20</td></tr>
                        <tr class="t-row"><td>6" x 4"</td><td>168.3</td><td>114.3</td><td>140</td><td>7.15</td></tr>
                        <tr class="t-row"><td>8" x 6"</td><td>219.1</td><td>168.3</td><td>152</td><td>12.2</td></tr>
                        <tr class="t-row"><td>10" x 8"</td><td>273.0</td><td>219.1</td><td>178</td><td>18.5</td></tr>
                        <tr class="t-row"><td>12" x 10"</td><td>323.8</td><td>273.0</td><td>203</td><td>26.5</td></tr>
                        <tr class="t-row"><td>16" x 12"</td><td>406.4</td><td>323.8</td><td>356</td><td>52.0</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Schedule 160 -->
            <div class="section-title center mb-3 mt-4">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 160 Size & Weight Chart</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>NPS (Large x Small)</th>
                            <th>Large End OD (mm)</th>
                            <th>Small End OD (mm)</th>
                            <th>Length (L) (mm)</th>
                            <th>Approx Weight (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>1" x 1/2"</td><td>33.4</td><td>21.3</td><td>51</td><td>0.35</td></tr>
                        <tr class="t-row"><td>1-1/2" x 1"</td><td>48.3</td><td>33.4</td><td>64</td><td>0.75</td></tr>
                        <tr class="t-row"><td>2" x 1"</td><td>60.3</td><td>33.4</td><td>76</td><td>1.25</td></tr>
                        <tr class="t-row"><td>2" x 1-1/2"</td><td>60.3</td><td>48.3</td><td>76</td><td>1.40</td></tr>
                        <tr class="t-row"><td>3" x 2"</td><td>88.9</td><td>60.3</td><td>89</td><td>2.60</td></tr>
                        <tr class="t-row"><td>4" x 2"</td><td>114.3</td><td>60.3</td><td>102</td><td>4.50</td></tr>
                        <tr class="t-row"><td>4" x 3"</td><td>114.3</td><td>88.9</td><td>102</td><td>5.10</td></tr>
                        <tr class="t-row"><td>6" x 4"</td><td>168.3</td><td>114.3</td><td>140</td><td>11.5</td></tr>
                        <tr class="t-row"><td>8" x 6"</td><td>219.1</td><td>168.3</td><td>152</td><td>20.5</td></tr>
                        <tr class="t-row"><td>10" x 8"</td><td>273.0</td><td>219.1</td><td>178</td><td>31.0</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Schedule XXC -->
            <div class="section-title center mb-3 mt-4">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule XXC Size & Weight Chart</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>NPS (Large x Small)</th>
                            <th>Large End OD (mm)</th>
                            <th>Small End OD (mm)</th>
                            <th>Length (L) (mm)</th>
                            <th>Approx Weight (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>1" x 1/2"</td><td>33.4</td><td>21.3</td><td>51</td><td>0.45</td></tr>
                        <tr class="t-row"><td>1-1/2" x 1"</td><td>48.3</td><td>33.4</td><td>64</td><td>0.95</td></tr>
                        <tr class="t-row"><td>2" x 1"</td><td>60.3</td><td>33.4</td><td>76</td><td>1.60</td></tr>
                        <tr class="t-row"><td>2" x 1-1/2"</td><td>60.3</td><td>48.3</td><td>76</td><td>1.85</td></tr>
                        <tr class="t-row"><td>3" x 2"</td><td>88.9</td><td>60.3</td><td>89</td><td>3.50</td></tr>
                        <tr class="t-row"><td>4" x 2"</td><td>114.3</td><td>60.3</td><td>102</td><td>5.80</td></tr>
                        <tr class="t-row"><td>4" x 3"</td><td>114.3</td><td>88.9</td><td>102</td><td>6.50</td></tr>
                        <tr class="t-row"><td>6" x 4"</td><td>168.3</td><td>114.3</td><td>140</td><td>14.8</td></tr>
                        <tr class="t-row"><td>8" x 6"</td><td>219.1</td><td>168.3</td><td>152</td><td>26.5</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- Grades Available --}}
    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Available Grades & Materials</h2>
            </div>
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Eccentric Reducers are offered in a wide
                    range of materials and grades:</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>
                                    </td>
                                    <td>ASTM A403 WP304, WP304L, WP316, WP316L, WP321, WP347</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex:
                                        </a></td>
                                    <td>ASTM A815 UNS S31803, UNS S32750 for extreme corrosion resistance.</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Alloys</a></td>
                                    <td>Inconel 600, 625, Monel 400, Hastelloy C276 for severe environments.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel</td>
                                    <td>ASTM A234 WP1, WP5, WP9, WP11, WP22, WP91 for high-temp service.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Steel</td>
                                    <td>ASTM A234 WPB, WPC; ASTM A420 WPL6 for low temperatures.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td><a href="{{ route('materials.titanium') }}">Grades 1, 2</a> for desalination and chemical industries.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    

    {{-- Applications --}}
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Eccentric Reducers</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Eccentric Reducers</strong> are crucial for industries where horizontal pipelines require diameter reduction without trapping air or fluids:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Pump Suction Lines</h5>
                        <ul>
                            <li>Prevents cavitation and air pockets</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Oil & Gas Processing</h5>
                        <ul>
                            <li>Horizontal pipe racks and manifolds</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical & Petrochemical</h5>
                        <ul>
                            <li>Complete drainage systems for safety</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Water Treatment Plants</h5>
                        <ul>
                            <li>Slurry and fluid transport lines</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Food & Beverage</h5>
                        <ul>
                            <li>Sanitary processing pipelines</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Power Generation</h5>
                        <ul>
                            <li>Cooling water circulation lines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Industries We Serve --}}
    <!-- Buying Guide Section -->
    

    

    {{-- Uses --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses of Eccentric Reducers</h2>
            </div>
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Eccentric Reducers provide critical advantages across multiple piping scenarios:</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrow-down-right-circle"></i></div>
                        <h4>Pump Suction Control</h4>
                        <h5>Installed Top Flat (FOT) to prevent air pockets from entering pumps.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h4>Pipeline Drainage</h4>
                        <h5>Installed Bottom Flat (FOB) to prevent liquid pooling and corrosion.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h4>Piperack Alignment</h4>
                        <h5>Maintains a consistent bottom-of-pipe (BOP) elevation on support racks.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Advantages --}}
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages </h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Prevents Cavitation</h4>
                        <h5>Eliminates trapped gases in pump lines.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Complete System Drainage</h4>
                        <h5>Ensures fluid completely exits the piping system.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Optimized Flow</h4>
                        <h5>Reduces turbulence compared to abrupt pipe transitions.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                        <h4>Structural Alignment</h4>
                        <h5>Simplifies pipe support structures by keeping the pipe bottom flat.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Global Standards Compliance</h4>
                        <h5>Manufactured to stringent ASME B16.9 and MSS-SP-43 requirements.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom">
        <div class="container">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – Eccentric Reducers</h2>
                 <p class="text-center">(Typical values for common grades)</p>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Grade (ASTM)</th>
                            <th>Tensile Strength (MPa)</th>
                            <th>Yield Strength (MPa)</th>
                            <th>Elongation (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>A234 WPB (Carbon Steel)</td>
                            <td>415 - 585</td>
                            <td>240</td>
                            <td>22</td>
                        </tr>
                         <tr class="t-row">
                            <td>A403 WP316 (Stainless)</td>
                            <td>515</td>
                            <td>205</td>
                            <td>28</td>
                        </tr>
                         <tr class="t-row">
                            <td>A815 S31803 (Duplex)</td>
                            <td>620</td>
                            <td>450</td>
                            <td>25</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    

     <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Exports & Supply Coverage</h2>
            </div>
            <p class="fs-5">We supply Eccentric Reducers to major Indian industrial hubs including Mumbai, Chennai, Ahmedabad, Pune, and Hyderabad, supporting domestic EPC and oil & gas projects.</p>
            <p class="fs-5">We actively export to the Middle East, supplying high-quality fittings to UAE, Saudi Arabia, Qatar, Oman, and Kuwait for petrochemical, refinery, and pipeline infrastructure.</p>
        </div>
    </section>

     <!-- Testing & Quality Control -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Testing & Quality Control for Eccentric Reducers</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h4>Dimensional Inspection</h4>
                        <h5>Verifies OD, ID, length, and wall thickness against ASME B16.9.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-camera"></i></div>
                        <h4>Radiography Testing (RT)</h4>
                        <h5>100% RT on weld seams of welded eccentric reducers.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-check2-circle"></i></div>
                        <h4>PMI Test</h4>
                        <h5>Positive Material Identification to verify alloy compositions.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h4>Hardness Test</h4>
                        <h5>Ensures correct heat treatment and material strength.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h4>Magnetic Particle Inspection</h4>
                        <h5>MPI to detect surface cracks or defects.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-file-earmark-check"></i></div>
                        <h4>Hydrostatic Testing</h4>
                        <h5>Available upon request to guarantee pressure containment.</h5>
                    </div>
                </div>
            </div>
    </section>

    {{-- why choose us --}}
    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Ready stock of standard sizes for fast dispatch</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Custom manufacturing capability for large diameters</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Strict compliance with ASME, ANSI, & DIN standards</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Export-grade packaging & global logistics support</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5>Complete traceability and MTC 3.1 documentation</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Dedicated technical support for EPC contractors</h5>
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

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the difference between an eccentric and a concentric reducer?</h4>
                            </div>
                            <div class="accord-content">
                                <p>An eccentric reducer reduces the pipe size while keeping one edge of the pipe straight (offset), preventing liquid pooling or gas trapping in horizontal pipelines. A concentric reducer reduces the pipe size symmetrically, keeping the centerline the same, and is primarily used in vertical pipelines.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why use an eccentric reducer at a pump suction?</h4>
                            </div>
                            <div class="accord-content">
                                <p>At pump suctions, eccentric reducers are installed Top Flat (FOT). This prevents air or gas pockets from accumulating at the top of the pipe, which could enter the pump and cause cavitation damage.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>When should the reducer be installed Bottom Flat (FOB)?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Eccentric reducers are installed Bottom Flat on horizontal piperacks. This maintains a consistent bottom-of-pipe (BOP) elevation across pipe supports and ensures complete drainage of the pipeline during shutdowns.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials do you offer for eccentric reducers?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We offer them in Stainless Steel (304, 316), Carbon Steel (WPB), Alloy Steel, Duplex/Super Duplex, and Nickel Alloys, depending on the pressure, temperature, and corrosive nature of the fluid.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>For further information, quotes, or customized eccentric reducers, <strong>Moksh Tubes & Fittings LLP</strong> is your dependable partner for industrial piping solutions.</p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal" data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection

@push('styles')
    <style>
        /* Base state for collapsed rows */
        tr.collapse {
            opacity: 0;
            transform: translateY(-6px) scale(0.98);
            transition: opacity .35s ease, transform .35s ease;
        }

        /* When collapsing (Bootstrap interim state) */
        tr.collapsing {
            opacity: 0;
            transform: translateY(-10px) scale(0.96);
            display: table-row !important;
        }

        /* When fully shown */
        tr.collapse.show {
            opacity: 1;
            transform: translateY(0) scale(1);
            display: table-row;
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
              "email": "info@mokshtubes.com",
              "address": {
                "@type": "PostalAddress",
                "addressLocality": "Mumbai",
                "addressRegion": "MH",
                "addressCountry": "IN"
              }
            },
            {
              "@type": "WebSite",
              "@id": "https://mokshtubes.com/#website",
              "url": "https://mokshtubes.com/",
              "name": "Moksh Tubes & Fittings LLP"
            },
            {
              "@type": "WebPage",
              "@id": "https://mokshtubes.com/products/pipe-fittings-flanges-fasteners/eccentric-reducers#webpage",
              "name": "Eccentric Reducers | Moksh Tubes & Fittings LLP",
              "url": "https://mokshtubes.com/products/pipe-fittings-flanges-fasteners/eccentric-reducers",
              "description": "High-quality Eccentric Reducers for horizontal pipeline size transitions. Available in Stainless Steel, Carbon Steel, and Alloy Steel.",
              "isPartOf": { "@id": "https://mokshtubes.com/#website" },
              "primaryImageOfPage": { "@id": "https://mokshtubes.com/#product-image" }
            },
            {
              "@type": ["Product", "Service"],
              "@id": "https://mokshtubes.com/#eccentric-reducers",
              "name": "Eccentric Reducers",
              "url": "https://mokshtubes.com/products/pipe-fittings-flanges-fasteners/eccentric-reducers",
              "image": "https://mokshtubes.com/assets/images/product/flangs/eccentric-reducers_11zon.jpg",
              "category": "Pipe Fittings",
              "description": "Seamless and welded eccentric reducers designed to prevent cavitation and fluid pooling in horizontal pipelines. Manufactured to ASME B16.9 standards.",
              "brand": {
                "@type": "Brand",
                "@id": "https://mokshtubes.com/#organization",
                "name": "Moksh Tubes & Fittings LLP"
              },
              "manufacturer": {
                "@type": "Organization",
                "@id": "https://mokshtubes.com/#organization"
              },
              "material": [
                "Stainless Steel",
                "Carbon Steel",
                "Alloy Steel",
                "Duplex & Super Duplex"
              ],
              "offers": {
                "@type": "Offer",
                "@id": "https://mokshtubes.com/#offer",
                "url": "https://mokshtubes.com/products/pipe-fittings-flanges-fasteners/eccentric-reducers",
                "availability": "https://schema.org/InStock",
                "priceCurrency": "USD",
                "price": "0.00",
                "priceValidUntil": "2030-12-31",
                "businessFunction": "https://schema.org/Sell",
                "seller": { "@id": "https://mokshtubes.com/#organization" }
              }
            },
            {
              "@type": "ImageObject",
              "@id": "https://mokshtubes.com/#product-image",
              "url": "https://mokshtubes.com/assets/images/product/flangs/eccentric-reducers_11zon.jpg",
              "description": "Eccentric Reducers"
            },
            {
              "@type": "FAQPage",
              "@id": "https://mokshtubes.com/#faq-eccentric-reducers",
              "mainEntity": [
                {
                  "@type": "Question",
                  "name": "What is the difference between an eccentric and a concentric reducer?",
                  "acceptedAnswer": { "@type": "Answer", "text": "An eccentric reducer reduces the pipe size while keeping one edge straight to prevent pooling in horizontal lines, while a concentric reducer reduces symmetrically for vertical lines." }
                },
                {
                  "@type": "Question",
                  "name": "Why use an eccentric reducer at a pump suction?",
                  "acceptedAnswer": { "@type": "Answer", "text": "Top Flat (FOT) installation prevents air pockets from forming before the fluid enters the pump, avoiding cavitation damage." }
                },
                {
                  "@type": "Question",
                  "name": "When should the reducer be installed Bottom Flat (FOB)?",
                  "acceptedAnswer": { "@type": "Answer", "text": "Bottom Flat installation is used on horizontal piperacks to maintain pipe support elevation and allow for complete drainage." }
                }
              ]
            }
          ]
        }
        </script>
    @endverbatim
@endsection
