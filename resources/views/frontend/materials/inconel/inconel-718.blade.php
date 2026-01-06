@extends('layouts.master')

@section('title', 'Inconel 718 – High-Strength Alloy for Extreme Loads') <!-- 53 chars -->
@section('meta_description',
    'Inconel 718 offers superior tensile strength, fatigue, and oxidation resistance—ideal for
    aerospace, turbines, and energy sectors.')
@section('meta_keywords',
    'Inconel 718, High-Strength Alloy, Extreme Load Alloys, Nickel Alloys, Aerospace Alloys,
    Turbine Alloys, Energy Sector Alloys, Fatigue Resistant Alloys, Oxidation Resistant Alloys, Corrosion Resistant Alloys')
@section('og_image', asset('assets/images/inconel/Inconel-718.webp'))
@section('og_type', 'article')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/inconel/Inconel-718.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Inconel 718 <br> High-Strength & Corrosion Resistant Alloy</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        INCONEL® 718 is a high-performance superalloy offering extreme strength, excellent corrosion
                        resistance, and outstanding weldability from cryogenic temperatures up to 700°C (1290°F). Below is
                        the full datasheet following your Master Material Page Blade Format.</p>
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
                Introduction To Inconel 718 / Alloy 718 / UNS N07718 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/inconel/Inconel-718.webp') }}" alt="Inconel 718"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> proudly manufactures, supplies,
                            exports, and stocks a wide range of<strong class="text-black"> INCONEL 718</strong> (UNS N07718)
                            products. These include <a href="{{ route('products.pipes-tubes') }}">Pipes &
                                Tubes</a>, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars,
                            Flat Bars,
                            Angles, Channels, Welding Rods, Wire Mesh, and other custom and difficult-to-source Alloy 718
                            components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">INCONEL 718</strong class="text-black"> is a <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> chromium <a
                                href="{{ route('materials.hastelloy') }}">alloy</a>
                            known for its excellent high strength, corrosion resistance, and weldability, particularly in
                            high temperature environments ranging from cryogenic up to 700°C (1290°F). A key advantage
                            of<strong class="text-black">
                                INCONEL 718</strong> is its ability to be precipitation hardened, providing high tensile,
                            fatigue, creep,
                            and rupture strength. It is highly resistant to post-weld cracking, oxidation, and a wide range
                            of corrosive environments. These properties make it ideal for use in the aerospace, marine,
                            chemical processing, and power generation industries.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Inconel 718 Datasheet</h3>
            <p class="mb-3">
                Get the complete Inconel 718 datasheet with chemical composition,
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
    <section id="overview"  class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>INCONEL 718 Specifications</h2>
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
                                    <td>INCONEL® 718</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS</td>
                                    <td>N07718</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Family</td>
                                    <td>Nickel-Based Superalloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Condition Supplied</td>
                                    <td>Solution Annealed, Aged, Cold Worked</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Solution Annealed + Aged</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Welding</td>
                                    <td>Excellent (No post-weld cracking)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>Chemical, Mechanical, PMI, UT / RT (on request)</td>
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

    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of INCONEL 718</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Range (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Nickel (Ni + Co)</td>
                                    <td>50.0 – 55.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>17.0 – 21.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Niobium (Nb + Ta)</td>
                                    <td>4.75 – 5.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>2.80 – 3.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium (Ti)</td>
                                    <td>0.65 – 1.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum (Al)</td>
                                    <td>0.20 – 0.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt (Co)</td>
                                    <td>≤ 1.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>≤ 0.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>≤ 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.015</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.015</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Boron (B)</td>
                                    <td>≤ 0.006</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper (Cu)</td>
                                    <td>≤ 0.30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Composition of Alloy 718</h2>
            </div>
            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Alloy 718
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Condition</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>Annealed</td>
                                    <td>0.296 lb/in³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>Annealed &amp; Aged</td>
                                    <td>0.297 lb/in³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>—</td>
                                    <td>2300–2437°F (1260–1336°C)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>—</td>
                                    <td>0.104 Btu/lb°F (435 J/kg°C)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>Annealed</td>
                                    <td>-320°F (&lt; –196°C)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>Aged</td>
                                    <td>-170°F (–112°C)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability @ 200 Oersted</td>
                                    <td>Annealed</td>
                                    <td>1.0013</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability @ 200 Oersted</td>
                                    <td>Aged</td>
                                    <td>1.0011</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Heat Treatment of INCONEL 718
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
                            <tbody>
                                <tr class="t-row">
                                    <td>Solution Annealing</td>
                                    <td>940 – 980°C</td>
                                    <td>Dissolves precipitates, restores ductility</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aging (Single)</td>
                                    <td>720°C → 620°C</td>
                                    <td>Develops high strength</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Double Aging</td>
                                    <td>720°C + 620°C</td>
                                    <td>Improves creep &amp; fatigue resistance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>600 – 650°C</td>
                                    <td>Dimensional stability</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            INCONEL 718 achieves strength only through precipitation hardening.
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
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties of Inconel 718</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Condition</th>
                            <th>Tensile Strength</th>
                            <th>Yield Strength</th>
                            <th>Elongation</th>
                            <th>Hardness</th>
                            <th>Impact Strength</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Cold Worked + Solution Annealed + Aged</td>
                            <td>High</td>
                            <td>High</td>
                            <td>40–30%</td>
                            <td>High</td>
                            <td>≥ 20 ft-lb</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hot Worked + Solution Annealed + Aged</td>
                            <td>High</td>
                            <td>High</td>
                            <td>40–30%</td>
                            <td>High</td>
                            <td>≥ 20 ft-lb</td>
                        </tr>
                        <tr class="t-row">
                            <td>Heavy Section (203–254 mm)</td>
                            <td>Slightly Lower</td>
                            <td>Slightly Lower</td>
                            <td>25%</td>
                            <td>High</td>
                            <td>≥ 20 ft-lb</td>
                        </tr>
                    </tbody>
                </table>
                <p class="mt-3 text-center">
                    INCONEL 718 provides exceptional creep rupture strength, fatigue life, and fracture toughness.
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
                        We supply Inconel 718 in the following product forms and dimensions:
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color:#db7227;">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Product Form</th>
                                    <th>Size Range</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Round Bars / Rods</td>
                                    <td>6 mm – 450 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sheets &amp; Plates</td>
                                    <td>0.5 mm – 60 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Coils &amp; Strips</td>
                                    <td>0.1 mm – 6 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pipes &amp; Tubes</td>
                                    <td>OD 6 mm – 630 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wires</td>
                                    <td>0.1 mm – 12 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Forgings</td>
                                    <td>As per drawing</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Fasteners</td>
                                    <td>M6 – M100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Standards & Equivalent Grades Section -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>N07718</td>
                        </tr>
                        <tr class="t-row">
                            <td>W.Nr</td>
                            <td>2.4668</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>NiCr19NbMo</td>
                        </tr>
                        <tr class="t-row">
                            <td>AMS</td>
                            <td>5662 / 5663 / 5664</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>NiCr19NbMo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End Standards & Equivalent Grades Section -->

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
                <h2>Products in Inconel 718</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">INCONEL 718 </strong>products suitable for high-stress, high-temperature,
                        and cryogenic applications. These products are widely used in aerospace, power generation, oil &
                        gas, chemical processing, and marine engineering.
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


    <section id="uses"  class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Outstanding strength and durability across a wide temperature range</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Precipitation hardenable for enhanced mechanical performance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent weldability without post-weld cracking</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High resistance to stress corrosion cracking, pitting, and crevice corrosion</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Exceptional fatigue and creep-rupture strength</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Inconel 600</h2>
                <p class="text-center pb-3"><strong class="text-dark">Inconel 718</strong> is a precipitation-hardenable
                    nickel-chromium alloy known for its outstanding strength, corrosion resistance, and creep-rupture
                    performance at temperatures up to 700°C (1290°F). Its unique ability to combine weldability, high yield
                    strength, and resistance to oxidation makes it a trusted material for mission-critical components across
                    multiple industries.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace and Jet Engines</h5>
                        <p>Used extensively in turbine discs, compressor blades, engine casings, fasteners, and exhaust
                            parts. INCONEL 718 maintains strength and fatigue resistance under extreme conditions, making it
                            ideal for flight-critical components.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Gas Turbines and Power Generation</h5>
                        <p>Applied in land-based turbines, transition ducts, combustion liners, and hardware that must
                            endure prolonged exposure to high heat and pressure.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Nuclear and Marine Applications</h5>
                        <p>Selected for components like core support structures, reactor pressure boundaries, springs, and
                            fasteners that require high strength and stability in corrosive or radioactive environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Automotive and Motorsports</h5>
                        <p>Employed in turbocharger rotors, exhaust valves, and high-performance engine components where
                            resistance to heat and mechanical stress is critical.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Oil and Gas Exploration</h5>
                        <p>Commonly used in downhole tools, wellhead equipment, fasteners, and mandrels. INCONEL 718
                            performs exceptionally well in high-pressure, high-temperature (HPHT) wells and corrosive
                            environments containing hydrogen sulfide and chlorides.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Cryogenic Storage and Transportation</h5>
                        <p>Thanks to its excellent toughness and ductility at low temperatures, it’s often used in cryogenic
                            vessels, valves, and structural parts for liquefied gas systems.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Chemical Processing Equipmen</h5>
                        <p>Used in heat exchangers, reactor vessels, and processing units where both strength and corrosion
                            resistance are needed in acidic and oxidizing chemical environments</p>
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
                        <h5>Unmatched expertise in high-performance nickel alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Wide inventory of hard-to-source materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Custom solutions with precision engineering</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>International shipping and quick turnaround</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Total quality control and compliance with global standards</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>INCONEL 718 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹4,800 – ₹8,500 per kg
            </p>
            <p class="text-center mb-2">
                 (Price depends on form, size, heat treatment & certification)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>

    <!--Start faq content area-->
    <section  id="faq" class="faq-content-area sec-padd2">
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
                                <h4>What is Inconel 718 and what makes it special?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 718 (UNS N07718) is a high-performance nickel-chromium alloy known for its
                                    outstanding strength, corrosion resistance, and weldability in extreme temperature
                                    environments. Unlike many other alloys, Inconel 718 can be precipitation hardened, which
                                    gives it superior tensile, fatigue, creep, and rupture strength. It performs reliably
                                    from cryogenic temperatures up to 700°C (1290°F) while resisting oxidation, post weld
                                    cracking, and corrosive attack, making it a preferred material for aerospace, marine,
                                    chemical processing, and power generation industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is Inconel 718 commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 718 is widely applied across industries that demand both mechanical strength and
                                    corrosion resistance. In aerospace, it is used for turbine discs, compressor blades,
                                    casings, and fasteners. Power generation plants rely on it for gas turbines, transition
                                    ducts, and combustion hardware. It also plays a key role in nuclear and marine
                                    components, automotive and motorsport engine parts, oil and gas exploration tools,
                                    cryogenic storage systems, and chemical processing equipment where long term stability
                                    in aggressive environments is crucial.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key advantages of Inconel 718?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The main advantages of Inconel 718 include its outstanding strength across a wide
                                    temperature range, excellent weldability without post-weld cracking, and its ability to
                                    be precipitation hardened for enhanced mechanical performance. It offers superior
                                    resistance to stress corrosion cracking, pitting, and crevice corrosion while
                                    maintaining exceptional fatigue and creep-rupture strength. These properties make it
                                    highly durable and cost effective for industries where materials must withstand high
                                    pressure, extreme heat, and chemically aggressive conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How does the chemical composition of Inconel 718 enhance its performance?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The chemical composition of Inconel 718 includes 50–55% nickel, 17–21% chromium, and
                                    controlled additions of niobium, molybdenum, titanium, and aluminum, with iron making up
                                    the balance. The nickel chromium base provides superior corrosion resistance in
                                    oxidizing and reducing environments, while niobium and molybdenum contribute to
                                    precipitation hardening for improved strength. Titanium and aluminum enhance creep
                                    resistance and structural stability, giving Inconel 718 the ability to maintain its
                                    mechanical properties under extreme operating conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Inconel 718 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted global manufacturer, supplier, exporter,
                                    importer, and stockist of Inconel 718 products in various forms, including pipes, tubes,
                                    fittings, flanges, fasteners, sheets, plates, coils, wires, bars, and custom-fabricated
                                    components. With unmatched expertise in high performance nickel alloys, a wide inventory
                                    of rare materials, advanced engineering capabilities, and a strong international supply
                                    chain, the company ensures timely delivery and top-quality products. Customers prefer
                                    Moksh Tubes & Fittings LLP for its commitment to precision, reliability, and global
                                    compliance standards in every Inconel 718 solution.
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
                    For quotes, custom orders, or technical support, reach out to <strong>Moksh Tubes & Fittings
                        LLP</strong> your reliable supplier of INCONEL 718 products built for precision, strength, and
                    performance in demanding applications.
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
                        "name": "What is Inconel 718 and what makes it special?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 718 (UNS N07718) is a high-performance nickel-chromium alloy known for its outstanding strength, corrosion resistance, and weldability in extreme temperature environments. It can be precipitation hardened, giving it superior tensile, fatigue, creep, and rupture strength. It performs reliably from cryogenic temperatures up to 700°C (1290°F) while resisting oxidation and corrosive attack, making it ideal for aerospace, marine, chemical, and power industries."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Where is Inconel 718 commonly used?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 718 is used in aerospace for turbine discs, compressor blades, and casings; in power generation for gas turbines and combustion hardware; and in nuclear, marine, automotive, oil & gas, and chemical industries where strength and corrosion resistance are vital."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the key advantages of Inconel 718?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 718 offers excellent strength across a wide temperature range, superior weldability without cracking, and precipitation hardening capability. It resists stress corrosion cracking, pitting, and oxidation while maintaining fatigue and creep-rupture strength under extreme conditions."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How does the chemical composition of Inconel 718 enhance its performance?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 718 contains nickel (50–55%), chromium (17–21%), and controlled amounts of niobium, molybdenum, titanium, and aluminum. This composition provides corrosion resistance, precipitation hardening, and creep resistance, ensuring stability under high stress and temperature."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose Moksh Tubes & Fittings LLP for Inconel 718 products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP manufactures, supplies, and exports Inconel 718 in multiple forms such as pipes, tubes, fittings, flanges, fasteners, sheets, and custom components. The company is known for high-quality materials, global standards, and reliable delivery."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
