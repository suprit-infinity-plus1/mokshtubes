@extends('layouts.master')

@section('title', 'Capillary Tubes Supplier UAE, Saudi | Precision Tubing Exporter')
@section('meta_description', 'Capillary tubes exporter to UAE, Saudi Arabia, Qatar & Oman. Precision micro tubes in stainless steel & alloys for medical, HVAC & industrial use.')
@section('meta_keywords', 'Capillary tubes, precision capillary tubing, stainless steel capillary tubes, medical capillary tubes, HVAC capillary tubes, capillary tubes exporter, micro tubing supplier')
@section('og_image', asset('assets/images/product/capillary-tubes.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/capillary-tubes.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Capillary Tubes Supplier for UAE, Saudi Arabia & GCC Countries</h1>
                    <!-- Short Introduction -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Capillary Tubes are ultra-precision tubes designed for applications where accuracy, controlled flow,
                        and micro-level performance are critical. At Moksh Tubes & Fittings LLP, we manufacture high-quality
                        capillary tubing in stainless steel, nickel alloys, titanium, and specialty metals—engineered to
                        meet ASTM, ASME, DIN, and EN standards. <br>
                        &bull; Ultra-small diameters (0.3 mm to 8 mm) &bull; Tight tolerances & smooth internal finish
                        &bull; Ideal for medical, instrumentation, HVAC & chemical industries
                        &bull; Available in straight lengths, coils, and custom-cut precision sizes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sticky Navigation -->
    <div class="sticky-top bg-white border-bottom material-tabs  w-100">
        <div class="container text-center">
            <ul class="nav justify-content-center py-2 nav-pills custom-nav-scroll">
                <li class=""><a class="" href="#overview">Overview</a></li>
                <li class=""><a class="" href="#specifications">Specifications</a></li>
                <li class=""><a class="" href="#types">Types</a></li>
                <li class=""><a class="" href="#size-chart">Size Chart</a></li>
                <li class=""><a class="" href="#grades">Grades</a></li>
                <li class=""><a class="" href="#applications">Applications</a></li>
                <li class=""><a class="" href="#industries">Industries</a></li>
                <li class=""><a class="" href="#manufacturing">Manufacturing</a></li>
                <li class=""><a class="" href="#export">Export</a></li>
                <li class=""><a class="" href="#quality">Quality</a></li>
                <li class=""><a class="" href="#faq">FAQ</a></li>
            </ul>
        </div>
    </div>

    <!-- Product Overview -->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction to Capillary Tubes
            </h2>

            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/capillary-tubes.webp') }}" alt="Capillary Tubes"
                        class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-3 text-justify" style="text-align: justify;">
                            When precision matters, <strong class="text-black">capillary tubes</strong> become critical
                            components. These tubes are specifically engineered for micro-flow control, high accuracy, and
                            reliable performance in demanding environments. From medical devices and chromatography systems
                            to HVAC and aerospace applications, capillary tubes ensure consistent performance where even
                            the smallest variation can impact results.
                        </p>

                        <ul class="fs-6 mb-4 list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Exceptional dimensional
                                accuracy</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Smooth internal bore for
                                consistent flow</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> High corrosion resistance
                                & long operational life</li>
                        </ul>

                        <p class="fs-6 mb-3 text-justify" style="text-align: justify;">
                            At <strong class="text-black">Moksh Tubes & Fittings LLP</strong>, we combine advanced cold
                            drawing, bright annealing, and precision polishing techniques to deliver capillary tubes in
                            <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.austenitic-stainless-Steel', ['country' => $country ?? 'india']) }}">stainless steel</a>,
                            <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.nickel-Based-Superalloys', ['country' => $country ?? 'india']) }}">nickel alloys</a>,
                            <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.titanium', ['country' => $country ?? 'india']) }}">titanium</a>, and specialty metals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Key Features</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-rulers fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold mb-3">Ultra-Precision Dimensions</h4>
                        <p class="text-muted">OD as small as 0.3 mm with exceptionally tight tolerances.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-water fs-1 text-info mb-3"></i>
                        <h4 class="fw-bold mb-3">Smooth Internal Surface</h4>
                        <p class="text-muted">Bright annealed & electro-polished bore for accurate, consistent flow control.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-thermometer-high fs-1 text-danger mb-3"></i>
                        <h4 class="fw-bold mb-3">High Temp & Corrosion Resistance</h4>
                        <p class="text-muted">Available in alloys engineered for extreme chemical and thermal environments.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-shield-shaded fs-1 text-success mb-3"></i>
                        <h4 class="fw-bold mb-3">Excellent Strength-to-Weight</h4>
                        <p class="text-muted">Superior strength in micro-form — ideal for compact critical systems.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-collection-fill fs-1 text-warning mb-3"></i>
                        <h4 class="fw-bold mb-3">Multiple Alloys & Finishes</h4>
                        <p class="text-muted">Stainless steel, Inconel, Monel, titanium, duplex & copper alloys available.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-sliders fs-1 text-secondary mb-3"></i>
                        <h4 class="fw-bold mb-3">Custom Sizes for Critical Applications</h4>
                        <p class="text-muted">Straight, coiled, and precision-cut options for your exact specifications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specifications -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="specifications">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive shadow-sm rounded">
                        <table class="table table-bordered table-striped align-middle mb-0 bg-white">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th width="30%">Category</th>
                                    <th width="70%">Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-start fs-6">
                                <tr>
                                    <td class="fw-bold">Material</td>
                                    <td>
                                        <a class="text-primary text-decoration-none" href="{{ route('materials.austenitic-stainless-Steel', ['country' => $country ?? 'india']) }}">Stainless Steel</a>,
                                        <a class="text-primary text-decoration-none" href="{{ route('materials.duplex-and-super-duplex', ['country' => $country ?? 'india']) }}">Duplex</a>,
                                        <a class="text-primary text-decoration-none" href="{{ route('materials.nickel-Based-Superalloys', ['country' => $country ?? 'india']) }}">Nickel Alloys</a>,
                                        <a class="text-primary text-decoration-none" href="{{ route('materials.titanium', ['country' => $country ?? 'india']) }}">Titanium</a>,
                                        Copper Alloys
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">OD Range</td>
                                    <td>0.3 mm to 8 mm</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Wall Thickness</td>
                                    <td>0.05 mm to 1.0 mm</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Length</td>
                                    <td>Up to 6 meters / Coil / Custom cut</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Forms</td>
                                    <td>Straight, Coiled, Precision Cut Pieces</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Finish</td>
                                    <td>Bright Annealed, Electro-Polished, Matte</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Standards</td>
                                    <td>ASTM A213, A269, B338, DIN, EN</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Types of Capillary Tubes -->
    <section id="types" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Types of Capillary Tubes</h2>
            </div>

            <div class="row g-4 justify-content-center pt-2">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-primary">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-primary"><i class="bi bi-dash-lg me-2"></i>Straight Capillary Tubes</h4>
                            <p class="card-text fs-6 mt-3">Used in instrumentation, lab equipment, and structural micro-components where accurate rigid tubing is required.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-success">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-success"><i class="bi bi-arrow-repeat me-2"></i>Coiled Capillary Tubes</h4>
                            <p class="card-text fs-6 mt-3">Ideal for compact systems like refrigeration and medical devices where space-saving flexibility is essential.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-warning">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-warning"><i class="bi bi-scissors me-2"></i>Precision Cut Capillaries</h4>
                            <p class="card-text fs-6 mt-3">Custom cut for high-accuracy applications like sensors, chromatography, and dosing systems.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Charts Section -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Charts</h2>
            </div>

            <div class="section-title center mb-4">
                <h4 class="fw-bold" style="color: #db7227;">Capillary Tubes – Weight & Nominal Bore Chart</h4>
            </div>
            <p class="text-center text-muted mb-4">Combined weight chart across standard schedules (Wall Thickness mm / Weight kg/m).</p>

            <!-- Combined NB Chart -->
            <div class="table-responsive mb-5">
                <table class="table table-bordered table-striped text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>NB (mm)</th>
                            <th>Inches</th>
                            <th>OD (mm)</th>
                            <th>Sch 5C Wt / kg/m</th>
                            <th>Sch 10C Wt / kg/m</th>
                            <th>Sch 40C Wt / kg/m</th>
                            <th>Sch 80C Wt / kg/m</th>
                            <th>Sch 160C Wt / kg/m</th>
                            <th>Sch XXC Wt / kg/m</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>3</td><td>1/8</td><td>10.3</td><td>0.2 / 0.01</td><td>0.3 / 0.02</td><td>0.4 / 0.03</td><td>0.6 / 0.04</td><td>0.8 / 0.06</td><td>1.0 / 0.07</td></tr>
                        <tr><td>6</td><td>1/4</td><td>13.7</td><td>0.2 / 0.02</td><td>0.3 / 0.03</td><td>0.4 / 0.04</td><td>0.6 / 0.06</td><td>0.8 / 0.08</td><td>1.0 / 0.10</td></tr>
                        <tr><td>10</td><td>3/8</td><td>17.1</td><td>0.2 / 0.03</td><td>0.3 / 0.04</td><td>0.4 / 0.06</td><td>0.6 / 0.08</td><td>0.8 / 0.11</td><td>1.0 / 0.14</td></tr>
                        <tr><td>15</td><td>1/2</td><td>21.3</td><td>0.2 / 0.04</td><td>0.3 / 0.06</td><td>0.4 / 0.08</td><td>0.6 / 0.12</td><td>0.8 / 0.16</td><td>1.0 / 0.20</td></tr>
                        <tr><td>20</td><td>3/4</td><td>26.7</td><td>0.2 / 0.06</td><td>0.3 / 0.09</td><td>0.4 / 0.12</td><td>0.6 / 0.17</td><td>0.8 / 0.22</td><td>1.0 / 0.28</td></tr>
                        <tr><td>25</td><td>1</td><td>33.4</td><td>0.2 / 0.08</td><td>0.3 / 0.12</td><td>0.4 / 0.17</td><td>0.6 / 0.25</td><td>0.8 / 0.33</td><td>1.0 / 0.41</td></tr>
                        <tr><td>32</td><td>1 1/4</td><td>42.2</td><td>0.2 / 0.13</td><td>0.3 / 0.19</td><td>0.4 / 0.26</td><td>0.6 / 0.38</td><td>0.8 / 0.50</td><td>1.0 / 0.62</td></tr>
                        <tr><td>40</td><td>1 1/2</td><td>48.3</td><td>0.2 / 0.16</td><td>0.3 / 0.24</td><td>0.4 / 0.32</td><td>0.6 / 0.48</td><td>0.8 / 0.63</td><td>1.0 / 0.78</td></tr>
                        <tr><td>50</td><td>2</td><td>60.3</td><td>0.2 / 0.24</td><td>0.3 / 0.36</td><td>0.4 / 0.47</td><td>0.6 / 0.70</td><td>0.8 / 0.93</td><td>1.0 / 1.17</td></tr>
                        <tr><td>65</td><td>2 1/2</td><td>73.0</td><td>0.2 / 0.33</td><td>0.3 / 0.49</td><td>0.4 / 0.65</td><td>0.6 / 0.97</td><td>0.8 / 1.29</td><td>1.0 / 1.63</td></tr>
                        <tr><td>80</td><td>3</td><td>88.9</td><td>0.2 / 0.47</td><td>0.3 / 0.70</td><td>0.4 / 0.93</td><td>0.6 / 1.40</td><td>0.8 / 1.87</td><td>1.0 / 2.36</td></tr>
                        <tr><td>100</td><td>4</td><td>114.3</td><td>0.2 / 0.77</td><td>0.3 / 1.14</td><td>0.4 / 1.52</td><td>0.6 / 2.27</td><td>0.8 / 3.04</td><td>1.0 / 3.82</td></tr>
                        <tr><td>150</td><td>6</td><td>168.3</td><td>0.2 / 1.63</td><td>0.3 / 2.41</td><td>0.4 / 3.23</td><td>0.6 / 4.79</td><td>0.8 / 6.38</td><td>1.0 / 8.02</td></tr>
                        <tr><td>200</td><td>8</td><td>219.1</td><td>0.2 / 2.73</td><td>0.3 / 4.03</td><td>0.4 / 5.40</td><td>0.6 / 8.01</td><td>0.8 / 10.65</td><td>1.0 / 13.33</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Detailed Schedule Accordions -->
            <div class="row justify-content-center pt-4">
                <div class="col-lg-10">
                    <h4 class="fw-bold mb-4 text-center" style="color: #174268;">
                        CAPILLARY TUBES – TECHNICAL SIZE & WEIGHT CHARTS
                    </h4>
                    <div class="accordion" id="accordionCapillaryCharts">

                        <!-- Schedule 5C -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5C">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5C" aria-expanded="true" aria-controls="collapse5C">
                                    Schedule 5CWT – Size & Weight Chart
                                </button>
                            </h2>
                            <div id="collapse5C" class="accordion-collapse collapse show" aria-labelledby="heading5C"
                                data-bs-parent="#accordionCapillaryCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>0.30</td><td>0.05</td><td>0.00028</td></tr>
                                                <tr><td>0.50</td><td>0.05</td><td>0.00045</td></tr>
                                                <tr><td>0.80</td><td>0.08</td><td>0.00080</td></tr>
                                                <tr><td>1.00</td><td>0.10</td><td>0.00140</td></tr>
                                                <tr><td>1.50</td><td>0.12</td><td>0.00250</td></tr>
                                                <tr><td>2.00</td><td>0.15</td><td>0.00370</td></tr>
                                                <tr><td>2.50</td><td>0.20</td><td>0.00620</td></tr>
                                                <tr><td>3.00</td><td>0.25</td><td>0.00970</td></tr>
                                                <tr><td>3.50</td><td>0.30</td><td>0.01380</td></tr>
                                                <tr><td>4.00</td><td>0.35</td><td>0.01890</td></tr>
                                                <tr><td>5.00</td><td>0.40</td><td>0.02700</td></tr>
                                                <tr><td>6.00</td><td>0.50</td><td>0.04150</td></tr>
                                                <tr><td>8.00</td><td>0.50</td><td>0.05500</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Schedule 10C -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10C">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse10C" aria-expanded="false" aria-controls="collapse10C">
                                    Schedule 10CWT – Size & Weight Chart <small class="ms-2 text-muted fw-normal">(Slightly thicker walls)</small>
                                </button>
                            </h2>
                            <div id="collapse10C" class="accordion-collapse collapse" aria-labelledby="heading10C"
                                data-bs-parent="#accordionCapillaryCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>0.30</td><td>0.06</td><td>0.00033</td></tr>
                                                <tr><td>0.50</td><td>0.08</td><td>0.00055</td></tr>
                                                <tr><td>0.80</td><td>0.10</td><td>0.00095</td></tr>
                                                <tr><td>1.00</td><td>0.12</td><td>0.00160</td></tr>
                                                <tr><td>1.50</td><td>0.15</td><td>0.00290</td></tr>
                                                <tr><td>2.00</td><td>0.20</td><td>0.00480</td></tr>
                                                <tr><td>2.50</td><td>0.25</td><td>0.00750</td></tr>
                                                <tr><td>3.00</td><td>0.30</td><td>0.01100</td></tr>
                                                <tr><td>3.50</td><td>0.35</td><td>0.01520</td></tr>
                                                <tr><td>4.00</td><td>0.40</td><td>0.02040</td></tr>
                                                <tr><td>5.00</td><td>0.50</td><td>0.03120</td></tr>
                                                <tr><td>6.00</td><td>0.60</td><td>0.04900</td></tr>
                                                <tr><td>8.00</td><td>0.60</td><td>0.06280</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Schedule 40C -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading40C">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse40C" aria-expanded="false" aria-controls="collapse40C">
                                    Schedule 40CWT – Size & Weight Chart <small class="ms-2 text-muted fw-normal">(Industrial duty – thicker wall)</small>
                                </button>
                            </h2>
                            <div id="collapse40C" class="accordion-collapse collapse" aria-labelledby="heading40C"
                                data-bs-parent="#accordionCapillaryCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>0.50</td><td>0.10</td><td>0.00065</td></tr>
                                                <tr><td>0.80</td><td>0.12</td><td>0.00110</td></tr>
                                                <tr><td>1.00</td><td>0.15</td><td>0.00200</td></tr>
                                                <tr><td>1.50</td><td>0.20</td><td>0.00390</td></tr>
                                                <tr><td>2.00</td><td>0.25</td><td>0.00610</td></tr>
                                                <tr><td>2.50</td><td>0.30</td><td>0.00950</td></tr>
                                                <tr><td>3.00</td><td>0.35</td><td>0.01370</td></tr>
                                                <tr><td>3.50</td><td>0.40</td><td>0.01880</td></tr>
                                                <tr><td>4.00</td><td>0.45</td><td>0.02450</td></tr>
                                                <tr><td>5.00</td><td>0.50</td><td>0.03340</td></tr>
                                                <tr><td>6.00</td><td>0.60</td><td>0.05350</td></tr>
                                                <tr><td>8.00</td><td>0.70</td><td>0.07900</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Schedule 80C -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading80C">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse80C" aria-expanded="false" aria-controls="collapse80C">
                                    Schedule 80CWT – Size & Weight Chart <small class="ms-2 text-muted fw-normal">(Heavy wall, pressure rated)</small>
                                </button>
                            </h2>
                            <div id="collapse80C" class="accordion-collapse collapse" aria-labelledby="heading80C"
                                data-bs-parent="#accordionCapillaryCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>0.50</td><td>0.12</td><td>0.00075</td></tr>
                                                <tr><td>0.80</td><td>0.15</td><td>0.00130</td></tr>
                                                <tr><td>1.00</td><td>0.20</td><td>0.00240</td></tr>
                                                <tr><td>1.50</td><td>0.25</td><td>0.00460</td></tr>
                                                <tr><td>2.00</td><td>0.30</td><td>0.00730</td></tr>
                                                <tr><td>2.50</td><td>0.35</td><td>0.01120</td></tr>
                                                <tr><td>3.00</td><td>0.40</td><td>0.01550</td></tr>
                                                <tr><td>3.50</td><td>0.50</td><td>0.02150</td></tr>
                                                <tr><td>4.00</td><td>0.60</td><td>0.03010</td></tr>
                                                <tr><td>5.00</td><td>0.70</td><td>0.04260</td></tr>
                                                <tr><td>6.00</td><td>0.80</td><td>0.06100</td></tr>
                                                <tr><td>8.00</td><td>1.00</td><td>0.09000</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Schedule 160C -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading160C">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse160C" aria-expanded="false" aria-controls="collapse160C">
                                    Schedule 160CWT – Size & Weight Chart <small class="ms-2 text-muted fw-normal">(Extra-heavy, industrial grade)</small>
                                </button>
                            </h2>
                            <div id="collapse160C" class="accordion-collapse collapse" aria-labelledby="heading160C"
                                data-bs-parent="#accordionCapillaryCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>0.80</td><td>0.20</td><td>0.00165</td></tr>
                                                <tr><td>1.00</td><td>0.25</td><td>0.00280</td></tr>
                                                <tr><td>1.50</td><td>0.30</td><td>0.00510</td></tr>
                                                <tr><td>2.00</td><td>0.35</td><td>0.00820</td></tr>
                                                <tr><td>2.50</td><td>0.40</td><td>0.01250</td></tr>
                                                <tr><td>3.00</td><td>0.50</td><td>0.01900</td></tr>
                                                <tr><td>3.50</td><td>0.60</td><td>0.02600</td></tr>
                                                <tr><td>4.00</td><td>0.70</td><td>0.03650</td></tr>
                                                <tr><td>5.00</td><td>0.80</td><td>0.05040</td></tr>
                                                <tr><td>6.00</td><td>0.90</td><td>0.07180</td></tr>
                                                <tr><td>8.00</td><td>1.20</td><td>0.12200</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Schedule XXC -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingXXC">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseXXC" aria-expanded="false" aria-controls="collapseXXC">
                                    Schedule XXCWT – Size & Weight Chart <small class="ms-2 text-muted fw-normal">(Ultra-heavy wall – extreme pressure service)</small>
                                </button>
                            </h2>
                            <div id="collapseXXC" class="accordion-collapse collapse" aria-labelledby="headingXXC"
                                data-bs-parent="#accordionCapillaryCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>0.80</td><td>0.25</td><td>0.00210</td></tr>
                                                <tr><td>1.00</td><td>0.30</td><td>0.00350</td></tr>
                                                <tr><td>1.50</td><td>0.40</td><td>0.00670</td></tr>
                                                <tr><td>2.00</td><td>0.50</td><td>0.01080</td></tr>
                                                <tr><td>2.50</td><td>0.60</td><td>0.01650</td></tr>
                                                <tr><td>3.00</td><td>0.70</td><td>0.02350</td></tr>
                                                <tr><td>3.50</td><td>0.80</td><td>0.03200</td></tr>
                                                <tr><td>4.00</td><td>1.00</td><td>0.04900</td></tr>
                                                <tr><td>5.00</td><td>1.20</td><td>0.07200</td></tr>
                                                <tr><td>6.00</td><td>1.50</td><td>0.11200</td></tr>
                                                <tr><td>8.00</td><td>2.00</td><td>0.18000</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Accordion -->
        </div>
    </section>

    <!-- Grades Available -->
    <section id="grades" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Grades Available</h2>
            </div>
            <p class="fs-6 text-center mb-4">We supply capillary tubes in a wide range of materials:</p>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• 304, 316, 316L, 321</li>
                            <li>• Medical & food grade applications</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Nickel Alloys</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Inconel 600, 625, 718</li>
                            <li>• High temperature & corrosion resistance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Monel Alloys</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Monel 400, K500</li>
                            <li>• Marine & chemical use</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-airplane"></i></div>
                        <h5>Titanium</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Grade 1, 2, 5</li>
                            <li>• Aerospace & medical applications</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box"></i></div>
                        <h5>Duplex / Super Duplex</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• 2205, S32750</li>
                            <li>• Offshore & subsea applications</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-snow"></i></div>
                        <h5>Copper Alloys</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Cu-Ni 70/30, 90/10</li>
                            <li>• HVAC & marine systems</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Applications -->
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Applications</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule-pill"></i></div>
                        <h5>Medical & Pharmaceutical</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Hypodermic needles</li>
                            <li>• Catheters & fluid delivery systems</li>
                            <li>• Laboratory & chromatography equipment</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-speedometer2"></i></div>
                        <h5>Instrumentation</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Pressure gauges</li>
                            <li>• Thermocouples</li>
                            <li>• Hydraulic & pneumatic lines</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-snow2"></i></div>
                        <h5>HVAC & Refrigeration</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Refrigerant flow control</li>
                            <li>• Expansion lines</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-flask"></i></div>
                        <h5>Chemical Processing</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Microfluidics</li>
                            <li>• Sampling & dosing systems</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-airplane-fill"></i></div>
                        <h5>Aerospace & Automotive</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Fuel lines & brake systems</li>
                            <li>• Lightweight fluid transport</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Served -->
    <section id="industries" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Industries Served</h2>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-9">
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Medical & Healthcare</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Aerospace & Defense</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Chemical & Petrochemical</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• HVAC & Refrigeration</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Automotive & Engineering</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Research & Laboratory</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manufacturing Process -->
    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center mb-4">
                <h2>Manufacturing Process</h2>
            </div>
            <p class="fs-6 text-center text-success fw-bold mb-4">Ensures consistent quality, tight tolerances, and defect-free tubing.</p>
            <div class="row g-4 mt-3">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-1-circle-fill"></i></div>
                        <h5>Cold Drawing for Accurate Dimensions</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-2-circle-fill"></i></div>
                        <h5>Bright Annealing for Surface Finish</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-3-circle-fill"></i></div>
                        <h5>Precision Polishing for Smooth Internal Bore</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-4-circle-fill"></i></div>
                        <h5>Straightening & Precision Cutting</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-5-circle-fill"></i></div>
                        <h5>Final Inspection & Testing</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Supply & Export Capability -->
    <section id="export" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Supply & Export Capability</h2>
            </div>
            <p class="fs-6 text-center text-muted mb-4">
                We are a trusted global supplier and exporter of capillary tubes, delivering to medical OEMs, oil & gas,
                instrumentation, and HVAC projects across GCC countries and global markets.
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 bg-white rounded shadow-sm border border-light h-100">
                        <h4 class="fw-bold text-primary mb-3"><i class="bi bi-globe me-2"></i>Export Countries</h4>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> UAE</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Saudi Arabia</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Qatar</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Oman</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Kuwait</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Europe & Southeast Asia</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 bg-white rounded shadow-sm border border-light h-100">
                        <h4 class="fw-bold text-primary mb-3"><i class="bi bi-box-seam me-2"></i>Export Services</h4>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Export-grade packaging</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> EN 10204 3.1 certification</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Complete technical documentation</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Fast shipping & logistics support</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Custom manufacturing capability</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages & Quality Control -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-title mb-4">
                        <h2>Advantages</h2>
                    </div>
                    <ul class="fs-6 list-unstyled">
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Micro-level accuracy for critical applications</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Smooth flow with minimal pressure drop</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> High durability even in harsh environments</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Compact and flexible design options</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Suitable for extreme temperature & chemical exposure</li>
                    </ul>
                </div>

                <div id="quality" class="col-lg-6">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4 border-primary h-100">
                        <h3 class="fw-bold mb-4" style="color: #174268;">Testing & Quality Control</h3>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Dimensional inspection</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Surface finish testing</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Hydrostatic testing</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Eddy current testing</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • PMI (Positive Material Identification)</li>
                        </ul>
                        <p class="fs-6 mt-4 fw-bold text-success"><i class="bi bi-patch-check-fill me-2"></i> Supplied with EN 10204 3.1 certification.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Material Selection Guide & Buying Guide -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-md-6">
                    <div class="p-4 bg-light rounded shadow-sm border-start border-4 border-info h-100">
                        <h3 class="fw-bold mb-4" style="color: #174268;">Material Selection Guide</h3>
                        <ul class="fs-6 list-unstyled">
                            <li class="mb-3 p-2 bg-white rounded border"><i class="bi bi-arrow-right text-info me-2"></i>
                                <strong>Medical use</strong> → Stainless Steel / Titanium</li>
                            <li class="mb-3 p-2 bg-white rounded border"><i class="bi bi-arrow-right text-info me-2"></i>
                                <strong>High Temperature</strong> → Inconel / Nickel Alloys</li>
                            <li class="mb-3 p-2 bg-white rounded border"><i class="bi bi-arrow-right text-info me-2"></i>
                                <strong>Marine</strong> → Monel / Cu-Ni</li>
                            <li class="mb-3 p-2 bg-white rounded border"><i class="bi bi-arrow-right text-info me-2"></i>
                                <strong>Precision Instrumentation</strong> → SS 316L</li>
                            <li class="mb-3 p-2 bg-white rounded border"><i class="bi bi-arrow-right text-info me-2"></i>
                                <strong>HVAC & Refrigeration</strong> → Cu-Ni / SS 304</li>
                        </ul>
                        <p class="fs-6 mt-3 fw-bold text-success small"><i class="bi bi-lightbulb-fill me-2"></i>
                            Choosing the right material ensures longer life and better performance.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 bg-light rounded shadow-sm border-start border-4 border-warning h-100">
                        <h3 class="fw-bold mb-4" style="color: #174268;">Buying Guide</h3>
                        <p class="fs-6 text-muted">Before selecting capillary tubes, consider:</p>
                        <ul class="fs-6 list-unstyled">
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Required OD & wall thickness</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Material compatibility with media</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Pressure & temperature conditions</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Surface finish requirements</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Application (medical / HVAC / chemical)</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Form (straight / coiled / cut pieces)</li>
                        </ul>
                        <p class="fs-6 mt-4 fw-bold p-2 bg-white rounded border">Our team helps you select the exact specification for your application.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Moksh Tubes -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP</h2>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Precision manufacturing expertise</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-collection-fill"></i></div>
                        <h5>Wide range of alloys & sizes</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam-fill"></i></div>
                        <h5>Ready stock + custom solutions</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                        <h5>Export to GCC, Europe & global markets</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h5>Strict quality control standards</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                        <h5>Technical support for critical applications</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products / Internal Linking -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="p-4 bg-light rounded shadow-sm border border-secondary">
                        <h4 class="fw-bold mb-4" style="color: #db7227;">Explore Related Products</h4>
                        <p class="fs-6 mb-3 text-muted">Explore our <a href="{{ route('products.pipes-tubes.seamless-pipes', ['country' => $country ?? 'india']) }}" class="text-primary fw-bold text-decoration-none">seamless pipes</a> for high-pressure and critical industrial applications.</p>
                        <p class="fs-6 mb-3 text-muted">We also supply <a href="{{ route('products.pipes-tubes.u-bent-tubes', ['country' => $country ?? 'india']) }}" class="text-primary fw-bold text-decoration-none">U-bent tubes</a> for heat exchanger and condenser applications.</p>
                        <p class="fs-6 mb-0 text-muted">Check our <a href="{{ route('products.pipes-tubes.boiler-heat-exchanger-tubes', ['country' => $country ?? 'india']) }}" class="text-primary fw-bold text-decoration-none">boiler & heat exchanger tubes</a> for GCC industrial projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ</h2>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are capillary tubes used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Capillary tubes are used in applications requiring precise fluid control such as medical devices (hypodermic needles, catheters), instrumentation (pressure gauges, thermocouples), HVAC refrigerant control, chromatography, and aerospace fuel lines.</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the size range available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>OD ranges from 0.3 mm to 8 mm with ultra-thin wall thickness options starting from 0.05 mm. We also offer custom OD and wall thickness combinations upon request.</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which materials are available for capillary tubes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We supply capillary tubes in stainless steel (304, 316, 316L, 321), nickel alloys (Inconel 600, 625, 718), Monel (400, K500), titanium (Grade 1, 2, 5), duplex/super duplex (2205, S32750), and copper alloys (Cu-Ni 70/30, 90/10).</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide custom sizes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we offer custom OD, wall thickness, and length combinations based on your application needs. Available forms include straight lengths, coiled tubing, and precision cut pieces.</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you export capillary tubes to UAE and Saudi Arabia?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we export capillary tubes to UAE, Saudi Arabia, Qatar, Oman, and Kuwait along with Europe and Southeast Asia. All supplies come with EN 10204 3.1 Mill Test Certificates and export-grade packaging.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Strong CTA -->
    <section id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Request a Quote for Capillary Tubes</h2>
                <p>
                    Looking for high-precision capillary tubes for critical applications?
                    Contact <strong>Moksh Tubes & Fittings LLP</strong> today. We offer fast delivery,
                    custom manufacturing, and export-ready supply. Get expert assistance for your exact requirement.
                </p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection

@section('jsscripts')
    <script type="application/ld+json">
        @verbatim
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Capillary Tubes",
                "description": "Precision capillary tubes supplier and exporter to UAE, Saudi Arabia, Qatar and Oman for medical, HVAC and industrial applications",
                "brand": {
                    "@type": "Brand",
                    "name": "Moksh Tubes & Fittings LLP"
                },
                "areaServed": ["UAE","Saudi Arabia","Qatar","Oman","Kuwait"]
            }
        @endverbatim
    </script>

    <script type="application/ld+json">
        @verbatim
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "What are capillary tubes used for?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "They are used in applications requiring precise fluid control such as medical devices, instrumentation, HVAC, chromatography, and aerospace fuel lines."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What is the size range available?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "OD ranges from 0.3 mm to 8 mm with ultra-thin wall thickness options starting from 0.05 mm."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Which materials are available for capillary tubes?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Stainless steel, nickel alloys (Inconel), Monel, titanium, duplex/super duplex, and copper alloys (Cu-Ni)."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Do you provide custom sizes?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, we offer custom OD, wall thickness, and length combinations in straight, coiled, or precision cut forms."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Do you export capillary tubes to UAE and Saudi Arabia?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, we export to UAE, Saudi Arabia, Qatar, Oman, and Kuwait with EN 10204 3.1 certification and export-grade packaging."
                        }
                    }
                ]
            }
        @endverbatim
    </script>
@endsection
