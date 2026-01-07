@extends('layouts.master')

@section('title', '430F Stainless Steel | Free-Machining Alloy Supplier')
@section('meta_description',
    'High-performance 430F Stainless Steel with excellent machinability, corrosion resistance &
    durability for automotive, industrial & engineering components.')
@section('meta_keywords',
    '430F Stainless Steel, UNS S43020, AISI 430F, Free-Machining Stainless Steel, Ferritic
    Stainless Steel, Corrosion Resistant Stainless Steel, High Machinability Alloy, Industrial Stainless Steel Supplier,
    Automotive Grade Stainless Steel, Engineering Stainless Steel')
@section('og_image', asset('assets/images/high-strength-stainless-steel/430F-Stainless-Steel.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/high-strength-stainless-steel/430F-Stainless-Steel.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Stainless Steel 430F <br> Martensitic Free-Machining Stainless Steel</h1>
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
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>

            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                INTRODUCTION TO 430F STAINLESS STEEL / AISI 430F / UNS S43020
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/high-strength-stainless-steel/430F-Stainless-Steel.webp') }}"
                        alt="Hastelloy C276" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <a href="{{ route('index') }}"><strong class="text-black">MOKSH TUBES & FITTINGS
                                    LLP</strong></a> is a leading supplier, exporter, importer, and stockist of a wide
                            variety of
                            <strong class="text-black">430F Stainless Steel</strong> products including Pipes & Tubes, Pipe
                            Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars, Flat Bars,
                            Angles, Channels, Wire Mesh, and other custom and hard-to-find 430F products.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">430F Stainless Steel</strong> is a free-machining ferritic stainless
                            steel, specifically modified with controlled amounts of sulfur to enhance machinability.
                            This improvement makes it highly suitable for automatic screw machining, high-speed
                            manufacturing, and precision-engineered components where quick production turnaround is
                            essential.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            The alloy offers good resistance to oxidation, moderate corrosion resistance in various
                            environments, and excellent magnetic properties. Its performance is reliable in applications
                            where aesthetics, dimensional accuracy, and medium corrosion protection are required.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify%;">
                            Unlike austenitic stainless grades, <strong>430F</strong> cannot be hardened through heat
                            treatment but gains strength via cold working processes. Its ferritic microstructure ensures
                            solid dimensional stability and ease of fabrication, positioning it as a cost-effective
                            alternative for non-critical corrosion-resistant applications.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download High Strength Stainless Steel 430F Datasheet</h3>
            <p class="mb-3">
                Get the complete High Strength Stainless Steel 430F datasheet with chemical composition,
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
                <h2>Material Summary – SS 430F / UNS S43020</h2>
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
                                    <td>Ferritic Stainless Steel (Free-Machining)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS Designation</td>
                                    <td>S43020</td>
                                </tr>
                                <tr class="t-row">
                                    <td>AISI</td>
                                    <td>430F</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium Content</td>
                                    <td>16.0 – 18.0 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur Content</td>
                                    <td>0.15 – 0.35 % (for machinability)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatable</td>
                                    <td>❌ No (Not hardenable)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Machinability</td>
                                    <td>Excellent (Automatic screw machining)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Moderate</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxidation Resistance</td>
                                    <td>Good</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Property</td>
                                    <td>Fully Magnetic</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Density</td>
                                    <td>~7.70 g/cm³</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chemical Composition -->
    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of SS 430F</h2>
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
                                    <td>≤ 0.12</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>≤ 1.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 1.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.06</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.15 – 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>16.0 – 18.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            👉 The sulfur addition significantly improves machinability, making 430F ideal for
                            precision-turned and threaded components.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Physical Properties -->
    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">Technical Composition of SS 430F</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of SS 430F
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
                                    <td>7.70 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1425 – 1510 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>~200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>25 W/m·K (100 °C)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>0.60 µΩ·m</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Properties</td>
                                    <td>Fully Magnetic (Ferritic)</td>
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
                        Heat Treatment of Stainless Steel 430F
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
                                    <td>760 – 815 °C</td>
                                    <td>Restores ductility after cold work</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>600 – 650 °C</td>
                                    <td>Reduces machining stresses</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardening</td>
                                    <td>❌ Not Applicable</td>
                                    <td>Ferritic structure</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Working</td>
                                    <td>—</td>
                                    <td>Improves strength (limited)</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 SS 430F cannot be hardened by heat treatment. Strength improvements are achieved mainly
                            through cold working.
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
                    Mechanical Properties of SS 430F
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
                            <td>Tensile Strength</td>
                            <td>415 – 620 MPa</td>
                            <td>60,000 – 90,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>~275 MPa</td>
                            <td>40,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>20%</td>
                            <td>20%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness (Brinell)</td>
                            <td>170 – 200 HB</td>
                            <td>170 – 200 HB</td>
                        </tr>
                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    👉 SS 430F offers excellent machinability but lower ductility than austenitic stainless steels.
                </p>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – SS 430F</h2>
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
                                <td>Round Bars / Bright Bars</td>
                                <td>Ø6 mm – Ø300 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Flat Bars</td>
                                <td>5 – 80 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Sheets & Plates</td>
                                <td>0.5 – 40 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Coils & Strips</td>
                                <td>0.3 – 5 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Pipes & Tubes</td>
                                <td>OD 6 – 406 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Fasteners</td>
                                <td>M5 – M48</td>
                            </tr>
                            <tr class="t-row">
                                <td>Precision Machined Parts</td>
                                <td>CNC / Automatic Lathe</td>
                            </tr>
                            <tr class="t-row">
                                <td>Custom Turned Components</td>
                                <td>As per drawing</td>
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
                <h2>International Standards & Equivalent Grades – SS 430F</h2>
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
                            <td>S43020</td>
                        </tr>
                        <tr class="t-row">
                            <td>AISI</td>
                            <td>430F</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>1.4105</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>X8CrS17</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>A276, A582</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SUS 430F</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>X8CrS17</td>
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
                'image' => 'assets/images/all product/seamless-pipes-10.webp',
            ],

            [
                'name' => 'Welded Pipes (ERW & EFW)',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Tubes (Capillary, U-Bend)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/u-bent-tube.webp',
            ],
            [
                'name' => 'Sheets & Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all product/sheets-plates.webp',
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
                'image' => 'assets/images/all product/FASTENERS.webp',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings',
                'image' => 'assets/images/all product/custom-metal-fabricated.webp',
            ],
        ];
    @endphp

    <section id="products" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in 430F Stainless Steel</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, leveraging its strong global supply
                        network and expertise in ferritic stainless steels, offers a comprehensive range of <strong
                            class="text-dark">430F Stainless Steel</strong> products for multiple industrial sectors. Known
                        for its excellent machinability and good corrosion resistance, 430F is ideal for automatic machining
                        and high-volume production.
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Seamless Pipes</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Welded Pipes (ERW & EFW)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Tubes (Capillary, Instrumentation, Heat Exchanger)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Sheets & Plates</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Coils & Strips</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Round Bars, Hex Bars, Square Bars, Bright Bars</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Fasteners (Bolts, Nuts, Screws, Washers, Studs)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Custom Machined Components</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        Our 430F Stainless Steel range is engineered to deliver consistent machining performance,
                        durability, and corrosion resistance for various industrial applications.
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
    </div>
    </section>


    <section  id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages of 430F stainless steel</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Excellent Machinability</h5>
                        <p>Enhanced machinability due to controlled sulfur content, ideal for high-speed machining
                            applications.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-magnet"></i></div>
                        <h5>Fully Magnetic Ferritic Structure</h5>
                        <p>Maintains strong magnetic properties, suitable for applications requiring magnetism and
                            stability.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h5>Good Oxidation Resistance</h5>
                        <p>Resists oxidation and scaling effectively at elevated temperatures, extending component lifespan.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cash-stack"></i></div>
                        <h5>Cost-Effective Solution</h5>
                        <p>Offers a reliable and economical alternative to austenitic stainless steels in moderate
                            environments.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-wrench-adjustable-circle"></i></div>
                        <h5>Ideal for High-Speed Machining</h5>
                        <p>Performs exceptionally in automatic screw machining and threaded part manufacturing.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Good Dimensional Stability</h5>
                        <p>Retains structural integrity and shape during fabrication and machining processes.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of 430F Stainless Steel</h2>
                <p class="text-center pb-3">
                    <strong class="text-dark">430F Stainless Steel</strong> is extensively used in industries where high
                    machinability, good corrosion resistance, and magnetic properties are critical performance factors.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front-fill"></i></div>
                        <h5>Automotive Industry</h5>
                        <p>Used in shafts, fasteners, bolts, and other components requiring magnetic properties and high
                            machinability for precision use.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Machinery & Engineering</h5>
                        <p>Ideal for manufacturing gears, screws, valve parts, pump shafts, and precision-turned components
                            for efficient mechanical performance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-tools"></i></div>
                        <h5>Fastener Manufacturing</h5>
                        <p>Used for bolts, nuts, threaded rods, and anchors that demand durability, consistent machining,
                            and repeatable accuracy.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cup-straw"></i></div>
                        <h5>Food & Beverage Industry</h5>
                        <p>Applied in non-critical food processing equipment, conveyors, and structural frameworks requiring
                            hygiene and ease of cleaning.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-hammer"></i></div>
                        <h5>General Manufacturing</h5>
                        <p>Used for high-volume automatic screw machine parts, CNC components, and custom fittings where
                            consistency and machinability are key.</p>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="highlight-box text-center mt-4 p-3 border-start border-4" style="border-color: #db7227;">
                        <p class="fw-bold fs-6" style="color: #174268;">
                            Its outstanding machinability makes 430F Stainless Steel a preferred choice for high-speed CNC
                            machining and automatic lathe production operations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Specialists in manufacturing high-quality ferritic stainless products</h5>
                        <p>We produce reliable, precision-engineered 430F and other ferritic stainless steel products for
                            demanding applications.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strong Supplier Network for Premium Raw Materials</h5>
                        <p>Our partnerships with trusted global suppliers ensure consistent access to high-grade materials.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expertise in Nickel Alloys and Stainless Steels</h5>
                        <p>We have the technical know-how to manufacture and supply a wide range of stainless and alloy
                            steels meeting exacting industry standards.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Presence with Customized Solutions</h5>
                        <p>Delivering tailor-made material solutions across industries with global reach and responsive
                            support.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to Quality, Dependability, and Customer Satisfaction</h5>
                        <p>We focus on precision, reliability, and timely service, ensuring customer trust in every project
                            we deliver.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Stainless Steel 430F Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹200 – ₹480 per kg
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
    <section id="faq"  class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ’s – 430F Stainless Steel</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is 430F Stainless Steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    430F Stainless Steel is a free-machining ferritic stainless steel known for its
                                    excellent machinability, moderate corrosion resistance, and strong magnetic properties.
                                    It is specifically designed for automatic machining operations where speed and precision
                                    are important.
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
                                    The key properties of 430F Stainless Steel include:
                                <ul>
                                    <li>Magnetic in nature (ferritic structure)</li>
                                    <li>Excellent machinability due to sulfur addition</li>
                                    <li>Good strength and dimensional stability</li>
                                    <li>Resistance to oxidation and mildly corrosive environments</li>
                                </ul>
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is it used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    430F Stainless Steel is widely used in the production of fasteners, gears, shafts, and
                                    precision machined components. It is also favored in industries like automotive,
                                    consumer goods, and general engineering where machinability and magnetic properties are
                                    required.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is it weldable?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Welding of 430F Stainless Steel is limited due to its sulfur content, which enhances
                                    machinability but may cause brittleness in weld joints. It is primarily recommended for
                                    machining applications rather than welded assemblies.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for 430F Stainless Steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP offers high-quality 430F stainless steel with precise
                                    finishing, excellent dimensional accuracy, and dependable global supply. Our expertise
                                    in ferritic stainless steels ensures reliable products for precision machining and
                                    engineering applications.
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
    <section id="contact-us"  class="sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For any inquiries or to request a quote, reach out to <strong>Moksh Tubes & Fittings LLP</strong> – your
                    trusted partner for <strong>430F Stainless Steel</strong> products.
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
                "name": "What is 430F Stainless Steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "430F Stainless Steel is a free-machining ferritic stainless steel known for its excellent machinability, moderate corrosion resistance, and strong magnetic properties. It is specifically designed for automatic machining operations where speed and precision are important."
                }
                },
                {
                "@type": "Question",
                "name": "What are its key properties?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The key properties of 430F Stainless Steel include: magnetic in nature (ferritic structure), excellent machinability due to sulfur addition, good strength and dimensional stability, and resistance to oxidation and mildly corrosive environments."
                }
                },
                {
                "@type": "Question",
                "name": "Where is it used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "430F Stainless Steel is widely used in the production of fasteners, gears, shafts, and precision machined components. It is also favored in industries like automotive, consumer goods, and general engineering where machinability and magnetic properties are required."
                }
                },
                {
                "@type": "Question",
                "name": "Is it weldable?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Welding of 430F Stainless Steel is limited due to its sulfur content, which enhances machinability but may cause brittleness in weld joints. It is primarily recommended for machining applications rather than welded assemblies."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for 430F Stainless Steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP offers high-quality 430F stainless steel with precise finishing, excellent dimensional accuracy, and dependable global supply. Our expertise in ferritic stainless steels ensures reliable products for precision machining and engineering applications."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
