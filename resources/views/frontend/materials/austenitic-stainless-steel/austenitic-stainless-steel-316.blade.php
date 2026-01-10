@extends('layouts.master')

@section('title', 'Austenitic Stainless Steel 316 | Marine Grade SS')

@section('meta_description',
    'Austenitic Stainless Steel 316 – marine-grade alloy offering superior corrosion resistance
    for marine, chemical, and food processing applications.')

@section('meta_keywords',
    'Austenitic Stainless Steel 316, Stainless Steel 316 Pipes, Stainless Steel 316 Tubes,
    Stainless Steel 316 Fittings, Marine Grade Stainless Steel 316, Corrosion Resistant Stainless Steel 316, Chemical
    Processing Stainless Steel 316, Food Grade Stainless Steel 316, Industrial Stainless Steel 316, High Strength Stainless
    Steel 316')
@section('og_image', asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-316.webp'))
@section('og_type', 'article')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/austenitic-stainless-steel/austenitic-stainless-steel-316.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Austenitic Stainless Steel 316 <br> Marine Corrosion-Resistant Alloy</h1>
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
                <h2>Stainless Steel 316 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Austenitic Stainless Steel 316
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-316.webp') }}"alt="Austenitic-Stainless-Steel 310"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> Austenitic Stainless
                                Steel 316 products</strong> including
                            <a href="{{ route('products.pipes-tubes') }}">pipes & tubes</a>, sheets, plates, bars, and
                            fittings.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Austenitic Stainless Steel 316</strong>, is a versatile austenitic
                            alloy with enhanced corrosion resistance due to its molybdenum content, making it superior to
                            304 <a href="{{ route('materials.austenitic-stainless-Steel') }}">stainless steel</a> in
                            chloride environments. It exhibits excellent resistance to pitting and
                            crevice corrosion, good mechanical properties, and outstanding weldability. SS 316 is widely
                            used in marine, chemical, pharmaceutical, and food processing industries where durability and
                            corrosion resistance are critical.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Austentic Stainles Steel 316 Datasheet</h3>
            <p class="mb-3">
                Get the complete Austentic Stainles Steel 316 datasheet with chemical composition,
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
                <h2>Technical Specifications – Stainless Steel 316 (UNS S31600 / EN 1.4401)</h2>
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
                                    <td>Austenitic Stainless Steel 316</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS No.</td>
                                    <td>S31600</td>
                                </tr>
                                <tr class="t-row">
                                    <td>EN / DIN</td>
                                    <td>1.4401</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Type</td>
                                    <td>Molybdenum-Bearing Austenitic SS</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>16 – 18 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>10 – 14 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>2 – 3 %</td>
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
                                    <td>Pitting / Crevice Resistance</td>
                                    <td>Very Good</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chloride Resistance</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Use</td>
                                    <td>Marine, Chemical, Hygienic Applications</td>
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
                <h2>Chemical Composition of Stainless Steel 316</h2>
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
                                    <td>≤ 0.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>16.0 – 18.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>10.0 – 14.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>2.0 – 3.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>≤ 2.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 0.75</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.045</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.03</td>
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
                    Physical Properties of Stainless Steel 316
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
                            <td>0.289 lb/in³</td>
                            <td>8.0 g/cm³</td>
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
                            <td>0.27</td>
                            <td>—</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Heat Treatment -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color:#db7227;">
                        Heat Treatment & Fabrication of Stainless Steel 316
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
                            📌 SS 316 performs significantly better than SS 304 in chloride-rich and marine environments.
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
                    Mechanical Properties of Stainless Steel 316 (Annealed)
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
                            <td>485 – 620 MPa</td>
                            <td>550 – 760 MPa</td>
                            <td>515 – 690 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>205 – 310 MPa</td>
                            <td>310 – 485 MPa</td>
                            <td>240 – 415 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>40 – 60 %</td>
                            <td>20 – 40 %</td>
                            <td>35 – 55 %</td>
                        </tr>
                        <tr class="t-row">
                            <td>Brinell Hardness</td>
                            <td>120 – 180</td>
                            <td>160 – 210</td>
                            <td>140 – 190</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>80 – 95 B</td>
                            <td>90 – 105 B</td>
                            <td>85 – 95 B</td>
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
                <h2>Available Forms & Size Range – Stainless Steel 316</h2>
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
                            <td>OD 6 – 600 mm, WT 0.8 – 40 mm</td>
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
                <h2>International Standards & Equivalent Grades – SS 316</h2>
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
                            <td>S31600</td>
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
                            <td>1.4401</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>X5CrNiMo17-12-2</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SUS 316</td>
                        </tr>
                        <tr class="t-row">
                            <td>BS</td>
                            <td>316S31</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>X5CrNiMo17-12-2</td>
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

    <section id="products"class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Austenitic Stainless Steel 316</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Austenitic Stainless Steel 316</strong> is available in:
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
                        Austenitic Stainless Steel 316 products are produced to the following global standards:
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
                        <h5>Excellent resistance to chloride corrosion and pitting</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good mechanical properties and toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent weldability and formability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High resistance to oxidation at elevated temperatures</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Biocompatible and suitable for hygienic environments</h5>
                    </div>
                </div>
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Austenitic Stainless Steel 316</h2>
                <p class="text-center pb-3"><strong class="text-dark">Austenitic Stainless Steel 316</strong> is
                    extensively used in environments exposed to harsh corrosion and aggressive chemicals, including:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine Applications</h5>
                        <p>Boat fittings, propeller shafts, and marine fasteners due to superior resistance to seawater
                            corrosion.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical & Petrochemical Industry</h5>
                        <p>Storage tanks, piping, and heat exchangers handling acidic and chloride-containing chemicals.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Food & Beverage Processing</h5>
                        <p>Food handling equipment, brewing tanks, and dairy industry machinery requiring hygiene and
                            corrosion resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Pharmaceutical Industry</h5>
                        <p>Processing equipment and sanitary fittings where cleanliness and corrosion resistance are
                            critical.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Medical Instruments</h5>
                        <p>Surgical tools and implants due to excellent biocompatibility and corrosion resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Architectural & Construction</h5>
                        <p>Cladding, handrails, and structural components in corrosive urban or coastal environments.</p>
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
                        <h5>Trusted supplier of premium-grade Austenitic Stainless Steel 316 products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Comprehensive stock with custom size and specification availability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Adherence to international quality standards and certifications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Experienced technical support for material selection and applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Competitive pricing with reliable global logistics</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>STAINLESS STEEL 316 PRICE PER KG (INDIA)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹350 – ₹650 per kg
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
    <section id="faq"class="faq-content-area sec-padd2">
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
                                    What is Austenitic Stainless Steel 316 and what makes it different from 304 stainless
                                    steel?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Austenitic Stainless Steel 316 is a molybdenum-alloyed stainless steel that offers
                                    superior resistance to chloride corrosion, pitting, and crevice attack compared to
                                    Stainless Steel 304. Its enhanced durability makes it the preferred choice for marine,
                                    chemical, and pharmaceutical industries where exposure to aggressive environments is
                                    common.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the key properties of Stainless Steel 316?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>SS 316 provides:</p>
                                <ul>
                                    <li>Excellent resistance to chlorides, acids, and harsh chemicals.</li>
                                    <li>Good mechanical strength and toughness across temperature ranges.</li>
                                    <li>Outstanding weldability and formability.</li>
                                    <li>Oxidation resistance at elevated temperatures.</li>
                                    <li>Biocompatibility, making it safe for medical and food applications.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Where is Stainless Steel 316 commonly used?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>Stainless Steel 316 is widely used in industries requiring high corrosion resistance and
                                    hygiene, including:</p>
                                <ul>
                                    <li>Marine applications (boat fittings, propeller shafts, seawater-exposed fasteners).
                                    </li>
                                    <li>Chemical and petrochemical processing (storage tanks, pipelines, heat exchangers).
                                    </li>
                                    <li>Food & beverage industry (dairy equipment, brewing tanks, hygienic machinery).</li>
                                    <li>Pharmaceutical industry (sanitary fittings and processing equipment).</li>
                                    <li>Medical instruments (surgical tools, implants, biocompatible devices).</li>
                                    <li>Construction (cladding, handrails, coastal structures).</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Why is Stainless Steel 316 preferred for marine and chemical applications?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    SS 316 contains 2–3% molybdenum, which gives it superior resistance to chloride-induced
                                    corrosion and pitting compared to 304 stainless steel. This makes it the ideal material
                                    for seawater environments, acidic solutions, and aggressive chemical conditions,
                                    ensuring durability and long service life.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Who is the best supplier of Stainless Steel 316 in India?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a leading manufacturer, supplier, exporter, importer, and
                                    stockist of Stainless Steel 316 products. They provide a wide range of pipes, tubes,
                                    sheets, plates, bars, flanges, fittings, and fasteners in compliance with international
                                    standards. With custom sizing, global delivery, competitive pricing, and strong
                                    technical support, Moksh Tubes & Fittings LLP is a trusted partner for industries
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
                    For inquiries or quotations related to Austenitic Stainless Steel 316 products, contact<strong> Moksh
                        Tubes &
                        Fittings
                        LLP</strong> — your reliable partner for stainless steel solutions.
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
      "name": "What is Austenitic Stainless Steel 316 and what makes it different from 304 stainless steel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Austenitic Stainless Steel 316 is a molybdenum-alloyed stainless steel that offers superior resistance to chloride corrosion, pitting, and crevice attack compared to Stainless Steel 304. Its enhanced durability makes it the preferred choice for marine, chemical, and pharmaceutical industries where exposure to aggressive environments is common."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key properties of Stainless Steel 316?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "SS 316 provides excellent resistance to chlorides, acids, and harsh chemicals, good mechanical strength and toughness across temperature ranges, outstanding weldability and formability, oxidation resistance at elevated temperatures, and biocompatibility suitable for medical and food applications."
      }
    },
    {
      "@type": "Question",
      "name": "Where is Stainless Steel 316 commonly used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Stainless Steel 316 is widely used in marine applications such as boat fittings and propeller shafts, chemical and petrochemical processing equipment, food and beverage industry machinery, pharmaceutical processing systems, medical instruments, and construction projects in coastal environments."
      }
    },
    {
      "@type": "Question",
      "name": "Why is Stainless Steel 316 preferred for marine and chemical applications?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "SS 316 contains 2–3% molybdenum, which provides superior resistance to chloride-induced corrosion and pitting compared to 304 stainless steel. This makes it ideal for seawater environments, acidic solutions, and aggressive chemical conditions, ensuring long service life and structural integrity."
      }
    },
    {
      "@type": "Question",
      "name": "Who is the best supplier of Stainless Steel 316 in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Moksh Tubes & Fittings LLP is a leading manufacturer, supplier, exporter, importer, and stockist of Stainless Steel 316 products. They offer pipes, tubes, sheets, plates, bars, flanges, fittings, and fasteners that meet international standards. With custom sizing, competitive pricing, technical support, and reliable global delivery, Moksh Tubes & Fittings LLP serves diverse industrial needs worldwide."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
