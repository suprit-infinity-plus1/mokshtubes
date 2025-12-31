@extends('layouts.master')

@section('title', 'Super Duplex 2507 – High Corrosion Resistance')

@section('meta_description',
    'Super Duplex Stainless Steel 2507 (S32750) – ultra corrosion-resistant, high-strength
    alloy for chemical, marine, and industrial applications.')

@section('meta_keywords',
    'Super Duplex Stainless Steel 2507, S32750, 2507 pipes, 2507 tubes, 2507 fittings,
    corrosion-resistant stainless steel, high strength super duplex steel, Mokshtubes LLP, chemical processing steel, marine
    engineering steel, oil and gas stainless steel, desalination plant steel, stainless steel plates, stainless steel
    flanges')
@section('og_image', asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>
                        Duplex 2507 Stainless Steel<br>
                        Ultra High Corrosion-Resistant Alloy

                    </h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Super Duplex Stainless Steel 2507 (UNS S32750) is a premium super duplex alloy offering ultra-high
                        corrosion resistance, outstanding strength, and exceptional resistance to pitting, crevice
                        corrosion, and chloride-induced stress corrosion cracking. Designed for highly aggressive
                        environments, 2507 is widely used in offshore platforms, desalination plants, chemical processing,
                        and marine applications where maximum durability and reliability are essential.

                    </p>
                    <!-- End extra content -->



                </div>
            </div>
        </div>
    </section>

    <style>
        .material-tabs {
            background: #ffffff;
            text-align: center;
            padding: 15px 0;
            border-bottom: 1px solid #e5e5e5;
            position: sticky;
            /* you missed this */
            top: 50px;
            /* and this */
            z-index: 1020;
        }

        .material-tabs a {
            margin: 0 14px;
            font-weight: 600;
            color: #1b3c61 !important;
            text-decoration: none;
            font-size: 16px;
            transition: 0.25s ease;
            display: inline-block;
        }

        .material-tabs a:hover {
            color: #db7227 !important;
            transform: translateY(-2px);
        }
    </style>
    <div class="sticky-top bg-white border-bottom material-tabs d-none d-md-block w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#composition">Chemical Composition</a> |
            <a href="#heat-treatment">Heat Treatment</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#price">Advantages</a> |
            <a href="#applications">Applications</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact us">Contact Us</a>
        </div>
    </div>

    <!--End breadcrumb area-->

    <section id="overview" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Super Duplex 2507 (S32750) | Product Overview</h2>
            </div>

            <h3 class="h2 fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Super Duplex Stainless Steel 2507
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp') }}"
                        alt="Super Duplex Stainless Steel 2507" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black">Super Duplex Stainless Steel 2507 (S32750)</strong> is a premium
                            duplex stainless steel grade with exceptional corrosion resistance and high mechanical strength.
                            Featuring high levels of chromium (25%), molybdenum (4%), and nitrogen, this alloy offers
                            unmatched resistance to pitting, crevice corrosion, and stress corrosion cracking, particularly
                            in chloride-rich and aggressive environments.
                        </p>

                        <p class="fs-6 text-justify" style="text-align: justify;">
                            <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a trusted supplier, exporter,
                            importer, and stockist of Super
                            Duplex Stainless Steel 2507 (UNS S32750 / ASTM A182 F53).
                            We offer Pipes & Tubes, Sheets, Plates, Coils, Bars, Pipe Fittings, Flanges, Fasteners, Welding
                            Rods, Wire Mesh, and custom-fabricated components.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Duplex 2507 Datasheet</h3>
            <p class="mb-3">
                Get the complete Duplex 2507 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="duplex_2507.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required class="form-control p-3"
                            placeholder="Enter your email address">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white"
                            style="background-color:#db7227; border-radius:8px;">
                            📥 Get Datasheet
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
                <h2>Chemical Composition of Super Duplex 2507</h2>
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
                                    <td>Chromium (Cr)</td>
                                    <td>24.0 – 26.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>6.0 – 8.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>3.0 – 5.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen (N)</td>
                                    <td>0.24 – 0.32</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>≤ 2.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 1.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.030</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.020</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>≤ 0.030</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            PREN ≥ 40 → Confirms Super Duplex category with excellent seawater resistance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Properties of Super Duplex Stainless Steel 2507</h2>
            </div>
            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Super Duplex Stainless
                        Steel 2507</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>7.80 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1390–1450°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
                                    <td>200 GPa (29,000 ksi)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity @100°C</td>
                                    <td>16–19 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>500 J/kg·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Response</td>
                                    <td>Slightly Magnetic</td>
                                </tr>
                            </tbody>
                        </table>

                        {{-- <p class="mt-3 text-center">
                            Duplex S31803 has double the strength of 304/316 stainless steel and significantly higher
                            pitting resistance.
                        </p> --}}
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Heat Treatment of Super Duplex Stainless Steel
                        2507</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Heat Treatment Process</th>
                                    <th>Temperature Range</th>
                                    <th>Cooling / Procedure</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Solution Annealing</td>
                                    <td>1020–1100°C</td>
                                    <td>Rapid water quench to restore duplex structure</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>350–450°C</td>
                                    <td>Air cool; short duration only to avoid sigma phase</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aging / Precipitation (Not applicable)</td>
                                    <td>—</td>
                                    <td>2507 cannot be precipitation hardened</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardening</td>
                                    <td>—</td>
                                    <td>Cannot be hardened by heat treatment (only cold working increases hardness)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Post-Weld Heat Treatment (PWHT)</td>
                                    <td>—</td>
                                    <td>Not recommended; control heat input during welding</td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <p class="mt-3 text-center">
                            ⚠ Important: Duplex steels must be cooled quickly after heat treatment to prevent formation of
                            sigma
                            phase, which reduces corrosion resistance.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            <th>Metric</th>
                            <th>Imperial</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Tensile Strength</td>
                            <td>750–850 MPa</td>
                            <td>108,700–123,300 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>550–650 MPa</td>
                            <td>79,800–94,300 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>≥ 25%</td>
                            <td>≥ 25%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness</td>
                            <td>≤ 92 HRB</td>
                            <td>≤ 92 HRB</td>
                        </tr>
                        <tr class="t-row">
                            <td>Impact Toughness</td>
                            <td>Excellent</td>
                            <td>Excellent</td>
                        </tr>
                        <tr class="t-row">
                            <td>PREN</td>
                            <td>≥ 40</td>
                            <td>≥ 40</td>
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
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">✔ Seamless Pipes</li>
                            <li class="list-group-item">✔ ERW &amp; EFW Welded Pipes</li>
                            <li class="list-group-item">✔ Capillary, U-Bend &amp; Heat Exchanger Tubes</li>
                            <li class="list-group-item">✔ Sheets &amp; Plates</li>
                            <li class="list-group-item">✔ Coils &amp; Strips</li>
                            <li class="list-group-item">✔ Round, Flat, Square &amp; Hex Bars</li>
                            <li class="list-group-item">✔ Pipe Fittings (Elbows, Tees, Reducers, Stub Ends, Caps)</li>
                            <li class="list-group-item">✔ Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)</li>
                            <li class="list-group-item">✔ Fasteners (Bolts, Nuts, Washers, Studs, Screws)</li>
                            <li class="list-group-item">✔ Custom Components based on drawing</li>
                        </ul>
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
                    <tbody>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>1.4410 (X2CrNiMoN25-7-4)</td>
                        </tr>
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>S32750</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM / ASME</td>
                            <td>A182 F53, A479, A276, A789, A790</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>W.Nr. 1.4410</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>ISO 15510 – X2CrNiMoN25-7-4</td>
                        </tr>
                        <tr class="t-row">
                            <td>BS (British Standard)</td>
                            <td>310S25 / 1.4410 Equivalent</td>
                        </tr>
                        <tr class="t-row">
                            <td>NORSOK</td>
                            <td>MDS D55</td>
                        </tr>
                        <tr class="t-row">
                            <td>API</td>
                            <td>API 5LD (for duplex/super duplex pipes)</td>
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

    <section id="products" class="sec-padd-top sec-padd-bottom bg-light">
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
        <div class="container text-center">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h3>Highest corrosion resistance among duplex stainless steels</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h3>Exceptional resistance to pitting and crevice corrosion, even in seawater and acidic
                            environments</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrow-up-square"></i></div>
                        <h3>Excellent resistance to chloride stress corrosion cracking</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h3>High mechanical strength (twice that of austenitic stainless steels)</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h3>Long service life in the most aggressive environments</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-wrench"></i></div>
                        <h3>Good weldability and formability</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section  id="applications"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Super Duplex Stainless Steel 2507 (S32750)</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h3>Offshore Oil & Gas Platforms</h3>
                        <p>Subsea equipment and offshore installations.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h3>Desalination Plants</h3>
                        <p>Components and seawater cooling systems.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h3>Chemical Processing</h3>
                        <p>Reactors, heat exchangers, and piping systems.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                        <h3>Marine Engineering</h3>
                        <p>Structural components in corrosive environments.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h3>Pressure Vessels & Flanges</h3>
                        <p>Equipment in corrosive conditions and chloride-rich fluids.</p>
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
                        <p>Mokshtubes Fittings & LLP offers Super Duplex 2507 in seamless pipes, welded pipes, tubes,
                            fittings, flanges, sheets, plates, and custom fabricated components with international quality
                            assurance.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h3>Custom Fabrication</h3>
                        <p>Our products adhere to strict quality standards to ensure long-term performance in the most
                            demanding environments.</p>
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
                <h2>Super Duplex 2507 Price in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹600 – ₹1,200 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies with size, thickness, product form & order volume.)
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
                <div class="col-lg-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active">
                                <h3>Why is Super Duplex 2507 (S32750) considered superior?</h3>
                            </div>
                            <div class="accord-content collapsed">
                                <p>Due to its high chromium, molybdenum, and nitrogen content, it offers the highest
                                    corrosion resistance among duplex stainless steels, especially in chloride environments.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Is S32750 weldable?</h3>
                            </div>
                            <div class="accord-content">
                                <p>Yes, but controlled heat input and post-weld heat treatment are essential to maintain
                                    corrosion resistance and mechanical properties.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Where is S32750 most commonly used?</h3>
                            </div>
                            <div class="accord-content">
                                <p>In offshore oil & gas, marine engineering, chemical processing, and desalination plants
                                    where maximum corrosion resistance is required.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Can S32750 be used in seawater applications?</h3>
                            </div>
                            <div class="accord-content">
                                <p>Yes — it is exceptionally resistant to seawater corrosion and chloride stress corrosion
                                    cracking, making it ideal for marine environments.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

    <section  id="contact us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For inquiries, pricing, or customized Super Duplex Stainless Steel 2507 solutions, <strong>Moksh Tubes &
                        Fittings
                        LLP</strong> is your reliable partner in Super Duplex Stainless Steel 2507.</p>
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
      "name": "Why is Super Duplex 2507 (S32750) considered superior?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Due to its high chromium, molybdenum, and nitrogen content, it offers the highest corrosion resistance among duplex stainless steels, especially in chloride environments."
      }
    },
    {
      "@type": "Question",
      "name": "Is S32750 weldable?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, but controlled heat input and post-weld heat treatment are essential to maintain corrosion resistance and mechanical properties."
      }
    },
    {
      "@type": "Question",
      "name": "Where is S32750 most commonly used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In offshore oil & gas, marine engineering, chemical processing, and desalination plants where maximum corrosion resistance is required."
      }
    },
    {
      "@type": "Question",
      "name": "Can S32750 be used in seawater applications?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes — it is exceptionally resistant to seawater corrosion and chloride stress corrosion cracking, making it ideal for marine environments."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
