@extends('layouts.master')

@section('title', 'EN8 Steel (080M40) – Composition, Properties & Applications')
@section('meta_description',
    'EN8 steel (080M40) – chemical composition, properties, and uses. Learn if EN8 is mild
    steel and view the full datasheet from Moksh Tubes.')
@section('meta_keywords',
    'EN8 Engineering Steel, medium carbon steel, good tensile strength steel, machinable steel,
    general engineering steel, industrial steel')
@section('og_image', asset('assets/images/engineering-steels/engineering-steels-en8.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/engineering-steels/engineering-steels-en8.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>EN8 Steel – Chemical Composition, Properties, and Applications<br>Medium Alloy Steel</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        EN8 / 080M40 / AISI 1040 is a medium carbon steel grade known for its high tensile strength, good
                        toughness, and excellent machinability. It offers reliable performance in applications requiring
                        better strength than mild steel and can be improved further through heat treatment. Commonly used
                        for shafts, axles, gears, studs, and general engineering components.
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

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Overview of EN8 / 080M40 / AISI 1040 Steel</h2>
            </div>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Engineering Steel 8 / 080M40 / AISI 1040
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-en8.webp') }}"
                        alt="EN8 steel bars and tubes - Moksh Tubes India" loading="lazy"
                        class="img-fluid rounded shadow-sm">

                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 text-justify" style="text-align: justify;">
                            <strong class="text-black">
                                <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a>
                            </strong> is a trusted manufacturer, exporter, and stockist of
                            <strong class="text-black">EN8 Steel products</strong>, including
                            Pipes, <a href="{{ route('products.pipes-tubes') }}">Tubes</a>, Round Bars, Flats, Squares,
                            Forged Bars, Shafts, Sheets, Plates, Pipe Fittings, and Custom Machined Components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN8</strong> is a medium carbon steel grade
                            (approximately 0.40% carbon) known for its high tensile strength and good machinability.
                            It is widely used in engineering applications that require better mechanical properties than
                            mild steel.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            EN8 offers moderate wear resistance and excellent toughness, making it ideal for manufacturing
                            shafts, axles, gears, bolts, studs,
                            automotive parts, and other general-purpose
                            <a href="{{ route('materials.engineering-Steels') }}">engineering</a> components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Also known as <strong>080M40</strong> or <strong>AISI 1040</strong>, EN8 steel provides a
                            reliable balance of strength, hardness, and machinability,
                            making it one of the most popular choices among medium carbon steel grades.
                        </p>

                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h2 class="mb-3" style="color:#174268;">Download EN8 Steel Datasheet</h2>
            <p class="mb-3">
                Get the complete EN8 Steel datasheet with chemical composition,
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
                <h2>Engineering Steel EN8 Specifications</h2>
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
                                    <td>EN 8 / C35 / SAE 1040</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Medium Carbon Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Chemical Composition</td>
                                    <td>C 0.36–0.44%, Mn 0.60–0.90%, P ≤ 0.040%, S ≤ 0.050%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions</td>
                                    <td>Annealed, Normalized, Hot Rolled, Cold Drawn</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Quenching & Tempering, Stress Relieving</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>Tensile, Hardness, Chemical, UT (on request)</td>
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
                <h2>Chemical Composition of EN8 Steel</h2>
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
                                    <td>0.36 – 0.44</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>0.60 – 1.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 0.05</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.05</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.05</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            EN8’s medium carbon content provides higher strength, hardness, and wear resistance compared to
                            mild steel.
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
                <h2 class="fw-bold" style="color:#174268;">Physical Properties of EN8 Steel</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Metric Units</th>
                                    <th>Imperial Units</th>
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
                                    <td>Modulus of Elasticity (Tension)</td>
                                    <td>200 GPa</td>
                                    <td>29,000 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (Torsion)</td>
                                    <td>79 GPa</td>
                                    <td>11,500 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.29</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>44 W/m·K</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat Capacity</td>
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
                        Heat Treatment of EN8 Steel
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
                                    <td>Slow furnace cooling</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Normalizing</td>
                                    <td>840 – 860 °C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardening</td>
                                    <td>800 – 820 °C</td>
                                    <td>Oil or water quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tempering</td>
                                    <td>150 – 400 °C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Flame / Induction Hardening</td>
                                    <td>Up to 50 – 55 HRC</td>
                                    <td>Localized heating</td>
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
                    Mechanical Properties of EN8 Steel
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
                            <td>517–586</td>
                            <td>586–758</td>
                            <td>620–758</td>
                            <td>517–620</td>
                            <td>482–586</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (MPa)</td>
                            <td>241–345</td>
                            <td>345–552</td>
                            <td>414–552</td>
                            <td>241–379</td>
                            <td>207–345</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>25–30</td>
                            <td>15–25</td>
                            <td>15–20</td>
                            <td>20–25</td>
                            <td>20–30</td>
                        </tr>
                        <tr class="t-row">
                            <td>Brinell Hardness (HB)</td>
                            <td>130–160</td>
                            <td>160–210</td>
                            <td>160–190</td>
                            <td>130–160</td>
                            <td>—</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>70–80 B</td>
                            <td>80–90 B</td>
                            <td>80–90 B</td>
                            <td>70–80 B</td>
                            <td>70–80 B</td>
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
                <h2>Available Forms & Size Range – EN8 Steel</h2>
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
                <h2>International Standards & Equivalent Grades of EN8 Steel</h2>
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
                            <td>EN 8</td>
                        </tr>
                        <tr class="t-row">
                            <td>AISI / SAE</td>
                            <td>C35 / 1040</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>CK35</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>S35C</td>
                        </tr>
                        <tr class="t-row">
                            <td>GB</td>
                            <td>35</td>
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
                <h2>Available Products in EN8 Steel</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 8</strong> is typically available in:
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
                        Engineering Steel 8 products are produced to the following global standards:
                    </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row g-4">
                @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <div class="mx-auto" style="width: 100%; max-width: 300px;">
                            <a href="{{ route($product['route']) }}" class="text-decoration-none">
                                <div class="product-card h-100">
                                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                        class="img-fluid  w-100">
                                    <h4 class="product-card-title text-center mt-2 px-2">{{ $product['name'] }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages of EN8 Steel</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h3>Higher strength than mild steel (EN3B)</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h3>Readily machinable and weldable</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h3>Cost-effective for structural and automotive use</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h3>Moderate wear and fatigue resistance</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of EN8 Steel</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 8</strong> is widely used in
                    mechanical <a href="{{ route('materials.engineering-Steels') }}">engineering</a> for parts that need
                    better mechanical strength than mild steel but don’t require
                    high hardenability or extreme corrosion resistance.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h3>Automotive Components</h3>
                        <p>Axles, crankshafts, connecting rods, gear shafts, studs
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h3>Mechanical Engineering</h3>
                        <p>Keys, keyways, couplings, spindles, and general-purpose machinery parts
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h3>Industrial Equipment</h3>
                        <p>Rollers, cams, and press tools</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h3>Oil & Gas and Petrochemical</h3>
                        <p>Non-corrosive structural and pipeline components needing wear resistance</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h3>Agricultural Equipment</h3>
                        <p>Drive shafts, rotors, and agricultural blades
                        </p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h3>Medical and Pharmaceutical Equipment</h3>
                        <p>Favored for surgical tools, implants, and cleanroom processing systems because of its purity and
                            biocompatibility.</p>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-4">
                <div class="application-card">
                     <div class="application-icon"><i class="bi bi-strategies"></i></div>
                    <h3>Why It Works</h3>
                    <p><strong>HASTELLOY C276’s</strong> combination of corrosion resistance, weldability, and mechanical durability makes it ideal for mission-critical applications where long-term performance is non-negotiable.</p>
                </div>
            </div> --}}
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h3>In-house stock of a wide range of EN8 products</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h3>Precision machining and cut-to-size capabilities</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h3>Experienced technical team for material selection</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h3>On-time delivery and quality assurance</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h3>Global export and competitive pricing</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>EN8 Steel Price in India </h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹75 – ₹140 per kg
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
                            <h2>Frequently Asked Questions (FAQ)</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>What is EN8 steel and why is it widely used in engineering?</h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN8 is a medium carbon steel grade containing about 0.40% carbon, known for its high
                                    tensile strength and good machinability.
                                    It provides better mechanical properties than mild steel, with moderate wear resistance
                                    and toughness, making it ideal for automotive parts, shafts, axles, gears, bolts, studs,
                                    and general engineering components.
                                    Its balance of strength, cost effectiveness, and machinability makes it one of the most
                                    commonly used steels in mechanical and structural applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>What are the key chemical and mechanical properties of EN8 steel?</h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN8 steel has a chemical composition of 0.36–0.44% carbon, 0.60–1.00% manganese, and
                                    very low levels of phosphorus, sulfur, and silicon, with the balance being iron.
                                    It exhibits tensile strength ranging from 75–110 ksi (517–758 MPa), yield strength of
                                    35–80 ksi (241–552 MPa), and elongation between 15–30% depending on processing
                                    condition.
                                    Its hardness is typically 130–210 Brinell and 70–90 Rockwell B, giving EN8 steel a
                                    combination of strength, machinability, and moderate wear resistance suitable for
                                    demanding applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>What EN8 steel products are available from MOKSH TUBES & FITTINGS LLP?</h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies EN8 steel in various product forms including
                                    seamless and welded pipes, tubes, round bars, flat bars, square bars, hex bars, forged
                                    bars, and shafts.
                                    The company also offers EN8 steel in sheets, plates, coils, strips, pipe fittings,
                                    flanges, fasteners, and custom-fabricated or machined components.
                                    All products conform to international standards and can be supplied in both standard
                                    sizes and tailored specifications to meet diverse industry requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>What are the common applications of EN8 steel?</h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN8 steel is extensively used in automotive components such as axles, crankshafts,
                                    connecting rods, and gear shafts.
                                    In mechanical engineering, it is applied for keys, keyways, couplings, spindles, and
                                    general-purpose machinery parts.
                                    It is also used in industrial equipment like rollers, cams, and press tools, as well as
                                    in agricultural machinery including drive shafts, rotors, and blades.
                                    In the oil and gas sector, EN8 finds applications in non-corrosive structural parts and
                                    pipeline components where moderate wear resistance is required.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Why choose MOKSH TUBES & FITTINGS LLP for EN8 steel materials?</h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted global manufacturer and supplier of EN8 steel
                                    with a wide in-house stock covering multiple forms and dimensions.
                                    The company provides precision machining, cut to size services, and technical guidance
                                    for material selection.
                                    With a focus on quality assurance, timely delivery, and competitive pricing, MOKSH TUBES
                                    & FITTINGS LLP ensures reliable supply of EN8 steel products tailored to engineering,
                                    automotive, and industrial applications worldwide.
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
                <h2>Contact Moksh Tubes for EN8 Steel</h2>
                <p>
                    contact <strong> Moksh Tubes & Fittings LLP </strong> — today for competitive quotes, technical
                    consultation, and custom solutions.
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

{{-- @section('jsscripts')
    <script type="application/ld+json">
        {!! json_encode([
        "@context" => "https://schema.org",
        "@graph" => [

            // ✅ Product Schema
            [
            "@type" => "Product",
            "name" => "EN8 Steel (080M40) – Medium Carbon Steel",
            "image" => [ asset('assets/images/engineering-steels/engineering-steels-en8.webp') ],
            "description" => "EN8 steel (080M40) is a medium carbon engineering steel with excellent tensile strength and good machinability. Supplied by Moksh Tubes & Fittings LLP in pipes, tubes, bars, sheets, plates, and custom components.",
            "sku" => "EN8-080M40",
            "mpn" => "1040",
            "brand" => [
                "@type" => "Brand",
                "name" => "Moksh Tubes & Fittings LLP"
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "Moksh Tubes & Fittings LLP",
                "logo" => asset('assets/images/logo.webp'),
                "url" => route('index'),
                "contactPoint" => [
                "@type" => "ContactPoint",
                "telephone" => "+91-XXXXXXXXXX",
                "contactType" => "sales",
                "areaServed" => "Worldwide",
                "availableLanguage" => ["English"]
                ],
                "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "Mumbai, Maharashtra, India",
                "addressLocality" => "Mumbai",
                "addressRegion" => "MH",
                "postalCode" => "400004",
                "addressCountry" => "IN"
                ]
            ],
            "material" => "Medium Carbon Steel (C40 / 080M40 / AISI 1040)",
            "category" => "Engineering Steel",
            "weight" => "7.85 g/cm³",
            "width" => "Custom sizes available",
            "height" => "Custom sizes available",
            "depth" => "Custom machining available",
            "offers" => [
                "@type" => "Offer",
                "url" => Request::url(),
                "priceCurrency" => "USD",
                "price" => "2.50",
                "priceValidUntil" => "2026-12-31",
                "itemCondition" => "https://schema.org/NewCondition",
                "availability" => "https://schema.org/InStock",
                "seller" => [
                "@type" => "Organization",
                "name" => "Moksh Tubes & Fittings LLP"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.9",
                "reviewCount" => "87"
            ],
            "review" => [
                [
                "@type" => "Review",
                "author" => [
                    "@type" => "Person",
                    "name" => "Rahul Mehta"
                ],
                "datePublished" => "2025-08-12",
                "reviewBody" => "We sourced EN8 round bars from Moksh Tubes and received top quality material with accurate dimensions and timely delivery.",
                "name" => "High-quality EN8 steel supplier",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "5",
                    "bestRating" => "5"
                ]
                ]
            ]
            ],

            // ✅ FAQ Schema
            [
            "@type" => "FAQPage",
            "mainEntity" => [
                [
                "@type" => "Question",
                "name" => "What is EN8 steel and why is it widely used in engineering?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "EN8 is a medium carbon steel grade containing about 0.40% carbon, known for its high tensile strength and good machinability. It provides better mechanical properties than mild steel, with moderate wear resistance and toughness, making it ideal for automotive parts, shafts, axles, gears, bolts, studs, and general engineering components. Its balance of strength, cost effectiveness, and machinability makes it one of the most commonly used steels in mechanical and structural applications."
                ]
                ],
                [
                "@type" => "Question",
                "name" => "What are the key chemical and mechanical properties of EN8 steel?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "EN8 steel has a chemical composition of 0.36–0.44% carbon, 0.60–1.00% manganese, and very low levels of phosphorus, sulfur, and silicon, with the balance being iron. It exhibits tensile strength ranging from 75–110 ksi (517–758 MPa), yield strength of 35–80 ksi (241–552 MPa), and elongation between 15–30% depending on processing condition. Its hardness is typically 130–210 Brinell and 70–90 Rockwell B, giving EN8 steel a combination of strength, machinability, and moderate wear resistance suitable for demanding applications."
                ]
                ],
                [
                "@type" => "Question",
                "name" => "What EN8 steel products are available from MOKSH TUBES & FITTINGS LLP?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "MOKSH TUBES & FITTINGS LLP supplies EN8 steel in various product forms including seamless and welded pipes, tubes, round bars, flat bars, square bars, hex bars, forged bars, and shafts. The company also offers EN8 steel in sheets, plates, coils, strips, pipe fittings, flanges, fasteners, and custom-fabricated or machined components. All products conform to international standards and can be supplied in both standard sizes and tailored specifications to meet diverse industry requirements."
                ]
                ],
                [
                "@type" => "Question",
                "name" => "What are the common applications of EN8 steel?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "EN8 steel is extensively used in automotive components such as axles, crankshafts, connecting rods, and gear shafts. In mechanical engineering, it is applied for keys, keyways, couplings, spindles, and general-purpose machinery parts. It is also used in industrial equipment like rollers, cams, and press tools, as well as in agricultural machinery including drive shafts, rotors, and blades. In the oil and gas sector, EN8 finds applications in non-corrosive structural parts and pipeline components where moderate wear resistance is required."
                ]
                ],
                [
                "@type" => "Question",
                "name" => "Why choose MOKSH TUBES & FITTINGS LLP for EN8 steel materials?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "MOKSH TUBES & FITTINGS LLP is a trusted global manufacturer and supplier of EN8 steel with a wide in-house stock covering multiple forms and dimensions. The company provides precision machining, cut to size services, and technical guidance for material selection. With a focus on quality assurance, timely delivery, and competitive pricing, MOKSH TUBES & FITTINGS LLP ensures reliable supply of EN8 steel products tailored to engineering, automotive, and industrial applications worldwide."
                ]
                ]
            ]
            ]
        ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endsection --}}
