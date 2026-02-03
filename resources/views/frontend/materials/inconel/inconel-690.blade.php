@extends('layouts.master')

@section('title', 'Inconel 690 – High-Chromium Corrosion Alloy') <!-- 53 chars -->
@section('meta_description',
    'Inconel 690 delivers excellent resistance to oxidizing chemicals and high
    temperatures—ideal for nuclear, chemical, and thermal processing.')
@section('meta_keywords',
    'Inconel 690, High-Chromium Alloy, Corrosion Resistant Alloy, Nickel Alloys, Oxidation
    Resistant Alloy, Nuclear Industry Alloys, Chemical Processing Alloys, Thermal Processing Alloys, High Temperature
    Alloys, Oxidizing Chemical Resistant Alloys')
@section('og_image', asset('assets/images/inconel/Inconel-690.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/inconel/Inconel-690.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Inconel 690 <br> High Corrosion & Heat Resistant Alloy</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        INCONEL 690 is a premium high-temperature nickel-chromium alloy engineered for extreme oxidation
                        resistance, acidic & caustic corrosion protection, and structural stability under elevated
                        temperatures. Below is the complete datasheet structured using the Master Material Page Template.
                    </p>
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
                Introduction To Inconel 690 / Alloy 690 / UNS N06690 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/inconel/Inconel-690.webp') }}" alt="Inconel 690"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a premier manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> INCONEL 690</strong>
                            (UNS N06690) products in multiple
                            forms such as <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings,
                            Flanges, Fasteners, Sheets & Plates, Coils, Wires,
                            Round Bars, Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and customized components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">INCONEL 690</strong> is a high chromium, nickel based <a
                                href="{{ route('materials.hastelloy') }}">alloy</a> known for
                            its excellent resistance to high-temperature oxidation, aqueous corrosion, and especially
                            corrosive attack by hot acidic and caustic solutions. It offers significantly improved
                            performance over INCONEL 600 due to its higher chromium content (30%), which enhances its
                            performance in nuclear steam generators, chemical processing, and marine applications. <a
                                href="{{ route('materials.inconel') }}">INCONEL
                                690</a> also provides superb mechanical strength, metallurgical stability, and weldability
                            for
                            long-term use in demanding environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Inconel 690 Datasheet</h3>
            <p class="mb-3">
                Get the complete Inconel 690 datasheet with chemical composition,
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
                <h2>INCONEL 690 Specifications</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Grade</td>
                                    <td>INCONEL® 690</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS</td>
                                    <td>N06690</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Type</td>
                                    <td>Nickel-Chromium High-Temperature Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Condition Supplied</td>
                                    <td>Annealed / Solution Treated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Solution Annealed</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Nature</td>
                                    <td>Non-Magnetic</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Weldability</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>Chemical, Mechanical, PMI, UT / ET</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- col-lg-8 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of INCONEL 690</h2>
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
                            <tbody>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>58.0 min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>27.0 – 31.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>7.0 – 11.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>≤ 0.05</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 0.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>≤ 0.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.015</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper (Cu)</td>
                                    <td>≤ 0.50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Specifications of Alloy 690</h2>
            </div>
            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Alloy 690
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Imperial</th>
                                    <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>0.296 lb/in³</td>
                                    <td>8.19 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2450–2510°F</td>
                                    <td>1343–1377°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.107 Btu/lb°F</td>
                                    <td>450 J/kg°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>691 ohm·circ mil/ft</td>
                                    <td>1.148 μΩ·m</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability</td>
                                    <td>1.001</td>
                                    <td>1.001</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Young’s Modulus</td>
                                    <td>30.6 ×10³ ksi</td>
                                    <td>211 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.289</td>
                                    <td>—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Heat Treatment of INCONEL 690
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
                            <tbody>
                                <tr class="t-row">
                                    <td>Solution Annealing</td>
                                    <td>1040 – 1100°C</td>
                                    <td>Restores corrosion resistance &amp; ductility</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cooling</td>
                                    <td>Water / Air</td>
                                    <td>Prevents carbide precipitation</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>600 – 650°C</td>
                                    <td>Dimensional stability (if required)</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            INCONEL 690 is not precipitation hardenable; strength comes from solid-solution strengthening.
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
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties of Inconel 690</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product</th>
                            <th>Yield Strength (ksi / MPa)</th>
                            <th>Tensile Strength (ksi / MPa)</th>
                            <th>Elongation (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Tube 0.50 × 0.050 in</td>
                            <td>66.8 ksi / 461 MPa</td>
                            <td>110 ksi / 758 MPa</td>
                            <td>39%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Tube 0.75 × 0.065 in</td>
                            <td>55 ksi / 379 MPa</td>
                            <td>101.5 ksi / 700 MPa</td>
                            <td>46%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Tube 3.50 × 0.216 in</td>
                            <td>40.9 ksi / 282 MPa</td>
                            <td>94 ksi / 648 MPa</td>
                            <td>52%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flat – Hot Rolled</td>
                            <td>51 ksi / 352 MPa</td>
                            <td>102 ksi / 703 MPa</td>
                            <td>46%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rod – Hot Rolled (2&quot;)</td>
                            <td>48.5 ksi / 334 MPa</td>
                            <td>100 ksi / 690 MPa</td>
                            <td>50%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rod – Hot Rolled (0.62&quot;)</td>
                            <td>54 ksi / 372 MPa</td>
                            <td>107 ksi / 738 MPa</td>
                            <td>44%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Strip 0.150 in</td>
                            <td>50.5 ksi / 348 MPa</td>
                            <td>105 ksi / 724 MPa</td>
                            <td>41%</td>
                        </tr>
                    </tbody>
                </table>
                <p class="mt-3 text-center">
                    INCONEL 690 retains high ductility, strength, and corrosion resistance even after extended
                    high-temperature exposure.
                </p>

            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5" id="available forms">
                <h2>Available Forms & Size Range</h2>
            </div>

            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        We supply Duplex Stainless Steel S31803 in the following product forms and dimensions:
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color:#db7227;">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Product Form</th>
                                    <th>Size Range</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Round Bars / Rods</td>
                                    <td>6 mm – 450 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Flat, Square &amp; Hex Bars</td>
                                    <td>Up to 300 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sheets &amp; Plates</td>
                                    <td>0.5 mm – 60 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Coils &amp; Strips</td>
                                    <td>0.1 mm – 6 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pipes &amp; Tubes</td>
                                    <td>OD 6 mm – 630 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Exchanger / Boiler Tubes</td>
                                    <td>As per ASTM B163 / B167</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wire</td>
                                    <td>0.5 mm – 12 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Forgings</td>
                                    <td>As per drawing</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Fasteners</td>
                                    <td>M6 – M100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Standards & Equivalent Grades Section -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>N06690</td>
                        </tr>
                        <tr class="t-row">
                            <td>W.Nr</td>
                            <td>2.4642</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>NiCr30Fe</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>NiCr30Fe</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>Alloy 690</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End Standards & Equivalent Grades Section -->


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

    <section id="products" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Inconel 690</h2>
            </div>

            <!-- Highlighted Paragraph -->


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
                        This alloy meets several recognized industry standards, including:
                    </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col d-flex">
                        <a href="{{ route($product['route']) }}" class="text-decoration-none w-100">
                            <div class="product-card h-100">
                                <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                    class="img-fluid w-100">
                                <h6 class="product-card-title text-center mt-0 py-4">{{ $product['name'] }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Outstanding resistance to high-temperature oxidizing environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent corrosion resistance in acidic and caustic solutions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High strength and stability under long-term service at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Superior metallurgical structure and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Excellent resistance to stress corrosion cracking and pitting</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Inconel 690</h2>
                <p class="text-center pb-3"><strong class="text-dark">Inconel 690</strong> is trusted in critical
                    industries where oxidation resistance and structural integrity at high temperatures are essential.
                    Applications include:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Nuclear Power Generation</h5>
                        <p>Used in steam generator tubing, heat exchangers, and other components exposed to high-pressure
                            and high-temperature steam.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical Processing Plants</h5>
                        <p>Applied in equipment handling hot acidic solutions, oxidizing salts, and caustic environments,
                            including heat exchangers and reactors.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Power Boilers and Heat Recovery Units</h5>
                        <p>Ideal for superheaters, reheaters, and other components subject to high thermal stress and
                            oxidation.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine Engineering</h5>
                        <p>Suited for marine heat exchangers, condensers, and other seawater-exposed systems requiring
                            anti-corrosive strength.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Aerospace and Gas Turbines</h5>
                        <p>Used in engine components, combustion liners, and exhaust assemblies needing high-temperature
                            strength and oxidation resistance.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Desalination and Water Treatment Systems</h5>
                        <p>Applied in evaporators and heat transfer equipment where saline and acidic media are present.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Food and Beverage Equipment</h5>
                        <p>Deployed in hot water systems, steam sterilization, and handling of acidic/alkaline solutions
                            with hygienic requirements.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                <div class="application-card">
                     <div class="application-icon"><i class="bi bi-strategies"></i></div>
                    <h5>Why It Works</h5>
                    <p><strong>HASTELLOY C276’s</strong> combination of corrosion resistance, weldability, and mechanical durability makes it ideal for mission-critical applications where long-term performance is non-negotiable.</p>
                </div>
            </div> --}}
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Proven expertise in nickel-chromium alloy systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Access to rare, hard-to-source materials globally</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Reliable supply chain with prompt delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>State-of-the-art processing and testing facilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to quality, performance, and customer satisfaction</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container text-center">
            <h2>INCONEL 690 Price per kg in India</h2>
            <p class="fs-5"><strong>₹3,800 – ₹6,800 per kg</strong></p>
            <p>Price varies by size, form, certification & quantity</p>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is Inconel 690 and what makes it unique?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 690 (UNS N06690) is a high chromium, nickel based alloy that stands out for its
                                    exceptional resistance to high temperature oxidation and aqueous corrosion. With a
                                    chromium content of around 30%, it performs significantly better than Inconel 600 in
                                    resisting acidic and caustic environments. It also offers high mechanical strength,
                                    metallurgical stability, and excellent weldability, making it a reliable choice for
                                    long term use in nuclear steam generators, chemical processing plants, and marine
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main applications of Inconel 690?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 690 is widely used in industries that demand resistance to heat, pressure, and
                                    corrosion. In nuclear power plants, it is employed in steam generator tubing and heat
                                    exchangers exposed to high-pressure steam. Chemical industries use it in reactors,
                                    scrubbers, and piping systems handling hot acids and caustic solutions. It is also
                                    preferred in power boilers, superheaters, and marine condensers, as well as in
                                    aerospace, gas turbines, desalination systems, and even food and beverage processing
                                    equipment where hygiene and durability are essential.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key advantages of Inconel 690 compared to other alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 690 offers superior oxidation resistance at elevated temperatures, excellent
                                    resistance to hot acidic and alkaline solutions, and high structural stability under
                                    prolonged service conditions. Its strong metallurgical composition prevents pitting,
                                    stress corrosion cracking, and scaling, even in highly aggressive environments. Another
                                    advantage is its outstanding weldability, which makes it easier to fabricate into
                                    complex components without compromising its strength or corrosion resistance. These
                                    features make it more durable than alloys like Inconel 600 in critical applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How does the chemical composition of Inconel 690 enhance its performance?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The chemical composition of Inconel 690 is dominated by nickel (58% minimum) and
                                    chromium (27–31%), with controlled additions of iron, carbon, manganese, and silicon.
                                    The high chromium content ensures excellent resistance to oxidation and aggressive hot
                                    acidic environments, while nickel provides superior corrosion resistance in both
                                    reducing and oxidizing conditions. The balanced alloying elements contribute to
                                    mechanical strength, stability, and resistance to stress cracking, which is why Inconel
                                    690 performs reliably in nuclear, chemical, and marine environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why should industries choose Moksh Tubes & Fittings LLP for Inconel 690 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted global manufacturer, supplier, exporter,
                                    importer, and stockist of premium Inconel 690 products, offering a complete range that
                                    includes pipes, tubes, fittings, flanges, sheets, plates, coils, fasteners, and
                                    custom fabricated components. With extensive expertise in nickel chromium alloys, access
                                    to hard to source raw materials, advanced testing facilities, and a reliable
                                    international supply chain, the company ensures consistent quality and timely delivery.
                                    Customers choose Moksh Tubes & Fittings LLP for its commitment to precision, durability,
                                    and tailored solutions that meet the most demanding industrial needs.
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

    <section  id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    <strong>Moksh Tubes & Fittings LLP</strong> your trusted source for INCONEL 690 components tailored for
                    high-performance and longevity in corrosive and elevated temperature environments.
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
                        "name": "What is Inconel 690 and what makes it unique?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 690 (UNS N06690) is a high chromium, nickel based alloy that stands out for its exceptional resistance to high temperature oxidation and aqueous corrosion. With a chromium content of around 30%, it performs significantly better than Inconel 600 in resisting acidic and caustic environments. It also offers high mechanical strength, metallurgical stability, and excellent weldability, making it a reliable choice for long term use in nuclear steam generators, chemical processing plants, and marine applications."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the main applications of Inconel 690?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 690 is widely used in industries that demand resistance to heat, pressure, and corrosion. In nuclear power plants, it is employed in steam generator tubing and heat exchangers exposed to high-pressure steam. Chemical industries use it in reactors, scrubbers, and piping systems handling hot acids and caustic solutions. It is also preferred in power boilers, superheaters, and marine condensers, as well as in aerospace, gas turbines, desalination systems, and food and beverage processing equipment where hygiene and durability are essential."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the key advantages of Inconel 690 compared to other alloys?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 690 offers superior oxidation resistance at elevated temperatures, excellent resistance to hot acidic and alkaline solutions, and high structural stability under prolonged service conditions. Its strong metallurgical composition prevents pitting, stress corrosion cracking, and scaling, even in highly aggressive environments. Another advantage is its outstanding weldability, which makes it easier to fabricate into complex components without compromising its strength or corrosion resistance. These features make it more durable than alloys like Inconel 600 in critical applications."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How does the chemical composition of Inconel 690 enhance its performance?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The chemical composition of Inconel 690 is dominated by nickel (58% minimum) and chromium (27–31%), with controlled additions of iron, carbon, manganese, and silicon. The high chromium content ensures excellent resistance to oxidation and aggressive hot acidic environments, while nickel provides superior corrosion resistance in both reducing and oxidizing conditions. The balanced alloying elements contribute to mechanical strength, stability, and resistance to stress cracking, which is why Inconel 690 performs reliably in nuclear, chemical, and marine environments."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why should industries choose Moksh Tubes & Fittings LLP for Inconel 690 products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP is a trusted global manufacturer, supplier, exporter, importer, and stockist of premium Inconel 690 products, offering a complete range that includes pipes, tubes, fittings, flanges, sheets, plates, coils, fasteners, and custom fabricated components. With extensive expertise in nickel chromium alloys, access to hard to source raw materials, advanced testing facilities, and a reliable international supply chain, the company ensures consistent quality and timely delivery. Customers choose Moksh Tubes & Fittings LLP for its commitment to precision, durability, and tailored solutions that meet the most demanding industrial needs."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
