@extends('layouts.master')

@section('title', '4140 Alloy Steel | High Strength Engineering Steel')
@section('meta_description',
    '4140 Alloy Steel offering excellent strength, hardness, and wear resistance for
    engineering and industrial applications.')
@section('meta_keywords',
    '4140 Alloy Steel, versatile alloy steel, high strength steel, wear resistant steel,
    hardenable steel, industrial alloy steel, engineering steel')

@section('og_image', asset('assets/images/engineering-steels/engineering-steels-4140.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/engineering-steels/engineering-steels-4140.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>EN 4140 / AISI 4140 Alloy Steel <br> (Chromium-Molybdenum Low Alloy Steel)</h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        EN 4140 Alloy Steel (AISI 4140 / 42CrMo4) is a chromium-molybdenum low alloy steel grade known for
                        high strength, superior toughness, and excellent hardenability. It offers good fatigue resistance,
                        wear performance, and dimensional stability after heat treatment. Below is the complete datasheet
                        including composition, properties, heat treatment, and applications.<br>High Strength • Superior
                        Toughness • Ideal for Heavy-Duty & High-Stress Engineering Applications
                    </p>


                    <!-- End extra content -->
                </div>
            </div>
        </div>
    </section>

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

    <!--End breadcrumb area-->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Engineering Steel 4140 / AISI 4140 Steel
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-4140.webp') }}" alt="EN 4140"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black">MOKSH TUBES & FITTINGS LLP</strong> is a trusted supplier, stockist,
                            exporter, importer, and distributor of high-quality
                            <strong class="text-black">EN 4140 / AISI 4140 Alloy Steel products</strong> including
                            <a href="{{ route('products.pipes-tubes') }}">pipes</a>, tubes, bars, plates, sheets, forgings,
                            and custom-machined components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN 4140</strong> (AISI 4140 / 42CrMo4) is a chromium-molybdenum
                            low-alloy steel known for its exceptional combination of
                            high tensile strength, excellent toughness, superior fatigue resistance, and strong wear &
                            abrasion resistance.
                            It can be supplied in annealed, normalized, or quenched & tempered (Q&T) conditions, offering a
                            wide range of mechanical properties suitable for demanding engineering applications.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Thanks to its high hardenability and consistent heat-treat response, <a
                                href="{{ route('materials.engineering-Steels') }}">EN 4140</a> is widely used in
                            automotive components, oil & gas equipment, heavy machinery, aerospace parts, and general
                            engineering applications requiring durability under dynamic and high-stress environments.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            We supply EN 4140 steel in the following product forms:
                        </p>

                        <ul class="fs-6" style="text-align: justify;">
                            <li>Seamless & welded pipes/tubes</li>
                            <li>Round, square & flat bars</li>
                            <li>Sheets & plates</li>
                            <li>Forged bars & components</li>
                            <li>Custom-cut sizes and precision-machined parts</li>
                        </ul>

                        <p class="fs-6" style="text-align: justify;">
                            All materials are supplied with EN 10204 3.1 / 3.2 certification for complete traceability and
                            quality assurance.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels 4140 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels 4140 datasheet with chemical composition,
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
                <h2>Engineering Steel EN 4140 – Material Specifications</h2>
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
                                    <td>EN 4140 / 42CrMo4 / AISI 4140</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Alloy Steel (Chromium–Molybdenum)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Conditions</td>
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
                <h2>Chemical Composition of EN 4140 / AISI 4140 Steel</h2>
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
                                    <td>0.38 – 0.43</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>0.75 – 1.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>0.80 – 1.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>0.15 – 0.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.15 – 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.035</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.040</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            Chromium–molybdenum alloying improves strength, hardenability, fatigue life, and wear
                            resistance.
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
                <h2 class="fw-bold" style="color:#174268;">Physical Properties of EN 4140 Steel</h2>
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
                                    <td>1370 – 1400 °C</td>
                                    <td>2500 – 2550 °F</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (Tension)</td>
                                    <td>200 GPa</td>
                                    <td>29,000 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (Torsion)</td>
                                    <td>80 GPa</td>
                                    <td>11,600 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.29</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>42 W/m·K</td>
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
                        Heat Treatment of EN 4140 Steel
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature Range</th>
                                    <th>Cooling / Procedure</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>820 – 860 °C</td>
                                    <td>Slow furnace cooling</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Normalizing</td>
                                    <td>850 – 880 °C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardening</td>
                                    <td>830 – 860 °C</td>
                                    <td>Oil or water quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tempering</td>
                                    <td>200 – 650 °C</td>
                                    <td>Reheat for required hardness</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>540 – 650 °C</td>
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
                <h2 class="fw-bold" style="color:#174268;">
                    Mechanical Properties of EN 4140 Steel
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
                            <th>Sheet</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>620–724</td>
                            <td>655–827</td>
                            <td>690–896</td>
                            <td>620–758</td>
                            <td>586–724</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (MPa)</td>
                            <td>414–517</td>
                            <td>482–758</td>
                            <td>517–827</td>
                            <td>414–586</td>
                            <td>379–517</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>20–30</td>
                            <td>15–25</td>
                            <td>12–20</td>
                            <td>20–30</td>
                            <td>20–25</td>
                        </tr>
                        <tr class="t-row">
                            <td>Brinell Hardness (HB)</td>
                            <td>150–200</td>
                            <td>180–250</td>
                            <td>200–260</td>
                            <td>150–210</td>
                            <td>—</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>80–90 B</td>
                            <td>85–95 B</td>
                            <td>85–95 B</td>
                            <td>80–90 B</td>
                            <td>80–90 B</td>
                        </tr>
                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    👉 28–36 HRC (Quenched & Tempered)<br>
                    👉 50–55 HRC (Induction / Flame Hardened Surface)
                </p>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – EN 4140 Steel</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark text-center">
                            <tr class="t-row">
                                <th>Product Form</th>
                                <th>Size Range</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="t-row">
                                <td>Round Bars</td>
                                <td>10 mm – 400 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Flat, Square & Hex Bars</td>
                                <td>Custom up to 300 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Sheets & Plates</td>
                                <td>2 – 150 mm (Width 600–3000 mm)</td>
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
                <h2>International Standards & Equivalent Grades – EN 4140</h2>
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
                            <td>EN19 / 42CrMo4</td>
                        </tr>
                        <tr class="t-row">
                            <td>AISI / SAE</td>
                            <td>AISI 4140 / SAE 4140</td>
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
                            <td>GB (China)</td>
                            <td>42CrMo</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>ISO 683-2 Grade 42CrMo4</td>
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
                <h2>Products in Engineering Steel 4140</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 4140</strong> is typically available in:
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
                        Engineering Steel 4140 products are produced to the following global standards:
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
                        <h5>High strength and toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent wear and abrasion resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good fatigue strength</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent hardenability and heat treatment response</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel 4140</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 4140</strong> is extensively used
                    in:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automotive & Motorsport</h5>
                        <p>Axles, crankshafts, gears, and connecting rods requiring high strength and fatigue resistance.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>High-pressure piping, tubing, and drilling equipment exposed to harsh environments.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Mechanical Engineering</h5>
                        <p>Shafts, bolts, heavy-duty machinery parts, and structural components.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Aerospace Industry</h5>
                        <p>Components requiring high tensile strength and toughness under dynamic loads.</p>
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Comprehensive stock of EN 4140 products in various forms</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Customized cutting and processing services</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expert technical support on material selection and application</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Reliable and timely deliveries worldwide</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Competitive pricing and customer satisfaction guaranteed</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>EN 4140 Steel Price in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹110 – ₹220 per kg
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
    <section id="faq"  class="faq-content-area sec-padd2">
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
                                <h4>What is EN 4140 steel and what are its main features?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4140 is a chromium-molybdenum low-alloy steel well-known for its high tensile
                                    strength, toughness, and superior wear resistance.
                                    It is a highly versatile engineering material that can be heat-treated to achieve a wide
                                    range of mechanical properties.
                                    Because of its excellent fatigue resistance and ability to perform under high stress, EN
                                    4140 is widely used in automotive, oil and gas, aerospace, and heavy machinery
                                    industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the chemical and mechanical properties of EN 4140 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4140 steel contains 0.38–0.43% carbon, 0.80–1.10% chromium, and 0.15–0.25%
                                    molybdenum, along with manganese, silicon, phosphorus, and sulfur in controlled amounts.
                                    Its tensile strength ranges from 586–896 MPa and yield strength from 379–827 MPa,
                                    depending on the condition and heat treatment.
                                    It has elongation values up to 30%, Brinell hardness between 150–260, and Rockwell
                                    hardness of 80–95 B.
                                    These properties make EN 4140 a strong, tough, and durable alloy steel suitable for
                                    high-performance engineering applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What EN 4140 steel products are supplied by MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP manufactures and supplies a complete range of EN 4140 steel
                                    products including seamless and welded pipes, tubes, sheets, plates, coils, strips,
                                    bars,
                                    pipe fittings, flanges, fasteners, and custom-fabricated components.
                                    All products are manufactured to international standards and are available in customized
                                    sizes, dimensions, and heat treatments to suit diverse industrial needs.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the common applications of EN 4140 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4140 steel is extensively used in the automotive industry for axles, crankshafts,
                                    gears, and connecting rods that demand high strength and fatigue resistance.
                                    In the oil and gas sector, it is applied in pipelines, drilling equipment, and
                                    high-pressure tubing exposed to extreme environments.
                                    It is also widely used in aerospace for components requiring high tensile strength under
                                    dynamic loads,
                                    and in mechanical engineering for heavy-duty shafts, bolts, and machinery parts.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EN 4140 steel materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted supplier and exporter of EN 4140 steel with a
                                    comprehensive stock of products in multiple forms.
                                    The company provides customized cutting and processing services, technical support for
                                    material selection, and ensures reliable global deliveries.
                                    With competitive pricing, premium quality materials, and a strong focus on customer
                                    satisfaction,
                                    MOKSH TUBES & FITTINGS LLP is the preferred choice for industries requiring durable and
                                    high-performance EN 4140 steel solutions.
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
                    For detailed information or to request a quote for EN 4140 steel products, contact <strong> Moksh Tubes
                        & Fittings
                        LLP </strong> — your trusted partner for alloy steels.
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
                    "name": "What is EN 4140 steel and what are its main features?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN 4140 is a chromium-molybdenum low-alloy steel known for its high tensile strength, toughness, and excellent wear resistance. It can be heat-treated to achieve various mechanical properties and is used in automotive, oil and gas, aerospace, and heavy machinery industries due to its fatigue resistance and ability to perform under high stress."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the chemical and mechanical properties of EN 4140 steel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN 4140 steel contains 0.38–0.43% carbon, 0.80–1.10% chromium, and 0.15–0.25% molybdenum, with controlled amounts of manganese, silicon, phosphorus, and sulfur. Its tensile strength ranges from 586–896 MPa and yield strength from 379–827 MPa depending on heat treatment. It also has elongation up to 30%, Brinell hardness between 150–260, and Rockwell hardness of 80–95 B."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What EN 4140 steel products are supplied by MOKSH TUBES & FITTINGS LLP?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MOKSH TUBES & FITTINGS LLP supplies EN 4140 steel in the form of seamless and welded pipes, tubes, sheets, plates, coils, strips, bars, pipe fittings, flanges, fasteners, and custom-fabricated components. All products comply with international standards and can be customized in size, dimensions, and heat treatment."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the common applications of EN 4140 steel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN 4140 steel is used in the automotive industry for axles, gears, crankshafts, and connecting rods. In oil and gas, it serves pipelines, drilling tools, and high-pressure tubing. Aerospace and mechanical engineering also use it for shafts, bolts, and high-strength machinery parts due to its durability under dynamic loads."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "Why choose MOKSH TUBES & FITTINGS LLP for EN 4140 steel materials?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MOKSH TUBES & FITTINGS LLP is a reliable supplier of EN 4140 steel with a wide stock range, customization options, and global delivery capability. The company offers precision cutting, technical support, and competitive pricing—ensuring consistent quality and customer satisfaction."
                    }
                    }
                ]
                }

            @endverbatim
    </script>
@endsection
