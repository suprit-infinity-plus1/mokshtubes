@extends('layouts.master')

@section('title', '410 Stainless Steel | Premium Alloy for Industries')
@section('meta_description',
    'High-quality 410 Stainless Steel with good corrosion resistance, high strength & wear
    resistance — ideal for engineering, automotive & industrial uses.')
@section('meta_keywords',
    '410 stainless steel, AISI 410, UNS S41000, martensitic stainless steel, corrosion-resistant
    stainless steel, high-strength stainless steel, wear-resistant stainless steel, stainless steel sheets, stainless steel
    plates, stainless steel bars, stainless steel rods, industrial applications stainless steel')
@section('og_image', asset('assets/images/high-strength-stainless-steel/Stainless-Steel-410.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/high-strength-stainless-steel/Stainless-Steel-410.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Stainless Steel 410 <br> S41000 Martensitic Stainless Steel</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="sticky-top bg-white border-bottom material-tabs  w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#composition">Chemical Composition</a> |
            <a href="#heat-treatment">Heat Treatment</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#price">Advantages</a> |
            <a href="#applications">Applications</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact-us">Contact Us</a>
        </div>
    </div>

    <!--End breadcrumb area-->
    <section  id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction to Stainless Steel 410 / AISI 410 / UNS S41000
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/high-strength-stainless-steel/Stainless-Steel-410.webp') }}"
                        alt="Stainless Steel 410" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a> is a leading supplier, exporter,
                            importer, and stockist of Stainless Steel 410 products, including pipes, tubes, sheets, plates,
                            coils, bars, fittings, flanges, fasteners, wire mesh, and custom-engineered components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Stainless Steel 410 is a martensitic stainless steel containing 11.5–13.5% chromium, designed
                            for applications requiring good strength, moderate corrosion resistance, and excellent
                            hardenability. Unlike ferritic or austenitic grades, 410 can be heat treated to achieve high
                            mechanical strength and hardness, making it ideal for cutlery, valves, pump shafts, surgical
                            instruments, and turbine parts.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            It offers good resistance to atmospheric corrosion, mild chemical environments, and water, but
                            is less resistant to more aggressive conditions compared to 304 or 316. However, its strength,
                            machinability, and cost-effectiveness make it a widely used grade across multiple industries.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download High Strength Stainless Steel 410 Datasheet</h3>
            <p class="mb-3">
                Get the complete High Strength Stainless Steel 410 datasheet with chemical composition,
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
    <!-- End Datasheet -->

    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Material Summary – SS 410 / UNS S41000</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Material Type</td>
                                    <td>Martensitic Stainless Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS Designation</td>
                                    <td>S41000</td>
                                </tr>
                                <tr class="t-row">
                                    <td>AISI</td>
                                    <td>410</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium Content</td>
                                    <td>11.5 – 13.5 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Level</td>
                                    <td>Low–Medium</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatable</td>
                                    <td>✔ Yes</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Maximum Hardness</td>
                                    <td>~45 HRC</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Moderate</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Property</td>
                                    <td>Magnetic</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Density</td>
                                    <td>~7.75 g/cm³</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            👉 The chromium content gives SS 410 its passive corrosion resistance, while carbon enables
                            hardening through heat treatment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chemical Composition -->
    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of Stainless Steel 410</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.08 – 0.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>1.00 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>1.00 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>0.040 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.030 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>11.5 – 13.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>0.75 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Physical Properties -->
    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">Technical Composition of Stainless Steel 410</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                     <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Stainless Steel 410
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>7.75 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1480 – 1530 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>24.9 W/m·K (100 °C)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>0.55 µΩ·m</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Properties</td>
                                    <td>Magnetic (Martensitic)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Heat Treatment -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color:#db7227;">
                        Heat Treatment & Hardening Cycle – SS 410
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature Range</th>
                                    <th>Purpose</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>815 – 900 °C</td>
                                    <td>Improves machinability</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardening (Austenitizing)</td>
                                    <td>925 – 1010 °C</td>
                                    <td>Prepares martensitic structure</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Quenching</td>
                                    <td>Oil / Air</td>
                                    <td>Achieves hardness</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tempering</td>
                                    <td>150 – 370 °C</td>
                                    <td>Balances hardness & toughness</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>600 – 650 °C</td>
                                    <td>Reduces internal stresses</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 SS 410 achieves the best balance of strength and toughness after proper quenching and
                            tempering.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mechanical Properties -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">
                    Mechanical Properties of Stainless Steel 410
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Metric</th>
                            <th>Imperial</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength (Annealed)</td>
                            <td>450 – 650 MPa</td>
                            <td>65,000 – 95,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>275 MPa</td>
                            <td>40,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>20%</td>
                            <td>20%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness (Annealed)</td>
                            <td>170 – 200 HB</td>
                            <td>170 – 200 HB</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness (Hardened)</td>
                            <td>35 – 45 HRC</td>
                            <td>35 – 45 HRC</td>
                        </tr>
                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    👉 After heat treatment, SS 410 exhibits excellent mechanical strength, making it suitable for
                    wear-resistant components.
                </p>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – Stainless Steel 410</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark text-center">
                            <tr class="t-row">
                                <th>Product Form</th>
                                <th>Typical Size Range</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="t-row">
                                <td>Round Bars / Rods</td>
                                <td>Ø6 mm – Ø450 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Flat Bars</td>
                                <td>5 – 120 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Sheets & Plates</td>
                                <td>0.4 – 80 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Coils & Strips</td>
                                <td>0.3 – 6 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Pipes & Tubes</td>
                                <td>OD 6 – 610 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Fasteners</td>
                                <td>M6 – M72</td>
                            </tr>
                            <tr class="t-row">
                                <td>Forged Components</td>
                                <td>As per drawing</td>
                            </tr>
                            <tr class="t-row">
                                <td>Precision Machined Parts</td>
                                <td>CNC / Turned</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- International Standards -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades – SS 410</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>S41000</td>
                        </tr>
                        <tr class="t-row">
                            <td>AISI</td>
                            <td>410</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>1.4006</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>X12Cr13</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>A240, A276, A479</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SUS 410</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>X12Cr13</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>




    @php
        $products = [
            [
                'name' => 'Seamless Pipes',
                'route' => 'products.pipes-tubes.seamless-pipes',
                'image' => 'assets/images/all-product/seamless-pipes-10.webp',
            ],

            [
                'name' => 'Welded Pipes (ERW & EFW)',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all-product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Tubes (Capillary, U-Bend)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all-product/u-bent-tube.webp',
            ],
            [
                'name' => 'Sheets & Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
            ],
            [
                'name' => 'Coils & Strips',
                'route' => 'products.sheets-plates-coils.strips',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-5083.webp',
            ],
            [
                'name' => 'Round Bars, Flat Bars, Hex Bars, Square Bars',
                'route' => 'products.bars-rods',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
            ],
            [
                'name' => 'Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)',
                'route' => 'products.pipe-fittings-flanges-fasteners.pipe-fittings',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ],
            [
                'name' => 'Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)',
                'route' => 'products.pipe-fittings-flanges-fasteners.flanges-and-gaskets',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Fasteners (Bolts, Nuts, Screws, Washers, Studs)',
                'route' => 'products.pipe-fittings-flanges-fasteners.fasteners',
                'image' => 'assets/images/all-product/FASTENERS.webp',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings',
                'image' => 'assets/images/all-product/custom-metal-fabricated.webp',
            ],
        ];
    @endphp

    <section id="products"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Stainless Steel 410</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong> offers Stainless Steel 410 in a
                        complete range of products, catering to diverse industrial, mechanical, and structural applications.
                        From standard piping products to precision-engineered components, our inventory ensures reliable
                        supply quality conforming to international standards.
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4"           style="border-color: #db7227;">
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Seamless Pipes & Tubes</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Welded Pipes (ERW & EFW)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Heat Exchanger Tubes & Capillary Tubes</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Sheets, Plates & Strips</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Coils (Hot Rolled & Cold Rolled)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Round Bars, Hex Bars, Flat Bars, Square Bars</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Pipe Fittings (Elbows, Tees, Reducers, Stub Ends, Caps)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Flanges (WNRF, SOFF, BLRF, SWRF, Threaded)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Fasteners (Bolts, Nuts, Screws, Washers, Studs)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Wire Mesh & Perforated Sheets</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Custom Forged or Machined Components</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        All our Stainless Steel 410 products comply with ASTM A240 / A276 / A268 / A479 and equivalent
                        international standards.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Product Image Cards (Now centered and responsive) -->
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
        @foreach ($products as $product)
            <div class="col d-flex">
                <a href="{{ route($product['route']) }}" class="text-decoration-none w-100">
                    <div class="product-card h-100">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="img-fluid w-100">
                        <h6 class="product-card-title text-center mt-0 py-4">{{ $product['name'] }}</h6>
                    </div>
                </a>
            </div>
        @endforeach
    </div>


    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Heat treatable for high strength and hardness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cloud-drizzle"></i></div>
                        <h5>Good corrosion resistance in mild atmospheres and water</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-magnet"></i></div>
                        <h5>Magnetic properties suitable for industrial applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Excellent machinability compared to austenitic grades</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-speedometer2"></i></div>
                        <h5>High wear and abrasion resistance after hardening</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-currency-dollar"></i></div>
                        <h5>Cost-effective alternative to high-alloy stainless steels</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Stainless Steel 410</h2>
                <p class="text-center pb-3">
                    <strong class="text-dark">Stainless Steel 410</strong> is used across a broad range of industries for
                    mechanical, structural, and wear-resistant components.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-scissors"></i></div>
                        <h5>Cutlery & Kitchen Tools</h5>
                        <p>Used in blades, knives, and utensils that require a sharp edge and durability.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Valves, Pumps & Shafts</h5>
                        <p>Ideal for parts exposed to mild chemicals and water-based environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-wind"></i></div>
                        <h5>Turbine Blades & Steam Nozzles</h5>
                        <p>Suited for high-strength applications under moderate heat and stress.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive & Aerospace Parts</h5>
                        <p>Used in shafts, fasteners, and components requiring wear resistance and precision.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear"></i></div>
                        <h5>Industrial Equipment</h5>
                        <p>Applied in bolts, nuts, gears, bushings, and general hardware manufacturing.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-hospital"></i></div>
                        <h5>Surgical & Dental Instruments</h5>
                        <p>Suitable for instruments where strength, precision, and sterilization are required.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Us</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Decades of experience in martensitic stainless steel grades</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-stack"></i></div>
                        <h5>Extensive inventory of 410 pipes, sheets, bars, and fittings</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Ability to deliver custom sizes, finishes, and tolerances</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global supply network ensuring quick dispatch and competitive pricing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Strict quality control and third-party inspection compliance</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Stainless Steel 410 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹230 – ₹580 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by OD, wall thickness, form, and finish)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ’s – Stainless Steel 410</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is 410 Stainless Steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    410 is a martensitic stainless steel that provides good corrosion resistance, excellent
                                    hardenability, and high strength, making it ideal for engineering and industrial
                                    components.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are its key properties?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    It offers high wear resistance, hardness after heat treatment, moderate corrosion
                                    resistance, and excellent toughness for mechanical parts.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is Stainless Steel 410 used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Commonly used in cutlery, valves, pump components, shafts, and turbine parts across
                                    industrial and mechanical sectors.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is Stainless Steel 410 weldable?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, 410 stainless steel can be welded with proper preheating and post-weld heat
                                    treatment to maintain corrosion resistance and mechanical properties.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for 410 Stainless Steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP provides premium-quality 410 stainless steel products with
                                    precision manufacturing, extensive global delivery, and strict quality assurance for
                                    industrial customers worldwide.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

    {{-- blog section start --}}
    <section class="blog-section sec-padd2">
        <div class="container">
            <div class="section-title">
                <h2>blogs</h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    {{-- {{ dd($blog) }} --}}
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated">

                            <figure class="img-holder mb-0">
                                <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                    <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="{{ $blog->title }}"
                                        loading="lazy">
                                </a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                    <h5>{{ Str::limit($blog->title, 30) }}</h5>
                                </a>

                                <div class="post-meta">
                                    by {{ $blog->author ?? 'Admin' }} |
                                    {{ $blog->created_at->format('F d, Y') }}
                                </div>

                                <!--<div class="text">-->
                                <!--</div>-->
                                {!! \Str::limit(strip_tags($blog->content, '<i>'), 120) !!}

                                <div class="link">
                                    <a href="{{ route('frontend.single-blog', $blog->slug) }}" class="default_link">
                                        Read More <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- blog section end --}}



    <!-- Contact Section -->
    <section id="contact-us" class="sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For any inquiries or to request a quote, reach out to <strong>Moksh Tubes & Fittings LLP</strong> – your
                    trusted partner for <strong>stainless steel 410</strong> products.
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
            "@type": "FAQPage",
            "mainEntity": [
                {
                "@type": "Question",
                "name": "What is 410 Stainless Steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "410 is a martensitic stainless steel that provides good corrosion resistance, excellent hardenability, and high strength, making it ideal for engineering and industrial components."
                }
                },
                {
                "@type": "Question",
                "name": "What are its key properties?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "It offers high wear resistance, hardness after heat treatment, moderate corrosion resistance, and excellent toughness for mechanical parts."
                }
                },
                {
                "@type": "Question",
                "name": "Where is Stainless Steel 410 used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Commonly used in cutlery, valves, pump components, shafts, and turbine parts across industrial and mechanical sectors."
                }
                },
                {
                "@type": "Question",
                "name": "Is Stainless Steel 410 weldable?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, 410 stainless steel can be welded with proper preheating and post-weld heat treatment to maintain corrosion resistance and mechanical properties."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for 410 Stainless Steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP provides premium-quality 410 stainless steel products with precision manufacturing, extensive global delivery, and strict quality assurance for industrial customers worldwide."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
