@extends('layouts.master')

@section('title', 'EN19 Alloy Steel | Hardened High Strength Steel')
@section('meta_description',
    'EN19 Alloy Steel offering superior hardness, strength, and durability for tools and heavy
    machinery parts.')
@section('meta_keywords',
    'EN19 Alloy Steel, hardened alloy steel, high strength steel, tool steel, machinery steel,
    durable alloy steel, industrial alloy steel')
@section('og_image', asset('assets/images/engineering-steels/engineering-steels-en19.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/engineering-steels/engineering-steels-en19.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium EN19 Hardened Alloy Steel<br>High Strength Alloy Steel
                    </h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        EN19 Engineering Steel (EN19 / 4140 / 42CrMo4) is a high-strength chromium-molybdenum alloy steel
                        grade known for excellent toughness, high tensile strength, shock resistance, and superior
                        hardenability. It is widely used for shafts, gears, axles, bolts, crankshafts, and other heavy-duty
                        engineering components.

                    </p>


                    <!-- End extra content -->
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    .
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

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Engineering Steel 19 / AISI 4140 / 42CrMo4
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-en19.webp') }}" alt="EN19"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            stockist, exporter, and supplier of<strong class="text-black"> EN19 (also known as AISI 4140 /
                                42CrMo4) engineering steel
                                products.</strong> We offer a wide range of EN19 products including Round Bars, Flats, Hex
                            Bars,
                            Forgings, Shafts, Hollow Bars,<a href="{{ route('products.pipes-tubes') }}"> Pipes</a>,
                            Fasteners, and Customized Components, suitable for
                            demanding mechanical and structural applications.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN 19</strong class="text-black">, <a
                                href="{{ url('materials/engineering-steels/engineering-steels-en8') }}">EN8</a>
                            is a high tensile alloy steel
                            grade with excellent strength, toughness, and wear resistance. It contains chromium and
                            molybdenum, which provide improved hardenability and high fatigue strength.<a
                                href="{{ route('materials.engineering-Steels') }}"> EN19</a> is commonly
                            used for automotive components, gears, shafts, and high-stress machine.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels 19 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels 19 datasheet with chemical composition,
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
                <h2>Engineering Steel EN19 Specifications</h2>
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
                                    <td>EN 19 / 817M40 / AISI 4140</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>High-Strength Alloy Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Chemical Composition</td>
                                    <td>C 0.36–0.44%, Mn 0.60–0.90%, Si 0.15–0.35%, Cr 0.90–1.20%, Mo 0.15–0.25%, P ≤
                                        0.035%, S ≤ 0.035%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions</td>
                                    <td>Annealed, Normalized, Hot Rolled, Forged, Quenched & Tempered</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Quenching & Tempering, Stress Relieving</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>Tensile, Hardness, Chemical, UT / NDT (on request)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
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
                <h2>Chemical Composition of EN19 Alloy Steel</h2>
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
                                    <td>0.36 – 0.44</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.10 – 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>0.50 – 0.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>0.90 – 1.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>0.15 – 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.035</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.035</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            EN19’s chromium–molybdenum alloying enhances tensile strength, wear resistance,
                            fatigue performance, and hardenability.
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
                <h2 class="fw-bold" style="color:#174268;">Physical Properties of EN19 Steel</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
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
                                    <td>7.85 g/cm³</td>
                                    <td>0.284 lb/in³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>1358 – 1400 °C</td>
                                    <td>2475 – 2550 °F</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (Tension)</td>
                                    <td>200 GPa</td>
                                    <td>29,000 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (Torsion)</td>
                                    <td>80 GPa</td>
                                    <td>11,600 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.27</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>44 W/m·K</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>460 J/kg·K</td>
                                    <td>—</td>
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
                        Heat Treatment of EN19 Alloy Steel
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature Range</th>
                                    <th>Cooling Method</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>680 – 700 °C</td>
                                    <td>Furnace cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Normalizing</td>
                                    <td>850 – 870 °C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardening</td>
                                    <td>820 – 850 °C</td>
                                    <td>Oil quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tempering</td>
                                    <td>200 – 650 °C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>550 – 650 °C</td>
                                    <td>Hold 1–2 hours</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            👉 Typical hardness after Q&T: <strong>28 – 36 HRC</strong><br>
                            👉 With induction hardening: <strong>50 – 58 HRC (surface)</strong>
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
                    Mechanical Properties of EN19 Steel
                </h2>
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
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>586–724</td>
                            <td>620–827</td>
                            <td>655–896</td>
                            <td>586–758</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (MPa)</td>
                            <td>345–448</td>
                            <td>414–690</td>
                            <td>448–758</td>
                            <td>345–517</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>20–25</td>
                            <td>15–25</td>
                            <td>12–18</td>
                            <td>18–25</td>
                        </tr>
                        <tr class="t-row">
                            <td>Brinell Hardness (HB)</td>
                            <td>150–200</td>
                            <td>180–250</td>
                            <td>200–270</td>
                            <td>150–210</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>80–90 B</td>
                            <td>85–95 B</td>
                            <td>20–30 C</td>
                            <td>80–90 B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – EN19 Steel</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
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
                                <td>10 mm – 400 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Flat, Square & Hex Bars</td>
                                <td>Custom sizes up to 300 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Sheets & Plates</td>
                                <td>2 – 150 mm (Width 600 – 3000 mm)</td>
                            </tr>
                            <tr class="t-row">
                                <td>Coils & Strips</td>
                                <td>0.5 – 12 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Pipes & Tubes</td>
                                <td>OD 10 – 219 mm, WT 2 – 20 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Forged Components</td>
                                <td>Blocks, rings, bushings (as per drawing)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- International Standards -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades of EN19 Steel</h2>
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
                            <td>EN</td>
                            <td>EN 19</td>
                        </tr>
                        <tr class="t-row">
                            <td>AISI / SAE</td>
                            <td>4140</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>42CrMo4</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SCM440</td>
                        </tr>
                        <tr class="t-row">
                            <td>GB</td>
                            <td>40CrMo</td>
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
                <h2>Products in Engineering Steel 19</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 19</strong> is typically available in:
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
                        Engineering Steel 19 products are produced to the following global standards:
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
                        <h5>High tensile and yield strength</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent wear resistance and fatigue life</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good machinability in normalized or QT condition</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Can be nitrided or case-hardened for surface hardness</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Excellent toughness and resistance to crack propagation</h5>
                    </div>
                </div>
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel 19</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 19</strong> is widely used in
                    high-stress industrial, mechanical, and automotive components, including:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automotive & Transport</h5>
                        <p>Axles, drive shafts, crankshafts, connecting rods, gear shafts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Oil & Gas Equipment</h5>
                        <p>Drill collars, hydraulic tools, blowout preventers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Power Generation</h5>
                        <p>Rotor shafts, gearboxes, coupling rods</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Heavy Engineering</h5>
                        <p>Machine tool components, press tools, die blocks, rollers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Construction Machinery</h5>
                        <p>Pinions, gears, sprockets, cranes, and load-bearing equipment</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Defense & Aerospace</h5>
                        <p>Landing gear components, hydraulic cylinders, structural brackets</p>
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
                        <h5>Trusted Supplier Network – We source certified raw materials from reputed mills</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Precision Processing – Cutting, heat treatment, CNC machining & testing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Custom Solutions – Special profiles and tailor-made parts available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Fast Delivery – Ready stock and global shipping</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Strict Quality Control – ISO-certified processes and third-party inspections</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>EN19 Steel Price in India </h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹110 – ₹200 per kg
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
                                <h4>What is EN19 steel and why is it also known as AISI 4140 or 42CrMo4?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN19, also referred to as AISI 4140 or 42CrMo4, is a high-tensile chromium-molybdenum
                                    alloy steel widely recognized for its excellent combination of strength, toughness, and
                                    wear resistance.
                                    The presence of chromium provides enhanced hardenability and corrosion resistance, while
                                    molybdenum improves fatigue strength and toughness.
                                    These properties make EN19 suitable for heavy-duty engineering and mechanical
                                    applications where high performance under stress is required.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key chemical and mechanical properties of EN19 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The chemical composition of EN19 includes 0.36–0.44% carbon, 0.90–1.50% chromium,
                                    0.15–0.35% molybdenum, 0.50–0.80% manganese, 0.10–0.35% silicon, and controlled levels
                                    of phosphorus and sulfur.
                                    It provides tensile strength in the range of 85–130 ksi (586–896 MPa) depending on
                                    condition, with yield strength between 50–110 ksi (345–758 MPa).
                                    EN19 also offers elongation of 12–25%, hardness between 150–270 Brinell, and good
                                    machinability in normalized or quenched and tempered conditions, making it an excellent
                                    choice for precision-engineered parts.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What EN19 steel products does MOKSH TUBES & FITTINGS LLP supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies a comprehensive range of EN19 steel products
                                    including round bars, flat bars, hex bars, square bars, hollow bars, forgings, shafts,
                                    sheets, plates, coils, strips, seamless and welded pipes, tubes, flanges, pipe fittings,
                                    fasteners, and custom-fabricated components.
                                    All products are manufactured to international standards and can be supplied in
                                    annealed, hot rolled, cold drawn, or quenched and tempered conditions with precision
                                    machining and heat treatment options.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the common applications of EN19 steel in different industries?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN19 steel is extensively used across automotive, oil and gas, power generation, heavy
                                    engineering, construction, defense, and aerospace sectors.
                                    In the automotive industry, it is used for axles, crankshafts, gear shafts, and drive
                                    shafts, while in oil and gas it is used for drill collars, hydraulic tools, and blowout
                                    preventers.
                                    In power generation and heavy machinery, EN19 is used for rotor shafts, press tools,
                                    coupling rods, rollers, and die blocks.
                                    Its toughness also makes it suitable for aerospace landing gear components, structural
                                    brackets, and hydraulic cylinders.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EN19 steel products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a> is a trusted
                                    manufacturer, supplier, stockist, and exporter
                                    of EN19 steel products, offering precision processing, CNC machining, cutting, heat
                                    treatment, and custom-tailored solutions to meet exact client requirements.
                                    The company sources certified raw materials from reputed mills and ensures strict
                                    quality control with ISO-certified processes and third party inspections.
                                    With ready stock availability, fast global shipping, and technical expertise, MOKSH
                                    TUBES & FITTINGS LLP is a reliable partner for industries requiring high-performance
                                    EN19 steel solutions.
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
                    Get in touch with <strong> Moksh Tubes & Fittings LLP
                    </strong> — for high-quality EN19 steel products tailored to your specifications.
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
                    "name": "What is EN19 steel and why is it also known as AISI 4140 or 42CrMo4?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN19, also referred to as AISI 4140 or 42CrMo4, is a high-tensile chromium-molybdenum alloy steel known for its strength, toughness, and wear resistance. Chromium enhances hardenability and corrosion resistance, while molybdenum improves fatigue strength and toughness, making EN19 suitable for heavy-duty engineering applications."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the key chemical and mechanical properties of EN19 steel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN19 steel contains 0.36–0.44% carbon, 0.90–1.50% chromium, 0.15–0.35% molybdenum, 0.50–0.80% manganese, and 0.10–0.35% silicon. It offers tensile strength between 85–130 ksi, yield strength of 50–110 ksi, elongation of 12–25%, and hardness from 150–270 Brinell. It also has good machinability in normalized or quenched and tempered conditions."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What EN19 steel products does MOKSH TUBES & FITTINGS LLP supply?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MOKSH TUBES & FITTINGS LLP supplies EN19 round bars, flat bars, hex bars, hollow bars, forgings, shafts, sheets, plates, coils, strips, seamless and welded pipes, tubes, flanges, fittings, fasteners, and custom-fabricated parts. Products meet international standards and are available in annealed, hot rolled, cold drawn, or quenched and tempered conditions."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the common applications of EN19 steel in different industries?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN19 steel is used in automotive, oil and gas, power generation, heavy engineering, construction, defense, and aerospace sectors. Applications include axles, crankshafts, gear shafts, drill collars, hydraulic tools, rotor shafts, coupling rods, press tools, die blocks, and landing gear components."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "Why choose MOKSH TUBES & FITTINGS LLP for EN19 steel products?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and exporter of EN19 steel, offering precision machining, cutting, heat treatment, and custom solutions. The company ensures quality through ISO-certified processes, third-party inspections, and certified raw materials, providing ready stock and global shipping for reliable performance."
                    }
                    }
                ]
                }

        @endverbatim
    </script>
@endsection
