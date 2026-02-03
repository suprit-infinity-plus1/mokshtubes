@extends('layouts.master')

@section('title', 'Inconel 625 – Superior Strength & Corrosion Alloy') <!-- 53 chars -->
@section('meta_description',
    'Inconel 625 provides exceptional fatigue, creep, and chloride resistance—ideal for
    aerospace, marine, and chemical processing applications.')
@section('meta_keywords',
    'Inconel 625, Superior Strength Alloy, Marine Protection Alloy, Nickel Alloys, Fatigue
    Resistant Alloy, Creep Resistant Alloy, Chloride Resistant Alloy, Aerospace Alloys, Marine Industry Alloys, Chemical
    Processing Alloys, Corrosion Resistant Alloys')
@section('og_image', asset('assets/images/inconel/Inconel-625.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/inconel/Inconel-625.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Inconel 625 <br> Corrosion & Heat Resistant Alloy</h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        INCONEL® 625 is a premium high-performance nickel alloy widely used for its exceptional corrosion
                        resistance, high mechanical strength, thermal stability, and fatigue performance. Below is the
                        complete datasheet formatted according to your Master Material Page Template.</p>
                    <!-- End extra content -->
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
                Introduction To Inconel 625 / Alloy 625 / UNS N06625 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/inconel/Inconel-625.webp') }}" alt="Inconel 625"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer and stockist of a wide range of<strong class="text-black"> INCONEL
                                625</strong> (UNS N06625) products including
                            <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings, Flanges,
                            Fasteners, Sheets & Plates, Coils, Wires, Round Bars,
                            Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and other Custom and Hard-to-Find INCONEL
                            625 Products.
                        </p>
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted supplier, stockist,
                            importer, and exporter of INCONEL 625 products in a wide range of forms, sizes, and
                            specifications.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">INCONEL 625</strong> is a nickel chromium molybdenum niobium <a
                                href="{{ route('materials.hastelloy') }}">alloy</a>
                            known for its outstanding corrosion resistance, high strength, and excellent fatigue and
                            thermal fatigue properties. The alloy exhibits exceptional resistance to a wide range of
                            corrosive environments, including oxidizing and reducing acids, chlorides, seawater, and harsh
                            chemical media. Its high <a href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a>
                            content provides superior resistance to chloride-induced stress
                            corrosion cracking, while the addition of molybdenum and niobium enhances its mechanical
                            strength and resistance to pitting and crevice corrosion.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Inconel 625 Datasheet</h3>
            <p class="mb-3">
                Get the complete Inconel 625 datasheet with chemical composition,
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

    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Duplex Stainless Steel S31803 Specifications</h2>
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
                                    <td>INCONEL® 625</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS</td>
                                    <td>N06625</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Type</td>
                                    <td>Nickel-Chromium-Molybdenum-Niobium Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Condition Supplied</td>
                                    <td>Annealed / Solution Treated / Cold Worked</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Solution Annealed (No precipitation hardening)</td>
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
                <h2>Chemical Composition of INCONEL 625</h2>
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
                                    <td>58 min (Balance)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>20 – 23</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>8 – 10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Niobium + Tantalum (Nb + Ta)</td>
                                    <td>3.15 – 4.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>≤ 5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt (Co)</td>
                                    <td>≤ 1.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>≤ 0.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 0.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum (Al)</td>
                                    <td>≤ 0.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium (Ti)</td>
                                    <td>≤ 0.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>≤ 0.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.015</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.015</td>
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
                <h2 class="fw-bold" style="color: #174268;">Technical Specifications of Alloy 625</h2>
            </div>
            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Alloy 625
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
                                    <td>0.305 lb/in³</td>
                                    <td>8.44 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2350–2460°F</td>
                                    <td>1290–1350°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>-320°F</td>
                                    <td>-196°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Permeability (200 Oe)</td>
                                    <td>1.0006</td>
                                    <td>1.0006</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Heat Treatment of INCONEL 625</h4>
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
                                    <td>1090 – 1200°C</td>
                                    <td>Restores ductility &amp; corrosion resistance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cooling</td>
                                    <td>Rapid water quench</td>
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
                            INCONEL 625 does not require precipitation hardening; strength is achieved through alloy
                            chemistry.
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
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties of INCONEL 625</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Condition</th>
                            <th>Tensile Strength (ksi / MPa)</th>
                            <th>Yield Strength (ksi / MPa)</th>
                            <th>Elongation (%)</th>
                            <th>Hardness (HB)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Rod / Bar / Plate (As-Rolled)</td>
                            <td>120–160 ksi / 827–1103 MPa</td>
                            <td>60–110 ksi / 414–758 MPa</td>
                            <td>30–60%</td>
                            <td>175–240</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rod / Bar / Plate (Annealed)</td>
                            <td>120–150 ksi / 827–1034 MPa</td>
                            <td>60–95 ksi / 414–655 MPa</td>
                            <td>30–60%</td>
                            <td>145–220</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rod / Bar / Plate (Solution Treated)</td>
                            <td>105–130 ksi / 724–896 MPa</td>
                            <td>42–60 ksi / 290–414 MPa</td>
                            <td>40–65%</td>
                            <td>116–194</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheet / Strip (Annealed)</td>
                            <td>120–150 ksi / 827–1034 MPa</td>
                            <td>60–90 ksi / 414–621 MPa</td>
                            <td>30–55%</td>
                            <td>—</td>
                        </tr>
                        <tr class="t-row">
                            <td>Tube / Pipe (Cold Drawn &amp; Annealed)</td>
                            <td>120–140 ksi / 827–965 MPa</td>
                            <td>60–75 ksi / 414–517 MPa</td>
                            <td>30–55%</td>
                            <td>—</td>
                        </tr>
                        <tr class="t-row">
                            <td>Tube / Pipe (Cold Drawn &amp; Solution Treated)</td>
                            <td>100–120 ksi / 689–827 MPa</td>
                            <td>40–60 ksi / 276–414 MPa</td>
                            <td>40–60%</td>
                            <td>—</td>
                        </tr>
                    </tbody>
                </table>
                {{-- <p class="mt-3 text-center">
                    After quenching & tempering, 1055 steel hardness can reach 45–55 HRC depending on cooling media.
                </p> --}}

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
                        We supply Inconel 625 in the following product forms and dimensions:
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
                                    <td>As per ASTM B444 / B704</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wire &amp; Welding Rods</td>
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
                            <td>N06625</td>
                        </tr>
                        <tr class="t-row">
                            <td>W.Nr</td>
                            <td>2.4856</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>NiCr22Mo9Nb</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>NiCr22Mo9Nb</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>Alloy 625</td>
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

    <section  id="products" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Inconel 625</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">INCONEL 625 </strong>is a versatile and highly reliable material widely
                        used across many industries. It complies with important industry standards like NACE MR-01-75 and is
                        available in a broad range of shapes and sizes to fit your needs.
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


    <section  id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Resists a broad spectrum of corrosive environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Maintains strength and integrity at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Exceptional fatigue resistance and thermal stability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Easy to fabricate and weld</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Superior defense against pitting, crevice corrosion, and stress corrosion cracking</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Inconel 625</h2>
                <p class="text-center pb-3"><strong class="text-dark">Inconel 625</strong> is a highly versatile
                    nickel-chromium-molybdenum-niobium alloy known for its exceptional corrosion resistance, high strength,
                    and durability in extreme environments. Its ability to withstand aggressive chemicals, high pressures,
                    and wide temperature ranges makes it a preferred material across a variety of critical industries.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace Industry</h5>
                        <p>Widely used in jet engine components, exhaust systems, ducting, and turbine shroud rings. INCONEL
                            625 offers excellent fatigue strength and thermal stability under high mechanical and thermal
                            stress.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Marine and Offshore Applications</h5>
                        <p>Highly resistant to seawater, pitting, crevice corrosion, and chloride-induced stress corrosion
                            cracking. Common applications include seawater piping, underwater components, marine fasteners,
                            and offshore platform structures.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Performs reliably in environments involving strong acids such as nitric, phosphoric, and sulfuric
                            acids. Ideal for heat exchangers, reactors, scrubbers, and transfer piping handling corrosive
                            fluids at elevated temperatures.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Power Generation and Nuclear Reactors</h5>
                        <p>Used in superheaters, steam lines, containment vessels, and heat exchanger tubing. INCONEL 625
                            resists oxidation and maintains mechanical properties under high heat and pressure, including
                            radiation environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Oil & Gas Sector</h5>
                        <p>Ideal for sour gas service, wellhead components, flexible joints, manifolds, and downhole
                            equipment. Its resistance to hydrogen sulfide and chlorides ensures long-lasting performance in
                            offshore and deep well operations.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Environmental and Pollution Control Systems</h5>
                        <p>Suitable for flue gas scrubbers, incinerator linings, and waste processing systems that involve
                            acidic or high-temperature gas streams.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Pharmaceutical and Food Processing</h5>
                        <p>Used in high-purity process piping, steam sterilizers, and acid-resistant components where
                            hygiene and corrosion resistance are essential.</p>
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
                        <h5>Expertise in crafting premium INCONEL 625 products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Reliable global network for top-grade raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Deep knowledge of nickel alloys and specialty metals</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Customized solutions tailored to your needs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Total commitment to quality, dependability, and customer satisfaction</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>INCONEL 625 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹4,200 – ₹7,500 per kg
            </p>
            <p class="text-center mb-2">
                (Size, form, condition & certification)
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is Inconel 625 and why is it widely used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 625 (UNS N06625) is a nickel chromium molybdenum niobium alloy known for its
                                    exceptional corrosion resistance, high strength, and remarkable fatigue and
                                    thermal fatigue properties. It performs reliably in extreme environments, including
                                    exposure to seawater, strong acids, and high pressure, high temperature conditions. The
                                    alloy’s unique chemical balance gives it superior resistance to pitting, crevice
                                    corrosion, and chloride induced stress corrosion cracking, making it a preferred
                                    material across industries such as aerospace, marine, chemical processing, oil and gas,
                                    and power generation.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the primary applications of Inconel 625?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 625 is used in a wide variety of industries where durability and corrosion
                                    resistance are critical. In aerospace, it is applied in jet engine components, exhaust
                                    systems, and turbine shroud rings. In the marine and offshore sector, it is relied upon
                                    for seawater piping, underwater fasteners, and platform structures. The alloy also sees
                                    extensive use in chemical plants for reactors, scrubbers, and heat exchangers; in power
                                    generation for steam lines and containment vessels; and in oil and gas industries for
                                    sour gas service, downhole equipment, and manifolds. Its versatility extends to
                                    environmental systems, pharmaceuticals, and food processing industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main advantages of Inconel 625 compared to other alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 625 offers a unique combination of high tensile strength, excellent fatigue
                                    resistance, and outstanding corrosion resistance in both oxidizing and reducing
                                    environments. Unlike many alloys, it retains its mechanical properties even under
                                    extreme thermal cycling, making it ideal for demanding service conditions. Its
                                    resistance to aggressive chemicals, seawater, hydrogen sulfide, and chloride rich
                                    environments sets it apart as a reliable, long lasting material. Additionally, it is
                                    easy to fabricate, weld, and machine, which helps industries reduce downtime and
                                    maintenance costs.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How does the chemical composition of Inconel 625 enhance its properties?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The chemical composition of Inconel 625 is carefully balanced to deliver superior
                                    performance. A high nickel content provides resistance to chloride stress corrosion
                                    cracking, while chromium improves resistance to oxidation and scaling. The addition of
                                    molybdenum enhances its defense against pitting and crevice corrosion, and niobium
                                    increases strength and toughness through solid solution strengthening. These elements
                                    together give Inconel 625 unmatched durability in seawater, acidic media, and
                                    high-temperature environments, making it a truly versatile alloy for critical
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Inconel 625 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted manufacturer, supplier, exporter, importer, and
                                    stockist of premium Inconel 625 products, offering everything from pipes, tubes, sheets,
                                    plates, and coils to fittings, flanges, fasteners, and custom-fabricated components.
                                    With proven expertise in nickel-based alloys, a strong global supply network, and
                                    stringent quality control standards, the company ensures that every product meets
                                    international specifications. Customers rely on Moksh Tubes & Fittings LLP for
                                    customized solutions, timely delivery, and consistent performance across industries
                                    where reliability is non negotiable.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> for inquiries or quotes – your trusted partner for
                    world-class INCONEL 625 products.
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
                        "name": "What is Inconel 625 and why is it widely used?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 625 (UNS N06625) is a nickel chromium molybdenum niobium alloy known for its exceptional corrosion resistance, high strength, and remarkable fatigue and thermal fatigue properties. It performs reliably in extreme environments, including exposure to seawater, strong acids, and high pressure, high temperature conditions. The alloy’s unique chemical balance gives it superior resistance to pitting, crevice corrosion, and chloride induced stress corrosion cracking, making it a preferred material across industries such as aerospace, marine, chemical processing, oil and gas, and power generation."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the primary applications of Inconel 625?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 625 is used in a wide variety of industries where durability and corrosion resistance are critical. In aerospace, it is applied in jet engine components, exhaust systems, and turbine shroud rings. In the marine and offshore sector, it is relied upon for seawater piping, underwater fasteners, and platform structures. The alloy also sees extensive use in chemical plants for reactors, scrubbers, and heat exchangers; in power generation for steam lines and containment vessels; and in oil and gas industries for sour gas service, downhole equipment, and manifolds. Its versatility extends to environmental systems, pharmaceuticals, and food processing industries."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the main advantages of Inconel 625 compared to other alloys?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 625 offers a unique combination of high tensile strength, excellent fatigue resistance, and outstanding corrosion resistance in both oxidizing and reducing environments. Unlike many alloys, it retains its mechanical properties even under extreme thermal cycling, making it ideal for demanding service conditions. Its resistance to aggressive chemicals, seawater, hydrogen sulfide, and chloride rich environments sets it apart as a reliable, long lasting material. Additionally, it is easy to fabricate, weld, and machine, which helps industries reduce downtime and maintenance costs."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How does the chemical composition of Inconel 625 enhance its properties?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The chemical composition of Inconel 625 is carefully balanced to deliver superior performance. A high nickel content provides resistance to chloride stress corrosion cracking, while chromium improves resistance to oxidation and scaling. The addition of molybdenum enhances its defense against pitting and crevice corrosion, and niobium increases strength and toughness through solid solution strengthening. These elements together give Inconel 625 unmatched durability in seawater, acidic media, and high-temperature environments, making it a truly versatile alloy for critical applications."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose Moksh Tubes & Fittings LLP for Inconel 625 products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP is a trusted manufacturer, supplier, exporter, importer, and stockist of premium Inconel 625 products, offering everything from pipes, tubes, sheets, plates, and coils to fittings, flanges, fasteners, and custom-fabricated components. With proven expertise in nickel-based alloys, a strong global supply network, and stringent quality control standards, the company ensures that every product meets international specifications. Customers rely on Moksh Tubes & Fittings LLP for customized solutions, timely delivery, and consistent performance across industries where reliability is non negotiable."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
