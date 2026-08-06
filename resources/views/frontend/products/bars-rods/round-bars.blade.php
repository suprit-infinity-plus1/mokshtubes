@extends('layouts.master')
@section('title', 'Round Bars Manufacturer, Supplier & Exporter in India | SS, MS, Alloy Steel')
<!-- 89 characters -->
@section(
    'meta_description',
    'Buy Round Bars in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy, Titanium, Brass & Copper grades. Available in sizes 3mm to 500mm with weight chart and specifications.'
)
@section(
    'meta_keywords',
    'Round Bars, SS Round Bars, Stainless Steel Round Bars, MS Round Bars, Mild Steel Round Bars, Carbon Steel Round Bars, Alloy Steel Round Bars, Steel Round Bars, Bright Round Bars, Round Bar Manufacturer'
)
@section('og_title', 'Round Bars Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Buy Round Bars in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy, Titanium, Brass & Copper grades. Available in sizes 3mm to 500mm with weight chart and specifications.')
@section('og_image', asset('assets/images/product/Bars-&-Rods/round-bars.webp'))
@section('og_type', 'product')
@section('twitter_title', 'Round Bars Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Round Bars in Stainless Steel, Carbon Steel, Alloy Steel, and Aluminum grades with fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Bars-&-Rods/round-bars.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Round Bars Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Round Bars are among the most widely used metal products in engineering, construction, manufacturing, automotive, aerospace, marine, oil & gas, and industrial applications. Their circular cross-section provides excellent strength, machinability, and load-bearing capability, making them ideal for shafts, fasteners, machine components, structural supports, and precision-engineered parts. At Moksh Tubes & Fittings LLP, we supply premium-quality Round Bars in Stainless Steel, Carbon Steel, Alloy Steel, Duplex & Super Duplex Steel, Nickel Alloys, Titanium, Aluminium, Brass, Copper, and other specialty alloys. Manufactured according to ASTM, ASME, DIN, EN, and JIS standards, our round bars offer outstanding dimensional accuracy, superior surface finish, corrosion resistance, and long service life.
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
            <a href="#features">Advantages</a> |
            <a href="#applications">Applications</a> |
            <a href="#mechanical-properties">Mechanical Properties</a> |
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
                    <img src="{{ asset('assets/images/product/Bars-&-Rods/round-bars.webp') }}"
                        alt="Round Bars Manufacturer" class="img-fluid rounded shadow-sm" width="550" height="350"
                        loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong>Round Bars</strong> are solid cylindrical metal bars extensively used across numerous industries for fabrication, machining, forging, structural reinforcement, and manufacturing applications. Due to their uniform shape and excellent mechanical properties, round bars serve as the primary raw material for producing shafts, bolts, fasteners, gears, valves, pumps, bearings, machine parts, and engineering components.
                    </p>

                    <p class="fs-6 text-justify">
                        Whether used in high-temperature environments, corrosive conditions, marine applications, heavy engineering projects, or precision machining operations, round bars provide the strength and reliability required for demanding industrial applications.
                    </p>

                    <p class="fs-6 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> offers an extensive range of Stainless Steel Round Bars, Mild Steel Round Bars, Alloy Steel Round Bars, Duplex Round Bars, Inconel Round Bars, Monel Round Bars, Titanium Round Bars, Brass Round Bars, Copper Round Bars, and Aluminium Round Bars for domestic and international projects.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Round Bars Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with mechanical properties, sizes, and application
                guidelines. Enter your email below to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="round-bars-datasheet.pdf">
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
                                    <td>Round Bars</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy, Titanium, Aluminium, Brass &amp; Copper</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Diameter Range</td>
                                    <td>3 mm to 500 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Custom Diameter</td>
                                    <td>Up to 600 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>3m, 4m, 6m &amp; Custom Cut Lengths</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Hot Rolled, Cold Drawn, Forged, Bright Bars</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Bright, Polished, Peeled, Ground, Shot Blasted, Pickled &amp; Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A276, ASTM A479, ASTM A484, ASTM A582, EN 10060, DIN 671</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1, Mill Test Certificates</td>
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
                <h2 class="fw-bold" style="color: #174268;">Round Bar Weight Chart</h2>
            </div>
            <p class="text-center pb-3">
                Moksh Tubes supplies round bars from 3 mm to 500 mm diameter with custom diameters available upon request.
            </p>

            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Diameter (mm)</th>
                            <th>Cross Sectional Area (mm²)</th>
                            <th>Carbon Steel (kg/m)</th>
                            <th>SS 304 (kg/m)</th>
                            <th>SS 316 (kg/m)</th>
                            <th>Aluminium 6061 (kg/m)</th>
                            <th>Brass (kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>6</td><td>28.27</td><td>0.222</td><td>0.224</td><td>0.224</td><td>0.076</td><td>0.240</td></tr>
                        <tr class="t-row"><td>8</td><td>50.27</td><td>0.395</td><td>0.398</td><td>0.398</td><td>0.136</td><td>0.427</td></tr>
                        <tr class="t-row"><td>10</td><td>78.54</td><td>0.617</td><td>0.622</td><td>0.622</td><td>0.212</td><td>0.668</td></tr>
                        <tr class="t-row"><td>12</td><td>113.10</td><td>0.888</td><td>0.895</td><td>0.895</td><td>0.305</td><td>0.962</td></tr>
                        <tr class="t-row"><td>14</td><td>153.94</td><td>1.209</td><td>1.219</td><td>1.219</td><td>0.416</td><td>1.309</td></tr>
                        <tr class="t-row"><td>16</td><td>201.06</td><td>1.579</td><td>1.592</td><td>1.592</td><td>0.543</td><td>1.709</td></tr>
                        <tr class="t-row"><td>18</td><td>254.47</td><td>1.998</td><td>2.014</td><td>2.014</td><td>0.687</td><td>2.163</td></tr>
                        <tr class="t-row"><td>20</td><td>314.16</td><td>2.466</td><td>2.486</td><td>2.486</td><td>0.848</td><td>2.670</td></tr>
                        <tr class="t-row"><td>22</td><td>380.13</td><td>2.984</td><td>3.008</td><td>3.008</td><td>1.026</td><td>3.231</td></tr>
                        <tr class="t-row"><td>24</td><td>452.39</td><td>3.551</td><td>3.580</td><td>3.580</td><td>1.221</td><td>3.845</td></tr>
                        <tr class="t-row"><td>25</td><td>490.87</td><td>3.854</td><td>3.885</td><td>3.885</td><td>1.325</td><td>4.173</td></tr>
                        <tr class="t-row"><td>27</td><td>572.56</td><td>4.496</td><td>4.532</td><td>4.532</td><td>1.546</td><td>4.867</td></tr>
                        <tr class="t-row"><td>30</td><td>706.86</td><td>5.549</td><td>5.594</td><td>5.594</td><td>1.909</td><td>6.009</td></tr>
                        <tr class="t-row"><td>32</td><td>804.25</td><td>6.313</td><td>6.364</td><td>6.364</td><td>2.172</td><td>6.836</td></tr>
                        <tr class="t-row"><td>35</td><td>962.11</td><td>7.553</td><td>7.614</td><td>7.614</td><td>2.598</td><td>8.177</td></tr>
                        <tr class="t-row"><td>36</td><td>1,017.88</td><td>7.991</td><td>8.055</td><td>8.055</td><td>2.748</td><td>8.650</td></tr>
                        <tr class="t-row"><td>40</td><td>1,256.64</td><td>9.865</td><td>9.944</td><td>9.944</td><td>3.393</td><td>10.68</td></tr>
                        <tr class="t-row"><td>42</td><td>1,385.44</td><td>10.88</td><td>10.97</td><td>10.97</td><td>3.741</td><td>11.78</td></tr>
                        <tr class="t-row"><td>45</td><td>1,590.43</td><td>12.48</td><td>12.58</td><td>12.58</td><td>4.294</td><td>13.52</td></tr>
                        <tr class="t-row"><td>48</td><td>1,809.56</td><td>14.21</td><td>14.32</td><td>14.32</td><td>4.886</td><td>15.38</td></tr>
                        <tr class="t-row"><td>50</td><td>1,963.50</td><td>15.41</td><td>15.54</td><td>15.54</td><td>5.301</td><td>16.69</td></tr>
                        <tr class="t-row"><td>52</td><td>2,123.72</td><td>16.67</td><td>16.80</td><td>16.80</td><td>5.734</td><td>18.05</td></tr>
                        <tr class="t-row"><td>55</td><td>2,375.83</td><td>18.65</td><td>18.80</td><td>18.80</td><td>6.415</td><td>20.20</td></tr>
                        <tr class="t-row"><td>56</td><td>2,463.01</td><td>19.34</td><td>19.49</td><td>19.49</td><td>6.650</td><td>20.94</td></tr>
                        <tr class="t-row"><td>60</td><td>2,827.43</td><td>22.19</td><td>22.37</td><td>22.37</td><td>7.634</td><td>24.04</td></tr>
                        <tr class="t-row"><td>64</td><td>3,216.99</td><td>25.25</td><td>25.45</td><td>25.45</td><td>8.686</td><td>27.35</td></tr>
                        <tr class="t-row"><td>65</td><td>3,318.31</td><td>26.05</td><td>26.26</td><td>26.26</td><td>8.960</td><td>28.21</td></tr>
                        <tr class="t-row"><td>70</td><td>3,848.45</td><td>30.21</td><td>30.45</td><td>30.45</td><td>10.39</td><td>32.72</td></tr>
                        <tr class="t-row"><td>75</td><td>4,417.86</td><td>34.68</td><td>34.96</td><td>34.96</td><td>11.93</td><td>37.56</td></tr>
                        <tr class="t-row"><td>80</td><td>5,026.55</td><td>39.46</td><td>39.78</td><td>39.78</td><td>13.57</td><td>42.74</td></tr>
                        <tr class="t-row"><td>90</td><td>6,361.73</td><td>49.94</td><td>50.34</td><td>50.34</td><td>17.18</td><td>54.09</td></tr>
                        <tr class="t-row"><td>100</td><td>7,853.98</td><td>61.65</td><td>62.14</td><td>62.14</td><td>21.21</td><td>66.79</td></tr>
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
                            <p class="card-text small mb-0">304, 304L, 316, 316L, 310, 321, 347<br>Ideal for food processing, marine, and chemical industries.</p>
                        </div>
                    </div>
                </div>

                <!-- Carbon Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gear-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Carbon Steel</h5>
                            <p class="card-text small mb-0">ASTM A36, EN8, EN9, IS 2062<br>Suitable for construction and engineering applications.</p>
                        </div>
                    </div>
                </div>

                <!-- Alloy Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-nut mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Alloy Steel</h5>
                            <p class="card-text small mb-0">EN19, EN24, EN31, AISI 4140, AISI 4130<br>Designed for high-strength engineering applications.</p>
                        </div>
                    </div>
                </div>

                <!-- Duplex & Super Duplex -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gem mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Duplex &amp; Super Duplex</h5>
                            <p class="card-text small mb-0">Duplex 2205, S31803, S32750, S32760<br>Used in offshore, marine, and corrosive environments.</p>
                        </div>
                    </div>
                </div>

                <!-- Nickel Alloy -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-award-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Nickel Alloys</h5>
                            <p class="card-text small mb-0">Inconel 600/625/718, Alloy 601, Monel 400/K500, Waspaloy<br>Designed for extreme temperatures.</p>
                        </div>
                    </div>
                </div>

                <!-- Non-Ferrous -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-palette mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Titanium, Brass, Copper &amp; Aluminium</h5>
                            <p class="card-text small mb-0">Titanium Gr 2/5, C11000 Copper, C26000 Brass, Al 6061/6082/7075<br>For lightweight, decorative &amp; electrical purposes.</p>
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
                <h2 class="fw-bold" style="color: #174268;">Types of Round Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-fire"></i></div>
                        <h4>Hot Rolled Round Bars</h4>
                        <p class="small text-muted mt-2">Produced at elevated temperatures and commonly used in construction, fabrication, heavy engineering, and structural applications.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-snow2"></i></div>
                        <h4>Cold Drawn Round Bars</h4>
                        <p class="small text-muted mt-2">Offer tighter dimensional tolerances, improved surface finish, superior dimensional accuracy, and better machinability.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h4>Forged Round Bars</h4>
                        <p class="small text-muted mt-2">Manufactured through forging operations to improve grain structure, offering high impact resistance, superior fatigue strength, and excellent toughness.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-stars"></i></div>
                        <h4>Bright Round Bars</h4>
                        <p class="small text-muted mt-2">Precision-finished products used for decorative, architectural, and precision machining applications. Features an excellent surface finish and tight tolerances.</p>
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
                        <p class="small text-muted mt-2">Structural supports, reinforcement systems, tie rods, foundation applications.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h4>Marine &amp; Offshore</h4>
                        <p class="small text-muted mt-2">Marine shafts, offshore structures, propeller components, corrosion-resistant fittings.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-funnel"></i></div>
                        <h4>Oil &amp; Gas Industry</h4>
                        <p class="small text-muted mt-2">Valve components, pump shafts, pipeline equipment, refinery components.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-airplane"></i></div>
                        <h4>Automotive &amp; Aerospace</h4>
                        <p class="small text-muted mt-2">Axles, suspension components, landing gear components, structural aerospace parts.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide"></i></div>
                        <h4>Industrial Manufacturing</h4>
                        <p class="small text-muted mt-2">Machinery parts, fasteners, bearings, engineering equipment, machining stock.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-house"></i></div>
                        <h4>Decorative &amp; Architectural</h4>
                        <p class="small text-muted mt-2">Railings, furniture, interior design structures, decorative metalwork.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Features & Advantages --}}
    <section id="features" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Advantages of Round Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Excellent machinability</h4>
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
                        <div class="advantage-icon"><i class="bi bi-bounding-box"></i></div>
                        <h4>Superior dimensional accuracy</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h4>Available in numerous grades</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Corrosion-resistant options available</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Easy fabrication and welding</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h4>Long service life</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                        <h4>Suitable for critical engineering applications</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
                <p class="text-center">Actual values vary depending on material grade, diameter, and heat treatment condition.</p>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Material Grade</th>
                            <th>Tensile Strength (MPa)</th>
                            <th>Yield Strength (MPa)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>SS 304</td><td>515</td><td>205</td></tr>
                        <tr class="t-row"><td>SS 316</td><td>515</td><td>205</td></tr>
                        <tr class="t-row"><td>EN8</td><td>550</td><td>280</td></tr>
                        <tr class="t-row"><td>EN19</td><td>850</td><td>680</td></tr>
                        <tr class="t-row"><td>Duplex 2205</td><td>620</td><td>450</td></tr>
                        <tr class="t-row"><td>Inconel 625</td><td>827</td><td>414</td></tr>
                        <tr class="t-row"><td>Titanium Grade 2</td><td>345</td><td>275</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- why choose us --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes &amp; Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box-seam"></i></div>
                        <h4>Extensive stock availability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h4>Wide range of material grades</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h4>Competitive pricing</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>ISO-certified quality systems</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Worldwide export capability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-truck"></i></div>
                        <h4>Fast dispatch schedules</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-headset"></i></div>
                        <h4>Technical support</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-scissors"></i></div>
                        <h4>Custom cutting services</h4>
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
                                <h4>What are Round Bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Round Bars are solid cylindrical metal bars used for machining, fabrication, structural applications, and manufacturing components.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Round bars are available in stainless steel, carbon steel, alloy steel, duplex steel, nickel alloys, titanium, brass, copper, and aluminium.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What sizes are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Round bars are available from 3 mm to 500 mm diameter, with custom diameters available upon request.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the difference between hot rolled and cold drawn round bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Hot rolled bars are economical and suitable for structural applications, while cold drawn bars provide tighter tolerances and improved surface finish.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can round bars be supplied in custom lengths?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. We supply cut-to-length round bars according to customer specifications.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide Mill Test Certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. EN 10204 3.1 Mill Test Certificates and third-party inspection reports are available.</p>
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
                    Looking for premium-quality <strong>Round Bars</strong> for construction, engineering, machining, marine, or industrial projects? Contact <strong>Moksh Tubes &amp; Fittings LLP</strong> today for competitive pricing, technical assistance, and worldwide delivery.
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
                  "name": "Round Bars",
                  "image": "https://mokshtubes.com/assets/images/product/Bars-&-Rods/round-bars.webp",
                  "description": "Premium-quality Round Bars manufactured in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy, Titanium, Brass & Copper grades.",
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
                        "name": "What are Round Bars?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Round Bars are solid cylindrical metal bars used for machining, fabrication, structural applications, and manufacturing components."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "What materials are available?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Round bars are available in stainless steel, carbon steel, alloy steel, duplex steel, nickel alloys, titanium, brass, copper, and aluminium."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "What sizes are available?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Round bars are available from 3 mm to 500 mm diameter, with custom diameters available upon request."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "What is the difference between hot rolled and cold drawn round bars?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Hot rolled bars are economical and suitable for structural applications, while cold drawn bars provide tighter tolerances and improved surface finish."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Can round bars be supplied in custom lengths?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Yes. We supply cut-to-length round bars according to customer specifications."
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