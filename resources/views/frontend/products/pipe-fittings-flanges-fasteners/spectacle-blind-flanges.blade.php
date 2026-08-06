@extends('layouts.master')
@section('title', 'Spectacle Blind Flanges Manufacturer, Supplier & Exporter in India | Moksh Tubes')
<!-- 79 characters -->
@section(
    'meta_description',
    'Moksh Tubes & Fittings LLP is a leading manufacturer, supplier & exporter of Spectacle Blind Flanges in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex, Nickel Alloys & Titanium. ASME B16.48 certified with worldwide delivery.'
)
@section(
    'meta_keywords',
    'Spectacle Blind Flanges, Spectacle Blind Flanges Manufacturer, Spectacle Blind Flanges Supplier, Spectacle Blind Flanges Exporter, Stainless Steel Spectacle Blind Flanges, Carbon Steel Spectacle Blind Flanges, Alloy Steel Spectacle Blind Flanges, Duplex Spectacle Blind Flanges, Super Duplex Spectacle Blind Flanges, Figure 8 Blind Flanges, ASME B16.48 Spectacle Blind Flanges, Pipeline Isolation Flanges, Forged Spectacle Blind Flanges, RF Spectacle Blind Flanges, RTJ Spectacle Blind Flanges, Industrial Spectacle Blind Flanges, Figure 8 Blind, Pipeline Isolation Device, Forged Pipe Flanges, Industrial Pipe Flanges, Corrosion Resistant Flanges, High Pressure Flanges, Raised Face Flanges, Ring Type Joint Flanges, Oil & Gas Pipe Flanges, Petrochemical Flanges, Process Piping Components, ASME B16.48 Blind Flanges'
)
@section('og_title', 'Spectacle Blind Flanges Manufacturer, Supplier & Exporter | Moksh Tubes')
@section('og_description', 'Premium-quality Spectacle Blind Flanges manufactured in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex, Nickel Alloys & Titanium. ASME B16.48 certified with worldwide export support.')
@section('og_image', asset('assets/images/fasteners/blind-flanges_11zon.jpg'))
@section('og_type', 'product')
@section('twitter_title', 'Spectacle Blind Flanges Manufacturer in India')
@section('twitter_description', 'Buy premium-quality Spectacle Blind Flanges (Figure 8 Blinds) for safe pipeline isolation. Available in RF, RTJ & FF facing types with fast worldwide delivery.')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/fasteners/blind-flanges_11zon.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Spectacle Blind Flanges Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Spectacle Blind Flanges are specialized pipeline isolation devices consisting of a solid blind and an open spacer connected by a metal bridge, resembling a pair of spectacles. They allow operators to easily switch between blocking and allowing flow, making them ideal for maintenance, inspection, and safety-critical piping systems. At Moksh Tubes & Fittings LLP, we manufacture, supply, and export premium-quality Spectacle Blind Flanges in stainless steel, carbon steel, alloy steel, duplex, super duplex, nickel alloys, and titanium grades. Manufactured to international standards, our spectacle blinds provide exceptional strength, corrosion resistance, and reliable performance in demanding industrial environments.
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
            <a href="#grades">Grades & Equivalent</a> |
            <a href="#features">Features & Advantages</a> |
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
                    <img src="{{ asset('assets/images/fasteners/blind-flanges_11zon.jpg') }}"
                        alt="Spectacle Blind Flanges Manufacturer" class="img-fluid rounded shadow-sm" width="550" height="350"
                        loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        A <strong>Spectacle Blind Flange</strong> is a pipeline isolation fitting used to safely stop or restore the flow of fluids in piping systems. It consists of two discs joined by a metal section—one solid disc (blind) that completely blocks the pipeline and one open ring (spacer) that allows unrestricted flow. By rotating the fitting, operators can quickly change the pipeline from an open to a closed position.
                    </p>

                    <p class="fs-6 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we manufacture precision-engineered Spectacle Blind Flanges using high-quality forged materials and advanced CNC machining technology. Designed to withstand high pressure, high temperature, and corrosive environments, our spectacle blinds are widely used in critical industrial piping systems where safe isolation is essential.
                    </p>

                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Spectacle Blind Flanges Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with chemical composition, mechanical properties, dimensions, and application
                guidelines. Enter your email below to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="spectacle-blind-flanges-datasheet.pdf">
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
                                    <td>Spectacle Blind Flange</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASME B16.48, ASME B16.5, API, DIN, EN</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex, Nickel Alloys &amp; Titanium</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>½" NB to 60" NB</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pressure Class</td>
                                    <td>Class 150, 300, 600, 900, 1500 &amp; 2500</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Facing Type</td>
                                    <td>Raised Face (RF), Ring Type Joint (RTJ) &amp; Flat Face (FF)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Spectacle Blind / Figure-8 Blind</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Machined, Pickled, Polished or Anti-Rust Coated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Forged &amp; CNC Machined</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="chemical-composition" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Chemical Composition</h2>
            </div>
            <p class="text-center pb-3">
                The chemical composition of <strong>Spectacle Blind Flanges</strong> depends on the selected material grade. At Moksh Tubes &amp; Fittings LLP, our spectacle blind flanges are manufactured using premium-quality raw materials that comply with ASTM, ASME, API, EN, DIN, and JIS standards, ensuring excellent corrosion resistance, mechanical strength, and long service life.
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
            <p class="mt-2 text-muted text-center"><small><strong>Note:</strong> Chemical composition varies depending on the selected material grade. Carbon Steel, Alloy Steel, Duplex, Super Duplex, Nickel Alloy, and Titanium Spectacle Blind Flanges are manufactured in accordance with the relevant ASTM and ASME material specifications.</small></p>
        </div>
    </section> -->

    <!-- charts -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Size &amp; Weight Chart</h2>
            </div>
            <p class="text-center pb-3">
                Spectacle Blind Flanges are manufactured in accordance with <strong>ASME B16.48</strong> and are available in a wide range of nominal pipe sizes, pressure classes, and facing types.
            </p>

            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Pipe Size (NB)</th>
                            <th>Pressure Class</th>
                            <th>Outside Diameter (mm)</th>
                            <th>Thickness (mm)</th>
                            <th>Approx. Weight (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>½"</td><td>150</td><td>90</td><td>12</td><td>0.80</td></tr>
                        <tr class="t-row"><td>¾"</td><td>150</td><td>100</td><td>14</td><td>1.00</td></tr>
                        <tr class="t-row"><td>1"</td><td>150</td><td>108</td><td>16</td><td>1.40</td></tr>
                        <tr class="t-row"><td>1½"</td><td>150</td><td>127</td><td>18</td><td>2.20</td></tr>
                        <tr class="t-row"><td>2"</td><td>150</td><td>152</td><td>20</td><td>3.40</td></tr>
                        <tr class="t-row"><td>3"</td><td>150</td><td>191</td><td>24</td><td>6.20</td></tr>
                        <tr class="t-row"><td>4"</td><td>150</td><td>229</td><td>26</td><td>9.50</td></tr>
                        <tr class="t-row"><td>6"</td><td>150</td><td>279</td><td>30</td><td>16.80</td></tr>
                        <tr class="t-row"><td>8"</td><td>150</td><td>343</td><td>34</td><td>27.50</td></tr>
                        <tr class="t-row"><td>10"</td><td>150</td><td>406</td><td>38</td><td>41.80</td></tr>
                        <tr class="t-row"><td>12"</td><td>150</td><td>483</td><td>42</td><td>60.50</td></tr>
                        <tr class="t-row"><td>16"</td><td>150</td><td>597</td><td>48</td><td>101.80</td></tr>
                        <tr class="t-row"><td>20"</td><td>150</td><td>711</td><td>54</td><td>165.40</td></tr>
                        <tr class="t-row"><td>24"</td><td>150</td><td>813</td><td>60</td><td>245.00</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted"><strong>Note:</strong> Dimensions and weights are approximate and may vary depending on the pressure class (Class 150–2500), facing type (RF, RTJ, FF), material grade, and ASME B16.48 requirements. Custom sizes and pressure ratings are available upon request.</p>
        </div>
    </section>

    {{-- Material Pages --}}
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
    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Grades &amp; Equivalent</h2>
            </div>

            <div class="row justify-content-center mb-5">
                <!-- Stainless Steel Grades -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-shield-check mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Stainless Steel Grades</h5>
                            <p class="card-text small mb-0">304 / 304L, 316 / 316L</p>
                        </div>
                    </div>
                </div>

                <!-- Carbon & Alloy Steel -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gear-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Carbon &amp; Alloy Steel</h5>
                            <p class="card-text small mb-0">Carbon Steel ASTM A105, LF2<br>Alloy Steel ASTM A182 F11/F22/F91</p>
                        </div>
                    </div>
                </div>

                <!-- Duplex & Super Duplex -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-gem mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">Duplex &amp; Super Duplex</h5>
                            <p class="card-text small mb-0">UNS S31803 / S32205<br>UNS S32750 / S32760</p>
                        </div>
                    </div>
                </div>

                <!-- High-Performance Alloys -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center shadow-sm grade-card">
                        <div class="card-body py-4">
                            <i class="bi bi-award-fill mb-3 d-block card-icon" style="font-size: 2rem;"></i>
                            <h5 class="card-title" style="font-weight: 600;">High-Performance Alloys</h5>
                            <p class="card-text small mb-0">Inconel&reg;, Monel&reg;, Hastelloy&reg;, Titanium Grade 2</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title center mb-4">
                        <h2 class="fw-bold" style="color: #174268;">International Equivalents</h2>
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
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>ASTM</strong></td>
                                    <td style="padding-left: 20px;">ASTM A182, ASTM A105, ASTM A350</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>ASME</strong></td>
                                    <td style="padding-left: 20px;">ASME B16.48, ASME B16.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>API</strong></td>
                                    <td style="padding-left: 20px;">API 6A (where applicable)</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>EN</strong></td>
                                    <td style="padding-left: 20px;">EN 1092-1</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>DIN</strong></td>
                                    <td style="padding-left: 20px;">DIN Standards</td>
                                </tr>
                                <tr class="t-row">
                                    <td style="padding-left: 20px;"><strong>JIS</strong></td>
                                    <td style="padding-left: 20px;">JIS B2220</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Applications --}}
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Applications</h2>
                <p class="text-center pb-3">Spectacle Blind Flanges are widely used in:</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Oil &amp; Gas Pipelines</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building"></i></div>
                        <h4>Petrochemical Plants</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-airplane"></i></div>
                        <h4>Chemical Processing Industries</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h4>Refineries</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-plug"></i></div>
                        <h4>Power Generation Plants</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-fire"></i></div>
                        <h4>LNG &amp; Natural Gas Facilities</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cpu"></i></div>
                        <h4>Offshore &amp; Marine Applications</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h4>Water &amp; Wastewater Treatment</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Industrial Process Piping</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-heptagon"></i></div>
                        <h4>Pressure Vessels</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cone-striped"></i></div>
                        <h4>Construction &amp; Infrastructure</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features & Advantages --}}
    <section id="features" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Features &amp; Advantages</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Safe and reliable pipeline isolation</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrow-left-right"></i></div>
                        <h4>Easy switching between open and closed flow</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-wrench"></i></div>
                        <h4>Ideal for maintenance and inspection work</h4>
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
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h4>High mechanical strength and durability</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h4>Suitable for high-pressure and high-temperature applications</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bullseye"></i></div>
                        <h4>Precision-machined sealing surfaces</h4>
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

    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
                <p class="text-center">The mechanical properties of <strong>Spectacle Blind Flanges</strong> depend on the selected material grade and comply with applicable ASTM and ASME standards. The table below represents the typical mechanical properties for commonly supplied stainless steel grades.</p>
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
            <p class="mt-2 text-muted text-center"><small><strong>Note:</strong> Mechanical properties for Carbon Steel, Alloy Steel, Duplex, Super Duplex, Nickel Alloy, and Titanium Spectacle Blind Flanges are available in accordance with their respective ASTM/ASME material specifications upon request.</small></p>
        </div>
    </section>

    {{-- why choose us --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes &amp; Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-award-fill"></i></div>
                        <h4>Leading Manufacturer, Supplier &amp; Exporter</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-nut"></i></div>
                        <h4>Premium Quality Forged Pipeline Isolation Products</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-diagram-3"></i></div>
                        <h4>Wide Range of Sizes, Pressure Classes &amp; Material Grades</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box-seam"></i></div>
                        <h4>Ready Stock for Immediate Dispatch</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h4>Competitive Pricing</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Strict Quality Assurance</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Global Export Experience</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h4>Complete Documentation Support</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Expert Technical Assistance</h4>
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
                                <h4>What is a Spectacle Blind Flange?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A Spectacle Blind Flange is a pipeline isolation device consisting of a solid blind and an open spacer connected together, allowing pipelines to be easily opened or closed for maintenance and operational safety.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where are Spectacle Blind Flanges used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>They are commonly used in oil &amp; gas, petrochemical, refineries, power plants, LNG facilities, offshore platforms, and other industrial piping systems requiring safe pipeline isolation.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We manufacture Spectacle Blind Flanges in stainless steel, carbon steel, alloy steel, duplex, super duplex, nickel alloys, and titanium grades.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide material test certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. EN 10204 3.1 Material Test Certificates are supplied with every order.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can you manufacture custom sizes and pressure classes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. We manufacture Spectacle Blind Flanges in standard and customized sizes, pressure classes, and material grades according to customer specifications.</p>
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
                    Looking for a trusted <strong>Spectacle Blind Flanges</strong> manufacturer and supplier? Contact
                    <strong>Moksh Tubes &amp; Fittings LLP</strong> for premium-quality pipeline isolation flanges, competitive
                    pricing, ready stock, technical support, and fast worldwide delivery. Request your free quotation today.
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
                  "name": "Spectacle Blind Flanges",
                  "image": "https://mokshtubes.com/assets/images/fasteners/blind-flanges_11zon.jpg",
                  "description": "Premium-quality Spectacle Blind Flanges manufactured in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex, Nickel Alloys & Titanium. ASME B16.48 certified.",
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
                        "name": "What is a Spectacle Blind Flange?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "A Spectacle Blind Flange is a pipeline isolation device consisting of a solid blind and an open spacer connected together, allowing pipelines to be easily opened or closed for maintenance and operational safety."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Where are Spectacle Blind Flanges used?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "They are commonly used in oil & gas, petrochemical, refineries, power plants, LNG facilities, offshore platforms, and other industrial piping systems requiring safe pipeline isolation."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Which materials are available?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "We manufacture Spectacle Blind Flanges in stainless steel, carbon steel, alloy steel, duplex, super duplex, nickel alloys, and titanium grades."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Do you provide material test certificates?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Yes. EN 10204 3.1 Material Test Certificates are supplied with every order."
                        }
                      },
                      {
                        "@type": "Question",
                        "name": "Can you manufacture custom sizes and pressure classes?",
                        "acceptedAnswer": {
                          "@type": "Answer",
                          "text": "Yes. We manufacture Spectacle Blind Flanges in standard and customized sizes, pressure classes, and material grades according to customer specifications."
                        }
                      }
                    ]
                  }
                }
                </script>
    @endverbatim
@endsection