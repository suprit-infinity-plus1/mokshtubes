@extends('layouts.master')

@section('title', '4340 Alloy Steel | High Tensile Strength Alloy')
@section('meta_description', '4340 Alloy Steel delivers superior toughness and fatigue resistance for demanding
    engineering applications.')
@section('meta_keywords', '4340 Alloy Steel, high tensile strength steel, tough steel, fatigue resistant steel, alloy
    steel for critical applications, industrial alloy steel')

@section('og_image', asset('assets/images/engineering-steels/engineering-steels-4340.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/engineering-steels/engineering-steels-4340.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Performance 4340 Alloy Steel for Engineering<br>High-Strength Low Alloy Steel</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        High-Strength Low Alloy Steel is a specialized alloy steel grade known for exceptional strength,
                        toughness, and durability, widely used in aerospace, automotive, and heavy engineering applications.
                        Below is the complete datasheet including composition, properties, heat treatment, and
                        applications.<br>High Strength • Excellent Toughness • Ideal for Aerospace, Automotive & Heavy
                        Engineering
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
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Engineering Steel 4340 / AISI 4340 Steel
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-4340.webp') }}" alt="EN 4340"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-3 text-justify">
                            <strong>Moksh Tubes & Fittings LLP</strong> is a reliable supplier, exporter, importer, and
                            stockist of
                            <strong>EN 4130 Alloy Steel (AISI 4130 / Cr-Mo Steel)</strong>, offering a wide range of pipes,
                            tubes, bars, plates,
                            and fittings for various engineering and industrial applications. 4130 alloy steel is a highly
                            versatile low-alloy
                            grade valued for its high strength, excellent toughness, superior weldability, and strong
                            fatigue resistance.
                            With an exceptional strength-to-weight ratio, it is widely used in aerospace structures,
                            motorsport chassis and roll cages,
                            high-pressure tubing, oilfield tools, and critical mechanical components operating under
                            demanding service conditions.
                        </p>

                        <p class="fs-6 text-justify">
                            Whether used in aircraft components, racing frames, drill pipes, hydraulic assemblies, or other
                            high-stress engineering applications,
                            <strong>4130 alloy steel delivers consistent and dependable performance</strong> under heavy
                            loads, vibration, pressure, and extreme environments.
                            We supply EN 4130 in multiple forms including
                            <strong>
                                <a href="{{ route('products.bars-rods.round-bars') }}">round bars</a>,
                                <a href="{{ route('products.bars-rods.flat-bars') }}"> flat bars</a>,
                                hex bars, square bars, plates, sheets, coils, strips, seamless pipes,
                                <a href="{{ route('products.pipes-tubes.welded-pipes') }}">welded tubes</a>,
                                forged blocks, rings, and custom-machined components.
                            </strong>
                            Material is available in annealed, normalized, quenched & tempered, hot-rolled, and cold-drawn
                            conditions.
                            All products are sourced from certified mills and supplied with
                            <strong>EN 10204 3.1 / 3.2 certification</strong>, ensuring complete traceability, reliability,
                            and quality for industrial and engineering use.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels 4340 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels 4340 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="en_4340.pdf">
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

    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>4340 Alloy Steel Specifications</h2>
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
                                    <td>AISI 4340 / UNS G43400 / EN 24 / 1.6511</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>High-Strength Low Alloy Steel (Ni-Cr-Mo Alloy)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Chemical Composition</td>
                                    <td>Ni 1.65–2.00%, Cr 0.70–0.90%, Mo 0.20–0.30%, C 0.38–0.43%, Mn 0.60–0.80%, Si
                                        0.15–0.30%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions</td>
                                    <td>Annealed, Normalized, Hardened & Tempered, Hot Rolled, Forged</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Hardening, Tempering, Stress Relieving</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>Tensile, Hardness, Impact, Chemical Analysis, UT (Optional)</td>
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


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition</h2>
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
                                    <td>Carbon</td>
                                    <td>0.38 – 0.43</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.60 – 0.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.035</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.15 – 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>1.65 – 2.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>0.70 – 0.90</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>0.20 – 0.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.040</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            4340 alloy steel gets its unique toughness from the combined Ni-Cr-Mo alloying.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Composition</h2>
            </div>

            <!-- Physical Properties Table -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Physical Properties</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Imperial</th>
                                    <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>0.284 lb/in³</td>
                                    <td>7.85 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2600 °F</td>
                                    <td>1427 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
                                    <td>29.7 ×10³ ksi</td>
                                    <td>205 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Bulk Modulus</td>
                                    <td>20.3 ×10³ ksi</td>
                                    <td>140 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Shear Modulus</td>
                                    <td>11.6 ×10³ ksi</td>
                                    <td>80 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>309 BTU·in/hr·ft²·°F</td>
                                    <td>44.5 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.27–0.30</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Expansion</td>
                                    <td>6.8 µin/in·°F</td>
                                    <td>12.3 µm/m·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.114 BTU/lb·°F</td>
                                    <td>0.475 J/g·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>0.0000248 Ω·cm</td>
                                    <td>—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Heat Treatment of 4340 Steel</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>Heat Treatment Process</th>
                                    <th>Temperature Range</th>
                                    <th>Cooling / Procedure</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td><strong>Annealing</strong></td>
                                    <td>790–870°C</td>
                                    <td>Furnace cool</td>
                                </tr>

                                <tr class="t-row">
                                    <td><strong>Normalizing</strong></td>
                                    <td>830–900°C</td>
                                    <td>Air cool</td>
                                </tr>

                                <tr class="t-row">
                                    <td><strong>Hardening</strong></td>
                                    <td>830–860°C</td>
                                    <td>Oil or polymer quench</td>
                                </tr>

                                <tr class="t-row">
                                    <td><strong>Tempering</strong></td>
                                    <td>400–650°C</td>
                                    <td>Depends on required hardness</td>
                                </tr>

                                <tr class="t-row">
                                    <td><strong>Stress Relieving</strong></td>
                                    <td>540–650°C</td>
                                    <td>Hold 1–2 hours</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Mechanical Properties -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties of 4340 Alloy Steel (Quenched &
                    Tempered)</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Annealed</th>
                            <th>Hot Finished</th>
                            <th>Cold Drawn</th>
                            <th>Hot Rolled</th>
                            <th>Sheet</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">

                        <tr class="t-row">
                            <td>Tensile Strength</td>
                            <td>930–1080 MPa</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                        </tr>

                        <tr class="t-row">
                            <td>Yield Strength</td>
                            <td>745–930 MPa</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                        </tr>

                        <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>12–16%</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                        </tr>

                        <tr class="t-row">
                            <td>Hardness</td>
                            <td>28–34 HRC</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                        </tr>

                        <tr class="t-row">
                            <td>Impact Toughness</td>
                            <td>Excellent</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                        </tr>

                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    4340 steel shows excellent toughness and high strength after quenching & tempering.
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
                    We supply Alloy Steel 4340 in the following product forms and dimensions:
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color:#db7227;">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 40%;">Product Form</th>
                                <th>Size Range / Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Round Bars</td>
                                <td>16 mm – 600 mm</td>
                            </tr>
                            <tr>
                                <td>Flat, Square & Hex Bars</td>
                                <td>Custom sizes</td>
                            </tr>
                            <tr>
                                <td>Sheets & Plates</td>
                                <td>3 mm – 200 mm</td>
                            </tr>
                            <tr>
                                <td>Forgings</td>
                                <td>Blocks, rings, bushings, custom shapes</td>
                            </tr>
                            <tr>
                                <td>Tubes</td>
                                <td>OD 20 mm – 219 mm</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- End Available Forms & Size Range Section -->

<!-- Standards & Equivalent Grades Section -->
<section class="sec-padd-top sec-padd-bottom" id="international">
    <div class="container">
        <div class="section-title center">
            <h2>International Standards & Equivalent Grades — Alloy Steel 4340</h2>
        </div>

        <div class="table-responsive col-lg-8 mx-auto">
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr class="t-row">
                        <th>Standard</th>
                        <th>Equivalent Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="t-row">
                        <td>AISI / SAE</td>
                        <td>4340</td>
                    </tr>
                    <tr class="t-row">
                        <td>EN</td>
                        <td>34CrNiMo6 / 1.6582</td>
                    </tr>
                    <tr class="t-row">
                        <td>DIN</td>
                        <td>34CrNiMo6</td>
                    </tr>
                    <tr class="t-row">
                        <td>BS (British)</td>
                        <td>817M40</td>
                    </tr>
                    <tr class="t-row">
                        <td>AFNOR (France)</td>
                        <td>35NCD16</td>
                    </tr>
                    <tr class="t-row">
                        <td>JIS (Japan)</td>
                        <td>SNCM439</td>
                    </tr>
                    <tr class="t-row">
                        <td>GB (China)</td>
                        <td>40CrNiMoA</td>
                    </tr>
                    <tr class="t-row">
                        <td>ISO</td>
                        <td>34CrNiMo6</td>
                    </tr>
                    <tr class="t-row">
                        <td>GOST (Russia)</td>
                        <td>30ХГСА / 30KhGSA</td>
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

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Engineering Steel 4340</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 4340</strong> is typically available in:
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
                        Engineering Steel 4340 products are produced to the following global standards:
                    </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
              <!-- Product Image Cards (Bootstrap Grid) -->
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>High strength and toughness with good fatigue resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent wear and impact resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good hardenability and ability to maintain mechanical properties after heat treatment</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Versatile and widely used in critical structural and mechanical parts</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel 4340</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 4340</strong> is widely used in:
                    in:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Aircraft landing gear, structural components, and fasteners requiring high strength and
                            toughness.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Automotive Industry</h5>
                        <p>Crankshafts, gears, axles, and drive shafts subjected to high stress.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Heavy Machinery & Industrial Equipment</h5>
                        <p>Shafts, bolts, and connecting rods requiring fatigue resistance and impact strength.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Oil & Gas</h5>
                        <p>Components for high-pressure and high-temperature applications such as drill collars and valve
                            parts.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Aerospace Industry</h5>
                        <p>Used in structural frames, tubing, and fuel systems where strength-to-weight ratio is crucial.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Medical and Pharmaceutical Equipment</h5>
                        <p>Favored for surgical tools, implants, and cleanroom processing systems because of its purity and
                            biocompatibility.</p>
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

    <section class="sec-padd-top sec-padd-bottom bg-light py-5">
    <div class="container">
        <div class="section-title text-center mb-4">
            <h2>Export Destinations</h2>
        </div>

        <p class="text-center mb-2">
            We export Alloy Steel 4340 to:
        </p>

        <p class="text-center fs-5">
            UAE, Saudi Arabia, Qatar, Oman, Kuwait, Bahrain, Turkey, Europe, USA, Canada, Singapore,
            Malaysia, Indonesia, South Africa, Nigeria.
        </p>
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
                        <h5>Comprehensive stock of 4340 steel in multiple forms and sizes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Expert technical support and custom processing services</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Stringent quality control and certifications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global supply chain ensuring timely deliveries</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Global supply chain ensuring timely deliveries</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container text-center">
        <h2>4340 Steel Price per kg in India</h2>
        <p>Price varies based on size, OD, thickness, and heat-treatment condition.</p>
        <p><strong>Typical Range:</strong> ₹160 – ₹260 per kg (Indicative only)</p>
        <p>Contact us for exact quotation based on size and quantity.</p>
    </div>
</section>


    <!--Start faq content area-->
    <section class="faq-content-area sec-padd2">
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
                                <h4>What is EN 4340 steel and why is it used in industries?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4340 is a high strength, low-alloy steel containing nickel, chromium, and molybdenum,
                                    which provide superior toughness, hardenability, and wear resistance.
                                    Known for its excellent fatigue strength and ability to perform under high stress, 4340
                                    is widely used in aerospace, automotive, oil and gas, and heavy machinery industries
                                    where strength, impact resistance, and durability are critical.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key chemical and mechanical properties of EN 4340 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4340 steel has a chemical composition that includes 0.38–0.43% carbon, 1.65–2.00%
                                    nickel, 0.70–0.90% chromium, and 0.20–0.30% molybdenum, along with manganese, silicon,
                                    phosphorus, and sulfur in controlled amounts.
                                    It exhibits tensile strength between 930–1080 MPa, yield strength of 745–930 MPa,
                                    elongation of 12–16%, and hardness of 28–34 HRC.
                                    With excellent impact toughness and fatigue resistance, EN 4340 provides outstanding
                                    performance in demanding environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What EN 4340 steel products are supplied by MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP offers a wide range of EN 4340 steel products including
                                    seamless and welded pipes, tubes, sheets, plates, coils, strips, round bars, hex bars,
                                    flat bars, square bars, pipe fittings, flanges, fasteners, and custom-fabricated
                                    components.
                                    All products are manufactured to meet international quality standards and can be
                                    supplied in both standard and customized dimensions to suit industry-specific
                                    requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the major applications of EN 4340 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4340 steel is extensively used in aerospace and defense for aircraft landing gear,
                                    structural parts, and high-strength fasteners.
                                    In the automotive industry, it is applied in crankshafts, axles, gears, and drive shafts
                                    exposed to heavy loads.
                                    Heavy machinery and industrial equipment use EN 4340 for shafts, bolts, and connecting
                                    rods requiring durability and fatigue resistance,
                                    while the oil and gas industry applies it in drill collars, valve components, and
                                    high-pressure equipment.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EN 4340 steel materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted global supplier and exporter of EN 4340 alloy
                                    steel with a comprehensive stock in multiple forms and sizes.
                                    The company provides customized cutting, forging, and processing services backed by
                                    expert technical support.
                                    With stringent quality control, international certifications, reliable worldwide
                                    deliveries, and competitive pricing,
                                    MOKSH TUBES & FITTINGS LLP ensures superior EN 4340 steel solutions tailored to diverse
                                    industrial needs.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For inquiries or to request a quote for 4340 alloy steel products, contact <strong> Moksh Tubes
                        & Fittings
                        LLP </strong> — your reliable partner for premium engineering steels.
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
                    "name": "What is EN 4340 steel and why is it used in industries?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN 4340 is a high strength, low-alloy steel containing nickel, chromium, and molybdenum, which provide superior toughness, hardenability, and wear resistance. Known for its excellent fatigue strength and ability to perform under high stress, 4340 is widely used in aerospace, automotive, oil and gas, and heavy machinery industries where strength, impact resistance, and durability are critical."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the key chemical and mechanical properties of EN 4340 steel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN 4340 steel has a chemical composition that includes 0.38–0.43% carbon, 1.65–2.00% nickel, 0.70–0.90% chromium, and 0.20–0.30% molybdenum, along with manganese, silicon, phosphorus, and sulfur in controlled amounts. It exhibits tensile strength between 930–1080 MPa, yield strength of 745–930 MPa, elongation of 12–16%, and hardness of 28–34 HRC. With excellent impact toughness and fatigue resistance, EN 4340 provides outstanding performance in demanding environments."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What EN 4340 steel products are supplied by MOKSH TUBES & FITTINGS LLP?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MOKSH TUBES & FITTINGS LLP offers a wide range of EN 4340 steel products including seamless and welded pipes, tubes, sheets, plates, coils, strips, round bars, hex bars, flat bars, square bars, pipe fittings, flanges, fasteners, and custom-fabricated components. All products are manufactured to meet international quality standards and can be supplied in both standard and customized dimensions to suit industry-specific requirements."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the major applications of EN 4340 steel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN 4340 steel is extensively used in aerospace and defense for aircraft landing gear, structural parts, and high-strength fasteners. In the automotive industry, it is applied in crankshafts, axles, gears, and drive shafts exposed to heavy loads. Heavy machinery and industrial equipment use EN 4340 for shafts, bolts, and connecting rods requiring durability and fatigue resistance, while the oil and gas industry applies it in drill collars, valve components, and high-pressure equipment."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "Why choose MOKSH TUBES & FITTINGS LLP for EN 4340 steel materials?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MOKSH TUBES & FITTINGS LLP is a trusted global supplier and exporter of EN 4340 alloy steel with a comprehensive stock in multiple forms and sizes. The company provides customized cutting, forging, and processing services backed by expert technical support. With stringent quality control, international certifications, reliable worldwide deliveries, and competitive pricing, MOKSH TUBES & FITTINGS LLP ensures superior EN 4340 steel solutions tailored to diverse industrial needs."
                    }
                    }
                ]
                }

            @endverbatim
    </script>
@endsection
