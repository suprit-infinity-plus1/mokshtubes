@extends('layouts.master')

@section('title', 'Monel 400 Alloy – Superior Corrosion & Strength') <!-- 53 chars -->
@section('meta_description',
    'Monel 400 provides superior corrosion resistance, excellent strength, and reliability for
    marine, chemical, and industrial applications.')
@section('meta_keywords',
    'Monel 400, Monel 400 Alloy, Nickel-Copper Alloy, Corrosion Resistant Alloy, High Strength
    Alloy, Marine Industry Alloys, Chemical Processing Alloys, Industrial Alloys, Impact Resistant Alloys, Durable Nickel
    Alloys')
@section('og_image', asset('assets/images/material/monel-400.webp'))
@section('og_type', 'article')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/material/Monel-400.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Monel 400 <br> Corrosion Resistant & High-Strength Alloy</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        MONEL® 400 (Alloy 400 / UNS N04400) is a high-strength nickel–copper alloy known for its exceptional
                        resistance to seawater, acids, and corrosive environments, making it ideal for marine, chemical, and
                        industrial applications.</p>

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
                Introduction To Monel 400 / Alloy 400 / UNS N04400 </h2>
            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/material/monel-400.webp') }}" alt="Monel 400"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer and stockist of a variety of MONEL 400 (UNS N04400) <a
                                href="{{ route('products') }}">products</a> such as <a
                                href="{{ route('products.pipes-tubes') }}">Pipes &
                                Tubes</a>, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars,
                            Flat Bars,
                            Angles, Channels, Welding rods, Wire Mesh, and other Custom and Hard to Find MONEL 400 Products.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">MONEL 400</strong class="text-black"> is a solid-solution alloy of
                            nickel and copper, known for its excellent corrosion resistance, particularly in marine and
                            chemical environments. This <a href="{{ route('materials.hastelloy') }}">alloy</a> exhibits
                            outstanding performance in brackish and saltwater,
                            hydrofluoric acid, sulfuric acid, and alkali media. It offers high strength, toughness, and good
                            weldability, making it ideal for handling corrosive and high pressure conditions. <strong
                                class="text-black"> <a href="{{ route('materials.monel') }}">MONEL 400</a></strong>
                            retains its mechanical properties across a wide temperature range and performs reliably in both
                            oxidizing and reducing conditions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Monel 400 Datasheet</h3>
            <p class="mb-3">
                Get the complete Monel 400 datasheet with chemical composition,
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
                <h2>MONEL® 400 Specifications (UNS N04400)</h2>
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
                                    <td>MONEL® 400 / Alloy 400 / UNS N04400</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material Type</td>
                                    <td>Nickel–Copper Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Chemical Composition</td>
                                    <td>Ni ≥63%, Cu 28–34%, Fe ≤2.5%, Mn ≤2%, Si ≤0.5%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Available Conditions</td>
                                    <td>Annealed, Hot Worked, Cold Worked</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Stress Relieving, Annealing</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing Offered</td>
                                    <td>Tensile, Hardness, Chemical Analysis, Corrosion Testing</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2 (Mill Test Certificate)</td>
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
                <h2>Chemical Composition of MONEL® 400</h2>
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
                                    <td>Nickel (Ni + Co)</td>
                                    <td>63.0 min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper (Cu)</td>
                                    <td>27.0 – 33.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.25 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>1.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>2.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.01 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum (Al)</td>
                                    <td>2.30 – 3.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium (Ti)</td>
                                    <td>0.35 – 0.85</td>
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
                    Technical Composition of MONEL® 400
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of MONEL® 400
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
                                    <td>8.80 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>1300 – 1350 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (Tension)</td>
                                    <td>179 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (Compression)</td>
                                    <td>179 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Rigidity</td>
                                    <td>66 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.32</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>21 – 49 °C</td>
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
                        Heat Treatment of MONEL® 400
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature Range</th>
                                    <th>Procedure</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>760 – 980 °C</td>
                                    <td>Air or furnace cooling</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>540 – 650 °C</td>
                                    <td>Hold 1–2 hours, air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Softening</td>
                                    <td>870 – 980 °C</td>
                                    <td>Furnace cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Recrystallization</td>
                                    <td>700 – 900 °C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hot Working Preparation</td>
                                    <td>850 – 950 °C</td>
                                    <td>Uniform heating before forging</td>
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
                <h2 class="fw-bold" style="color:#174268;">
                    Mechanical Properties of MONEL® 400
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Condition</th>
                            <th>Tensile Strength (MPa)</th>
                            <th>Yield Strength (MPa)</th>
                            <th>Elongation (%)</th>
                            <th>Hardness</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Annealed</td>
                            <td>517 – 620</td>
                            <td>172 – 345</td>
                            <td>35 – 60</td>
                            <td>60 – 80 HRB</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hot Finished</td>
                            <td>552 – 758</td>
                            <td>276 – 690</td>
                            <td>30 – 60</td>
                            <td>75 – 100 HRB</td>
                        </tr>
                        <tr class="t-row">
                            <td>Cold Drawn</td>
                            <td>579 – 827</td>
                            <td>379 – 690</td>
                            <td>22 – 40</td>
                            <td>85 – 20 HRC</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hot Rolled</td>
                            <td>517 – 655</td>
                            <td>276 – 517</td>
                            <td>30 – 45</td>
                            <td>70 – 96 HRB</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheet</td>
                            <td>482 – 586</td>
                            <td>207 – 310</td>
                            <td>35 – 45</td>
                            <td>65 – 80 HRB</td>
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
                <h2>Available Forms & Size Range – MONEL® 400</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product Form</th>
                            <th>Size Range / Description</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Round Bars</td>
                            <td>10 mm – 350 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flat, Square & Hex Bars</td>
                            <td>Custom sizes up to 250 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>1.5 – 100 mm (Width 600 – 2500 mm)</td>
                        </tr>
                        <tr class="t-row">
                            <td>Coils & Strips</td>
                            <td>0.3 – 8 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Seamless & Welded Pipes / Tubes</td>
                            <td>OD 6 – 273 mm, WT 1 – 25 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Forged Components</td>
                            <td>Blocks, rings, bushings as per drawing</td>
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
                <h2>International Standards & Equivalent Grades – MONEL® 400</h2>
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
                            <td>N04400</td>
                        </tr>
                        <tr class="t-row">
                            <td>W.Nr (DIN)</td>
                            <td>2.4360 / 2.4361</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>B127, B164, B165, B564, B725</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>NiCu30Fe</td>
                        </tr>
                        <tr class="t-row">
                            <td>BS</td>
                            <td>NA 13</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>NW 4400</td>
                        </tr>
                        <tr class="t-row">
                            <td>GOST</td>
                            <td>МНЖМц 28-2.5-1.5</td>
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
                <h2>Products in Monel 400</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MONEL Alloy 400 </strong>, (UNS N04400) in a wide variety of formats,
                        conveniently available from stock. We also source specialty sizes through trusted converters:
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


    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent resistance to seawater, acids, and alkalis</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High strength and toughness over a wide temperature range</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Exceptional corrosion resistance in marine and chemical processing environments</h5>
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
                        <h5>Non-magnetic and suitable for high-conductivity applications</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Monel R405</h2>
                <p class="text-center pb-3"><strong class="text-dark">Monel 400</strong> is a versatile nickel-copper
                    alloy widely used in applications where excellent corrosion resistance, mechanical strength, and
                    durability are required. It performs exceptionally well in marine, chemical, and high-temperature
                    environments. Typical applications include:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine Engineering & Shipbuilding</h5>
                        <p>Used in seawater-cooled heat exchangers, condenser tubes, propeller shafts, fasteners, seawater
                            valves, and pump components due to outstanding resistance to saltwater and marine atmospheres.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical & Petrochemical Processing</h5>
                        <p>Ideal for processing and handling equipment such as storage tanks, process vessels, piping
                            systems, heat exchangers, and pumps exposed to hydrofluoric acid, sulfuric acid, and caustic
                            solutions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>Preferred for downhole tools, pump shafts, safety valves, and heat exchangers operating in sour
                            gas environments and offshore platforms.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Power Generation</h5>
                        <p>Applied in boiler feedwater systems, condensers, superheaters, and brine heaters in power plants
                            due to its resistance to saline and chemical media.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Used in fuel tanks, jet engine components, and hydraulic systems that require resistance to high
                            stress, pressure, and corrosive fuels.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Desalination and Water Treatment</h5>
                        <p>Employed in brine heaters, evaporators, and saltwater treatment components for long service life
                            and minimal maintenance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Electronic and Instrumentation</h5>
                        <p>Selected for non-sparking, non-magnetic parts such as connectors, terminals, and housing
                            components in sensitive electrical systems.</p>
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
                        <h5>Specialists in manufacturing high-quality products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strong supplier network for premium raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expertise in nickel alloys and high-performance materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global presence with customized solutions for diverse needs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Dedicated to quality, dependability, and customer satisfaction</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>MONEL 400 Price (India)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹2,200 – ₹3,500 per kg
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
                                <h4>What is Monel 400 and why is it widely used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Monel 400 (UNS N04400) is a nickel-copper solid solution alloy well-known for its
                                    exceptional corrosion resistance in seawater, brackish water, chemical processing
                                    environments, and acidic conditions. It combines high strength, toughness, and good
                                    weldability, making it suitable for industries that demand durability and reliability in
                                    aggressive environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Monel 400 products are available from Moksh Tubes & Fittings LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP manufactures, supplies, and exports a wide range of Monel 400
                                    products including seamless and welded pipes, tubes, pipe fittings, flanges, fasteners,
                                    sheets, plates, coils, bars, wire mesh, welding rods, and custom engineered components,
                                    ensuring customers receive solutions tailored to their exact needs.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In which industries is Monel 400 most commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Monel 400 is widely used in marine engineering, chemical and petrochemical processing,
                                    oil and gas industries, desalination plants, aerospace, defense, power generation, and
                                    water treatment systems. Its excellent resistance to seawater, acids, alkalis, and
                                    high-pressure environments makes it indispensable in these sectors.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key advantages of choosing Monel 400 over other alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The main advantages of Monel 400 include outstanding resistance to seawater and salt
                                    spray, excellent toughness over a wide temperature range, good weldability and
                                    formability, and superior performance in both oxidizing and reducing conditions. These
                                    properties make it a cost effective solution for long-term, corrosion resistant
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Monel 400 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted manufacturer and global supplier of Monel 400
                                    with in depth expertise in high performance nickel alloys. The company ensures
                                    ISO certified quality, precision manufacturing, customized product solutions, timely
                                    global delivery, and exceptional customer support, making it the preferred choice for
                                    clients worldwide.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> your trusted partner for MONEL 400 products.
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
                        "name": "What is Monel 400 and why is it widely used?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Monel 400 (UNS N04400) is a nickel-copper solid solution alloy well-known for its exceptional corrosion resistance in seawater, brackish water, chemical processing environments, and acidic conditions. It combines high strength, toughness, and good weldability, making it suitable for industries that demand durability and reliability in aggressive environments."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What types of Monel 400 products are available from Moksh Tubes & Fittings LLP?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP manufactures, supplies, and exports a wide range of Monel 400 products including seamless and welded pipes, tubes, pipe fittings, flanges, fasteners, sheets, plates, coils, bars, wire mesh, welding rods, and custom engineered components, ensuring customers receive solutions tailored to their exact needs."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "In which industries is Monel 400 most commonly used?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Monel 400 is widely used in marine engineering, chemical and petrochemical processing, oil and gas industries, desalination plants, aerospace, defense, power generation, and water treatment systems. Its excellent resistance to seawater, acids, alkalis, and high-pressure environments makes it indispensable in these sectors."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the key advantages of choosing Monel 400 over other alloys?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The main advantages of Monel 400 include outstanding resistance to seawater and salt spray, excellent toughness over a wide temperature range, good weldability and formability, and superior performance in both oxidizing and reducing conditions. These properties make it a cost effective solution for long-term, corrosion resistant applications."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose Moksh Tubes & Fittings LLP for Monel 400 products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP is a trusted manufacturer and global supplier of Monel 400 with in depth expertise in high performance nickel alloys. The company ensures ISO certified quality, precision manufacturing, customized product solutions, timely global delivery, and exceptional customer support, making it the preferred choice for clients worldwide."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
