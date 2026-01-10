@extends('layouts.master')

@section('title', 'Austenitic Stainless Steel 310 | High Temp Resistance')

@section('meta_description',
    'Austenitic Stainless Steel 310 – high-grade alloy offering excellent high temperature and
    corrosion resistance for industrial and furnace applications.')

@section('meta_keywords',
    'Austenitic Stainless Steel 310, Stainless Steel 310 Pipes, Stainless Steel 310 Tubes,
    Stainless Steel 310 Fittings, High Temperature Stainless Steel 310, Corrosion Resistant Stainless Steel 310, Heat
    Resistant Stainless Steel 310, Industrial Stainless Steel 310, Furnace Grade Stainless Steel, Thermal Processing
    Stainless Steel')
@section('og_image', asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-310.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/austenitic-stainless-steel/austenitic-stainless-steel-310.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Austenitic Stainless Steel 310 <br> High Temperature Alloy</h1>
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
                <h2>Stainless Steel 310 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Austenitic Stainless Steel 310
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-310.webp') }}"alt="Austenitic Stainless Steel 310"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> Austenitic Stainless
                                Steel 310 products,</strong> including
                            pipes,<a href="{{ route('products.pipes-tubes') }}"> tubes</a>, sheets, plates, bars, and
                            fittings.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Austenitic Stainless Steel 310</strong>, is a high chromium-nickel
                            alloy designed for excellent high-temperature resistance and corrosion resistance. With
                            approximately 25% chromium and 20% nickel content, SS 310 offers superior oxidation resistance,
                            thermal stability, and strength at elevated temperatures up to 1100°C (2012°F). This alloy is
                            widely used in environments where thermal shock, oxidation, and scaling resistance are critical.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Austentic Stainles Steel 310 Datasheet</h3>
            <p class="mb-3">
                Get the complete Austentic Stainles Steel 310 datasheet with chemical composition,
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
                <h2>Technical Specifications – Stainless Steel 310 (UNS S31000 / EN 1.4841)</h2>
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
                                    <td>Material</td>
                                    <td>Austenitic Stainless Steel 310</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS No.</td>
                                    <td>S31000</td>
                                </tr>
                                <tr class="t-row">
                                    <td>EN / DIN</td>
                                    <td>1.4841</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Type</td>
                                    <td>High Chromium–Nickel Austenitic SS</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>24 – 26 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>19 – 22 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Properties</td>
                                    <td>Non-Magnetic</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatable</td>
                                    <td>❌ No</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Strengthening Method</td>
                                    <td>Cold Working</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxidation Resistance</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Maximum Service Temperature</td>
                                    <td>~1100 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Use</td>
                                    <td>Furnace & High-Temperature Equipment</td>
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
                <h2>Chemical Composition of Stainless Steel 310</h2>
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
                                    <td>≤ 0.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>24.0 – 26.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>19.0 – 22.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>≤ 2.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 1.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.040</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.030</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen (N)</td>
                                    <td>≤ 0.10</td>
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
                <h2 class="fw-bold" style="color:#174268;">
                    Physical Properties of Stainless Steel 310
                </h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Imperial Units</th>
                            <th>Metric Units</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Density</td>
                            <td>0.29 lb/in³</td>
                            <td>7.9 g/cm³</td>
                        </tr>
                        <tr class="t-row">
                            <td>Melting Point</td>
                            <td>2550 – 2650 °F</td>
                            <td>1399 – 1454 °C</td>
                        </tr>
                        <tr class="t-row">
                            <td>Modulus of Elasticity</td>
                            <td>28 × 10³ ksi</td>
                            <td>193 GPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Poisson’s Ratio</td>
                            <td>0.29</td>
                            <td>—</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Heat Treatment -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color:#db7227;">
                        Heat Treatment & Fabrication of Stainless Steel 310
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
                                    <td>Solution Annealing</td>
                                    <td>1040 – 1120 °C</td>
                                    <td>Restore corrosion resistance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cooling</td>
                                    <td>Water / Rapid Air</td>
                                    <td>Maintain austenitic structure</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>300 – 450 °C</td>
                                    <td>Reduce residual stresses</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Working</td>
                                    <td>—</td>
                                    <td>Increase strength</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Welding</td>
                                    <td>TIG / MIG / SMAW</td>
                                    <td>Excellent weldability</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 SS 310 is preferred over SS 309 and SS 304 for continuous high-temperature oxidation service.
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
                    Mechanical Properties of Stainless Steel 310 (Annealed)
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Annealed</th>
                            <th>Cold-Drawn</th>
                            <th>Sheet</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength</td>
                            <td>520 – 655 MPa</td>
                            <td>585 – 795 MPa</td>
                            <td>550 – 725 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>205 – 345 MPa</td>
                            <td>310 – 515 MPa</td>
                            <td>240 – 450 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>35 – 55 %</td>
                            <td>20 – 40 %</td>
                            <td>30 – 50 %</td>
                        </tr>
                        <tr class="t-row">
                            <td>Brinell Hardness</td>
                            <td>140 – 190</td>
                            <td>170 – 220</td>
                            <td>150 – 200</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>85 – 95 B</td>
                            <td>95 – 105 B</td>
                            <td>90 – 100 B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="available-forms">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forms & Size Range – Stainless Steel 310</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product Form</th>
                            <th>Size Range</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Pipes & Tubes</td>
                            <td>OD 6 – 600 mm, WT 1 – 40 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>0.5 – 100 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Coils & Strips</td>
                            <td>0.1 – 6 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Bars (Round / Flat / Hex)</td>
                            <td>Ø 6 – 350 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Wire & Mesh</td>
                            <td>Standard & custom sizes</td>
                        </tr>
                        <tr class="t-row">
                            <td>Fittings & Flanges</td>
                            <td>ASME / DIN standards</td>
                        </tr>
                        <tr class="t-row">
                            <td>Custom Components</td>
                            <td>As per drawing</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- International Standards -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades – SS 310</h2>
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
                            <td>S31000</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>A240, A312, A276</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASME</td>
                            <td>SA240, SA312, SA276</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>1.4841</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>X15CrNiSi25-21</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SUS 310</td>
                        </tr>
                        <tr class="t-row">
                            <td>BS</td>
                            <td>310S24</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>X15CrNiSi25-21</td>
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
                <h2>Products in Austenitic Stainless Steel 310</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Austenitic Stainless Steel 310</strong> is available in:
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
                        Austenitic Stainless Steel 310 products are produced to the following global standards:
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
                        <h5>Excellent resistance to oxidation and scaling at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High thermal stability and mechanical strength at high temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good resistance to thermal shock and corrosion</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent weldability and fabrication properties</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for harsh chemical and oxidizing environments</h5>
                    </div>
                </div>
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Austenitic Stainless Steel 310</h2>
                <p class="text-center pb-3"><strong class="text-dark">Austenitic Stainless Steel 310</strong> is widely
                    used in high-temperature environments requiring oxidation resistance and durability, including:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Heat Treatment Furnaces & Kilns</h5>
                        <p>Furnace parts, heat exchangers, and radiant tubes operating under thermal cycling and scaling
                            conditions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Petrochemical & Chemical Industry</h5>
                        <p>Equipment exposed to oxidizing atmospheres, including reactor vessels and heat exchangers.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Power Generation</h5>
                        <p>Gas turbine components, boilers, and superheaters requiring high strength and oxidation
                            resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Automotive Industry</h5>
                        <p>Exhaust systems and mufflers subjected to high temperature and corrosive gases.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Food Processing & Baking Equipment</h5>
                        <p>Ovens, baking trays, and food processing machinery requiring heat resistance and corrosion
                            resistance.</p>
                    </div>
                </div>
                {{--
               <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Household Appliances</h5>
                        <p>Sinks, cookware, and kitchen equipment for corrosion resistance and durability.</p>
                    </div>
                </div> --}}

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
                        <h5>Leading supplier of high-quality Austenitic Stainless Steel 310 products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Wide inventory and ability to supply custom sizes and specifications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Commitment to international quality and standards compliance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Strong technical support and customer service</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Competitive pricing and reliable global delivery</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>STAINLESS STEEL 310 PRICE PER KG (INDIA)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹420 – ₹820 per kg
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
                            <div class="accord-btn">
                                <h4>
                                    What is Austenitic Stainless Steel 310 and why is it used in high-temperature
                                    applications?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Austenitic Stainless Steel 310 is a high chromium (24–26%) and nickel (19–22%) alloy
                                    designed for exceptional oxidation and corrosion resistance at elevated temperatures. It
                                    can withstand temperatures up to 1100°C (2012°F), making it ideal for furnaces, kilns,
                                    and heat treatment equipment where thermal shock and scaling resistance are critical.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the key properties of Stainless Steel 310?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>SS 310 offers:</p>
                                <ul>
                                    <li>Excellent oxidation resistance at high temperatures.</li>
                                    <li>High thermal stability and mechanical strength.</li>
                                    <li>Good resistance to thermal shock and scaling.</li>
                                    <li>Superior corrosion resistance in harsh chemical environments.</li>
                                    <li>Good weldability and fabrication properties.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Where is Stainless Steel 310 commonly used?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>Stainless Steel 310 is widely used in industries requiring heat and corrosion resistance,
                                    including:</p>
                                <ul>
                                    <li>Heat treatment furnaces, kilns, and radiant tubes.</li>
                                    <li>Petrochemical and chemical processing equipment.</li>
                                    <li>Power generation boilers, superheaters, and turbines.</li>
                                    <li>Automotive exhaust systems and mufflers.</li>
                                    <li>Food processing and baking equipment.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    How is Stainless Steel 310 different from Stainless Steel 309 and 304?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    While SS 304 and 309 offer good corrosion resistance, Stainless Steel 310 contains
                                    higher chromium and nickel levels, providing superior oxidation resistance and
                                    mechanical strength at extreme temperatures. SS 310 is the preferred choice for
                                    continuous high heat operations where SS 304 or 309 may not perform as effectively.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Who is the leading supplier of Stainless Steel 310 in India?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted manufacturer, supplier, exporter, importer, and
                                    stockist of Stainless Steel 310 products. The company provides pipes, tubes, sheets,
                                    plates, bars, flanges, fittings, and fasteners, adhering to international standards,
                                    custom requirements, and global delivery timelines. With competitive pricing and strong
                                    technical support, Moksh Tubes & Fittings LLP is a reliable partner for industries
                                    worldwide.
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
                    For more details or to request a quote for Austenitic Stainless Steel 310 products
                    contact<strong> Moksh Tubes &
                        Fittings
                        LLP</strong> — your dependable partner for premium stainless steel solutions.
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
      "name": "What is Austenitic Stainless Steel 310 and why is it used in high-temperature applications?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Austenitic Stainless Steel 310 is a high chromium (24–26%) and nickel (19–22%) alloy designed for exceptional oxidation and corrosion resistance at elevated temperatures. It can withstand temperatures up to 1100°C (2012°F), making it ideal for furnaces, kilns, and heat treatment equipment where thermal shock and scaling resistance are critical."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key properties of Stainless Steel 310?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "SS 310 offers excellent oxidation resistance at high temperatures, high thermal stability and mechanical strength, good resistance to thermal shock and scaling, superior corrosion resistance in harsh chemical environments, and good weldability and fabrication properties."
      }
    },
    {
      "@type": "Question",
      "name": "Where is Stainless Steel 310 commonly used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Stainless Steel 310 is widely used in heat treatment furnaces, kilns, and radiant tubes, petrochemical and chemical processing equipment, power generation boilers, superheaters, and turbines, automotive exhaust systems and mufflers, and food processing and baking equipment."
      }
    },
    {
      "@type": "Question",
      "name": "How is Stainless Steel 310 different from Stainless Steel 309 and 304?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "While SS 304 and 309 offer good corrosion resistance, Stainless Steel 310 contains higher chromium and nickel levels, providing superior oxidation resistance and mechanical strength at extreme temperatures. SS 310 is the preferred choice for continuous high heat operations where SS 304 or 309 may not perform as effectively."
      }
    },
    {
      "@type": "Question",
      "name": "Who is the leading supplier of Stainless Steel 310 in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Moksh Tubes & Fittings LLP is a trusted manufacturer, supplier, exporter, importer, and stockist of Stainless Steel 310 products. The company provides pipes, tubes, sheets, plates, bars, flanges, fittings, and fasteners, adhering to international standards, custom requirements, and global delivery timelines. With competitive pricing and strong technical support, Moksh Tubes & Fittings LLP is a reliable partner for industries worldwide."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
