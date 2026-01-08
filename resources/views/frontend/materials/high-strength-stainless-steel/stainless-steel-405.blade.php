@extends('layouts.master')

@section('title', 'Stainless Steel 405 | Corrosion-Resistant Alloy Supplier')
@section('meta_description',
    'Durable Stainless Steel 405 offering corrosion resistance, toughness & high strength for
    automotive, aerospace, marine & heavy engineering applications.')
@section('meta_keywords',
    'Hastelloy C276, Corrosion Resistant Alloy, Nickel Alloy, Hastelloy C276 Pipes, Hastelloy C276
    Tubes, Hastelloy C276 Fittings, Industrial Corrosion Resistant Alloys, Durable Nickel Alloys, Chemical Processing
    Alloys, Marine Alloys')
@section('og_image', asset('assets/images/high-strength-stainless-steel/Stainless-Steel-405.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/high-strength-stainless-steel/Stainless-Steel-405.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Stainless Steel 405 <br> Ferritic Stainless Steel with Oxidation Resistance</h1>
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
    <section id="overview"  class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction to Stainless Steel 405 / AISI 405 / UNS S40500
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/high-strength-stainless-steel/Stainless-Steel-405.webp') }}"
                        alt="Stainless Steel 405" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a> is a trusted supplier, exporter,
                            importer, and stockist of a comprehensive range of Stainless Steel 405 products, including Pipes
                            & Tubes, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars, Flat
                            Bars, Angles, Channels, Wire Mesh, and various custom or hard-to-find components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Stainless Steel 405 is a 12% chromium ferritic stainless steel, specially designed to minimize
                            hardening when cooled from high temperatures. The addition of aluminium (~0.10–0.30%) improves
                            its oxidation resistance and prevents excessive hardening during welding, making it particularly
                            useful for welded or fabricated applications where post-weld annealing is not practical.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            This grade offers moderate corrosion resistance, good weldability, excellent scaling resistance,
                            and is magnetic in all conditions. It’s frequently used in automotive exhaust systems, annealing
                            boxes, steam nozzles, turbine blades, and structural components exposed to mild environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download High Strength Stainless Steel 405 Datasheet</h3>
            <p class="mb-3">
                Get the complete High Strength Stainless Steel 405 datasheet with chemical composition,
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
                <h2>Material Summary – SS 405 / UNS S40500</h2>
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
                                    <td>Ferritic Stainless Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS Designation</td>
                                    <td>S40500</td>
                                </tr>
                                <tr class="t-row">
                                    <td>AISI</td>
                                    <td>405</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium Content</td>
                                    <td>11.5 – 14.5 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloying Addition</td>
                                    <td>Aluminium (0.10 – 0.30%)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatable</td>
                                    <td>❌ No (Not hardenable)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxidation Resistance</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Moderate</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Property</td>
                                    <td>Fully Magnetic</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Density</td>
                                    <td>~7.75 g/cm³</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            👉 Aluminium addition improves oxidation resistance and prevents air-hardening during welding,
                            making SS 405 ideal for welded and exhaust components.
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
                <h2>Chemical Composition of Stainless Steel 405</h2>
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
                                    <td>0.08 max</td>
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
                                    <td>11.5 – 14.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminium (Al)</td>
                                    <td>0.10 – 0.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>≤ 0.75</td>
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
                <h2 class="fw-bold" style="color:#174268;">Technical Composition of Stainless Steel 405</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Stainless Steel 405
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
                                    <td>24 W/m·K (100 °C)</td>
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
                        Heat Treatment of Stainless Steel 405
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
                                    <td>Restores ductility</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>600 – 650 °C</td>
                                    <td>Reduces fabrication stresses</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardening</td>
                                    <td>❌ Not Applicable</td>
                                    <td>Ferritic structure</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Post-Weld Heat Treatment</td>
                                    <td>Usually not required</td>
                                    <td>Minimizes air-hardening</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 SS 405 does not harden by heat treatment. Aluminium prevents excessive grain growth and
                            air-hardening during welding.
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
                    Mechanical Properties of Stainless Steel 405
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
                            <td>380 – 540 MPa</td>
                            <td>55,000 – 78,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>205 – 275 MPa</td>
                            <td>30,000 – 40,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>20%</td>
                            <td>20%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness (Brinell)</td>
                            <td>150 – 170 HB</td>
                            <td>150 – 170 HB</td>
                        </tr>
                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    👉 SS 405 offers excellent thermal stability, oxidation resistance, and weldability, making it ideal for
                    fabricated components exposed to heat.
                </p>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – Stainless Steel 405</h2>
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
                                <td>Ø6 mm – Ø400 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Flat Bars</td>
                                <td>5 – 100 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Sheets & Plates</td>
                                <td>0.5 – 60 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Coils & Strips</td>
                                <td>0.3 – 5 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Pipes & Tubes</td>
                                <td>OD 6 – 610 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Fittings & Flanges</td>
                                <td>ANSI / DIN sizes</td>
                            </tr>
                            <tr class="t-row">
                                <td>Fasteners</td>
                                <td>M6 – M64</td>
                            </tr>
                            <tr class="t-row">
                                <td>Welded / Fabricated Parts</td>
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
                <h2>International Standards & Equivalent Grades – SS 405</h2>
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
                            <td>S40500</td>
                        </tr>
                        <tr class="t-row">
                            <td>AISI</td>
                            <td>405</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>1.4002</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>X6CrAl13</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>A268, A240, A276</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SUS 405</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>X6CrAl13</td>
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
                <h2>Products in Stainless Steel 405</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong> supplies a wide range of
                        <strong class="text-dark">Stainless Steel 405</strong> products in various forms. These products
                        are widely used in industries such as Chemical Processing, Power Generation, Oil & Gas, Pulp &
                        Paper,
                        and many other engineering sectors. Stainless Steel 405 offers excellent oxidation and scaling
                        resistance
                        along with good ductility and machinability, making it suitable for applications that require
                        moderate corrosion resistance and formability under elevated temperatures.
                        It is an ideal material for components that must maintain mechanical integrity and durability
                        in heat and mildly corrosive environments.
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            {{-- @foreach ($products as $slug => $product) --}}
                            @foreach ($products as $product)
                                <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                    <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                    <span>{{ $product['name'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        MOKSH TUBES & FITTINGS LLP supplies Stainless Steel 405 in a wide variety of product forms,
                        including:
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


    <section id="uses"  class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent oxidation resistance due to aluminium addition</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-wrench-adjustable-circle"></i></div>
                        <h5>Superior weldability with minimized air-hardening</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-magnet"></i></div>
                        <h5>Fully magnetic ferritic structure</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Good dimensional stability during fabrication</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-exclamation"></i></div>
                        <h5>Moderate corrosion resistance in mild environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-currency-dollar"></i></div>
                        <h5>Cost-effective alternative to austenitic grades for thermal applications</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Stainless Steel 405</h2>
                <p class="text-center pb-3">
                    <strong class="text-dark">Stainless Steel 405</strong> is widely used in thermal and structural
                    applications, particularly where weldability and oxidation resistance are critical:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive Exhaust Systems</h5>
                        <p>Used in manifolds, mufflers, and exhaust pipes where scaling resistance is key.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fire"></i></div>
                        <h5>Annealing Boxes & Furnace Parts</h5>
                        <p>Used for components exposed to cyclic heating and cooling in furnace setups.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-wind"></i></div>
                        <h5>Steam Nozzles & Turbine Blades</h5>
                        <p>Ideal for mild steam and temperature environments needing dimensional stability.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Welded Structures</h5>
                        <p>Perfect for structures requiring good formability and fabrication capabilities.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-tools"></i></div>
                        <h5>Industrial Equipment</h5>
                        <p>Used in conveyor systems, heat shields, and mild chemical processing components.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Us?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Specialists in ferritic stainless steels like 405, 409, and 430 series</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                        <h5>Wide stock of pipes, sheets, bars, fittings, and fasteners</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-lightbulb"></i></div>
                        <h5>Expertise in welding and fabrication applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global supply capabilities with competitive pricing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Unwavering commitment to quality, reliability & customer satisfaction</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Stainless Steel 405 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹210 – ₹520 per kg
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
                            <h2>FAQ's – Stainless Steel 405</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is Stainless Steel 405?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Stainless Steel 405 is a ferritic stainless steel with good oxidation and moderate
                                    corrosion resistance. It is widely used in automotive and engineering parts that require
                                    durability and cost-effectiveness.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Stainless Steel 405?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    It provides good corrosion resistance, excellent oxidation resistance, magnetic
                                    properties, and high ductility, making it ideal for heat and fabrication-intensive
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is Stainless Steel 405 commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    It is widely used in exhaust systems, furnace parts, turbine blades, annealing boxes,
                                    and welded structural applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is Stainless Steel 405 weldable?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, it is weldable using standard techniques. However, proper heat control is required
                                    to minimize embrittlement and maintain corrosion resistance.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Stainless Steel 405?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP provides premium-grade Stainless Steel 405 products with
                                    precise manufacturing, consistent quality, and global supply capabilities. We ensure
                                    reliable performance and timely delivery for diverse industrial needs worldwide.
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
    <section id="contact-us"class="sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For inquiries or to request a quote, reach out to <strong>Moksh Tubes & Fittings LLP</strong> – your
                    reliable partner for <strong>Stainless Steel 405</strong> products.
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
                "name": "What is Stainless Steel 405?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Stainless Steel 405 is a ferritic stainless steel with good oxidation and moderate corrosion resistance. It is widely used in automotive and engineering parts that require durability and cost-effectiveness."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of Stainless Steel 405?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "It provides good corrosion resistance, excellent oxidation resistance, magnetic properties, and high ductility, making it ideal for heat and fabrication-intensive applications."
                }
                },
                {
                "@type": "Question",
                "name": "Where is Stainless Steel 405 commonly used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "It is widely used in exhaust systems, furnace parts, turbine blades, annealing boxes, and welded structural applications."
                }
                },
                {
                "@type": "Question",
                "name": "Is Stainless Steel 405 weldable?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, it is weldable using standard techniques. However, proper heat control is required to minimize embrittlement and maintain corrosion resistance."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Stainless Steel 405?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP provides premium-grade Stainless Steel 405 products with precise manufacturing, consistent quality, and global supply capabilities. We ensure reliable performance and timely delivery for diverse industrial needs worldwide."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
