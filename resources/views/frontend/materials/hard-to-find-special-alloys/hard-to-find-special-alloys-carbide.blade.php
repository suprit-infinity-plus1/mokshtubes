@extends('layouts.master')

@section('title', 'Carbide Alloys for Superior Hardness & Precision')
@section('meta_description',
    'Carbide delivers exceptional hardness, wear resistance & precision—ideal for cutting
    tools, machinery & demanding industrial applications.')
@section('meta_keywords',
    'Carbide, high hardness carbide, wear resistant carbide, precision cutting tools, industrial
    carbide, high stress applications, durable carbide')
@section('og_image',
    asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-carbide.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-carbide.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Carbide Alloys <br> High Hardness & Precision</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Carbide Alloys are ultra-hard engineering materials known for their exceptional wear resistance,
                        high strength, and dimensional precision. They maintain hardness even at elevated temperatures,
                        making them ideal for cutting tools, dies, molds, wear parts, and precision components used in
                        demanding industrial and manufacturing applications.

                    </p>
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
                Introduction to Carbide Alloys – Tungsten, Titanium & Tantalum
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-carbide.webp') }}"
                        alt="Carbide alloys" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            exporter, and supplier of Carbide Alloys, offering a wide range of <a
                                href="{{ route('products') }}">products</a> including Tungsten
                            Carbide (WC), Titanium Carbide (TiC), Tantalum Carbide (TaC), and specialty carbide-based tools
                            and components. Our range includes rods, strips, dies, nozzles, inserts, buttons, rings, wear
                            parts, and custom-engineered <a
                                href="{{ route('materials.hard-To-Find-Special-Alloys') }}">carbide</a> components
                            designed to withstand extreme wear, abrasion,
                            and thermal stress.

                        <p> <strong class="text-black"><a
                                    href="{{ route('materials.hard-To-Find-Special-Alloys') }}">Carbide
                                    Alloys</a></strong> are hard, wear-resistant materials made by
                            combining carbide particles with metallic binders like cobalt or nickel. These alloys offer
                            exceptional hardness, high-temperature resistance, and excellent dimensional stability, making
                            them ideal for demanding industrial applications including metal cutting, mining, oil & gas,
                            aerospace, and wear protection systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hard To Find Special Alloy Carbide Datasheet</h3>
            <p class="mb-3">
                Get the complete Hard To Find Special Alloy Carbide datasheet with chemical composition,
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
                <h2>Carbide Alloys Specifications</h2>
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
                                    <td>Hard Metal / Cemented Carbide</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Base Carbides</td>
                                    <td>WC, TiC, TaC</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Binder Metals</td>
                                    <td>Cobalt (Co), Nickel (Ni)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness Range</td>
                                    <td>80 – 92 HRC</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Density Range</td>
                                    <td>14.5 – 15.8 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wear Resistance</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Resistance</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Compressive Strength</td>
                                    <td>Very High</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Machinability</td>
                                    <td>Precision grinding only</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Property</td>
                                    <td>Non-magnetic (WC–Ni grades)</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            👉 Carbide alloys are engineered materials where hardness and wear resistance are achieved
                            through sintering, not conventional heat treatment.
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
                <h2>Chemical Composition of Carbide Alloys (WC–Co Typical)</h2>
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
                                    <td>Tungsten (W)</td>
                                    <td>80.0 – 97.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>4.0 – 6.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt (Co)</td>
                                    <td>3.0 – 20.0 (Binder)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium (Ti)</td>
                                    <td>Optional (TiC grades)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tantalum (Ta)</td>
                                    <td>Optional (TaC grades)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Niobium (Nb)</td>
                                    <td>Optional</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>Optional binder (corrosion-resistant grades)</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 Composition varies by grade and application (WC, TiC, TaC-based systems).
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
                <h2 class="fw-bold" style="color:#174268;">
                    Technical Composition of Tungsten Carbide (WC–Co)
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Tungsten Carbide (WC–Co)
                    </h3>
                    <div class="table-responsive">
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
                                    <td>—</td>
                                    <td>15.6 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>5742 °F (Sublimation)</td>
                                    <td>3170 °C (Sublimation)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (Tension)</td>
                                    <td>~59 × 10³ ksi</td>
                                    <td>~407 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (Compression)</td>
                                    <td>~59 × 10³ ksi</td>
                                    <td>~407 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (Torsion)</td>
                                    <td>~20 × 10³ ksi</td>
                                    <td>~138 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.22</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>Not applicable</td>
                                    <td>Not applicable</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Processing -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color:#db7227;">
                        Heat Treatment & Processing of Carbide Alloys
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
                                    <td>Powder Mixing & Milling</td>
                                    <td>—</td>
                                    <td>Uniform carbide–binder distribution</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Isostatic Pressing</td>
                                    <td>—</td>
                                    <td>Shape formation</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Liquid Phase Sintering</td>
                                    <td>1350 – 1500 °C</td>
                                    <td>Full densification</td>
                                </tr>
                                <tr class="t-row">
                                    <td>HIP (Hot Isostatic Pressing)</td>
                                    <td>1350 – 1450 °C</td>
                                    <td>Removes internal porosity</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grinding & Polishing</td>
                                    <td>—</td>
                                    <td>Final precision dimensions</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Coating (Optional)</td>
                                    <td>PVD / CVD</td>
                                    <td>TiN, TiCN, AlTiN</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 Carbide alloys cannot be hardened by conventional heat treatment; properties are achieved
                            during sintering and binder control.
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
                    Mechanical Properties of Carbide Alloys
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Typical Value</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength</td>
                            <td>2070 – 2760 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>1720 – 2410 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>0.1 – 1 %</td>
                        </tr>
                        <tr class="t-row">
                            <td>Brinell Hardness</td>
                            <td>1500 – 2200 HB</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>80 – 90 HRC</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="available-forms">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – Carbide Alloys</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product Form</th>
                            <th>Typical Size Range</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Solid Rods</td>
                            <td>Ø1 – Ø60 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Coolant Hole Rods</td>
                            <td>Ø3 – Ø40 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Plates & Strips</td>
                            <td>Thickness 1 – 50 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Cutting Inserts</td>
                            <td>ISO standard sizes</td>
                        </tr>
                        <tr class="t-row">
                            <td>Dies & Punches</td>
                            <td>As per drawing</td>
                        </tr>
                        <tr class="t-row">
                            <td>Wear Parts</td>
                            <td>Custom sizes</td>
                        </tr>
                        <tr class="t-row">
                            <td>Nozzles & Rings</td>
                            <td>Ø5 – Ø300 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Mining Buttons</td>
                            <td>Ø6 – Ø40 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Custom Components</td>
                            <td>CNC / Precision grinding finished</td>
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
                <h2>International Standards & Equivalent Grades – Carbide Alloys</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>ISO 513</td>
                            <td>Application-based carbide grades</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO 3297</td>
                            <td>Hardmetal materials</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM B777</td>
                            <td>Tungsten heavy alloys</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN ISO 3327</td>
                            <td>Cemented carbides</td>
                        </tr>
                        <tr class="t-row">
                            <td>ANSI</td>
                            <td>Tool insert classification</td>
                        </tr>
                        <tr class="t-row">
                            <td>GB/T 13864</td>
                            <td>Chinese carbide standard</td>
                        </tr>
                        <tr class="t-row">
                            <td>NACE MR0175</td>
                            <td>WC–Ni corrosion-resistant grades</td>
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
                <h2>Products in Carbide Alloys</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Carbide Alloys</strong> is commonly supplied as:
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
                        We supply Carbide Alloys materials in accordance with the most stringent industry standards: </p>
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
                        <h5>Extremely high hardness and wear resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent heat resistance and thermal stability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High compressive strength and rigidity</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Resistance to corrosion (in WC-Ni grades)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long service life under extreme conditions</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Carbide Alloys</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Tooling & Machining</h5>
                        <p>Cutting tools (turning, milling, drilling).</p>
                        <p>Reamers, end mills, and wear blades.</p>
                        <p>Stamping and punching dies.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Mining & Construction</h5>
                        <p>Button bits, drill rods, chisel tools.</p>
                        <p>Road planning picks, tunneling bits.</p>
                        <p>Oil well drilling heads and downhole tools.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Industrial Wear Parts</h5>
                        <p>Pump sleeves, seal rings, guide bushings.</p>
                        <p>Abrasive-resistant liners, wear blocks.</p>
                        <p>Valves, plungers, and mechanical seals.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical & Energy Industry</h5>
                        <p>Components exposed to corrosive slurries.</p>
                        <p>Carbide wear plates in reactors and furnaces.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Jet engine components, rocket nozzles.</p>
                        <p>Armor-piercing cores and protective inserts.</p>
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
                        <h5>In-house capability for precision carbide machining</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>ISO-compliant manufacturing and custom grade development</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>End-to-end supply from powder to finished components</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Strong network of global clients and OEMs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Technical assistance and quick turnaround for custom parts</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Carbide Alloys Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹3,500 – ₹8,500 per kg
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

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are Carbide Alloys used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Carbide Alloys are used for cutting tools, mining bits, drilling heads, stamping and
                                    punching dies, wear parts in industrial machinery, aerospace components, and
                                    chemical-resistant applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Carbide Alloys does MOKSH TUBES & FITTINGS supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We supply Tungsten Carbide (WC), Titanium Carbide (TiC), Tantalum Carbide (TaC), and
                                    custom carbide grades for specialized applications, available as rods, strips, sheets,
                                    tubes, and fabricated components.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Carbide Alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Carbide Alloys offer extreme hardness, excellent wear resistance, high compressive
                                    strength, thermal stability, corrosion resistance (in specific grades), and long service
                                    life under harsh conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In what forms are Carbide Alloys available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Carbide Alloys are supplied as seamless and welded pipes, tubes, sheets, plates, bars,
                                    flanges, fasteners, and custom engineered components tailored to industrial needs.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS for Carbide Alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We provide ISO compliant carbide products with precision machining capabilities, custom
                                    grade development, end to end supply from powder to finished parts, technical support,
                                    and global delivery for OEMs and industrial clients.
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


    <section id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Contact <strong>Moksh Tubes & Fittings LLP</strong> — your trusted partner in wear-resistant and
                    high-strength carbide solutions.
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
                "name": "What are Carbide Alloys used for?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Carbide Alloys are used for cutting tools, mining bits, drilling heads, stamping and punching dies, wear parts in industrial machinery, aerospace components, and chemical-resistant applications."
                }
                },
                {
                "@type": "Question",
                "name": "What types of Carbide Alloys does MOKSH TUBES & FITTINGS supply?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We supply Tungsten Carbide (WC), Titanium Carbide (TiC), Tantalum Carbide (TaC), and custom carbide grades for specialized applications, available as rods, strips, sheets, tubes, and fabricated components."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of Carbide Alloys?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Carbide Alloys offer extreme hardness, excellent wear resistance, high compressive strength, thermal stability, corrosion resistance (in specific grades), and long service life under harsh conditions."
                }
                },
                {
                "@type": "Question",
                "name": "In what forms are Carbide Alloys available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Carbide Alloys are supplied as seamless and welded pipes, tubes, sheets, plates, bars, flanges, fasteners, and custom engineered components tailored to industrial needs."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS for Carbide Alloys?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide ISO compliant carbide products with precision machining capabilities, custom grade development, end to end supply from powder to finished parts, technical support, and global delivery for OEMs and industrial clients."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
