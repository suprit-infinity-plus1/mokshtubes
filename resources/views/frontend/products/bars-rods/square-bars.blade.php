@extends('layouts.master')
@section('title', 'Square Bars Manufacturer, Supplier & Exporter in India | SS, MS, Brass & Aluminium')
<!-- 87 characters -->
@section('meta_description', 'Buy Square Bars in Stainless Steel, MS, Carbon Steel, Alloy Steel, Duplex, Brass,
    Aluminium & Titanium grades. View size chart, weight chart, specifications and applications.')
@section('meta_keywords', 'Square Bars, Stainless Steel Square Bar, MS Square Bar, Mild Steel Square Bar, Carbon Steel
    Square Bar, Alloy Steel Square Bar, Aluminium Square Bar, Brass Square Bar, Steel Square Rod, MS Square Rod, Bright
    Square Bar, Hot Rolled Square Bar, Cold Drawn Square Bar, Forged Square Bar')
@section('og_title', 'Square Bars Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Buy Square Bars in Stainless Steel, MS, Carbon Steel, Alloy Steel, Duplex, Brass, Aluminium
    & Titanium grades. View size chart, weight chart, specifications and applications.')
@section('og_image', asset('assets/images/product/Bars-&-Rods/square-bars.webp'))
@section('og_type', 'product')
@section('twitter_title', 'Square Bars Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Square Bars in Stainless Steel, Carbon Steel, Alloy Steel, and
    Aluminum grades with fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Bars-&-Rods/square-bars.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Square Bars Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Square Bars are solid metal bars with a uniform square cross-section, widely used in construction,
                        engineering, fabrication, machining, marine, automotive, and architectural applications. Known for
                        their excellent strength, dimensional accuracy, and versatility, square bars are an essential raw
                        material for manufacturing structural components, machine parts, supports, frames, and decorative
                        products. At Moksh Tubes & Fittings LLP, we supply premium-quality Square Bars in Stainless Steel,
                        Carbon Steel, Alloy Steel, Duplex & Super Duplex Steel, Nickel Alloys, Titanium, Aluminium, Brass,
                        and Copper grades. Our square bars are manufactured according to ASTM, ASME, DIN, EN, and JIS
                        standards, ensuring exceptional quality, durability, and performance across demanding industrial
                        applications.
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
                    <img src="{{ asset('assets/images/product/Bars-&-Rods/square-bars.webp') }}"
                        alt="Square Bars Manufacturer" class="img-fluid rounded shadow-sm" width="550" height="350"
                        loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong>Square Bars</strong> are one of the most widely used metal products in fabrication and
                        engineering industries due to their balanced strength, easy machinability, and excellent structural
                        properties. Their equal-sided geometry provides superior load distribution, making them suitable for
                        both structural and precision engineering applications.
                    </p>

                    <p class="fs-6 text-justify">
                        These bars are extensively used for manufacturing machine components, support structures, brackets,
                        tools, frames, shafts, railings, gates, grills, and heavy-duty industrial equipment. Depending on
                        the application, square bars can be supplied in hot rolled, cold drawn, forged, bright, polished,
                        and precision-machined finishes.
                    </p>

                    <p class="fs-6 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> offers a comprehensive range of square
                        bars in various sizes, grades, and finishes, serving customers across India, the Middle East,
                        Europe, Southeast Asia, and other global markets.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Datasheet Download -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Square Bars Datasheet</h3>
            <p class="mb-3">
                Get the complete Square Bars datasheet with chemical composition,
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
                                    <td>Product</td>
                                    <td>Square Bars</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Materials</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex, Nickel Alloys,
                                        Titanium, Aluminium, Brass &amp; Copper</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>6 mm x 6 mm to 150 mm x 150 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Custom Sizes</td>
                                    <td>Up to 200 mm x 200 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>3m, 4m, 6m &amp; Cut-to-Length</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Hot Rolled, Cold Drawn, Forged, Bright &amp; Polished</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Bright, Polished, Mill Finish, Shot Blasted, Pickled &amp; Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A276, ASTM A484, ASTM B160, EN 10059, DIN 1014</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1, Mill Test Certificate</td>
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
                <h2 class="fw-bold" style="color: #174268;">Square Bar Size &amp; Weight Chart</h2>
            </div>
            <p class="text-center pb-3">
                Moksh Tubes supplies square bars in sizes ranging from 6 mm to 200 mm suitable for structural, machining,
                fabrication, and architectural applications.
            </p>

            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Size (mm)</th>
                            <th>Inches</th>
                            <th>Sectional Area (mm²)</th>
                            <th>Weight (kg/m)</th>
                            <th>Weight (lb/ft)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>6</td>
                            <td>1/4</td>
                            <td>36</td>
                            <td>0.283</td>
                            <td>0.190</td>
                        </tr>
                        <tr class="t-row">
                            <td>8</td>
                            <td>5/16</td>
                            <td>64</td>
                            <td>0.503</td>
                            <td>0.338</td>
                        </tr>
                        <tr class="t-row">
                            <td>10</td>
                            <td>3/8</td>
                            <td>100</td>
                            <td>0.785</td>
                            <td>0.527</td>
                        </tr>
                        <tr class="t-row">
                            <td>12</td>
                            <td>1/2</td>
                            <td>144</td>
                            <td>1.13</td>
                            <td>0.758</td>
                        </tr>
                        <tr class="t-row">
                            <td>16</td>
                            <td>5/8</td>
                            <td>256</td>
                            <td>2.01</td>
                            <td>1.35</td>
                        </tr>
                        <tr class="t-row">
                            <td>18</td>
                            <td>11/16</td>
                            <td>324</td>
                            <td>2.54</td>
                            <td>1.70</td>
                        </tr>
                        <tr class="t-row">
                            <td>20</td>
                            <td>3/4</td>
                            <td>400</td>
                            <td>3.14</td>
                            <td>2.11</td>
                        </tr>
                        <tr class="t-row">
                            <td>22</td>
                            <td>7/8</td>
                            <td>484</td>
                            <td>3.85</td>
                            <td>2.58</td>
                        </tr>
                        <tr class="t-row">
                            <td>25</td>
                            <td>1</td>
                            <td>625</td>
                            <td>4.91</td>
                            <td>3.30</td>
                        </tr>
                        <tr class="t-row">
                            <td>28</td>
                            <td>1-1/8</td>
                            <td>784</td>
                            <td>6.16</td>
                            <td>4.14</td>
                        </tr>
                        <tr class="t-row">
                            <td>30</td>
                            <td>1-3/16</td>
                            <td>900</td>
                            <td>7.07</td>
                            <td>4.75</td>
                        </tr>
                        <tr class="t-row">
                            <td>32</td>
                            <td>1-1/4</td>
                            <td>1024</td>
                            <td>8.04</td>
                            <td>5.40</td>
                        </tr>
                        <tr class="t-row">
                            <td>36</td>
                            <td>1-7/16</td>
                            <td>1296</td>
                            <td>10.18</td>
                            <td>6.83</td>
                        </tr>
                        <tr class="t-row">
                            <td>40</td>
                            <td>1-9/16</td>
                            <td>1600</td>
                            <td>12.56</td>
                            <td>8.43</td>
                        </tr>
                        <tr class="t-row">
                            <td>45</td>
                            <td>1-3/4</td>
                            <td>2025</td>
                            <td>15.90</td>
                            <td>10.67</td>
                        </tr>
                        <tr class="t-row">
                            <td>50</td>
                            <td>2</td>
                            <td>2500</td>
                            <td>19.63</td>
                            <td>13.19</td>
                        </tr>
                        <tr class="t-row">
                            <td>55</td>
                            <td>2-3/16</td>
                            <td>3025</td>
                            <td>23.77</td>
                            <td>15.98</td>
                        </tr>
                        <tr class="t-row">
                            <td>60</td>
                            <td>2-3/8</td>
                            <td>3600</td>
                            <td>28.26</td>
                            <td>18.99</td>
                        </tr>
                        <tr class="t-row">
                            <td>65</td>
                            <td>2-1/2</td>
                            <td>4225</td>
                            <td>33.13</td>
                            <td>22.25</td>
                        </tr>
                        <tr class="t-row">
                            <td>70</td>
                            <td>2-3/4</td>
                            <td>4900</td>
                            <td>38.48</td>
                            <td>25.82</td>
                        </tr>
                        <tr class="t-row">
                            <td>75</td>
                            <td>3</td>
                            <td>5625</td>
                            <td>44.18</td>
                            <td>29.68</td>
                        </tr>
                        <tr class="t-row">
                            <td>80</td>
                            <td>3-1/8</td>
                            <td>6400</td>
                            <td>50.24</td>
                            <td>33.71</td>
                        </tr>
                        <tr class="t-row">
                            <td>90</td>
                            <td>3-1/2</td>
                            <td>8100</td>
                            <td>63.62</td>
                            <td>42.76</td>
                        </tr>
                        <tr class="t-row">
                            <td>100</td>
                            <td>4</td>
                            <td>10000</td>
                            <td>78.50</td>
                            <td>52.73</td>
                        </tr>
                        <tr class="t-row">
                            <td>110</td>
                            <td>4-3/8</td>
                            <td>12100</td>
                            <td>95.00</td>
                            <td>63.90</td>
                        </tr>
                        <tr class="t-row">
                            <td>120</td>
                            <td>4-3/4</td>
                            <td>14400</td>
                            <td>113.10</td>
                            <td>76.00</td>
                        </tr>
                        <tr class="t-row">
                            <td>125</td>
                            <td>5</td>
                            <td>15625</td>
                            <td>122.72</td>
                            <td>82.43</td>
                        </tr>
                        <tr class="t-row">
                            <td>130</td>
                            <td>5-1/8</td>
                            <td>16900</td>
                            <td>132.70</td>
                            <td>89.10</td>
                        </tr>
                        <tr class="t-row">
                            <td>140</td>
                            <td>5-1/2</td>
                            <td>19600</td>
                            <td>153.70</td>
                            <td>103.30</td>
                        </tr>
                        <tr class="t-row">
                            <td>150</td>
                            <td>6</td>
                            <td>22500</td>
                            <td>176.71</td>
                            <td>118.70</td>
                        </tr>
                        <tr class="t-row">
                            <td>160</td>
                            <td>6-1/4</td>
                            <td>25600</td>
                            <td>201.10</td>
                            <td>135.00</td>
                        </tr>
                        <tr class="t-row">
                            <td>180</td>
                            <td>7-1/8</td>
                            <td>32400</td>
                            <td>254.50</td>
                            <td>170.90</td>
                        </tr>
                        <tr class="t-row">
                            <td>200</td>
                            <td>8</td>
                            <td>40000</td>
                            <td>314.00</td>
                            <td>211.00</td>
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
                <p class="text-center">We offer Square Bars in a wide variety of grades:</p>
            </div>

            <div class="row justify-content-center mb-5">
                <!-- Stainless Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-shield-check mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Stainless Steel</h5>
                            <p class="card-text small mb-0">304, 304L, 316, 316L, 310, 321, 347<br>For corrosion resistance
                                &amp; hygienic use.</p>
                        </div>
                    </div>
                </div>

                <!-- Carbon & MS -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gear-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Carbon Steel (MS)</h5>
                            <p class="card-text small mb-0">ASTM A36, EN8, EN9, IS2062<br>For general structural &amp;
                                engineering applications.</p>
                        </div>
                    </div>
                </div>

                <!-- Alloy Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-nut mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Alloy Steel</h5>
                            <p class="card-text small mb-0">EN19, EN24, EN31, 4140, 4130<br>For high-strength heavy-duty
                                parts.</p>
                        </div>
                    </div>
                </div>

                <!-- Duplex -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gem mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Duplex &amp; Super Duplex</h5>
                            <p class="card-text small mb-0">2205, S32750, S32760<br>For offshore, chemical &amp; marine
                                projects.</p>
                        </div>
                    </div>
                </div>

                <!-- High-Performance Alloys -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-award-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">High-Performance Alloys</h5>
                            <p class="card-text small mb-0">Inconel, Monel, Hastelloy, Titanium Grades 2 &amp; 5</p>
                        </div>
                    </div>
                </div>

                <!-- Non-Ferrous -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-palette mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Brass, Copper &amp; Aluminium</h5>
                            <p class="card-text small mb-0">C11000, C26000, 6061, 6082, 7075<br>For decorative, electrical
                                &amp; lightweight use.</p>
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
                <h2 class="fw-bold" style="color: #174268;">Types of Square Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-fire"></i></div>
                        <h4>Hot Rolled Square Bars</h4>
                        <p class="small text-muted mt-2">Manufactured at elevated temperatures and commonly used in
                            construction, fabrication, and structural applications where precise dimensional tolerances are
                            not critical.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-snow2"></i></div>
                        <h4>Cold Drawn Square Bars</h4>
                        <p class="small text-muted mt-2">Offer tighter dimensional tolerances, improved machinability,
                            enhanced mechanical properties, and superior surface finish compared to hot rolled bars.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h4>Forged Square Bars</h4>
                        <p class="small text-muted mt-2">Manufactured using forging processes that improve grain structure,
                            offering superior toughness, high load-bearing capability, and excellent fatigue resistance.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-stars"></i></div>
                        <h4>Bright &amp; Polished Square Bars</h4>
                        <p class="small text-muted mt-2">Precision-finished products designed for excellent appearance,
                            smooth surface finish, corrosion resistance, and decorative architectural applications.</p>
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

    {{-- Features & Advantages --}}
    <section id="features" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Advantages of Square Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-building"></i></div>
                        <h4>Excellent structural strength</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-bounding-box-circles"></i></div>
                        <h4>Uniform shape and dimensions</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Easy machining and fabrication</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-bricks"></i></div>
                        <h4>Superior load-bearing capability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-ui-checks-grid"></i></div>
                        <h4>Wide range of grades available</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-palette"></i></div>
                        <h4>Available in multiple finishes</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Excellent corrosion resistance options</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-house-door"></i></div>
                        <h4>Suitable for industrial and decorative applications</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h4>Long service life</h4>
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
                        <p class="small text-muted mt-2">Building frameworks, reinforcement structures, gates, grills, and
                            support systems.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h4>Marine &amp; Offshore</h4>
                        <p class="small text-muted mt-2">Offshore platforms, marine fittings, shipbuilding components, and
                            corrosion-resistant structures.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Oil &amp; Gas Industry</h4>
                        <p class="small text-muted mt-2">Pump components, valve bodies, structural supports, and refinery
                            equipment.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-airplane"></i></div>
                        <h4>Automotive &amp; Aerospace</h4>
                        <p class="small text-muted mt-2">Chassis components, tooling systems, aircraft structures, and
                            precision machined parts.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-nut"></i></div>
                        <h4>Industrial Manufacturing</h4>
                        <p class="small text-muted mt-2">Machine components, jigs and fixtures, fabrication assemblies, and
                            heavy engineering equipment.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-house"></i></div>
                        <h4>Decorative &amp; Architectural</h4>
                        <p class="small text-muted mt-2">Interior design elements, railings, furniture manufacturing, and
                            signage structures.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
                <p class="text-center">The table below represents typical mechanical properties for commonly supplied
                    Square Bars.</p>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Material</th>
                            <th>Tensile Strength (MPa)</th>
                            <th>Yield Strength (MPa)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>SS 304</td>
                            <td>515</td>
                            <td>205</td>
                        </tr>
                        <tr class="t-row">
                            <td>SS 316</td>
                            <td>515</td>
                            <td>205</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN8</td>
                            <td>550</td>
                            <td>280</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN19</td>
                            <td>850</td>
                            <td>680</td>
                        </tr>
                        <tr class="t-row">
                            <td>Duplex 2205</td>
                            <td>620</td>
                            <td>450</td>
                        </tr>
                        <tr class="t-row">
                            <td>Inconel 625</td>
                            <td>827</td>
                            <td>414</td>
                        </tr>
                        <tr class="t-row">
                            <td>Titanium Grade 2</td>
                            <td>345</td>
                            <td>275</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-2 text-muted text-center"><small><strong>Note:</strong> Actual values vary according to grade and
                    heat treatment condition.</small></p>
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
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h4>Wide range of material grades</h4>
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
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h4>Competitive pricing</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Worldwide exports</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-briefcase"></i></div>
                        <h4>Project-based supply capability</h4>
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
                        <div class="advantage-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h4>Technical support and documentation</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-scissors"></i></div>
                        <h4>Custom cutting and finishing services</h4>
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
                            <h2 class="fw-bold" style="color: #174268;">Frequently Asked Questions – Square Bars</h2>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are Square Bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Square Bars are solid metal bars with equal dimensions on all four sides. They are commonly used in construction, fabrication, machining, and engineering applications.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What sizes are available for Square Bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Square Bars are available in sizes ranging from 6 mm × 6 mm to 200 mm × 200 mm, depending on the material and project requirements.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are available for Square Bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Square Bars are available in stainless steel, carbon steel, alloy steel, duplex steel, nickel alloys, titanium, brass, copper, and aluminium.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the difference between hot rolled and cold drawn Square Bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Hot rolled Square Bars are economical and suitable for structural and general fabrication applications, while cold drawn Square Bars provide tighter dimensional tolerances and a smoother surface finish.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can Square Bars be supplied in custom lengths with Mill Test Certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. Square Bars can be supplied in custom cut-to-length sizes according to project requirements. EN 10204 3.1 Mill Test Certificates and third-party inspection reports can also be provided.</p>
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
                <h2>Request A Quote</h2>
                <p>
                    Looking for premium-quality <strong>Square Bars</strong> for construction, fabrication, machining,
                    marine, or industrial projects? Contact <strong>Moksh Tubes &amp; Fittings LLP</strong> today for
                    competitive pricing, technical assistance, and worldwide delivery.
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
                  "name": "Square Bars",
                  "image": "https://mokshtubes.com/assets/images/product/Bars-&-Rods/square-bars.webp",
                  "description": "Premium-quality Square Bars manufactured in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Brass, Aluminium & Titanium grades.",
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
                        "name": "What are Square Bars?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Square Bars are solid metal bars with equal dimensions on all four sides used in construction, fabrication, machining, and engineering applications."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "What sizes are available?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Square bars are available from 6 mm x 6 mm up to 200 mm x 200 mm depending on material and project requirements."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "What materials are used for square bars?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Square bars are available in stainless steel, carbon steel, alloy steel, duplex steel, nickel alloys, titanium, brass, copper, and aluminium."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "What is the difference between hot rolled and cold drawn square bars?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Hot rolled bars are economical and suitable for structural applications, while cold drawn bars offer tighter tolerances and improved surface finish."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Can square bars be supplied in custom lengths?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Yes. We provide cut-to-length square bars according to project specifications."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Do you provide Mill Test Certificates?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Yes. EN 10204 3.1 Mill Test Certificates and third-party inspection reports are available."
                        }
                      }
                    ]
                  }
                }
                </script>
    @endverbatim
@endsection
