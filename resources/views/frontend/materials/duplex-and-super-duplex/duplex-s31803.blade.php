@extends('layouts.master')

@section('title', 'Duplex Steel S31803 | High Strength & Corrosion Resistance')

@section('meta_description',
    'Buy Duplex Stainless Steel S31803 pipes, tubes & fittings from Moksh Tubes LLP. High
    strength, corrosion resistance, and durability for harsh conditions.')

@section('meta_keywords',
    'Duplex Stainless Steel S31803, S31803 pipes, S31803 tubes, S31803 fittings,
    corrosion-resistant stainless steel, high strength duplex steel, Mokshtubes LLP, chemical processing steel, marine
    engineering steel, oil and gas stainless steel, desalination plant steel, Super Duplex alternative, stainless steel
    plates, stainless steel flanges')
@section('og_image', asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Duplex Stainless Steel S31803 <br> High Strength Corrosion Resistant Alloy</h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Duplex Stainless Steel S31803 is one of the most widely used duplex grades, combining exceptional
                        corrosion resistance, high strength, and excellent stress corrosion cracking resistance. Below is
                        the complete datasheet including composition, properties, heat treatment, and applications.</p>
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
                <h2>Super Duplex S31803 | Product Overview</h2>
            </div>

            <h3 class="h2 fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Duplex Stainless Steel S31803
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp') }}"
                        alt="Duplex Stainless Steel S31803" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> Duplex Stainless Steel S31803</strong> (commonly known as 2205
                            Duplex) is a ferritic<a href="{{ route('materials.austenitic-stainless-Steel') }}"> austenitic
                                stainless
                                steel </a>designed for industries that need high strength, chloride resistance, and
                            long-term
                            durability.
                        </p>
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            It contains approximately 22% Chromium, 5–6% Nickel, 3% Molybdenum, and Nitrogen, which boosts
                            its pitting, crevice, and stress corrosion cracking resistance far beyond conventional stainless
                            steels like 304 and 316.
                        </p>
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            At <strong><a href="{{ route('index') }}"> Moksh Tubes & Fittings LLP</a></strong>, we supply
                            S31803 in multiple forms including pipes, tubes, sheets, plates, coils, bars, fittings, flanges,
                            and custom-forged components.
                        </p>

                        <p class="fs-6 text-justify" style="text-align: justify;">
                            With its superior mechanical strength, Duplex S31803 is used in oil & gas, desalination, marine
                            engineering, chemical processing, pulp & paper, and structural applications.</br>
                            All materials are supplied with EN 10204 3.1 / 3.2 MTC, ensuring complete traceability and
                            compliance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Duplex S31803 Datasheet</h3>
            <p class="mb-3">
                Get the complete Duplex S31803 datasheet with chemical composition,
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
    {{-- end datasheet --}}

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
                                <tr class = "t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class = "t-row">
                                    <td>Grade</td>
                                    <td>Duplex S31803 / UNS S31803 / 2205 / EN 1.4462</td>
                                </tr>
                                <tr class = "t-row">
                                    <td>Type</td>
                                    <td>Duplex Stainless Steel (Austenitic–Ferritic)</td>
                                </tr>
                                <tr class = "t-row">
                                    <td>Typical Chemical Composition</td>
                                    <td>22% Cr, 5–6% Ni, 3% Mo, 0.14–0.20% N</td>
                                </tr>
                                <tr class = "t-row">
                                    <td>Conditions</td>
                                    <td>Annealed, Solution Annealed, Hot Rolled, Cold Worked</td>
                                </tr>
                                <tr class = "t-row">
                                    <td>Heat Treatment</td>
                                    <td>Solution Annealing</td>
                                </tr>
                                <tr class = "t-row">
                                    <td>Testing</td>
                                    <td>Tensile, Hardness, Microstructure, PMI, UT, IGC</td>
                                </tr>
                                <tr class = "t-row">
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
                <h2>Chemical Composition of Duplex Stainless Steel S31803</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Content (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>2.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>1.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>21.0 – 23.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>4.5 – 6.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>2.5 – 3.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen (N)</td>
                                    <td>0.08 – 0.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            Duplex S31803 achieves its strength and corrosion resistance through a balanced 50/50
                            ferrite–austenite microstructure.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Composition of Duplex S31803</h2>
            </div>
            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Duplex S31803
                    </h3>
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
                                    <td>Density</td>
                                    <td>7.80 g/cm³</td>
                                    <td>0.281 lb/in³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
                                    <td>200 GPa</td>
                                    <td>29,000 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Shear Modulus</td>
                                    <td>77 GPa</td>
                                    <td>11,200 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>1350–1450°C</td>
                                    <td>2460–2640°F</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>19 W/m·K</td>
                                    <td>–</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>0.90 µΩ·m</td>
                                    <td>–</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>480 J/kg·K</td>
                                    <td>–</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            Duplex S31803 has double the strength of 304/316 stainless steel and significantly higher
                            pitting resistance.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Heat Treatment of Duplex Stainless Steel S31803
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Heat Treatment Process</th>
                                    <th>Temperature (°C)</th>
                                    <th>Cooling Method</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Solution Annealing</td>
                                    <td>1020–1100°C</td>
                                    <td>Rapid water quenching</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>300–350°C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hot Working</td>
                                    <td>950–1200°C</td>
                                    <td>Water quench after forming</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            ⚠ Important: Duplex steels must be cooled quickly after heat treatment to prevent formation of
                            sigma
                            phase, which reduces corrosion resistance.
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
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties of Duplex Stainless Steel S31803</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Metric Value</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength (UTS)</td>
                            <td>620 MPa</td>
                            <td>High strength due to duplex microstructure</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2% Proof)</td>
                            <td>450 MPa</td>
                            <td>Typically higher than austenitic stainless steels (304/316)</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation (in 50 mm)</td>
                            <td>25–30%</td>
                            <td>Good ductility</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness (Brinell, HBW)</td>
                            <td>293 HB</td>
                            <td>Maximum allowable hardness</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness (Rockwell C)</td>
                            <td>30 HRC max</td>
                            <td>Conversion from Brinell</td>
                        </tr>
                        <tr class="t-row">
                            <td>Impact Toughness (Charpy V-notch)</td>
                            <td>80 J at room temp</td>
                            <td>Excellent toughness</td>
                        </tr>
                        <tr class="t-row">
                            <td>Modulus of Elasticity</td>
                            <td>200 GPa</td>
                            <td>Similar to stainless steels</td>
                        </tr>
                        <tr class="t-row">
                            <td>Poisson’s Ratio</td>
                            <td>0.3</td>
                            <td>Typical for steels</td>
                        </tr>
                        <tr class="t-row">
                            <td>Density</td>
                            <td>7.80 g/cm³</td>
                            <td>—</td>
                        </tr>
                        <tr class="t-row">
                            <td>Melting Range</td>
                            <td>1350–1450°C</td>
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
                                    <th style="width: 40%;">Product Form</th>
                                    <th>Size Range / Description</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Pipes & Tubes (Seamless/Welded)</td>
                                    <td>OD 6 mm – 600 mm; WT 1–50 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sheets & Plates</td>
                                    <td>1 mm – 100 mm (Width up to 3000 mm)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Coils & Strips</td>
                                    <td>0.5 mm – 8 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Round Bars</td>
                                    <td>10 mm – 450 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Flats, Square, Hex Bars</td>
                                    <td>Custom</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Forged Blocks, Rings, Bushings</td>
                                    <td>Custom per drawing</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pipe Fittings & Flanges</td>
                                    <td>According to ASME, ASTM, DIN, EN</td>
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
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>S31803, S32205</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>1.4462</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>A182 F51, A240 2205, A479</td>
                        </tr>
                        <tr class="t-row">
                            <td>WNR</td>
                            <td>1.4462</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SUS 329J3L</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>31803</td>
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
                <h2>Products in Duplex Stainless Steel S31803</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Duplex Stainless Steel S31803</strong> is available in a variety of mill
                        forms:
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
                    <h2 class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We supply Duplex Stainless Steel S31803 materials in accordance with the most stringent industry
                        standards: </h2>
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
                        <h3>Excellent resistance to chloride-induced stress corrosion cracking</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h3>Superior pitting and crevice corrosion resistance compared to austenitic stainless steels</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrow-up-square"></i></div>
                        <h3>Twice the yield strength of conventional austenitic stainless steels</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h3>Good weldability and formability</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h3>Durable performance in harsh environments</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cash-stack"></i></div>
                        <h3>Cost effective solution for many demanding applications</h3>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Duplex Stainless Steel S31803</h2>
                <p class="text-center pb-3"><strong class="text-dark">Duplex Stainless Steel S31803</strong> is widely
                    used across
                    multiple industries due to its excellent strength, corrosion resistance, and machinability:
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h3>Chemical Processing</h3>
                        <p>Reactors, heat exchangers, and piping systems for chemical processing equipment.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h3>Oil & Gas Industry</h3>
                        <p>Subsea equipment, risers, and pipelines for oil & gas applications.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h3>Marine Engineering</h3>
                        <p>Seawater systems and offshore structures with high corrosion resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h3>Desalination Plants</h3>
                        <p>Equipment used in desalination plants operating in saline environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h3>Pulp & Paper Industry</h3>
                        <p>Machinery and piping used in pulp and paper production processes.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                        <h3>Pressure Vessels & Storage Tanks</h3>
                        <p>Vessels and tanks used in corrosive conditions for safe storage and processing.</p>
                    </div>
                </div>
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
                        <h3>Seamless & Welded Pipes</h3>
                        <p>High quality Duplex S31803 pipes and tubes for industrial applications.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h3>Custom Fabrication</h3>
                        <p>Fittings, flanges, sheets, plates, and custom components per requirement.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h3>Quality Standards</h3>
                        <p>Manufactured to the highest standards for long-lasting industrial performance.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h3>Technical Support</h3>
                        <p>Experienced guidance for material selection and application across industries.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h3>Customer Satisfaction</h3>
                        <p>Commitment to quality assurance and long-term client satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Duplex Stainless Steel S31803 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹350 – ₹850 per kg
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active">
                                <h3>
                                    What is Duplex Stainless Steel S31803 used for?
                                </h3>
                            </div>
                            <div class="accord-content collapsed">
                                <p>
                                    It is widely used in chemical processing, marine engineering, desalination, and oil &
                                    gas applications.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>
                                    Is Duplex S31803 weldable?
                                </h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, but proper welding procedures and post-weld heat treatment are recommended for
                                    maintaining optimum corrosion resistance and mechanical strength.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>
                                    Can S31803 be used in seawater environments?
                                </h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, it provides excellent seawater corrosion resistance but is slightly less resistant
                                    than Super Duplex grades.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>
                                    How does S31803 compare to 2205?
                                </h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    S31803 is more cost-effective for general use but offers slightly lower corrosion
                                    resistance compared to Super Duplex 2205.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

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

    <section id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For inquiries, pricing, or customized Duplex Stainless Steel S31803 solutions, <strong>Moksh Tubes &
                        Fittings
                        LLP</strong> your reliable partner in Duplex Stainless Steel S31803.</p>
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
    <!-- FAQ Schema Markup -->
    <script type="application/ld+json">
    @verbatim
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is Duplex Stainless Steel S31803 used for?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It is widely used in chemical processing, marine engineering, desalination, and oil & gas applications."
      }
    },
    {
      "@type": "Question",
      "name": "Is Duplex S31803 weldable?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, but proper welding procedures and post-weld heat treatment are recommended for maintaining optimum corrosion resistance and mechanical strength."
      }
    },
    {
      "@type": "Question",
      "name": "Can S31803 be used in seawater environments?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, it provides excellent seawater corrosion resistance but is slightly less resistant than Super Duplex grades."
      }
    },
    {
      "@type": "Question",
      "name": "How does S31803 compare to 2205?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "S31803 is more cost-effective for general use but offers slightly lower corrosion resistance compared to Super Duplex 2205."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
