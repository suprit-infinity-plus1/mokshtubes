@extends('layouts.master')

@section('title', 'EN24 Alloy Steel | High Strength & Fatigue Resistant')
@section('meta_description',
    'EN24 Alloy Steel (817M40/AISI 4340) – chemical composition, mechanical properties, and
    applications. Buy EN24 round bars and custom products.')
@section('meta_keywords',
    'EN24 Alloy Steel, high strength alloy steel, fatigue resistant steel, tough alloy steel,
    heavy-duty steel, industrial alloy steel')
@section('og_image', asset('assets/images/engineering-steels/engineering-steels-en24.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/engineering-steels/engineering-steels-en24.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium EN24 Alloy Steel for Heavy Duty Application<br>High-Strength Alloy Steel
                    </h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        EN24 Engineering Steel (EN24 / 817M40 / 1.6511) is a high-strength nickel-chromium-molybdenum alloy
                        steel grade known for exceptional toughness, fatigue resistance, and high tensile strength. Below is
                        the complete datasheet including composition, properties, heat treatment, and applications.

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
                Introduction To Engineering Steel 24 / 817M40 / AISI 4340 STEEL
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-en24.webp') }}"
                        alt="EN24 Alloy Steel Round Bars and Forged Components – Moksh Tubes"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a reliable manufacturer,
                            supplier, and exporter of high quality<strong class="text-black"> EN24 steel <a
                                    href="{{ route('products') }}">products</a>,</strong>
                            including Round Bars, Forgings,
                            Bright Bars, Hex Bars, Flats, Shafts, <a
                                href="{{ route('products.bars-rods.hollow-bars') }}">Hollow Bars</a>, and Custom Components.
                            <a href="{{ url('materials/engineering-steels/engineering-steels-en36') }}">EN36</a>, also known
                            as
                            817M40 or AISI 4340, is a high strength, alloy <a
                                href="{{ url('materials/engineering-steels/engineering-steels-en8') }}"> engineering steel
                                8</a> renowned for its
                            excellent
                            toughness, fatigue strength, and wear resistance. With high tensile strength and good ductility,
                            EN24 is particularly suitable for heavy duty applications requiring high load bearing capacity.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN 24</strong class="text-black">, responds well to heat treatment
                            and exhibits good machinability in its hardened and tempered condition, making it ideal for
                            critical mechanical components. It is widely used in the automotive, aerospace, defense, and
                            general engineering industries.
                        </p>
                        <p class="fw-semibold mt-3"><strong class="text-black">EN24 Alloy Steel Features:</strong
                                class="text-black"></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>High
                                tensile strength and fatigue resistance</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Excellent
                                wear resistance and toughness</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Responds
                                well to heat treatment</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Suitable
                                for shafts, gears, bolts, automotive and aerospace components</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels 24 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels 24 datasheet with chemical composition,
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
                <h2>Engineering Steel EN24 Specifications</h2>
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
                                    <td>EN 24 / 817M40 / AISI 4340</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>High-Strength Alloy Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Chemical Composition</td>
                                    <td>C 0.36–0.44%, Mn 0.60–0.90%, Si 0.15–0.35%, Cr 1.35–1.65%, Ni 1.90–2.20%, Mo
                                        0.20–0.35%, P ≤ 0.035%, S ≤ 0.035%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions</td>
                                    <td>Annealed, Normalized, Hot Rolled, Forged, Quenched & Tempered</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Quenching & Tempering, Stress Relieving, Case Hardening (optional)</td>
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
                <h2>Chemical Composition of EN24 / AISI 4340 Steel</h2>
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
                                    <td>Silicon (Si)</td>
                                    <td>0.10 – 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>0.45 – 0.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>0.90 – 1.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>1.30 – 1.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>0.20 – 0.35</td>
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
                            The balanced Ni–Cr–Mo alloying provides EN24 with exceptional strength,
                            impact toughness, and deep hardenability.
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
                <h2 class="fw-bold" style="color:#174268;">Physical Properties of EN24 Steel</h2>
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
                        Heat Treatment of EN24 / 817M40 Steel
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature</th>
                                    <th>Cooling Method</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>650 – 700 °C</td>
                                    <td>Furnace cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Normalizing</td>
                                    <td>860 – 880 °C</td>
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
                            👉 Achievable hardness after Q&T: <strong>45 – 52 HRC</strong><br>
                            👉 In hardened & tempered condition, EN24 can reach <strong>50+ HRC</strong>
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
                    Mechanical Properties of EN24 Steel
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

                <p class="mt-3 text-center">
                    In hardened & tempered condition, EN24 is suitable for heavily loaded,
                    high-impact engineering applications.
                </p>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – EN24 Steel</h2>
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
                                <td>Blocks, rings, bushings (custom per drawing)</td>
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
                <h2>International Standards & Equivalent Grades of EN24 Steel</h2>
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
                            <td>EN 24</td>
                        </tr>
                        <tr class="t-row">
                            <td>AISI / SAE</td>
                            <td>817M40 / 4340</td>
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
                <h2>Products in Engineering Steel 24</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 24</strong> is typically available in:
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
                        Engineering Steel 24 products are produced to the following global standards:
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
                <h2>Uses and Advantages of EN24 Steel</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>High tensile strength and excellent toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good wear resistance and fatigue strength</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Responds well to quenching and tempering</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Maintains strength and stability under impact loads</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Superior machinability in the hardened and tempered condition</h5>
                    </div>
                </div>
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel 24</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 24 (817M40 / AISI 4340)</strong>
                    is ideal for applications demanding high strength, shock resistance, and fatigue performance:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automotive & Transport</h5>
                        <p>Gear shafts, pinions, drive shafts, and transmission components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Landing gear components, fasteners, structural fittings, and actuators</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Power Generation</h5>
                        <p>Turbine components, high-load shafts, couplings</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Mining & Construction</h5>
                        <p>Drill rods, rock breaker arms, wear-resistant parts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>General Engineering</h5>
                        <p>Hydraulic rams, crankshafts, machine spindles, jigs, and fixtures</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Oil & Gase</h5>
                        <p>Tool joints, pump shafts, downhole components</p>
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
                        <h5>In-House Heat Treatment & Forging Capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strict Dimensional Accuracy and Quality Control</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Quick Delivery and Global Shipping Network</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Customization Available in Size, Finish, and Tolerance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Experienced Team with Metallurgical Expertise</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>EN24 / 817M40 / AISI 4340 Steel Price in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹140 – ₹260 per kg
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
                            <h2>EN24 Steel FAQ's</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is EN24 steel and why is it also known as 817M40 or AISI 4340?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN24, also referred to as 817M40 or AISI 4340, is a high-strength alloy engineering
                                    steel well known for its excellent toughness, wear resistance, and fatigue strength.
                                    It contains chromium, molybdenum, and nickel, which give it superior hardenability and
                                    mechanical properties.
                                    With its high tensile strength, good ductility, and ability to withstand heavy loads,
                                    EN24 is widely used in demanding industrial applications where both strength and
                                    durability are critical.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the chemical and mechanical properties of EN24 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The chemical composition of EN24 includes 0.36–0.44% carbon, 0.90–1.40% chromium,
                                    0.20–0.35% molybdenum, 1.30–1.80% nickel, 0.45–0.70% manganese, and 0.10–0.35% silicon,
                                    with low levels of phosphorus and sulfur.
                                    It provides tensile strength in the range of 85–130 ksi (586–896 MPa), yield strength
                                    between 50–110 ksi (345–758 MPa), and elongation of 12–25%.
                                    The steel also has a Brinell hardness between 150–270 depending on condition and
                                    responds well to quenching and tempering, making it suitable for high performance parts.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What EN24 steel products are offered by MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies a wide range of EN24 products such as round bars,
                                    bright bars, hex bars, flat bars, shafts, forgings, hollow bars, seamless and welded
                                    pipes, tubes, flanges, fittings, fasteners, sheets, plates, coils, strips, and
                                    custom-fabricated components.
                                    These products are produced to international standards and can be delivered in annealed,
                                    hot finished, cold drawn, or quenched and tempered conditions, ensuring precise
                                    performance for industrial applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the common applications of EN24 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN24 steel is widely used in industries such as automotive, aerospace, defense, power
                                    generation, construction, mining, oil and gas, and general engineering.
                                    In automotive and transport, it is used for gear shafts, pinions, drive shafts, and
                                    transmission parts.
                                    In aerospace and defense, it is applied in landing gear, actuators, fasteners, and
                                    structural fittings.
                                    For power generation, it is used in turbine shafts and couplings, while in oil and gas,
                                    it is used for pump shafts, tool joints, and downhole components.
                                    Its toughness also makes it suitable for mining equipment, hydraulic rams, and heavy
                                    engineering machinery.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EN24 steel products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, exporter, and stockist of EN24
                                    steel products, offering in-house heat treatment, forging, CNC machining, and custom
                                    processing to meet client specific requirements.
                                    With strict dimensional accuracy, ISO-certified quality control, quick delivery, and a
                                    strong global supply network, the company ensures consistent performance and
                                    reliability.
                                    Customers also benefit from custom sizing, special finishes, and expert metallurgical
                                    support, making MOKSH TUBES & FITTINGS LLP a preferred partner for high quality EN24
                                    steel solutions.
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
                    </strong> — Your Trusted Source for EN24 Alloy Steel Products
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
                "name": "What is EN24 steel and why is it also known as 817M40 or AISI 4340?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN24, also known as 817M40 or AISI 4340, is a high-strength alloy engineering steel recognized for its toughness, wear resistance, and fatigue strength. It contains chromium, molybdenum, and nickel, which enhance its hardenability and mechanical performance. With excellent tensile strength, ductility, and load-bearing capacity, EN24 is ideal for demanding industrial applications requiring strength and durability."
                }
                },
                {
                "@type": "Question",
                "name": "What are the chemical and mechanical properties of EN24 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN24 steel has 0.36–0.44% carbon, 0.90–1.40% chromium, 0.20–0.35% molybdenum, 1.30–1.80% nickel, 0.45–0.70% manganese, and 0.10–0.35% silicon, with low phosphorus and sulfur. It offers tensile strength between 85–130 ksi, yield strength of 50–110 ksi, elongation of 12–25%, and Brinell hardness of 150–270 depending on condition. It performs well under quenching and tempering for high-performance parts."
                }
                },
                {
                "@type": "Question",
                "name": "What EN24 steel products are offered by MOKSH TUBES & FITTINGS LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP supplies EN24 round bars, bright bars, hex bars, flat bars, shafts, forgings, hollow bars, seamless and welded pipes, tubes, flanges, fittings, fasteners, sheets, plates, coils, strips, and custom components. All products meet international standards and are available in annealed, hot finished, cold drawn, or quenched and tempered conditions."
                }
                },
                {
                "@type": "Question",
                "name": "What are the common applications of EN24 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN24 steel is used in automotive, aerospace, defense, power generation, mining, oil and gas, and construction industries. Applications include gear shafts, pinions, drive shafts, transmission parts, landing gear, actuators, turbine shafts, pump shafts, tool joints, and heavy machinery components."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for EN24 steel products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a reliable manufacturer, exporter, and stockist of EN24 steel products, offering in-house heat treatment, forging, CNC machining, and custom processing. With ISO-certified quality control, accurate dimensions, and fast delivery, the company ensures consistent performance and provides expert metallurgical support with custom sizes and finishes."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
