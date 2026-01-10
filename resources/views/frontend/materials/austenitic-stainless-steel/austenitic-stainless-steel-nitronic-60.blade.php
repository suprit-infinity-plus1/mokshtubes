@extends('layouts.master')

@section('title', 'Austenitic Stainless Steel Nitronic 60 | Wear Resistant SS')

@section('meta_description',
    'Austenitic Stainless Steel Nitronic 60 – premium alloy with superior wear and corrosion
    resistance for demanding industrial and engineering applications.')

@section('meta_keywords',
    'Austenitic Stainless Steel Nitronic 60, Nitronic 60 Stainless Steel Pipes, Nitronic 60
    Stainless Steel Tubes, Nitronic 60 Stainless Steel Fittings, Wear Resistant Nitronic 60, Corrosion Resistant Nitronic
    60, High Strength Nitronic 60, Industrial Nitronic 60 Stainless Steel, Marine Grade Nitronic 60, Engineering
    Applications Nitronic 60')
@section('og_image',
    asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-nitronic-60_10_11zon.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/austenitic-stainless-steel/austenitic-stainless-steel-nitronic-60_10_11zon.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Austenitic Stainless Steel Nitronic 60 <br> Wear Resistant Alloy</h1>
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
                <h2>Nitronic 60 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Nitronic 60 (UNS S21800)
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/austenitic-stainless-steel/austenitic-stainless-steel-nitronic-60_10_11zon.webp') }}"alt="Austenitic Stainless Steel Nitronic 60"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> Nitronic 60 stainless
                                steel <a href="{{ route('products') }}">products</a></strong> such as
                            pipes, tubes, sheets, plates, bars, and fittings.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Austenitic Stainless Steel Nitronic 50</strong>, is a
                            nitrogen-strengthened <a href="{{ route('materials.austenitic-stainless-Steel') }}">austenitic
                                stainless steel</a> known for its excellent corrosion resistance
                            combined with high strength and wear resistance. It exhibits outstanding performance in
                            aggressive environments, including oxidizing and mildly reducing conditions. This alloy is also
                            highly resistant to galling and seizing, making it ideal for valve and pump components, and
                            applications where friction and wear resistance are critical.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Austentic Stainles Steel Nitronic 60 Datasheet</h3>
            <p class="mb-3">
                Get the complete Austentic Stainles Steel Nitronic 60 datasheet with chemical composition,
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
                <h2>Technical Specifications – Nitronic 60 (UNS S21800)</h2>
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
                                    <td>Nitronic 60 Stainless Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS No.</td>
                                    <td>S21800</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Type</td>
                                    <td>Nitrogen-Strengthened Austenitic Stainless Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>20 – 22 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>8 – 10 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>0.20 – 0.40 %</td>
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
                                    <td>Nitrogen alloying & cold work</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wear / Galling Resistance</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Very Good (oxidizing environments)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Use</td>
                                    <td>Valves, Pumps, Wear-Resistant Parts</td>
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
                <h2>Chemical Composition of Nitronic 60</h2>
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
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>20.0 – 22.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>8.0 – 10.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>≤ 1.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 1.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen (N)</td>
                                    <td>0.20 – 0.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.035</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.03</td>
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
                <h2 class="fw-bold" style="color:#174268;">
                    Physical Properties of Nitronic 60
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
                            <td>0.286 lb/in³</td>
                            <td>7.92 g/cm³</td>
                        </tr>
                        <tr class="t-row">
                            <td>Melting Point</td>
                            <td>2500 – 2650 °F</td>
                            <td>1371 – 1454 °C</td>
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
                        Heat Treatment & Fabrication of Nitronic 60
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
                                    <td>1040 – 1120°C</td>
                                    <td>Restore corrosion resistance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cooling</td>
                                    <td>Water / Rapid Air</td>
                                    <td>Prevent carbide precipitation</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>300 – 400°C</td>
                                    <td>Reduce residual stresses</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Working</td>
                                    <td>—</td>
                                    <td>Increase strength & hardness</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Welding</td>
                                    <td>TIG / MIG / SMAW</td>
                                    <td>Good with proper fillers</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 Nitronic 60 retains excellent galling resistance even after welding, unlike many austenitic
                            stainless steels.
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
                    Mechanical Properties of Nitronic 60 (Annealed)
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
                            <td>550 – 725 MPa</td>
                            <td>690 – 930 MPa</td>
                            <td>585 – 830 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>310 – 520 MPa</td>
                            <td>485 – 795 MPa</td>
                            <td>345 – 550 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>30 – 50 %</td>
                            <td>15 – 35 %</td>
                            <td>30 – 45 %</td>
                        </tr>
                        <tr class="t-row">
                            <td>Brinell Hardness</td>
                            <td>160 – 210</td>
                            <td>200 – 270</td>
                            <td>170 – 230</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>85 – 100 B</td>
                            <td>95 – 110 B</td>
                            <td>90 – 105 B</td>
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
                <h2>Available Forms & Size Range – Nitronic 60</h2>
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
                            <td>OD 6 – 450 mm, WT 1 – 40 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>0.5 – 80 mm</td>
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
                            <td>CNC machined parts</td>
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
                <h2>International Standards & Equivalent Grades – Nitronic 60</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>S21800</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>Nitronic 60</td>
                        </tr>
                        <tr class="t-row">
                            <td>AISI</td>
                            <td>Nitronic 60</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>1.3964</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>X12CrMnNiN18-14-3</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SUS XM-19 (similar)</td>
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
                <h2>Products in Austenitic Stainless Steel Nitronic 60</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Austenitic Stainless Steel Nitronic 60</strong> is available in:
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
                        Austenitic Stainless Steel Nitronic 60 products are produced to the following global standards:
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


    <section id="uses"class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Exceptional resistance to wear, galling, and seizing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High corrosion resistance in oxidizing and mildly reducing environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Strong mechanical properties over a wide temperature range</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good weldability and formability</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for demanding applications with friction and corrosion challenges</h5>
                    </div>
                </div>
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Austenitic Stainless Steel Nitronic 60</h2>
                <p class="text-center pb-3"><strong class="text-dark">Austenitic Stainless Steel Nitronic 60</strong> is
                    widely used in applications where corrosion resistance and wear resistance are required, such as:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Valves and Pumps</h5>
                        <p>Components that resist galling, seizing, and wear under frictional forces.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Equipment exposed to oxidizing environments and mildly corrosive chemicals.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Marine Applications</h5>
                        <p>Parts exposed to seawater and marine atmospheres with high wear resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Power Generation</h5>
                        <p>Downhole tools and components requiring strength and corrosion resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Industrial Machinery</h5>
                        <p>Bearings, fasteners, and machinery parts where durability is critical.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Food and Pharmaceutical Industries</h5>
                        <p>Equipment requiring hygienic properties with corrosion resistance.</p>
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
                        <h5>Trusted supplier with consistent product quality</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Comprehensive inventory of Nitronic 60 products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Customized solutions tailored to client needs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Expert technical support and global reach</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to quality, timely delivery, and customer satisfaction</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>NITRONIC 60 PRICE PER KG (INDIA)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹480 – ₹850 per kg
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
                                    What is Nitronic 60 stainless steel and what makes it unique?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nitronic 60 is an austenitic stainless steel alloy known for its outstanding wear
                                    resistance, galling resistance, and corrosion resistance. Unlike conventional stainless
                                    steels, it performs exceptionally well in applications where friction, seizing, and
                                    pitting are major concerns.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    How does Nitronic 60 compare to Nitronic 50 or 316 stainless steel?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nitronic 60 offers superior resistance to galling and wear compared to Nitronic 50 and
                                    stainless steel 316. While 316 is widely used for general corrosion resistance, Nitronic
                                    60 is the preferred choice for valves, pumps, and high friction components due to its
                                    durability under sliding and abrasive conditions.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the common applications of Nitronic 60 stainless steel?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nitronic 60 is used in industries such as chemical processing, marine, power generation,
                                    and industrial machinery. Typical applications include valves, pumps, bearings,
                                    fasteners, downhole tools, and components exposed to seawater or high friction
                                    environments.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What Nitronic 60 products does MOKSH TUBES & FITTINGS LLP supply?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We manufacture and supply a full range of Nitronic 60 products, including seamless &
                                    welded pipes, tubes, sheets, plates, coils, bars, fittings, flanges, fasteners, and
                                    custom fabricated components, all produced to meet international standards.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Why choose MOKSH TUBES & FITTINGS LLP for Nitronic 60 stainless steel products?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, and exporter with a
                                    strong inventory, global certifications, customized solutions, and timely worldwide
                                    delivery. We specialize in high performance alloys like Nitronic 60, ensuring quality,
                                    durability, and customer satisfaction.
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
                    For more information or to request a quote for Nitronic 60 stainless steel products, contact<strong>
                        Moksh
                        Tubes &
                        Fittings LLP</strong> — your reliable partner for advanced alloy solutions.
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
      "name": "What is Nitronic 60 stainless steel and what makes it unique?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nitronic 60 is an austenitic stainless steel alloy known for its outstanding wear, galling, and corrosion resistance. Unlike conventional stainless steels, it performs exceptionally well in applications where friction, seizing, and pitting are major concerns."
      }
    },
    {
      "@type": "Question",
      "name": "How does Nitronic 60 compare to Nitronic 50 or 316 stainless steel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nitronic 60 offers superior resistance to galling and wear compared to Nitronic 50 and stainless steel 316. While 316 is popular for corrosion resistance, Nitronic 60 is preferred for valves, pumps, and high friction components due to its durability under sliding and abrasive conditions."
      }
    },
    {
      "@type": "Question",
      "name": "What are the common applications of Nitronic 60 stainless steel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nitronic 60 is used in chemical processing, marine, power generation, and industrial machinery industries. Typical applications include valves, pumps, bearings, fasteners, downhole tools, and components exposed to seawater or high friction environments."
      }
    },
    {
      "@type": "Question",
      "name": "What Nitronic 60 products does MOKSH TUBES & FITTINGS LLP supply?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We manufacture and supply a complete range of Nitronic 60 products including seamless and welded pipes, tubes, sheets, plates, coils, bars, fittings, flanges, fasteners, and custom fabricated components, all made to international standards."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for Nitronic 60 stainless steel products?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, and exporter with strong inventory, international certifications, and global delivery. We specialize in high performance alloys like Nitronic 60, ensuring quality, reliability, and customer satisfaction."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
